<?php
// Simple contact form handler that can work with or without a database

// Set email destination
$to_email = 'info@commercelab.in';

// Set headers for all responses
header('Content-Type: application/json');

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
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
    
    // If no errors, send email and optionally save to database
    if (empty($errors)) {
        // Current date and time
        $created_at = date('Y-m-d H:i:s');
        
        // Prepare email
        $email_subject = "Commerce Lab Contact: $subject";
        $email_body = "
            Name: $name
            Email: $email
            Subject: $subject
            Date: $created_at
            
            Message:
            $message
        ";
        
        // Headers
        $mail_headers = "From: $email" . "\r\n";
        $mail_headers .= "Reply-To: $email" . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion();
        
        // Attempt to send email
        $mail_success = mail($to_email, $email_subject, $email_body, $mail_headers);
        
        // Try to save to database if possible
        $db_success = false;
        
        try {
            // Database configuration 
            $db_config = [
                'host' => 'localhost',
                'name' => 'dcwacvni_commerce_lab',
                'user' => 'dcwacvni',
                'pass' => '!T~(aJ9gsDlX'
            ];
            
            // Create a new PDO instance
            $pdo = new PDO(
                "mysql:host={$db_config['host']};dbname={$db_config['name']};charset=utf8mb4",
                $db_config['user'],
                $db_config['pass'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );
            
            // Insert into contact_submissions table
            $stmt = $pdo->prepare("
                INSERT INTO contact_submissions 
                (name, email, subject, message, status, ip_address, created_at) 
                VALUES (?, ?, ?, ?, 'pending', ?, ?)
            ");
            
            $ip_address = $_SERVER['REMOTE_ADDR'] ?? '';
            
            $db_success = $stmt->execute([
                $name,
                $email,
                $subject,
                $message,
                $ip_address,
                $created_at
            ]);
        } catch (Exception $e) {
            // If database connection fails, log the error but don't inform the user
            error_log("Database error: " . $e->getMessage());
            // We'll still return success if the email was sent
        }
        
        // Return JSON response
        if ($mail_success) {
            echo json_encode([
                'success' => true,
                'message' => 'Thank you for your message. We will get back to you soon!'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'There was a problem sending your message. Please try again later.'
            ]);
        }
    } else {
        // Return validation errors as JSON
        echo json_encode([
            'success' => false,
            'message' => 'Please correct the following errors: ' . implode(', ', $errors),
            'errors' => $errors
        ]);
    }
} else {
    // Not a POST request - return error as JSON
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method not allowed'
    ]);
} 