<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title> Login </title>
<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
<h1> Welcome to ScavCreator</h1>
<section>
<div id="container">
   <a class="hiddenanchor" id="tologin"></a>
   <div id="wrapper">
   <div id="login" class="animate form">
   <form action="login.php" method="POST">
    <h1>Log in</h1>
	<p>
	   <label for="username" class="uname" > Username </label>
	   <input id="username" name="username" required="required" type="text" />
    </p> 
	<p>
	   <label for="password" class="youpasswd"> Password </label>
	   <input id="password" name="password" required="required" type="password" />
	</p>
	<p class="login button">
	<input type="submit" value="Login" />
	</p>
	
	</form>   
	</div>
	</div>
 </div>
</section>

</html>

<?php 
mysql_connect("localhost","root","");
mysql_select_db("scavenger_db");

if(isset($_POST['login'])){

	$admin_name = $_POST['username'];
	$admin_pass = $_POST['password'];
	
	$query = "select * from admin where username='$admin_name' AND password='$admin_pass'";
	
	$run = mysql_query($query);
	
	if(mysql_num_rows($run)>0){
	echo
	"<script>window.open('scavCreator.html','_self')</script>";
	}
	else {
	
	echo "<script>alert('Username, password or user type is incorrect!')</script>";
	}

}

?>
