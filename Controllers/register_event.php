<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}


include '../Models/database.php';

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_id = $_POST['event_id'];

    $check_sql = "SELECT * FROM event_participants WHERE donor_id = $user_id AND event_id = $event_id";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows == 0) {
        $register_sql = "INSERT INTO event_participants (event_id, donor_id, participation_status) VALUES ('$event_id', '$user_id', 'Registered')";
        if ($conn->query($register_sql) === TRUE) {
            header("Location: ../Views/events.php?success=1");
            exit();
        } else {
            echo "Error: " . $register_sql . "<br>" . $conn->error;
        }
    } else {
        header("Location: ../Views/events.php?error=1");
        exit();
    }
}

$conn->close();
?>
