<?php
require(__DIR__ . "\\partials\\nav.php");
session_start();
?>

<h1>Home</h1>

<?php
print_r($_SESSION['user']);

if (is_logged_in()) {
    echo "Welcome, " . get_user_email();
} else {
    echo "You're not logged in";
}
//shows session info
echo "<pre>" . var_export($_SESSION, true) . "</pre>";
?>