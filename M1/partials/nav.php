<script src="helpers.js"></script>
<style>
<?php include '\\lib\\style.css'; ?>
</style>
<?php


    //Note: this is to resolve cookie issues with port numbers

require_once(__DIR__ . "\\..\\lib\\functions.php");

$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
    $domain = explode(":", $domain)[0];
}

$localWorks = TRUE; //some people have issues with localhost for the cookie params
//if you're one of those people make this false

//this is an extra condition added to "resolve" the localhost issue for the session cookie
if (($localWorks && $domain == "localhost") || $domain != "localhost") {
    session_set_cookie_params([
        "lifetime" => 60 * 60,
        "path" => "/Project",
 //      "domain" => $_SERVER["HTTP_HOST"] || "localhost",
        "domain" => $domain,
        "secure" => true,
        "httponly" => true,
        "samesite" => "lax"
    ]);
}

session_start();
?>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body id="custom-style">
<nav class="navbar navbar-inverse"> 
  <div class="container-fluid custom-style">

  <!------------  SHOP NAME / LOGO ------------>
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">happy capy</a>
    </div>

 <!------------  HOME BUTTON ------------>
    <ul class="nav navbar-nav">
        <?php if (is_logged_in()) : ?>
            <li class="active"><a href="home.php">Home</a></li>
        <?php endif; ?>

 <!------------  SHOP FOR ADMIN ------------>

        <?php if (is_logged_in() && is_admin()) : ?>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Shop <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="listing.php"> Public Listing </a></li>
                <li><a href="inventory.php"> Inventory </a></li>
                <li><a href="#"> Purchase Log </a></li>
                </ul>
            </li>
        <?php endif; ?>

 <!------------  SHOP PUBLIC LISTING  ------------>

        <?php if (!is_admin()) : ?>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Shop <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="listing.php"> All </a></li>
                    <li><a href="#"> Stickers </a></li>
                    <li><a href="#"> Comic Books </a></li>
                </ul>
            </li>
        <?php endif; ?>

     <!------------  PROFILE FOR ALL USERS  ------------>
        <?php if (is_logged_in()) : ?>
            <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>    </ul>
        <?php endif; ?>

        </ul>

        <ul class="nav navbar-nav navbar-right">

             <!------------  LOGGED OUT  ------------>

            <?php if (!is_logged_in()) : ?>
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php endif; ?>

            <!------------  LOGGED IN  ------------>

            <?php if (is_logged_in()) : ?>
                <li><a href="cart.php"><span class="glyphicon glyphicon-user"></span> Cart </a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            <?php endif; ?>
            
        
        </ul>
    </div>
</nav>
</body>