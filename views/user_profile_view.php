
 <html>
   <head>
     <?php include 'user_header_head.php'; ?>

     <title>ProjectAid : profile</title>
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
       .unbann a
       {
         color: #0038a7;
         font-size: 24px;
         font-weight: bold;
         border: 2px solid #0038a7;
         display: block;
         width: 200px;
         margin-left: 40%;
         transition: .4s;
       }
       .unbann a:hover
       {
         color:white;
         background:#0038a7;
         border-radius: 20px;
         
       }


     </style>
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
           $tit=$uname;
           }

       ?>

       <div class="prcontainer">
         <p class="title">User: <?php echo '<u>'.$uname.'</u>'; ?></p><hr><br>
         <span><b>Email :</b> <?php echo $email; ?></span><br><br>
         <span><b>Name: </b> <?php echo $fname.' '.$lname; ?></span><br><br>
         <span><b>Address: </b> <?php echo $address; ?></span><br><br>
         <span><b>Occupation: </b> <?php echo $occupation; ?></span><br><br>
         <span><b>Contact:</b> <?php echo $con; ?></span><br><br>
       </div>

       <div class="unbann">
         <a href="user_edit_profile.php">Edit</a>
       </div>

   </body>
 </html>
