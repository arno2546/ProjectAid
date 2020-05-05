<!DOCTYPE html>
<html>
<head>
	<?php include 'jspheader.php';?>
	</head>

	<body>
		<!DOCTYPE html>
		<html>
		<head>
			<?php include 'jspheader.php';?>
			<style type="text/css">

		      .search_bar
		      {
						border-top: 3px solid black;
						font-family: fantasy;
		      	width: 100%;
		      	height: 20px;
		      	margin-left: 30%
		      }
		      .search_bar input
		      {
						border-radius: 10px;
		      	width: 500px;
		      	height: 20px;
		      	font-family: consolas;
		      	transition: .5s;
		      	text-align: center;
		      }
		      .search_bar input:focus
		      {
						border-radius: 20px;
		      	width: 600px;
		      	height: 30px;
		      	font-size: 28px;
		      	margin-left: -5%;
		      	border: 2px solid #0038a7;
		      }
		      .search_result
		      {
		      	margin-top: 5%;
		      	margin-left: 10%;


		      }

			</style>
			<title>Search Projects</title>
			<script>
				function call_aj()
				{
					http= new XMLHttpRequest();
					http.onreadystatechange=function()
					{
						if(http.readyState==4 && http.status==200)
						{
							document.getElementById("output").innerHTML=http.responseText;
						}
						else if(http.status==404)
						{
							alert("file not found");
						}
					}
					http.open("GET","jsearch.php?sk="+search_str,true);
					http.send();
				}
				function search()
				{
					http= new XMLHttpRequest();
					var search_str=document.getElementById("search_txt").value;
					http.onreadystatechange=function()
					{
						if(http.readyState==4 && http.status==200)
						{
							document.getElementById("search_result").innerHTML=http.responseText;
						}
						else if(http.status==404)
						{
							alert("file not found");
						}
					}
					http.open("GET","jsearch.php?sk="+search_str,true);
					http.send();

				}
			</script>
		</head>
		<body>
			<?php include 'jspheader.php';?>
			<section class="prodis">
				<div id="output"></div>
				<div class="search_bar">
					<br>
					<input type="text" id="search_txt" onkeyup="search()" placeholder="Search Projects">
				</div>
				<div class="search_result"  id="search_result"></div>
			</section>
		</body>
		</html>
	</body>
	</html>
