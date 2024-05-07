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
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">happy capy</a>
    </div>
    <ul class="nav navbar-nav">
    <?php if (is_logged_in()) : ?>
      <li class="active"><a href="home.php">Home</a></li>
    <?php endif; ?>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php if (!is_logged_in()) : ?>
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php endif; ?>
    <?php if (is_logged_in()) : ?>
        <li><a href="cart.php"><span class="glyphicon glyphicon-user"></span> Cart </a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

      <?php endif; ?>
    </ul>      
    </div>
</nav>
</body>