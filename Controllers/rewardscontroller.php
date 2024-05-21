<?php
$user_id = $_SESSION['user_id'];

$rewards_sql = "SELECT * FROM rewards WHERE donor_id = $user_id";
$rewards_result = $conn->query($rewards_sql);
$rewards = $rewards_result->fetch_assoc();

$conn->close();
?>
