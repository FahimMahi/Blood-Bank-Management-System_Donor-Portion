<?php
include '../Models/database.php';
include '../Controllers/logincontroller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/login_validation.js" defer></script>
</head>
<body>
    <h2>Donor Login</h2>
    <form id="loginForm" method="post" action="login.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="register.php" class="button">Register Here</a></p>

</body>
</html>
