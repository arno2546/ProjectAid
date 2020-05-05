<?php session_start();
if(!isset($_SESSION['uid']))
{
  echo "You are not logged in";
  exit();
}
$name=$_SESSION['uname'];
$uid=$_SESSION['uid'];

 ?>
<html>
<head>
<style>
nav {

top:0px;
position:fixed;
width: 100%;
display: inline-block;
background-image: linear-gradient(to bottom right, red, orange);

}


nav ul {

  text-align: center;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 100%);
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  padding: 18px;
  font-family: "Century Gothic";
  font-weight: bold;
  text-transform:uppercase;
  color: black;
  font-size: 20px;
  text-decoration: none;
  display: block;
}

nav ul li a:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
  background: rgba(255, 255, 255, 0.1);
  color: rgba(0, 35, 122, 0.7);
}
</style>

</head>
<body>
  <nav>
    <ul>

      <li>
        <a href="jsponsorhome.php">Project Aid</a>
      </li>
      <li>
        <a href="jspsearch.php">Search Projects</a>
      </li>
      <li>
        <a href="jspprofile.php">Profile</a>
      </li>
      <li>
        <a href="logout.php">Logout(<?php echo $name; ?>)</a>
      </li>

    </ul>

  </nav>
</body>
</html>
