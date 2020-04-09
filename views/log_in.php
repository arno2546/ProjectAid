<?php
$pass="";$err_pass="";
$uname="";$err_uname="";
	if(isset($_POST['login']))
	{
		if(empty($_POST['uname'])){$err_uname="*Username Required";}
			else{$uname=htmlspecialchars($_POST['uname']);}
		if(empty($_POST['pass'])){$err_pass="*Password Required";}
			else{$pass=htmlspecialchars($_POST['pass']);}
		if($uname=="admin" && $pass=="admin")
		{
			header("Location:Admin_index.php");
		}
		if($uname=="user" && $pass=="user")
		{
			header("Location:gen_user_index.php");
		}
		if($uname=="sponsor" && $pass=="sponsor")
		{
			header("Location:sphome.php");
		}
		else{$err_uname="*Invalid Username or Password!!";}
	}



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Styles\log_in_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@1,700&display=swap" rel="stylesheet">
    <style>
  		body{
			  margin: 0;
			  padding: 0;
			  background: url('../storage/bg/g6.gif');
			  background-repeat: no-repeat;
			  background-size: cover;

			}
		.login-form{
			  width: 300px;
			  padding: 20px;
			  text-align: center;
			  background: url('../storage/bg/bg3.jpg');
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translate(-50%,-50%);
			  overflow: hidden;
  	</style>
  </head>
  <body>
    <div class="login-form">
      <form class="" action="" method="post">
        <h1>Log In</h1>
        <span style="color: red"><?php echo $err_uname;?></span><br>
        <input type="text" placeholder="Username" class="txtb" name="uname" value="<?PHP echo $uname;?>">
        <input type="password" placeholder="Password" class="txtb" name="pass">
        
        <input type="submit" name="login" value="Log In" class="login-btn">
        <a href="gen_user_signup.php">Create an account</a>
        <div class="topright"><a href="index.html">Home</a></div>
    </div>
  </body>
</html>
