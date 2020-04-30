<?php session_start();
if(!isset($_SESSION['uid']))
{
  echo "You are not logged in";
  exit();
}
$name=$_SESSION['uname'];
$uid=$_SESSION['uid'];

    function log_out()
    {
      session_destroy();
      header("Location:log_in.php");
    }
    if(isset($_GET['log_out']))
    {
      log_out();
    }
 ?>
<nav>
  <ul>
    <div class="nav1">
      <li><a class="logo" href="user_home.php">ProjectAid</a></li>
      <li><a href="user_home.php">Home</a></li>
      <li><a href="user_myproject.php">My Projects</a></li>
      <li><a href="user_search.php">Search</a></li>
      <li><a href="user_create_project.php">Create Project</a></li>
      <li><a href="user_home.php?log_out=true">Log out (<?php echo $name; ?>)</a></li>
    </div>
  </ul>
</nav>
