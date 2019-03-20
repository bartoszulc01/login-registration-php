<?php
session_start();
$connection=mysqli_connect('localhost','root', '');
mysqli_select_db($connection, 'users');
$name=$_POST['user'];
$pass=$_POST['password'];
$login = "SELECT * FROM users where name ='$name' && password ='$pass'";
$result=mysqli_query($connection, $login);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['user']=$name;
    header('location:home.php');
    
}
else
{
    header('location:login.php');
}
?>