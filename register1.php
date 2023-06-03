<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $email=$_POST['email'];
    $password=$_POST['password'];

}
$sql="INSERT INTO `userdata` (`username`, `password`) VALUES ('$email', '$password')";
$q= mysqli_query($conn,$sql);
header('location:login.html');




error_reporting(0);

// if(!$conn){
//     echo"error";
// }
// else{
//     echo"Connection was successful";
// }


// if($result){
//     echo"Successful";
// }
// else{
//     echo "error";
// }
$error="";
$sql1="select * from users";
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    while( $row=mysqli_fetch_assoc($result)){;
        if ( $row['email']==$email )
                {
                    $error="1"; 
                }
       }
       if ( $email=="" or  $password=="" )
                {
                    $error="2";
                    
                   
                }
                // elseif($password!=$cpass)
                // {
                //     $error="3";
                    
                    
                // }
                else if($error=="")
                {
                    $sql="INSERT INTO `userdata` (`username`, `password`) VALUES ('$email', '$password')";
                    header('location:login.html');
                    $q= mysqli_query($conn,$sql);
                    if ($q)
                    {
                        $error="Registerd Successfully";
                        header('location:login.html');
                    }
                }
}
echo $error;

?>