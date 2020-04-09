<html><head>
  <h1><font size="7"><b>Project<span style="color: #FF0059">Aid</span></b></font><h1>
    <title>Sponsor Sign Up</title>
    <h3> Sign Up to donate/fund Projects form all around the world !! </h3>
  <link href='https://fonts.googleapis.com/css?family=Nova Flat' rel='stylesheet'>
<style>

body{
  z-index: -1;
  background-color: linen;
  text-align: center;
  background-image: url("b.jpg");
  height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

h1 {
  font-weight:bolder;
  color:white;
  font-family: Nova Flat;
}

h3{
  color:white;
  font-family: Nova Flat;

}

.content{

      margin-top:20%;
      text-align: center;

      width: 550px;
      height:500px;
      color: black;
      background-image:url("..\storage\bg\l.jpg"); ;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      margin-left: auto;
      margin-right: auto;
      font-family:Nova Flat;
      border-width: 25px;
      border-style: solid;
      border-radius: 2%;
      border-color: linen;
}
#txtPassword{
    text-align: center;
    font-family: Nova Flat;
    width:70%;
    border: 2px solid red;
    border-radius: 9px;
    background-color: linen;
    color: black;
    transition: width 0.4s ease-in-out;

}
#txtPassword:focus{
  width:85%;
}

#button {
  width:30%;
  font-weight: bold;
  margin:10px;
  font-family: Nova Fit;
  color: #fff !important;
  text-transform: uppercase;
  text-decoration: none;
  background: #ed3330;
  padding: 10px;
  border-radius: 10px;
  display: inline-block;
  border: none;
  transition: all 0.4s ease 0s;
}
.a{


}
#button:hover {
  background: #434343;
  letter-spacing: 1px;
  -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
  transition: all 0.4s ease 0s;
}

</style>
</head>
<body>
  <?php
		$cname="";
		$uname="";
		$email="";
		$phone="";
		$city="";
		$country="";
		$interest="";
		$dob="";
		$pass="";
		$cpass="";
		$err_cname="";
		$err_uname="";
		$err_email="";
		$err_phone="";
		$err_city="";
		$err_country = "";
		$err_interest = "";
		$err_dob="";
    $err_pass="";
		$err_cpass="";

    if(isset($_POST['submit']))
   {

     if(empty($_POST['cname']))
     {
       $err_cname="*Name Required";
     }
     else
     {
       $cname=htmlspecialchars($_POST['cname']);
     }

     if(empty($_POST['uname']))
     {
       $err_uname="*User Name Required";
     }
     else
     {
       $uname=htmlspecialchars($_POST['uname']);
     }

     if(empty($_POST['email']))
     {
       $err_email="*Email Required";
     }
     elseif(!strpos($_POST['email'],"@")){
       $err_email="Wrong Email Address Entered";
     }
     elseif(!strpos($_POST['email'],".com")){
       $err_email = "Wrong Email Address Entered";
     }
     else{
       $email = htmlspecialchars($_POST["email"]);
     }
     if (empty($_POST['phone']))
     {
       $err_phone="*Phone Number Required";
     }elseif(!is_numeric($_POST['phone'])){
       $err_phone="*Enter proper Phone No";
       }
     else
     {
       $phone=$_POST['phone'];
     }

     if (empty($_POST['city']))
     {
       $err_city="*City Required";
     }
     else
     {
       $city=$_POST['city'];
     }
     if (empty($_POST['country']))
     {
       $err_country="*Country Required";
     }
     else
     {
       $country=$_POST['country'];
     }


     if (empty($_POST['dob']))
     {
       $err_dob="*Founding Year Required";
     }
     else
     {
       $dob=$_POST['dob'];
     }

     if (empty($_POST['interest']))
     {
       $err_interest="*Please choose the category you're interested";
     }
     else
     {
       $interestr=$_POST['interest'];
     }

     if(empty($_POST['pass']))
     {
       $err_pass = "*Enter Password";
     }
     else{

     }

     if(empty($_POST['cpass']))
     {
       $err_cpass = "*Password doesn't match";
     }
     else{

     }
   }
    ?>
 <form method="post" action="" >

    <table class = "content" background=""style="border:1px solid black;margin-left:auto;margin-right:auto; margin-top:auto;" >
        <tr>
            <td class="a"><b>Company/Brand Name</b></td>
            <td><input id="txtPassword" type="text" value="<?php echo $cname;?>" name="cname"><br>
            <span style="color:red"><?php echo $err_cname;?>
              </td>
        </tr>
        <tr>
            <td class="a"><b>User Name</b></td>
            <td><input id="txtPassword" type="text" value="<?php echo $uname;?>" name="uname"><br>
            <span style="color:red"><?php echo $err_uname;?></td>
        </tr>
		<tr>
            <td class="a"><b>Email Address</b></td>
            <td><input id="txtPassword" type="text" value="<?php echo $email;?>" name="email"><br>
            <span style="color:red"><?php echo $err_email;?></td></td>
        </tr>
		<tr>
            <td class="a"><b>Phone Number</b></td>
            <td><input id="txtPassword" type="text" value="<?php echo $phone;?>" name="phone"><br>
            <span style="color:red"><?php echo $err_phone;?></td>
        </tr>
		<tr>
            <td class="a"><b>City</b></td>
            <td><input id="txtPassword" type="text"value="<?php echo $city;?>" name="city"><br>
            <span style="color:red"><?php echo $err_city;?></td>
        </tr>
		<tr>
            <td class="a"><b>Country</b></td>
            <td><input id="txtPassword" type="text" value="<?php echo $country;?>" name="country"><br>
            <span style="color:red"><?php echo $err_country;?></td>
        </tr>
        <tr>
            <td><b>Founding Year</b></td>
            <td><input id="txtPassword" type="text"  value="<?php echo $dob;?>" name="year"><br>
              <span style="color:red"><?php echo $err_dob;?></td>
             </tr>
             <tr>
                 <td><b>Interested In</b></td>
                 <td>
                 <select id="txtPassword">
                 <option value="art">Art</option>
                 <option value="film">Filmiograohy</option>
                 <option value="gaming">Gaming</option>
                 <option value="music">Music</option>
               </select><br>
                 <span style="color:red"><?php echo $err_interest;?>
               </td>
                  </tr>
		<tr>
            <td><b>Password:</b></td>
            <td><input id="txtPassword" type="password" name="pwd"><br>
            <span style="color:red"><?php echo $err_pass;?></td>
        </tr>
        <tr>
            <td><b>Confirm Password:</b></td>
            <td><input id="txtPassword" type="password" name="pwd"><br>
            <span style="color:red"><?php echo $err_cpass;?></td>
        </tr>
        </table>
        <tr>
					<td colspan="2" align="center">
						<input id ="button" type="submit" name="submit" value="Sign Up">
            <a href="sphome.php">Home Page</a>
					</td>
				</tr>
   </form>
 </body>
   </html>
