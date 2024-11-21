<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation System</title>
</head>
<body>
    <h1>Total Donation Amount</h1>

    <p>Total Donation Amount: <?php include 'amo.php'; ?></p>

    <h2>Enter New Donation Amount</h2>

    <form action="write_amount.php" method="post">
        <label for="newAmount">New Donation Amount:</label>
        <input type="number" id="newAmount" name="newAmount" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
