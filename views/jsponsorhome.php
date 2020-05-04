<?php session_start();
if(!isset($_SESSION['uid']))
{
  echo "You are not logged in";
  exit();
}
$name=$_SESSION['uname'];
$uid=$_SESSION['uid'];

 ?>


<head>
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


  <style>
    html {
      background-color: #FF6347;
      margin: 0;
      height:100%;
      }



    .btn{
      font-size: 30px;
      display: inline-block;
      text-decoration: none;
      background: #87ceeb;
      color: black;
      width: 125px;
      height: 125px;
      line-height: 120px;
      border-radius: 50%;
      text-align: center;
      font-weight: bold;
      vertical-align: middle;
      overflow: hidden;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.29);
      border-bottom: solid 3px #bd6565;
      transition: .4s;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-left: -50px;

  }

  .btn:hover{
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
    background: rgba(255, 255, 255, 0.1);
    color: #FFD700
  }

  .btn:active{
      -ms-transform: translateY(2px);
      -webkit-transform: translateY(2px);
      transform: translateY(2px);
      box-shadow: 0 0 1px rgba(0, 0, 0, 0.15);
      border-bottom: none;
      background-color: orange;
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
          <a href="jsponsored.php">Sponsored</a>
        </li>
        <li>
          <a href="jsplisted.php">Listed</a>
        </li>
        <li>
          <a href="jspprofile.php">Profile</a>
        </li>
        <li>
          <a href="logout.php">Logout(<?php echo $name; ?>)</a>
        </li>
      </ul>
    </nav>
<div>
<a href="jspproview.php" class="btn">Sponsor</a>
</div>
</body>
  </html>
