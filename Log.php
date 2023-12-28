<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>User Login</title>
</head>
<body>
    <?php
    require_once("config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $enteredEmail = $_POST["email"];
        $enteredPassword = $_POST["password"];

        $sql = "SELECT * FROM users WHERE email = '$enteredEmail' AND password = '$enteredPassword'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<p>Login successful!</p>";
        } else {
            echo "<p>Invalid email or password. Please try again.</p>";
        }
    }
    $conn->close();
    ?>

    <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <script src="Login.js"></script>
</body>
</html>
