<?php include "header.php"; ?>
<div class="container">
<div class=" loginform col col-lg-6 col-md-12 col-sm-12">
<h1 class="mb-5">Register</h1>
<div class="message" id="messageDiv"></div>
<form action="" method="post" id="registerForm">
  <div class="form-group">
    <label for="exampleInputEmail1">User name</label>
    <input type="text" class="form-control" name="userName" id="userName" aria-describedby="namelHelp" placeholder="Enter user name">
    <div class="error" id="nameError">adf</div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="userEmail" id="userEmail" aria-describedby="emailHelp" placeholder="Enter email">
    <div class="error" id="emailError">sdf</div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="userPass" id="userPass" placeholder="Password">
    <span style="font-size: 10px;">The password needs to be 8 characters long!</span>
    <div class="error" id="passError">sdf</div>
  </div>
    <input type="hidden" id="action" name="action" value="register">
  <button type="button" id="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php include "footer.php"; ?>