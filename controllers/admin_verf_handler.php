<?php

  include 'admin_header_head.php';
  $id=$_GET["id"];
  $verf=$_GET["verf"];
  include 'admin_header_body.php';
  include_once '../models/db.php';
  //$sql= "INSERT INTO projects1 (title, des, dlink, glink, con, aid_type, uid, verf) VALUES ('$prname','$des','$dlink','$glink','$con','$aid_type','$uid', '$verf');";
  $sql="UPDATE projects1 SET verf='$verf' WHERE pid=$id;";
  if($verf=="no")
  {
    $sql="UPDATE projects1 SET verf='yes' WHERE pid=$id;";
  }
  elseif ($verf=="yes") {
    $sql="UPDATE projects1 SET verf='no' WHERE pid=$id;";
  }
  mysqli_query($conn,$sql);
  echo '<span style="color:green; font-size:24px;"><b>Project Verified</b><span>';
  header("Location:../views/admin_home_view.php");
?>
