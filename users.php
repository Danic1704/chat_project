<?php
session_start();
include 'partials/header.php';
?>
<div class="container">
    <h1>Utilisateurs connectés</h1>
    <ul id="user-list">
        <!-- Liste des utilisateurs récupérée depuis la base de données -->
    </ul>
</div>
<?php include 'partials/footer.php'; ?>
