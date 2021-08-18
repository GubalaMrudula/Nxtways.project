<?php
 $mysqli =new MYSQLi('localhost','root','','career');
 if(!$mysqli){
    die("connection_failed:".mysqli_connect_error());
 }
 else
 {
    echo "succesfull";
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

