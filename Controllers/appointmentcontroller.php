<?php
$user_id = $_SESSION['user_id'];

$appointments_sql = "SELECT * FROM appointments WHERE donor_id = $user_id";
$appointments_result = $conn->query($appointments_sql);

$conn->close();
?>
