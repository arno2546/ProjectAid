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
<div class="txt"> Register || Become an Sponsor</div><hr>
   </head>
          <body>
		  <form action="" method="post">
			<table align="center">
           
		   
		   <tr>
					<td>User Name: </td>
					<td><input type="text" value="<?php echo $uname;?>" name="uname">
						<br><span><?php echo $err_uname;?></span></td>
				</tr>
        <tr>
					<td>Company/Brand Name: </td>
					<td><input type="text" value="<?php echo $bname;?>" name="bname">
						<br><span><?php echo $err_bname;?></span></td>
				</tr>
          <tr>
					<td>Email Address</td>
					<td><input type="text" value="<?php echo $email;?>" name="email">
						<br><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" value="<?php echo $pass;?>" name="pass">
						<br><span><?php echo $err_pass;?></span></td>
				</tr>
				
				<tr>
					<td>Phone Number</td>
					<td><input type="text" value="<?php echo $phone;?>" name="phone">
						<br><span><?php echo $err_phone;?></span></td>
				</tr>
        <tr>
					<td>Country</td>
					<td><input type="text" value="<?php echo $country;?>" name="country">
						<br><span><?php echo $err_country;?></span></td>
				</tr>
        <tr>
					<td>Company/Brand Type</td>
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
        
				<tr><td colspan="2" align="center"><input type="submit" class="submit" value="Submit" name="submit"></td></tr>
			</table>
			<div class="msg"><?php echo $msg; ?></div>
		</form>
      </body>
</html>
