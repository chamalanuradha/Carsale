<?php

$servername="localhost";
$username="root";
$password="";
$dbname="carsale";
$conn=mysqli_connect($servername,$username,$password,$dbname);

$Email = $_POST["Email"];
$Password = $_POST["Password"];

$sql1= "SELECT * FROM carowners WHERE Email='$Email' AND Password ='$Password'";
$result =$conn->query($sql1);
if ($result->num_rows >0){
    echo "login sucess";
    header("location:setting.php");
}
else{
    Echo"login error";
}
?>     



#####