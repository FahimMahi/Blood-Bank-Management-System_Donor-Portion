<?php
include '../Models/database.php';
include '../Controllers/registercontroller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/validation.js" defer></script>
</head>
<body>
    <h2>Donor Registration</h2>
    <form id="registrationForm" method="post" action="register.php">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" >

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" >

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone">

        <label for="blood_group">Blood Group:</label>
        <input type="text" id="blood_group" name="blood_group">

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth">

        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php" class="button">Login Here</a></p>

</body>
</html>
