<?php
// Simple contact form handler without database dependency

// Set email destination
$to_email = 'info@commercelab.in';

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
    
    // If no errors, send email
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
        $headers = "From: $email" . "\r\n";
        $headers .= "Reply-To: $email" . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Attempt to send email
        $mail_success = mail($to_email, $email_subject, $email_body, $headers);
        
        // Respond with success or error
        if ($mail_success) {
            // Redirect back to the main page with success query parameter
            header('Location: /?contact=success#contact');
            exit;
        } else {
            // Redirect back with error
            header('Location: /?contact=error#contact');
            exit;
        }
    } else {
        // Redirect back with validation errors
        $error_string = implode(',', $errors);
        header("Location: /?contact=error&message=" . urlencode($error_string) . "#contact");
        exit;
    }
} else {
    // Not a POST request
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    echo "Method not allowed";
} 