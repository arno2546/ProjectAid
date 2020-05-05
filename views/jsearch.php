<?php
include_once 'db.php';
$key=$_GET['sk'];
$rs=mysqli_query($conn,"SELECT * FROM projects1 WHERE title LIKE '%$key%'");
?>

<table>
	<?php
while($row=mysqli_fetch_assoc($rs))
		if($row["verf"]=="yes"){
			echo'<div class="ideas">
                <h3><b>Title:</b> '.$row["title"].'</a></h3>
                <span><b>Description:</b> '.$row["des"].'<br></span>
                <span><b>GitHub Link:</b> '.$row["glink"].'<br><span>
                <span><b>Extra Links:</b> '.$row["dlink"].'<br><span>
                <span><b>Aid Type: '.$row["aid_type"].'</b><br><span>
                <span><b>Contact:</b> '.$row["con"].'<br><span>
								<span><b>****************************************</b><br><span>'
								;
                }
                echo '</div>';



	?>
</table>
