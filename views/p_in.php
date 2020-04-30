

<html>
  <head>
    <?php include 'user_header_head.php'; ?>
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
    mysqli_query($conn,$sql);

    echo "Project Inserted";

    ?>
  </body>
</html>
