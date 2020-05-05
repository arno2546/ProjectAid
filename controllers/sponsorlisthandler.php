<html>
  <head>
    <?php include 'jspheader.php';
      $id=$_GET["id"];
      $list=$_GET["list"];
      include 'jspheader.php';
      include_once '../models/db.php';
      $sql= "INSERT INTO listed (uname, projectname,contact,type,list) VALUES ('$uname','$title','$contact','$type','$list');";
      $sql="UPDATE listed SET list='$list' WHERE pid=$id;";
      if($verf=="no")
      {
        $sql="UPDATE listed SET list='yes' WHERE pid=$id;";
      }
      elseif ($verf=="yes") {
        $sql="UPDATE listed SET list='no' WHERE pid=$id;";
      }
      mysqli_query($conn,$sql);
      echo '<span style="color:green; font-size:24px;"><b>Project Verified</b><span>';
      header("Location:../views/jspheader.php");
    ?>
