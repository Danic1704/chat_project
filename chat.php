<?php
session_start();
include 'db/connect.php';
include 'partials/header.php';
include 'partials/sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles_chat.css">
    <title>Discussion</title>
</head>
<body>
<div class="chat-container">
    <h2>Discussion en cours</h2>
    <div id="messages">
        <?php include 'getMessages.php'; ?>
    </div>
    <form action="sendMessage.php" method="POST">
        <textarea name="message" required placeholder="Votre message..."></textarea>
        <button type="submit">Envoyer</button>
    </form>
</div>

<?php include 'partials/footer.php'; ?>

</body>
</html>
