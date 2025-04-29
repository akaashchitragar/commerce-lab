-- Commerce Lab Database Setup

-- Create database if not exists
CREATE DATABASE IF NOT EXISTS commerce_lab CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Use the database
USE commerce_lab;

-- Contact form submissions table
CREATE TABLE IF NOT EXISTS contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at DATETIME NOT NULL,
    is_read BOOLEAN DEFAULT 0,
    notes TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Newsletter subscribers table
CREATE TABLE IF NOT EXISTS newsletter_subscribers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    name VARCHAR(255),
    subscribed_at DATETIME NOT NULL,
    status ENUM('active', 'unsubscribed') DEFAULT 'active',
    last_updated DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Users table (for admin access)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    full_name VARCHAR(255) NOT NULL,
    role ENUM('admin', 'editor') NOT NULL DEFAULT 'editor',
    created_at DATETIME NOT NULL,
    last_login DATETIME,
    status ENUM('active', 'inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create default admin user (password is 'admin123' - should be changed immediately)
INSERT INTO users (username, password, email, full_name, role, created_at, status)
VALUES 
('admin', '$2y$10$qw7Hn94finshwE3.oMhMEucTfOzx7zNddFNT8M8mpJS7e8IOVvFnS', 'admin@commercelab.com', 'Administrator', 'admin', NOW(), 'active');

-- Services table (for dynamic content)
CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    icon VARCHAR(100),
    display_order INT NOT NULL DEFAULT 0,
    is_active BOOLEAN DEFAULT 1,
    created_at DATETIME NOT NULL,
    updated_at DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Lab features table (for dynamic content)
CREATE TABLE IF NOT EXISTS lab_features (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    category ENUM('workstations', 'software', 'collaboration', 'security', 'networking') NOT NULL,
    icon VARCHAR(100),
    display_order INT NOT NULL DEFAULT 0,
    is_active BOOLEAN DEFAULT 1,
    created_at DATETIME NOT NULL,
    updated_at DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert initial services data
INSERT INTO services (title, description, icon, display_order, is_active, created_at, updated_at)
VALUES 
('Sales and Marketing', 'Lead management, opportunity tracking, and campaign analysis', 'fa-chart-line', 1, 1, NOW(), NOW()),
('Master Scheduling', 'Production planning and resource allocation simulation', 'fa-calendar-alt', 2, 1, NOW(), NOW()),
('Material Requirement Planning', 'Demand forecasting and inventory optimization', 'fa-boxes', 3, 1, NOW(), NOW()),
('Capacity Requirement Planning', 'Resource utilization and capacity management', 'fa-cogs', 4, 1, NOW(), NOW()),
('Bill of Materials', 'Component structure and product engineering', 'fa-clipboard-list', 5, 1, NOW(), NOW()),
('Purchasing', 'Vendor management and procurement optimization', 'fa-shopping-cart', 6, 1, NOW(), NOW()),
('Shop Floor Control', 'Production monitoring and quality assurance', 'fa-industry', 7, 1, NOW(), NOW()),
('Accounts Payable/Receivable', 'Financial transaction processing and records', 'fa-file-invoice-dollar', 8, 1, NOW(), NOW()),
('Logistics', 'Warehousing, distribution, and transportation management', 'fa-truck', 9, 1, NOW(), NOW()),
('Asset Management', 'Equipment tracking and maintenance scheduling', 'fa-toolbox', 10, 1, NOW(), NOW()),
('Financial Accounting', 'General ledger, reporting, and compliance', 'fa-chart-bar', 11, 1, NOW(), NOW());

-- Insert initial lab features data
INSERT INTO lab_features (title, description, category, icon, display_order, is_active, created_at, updated_at)
VALUES 
('High-Performance Computers', 'State-of-the-art workstations with powerful processors and ample memory', 'workstations', 'fa-desktop', 1, 1, NOW(), NOW()),
('Networked Environment', 'Fully connected workstations in a simulated enterprise network', 'workstations', 'fa-network-wired', 2, 1, NOW(), NOW()),
('TallyPrime', 'Latest version of Tally accounting software with GST features', 'software', 'fa-calculator', 3, 1, NOW(), NOW()),
('SAP ERP', 'Industry-standard ERP system with multiple module access', 'software', 'fa-database', 4, 1, NOW(), NOW()),
('Oracle ERP', 'Comprehensive Oracle business suite for enterprise training', 'software', 'fa-server', 5, 1, NOW(), NOW()),
('Power BI & Excel', 'Advanced reporting and data analysis tools', 'software', 'fa-chart-pie', 6, 1, NOW(), NOW()),
('Market Simulation Tools', 'Software for simulating market conditions and business scenarios', 'software', 'fa-chart-line', 7, 1, NOW(), NOW()),
('GST Simulators', 'Tools for practicing GST filing and compliance', 'software', 'fa-file-invoice', 8, 1, NOW(), NOW()),
('Interactive Whiteboards', 'Digital whiteboards for collaborative learning and presentations', 'collaboration', 'fa-chalkboard', 9, 1, NOW(), NOW()),
('Video Conferencing', 'High-definition video conferencing for remote collaboration', 'collaboration', 'fa-video', 10, 1, NOW(), NOW()),
('Data Security Measures', 'Industry-standard security protocols and practices', 'security', 'fa-shield-alt', 11, 1, NOW(), NOW()),
('Access Control', 'Role-based access control systems for data protection', 'security', 'fa-lock', 12, 1, NOW(), NOW()),
('Ergonomic Design', 'Comfortable workstations designed for extended use', 'security', 'fa-chair', 13, 1, NOW(), NOW()),
('Professional Networking', 'Opportunities to connect with industry professionals', 'networking', 'fa-users', 14, 1, NOW(), NOW());

-- Create indexes for better performance
CREATE INDEX idx_contact_email ON contact_submissions(email);
CREATE INDEX idx_contact_created_at ON contact_submissions(created_at);
CREATE INDEX idx_newsletter_email ON newsletter_subscribers(email);
CREATE INDEX idx_services_active ON services(is_active);
CREATE INDEX idx_lab_features_category ON lab_features(category);
CREATE INDEX idx_lab_features_active ON lab_features(is_active); 