<?php
require(__DIR__ . "\\partials\\nav.php");
session_start();

// Check if the session variable exists, if not, initialize it to 0
if (isset($_SESSION['user'])) {
    $db = getDB();
    $stmt = $db->prepare("DELETE FROM `Cart` where `user_id`= :userid");
    $userid = $_SESSION['user']['id'];
    $stmt->execute([":userid" => $userid]);
    
}
// Redirect back to the page after incrementing the session variable
header("Location: cart.php"); 
exit();
?>