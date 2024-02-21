


<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
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

    <main>
        <section id="Form_Box">
        <h2>Login Form</h2>
        <form method="POST" action="../requestHandler.php">
            <input type="text" id="username" name="username" placeholder="Username" required><br><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br><br>
            <input type="hidden" name="action" value="login">
            <input type="submit" value="Login">
        </form>
        </section>
    </main>
</body>
</html>
