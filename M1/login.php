<?php
require(__DIR__ . "\\partials\\nav.php");
require(__DIR__ . "\\partials\\flash.php");
session_start();
?>


<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <input type="submit" value="Login" />
</form>

<script>
    function validate(form) {
        var email = form.email.value;
        var password = form.password.value;

        // Validate email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        // Validate password length
        if (password.length < 8) {
            alert("Password must be at least 8 characters long.");
            return false;
        }

        // Validation successful
        return true;
    }
</script>
<?php

//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);

    //TODO 3
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty", 'danger');
        $hasError = true;

    }

    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address");
        $hasError = true;
    }
    if (empty($password)) {
        flash("password must not be empty");
        $hasError = true;
    }
    if (strlen($password) < 8) {
        flash("Password too short");
        $hasError = true;
    }
    if (!$hasError) {
        //TODO 4
        $db = getDB();

        $stmt = $db->prepare("SELECT id, email, username, password from Users where email = :email");

        try {
            $r = $stmt->execute([":email" => $email]);
            if ($r) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($user) {
                    $hash = $user["password"];
                    unset($user["password"]);

                    if (password_verify($password, $hash)) {
                        flash("Welcome $email"); 
                        $_SESSION["user"] = $user;

                        $stmt = $db->prepare("SELECT `role_id` from User_Roles where `user_id`=:userid");
                        $userid = $user['id'];
                        $stmt->execute([":userid" => $userid]);
                        $result1 = $stmt->fetch(PDO::FETCH_ASSOC);
                        $_SESSION["role"] = $result1['role_id'];
                    
                        
                     die(header("Location: home.php"));
                    } else {
                        flash("Incorrect Password", "danger");
                    }
                } else {
                    flash("Email not found");
                }
            }
        } catch (Exception $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    }
}
?>