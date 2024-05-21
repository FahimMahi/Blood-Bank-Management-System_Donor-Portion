<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';
// include '../Controllers/dashboardontroller.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donor Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <!-- <h1>Welcome, <?php echo $donor['first_name'] . ' ' . $donor['last_name']; ?>!</h1> -->

    <section>
        <h2>Donor Dashboard</h2>
        <div class="dashboard-buttons">
            <a href="profile.php" class="button">Profile Information</a>
            <a href="appointments.php" class="button">Manage Appointments</a>
            <a href="donation_history.php" class="button">Donation History</a>
            <!-- <a href="health_eligibility.php" class="button">Health Eligibility</a> -->
            <a href="rewards.php" class="button">Rewards</a>
            <a href="notifications.php" class="button">Notifications</a>
            <a href="events.php" class="button">Upcoming Events</a>
        </div>
    </section>

    <a href="../Controllers/logout.php" class="logout-button">Logout</a>
</body>
</html>
