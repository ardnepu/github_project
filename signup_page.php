<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<br>
<div class="col-md-6 col-md-offset-3"><h1>SIGN UP</h1></div>
<div class="container col-md-6 col-md-offset-3">
<br><br><br>
<form action="signup.php" method="post" role="form">
	<div class="form-group">
        <label for="text">First Name</label>
        <input type="text" class="form-control" name="firstname" placeholder="First Name" required="">
    </div>
    <div class="form-group">
        <label for="text">Last Name</label>
        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="">
    </div>
    <div class="form-group">
        <label for="text">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Address" required="">
    </div>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required="">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required="">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">SignUp</button>
</form>
<br>
<?php
if(isset($_SESSION['sMsg'])){
    echo 'Registered successfully !   <a href="index.php">Login</a>';
    unset($_SESSION['sMsg']);
}
?>
</div>
</body>
</html>
