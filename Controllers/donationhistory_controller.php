<?php
$user_id = $_SESSION['user_id'];

$donations_sql = "SELECT * FROM donation_history WHERE donor_id = $user_id";
$donations_result = $conn->query($donations_sql);

$conn->close();
?>
