<?php

session_start();

$con=mysqli_connect('localhost','root','','user_login');
$username =$_POST['username'];
$password=$_POST['password'];

$query= "SELECT * FROM users WHERE username= '$username'";

$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);

if($num==1){
   $_SESSION['username']= $username;
    header('location:home.php');

}else{
  header("location:login.php");

}

?>