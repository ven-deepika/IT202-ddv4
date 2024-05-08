<?php

/**
 * Passing $redirect as true will auto redirect a logged out user to the $destination.
 * The destination defaults to login.php
 */
function is_logged_in($redirect = false, $destination = "login.php")
{
    $isLoggedIn = isset($_SESSION["user"]);
 //   print_r($_SESSION);
    if ($redirect && !$isLoggedIn) {
        //if this triggers, the calling script won't receive a reply since die()/exit() terminates it
        flash("You must be logged in to view this page", "warning");
        die(header("Location: $destination"));
    }
    return $isLoggedIn;
}
function has_role($role)
{
    if (is_logged_in() && isset($_SESSION["user"]["roles"])) {
        foreach ($_SESSION["user"]["roles"] as $r) {
            if ($r["name"] === $role) {
                return true;
            }
        }
    }
    return false;
}
function get_username()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "username", "", false);
    }
    return "";
}
function get_user_email()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "email", "", false);
    }
    return "";
}
function get_user_id()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "id", false, false);
    }
    return false;
}
function get_user_role()
{
    if(is_logged_in()) {
        return $_SESSION["role"];

    }
    return false;
}

function is_admin() 
{
    if(is_logged_in()) {

        $db = getDB();

        $stmt = $db->prepare("SELECT `name` FROM Roles WHERE `id`= :id");
        $roleid = get_user_role();
      

        $stmt->execute([":id" => $roleid]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($result && $result['name'] === "Admin" ){
            return true;
        }

        $db = NULL;
        return false;
    }
    return false;
}

?>