<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if(isset($_POST) & !empty($_POST))
    {
    	$username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `usermanagment` (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($connection, $sql);
        if($result){
            $smsg = "User Registration Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }

    }
?>

<html>
	<head>
		<title>Registration form</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<head>
	<body>
		<div class="container">
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">NAME</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>
	</body>
</html>
