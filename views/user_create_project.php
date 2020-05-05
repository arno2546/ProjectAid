<html>
<head>
	<?php include 'user_header_head.php'; ?>
	<title>Create Project</title>
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
		.crbtn
		{
			font-weight: bolder;
			height: 30px;
			width: 200px;
			border: 0 0 2px solid blue;
			transition: 0.5s;
		}
		.crbtn:hover
		{
			border-radius: 20px;
			color: white;
			background:#0038a7;	
		}

	</style>
</head>
<body>
	<?php include 'user_header_body.php'; ?>
	<form onsubmit="return validate();" action="p_in.php" method="POST">
		<input type="text" name="prname" id="prname" placeholder="Project Name" class="prname"><br><br>
		<textarea rows="4" cols="50" name="desc" id="desc" placeholder="Brief Project Description(Within 500 characters)" class="desc"></textarea><br><br>
		<input type="text" name="glink" id="glink" placeholder="GitHub link (if any)" class="glink"><br><br>
		<input type="text" name="dlink" id="dlink" placeholder="Other documentation or important links" class="dlink"><br><br>
		<input type="text" name="con" id="con" placeholder="Contact Info (i.e. mail, phonenumber)" class="con"><br><br>
		<select id="aid_type" name="aid_type" class="aid_type">
			  <option value="Financial">Financial</option>
			  <option value="WorkingSpace">Working Space</option>
			  <option value="Mentorship">Mentorship</option>
		</select><br><br>
		<button type="submit" id="crbtn" class="crbtn">Create Project</button>
<?php $_POST['uid']=$uid; ?>
	</form>
</body>
</html>
