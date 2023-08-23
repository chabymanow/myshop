<?php include "header.php"; ?>
<div class="container">
<div class=" loginform col col-lg-6 col-md-12 col-sm-12">
<h1 class="mb-5">Login</h1>
<div class="message" id="messageDiv"></div>
<form action="" method="post" id="loginForm">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="loginEmail" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email">
    <div class="error" id="loginEmailError">adf</div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="loginPass" id="loginPass" placeholder="Password">
    <div class="error" id="loginPassError">adf</div>
  </div>
  <input type="hidden" id="action" name="action" value="login">
  <button type="button" id="login" class="btn btn-primary">Submit</button>
</form>
</div>
<?php include "footer.php"; ?>