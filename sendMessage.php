<?php
session_start();
include 'db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['message'])) {
    $user_id = $_SESSION['user_id'];
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    $sql = "INSERT INTO messages (user_id, message) VALUES ('$user_id', '$message')";
    if (mysqli_query($conn, $sql)) {
        header('Location: chat.php');
    } else {
        echo "Erreur: " . mysqli_error($conn);
    }
}
?>
