<?php
$user_id = $_SESSION['user_id'];

$events_sql = "SELECT * FROM events ORDER BY event_date DESC";
$events_result = $conn->query($events_sql);

$registered_events_sql = "SELECT event_id FROM event_participants WHERE donor_id = $user_id";
$registered_events_result = $conn->query($registered_events_sql);
$registered_events = [];
while ($row = $registered_events_result->fetch_assoc()) {
    $registered_events[] = $row['event_id'];
}

$conn->close();
?>
