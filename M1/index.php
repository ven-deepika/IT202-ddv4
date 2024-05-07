<?php
session_start();
require(__DIR__ . "\\lib\\functions.php");
header("Location: $BASE_PATH\\login.php");
?>