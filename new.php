<html>
    <head></head>
<body>
    <center>
    <form action="" method="post" enctype="multipart/form-data">
<table width="75%" border="1" cellpadding="5" cellspacing="5" >
        <thead>
            <tr>
            <th>image</th>  
            <th>Brand</th>
            <th>Model</th>
            <th>Condi</th>
            <th>Price</th>
            <th>description</th>
            </tr>
        </thead>
<?php
if(isset($_POST['search'])){
$Brand=$_POST['Brand']; 
$Model=$_POST['Model'];

if($Brand !="" && $Model !=""){ 
$Conn=mysqli_connect("localhost","root","","carsale");
$query="SELECT * FROM cars WHERE Brand='$Brand' AND Model='$Model'";
$data=mysqli_query($Conn,$query) or die('error');
if(mysqli_num_rows($data)>0){ 


    while($row=mysqli_fetch_array($data))
{
    ?>
    <tr>
    <td><?php echo'<img src="htdocs/'.$row ['image'].' " width="100px;" height=100px;">'?></td>
    <td><?php echo $row['Brand']; ?></td>
    <td><?php echo $row['Model']; ?></td>
    <td><?php echo $row['Condi']; ?></td>
    <td><?php echo $row['Price']; ?></td>
    <td><?php echo $row['description']; ?></td>
    </tr>

<?php

} 
}
else {echo "Not match serching";?>
  <tr>
    <td> _</td>
    <td> _ </td>
    <td>_</td>
    <td>_ </td>
    <td>_</td>
    <td>_</td>
    </tr>
<?php
} 
}
}
?>
</table>
</form>
</center>
</body>
</html>
