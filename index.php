<?php import templates/parts/requestHandler.php; ?>

<body>
    <h1>User Login</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>

<?php import templates/parts/footer.php; ?>

</html>
