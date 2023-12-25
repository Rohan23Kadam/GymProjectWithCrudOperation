<?php
include 'conn.php';
if(isset($_POST['done'])){

  $MName = $_POST['yourname'];
  $Email = $_POST['email'];
  $Feedback = $_POST['yourmessage'];
  $id = $_GET['Id'];
  $q ="UPDATE `feedbacktable` SET `Id`='$id',`MName`='$MName',`Email`='$Email',`Feedback`=' $Feedback' WHERE Id=$id";
  $query = mysqli_query($con, $q);
  header("location:admin.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <title>Update</title>
    <style>
        div{
            margin-top: 60px;
        }
    </style>
</head>
<body>
<div class="container-fluid p-5 bg-warning" style="width: 350px; height: 580px;">
        <form  method="post">
            <fieldset>
                <legend>Update Feedback</legend>
                <legend>MName</legend>
                <input type="text" name="yourname"><BR><BR>
                <legend>Email</legend>
                <input type="text" name="email"><BR><BR>
                <legend>Feedback</legend>
                <textarea class="bg-light bs-dark-text" name="yourmessage" cols="30" rows="10" style="width: 240px;height:200px;"></textarea>
                <input type="Submit" name="done" value="Submit" class="btn btn-success">
            </fieldset>
        </form>
    </div>
</body>
</html>