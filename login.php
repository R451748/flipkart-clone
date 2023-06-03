<?php
session_start();
include 'connection.php';
error_reporting(0);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
}
// header('location:index.html');
$error="";
$sql1="SELECT * FROM `userdata`";  
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
    if ($row['username']==$email and $row['password']==$password){
        $_SESSION["email"]=$email;
    header('location:./index.php');
    }
        else{
            header('location:./index.php');  
        }
    }
}

?>