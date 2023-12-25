<?php
if(isset($_POST['submit'])){
 $search =$_GET["search"];
 $sql = "select * from 'ctable' where username = $search";
 $result = mysqli_query($con, $sql);
 if($result){
    $num = mysqli_num_rows($result);
    echo $num;
 }else{
    echo "Data not found";  
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .logo{
    width: 150px;
    height: 90px;
}
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img src="images/logo2.jpg"class="logo img-fluid"></a>
  <h2>Welcome Admin</h2>
  </div>
</nav>
<section>
<div class="container">
    <h1 class="text-dark text-center ">Members Login</h1>
        <div class="col-lg-2 text-center mx-auto">
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>username</th>
                    
                </tr>
    <?php
                include 'conn.php';
        
                $q ="SELECT * FROM meme";
                $query = mysqli_query($con, $q);
                while($res = mysqli_fetch_array($query)){
?>
                <tr class="text-center">
                    <td><?php echo $res['username']?></td>
                </tr>
                <?php
                }
                
                ?>
            </table>
            <button class="btn btn-danger"><a href="#mymodal" class="text-white"  data-bs-toggle="modal" data-bs-target="#mymodal">View Details</a></button>
            <div class="modal mx-auto"  id="mymodal">
                        <div class="modal-dialog">
                            <div class="modal-content" style="width: 600px; height: 600px; overflow:hidden">
                            <div class="modal-header">Members Info &nbsp; &nbsp;
                            <button type="button" class="btn-close" data-bs-toggle="modal"></button>
                        </div>
                        <div class="modal-body">
                        <div class="container-fluid p-5 " style="width: 500px; height: 500px;">
                        <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                </tr>
                        <?php
                include 'conn.php';
        
                $q ="SELECT * FROM meme";
                $query = mysqli_query($con, $q);
                while($res = mysqli_fetch_array($query)){
?>

                <tr class="text-center">
                    <td><?php echo $res['username']?></td>
                    <td><?php echo $res['email']?></td>
                    <td><?php echo $res['password']?></td> 
                  
                </tr>

                <?php
                 }
                
                 ?>
                 </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
        </div>
    </div>     
</section>




    <div class="container">
        <div class="col-lg-12">
            <h1 class="text-warning text-center ">meme Feedback</h1>
            <input type="text" name="search">
            <input type="submit" name="action" value="Search" class="btn btn-success">
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>ID</th>
                    <th>username</th>
                    <th>email</th>
                    <th>feedback</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
    <?php
                include 'conn.php';
        
                $q ="SELECT * FROM feedbacktable";
                $query = mysqli_query($con, $q);
                while($res = mysqli_fetch_array($query)){
?>
                <tr class="text-center">
                    <td><?php echo $res['Id']?></td>
                    <td><?php echo $res['MName']?></td>
                    <td><?php echo $res['Email']?></td>
                    <td><?php echo $res['Feedback']?></td>
                    <td><button class="btn btn-danger"><a href="delete.php?Id=<?php echo $res['Id']?>" class="text-white">Delete</a></button></td>
                    <td><button class="btn btn-primary"><a href="update.php?Id=<?php echo $res['Id']?>" class="text-white">Update</a></button></td>
                   
                  
                </tr>
                <?php
                }
                
                ?>
            </table>
        </div>
    </div>     
</body>
</html>