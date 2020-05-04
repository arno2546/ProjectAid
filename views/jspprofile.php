<html>
   <head>
     <?php include 'jspheader.php';
     $name=$_SESSION['uname'];
     $uid=$_SESSION['uid'];

     function log_out()
     {
       session_destroy();
       header("Location:log_in.php");
     }
     if(isset($_GET['log_out']))
     {
       log_out();
     }
     ?>


     <title>Sponsor|ProjectAid</title>
     <style>

       .info
       {
         position: absolute;
         top: 10%;
         left:8%;



         width: 80%;
         margin: 0 auto;
         padding: 20px;

       }
       .info span
       {
         font-size: 25px;

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
       }
       .unbann a:hover
       {
         color:white;
         background:#0038a7;
         border-radius: 20px;
         transition: .4s;
       }


     </style>
   </head>
   <body>
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
           $bname=$row["fname"];
           $type=$row["occupation"];
           $country=$row["address"];
           $phone=$row["phone"];
           $status=$row["status"];
           $tit=$uname;
           }

       ?>

       <div class="info">
         <p class="title">User: <?php echo '<u>'.$uname.'</u>'; ?></p><hr><br>
         <span><b>Email :</b> <?php echo $email; ?></span><br><br>
         <span><b>Name: </b> <?php echo $bname; ?></span><br><br>
         <span><b>Address: </b> <?php echo $country; ?></span><br><br>
         <span><b>Occupation: </b> <?php echo $type; ?></span><br><br>
         <span><b>Contact:</b> <?php echo $phone; ?></span><br><br>


       </div>

       <div class="unbann">
         <a href="#">Edit</a>
       </div>

   </body>
 </html>
