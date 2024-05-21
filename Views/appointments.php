<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';

include '../Controllers/appointmentcontroller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Appointments</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <h1>Manage Appointments</h1>

    <table>
        <thead>
            <tr>
                <th>Appointment Date</th>
                <th>Location</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($appointment = $appointments_result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $appointment['appointment_date']; ?></td>
                <td><?php echo $appointment['location']; ?></td>
                <td><?php echo $appointment['status']; ?></td>
                <td>
                    <a href="edit_appointment.php?id=<?php echo $appointment['appointment_id']; ?>">Edit</a>
                    <a href="../Controllers/delete_appointment.php?id=<?php echo $appointment['appointment_id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="create_appointment.php" class="button">Create New Appointment</a>
    <a href="dashboard.php" class="button">Back to Dashboard</a>
</body>
</html>
