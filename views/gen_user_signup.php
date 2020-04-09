<html>
  <head>
    <link rel="stylesheet" href="styles\gen_sign_sheet.css">
    <title>Sign Up</title>
  </head>
  <body align="center">
    <?php
  		$err_fname="";
     	$err_lname="";
  		$fname="";
     	$lname="";
  		$err_mail="";
  		$mail="";
  		$err_pass="";
  		$pass="";
      $area="";
      $phone="";
      $err_phone="";
      $err_area="";
      $stadd1="";
      $err_stadd1="";
      $stadd2="";
      $err_stadd2="";
      $err_city="";
      $city="";
      $state="";
      $err_state="";
      $zipcode="";
      $err_zipcode="";
      $h=array();
      $err_cont="";
      $Day="";
      $err_dob="";
      $Month="";
      $uname="";$err_uname="";
      $cpass="";$err_cpass="";


      if(isset($_POST['submit']))
      {
        //for first name
        if(empty($_POST['fname'])){$err_fname="*First Name Required";}
        else{$fname=htmlspecialchars($_POST['fname']);}
        //for last name
        if(empty($_POST['lname'])){$err_lname="*Last Name Required";}
        else{$lname=htmlspecialchars($_POST['lname']);}
        //for mail
        if(empty($_POST['mail'])){$err_mail="*Mail Required";}
          elseif (!strpos($_POST['mail'], "@")){$err_mail="*Enter proper mail address";}
          elseif (!strpos($_POST['mail'], ".com")){$err_mail="*Enter proper mail address";}
          else{$mail=htmlspecialchars($_POST['mail']);}
        //for phone number : Area
        if(empty($_POST['area'])){$err_area="*Area Required";}
          elseif (!is_numeric($_POST['area'])) {$err_area="*Enter proper Area code";}
          //elseif (strlen($_POST['area']>4)) {$err_area="*Enter proper Area code";}
          else{$area=htmlspecialchars($_POST['area']);}
        //for phone number : phone Number 
        if(empty($_POST['phone'])){$err_phone="*Phone-Number Required";}
          elseif (!is_numeric($_POST['phone'])) {$err_phone="*Enter proper Phone-Number";}
          else{$phone=htmlspecialchars($_POST['phone']);}
        //for street address
        if(empty($_POST['stadd1'])){$err_stadd1="*Street Address Required";}
          else{$stadd1=htmlspecialchars($_POST['stadd1']);}
        //for contamination
        if(empty($_POST['h'])){$err_cont="*Please Select at least one ".'<br>'."of the above";}
          else{$h=$_POST['h'];}
        //for Birth Date
        if($_POST['Day']== 0){$err_dob="*Please Select a proper Birth date";}
          else{$Day=htmlspecialchars($_POST['Day']);}
        if($_POST['Month']== 0){$err_dob="*Please Select a proper Birth date";}
          else{$Month=htmlspecialchars($_POST['Month']);}
        if(empty($_POST['pass'])){$err_pass="*Password Required";}
        	elseif (8>strlen($_POST['pass'])) {$err_pass="*Password must contain at least 8 characters";}
        	else{$pass=htmlspecialchars($_POST['pass']);}

        if(empty($_POST['cpass'])){$err_cpass="*Password must be confirmed";}
        	elseif ($_POST['cpass']!=$_POST['pass']){$err_cpass="*Password does not Match";}
        	else{$cpass=htmlspecialchars($_POST['cpass']);}
        if(empty($_POST['uname'])){$err_uname="*Username Required";}
        	elseif (6>strlen($_POST['uname'])){$err_uname="*Username must contain at least 6 characters";}
        	else{$uname=htmlspecialchars($_POST['uname']);}
      }
      ?>
    <font size="6"><b>Sign<span style="color: #FF6347">Up</span></b></font>
    <br><b><font color="grey">Complete the form below</font></b>
    <hr>
      <form method="post" action="">
        <table align="center">
          
  <!--For Name-->
           <tr>
            <td><b>Name:</b></td>
            <td><div class="textbox">
              <input type="text" value="<?php echo $fname;?>" name="fname" placeholder="First Name" ></div>
              <br><span style="color:red"><?php echo $err_fname;?></span>
            </td>
            <td><div class="textbox">
              <input type="text" value="<?php echo $lname;?>" name="lname" placeholder="Last Name"></div>
              <br><span style="color:red"><?php echo $err_lname;?></span>
            </td>
	
<!--For Username-->
			<tr>
				<td><b>Username:</b></td>
				<td><div class="textbox">
					<input type="text" value="<?php echo $uname;?>" name="uname" placeholder="Username: min 6 chars"></div>
					<br><span style="color: red"><?PHP echo $err_uname;?></span>
				</td>
			</tr>
  <!--For Email-->
          </tr>
          <tr>
            <td><b>E-mail</b></td>
            <td ><div class="textbox">
              <input type="text" name="mail" size="30" placeholder="ex:myname@example.com" value="<?php echo $mail;?>"></div>
            <br><span style="color:red"><?php echo $err_mail;?></span></td>

          </tr>

   <!--For Password--> 
   		<tr>
   			<td><b>Password:</b></td>
   			<td><div class="textbox">
   				<input type="Password" name="pass" placeholder="min 8 chars"></div>
   				<br><span style="color:red"><?php echo $err_pass;?></span>
   			</td>
   		</tr> 
   	<!--For Confirm Password--> 
   		<tr>
   			<td><b>Confirm Password:</b></td>
   			<td><div class="textbox">
   				<input type="Password" name="cpass" placeholder="Repeat Password"></div>
   				<br><span style="color: red"><?php echo $err_cpass;?></span>
   			</td>
   		</tr>     
  <!--for Phone-Number -->
          <tr>
            <td><b>Phone Number :</b></td>            
            <!--phone-->
            <td><div class="textbox">
              <input type="text" name="phone" value="<?PHP echo $phone;?>" placeholder="ex: 01*********"></div>
              <br><span style="color: red"><?PHP echo $err_phone?></span>
            </td>
          </tr>
  <!--Address-->
          <tr>
            <td><b>Address :</b></td>
            <td colspan="2"><!--Street address --><div class="textbox">
              <input type="text" name="stadd1" size=45 value="<?PHP echo $stadd1?>" placeholder="Address of your residence"></div>
              <br><span style="color: red"><?PHP echo $err_stadd1;?></span>
            </td>
          </tr>
    <!--For DOB-->
          <tr>
            <td><b>Birth Date :</b> </td>
           
            <td>
              <select name="Month" ><!--month selection -->
                <?php
                  for($i=0;$i<13;$i++)
                  {
                    echo "<option>".$i."</option>";
                  }
                ?>
              </select>
              <br>Month<br>
              <span style="color: red"><?PHP echo $err_dob;?></span>
            </td>
           
             

            <td>
              <select name="Day"><!--day selection -->
                <?php
                  for($i=0;$i<32;$i++)
                  {
                    echo "<option>".$i."</option>";
                  }
                ?>
              </select>
              <br>Day<br>
            </td>

            

            <td>
              <select name="Year"><!--Year selection -->
                <?php
                  for($i=1900;$i<2021;$i++)
                  {
                    echo "<option>".$i."</option>";
                  }
                ?>
              </select>
              <br>Year<br>
            </td>

    <!--Occupation-->
    	<tr>
    		<td><b>Occupation:</b></td>
    		<td>
    			<select name="Occupation">
    				<option>None</option>
    				<option>Academic</option>
    				<option>Business</option>
    				<option>Engineering</option>
    				<option>Freelancer</option>
    				<option>Others</option>
    			</select>
    		</td>
    	</tr>
    <!--General Interests-->
          <tr>
            <td><b>Select your domain <br>of interest(s):</b></td>
            <td>
                <input type="checkbox" name="h[]" value="Friends or Colleauge"> Arts and crafts
                <br><input type="checkbox" name="h[]" value="Google"> Technology
                <br><input type="checkbox" name="h[]" value="Blog"> Science
                <br><input type="checkbox" name="h[]" value="News Article"> Electronics
                <br><span style="color: red"><?php echo $err_cont;?></span>
             </td>
          </tr>

          <tr>
            <td colspan="3" align="center">
              <input type="submit" name="submit" value="Submit" class="btn">
            </td>
          </tr>
        </table>
      </form>
       <div class="topright"><a href="index.html">Home</a></div>
  </body>

</html>
