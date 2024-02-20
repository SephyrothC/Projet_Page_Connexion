<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../templates/assets/css/login.css">
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
        <input type="text" name="username" id="username" placeholder="Username" required><br><br>

        <input type="email" name="email" id="email" placeholder="Email" required><br><br>

        <input type="password" name="password" id="password" placeholder="Password" required><br><br>
        
        <input type="hidden" name="action" value="register">
        <input type="submit" value="Register">
    </form>
</body>
</html>
