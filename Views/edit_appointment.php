<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';
include '../Controllers/edit_appointmentcontroller.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Appointment</title>
    <link rel="stylesheet" href="../css/app.css">
    <script src="../js/appointment_validation.js" defer></script>
</head>
<body>
    <h1>Edit Appointment</h1>

    <form id="editAppointmentForm" method="post" action="edit_appointment.php?id=<?php echo $appointment_id; ?>">
        <label for="appointment_date">Appointment Date:</label>
        <input type="datetime-local" id="appointment_date" name="appointment_date" value="<?php echo $appointment['appointment_date']; ?>" required>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="<?php echo $appointment['location']; ?>" required>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Scheduled" <?php if ($appointment['status'] == 'Scheduled') echo 'selected'; ?>>Scheduled</option>
            <option value="Completed" <?php if ($appointment['status'] == 'Completed') echo 'selected'; ?>>Completed</option>
            <option value="Cancelled" <?php if ($appointment['status'] == 'Cancelled') echo 'selected'; ?>>Cancelled</option>
        </select>

        <button type="submit">Update Appointment</button>
    </form>

    <a href="appointments.php">Back to Appointments</a>
</body>
</html>
