<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<form action="" class= "container mt-5 border rounded border-dark" method="post">
    <h1 class = "mt-4 text-center">Registration form</h1>
    <div class="form-group">
        <input type="text" name="firstname" placeholder="firstname" class="form-control mt-4">
        <input type="text" name="lastname" placeholder="lastname" class="form-control mt-5">
        <input type="password" name="password" placeholder="password" class="form-control mt-5">
        <input type="submit" value="submit" name="submit" class="btn form-control mt-4 mb-3 btn-success ">
    </div>
</form>

<?php
error_reporting(0);
include "connection.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];

$insert = "INSERT INTO `user`(`firstname`, `lastname`, `password`) VALUES ('$firstname','$lastname','$password')";
$query = mysqli_query($connection , $insert);
if($query)
{
    echo "inserted successfully";
}else{
    echo "insert failed";   
}

?>