<?php
require(__DIR__ . "\\partials\\nav.php");
session_start();
?>

<?php

if (!is_logged_in()) {
    die(header("Location: login.php"));
}

if (isset($_POST["save"])) {
    $itemName = se($_POST, "itemName", null, false);
    $itemDescription = se($_POST, "itemDescription", null, false);
    $itemCategory = se($_POST, "itemCategory", null, false);
    $itemStock = se($_POST, "itemStock", null, false);
    $itemPrice = se($_POST, "itemPrice", null, false);
    $itemVisible = se($_POST, "itemVisible", null, false);


    $itemStock = (int)$itemStock;
    $itemPrice = (float)($itemPrice);
    
    if ($itemVisible === 'on') {
        $itemVisible = true;
    } else { $itemVisbile = false;}



/*
    var_dump($itemName);
    var_dump($itemDescription);
    var_dump($itemCategory);
    var_dump($itemStock);
    var_dump($itemPrice);
    var_dump($itemVisible);

*/

    $db = getDB();
    $stmt = $db->prepare("INSERT INTO `Products` (`name`, `description`, `category`, `stock`, `created`, `modified`, `unit_price`, `visibility`) VALUES (:itemName, :itemDescription, :itemCategory, :itemStock, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, :itemPrice, :itemVisible)");
    try {
      //  print_r($stmt);
        $stmt->execute([":itemName" => $itemName, ":itemDescription" => $itemDescription, ":itemCategory" => $itemCategory, ":itemStock" => $itemStock, ":itemPrice" => $itemPrice, ":itemVisible" => $itemVisible ]);
      //  print_r($stmt);
        flash("Inventory updated", "success");
    } catch (Exception $e) {flash("failed to update", "danger");}
    
    $db = NULL;
}




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
    <div class="row">

<!-------------- INVENTORY MENU OPTIONS ------------------>

        <div class="col-md-6">
            <form  method="POST" onsubmit="return validate(this);">
                
                <h1> Add Item </h1>
                <div class="mb-3">
                    <label for="nm">Name</label>
                    <input type="text" name="itemName" id="nm" />
                </div>
                <div class="mb-3">
                    <label for="id_">Description</label>
                    <input type="text" name="itemDescription" id="id_" />
                </div>
                <div class="mb-3">
                    <label for="cat">Category</label>
                    <input type="text" name="itemCategory" id="cat" />
                </div>
                <div class="mb-3">
                    <label for="st">Stock</label>
                    <input type="number" name="itemStock" id="st" />
                </div>
                <div class="mb-3">
                    <label for="ip">Price</label>
                    <input type="number" name="itemPrice" id="ip" step="0.01" />
                </div>
                <div class="mb-3">
                    <label for="conp">Visible?</label>
                    <input type="checkbox" name="itemVisible" id="iv" />
                </div>
                <input type="submit" value="Update Profile" name="save" />
            </form>
        </div>  
    </div>
<!-------------- INVENTORY LISTING------------------>


        <div class="row">
        <div class="col-md-12">

            <h1>Inventory List</h1>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Date Created</th>
                        <th>Date Modified</th>
                        <th>Price</th>
                        <th>Visibility</th>
                        <!-- Add more headers if needed -->
                     </tr>

                     <?php
                     try {
                            $db = getDB();
                            $stmt=$db->prepare("SELECT * FROM `Products`");
                            $stmt->execute();

                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["description"] . "</td>";
                                echo "<td>" . $row["category"] . "</td>";
                                echo "<td>" . $row["stock"] . "</td>";
                                echo "<td>" . $row["created"] . "</td>";
                                echo "<td>" . $row["modified"] . "</td>";
                                echo "<td>" . $row["unit_price"] . "</td>";
                                echo "<td>" . $row["visibility"] . "</td>";
                                echo "</tr>";
                            }
                            
                            $db = NULL;

                     } catch (Exception $e) {}


                     ?>


        </div>
        </div>  
    </div>
</div>
</div>
</body>


<script>
    function validate(form) {
        let in_ = form.itemName.value;
        let id_ = form.itemDescription.value;
        let ic_ = form.itemCategory.value;
        let is_ = form.itemStock.value;
        let ip_ = form.itemPrice.value;
        let iv_ = form.itemVisible.value;

        let isValid = true;


        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild


        return isValid;
</script>
<?php
require_once(__DIR__ . "\\partials\\flash.php");
?>