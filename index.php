<?php include "./templates/parts/header.php" ?>




<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="./templates/login_form.php">Login</a></li>
                <li><a href="./templates/register_form.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php session_start();
        if (isset($_SESSION['username'])): ?>
            <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
            <p>You are now logged in</p>
            <form action="./requestHandler.php" method="post">
                <input type="hidden" name="action" value="logout">
                <input type="submit" value="Logout">
            </form>
        <?php else: ?>
            <h1>Welcome to My Website</h1>
            <p>Please login or register to continue</p>
        <?php endif; ?>
    </main>
</body>


<?php include "./templates/parts/footer.php" ?>

</html>
