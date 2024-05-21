<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}


include '../Models/database.php';
include '../Controllers/noticontroller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notifications</title>
    <link rel="stylesheet" href="../css/noti.css">
</head>
<body>
    <h1>Notifications</h1>

    <?php if ($notifications_result->num_rows > 0): ?>
        <ul class="notifications-list">
            <?php while ($notification = $notifications_result->fetch_assoc()): ?>
            <li class="<?php echo $notification['is_read'] ? '' : 'unread'; ?>">
                <p><strong>Type:</strong> <?php echo $notification['type']; ?></p>
                <p><?php echo $notification['message']; ?></p>
                <p><strong>Date:</strong> <?php echo $notification['created_at']; ?></p>
            </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No notifications available.</p>
    <?php endif; ?>

    <a href="dashboard.php" class="button">Back to Dashboard</a>
</body>
</html>
