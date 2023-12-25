<?php

$con = mysqli_connect('localhost: 3306', 'root','','login_db');
if($con){
    echo"connection successful";
}else{
    echo"no connection";
}
if($_SERVER['REQUEST_METHOD']=='POST'){

$username = $_POST['username'];
$password = $_POST['password'];

$ald = " select * from aldb where username = '$username' && password='$password' ";
$aldquery = mysqli_query($con, $ald);
$aldcheck = mysqli_num_rows($aldquery);

if($aldcheck == 1){
    echo"login successful ";
    header('location:admin.php');
}else{
    echo"incorrect username or password";
}
}
?>