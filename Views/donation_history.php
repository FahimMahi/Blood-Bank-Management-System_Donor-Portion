<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../Models/database.php';
include '../Controllers/donationhistory_controller.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donation History</title>
    <link rel="stylesheet" href="../css/donahistory.css">
</head>
<body>
    <h1>Donation History</h1>

    <table>
        <thead>
            <tr>
                <th>Donation Date</th>
                <th>Location</th>
                <th>Units Donated</th>
                <th>Certificate</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($donation = $donations_result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $donation['donation_date']; ?></td>
                <td><?php echo $donation['location']; ?></td>
                <td><?php echo $donation['units_donated']; ?></td>
                <td>
                    <?php if ($donation['certificate_url']): ?>
                        <a href="<?php echo $donation['certificate_url']; ?>" target="_blank">View Certificate</a>
                    <?php else: ?>
                        No Certificate
                    <?php endif; ?>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <!-- <a href="create_donation.php" class="button">Create New Donation</a> -->
    <a href="dashboard.php" class="button">Back to Dashboard</a>
</body>
</html>
