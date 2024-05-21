<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';
include '../Controllers/create_donation_controller.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Donation</title>
    <link rel="stylesheet" href="../css/createdona.css">
    <script src="../js/donation_validation.js" defer></script>
</head>
<body>
    <h1>Create Donation</h1>

    <form id="createDonationForm" method="post" action="create_donation.php">
        <label for="donation_date">Donation Date:</label>
        <input type="datetime-local" id="donation_date" name="donation_date" >

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" >

        <label for="units_donated">Units Donated:</label>
        <input type="number" step="0.01" id="units_donated" name="units_donated" >

        <label for="certificate_url">Certificate URL:</label>
        <input type="url" id="certificate_url" name="certificate_url">

        <button type="submit">Create Donation</button>
    </form>

    <a href="donation_history.php">Back to Donation History</a>
</body>
</html>
