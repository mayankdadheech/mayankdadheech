<?php
if(isset($_POST['btnlogin']))
{
  $con=mysqli_connect("localhost","root","","energybestrate");
  $sql="select * from login where username='".$_POST['username']."' and pass='".$_POST['password']."'";
  $a=mysqli_query($con,$sql);
  $f=0;
  while($row=mysqli_fetch_row($a))
  {
  $f=1;
  }
  if($f==1)
  {
    header("Location: pageone.php");
  }
  else
  {
    echo"<script>alert('Login Failed ')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <style>
      @import url('https://fonts.googleapis.com/css?family=Montserrat:600|Noto+Sans|Open+Sans:400,700&display=swap');
*{
  margin: 0;
  padding: 0;
  border-radius: 5px;
  box-sizing: border-box;
}
body{
  height: 100vh;
  display: flex;
  align-items: center;
  text-align: center;
  font-family: sans-serif;
  justify-content: center;
  background: url(signinbg.jpg);
  background-size: cover;
  background-position: center;
}
.container{
  position: relative;
  width: 400px;
  background: white;
  padding: 60px 40px;
}
header{
  font-size: 40px;
  margin-bottom: 60px;
  font-family: 'Montserrat', sans-serif;
}
.input-field, form .button{
  margin: 25px 0;
  position: relative;
  height: 50px;
  width: 100%;
}
.input-field input{
  height: 100%;
  width: 100%;
  border: 1px solid silver;
  padding-left: 15px;
  outline: none;
  font-size: 19px;
  transition: .4s;
}
input:focus{
  border: 1px solid #1DA1F2;
}
.input-field label, span.show{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.input-field label{
  left: 15px;
  pointer-events: none;
  color: grey;
  font-size: 18px;
  transition: .4s;
}
span.show{
  right: 20px;
  color: #111;
  font-size: 14px;
  font-weight: bold;
  cursor: pointer;
  user-select: none;
  visibility: hidden;
  font-family: 'Open Sans', sans-serif;
}
input:valid ~ span.show{
  visibility: visible;
}
input:focus ~ label,
input:valid ~ label{
  transform: translateY(-33px);
  background: white;
  font-size: 16px;
  color: #1DA1F2;
}
form .button{
  margin-top: 30px;
  overflow: hidden;
  z-index: 111;
}
.button .inner{
  position: absolute;
  height: 100%;
  width: 300%;
  left: -100%;
  z-index: -1;
  transition: all .4s;
  background: -webkit-linear-gradient(right,#00dbde,#fc00ff,#00dbde,#fc00ff);
}
.button:hover .inner{
  left: 0;
}
.button button{
  width: 100%;
  height: 100%;
  border: none;
  background: none;
  outline: none;
  color: white;
  font-size: 20px;
  cursor: pointer;
  font-family: 'Montserrat', sans-serif;
}

.links i{
  font-size: 23px;
  line-height: 40px;
  margin-left: -90px;
}
.links span{
  position: absolute;
  font-size: 17px;
  font-weight: bold;
  padding-left: 8px;
  font-family: 'Open Sans', sans-serif;
}
.signup{
  margin-top: 50px;
  font-family: 'Noto Sans', sans-serif;
}
.signup a{
  color: #3498db;
  text-decoration: none;
}
.signup a:hover{
  text-decoration: underline;
}

      </style>
    <meta charset="utf-8">
    <title>Login </title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <header>Login Form</header>
     <form  method="post">
        <div class="input-field">
          <input type="text" name="username" required>
          <label>Email or Username</label>
        </div>
<div class="input-field">
          <input class="pswrd" type="password" name="password" required>
          <span class="show">SHOW</span>
          <label>Password</label>
        </div>
<div class="button">
          <div class="inner">
</div>
<button type="submit" name="btnlogin">Login</button>
        </div>
</form>
<!-- <div class="signup">
        Not a member? <a href="signup.php">Signup now</a>
      </div> -->
</div>
<script>
      var input = document.querySelector('.pswrd');
      var show = document.querySelector('.show');
      show.addEventListener('click', active);
      function active(){
        if(input.type === "password"){
          input.type = "text";
          show.style.color = "#1DA1F2";
          show.textContent = "HIDE";
        }else{
          input.type = "password";
          show.textContent = "SHOW";
          show.style.color = "#111";
        }
      }
    </script>

  </body>
</html>