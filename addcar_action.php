<?php
$conn = mysqli_connect("localhost","root","","carsale");

if(isset($_POST['Add'])){

        $Brand = $_POST['Brand'];
        $Model = $_POST['Model'];
        $file = $_FILES['image']['name']; 
        $price= $_POST['price'];
        $Condition = $_POST['Condition'];
        $description= $_POST['description'];

$sql= "INSERT INTO carlist(Brand,Model,image,price,Condition,description) VALUES ('$Brand','$Model','$file','$price','$Condition','$description')";

$res = mysqli_query($conn,$sql);

if($res == TRUE) {

move_uploaded_file($_FILES['tmp_name']['image'], "$file");

header('location:index1.php');
}
else{
echo'<script> alert("Data Not Saved"); </script>';     
}
}
?>