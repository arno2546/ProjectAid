<?php $id=$_GET["pid"];
//echo $id;
include_once 'db.php';

?>

<html>
  <head>
    <?php include 'user_header_head.php'; ?>
    <?php
      $sql="SELECT * FROM projects1 WHERE pid=$id;";
      //echo $sql;
      $stmt=mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql))
      {
        echo "SQL statement failed!";
      }
      else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $title=$row["title"];
        $des=$row["des"];
        $glink=$row["glink"];
        $dlink=$row["dlink"];
        $puid=$row["uid"];
        }

    ?>
    <title>ProjectAid: <?php echo $title;  ?></title>
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
      }
      .creator
      {
        color:green;
      }

    </style>
  </head>
  <body>
      <?php include 'user_header_body.php';?>

      <div class="prcontainer">
        <p class="title">Project Title: <?php echo '<u>'.$title.'</u>'; ?></p><br>
        <span><b>Project Description:</b> <?php echo $des; ?></span><br><br>
        <span><b>Github Link: </b><a href="<?php echo 'https://'.$glink; ?>"target="_blank"> <?php echo $glink; ?></a></span><br>
        <span><b>Extra Links: </b><a href="<?php echo 'https://'.$dlink; ?>" target="_blank"> <?php echo $dlink; ?></a></span><br><br><br>
        <span class="creator"><b>Created By: </b>user id=<?php echo $puid; ?></span><br>
      </div>

  </body>
</html>
