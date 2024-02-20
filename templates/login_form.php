


<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="login_form.php">Login</a></li>
                <li><a href="register_form.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <h2>Login</h2>
    <form method="POST" action="../requestHandler.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="hidden" name="action" value="login">
        <input type="submit" value="Login">
    </form>
</body>
</html>
