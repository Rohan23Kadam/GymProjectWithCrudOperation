<?php

$con = mysqli_connect('localhost: 3306', 'root');
if($con){
    echo"connection successful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'login_db');

$username = $_POST['username'];
$password = $_POST['password'];

$log = " select * from meme where username = '$username' && password='$password' ";
$logquery = mysqli_query($con, $log);

$logcheck = mysqli_num_rows($logquery);

if($logcheck == 1){
    echo"login successful";
    header('location: ContactUs.php');
}else{
    echo"incorrect username or password";
}
?>