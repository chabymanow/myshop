<?php include "header.php"; ?>
<div class="container">
<?php
    $prodID = $_GET["prodID"];
    include "backend/database.php";

    $sql = "SELECT * FROM products WHERE id = {$prodID}";
    $result = $con->query($sql);
    if ($result->num_rows > 0) 
        {
            $product = $result->fetch_assoc();
               echo "<div class='producPage'>
                    
                    <h1 class='productTitle text-center'>{$product["productname"]}</h1>
                    <img class='productImage text-center img-fluid' src='{$product["image"]}' alt='{$product["productname"]}'>
                    <div class='productPrice'>The price of this product just: £{$product["price"]}</div>
                    <div class='postPrice'>Delivery cost: £0.00</div>
                    <p class='productDescription'>{$product["description"]}</p>
                    </div>
                    <div class='row buttonWrapper'>
                    <button type='button' class='btn btn-sm btn-info' onclick='history.back()'>Go Back</button>
                    <form action='' method='post' id='addCartForm'>
                        <input type='hidden' name='prodID' id='prodID' value='{$product["id"]}'>
                        <button type='button' id='addCartButton' class='btn btn-sm btn-primary cartButton'>Add to cart</button>
                    </form>
                    
                    </div>
                    ";

        } 
        else {
            echo "Sorry we do not have this product!";
        }
?>
<?php include "footer.php"; ?>