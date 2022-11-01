<?php

$conn=mysqli_connect("localhost","root","","carsale");
if($conn->connect_error){
    die("connection faild".$conn->connect_error);

}
echo"connect";

?>