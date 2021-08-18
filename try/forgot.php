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
        <div id='forget-form' class="forget-page">
            <div class="form-box">
                <div class="form">
                <form action="" method="POST">
                <h2>Change Password</h2>
                <input type="text" name="username" placeholder=" username" required/>
                <input type="password" name="np" placeholder=" New password" required/>
                <input type="password" name="cp" placeholder=" Confirm password" required/>
                <input type="submit" name="submit" value="submit">
                <p style="text-align:center">
                    <a  class="link" href="login_reg.php">login Here</a>
                </p>
            </form>
                   
                    
                </div>
            </div>
        </div>
                </div>
</body>
</html>




<?php
if(isset($_POST['submit']))
{
    $u= $_POST['username'];
    $p=$_POST['np'];
    $p2=$_POST['cp'];
    $mysqli =NEW MYSQLi('localhost','root','','career');
    if($p!=$p2)
    {
        echo "<script >alert('enter  password correctly ')</script>";

    }
    else
    {
        $u1 = $mysqli->query("select * from login where username='$u'");
        if($u1->num_rows ==1)
        {
            $insert = $mysqli->query("update login set password='$p' where username='$u'");
            if($insert)
         {
    
            //echo '<a href="stylish7.html">Click here to back to login</a>';
            echo "<script>alert('password changed successfully')</script>"; 
         }
         else
         {
             echo "<script >alert('not successful')</script>";
        }
         
        }
        else
        {
            echo "<script >alert('$mysqli->error')</script>";
        }
       
    } 
}
?>