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
<script>
        function redirectToPage() {
            // Redirect to the desired URL
            window.location.href = "checkout.php"; 
        }
</script>
<script>
        function redirectToPage2() {
            // Redirect to the desired URL
            window.location.href = "clearcart.php"; 
        }
</script>
<body>
<div class="background-container"></div> <!-- Container for the background image -->
<div class="container">
                <h1>Cart</h1>



<?php

if (!is_logged_in()){
    echo "<h2>Please log in to shop</h2>";

}
else {
echo "<table>";
    $db = getDB();
    
        $total=0;
            $stmt = $db->prepare("SELECT `product_name`, `unit_price` FROM `Cart` WHERE `user_id` = :userid");
            $userid = $_SESSION['user']['id'];
            $stmt->execute([":userid" => $userid]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $itemname = NULL;
            $itemprice=NULL;
          //  print_r($result);
            while ($result != false) {
            
            if (isset($result['product_name'])) {$itemname= $result['product_name'];}
            if (isset($result['unit_price'])) {$itemprice = $result['unit_price'];$total = $total + (float)$result["unit_price"];}
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
            echo "<tr>";
            echo "<td>" . $itemname . "</td>";
            echo "<td> .............. </td>";
            echo "<td> .............. </td>";
            echo "<td> .............. </td>";
            echo "<td>" . $itemprice . "</td>";
            echo "</tr>";
            }
    }
    
 
echo "</table>";

   if(is_logged_in()){$_SESSION['cart']['total'] = $total;}

echo "<button type='button' class='btn btn-primary' onclick='redirectToPage()'>Checkout</button>";

echo "<button type='button' class='btn btn-primary' onclick='redirectToPage2()'>Clear Cart</button>";




?>
</div>
</div>
</body>