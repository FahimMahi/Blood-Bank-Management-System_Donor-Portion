<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $appointment_date = $_POST['appointment_date'];
    $location = $_POST['location'];
    $donor_id = $_SESSION['user_id'];

    $sql = "INSERT INTO appointments (donor_id, appointment_date, location, status) VALUES ('$donor_id', '$appointment_date', '$location', 'Scheduled')";

    if ($conn->query($sql) === TRUE) {
        header("Location: appointments.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
