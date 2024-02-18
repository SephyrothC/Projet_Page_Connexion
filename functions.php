
<?php 

// add this code to the requestHandler.php file

function checkUserExists($username) {
    // Replace with your database credentials
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Prepare the SQL query
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = :username");

    // Bind the parameter
    $stmt->bindParam(':username', $username);

    // Execute the query
    $stmt->execute();

    // Fetch the result
    $result = $stmt->fetchColumn();

    // Close the connection
    $conn = null;

    // Return true if the user exists, false otherwise
    return $result > 0;
}

?>

