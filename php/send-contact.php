<?php
// Contact form handler with database logging only
// Email sending now handled by EmailJS on client-side

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
    
    // If no errors, save to database (email handled by EmailJS)
    if (empty($errors)) {
        // Current date and time
        $created_at = date('Y-m-d H:i:s');
        
        // Try to save to database
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
            // If database connection fails, log the error
            error_log("Database error: " . $e->getMessage());
            $db_success = false;
        }
        
        // Return JSON response (EmailJS handles email sending)
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for your message. We will get back to you soon!',
            'database_saved' => $db_success,
            'note' => 'Email sent via EmailJS'
        ]);
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
?> 