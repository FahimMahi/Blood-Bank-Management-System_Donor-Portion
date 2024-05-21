<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';
include '../Controllers/profilecontroller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Information</title>
    <link rel="stylesheet" href="../css/profile.css">
    <script src="../js/profile_validation.js" defer></script>
</head>
<body>
    <h1>Profile Information</h1>

    <?php if (isset($_GET['success'])): ?>
        <p class="success">Profile updated successfully!</p>
    <?php endif; ?>

    <form id="profileForm" method="post" action="profile.php">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $donor['first_name']; ?>" >

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $donor['last_name']; ?>" >

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $donor['email']; ?>" >

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $donor['phone']; ?>">

        <label for="blood_group">Blood Group:</label>
        <input type="text" id="blood_group" name="blood_group" value="<?php echo $donor['blood_group']; ?>">

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" value="<?php echo $donor['date_of_birth']; ?>">

        <button type="submit">Update Profile</button>
    </form>

    <a href="dashboard.php" class="button">Back to Dashboard</a>
</body>
</html>
