<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $phone = $_POST['phone'];
    $blood_group = $_POST['blood_group'];
    $date_of_birth = $_POST['date_of_birth'];

    $sql = "INSERT INTO donors (first_name, last_name, email, password, phone, blood_group, date_of_birth)
            VALUES ('$first_name', '$last_name', '$email', '$password', '$phone', '$blood_group', '$date_of_birth')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
