<?php

$servername="localhost";
$username="root";
$password="";
$dbname="carsale";
$conn=mysqli_connect($servername,$username,$password,$dbname);

$Email = $_POST["Email"];

$sqL="select * from carowners where Email='$Email' ";
$result =$conn->query($sqL);
if ($result->num_rows >0){
    echo "alredy regisrered";
}
else{
    $sql="INSERT INTO carowners(Firstname,Lastname,NIC,Hometown,Email,Password)  VALUES('$_POST[Firstname]','$_POST[Lastname]','$_POST[NIC]','$_POST[Hometown]','$_POST[Email]','$_POST[Password]')" ;
    mysqli_query($conn,$sql);
header("location:mem login.php");
}
?>
