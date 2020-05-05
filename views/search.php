<?php
include_once 'db.php';
$key=$_GET['sk'];
$rs=mysqli_query($conn,"SELECT * FROM projects1 WHERE title LIKE '%$key%'");
?>

<table>
	<?php
while($row=mysqli_fetch_assoc($rs))
		{
			echo'<div class="ideas">
                <h3><a href="pid.php?pid='.$row["pid"].'">Title: '.$row["title"].'</a></h3>
                <span><b>Description:</b> '.$row["des"].'<br></span>
                <span>ID: '.$row["pid"].'<br></span>
                <span><b>GitHub Link:</b> '.$row["glink"].'<br><span>
                <span><b>Extra Links:</b> '.$row["dlink"].'<br><span>
                <span style=color:orange;><b>Aid Type: '.$row["aid_type"].'</b><br><span>
                <span style=color:black><b>Contact:</b> '.$row["con"].'<br><span>';
                if($row["verf"]=="no")
                {
                  echo '<span style="color:red;"><b>Not Verified</b></span>';
                }
                else {echo '<span style="color:green;"><b>Verified</b></span>';}

              echo '</div>';
		}


	?>
</table>