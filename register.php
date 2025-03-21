<?php
// Démarre la session
session_start();

// Inclusion de la connexion à la base de données
include 'db/connect.php'; // Fichier qui contient la connexion à la base de donné<es>
// Si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    // Validation simple des données
    if (empty($username) || empty($email) || empty($password)) {
        $error_message = "Tous les champs doivent être remplis.";
    } else {
        // Hacher le mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insérer les données dans la base de données
        $query = "INSERT INTO users (username, email, password, created_at) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            // Rediriger vers la page de connexion après l'inscription réussie
            header("Location: login.php");
            exit();
        } else {
            $error_message = "Une erreur est survenue lors de l'inscription. Veuillez réessayer.";
        }
    }
}
?>

<?php include 'partials/header.php'; ?>

<div class="container">
    <h1>S'inscrire</h1>
    
    <?php if (isset($error_message)): ?>
        <p class="error"><?= $error_message ?></p>
    <?php endif; ?>

    <!-- Formulaire d'inscription -->
    <form action="register.php" method="POST">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">S'inscrire</button>
    </form>

    <p>Vous avez déjà un compte ? <a href="login.php">Se connecter</a></p>
</div>

<?php include 'partials/footer.php'; ?>
