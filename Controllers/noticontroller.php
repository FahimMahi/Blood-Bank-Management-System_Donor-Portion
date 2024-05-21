<?php
$user_id = $_SESSION['user_id'];

$notifications_sql = "SELECT * FROM notifications WHERE donor_id = $user_id ORDER BY created_at DESC";
$notifications_result = $conn->query($notifications_sql);

$conn->close();
?>
