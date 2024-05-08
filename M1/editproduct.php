<?php
require(__DIR__ . "\\partials\\nav.php");

// Check if the session variable exists, if not, initialize it to 0

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


<?php

if (isset($_SESSION['user'])) {


if(isset($_POST['value'])) {
  

    $db = getDB();
    $itemid = (int)$_POST['value'];
        $stmt = $db->prepare("SELECT * FROM `Products` WHERE `id` = :itemid ");
        
        echo "<form  method='POST' onsubmit='return validate(this);'>
                
                <h1> Edit Item </h1>";
        try {
            $stmt->execute([":itemid" => $itemid]);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $rowid = (int)$row["id"];
                $rown = $row["name"];
                $desc = $row["description"];
                $cate = $row["category"];
                $stoc = (int)$row["stock"];
                $unit = (float)$row["unit_price"];
                $visi = (bool)$row["visibility"];
                
                echo "<div class='mb-3'>
                    <label for='nm'>Name</label>
                    <input type='text' name='nm' value='<?php se($rown); ?>'/>
                </div>";
                echo "<div class='mb-3'>
                    <label for='nm'>Description</label>
                    <input type='text' name='de' value='<?php se($desc); ?>'/>
                </div>";
                echo "<div class='mb-3'>
                    <label for='nm'>Category</label>
                    <input type='text' name='ca' value='<?php se($cate); ?>'/>
                </div>";
                echo "<div class='mb-3'>
                    <label for='nm'>Stock</label>
                    <input type='text' name='st' value='<?php se($stoc); ?>'/>
                </div>";
                echo "<div class='mb-3'>
                    <label for='nm'>Price</label>
                    <input type='text' name='pr' value='<?php se($unit); ?>'/>
                </div>";
                echo "<div class='mb-3'>
                    <label for='nm'>Visibility</label>
                    <input type='text' name='vi' value='<?php se($visi); ?>'/>
                </div>";
                echo"<input type='submit' name='Enter'> </form>";
                    
            }

        } catch (Exception $e) { flash("could not populate", "danger");
   
        }



//    print_r($_POST);
}
}

// Redirect back to the page after incrementing the session variable

?>
<?php
    if (isset($_POST["nm"]) && isset($_POST["de"]) && isset($_POST["ca"])&& isset($_POST["st"])&& isset($_POST["pr"])&& isset($_POST["vi"])) {
        $nm = $_POST["nm"];
        $de = $_POST["de"];
        $ca = $_POST["ca"];
        $st = (int)$_POST["st"];
        $pr = (float)$_POST["pr"];
        $vi = (bool)$_POST["vi"];

        try {
            $stmt = $db->prepare("UPDATE Products SET `name` = :nm, `description` = :de, `category` = :ca, `stock` = :st, `unit_price`= :pr, `visibility` = :vi WHERE id = :rowid"); 
            $stmt->execute([":nm"=> $nm, ":de"=> $de , ":ca"=> $ca ,":st"=> $st ,":pr"=> $pr ,":vi"=> $vi ]);

        }catch (Exception $e){flash("did not update", "danger");}


    }
    $db = NULL;

    require_once(__DIR__ . "\\partials\\flash.php");
?>