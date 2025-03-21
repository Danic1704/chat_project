<?php
session_start();
include 'db/connect.php';
include 'partials/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles_index.css"> 
    <title>Application de chat</title>
</head>
<body>
<div class="container">
    <h1>Bienvenue sur l'application de Chat</h1>
    <?php if (!isset($_SESSION['user_id'])): ?>
        <a href="login.php" class="btn">Se connecter</a>
    <?php else: ?>
        <a href="chat.php" class="btn">Accéder au Chat</a>
    <?php endif; ?>
</div>
<?php include 'partials/footer.php'; ?>

</body>
</html>

