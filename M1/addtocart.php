<?php
require(__DIR__ . "\\partials\\nav.php");

// Check if the session variable exists, if not, initialize it to 0
if (isset($_SESSION['user'])) {


if(isset($_POST['addedItem'])) {
  

    $db = getDB();
        $stmt = $db->prepare("INSERT INTO `Cart` (`product_id`, `user_id`, `desired_quantity`,`unit_price`, `product_name`) VALUES(:productid, :userid, 1, :unitprice, :productname)");
        print_r($stmt);
        try {
            $product_id = $_POST['addedItem'];
            $user_id = $_SESSION['user']['id'];
            $stmt2 = $db->prepare("SELECT `unit_price` FROM Products WHERE `id`= :productid");
            $stmt2->execute([":productid" => $product_id]);
            $unitprice= $stmt2->fetch(PDO::FETCH_ASSOC);
            $unitprice=$unitprice['unit_price'];
            $stmt3 = $db->prepare("SELECT `name` FROM Products WHERE `id`= :productid");
            $stmt3->execute([":productid" => $product_id]);
            $productname= $stmt3->fetch(PDO::FETCH_ASSOC);
            $productname=$productname['name'];


            $stmt->execute([":productid" => $product_id, ":userid" => $user_id, ":unitprice" => $unitprice, ":productname" => $productname]);
        } catch (Exception $e) {
   
        }



//    print_r($_POST);
}
}

// Redirect back to the page after incrementing the session variable
header("Location: cart.php"); 
exit();
?>