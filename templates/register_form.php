<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
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
    
    <h2>Registration Form</h2>
    <form method="POST" action="../requestHandler.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <input type="hidden" name="action" value="register">
        <input type="submit" value="Register">
    </form>
</body>
</html>
