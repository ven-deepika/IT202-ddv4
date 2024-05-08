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
                    .small-image {
                        width: 200px; /* Adjust the width as needed */
                        display: block;
                        margin: 0 auto;
                     }
                     table {
                        width: 100%;
                        text-align: left; /* Center-align content within table */
                    }   
                    tr {
                        border: 2px solid #ffffff; /* Add borders to table rows */
                    }    
    </style>

</head>
<script>
        function redirectToPage() {
            // Redirect to the desired URL
            window.location.href = "cart.php"; 
        }
</script>


<body>
    <div class="background-container"></div> <!-- Container for the background image -->
    <div class="container">


    <div class="row justify-content-center">
            <div id="shopliststyle" class="col-md-12 text-center">
        

            <h1>Product Details (ALL)</h1>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Options</th>
                        <!-- Add more headers if needed -->
                     </tr>

                     <?php
                     try {
                            $db = getDB();
                            $stmt=$db->prepare("SELECT * FROM `Products` WHERE `visibility`=1");
                            $stmt->execute();

                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["description"] . "</td>";
                                echo "<td>" . $row["category"] . "</td>";
                                echo "<td>" . $row["stock"] . "</td>";
                                echo "<td>$" . $row["unit_price"] . "</td>";
                                echo " <td><form action='addtocart.php' method='post'>
                                <button type='submit' name='addedItem' value='" . $row["id"] . "'>Add to Cart</button></form></td>";
                                echo "</tr>";
                            }
                            
                            $db = NULL;

                     } catch (Exception $e) {}


                     ?>


        
    </div>
    </div>
    </div>
                    </div>
</body>