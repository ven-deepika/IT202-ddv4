<?php
require(__DIR__ . "\\partials\\nav.php");
session_start();
?>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
                    .background-container {
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-image: url('light-background.jpg'); /* Set the background image */
                        background-size: cover;
                        background-repeat: repeat;
                        opacity: 0.5; /* Adjust the opacity value (0.0 to 1.0) */
                        z-index: -1; /* Move the background container behind other content */
                    }
                    .container {
                        padding-top: 50px; /* Add padding to prevent content from overlapping with the background */
                        z-index: 1; /* Ensure the content appears above the background */
                    }
    </style>

</head>

<body>
<div class="background-container"></div> <!-- Container for the background image -->
<div class="container">

</div>
</div>
</body>