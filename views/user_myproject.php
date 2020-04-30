<html>
<head>
  <title>ProjectAid : MyProjects</title>
    <?php include 'user_header_head.php' ?>
    <style>
      body
      {
        font-family: consolas;
        font-size: 14pt;
      }
      .prodis
      {
        display: flex;
        flex-flow:row wrap;
        margin-left: 30px;
        margin-right: 30px;

      }
      .ideas
      {
        flex-basis:200px;
        margin: 8px;
        border: 2px solid #191970;
        border-radius: 5px;
        background: white;
        box-shadow: 5px 5px 10px #154360;
        padding: 8px;
        text-align: center;
        position: relative;
      }
      .ideas a
      {
        color: #191970;
      }
      .ideas a:hover
      {
        color: #4169E1;
      }
      .ideas span
      {
        padding: 2px;
        font-size: 15px;
        font-family: sans-serif;
        text-align: justify;
      }
      .editpr,.deletepr
      {
        font-family: monospace;
        font-weight: bold;
        display: block;
        text-align: center;
        text-decoration: none;

      }
      .editpr:hover
      {
        background: #82e0aa;
        border-radius: 10px;
        transition: .4s;
        font-size: 18px;
      }
      .deletepr:hover
      {
        background: #cd6155;
        border-radius: 10px;
        transition: .4s;
        font-size: 18px;
      }


    </style>
  </head>
  <body>
    <?php

    include 'user_header_body.php';

     ?>
      <section class="prodis">
        <?php
          include_once 'db.php';
          $sql="SELECT * FROM projects1 WHERE uid=$uid;";
          $stmt=mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$sql))
          {
            echo "SQL statement failed!";
            echo $sql;
          }
          else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
              echo'<div class="ideas">
                <h3><a href="pid.php?pid='.$row["pid"].'">Title: '.$row["title"].'</a></h3>
                <span><b>Description:</b> '.$row["des"].'<br></span>
                <span>ID: '.$row["pid"].'<br></span>
                <span><b>GitHub Link: </b>'.$row["glink"].'<br><span>
                <span><b>Extra Links: </b>'.$row["dlink"].'<br><span>
                <span style="color:orange";><b>Aid Type: '.$row["aid_type"].'</b><br><span>
                <span style=color:black;><b>Contact:</b>'.$row["con"].'<br><span><br>';
                if($row["verf"]=="no")
                {
                  echo '<span style="color:red"><b>Not Verified</b></span><br>';
                }
                else {echo '<span style="color:green"><b>Verified</b></span><br>';}

              echo '
                <span><a class="editpr" href="user_edit_project.php?pid='.$row["pid"].'"><b>Edit</b></a></span><span>  <a class="deletepr" href="user_delete_project.php?pid='.$row["pid"].'">Delete</a></span><br>
                </div>';
            }
          }

?>



         </script>
      </section>

  </body>
</html>
