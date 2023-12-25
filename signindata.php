<?php

$con = mysqli_connect('localhost', 'root');
if($con){
    echo"connection successful";
}else{
    echo"no connection";
}
 
mysqli_select_db($con, 'login_db');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$query = "select * from meme where email='$email'";
$squery = mysqli_query($con, $query);
$check = mysqli_num_rows($squery);

if($check > 0){
    echo"your email id already exist";

}else{
    $insertquery = "insert into meme( username , email , password , cpassword) values('$username','$email','$password','$cpassword')";
    $iquery = mysqli_query($con,$insertquery);
    if($iquery){
        echo"data inserted";
        header('location:login.php');
    }else{
        echo"data not inserted";
    }
}
?>