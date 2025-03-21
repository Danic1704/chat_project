<header>
    <h1>Chat Application</h1>
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="logout.php">Se déconnecter</a>
    <?php endif; ?>
</header>
