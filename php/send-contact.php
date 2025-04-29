<?php
// Require database connection
require_once 'db-connect.php';

// Set API keys and configuration
$sendgrid_api_key = 'YOUR_SENDGRID_API_KEY'; // Replace with your actual SendGrid API key
$to_email = 'info@commercelab.in';
$from_email = 'noreply@commercelab.in';
$recaptcha_secret = 'YOUR_RECAPTCHA_SECRET_KEY'; // Replace with your actual reCAPTCHA secret key

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = isset($_POST['phone']) ? filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) : '';
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?: 'New Contact Form Submission';
    $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    // Validate data
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // Verify reCAPTCHA if provided
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $recaptcha_response = $_POST['g-recaptcha-response'];
        
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_data = [
            'secret' => $recaptcha_secret,
            'response' => $recaptcha_response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];
        
        $recaptcha_options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($recaptcha_data)
            ]
        ];
        
        $recaptcha_context = stream_context_create($recaptcha_options);
        $recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
        $recaptcha_json = json_decode($recaptcha_result, true);
        
        if (!$recaptcha_json['success']) {
            $errors[] = "reCAPTCHA verification failed";
        }
    }
    
    // If no errors, save to database and send email
    if (empty($errors)) {
        // Current date and time
        $created_at = date('Y-m-d H:i:s');
        $status = 'pending';
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        
        try {
            // Save to database
            $stmt = $pdo->prepare("INSERT INTO contact_submissions (name, email, phone, subject, message, status, ip_address, user_agent, created_at) 
                                VALUES (:name, :email, :phone, :subject, :message, :status, :ip_address, :user_agent, :created_at)");
            
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':message', $message);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':ip_address', $ip_address);
            $stmt->bindParam(':user_agent', $user_agent);
            $stmt->bindParam(':created_at', $created_at);
            
            $db_success = $stmt->execute();
            
            // Get the submission ID for reference
            $submission_id = $pdo->lastInsertId();
            
            // Send email using SendGrid API
            $email_subject = "New Contact Form Submission #$submission_id: $subject";
            $email_body = "
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                        h2 { color: #336699; }
                        .info-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
                        .info-table td { padding: 10px; border-bottom: 1px solid #eee; }
                        .info-table td:first-child { font-weight: bold; width: 120px; }
                        .message-box { background-color: #f9f9f9; padding: 15px; border-radius: 5px; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <h2>New Contact Form Submission</h2>
                        <p>You've received a new contact form submission from your Commerce Lab website.</p>
                        
                        <table class='info-table'>
                            <tr>
                                <td>Name:</td>
                                <td>$name</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><a href='mailto:$email'>$email</a></td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td>$phone</td>
                            </tr>
                            <tr>
                                <td>Subject:</td>
                                <td>$subject</td>
                            </tr>
                            <tr>
                                <td>Date:</td>
                                <td>$created_at</td>
                            </tr>
                        </table>
                        
                        <p><strong>Message:</strong></p>
                        <div class='message-box'>
                            " . nl2br($message) . "
                        </div>
                    </div>
                </body>
                </html>
            ";
            
            $headers = [
                'Authorization: Bearer ' . $sendgrid_api_key,
                'Content-Type: application/json'
            ];
            
            $data = [
                'personalizations' => [
                    [
                        'to' => [
                            ['email' => $to_email]
                        ]
                    ]
                ],
                'from' => [
                    'email' => $from_email,
                    'name' => 'Commerce Lab Website'
                ],
                'subject' => $email_subject,
                'content' => [
                    [
                        'type' => 'text/html',
                        'value' => $email_body
                    ]
                ],
                'reply_to' => [
                    'email' => $email,
                    'name' => $name
                ]
            ];
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.sendgrid.com/v3/mail/send');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            $email_response = curl_exec($ch);
            $email_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            $email_success = ($email_status == 202);
            
            // If email was sent successfully, update the submission status
            if ($email_success) {
                $update_stmt = $pdo->prepare("UPDATE contact_submissions SET status = 'sent' WHERE id = :id");
                $update_stmt->bindParam(':id', $submission_id);
                $update_stmt->execute();
            }
            
            // Respond with success or error
            header('Content-Type: application/json');
            
            if ($db_success && $email_success) {
                echo json_encode([
                    'success' => true,
                    'message' => 'Thank you for your message. We will get back to you soon!'
                ]);
            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'Your message was received, but there was an error with the email delivery. Our team has been notified.',
                    'debug_info' => $email_success ? null : $email_response
                ]);
            }
        } catch (PDOException $e) {
            // Handle database errors
            header('Content-Type: application/json');
            echo json_encode([
                'success' => false,
                'message' => 'There was a technical issue submitting your form. Please try again later.'
            ]);
            
            // Log error for administrators
            error_log('Contact form database error: ' . $e->getMessage());
        }
    } else {
        // Return validation errors
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Please correct the following errors:',
            'errors' => $errors
        ]);
    }
} else {
    // Not a POST request
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    echo "Method not allowed";
} 