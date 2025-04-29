<?php
// Require database connection
require_once 'db-connect.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    
    // Validate data
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // Verify reCAPTCHA
    $recaptcha_secret = "YOUR_RECAPTCHA_SECRET_KEY";
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
    
    // If no errors, save to database and send email
    if (empty($errors)) {
        // Current date and time
        $created_at = date('Y-m-d H:i:s');
        
        // Save to database
        $stmt = $pdo->prepare("INSERT INTO contact_submissions (name, email, phone, subject, message, created_at) 
                              VALUES (:name, :email, :phone, :subject, :message, :created_at)");
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':created_at', $created_at);
        
        $db_success = $stmt->execute();
        
        // Send email using SendGrid API
        $sendgrid_api_key = 'YOUR_SENDGRID_API_KEY';
        $to_email = 'info@commercelab.com';
        $from_email = 'contact@commercelab.com';
        
        $email_subject = "New Contact Form Submission: $subject";
        $email_body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
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
            'from' => ['email' => $from_email],
            'subject' => $email_subject,
            'content' => [
                [
                    'type' => 'text/html',
                    'value' => $email_body
                ]
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
                'message' => 'There was an error sending your message. Please try again later.'
            ]);
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