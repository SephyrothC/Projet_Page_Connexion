<?php

// register user function on a JSON file
function registerUser($username, $email, $password) {
    // Create an array with user data
    $user = [
        'username' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ];

    // Read existing user data from JSON file
    $users = [];
    if (file_exists('./templates/JSON/user.json')) {
        $users = json_decode(file_get_contents('./templates/JSON/user.json'), true);
    }

    // Add the new user to the array
    $users[] = $user;

    // Save the updated user data to JSON file
    file_put_contents('./templates/JSON/user.json', json_encode($users));
}

// login user function on a JSON file and verify the password
function loginUser($username, $password) {
    // Read existing user data from JSON file
    $users = [];
    if (file_exists('./templates/JSON/user.json')) {
        $users = json_decode(file_get_contents('./templates/JSON/user.json'), true);
    }

    // Search for the user in the array
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            // Verify the password and return the user
            if (password_verify($password, $user['password'])) {
                return true;
            }
        }
    }

    return false;
}
?>
