<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';

$appointment_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$delete_sql = "DELETE FROM appointments WHERE appointment_id = $appointment_id AND donor_id = $user_id";

if ($conn->query($delete_sql) === TRUE) {
    header("Location: ../Views/appointments.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
