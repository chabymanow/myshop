<?php include "header.php"; ?>

<?php     
    include "backend/database.php";

    $sql = "SELECT products.productname, products.price, cart.created_at, users.id FROM products
            JOIN cart ON cart.product_id = products.id
            JOIN users ON users.id = cart.user_id
            WHERE cart.user_id = {$_SESSION["id"]};";
    $result = $con->query($sql);
?>

<div class="container">
<h1 class="text-center mb-5">Your cart</h1>
    <div class="col mb-2">
        <?php
            $empty = false;
            if ($result->num_rows > 0){
                $total = 0;
                while($row = $result->fetch_assoc())
                {
                    echo "<div class='mb-2'>
                        <div class='row'><b class='mr-3'>Product name:</b> {$row['productname']}</div>
                        <div class='row'><b class='mr-3'>Product price:</b> £{$row['price']}</div>
                    </div>";
                    $total = $total + $row['price'];
                }
            }else{
                echo "Your shopping cart is empty.";
                $empty = true;
            }
        ?>
        <hr class="myHr">
        <div class="row container-fluid justify-content-between align-items-center">
        
        <?php
            if(!$empty){
                echo "<div class='row'><b class='mr-3'>Total payable:</b> <span class='totalAmmount'>£{$total}</span></div>";
                echo '<button class="btn btn-success" id="checkoutButton">Checkout</button>';
            }
        ?>
        
        </div>
    </div>
<?php include "footer.php"; ?>