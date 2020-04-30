
<html>
  <head>
    <?php include 'user_header_head.php';  $id=$_GET["pid"];?>
  </head>
  <body>
    <?php
    include 'user_header_body.php';
    include_once 'db.php';

    $prname=$_POST['prname'];
    $des=$_POST['desc'];
    $dlink=$_POST['dlink'];
    $glink=$_POST['glink'];
    $con=$_POST['con'];
    $aid_type=$_POST['aid_type'];
    $verf="no";


    $sql= "INSERT INTO projects1 (title, des, dlink, glink, con, aid_type, uid, verf) VALUES ('$prname','$des','$dlink','$glink','$con','$aid_type','$uid', '$verf');";
    $sql="UPDATE projects1 SET title='$prname',des='$des',dlink='$dlink',glink='$glink',con='$con',aid_type='$aid_type',`uid`='$uid',`verf`='$verf' WHERE pid=$id;";
    mysqli_query($conn,$sql);
    echo '<span style="color:green; font-size:24px;"><b>Project Updated</b><span>';

    ?>
  </body>
</html>
