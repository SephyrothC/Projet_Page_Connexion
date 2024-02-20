<?php
include './functions.php';

// Add the missing import statement
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted
    $action = $_POST['action'];

    if ($action === 'register') {
        // Handle registration
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        registerUser($username, $email, $password);

        echo 'Registration successful';
    } elseif ($action === 'login') {
            // Retrieve the form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Perform validation and authentication
        if (loginUser($username, $password)) {
            // Successful login
            echo 'Login successful';
        } else {
            // Invalid credentials
            echo 'Invalid username or password';
        }
    }
    
}

?>
