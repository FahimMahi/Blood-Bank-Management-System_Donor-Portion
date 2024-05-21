<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';
include '../Controllers/create_appointment_controller.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Appointment</title>
    <link rel="stylesheet" href="../css/app1.css">
    <script src="../js/appointment_validation.js" defer></script>
</head>
<body>
    <h1>Create Appointment</h1>

    <form id="createAppointmentForm" method="post" action="create_appointment.php">
        <label for="appointment_date">Appointment Date:</label>
        <input type="datetime-local" id="appointment_date" name="appointment_date" >

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" >

        <button type="submit">Create Appointment</button>
    </form>

    <a href="appointments.php">Back to Appointments</a>
</body>
</html>
