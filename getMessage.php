<?php
session_start();
include 'db/connect.php';

$sql = "SELECT * FROM messages ORDER BY timestamp DESC";
$result = mysqli_query($conn, $sql);

while ($message = mysqli_fetch_assoc($result)) {
    echo "<div class='message'>";
    echo "<p><strong>" . $message['user_id'] . ":</strong> " . $message['message'] . "</p>";
    echo "<span>" . $message['timestamp'] . "</span>";
    echo "</div>";
}
?>
