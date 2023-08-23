<?php session_start(); ?>
<?php
    include "database.php";


    if(!isset($_SESSION["username"]) or $_SESSION["username"] == ""){
        $response = [ 'status' => 'error', 'reason' => 'Please login!'];
        echo json_encode($response);
        die;
    }

    $userID = $_SESSION["id"];
    $productID = $_POST["prodID"];

    $sql = "INSERT INTO cart (user_id, product_id, created_at) VALUES ('$userID', '$productID', now());";
    $res = $con -> query($sql);
    if (!$res) {
            $response = [ 'status' => 'error', 'reason' => 'Sometging went wrong.'];
            echo json_encode($response);
            die;
         }else{
            $response = [ 'status' => 'success', 'reason' => 'The item is in your cart now!'];
            echo json_encode($response);
            die;		
         }
    $con->close();
?>