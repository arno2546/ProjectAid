<?php
include_once 'db.php';

$bname = "";
$email="";
$country="";
$pass="";
$type="";
$phone="";
$err_bname="";
$err_email="";
$err_country="";
$err_type="";
$err_pass="";
$err_phone="";
$msg = "";
$has_error=false;
$user_type="sponsor";
$uname ="";
$lname="";
$err_uname="";
$status="active";

       if(isset($_POST['submit']))
	{

		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;
		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['bname']))
		{
			$err_bname="*Company/Brandname Required";
			$has_error=true;
		}
		else
		{
			$bname=$_POST['bname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
		}
		else
		{
			$pass=$_POST['pass'];
		}
    if(empty($_POST['country']))
		{
			$err_country="*Company Country Required";
			$has_error=true;
		}
		else
		{
			$country=$_POST['country'];
		}
    if(empty($_POST['type']))
		{

		}
		else
		{
			$type=$_POST['type'];
		}

      if(empty($_POST['phone'])){
        $err_phone="*Phone Number Required";
        $has_error=true;
    }
      else
	    {
	      $phone=$_POST['phone'];
	    }

	    if(empty($_POST['email'])){
	       $err_email="*Mail Required";
         $has_error=true;
	    }
	    else {
	       $email=$_POST['email'];
	    }

		if(!$has_error)
			{
	        	$sql= "INSERT INTO users (uname, password,email,fname,lname,status,user_type,address,phone,occupation) VALUES ('$uname','$pass','$email','$bname','$lname','$status','$user_type','$country','$phone','$type');";
	            mysqli_query($conn,$sql);

              	$uname="";$err_uname="";
              	$pass="";$err_pass="";
              	$fname="";$err_fname="";
                $lname="";$err_lname="";
                $mail="";$err_mail="";
                $add="";$err_add="";
                $phone="";$err_phone="";
                $occupation="";
              	$has_error=false;
              	$msg="User Created";
                $has_error=false;
		       }
	}

?>

<html>
   <head>

     <style>

       .login{
         position: absolute;
         top:1.5%;
         right:10%;
       }
      .txt{
        padding: 15px;
        background-color:#fed8b1;
        font-weight: bold;
        font-size: 30px;
        text-align: center;
        align-items: center;
        font-family: consolas;
        color:#566573;
      }

               .type{
                 position: absolute;
                 left: 50%;
                 text-align: center;
                 font-weight: bold;
                 height: 30px;
               }
       select,input{

          font-family: consolas;
        }
     .form  {
       height: 460px;
  font-weight: bold;
  position: absolute;
  top:9%;
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 660px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 	#FF6347, 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input  {
  border-radius: 6px;
  font-family: consolas;
  font-weight: bold;
  outline: 0;
  background: #f2f2f2;
  width: 400px;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form .button {
  border-radius: 20px;
  font-family: consolas;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor:pointer;
}
.form .button:hover,.form .button:active,.form .button:focus {
  background: #43A047;
}
 .button {
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: #60a3bc;
padding: 20px;
border-radius: 50px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
}
.button:hover {
text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}
  .txt {

  top:0px;
  position:fixed;
  width: 100%;
  display: inline-block;
  background-color:  #fed8b1

  }
  .lo{
    width: 30px;
  }





     </style>
<nav class="txt"> Register || Become a Sponsor ||
<a class="lo" href="log_in.php"><span style="color: #5dade2;">Log In</span></a>
</nav><hr>
   </head>
          <body>
		  <form style="color:#fed8b1" class="form" action="" method="post">
			<table align="center">


		   <tr>
					<td  style="font-weight: bold">User Name: </td>
					<td><input style="width:400px" type="text" value="<?php echo $uname;?>" name="uname">
						<br><span><?php echo $err_uname;?></span></td>
				</tr>
        <tr>
					<td style="font-weight: bold" >Company/Brand Name: </td>
					<td><input type="text" value="<?php echo $bname;?>" name="bname">
						<br><span><?php echo $err_bname;?></span></td>
				</tr>
          <tr>
					<td style="font-weight: bold" >Email Address</td>
					<td><input type="text" value="<?php echo $email;?>" name="email">
						<br><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td style="font-weight: bold" >Password</td>
					<td><input type="password" value="<?php echo $pass;?>" name="pass">
						<br><span><?php echo $err_pass;?></span></td>
				</tr>

				<tr>
					<td style="font-weight: bold" >Phone Number</td>
					<td><input type="text" value="<?php echo $phone;?>" name="phone">
						<br><span><?php echo $err_phone;?></span></td>
				</tr>
        <tr>
					<td style="font-weight: bold" >Country</td>
					<td><input type="text" value="<?php echo $country;?>" name="country">
						<br><span><?php echo $err_country;?></span></td>
				</tr>
        <tr>
					<td style="font-weight: bold" >Company/Brand Type</td>
					<td><td>
            <select name="type" class="type">

      			  <option value="Academic">Academic</option>
      			  <option value="Business">Business</option>
              <option value="Engineering">Engineering</option>
              <option value="Telecom">Telecom</option>
			  <option value="Owned">Owned</option>
        		</select><br><br>
        </td></td>
				</tr>

				<tr><td colspan="2" align="center"><input type="submit" class="button" value="Submit" name="submit"></td></tr>
			</table>
			<div class="msg"><?php echo $msg; ?></div>
		</form>
    <div class ="login">

      <div>
      </body>
</html>
