<?php import './functions.php' ?>

<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // TODO: #1 Validate the username and password
    if (empty($username) || empty($password)) {
        return;
    }

    // TODO: Authenticate the user
    if(checkUserExists($username)) {
        
    }


    // TODO: Redirect to the user's dashboard or display an error message
}
?>