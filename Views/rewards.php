<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';
include '../Controllers/rewardscontroller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rewards</title>
    <link rel="stylesheet" href="../css/reward.css">
</head>
<body>
    <h1>Rewards</h1>

    <?php if ($rewards): ?>
        <p><strong>Points:</strong> <?php echo $rewards['points']; ?></p>
        <p><strong>Reward Level:</strong> <?php echo $rewards['reward_level']; ?></p>
        <p><strong>Last Updated:</strong> <?php echo $rewards['last_updated']; ?></p>
    <?php else: ?>
        <p>No reward information available.</p>
    <?php endif; ?>

    <a href="dashboard.php" class="button">Back to Dashboard</a>
</body>
</html>
