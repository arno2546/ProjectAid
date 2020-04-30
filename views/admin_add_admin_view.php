<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'admin_header_head.php'; ?>
    <title>Add new Admin</title>
    <script type="text/javascript">
    String.prototype.isNumber = function(){return /^\d+$/.test(this);}
    console.log("123123".isNumber()); // outputs true
    console.log("+12".isNumber()); // outputs false


      function validate()
      {
        var uname= document.getElementById("uname");
  			var email = document.getElementById("email");
  			var pass = document.getElementById("pass");
  			var cnf_pass=document.getElementById("cnf_pass");
        var con=document.getElementById("con");

        if(uname.value.trim()=="")
        {
          alert("Username Cannot be blank!")
          uname.style.borderBottom="solid 2px red";
          return false;
        }
          else {
            uname.style.borderBottom="solid 2px green";
          }
        if(email.value.trim()=="")
        {
          alert("Email Cannot be blank!")
          email.style.borderBottom="solid 2px red";
          return false;
        }

          else {
            email.style.borderBottom="solid 2px green";
          }
        if(pass.value.trim()=="")
        {
          alert("Password Cannot be blank!")
          pass.style.borderBottom="solid 2px red";
          return false;
        }
          else {
            pass.style.borderBottom="solid 2px green";
          }
        if(cnf_pass.value.trim()=="")
        {
          alert("Password must be confirmed")
          cnf_pass.style.borderBottom="solid 2px red";
          return false;
        }
          else if(cnf_pass.value!=pass.value)
          {
            alert("Password doesn't match")
            cnf_pass.style.borderBottom="solid 2px red";
            return false;
          }
          else {
            cnf_pass.style.borderBottom="solid 2px green";
          }
        if(con.value.isNumber()==false)
        {
          alert("Enter Valid phone number");
          con.style.borderBottom="solid 2px red";
          return false;
        }
          else if (con.value.length>11||con.value.length<11) {
            alert("Enter Valid phone number");
            con.style.borderBottom="solid 2px red";
            return false;
          }
          else {
            con.style.borderBottom="solid 2px green";
          }

      }
    </script>
    <style media="screen">
    input
    {
      width: 500px;
      border-radius: 10px;
      padding: 8px;
      border-bottom: 2px solid green;
      text-align: center;
    }
    hr
    {
      color: green;
    }
    .form
    {
      text-align: center;
      padding: 20px;
    }
    .admin_title
    {
      font-family: consolas;
      margin-left: 43%;
      font-size: 35px;
      color: green;
    }
    .crbtn
    {
      color:green;
      background: white;
      width: 200px;
      border-bottom: 2px solid green;
      height: 30px;
    }
    .crbtn:hover
    {
      color: white;
      background: green;
      border-radius: 20px;
      transition: .4s;
    }
    </style>
  </head>
  <body>
    <?php include 'admin_header_body.php'; ?>
    <span class="admin_title">admin Form</span><hr>
    <div class="form">
      <form onsubmit="return validate();" action="../controllers/admin_add_admin_handler.php" method="post">
      		<input type="text" name="uname" id="uname" placeholder="Username" class="uname"><br><br>
      		<input type="text" name="email" id="email" placeholder="Email" class="email"><br><br>
      		<input type="password" name="pass" id="pass" placeholder="password" class="pass"><br><br>
          <input type="password" name="cnf_pass" id="cnf_pass" placeholder="Confirm password" class="cnf_pass"><br><br>
      		<input type="text" name="con" id="con" placeholder="Phone Number " class="con"><br><br>
      		<button type="submit" id="crbtn" class="crbtn">Add Admin</button>
      </form>
    </div>
  </body>
</html>
