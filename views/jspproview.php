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
     <style>
    .btn{
      font-style: italic;
      display:inline-block;
       align-items: center;


    }

     .projects{
       z-index:-1;
       display: inline-block;
       position:relative;
       height: 350px;
       top: 100px;
       right: 0;
       background: #333;
       color: #fff;
       margin-right: 15px;
       border: 3px solid #73AD21;
       margin: 10px 10px 10px 10px;
       padding: 10px;
       text-align: center;

     }
     </style>
   </head>
   <body>
     <?php
       include_once 'db.php';
       $sql="SELECT * FROM projects1;";
       $stmt=mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql))
       {
         echo "SQL statement failed!";
       }
       else {
         mysqli_stmt_execute($stmt);
         $result = mysqli_stmt_get_result($stmt);
         while ($row = mysqli_fetch_assoc($result)) {
           if($row["verf"]=="yes"){
             echo'<div class="projects">

             <h3>Title: '.$row["title"].'</a></h3>
             <span><b>Description:</b> '.$row["des"].'<br></span>
             <span><b>GitHub Link:</b> '.$row["glink"].'<br></span>
             <span><b>Extra Links:</b> '.$row["dlink"].'<br></span>
             <span><b>Aid Type: '.$row["aid_type"].'</b><br></span>
             <span><b>Contact:</b> '.$row["con"].'<br>
             </span>



           ';
 echo '</div>' ;

         }
       }

     }
