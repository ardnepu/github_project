<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale, user-scalable=no ">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="my_style.css">
</head>
<body class="my-background">
<div class="container my-box">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Login</strong>

                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="login.php" >
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input type="checkbox" class="" name="checkbox">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm" name="submit">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Not Registered? <a href="signup_page.php">Register here</a>
                <?php
        if(isset($_SESSION['errMsg'])){
            echo '<div class="my-warning">Incorrect username or password !!</div>';
        }
        unset($_SESSION['errMsg']); 
        ?>
        
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-default navbar-fixed-bottom my-nav">
    <div class="container-fluid ">
     <p>&copy;<b>copyright 2017 | All Rights Reserved </b></p>
    </div>
</div>
        
</body>
</html>