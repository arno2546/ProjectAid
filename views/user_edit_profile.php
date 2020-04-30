
 <html>
   <head>
     <?php include 'user_header_head.php'; ?>

     <title>ProjectAid  ?></title>
     <style>
       .prcontainer
       {
         width: 80%;
         margin: 0 auto;
         padding: 20px;

       }
       .prcontainer span
       {
         font-size: 20px;

       }
       .title
       {
         font-size: 30px;
         font-weight: bolder;
         color:#191970;
         text-align: center;
       }
       .creator
       {
         color:green;
       }
       .unbann
       {
         text-decoration: none;
         text-align: center;
         color: #0B5345;
         align-items: center;
       }
       .unbann
       {
         color: #0038a7;
         font-size: 18px;
         font-weight: bold;
         border: 2px solid #0038a7;
         display: block;
         width: 200px;
         margin-left: 42%;
         text-decoration: none;
       }
       .unbann:hover
       {
         color:white;
         background:#0038a7;
         border-radius: 20px;
         transition: .4s;
       }
       .form
       {
         text-align: center;
         padding: 20px;
       }
       input
       {
         width: 500px;
         border-radius: 10px;
         padding: 8px;
         border-bottom: 2px solid green;
         text-align: center;
       }

     </style>
     <script type="text/javascript">
     function validate()
     {
       var uname= document.getElementById("uname");
       var pass = document.getElementById("pass");
       var cnf_pass=document.getElementById("cnf_pass");
       var con=document.getElementById("con");

       if(uname.value.trim()=="")
       {
         alert("Username Cannot be blank!")
         uname.style.borderBottom="solid 2px red";
         return false;
       }
         else {
           uname.style.borderBottom="solid 2px green";
         }
      if(pass.value.trim()=="")
       {
         alert("Password Cannot be blank!")
         pass.style.borderBottom="solid 2px red";
         return false;
       }
         else {
           pass.style.borderBottom="solid 2px green";
         }
       if(cnf_pass.value.trim()=="")
       {
         alert("Password must be confirmed")
         cnf_pass.style.borderBottom="solid 2px red";
         return false;
       }
         else if(cnf_pass.value!=pass.value)
         {
           alert("Password doesn't match")
           cnf_pass.style.borderBottom="solid 2px red";
           return false;
         }
         else {
           cnf_pass.style.borderBottom="solid 2px green";
         }
     }
     </script>
   </head>
   <body>
       <?php include 'user_header_body.php';?>
       <?php
         include_once 'db.php';
         $sql="SELECT * FROM users WHERE uid=$uid;";
         $stmt=mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt,$sql))
         {
           echo "SQL statement failed!";
         }
         else {
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
           $row = mysqli_fetch_assoc($result);
           $uid=$row["uid"];
           $email=$row["email"];
           $uname=$row["uname"];
           $fname=$row["fname"];
           $lname=$row["lname"];
           $occupation=$row["occupation"];
           $address=$row["address"];
           $con=$row["phone"];
           $status=$row["status"];
           }

       ?>

       <div class="form">
         <form onsubmit="return validate();" action="../controllers/user_profile_edit_handler.php" method="post">
         		<input type="text" name="uname" id="uname" placeholder="Username" value="<?php echo $uname; ?>" class="uname"><br><br>
         		<input type="password" name="pass" id="pass" placeholder="password" class="pass"><br><br>
            <input type="password" name="cnf_pass" id="cnf_pass" placeholder="Confirm password" class="cnf_pass"><br><br>
         		<input type="text" name="con" id="con" placeholder="Phone Number *(not required)" value="<?php echo $con; ?>" class="con"><br><br>
            <button type="submit" class="unbann" id="crbtn">Update</button>

         </form>



   </body>
 </html>
