<?php
//session_start();
require(__DIR__ . "\\lib\\functions.php");
echo $BASE_PATH;
header("Location: $BASE_PATH\\login.php");
exit;
?>