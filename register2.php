<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sample";
//creating database connection
$conn = mysqli_connect($servername, $username, $password,$database);

//checking connection
if(!$conn)
{
    die("failed to connect" . mysqli_connect_errno());
}
if(isset($_POST["submit"]))
{
    $name=$_POST["Name"];
    $email=$_POST["email"];
    $phone=$_POST["phoneNumber"];
    $password=$_POST["password"];
    $gender=$_POST["gender"];

    $sql2="INSERT INTO `dance`(`name`, `email`, `phonenumber`, `password`, `gender`) VALUES ('$name','$email','$phone','$password','$gender')";

    $res=mysqli_query($conn,$sql2) or die("Query falied");
    header("location: http://localhost/Practice/dance%20website/index.html");
}

mysqli_close($conn);
?>

