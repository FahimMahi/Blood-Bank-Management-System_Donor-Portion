<?php
$appointment_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$appointment_sql = "SELECT * FROM appointments WHERE appointment_id = $appointment_id AND donor_id = $user_id";
$appointment_result = $conn->query($appointment_sql);
$appointment = $appointment_result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $appointment_date = $_POST['appointment_date'];
    $location = $_POST['location'];
    $status = $_POST['status'];

    $update_sql = "UPDATE appointments SET appointment_date='$appointment_date', location='$location', status='$status' WHERE appointment_id=$appointment_id AND donor_id=$user_id";

    if ($conn->query($update_sql) === TRUE) {
        header("Location: appointments.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
