<?php
    include "connection.php";
    if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $q="INSERT INTO `crud1`(`name`,`email`,`phone`) VALUES('$name','$email','$phone') ";
    $query=mysqli_query($conn,$q);
}
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
<label>Name:</label>
<input type="text" name="name" class="form-control"><br>

<label>Email:</label>
<input type="text" name="email" class="form-control"><br>

<label>Phone:</label>
<input type="text" name="phone" class="form-control"><br>

<button class="btn btn-success" type="submit" name="submit">Submit</button><br>
<a class="btn btn-info" type="submit" name="cancel" href="index.php">cancel</a><br>



</body>
</html>