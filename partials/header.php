<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles_header.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Chat Application</h1>
    <a href="index.php">Accueil</a>
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="logout.php">Se déconnecter</a>
    <?php endif; ?>
</header>

<main>
        <h2>Bienvenue sur l'application de chat</h2>
        <p>Ceci est le contenu principal de la page.</p>
    </main>

</body>
</html>
