<?php
/**
 * Database Connection
 * 
 * This file handles the connection to the MySQL database.
 */

// Database configuration
$host = 'localhost';
$dbname = 'dcwacvni_commerce_lab';
$username = 'dcwacvni';
$password = '!T~(aJ9gsDlX';
$charset = 'utf8mb4';

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// PDO options for error handling and fetching data
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    // If connection fails, log error (don't display sensitive information)
    error_log('Database connection error: ' . $e->getMessage());
    
    // Return a generic error without exposing sensitive information
    header('HTTP/1.1 500 Internal Server Error');
    exit('Database connection error. Please try again later or contact support.');
} 