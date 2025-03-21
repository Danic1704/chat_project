<?php
session_start();
include 'db/conect.php';
include 'partials/header.php';
?>
<div class="container">
    <h1>Bienvenue sur l'application de Chat</h1>
    <?php if (!isset($_SESSION['user_id'])): ?>
        <a href="login.php" class="btn">Se connecter</a>
        <a href="register.php" class="btn">S'inscrire</a> <!-- Lien vers la page d'inscription -->
    <?php else: ?>
        <a href="chat.php" class="btn">Accéder au Chat</a>
    <?php endif; ?>
</div>
<?php include 'partials/footer.php'; ?>
