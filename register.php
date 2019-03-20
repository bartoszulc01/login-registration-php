<?php
session_start();
header('location:login.php');
$connection=mysqli_connect('localhost','root', '');
mysqli_select_db($connection, 'users');

$name=$_POST['user'];
$pass=$_POST['password'];
$email=$_POST['email'];
/* if login already taken */
$login = "SELECT * FROM users where name ='$name'";
$result=mysqli_query($connection, $login);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo "Login już w użyciu";
}
else
{
    $reg="INSERT INTO USERS(name, password, email) values ('$name', '$pass', '$email')";
    mysqli_query($connection, $reg);
    echo "Utworzono użytkownika";
        
}

    
    
    
    ?>