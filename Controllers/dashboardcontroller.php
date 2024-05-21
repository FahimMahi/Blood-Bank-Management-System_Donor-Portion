<?php
$user_id = $_SESSION['user_id'];

$donor_sql = "SELECT * FROM donors WHERE donor_id = $user_id";
$donor_result = $conn->query($donor_sql);
$donor = $donor_result->fetch_assoc();

$conn->close();
?>
