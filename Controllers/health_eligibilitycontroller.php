<?php
$user_id = $_SESSION['user_id'];

$eligibility_sql = "SELECT * FROM health_eligibility WHERE donor_id = $user_id";
$eligibility_result = $conn->query($eligibility_sql);
$eligibility = $eligibility_result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $questionnaire = $_POST['questionnaire'];
    $status = $_POST['status'];
    $next_eligible_date = $_POST['next_eligible_date'];

    if ($eligibility) {
        $update_sql = "UPDATE health_eligibility SET questionnaire='$questionnaire', status='$status', next_eligible_date='$next_eligible_date' WHERE donor_id=$user_id";
        if ($conn->query($update_sql) === TRUE) {
            header("Location: health_eligibility.php?success=1");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        $insert_sql = "INSERT INTO health_eligibility (donor_id, questionnaire, status, next_eligible_date) VALUES ('$user_id', '$questionnaire', '$status', '$next_eligible_date')";
        if ($conn->query($insert_sql) === TRUE) {
            header("Location: health_eligibility.php?success=1");
            exit();
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
