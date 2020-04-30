<?php $id=$_GET["pid"];
//echo $id;
include_once 'db.php';

?>

<html>
  <head>
    <?php include 'user_header_head.php'; ?>
    <title>ProjectAid: Project Deleted;  ?></title>
    <style media="screen">
      .deleteSucMess
      {
        color: red;
        font-size:24px;
        font-family: consolas;
        padding: 20px;
      }
    </style>
  </head>
  <body>
      <?php include 'user_header_body.php';?>
      <?php
        $sql="DELETE FROM projects1 WHERE pid=$id;";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
          echo "SQL statement failed!";
        }
        else {
          mysqli_stmt_execute($stmt);
          echo '';
          }

      ?>
      <div class="deleteSucMess">
        Project Deleted Successfully...
      </div>
  </body>
</html>
