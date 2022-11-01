<?php
$conn= new mysqli("localhost","root","","carsale");
if (isset($_POST["upload"]));
$Model=$_POST["Model"];
$Brand=$_POST["Brand"];
$file = $_FILES['image']['name'];
$Condi=$_POST["Condi"];
$Price=$_POST["Price"];
$description=$_POST["description"];

$sql="INSERT into cars(Model,Brand,Condi,image,Price,description) Values ('$Model','$Brand','$Condi','$file','$Price','$description')";
$res=mysqli_query($conn,$sql);

if($res == TRUE) {

  move_uploaded_file($_FILES['image']['tmp_name'], "$file");
  
  header('location:car sales.php');
  }
  else{
  echo'<script> alert("Data Not Saved"); </script>';     
  }
  
  ?>