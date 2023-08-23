<?php include "header.php"; ?>

<?php
    include "backend/database.php";

    if (isset($_GET['pageNunber'])) {
        $pageNunber = $_GET['pageNunber'];
    } else {
        $pageNunber = 1;
    }

    $productsPerPage = 9;
    $offset = ($pageNunber-1) * $productsPerPage; 

    $total_pages_sql = "SELECT COUNT(*) FROM products";
    $result = mysqli_query($con, $total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $totalPages = ceil($total_rows / $productsPerPage);

    $sql = "SELECT * FROM products LIMIT $offset, $productsPerPage";
    $result = $con->query($sql);
?>

<div class="container">
<h1 class="text-center">Welcomme to my shop</h1>
    <form action="searchCode.php" name="search" id="search"  method="get">
        <div class="searchDiv">
            <input type="text" name="search" id="search">
            <button type="submit" class="btn btn-sm btn-success">Search</button>
        </div>
    </form>

    <nav aria-label="Page navigation">
        <ul class="pagination pagination-sm justify-content-start mt-5">
            <li class="page-item">
            <a class="page-link" href="<?php if($pageNunber <= 1){ echo '#'; } else { echo "?pageNunber=".($pageNunber - 1); } ?>" tabindex="-1">Previous</a>
            </li>
            <?php 
                for($i=1; $i <= $totalPages; $i += 1){
                    echo "<li class='page-item'><a class='page-link' href='?pageNunber={$i}'>{$i}</a></li>";
                }
            ?>
            <li class="page-item">
            <a class="page-link" href="<?php if($pageNunber >= $totalPages){ echo '#'; } else { echo "?pageNunber=".($pageNunber + 1); } ?>">Next</a>
            </li>
        </ul>
    </nav>

<div class="cards">

    <?php
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
               echo "<div class='card'>
                    <img class='card-img-top' src='{$row["thumbImage"]}' alt='{$row["productname"]}'>
                    <div class='card-body'>
                        
                        <h5 class='card-title' style='font-weight: 700;'>{$row["productname"]}</h5>
                        <div class='price'>£{$row["price"]}</div>
                    <p class='card-text cardDescription'>{$row["description"]}</p>
                    <hr>                   
                        <form action='showproduct.php'  method='get'>
                            <input type='hidden' name='prodID' value='{$row["id"]}'>
                            <button type='submit' class='btn btn-primary w-100'>Check it</button>
                        </form>
                    </div>
                    </div>";

            }
        } 
        else {
            echo "0 results";
        }
    ?>
</div>
<nav aria-label="Page navigation">
        <ul class="pagination pagination-sm justify-content-start mt-5">
            <li class="page-item">
            <a class="page-link" href="<?php if($pageNunber <= 1){ echo '#'; } else { echo "?pageNunber=".($pageNunber - 1); } ?>" tabindex="-1">Previous</a>
            </li>
            <?php 
                for($i=1; $i <= $totalPages; $i += 1){
                    echo "<li class='page-item'><a class='page-link' href='?pageNunber={$i}'>{$i}</a></li>";
                }
            ?>
            <li class="page-item">
            <a class="page-link" href="<?php if($pageNunber >= $totalPages){ echo '#'; } else { echo "?pageNunber=".($pageNunber + 1); } ?>">Next</a>
            </li>
        </ul>
    </nav>
<?php include "footer.php"; ?>