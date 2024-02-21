<?php
include './functions.php';

// Add the missing import statement
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted
    $action = antixss($_POST['action']);

    if ($action === 'register') {
        // Handle registration
        $username = antixss($_POST['username']);
        $email = antixss($_POST['email']);
        $password = antixss($_POST['password']);

        registerUser($username, $email, $password);

        session_start();
        $_SESSION['username'] = $username;
        header('Location: index.php');
    } elseif ($action === 'login') {
            // Retrieve the form data
        $username = antixss($_POST['username']);
        $password = antixss($_POST['password']);

        // Perform validation and authentication
        if (loginUser($username, $password)) {
            // Successful login
            session_start();
            $_SESSION['username'] = $username;
            header('Location: index.php');
            // echo 'Login successful';
        } else {
            // Invalid credentials
            echo 'Invalid username or password';
        }
    } elseif ($action === 'logout') {
        // Handle logout
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php');
    }
    
}

?>
