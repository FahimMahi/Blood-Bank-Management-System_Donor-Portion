<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="dashboard.php">Blood Bank</a>
        </div>
        <div class="menu">
            <a href="dashboard.php" class="active">Dashboard</a>
            <a href="profile.php">Profile</a>
            <a href="appointments.php">Appointments</a>
            <a href="donation_history.php">Donations</a>
            <a href="rewards.php">Rewards</a>
            <a href="notifications.php">Notifications</a>
            <a href="events.php">Events</a>
            <div class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">More</a>
                <div class="dropdown-content">
                    <a href="health_eligibility.php">Health Eligibility</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="about.php">About Us</a>
                </div>
            </div>
        </div>
        <a href="../Controllers/logout.php" class="logout">Logout</a>
    </div>
</body>
</html>
