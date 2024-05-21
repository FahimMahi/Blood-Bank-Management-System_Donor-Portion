<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';
include '../Controllers/eventscontroller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events</title>
    <link rel="stylesheet" href="../css/register_event.css">
</head>
<body>
    <h1>Upcoming Events</h1>

    <?php if ($events_result->num_rows > 0): ?>
        <ul class="events-list">
            <?php while ($event = $events_result->fetch_assoc()): ?>
            <li>
                <h2><?php echo $event['event_name']; ?></h2>
                <p><strong>Date:</strong> <?php echo $event['event_date']; ?></p>
                <p><strong>Location:</strong> <?php echo $event['location']; ?></p>
                <p><?php echo $event['description']; ?></p>
                <?php if (in_array($event['event_id'], $registered_events)): ?>
                    <p>Registered</p>
                <?php else: ?>
                    <form method="post" action="../Controllers/register_event.php">
                        <input type="hidden" name="event_id" value="<?php echo $event['event_id']; ?>">
                        <button type="submit" class="button">Register</button>
                    </form>
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No events available.</p>
    <?php endif; ?>

    <a href="dashboard.php" class="button">Back to Dashboard</a>
</body>
</html>
