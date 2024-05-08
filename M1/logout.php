<script src="helpers.js"></script>
<?php
// session_start();
require(__DIR__ . "\\lib\\functions.php");
reset_session();

flash("You have been logged out", "success");
 die(header("Location: listing.php"));
?>