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
                <h1>Checkout</h1>
                <?php
            
                echo "<h2>TOTAL: $" . $_SESSION['cart']['total'] .  "</h2>";
                ?>
                <h2>Checkout Form</h2>
    <form action="process_checkout.php" method="post">
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required><br><br>

        <label for="payment_method">Payment Method:</label>
        <select name="payment_method" id="payment_method" required>
            <option value="Credit Card">Credit Card</option>
            <option value="PayPal">PayPal</option>
            <!-- Add more payment methods as needed -->
        </select><br><br>

        <label for="money_received">Money Received:</label>
        <input type="text" name="money_received" id="money_received" required><br><br>

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required><br><br>

        <input type="submit" value="Submit">
    </form>

</div>
</div>
</body>
