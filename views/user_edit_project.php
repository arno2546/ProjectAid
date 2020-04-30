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
      // echo "<br>";
      // echo $row["title"].'<br>';
      // echo $row["des"].'<br>';
      // echo $row["glink"].'<br>';
      // echo $row["dlink"].'<br>';
      $title=$row["title"];
      $des=$row["des"];
      $glink=$row["glink"];
      $dlink=$row["dlink"];
      $con=$row["con"];
      }

  ?>
	<title>Edit Project</title>
	<script type="text/javascript">
		function validate()
		{
			var prname = document.getElementById("prname");
			var desc = document.getElementById("desc");
			var con = document.getElementById("con");
			var aid_type=document.getElementById("aid_type");

			if(prname.value.trim()=="")
			{
				alert("Blank Project Title");
				prname.style.border= "solid 3px red";
				return false;
			}
			if(desc.value.trim()=="")
			{
				alert("Blank Project Description");
				desc.style.border="solid 3px red";
				return false;

			}
			else if(desc.value.trim().length>500)
			{
				alert("Please keep the Discription brief: size<500 characters (Add link in Extra links for detailed documentation)");
				desc.style.border="solid 3px red";
				return false;
			}
			else if (con.value.trim()=="") {
				alert("Blank Contact Information");
				con.style.border="solid 3px red";
				return false;
			}
			else if (aid_type.value.trim()=="") {
				alert("Blank Aid Type");
				aid_type.style.border="solid 3px red";
				return false;
			}
			else
			{
				return true;
			}
		}
	</script>
	<style type="text/css">
		body
		{
			font-family: consolas;
			font-size: 14pt;
		}
		form
		{
				padding: 20px;
  			text-align: center;
		}
		input
		{
			outline: 0;
			border-width: 0 0 2px;
			border-bottom:2px solid #0038a7;
		}
		.aid_type
		{
			outline: 0;
			border-width: 0 0 2px;
			border-bottom:2px solid #0038a7;
		}

		#desc
		{
			height: 200px;
			width: 700px;
			font-family: consolas;
			font-size: 14pt;
		}

		#prname,#glink,#dlink,#con,#aid_type
		{
			width: 700px;
			font-family: consolas;
			font-size: 14pt;
		}
		#crbtn
		{
			background-color: #0038a7;
			font-weight: bolder;
		}

	</style>
</head>
<body>
	<?php include 'user_header_body.php'; ?>
	<form onsubmit="return validate();" action="p_edit.php?pid=<?php echo $id; ?>" method="POST">
		<input type="text" name="prname" id="prname" value="<?php echo $title; ?>" class="prname"><br><br>
		<textarea rows="4" cols="50" name="desc" id="desc" class="desc"><?php echo $des; ?></textarea><br><br>
		<input type="text" name="glink" id="glink" value="<?php echo $glink; ?>" class="glink"><br><br>
		<input type="text" name="dlink" id="dlink" value="<?php echo $dlink; ?>" class="dlink"><br><br>
		<input type="text" name="con" id="con" value="<?php echo $con; ?>" class="con"><br><br>
		<select id="aid_type" name="aid_type" class="aid_type">
			  <option value="Financial">Financial</option>
			  <option value="WorkingSpace">Working Space</option>
			  <option value="Mentorship">Mentorship</option>
		</select><br><br>
    <?php $_POST['uid']=$uid; $_POST['pid']=$id;?>
		<button type="submit" id="crbtn" class="crbtn">Save Project</button>

	</form>
</body>
</html>
