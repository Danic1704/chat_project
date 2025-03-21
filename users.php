<?php
session_start();
include 'db/connect.php';

$sql = "SELECT * FROM users WHERE status = 'online'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles_user.css">
    <title>Utilisateurs connectés</title>
</head>
<body>
<div class="container">
    <h1>Utilisateurs connectés</h1>
    <ul>
    <?php while ($user = mysqli_fetch_assoc($result)): ?>
        <li><?php echo $user['username']; ?></li>
    <?php endwhile; ?>
</ul>
</div>
<?php include 'partials/footer.php'; ?>
</body>
</html>

