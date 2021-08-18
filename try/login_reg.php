<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Career Path Platform</title>
    <link rel="stylesheet" href="login_style.css">
    
</head>
<body>
    <div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Career Path Platform</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">sign in/sign up</button></li>
                </ul>
            </nav>
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
               <p>Do you belong to ENGINEERING Stream <br>Are you tired of checking different websites in finding job notifications <br>So, we are here and you visited a better place where you can find job notifications together<br>And we provide related material too<br>SO,Dear User no worries</p>
            </div>
        </div>
        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="", method="post">
                        <center><h1 class="main-heading">Login Form</h1></center>
				        <input type="text"name='username' placeholder="username", required/>
				        <input type="password" name='password' placeholder="password", required/>
                        <span class="forgot"><a href="forgot.php">Forgot Password?</a></span>
				        <button type="submit" name="login" value="LOGIN">LOGIN</button>
                        <label>Not having account<button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">-->Register</button>
                </label>
				    </form>
                    <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="", method="post">
                        <center><h1 class="main-heading">Register Form</h1></center>
                        <input type="text" name='username'placeholder="user name" required/>
                        <input type="text" name='emailid'placeholder="email-id" required/>
                        <input type="password"name='password' placeholder="password" required/>
                        <input type="address"name='address' placeholder="address" required/>
                        <input type="phone_number"name='phone_number' placeholder="phone_number" required/>
                        
                        
                        <button type="submit" name="register" value="register">REGISTER</a></button>
                    </form>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
<?php
$mysqli =new MYSQLi('localhost','root','','career');
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result=$mysqli->query("select * from login where username='$username' and password='$password' ");
    if($result->num_rows==0){
         echo "<script>alert('enter details correctly')</script>"; 
    }
   
      else{
        echo "logged in as user";
        header('location:home.html');
    }
    }
    if(isset($_POST['register']))
{
   
    $username=$_POST['username'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phone_number=$_POST['phone_number'];
    $result=$mysqli->query("select * from login where username='$username'");
    if($result->num_rows!=0){
       echo "<script >alert('username has already taken')</script>";

    }
    else{
    $sql=$mysqli->query("INSERT INTO login VALUES('$username','$emailid','$password','$address','$phone_number')");
    if($sql){
        header('location:login_reg.php');
    }

    else{
        echo "<script>alert('enter details correctly')</script>"; 
        //header('location:register.php');
    }
    }
}
?>


