<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';
include '../Controllers/health_eligibilitycontroller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Eligibility</title>
    <link rel="stylesheet" href="../css/healthel.css">
    <script src="../js/eligibility_validation.js" defer></script>
</head>
<body>
    <h1>Health Eligibility</h1>

    <?php if (isset($_GET['success'])): ?>
        <p class="success">Health eligibility updated successfully!</p>
    <?php endif; ?>

    <form id="eligibilityForm" method="post" action="health_eligibility.php">
        <label for="questionnaire">Health Questionnaire:</label>
        <textarea id="questionnaire" name="questionnaire" ><?php echo $eligibility['questionnaire']; ?></textarea>

        <label for="status">Status:</label>
        <select id="status" name="status" >
            <option value="Eligible" <?php if ($eligibility['status'] == 'Eligible') echo 'selected'; ?>>Eligible</option>
            <option value="Ineligible" <?php if ($eligibility['status'] == 'Ineligible') echo 'selected'; ?>>Ineligible</option>
        </select>

        <label for="next_eligible_date">Next Eligible Date:</label>
        <input type="date" id="next_eligible_date" name="next_eligible_date" value="<?php echo $eligibility['next_eligible_date']; ?>" >

        <button type="submit">Update Health Eligibility</button>
    </form>

    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>
