<?php
    include "connection.php";
    $id="";
    $name="";
    $email="";
    $phone="";

    $error="";
    $success="";

    if($_SERVER["REQUEST_METHOD"]=='GET')
    {
        if(!isset($_GET['id'])){
            header("location:crud100/index.php");
            exit;
        }
        $id=$_GET['id'];
        $sql=" select * from crud1 where id= $id ";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        while(!$row){
            header("location:crud100/index.php");
            exit;
        }
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
    }
    else
    {
        $id=$_POST["id"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];

        $sql= "update crud1 set name='$name',email='$email',phone='$phone' where id='$id' ";
        $result = $conn->query($sql);
    }
?>



?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>crud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP CRUD OPERATIONS</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Add New</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="col-lg-6 m-auto">
    <form method="post">
        <br><br>
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-white text-center">Create New Member</h1>
</div><br>
<input type="hidden" name="id" value="<?php echo $id;?>" class="form-control"><br>
<label>Name:</label>
<input type="text" name="name" value="<?php echo $name;?>" class="form-control"><br>

<label>Email:</label>
<input type="text" name="email"value="<?php echo $email;?>"  class="form-control"><br>

<label>Phone:</label>
<input type="text" name="phone" value="<?php echo $phone;?>" class="form-control"><br>

<button class="btn btn-success" type="submit" name="submit">Submit</button><br>
<a class="btn btn-info" type="submit" name="cancel" href="index.php">cancel</a><br>



</body>
</html>