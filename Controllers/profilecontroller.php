<?php
$user_id = $_SESSION['user_id'];

$donor_sql = "SELECT * FROM donors WHERE donor_id = $user_id";
$donor_result = $conn->query($donor_sql);
$donor = $donor_result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $blood_group = $_POST['blood_group'];
    $date_of_birth = $_POST['date_of_birth'];

    $update_sql = "UPDATE donors SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone', blood_group='$blood_group', date_of_birth='$date_of_birth' WHERE donor_id=$user_id";

    if ($conn->query($update_sql) === TRUE) {
        header("Location: profile.php?success=1");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
