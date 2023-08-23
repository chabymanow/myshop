<?php include "header.php"; ?>
<div class="container">
<h1 class="text-center mb-5">User data</h1>
    <div class="userdata container-fluid mx-auto">
        <div class="row mb-2">
            <b class="mr-3">Username:</b> <?php echo $_SESSION["username"] ?>
        </div>
        <div class="row mb-2">
            <b class="mr-3">User email:</b> <?php echo $_SESSION["email"] ?>
        </div>
        <div class="row mb-2">
            <b class="mr-3">Register date:</b> <?php echo $_SESSION["regdate"]->format('jS F, Y');  ?>
        </div>
        <a href="usercart.php" class="btn btn-primary">Check my cart</a>
    </div>
<?php include "footer.php"; ?>