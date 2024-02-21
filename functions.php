<?php



// register user function on a JSON file
function registerUser($username, $email, $password) {
    

    // Create a new PDO instance
    //$pdo = new PDO('mysql:host=localhost;dbname=connexion_page_proj', 'root', '');
    include "./templates/DB/db.php";

    // Prepare the SQL statement
    $statement = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Execute the statement with the user data
    $statement->execute([$username, $email, $hashedPassword]);
}

function loginUser($username, $password) {
    // Create a new PDO instance
    // $pdo = new PDO('mysql:host=localhost;dbname=your_database_name', 'your_username', 'your_password');
    include "./templates/DB/db.php";

    // Prepare the SQL statement
    $statement = $pdo->prepare('SELECT * FROM users WHERE username = ?');

    // Execute the statement with the username
    $statement->execute([$username]);

    // Fetch the user data
    $user = $statement->fetch();

    //affiche le contenu de la variable $user
    //var_dump($user);

    // Verify the password and return the user
    if ($user && password_verify($password, $user->password)) {
        return true;
    }

    return false;
}

function antixss($input) {
    $new = strip_tags($input);
    $new = htmlspecialchars($new, ENT_QUOTES);
    return $new;
}
