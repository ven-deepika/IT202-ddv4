<?php
//session_start();
require(__DIR__ . "\\lib\\functions.php");
echo $BASE_PATH;
reset_session();
header("Location: $BASE_PATH\\listing.php");
exit;
?>