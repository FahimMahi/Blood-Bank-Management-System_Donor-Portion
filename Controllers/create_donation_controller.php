<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $donation_date = $_POST['donation_date'];
    $location = $_POST['location'];
    $units_donated = $_POST['units_donated'];
    $certificate_url = $_POST['certificate_url'];
    $donor_id = $_SESSION['user_id'];

    $sql = "INSERT INTO donation_history (donor_id, donation_date, location, units_donated, certificate_url) VALUES ('$donor_id', '$donation_date', '$location', '$units_donated', '$certificate_url')";

    if ($conn->query($sql) === TRUE) {
        header("Location: donation_history.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
