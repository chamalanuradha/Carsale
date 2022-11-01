<?php
    $db_name = "carsale";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
     <style>
        .product{
            border: 1px solid #eaeaec;
            margin: 2px 2px 8px 2px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body>
        <div style="clear:both"></div>
        <h3 class= title2>add car</h3>
<form action="" method="post" enctype="multipart/form-data">
 <label for="Model"><b>Model</b></label>
    <input type="text" name="Model" placeholder="Model"  required><br>
  <label for="Brand"><b>Brand</b></label>
    <input type="text" name ="Brand" placeholder="Brand"  required><br>
  <label for="Condi"><b>Condi</b></label>
    <input type="text" name="Condi" placeholder=Condi  required><br>
 <label for="Price"><b>Price</b></label>
    <input type="text" name ="Price"  placeholder="Price"  required><br>
  <label for="image"><b>image</b></label>
    <input type="file" name="image" id="image" placeholder="image"  required><br>
  <label for="description"><b>description</b></label>
    <input type="text"  name="description" placeholder="description"  required><br>
  <input type = "submit" name="upload" value="Add car list your vehicle">

  <?php
$servername="localhost";
$username="root";
$password="";
$dbname="carsale";
$conn=mysqli_connect($servername,$username,$password,$dbname);


if(isset($_POST['upload']))
{
  $Model = $_POST['Model'];
  $Brand = $_POST['Brand'];
  $Condi = $_POST['Condi']; 
  $file = $_FILES['image']['name'];
  $Price= $_POST['Price'];
  $description= $_POST['description'];

$sql="INSERT INTO cars(Model,Brand,Condi,image,Price,description)  VALUES ('$Model','$Brand','$Condi','$file','$Price','$description')";
$res=mysqli_query($conn,$sql);
if($res){
   move_uploaded_file($_FILES['image']['tmp_name'],"$file");
   header("location:carlist.php");
}
else{
  
    echo"Error";     
 }
}
?>
</body>
</html>