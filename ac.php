<?php
$servername="localhost";
$username="root";
$password="";
$dbname="carsale";
$conN=mysqli_connect($servername,$username,$password,$dbname);
$key=$_POST['search'];

$sqL="SELECT * FROM CARS WHERE Brand AND Model LIKE '%".$key."%'";
$query= mysqli_query($conN, $sqL);
while($roW=mysqil_fetch_assoc($query)) {
    echo $roW['Model'];
    echo $roW['Brand'];
    echo $roW['Condi'];
    echo $roW['image'];
    echo $roW['Price'];
    echo $roW['description'];
}
?>
form action="" method="POST">
select Brand:
<select name="dropdown">
    <?php while( $rows = mysqli_fetch_array($res)) {
    ?>
    <option value ="<?php echo $rows['Brand'];?> "> <?php echo $rows['Brand'];?> </option>
    <?php
    }
    ?>
</select>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="carsale";
$Conn=mysqli_connect($servername,$username,$password,$dbname);
$Sql="select Model from cars";
$Res= mysqli_query($Conn, $Sql)

?>

select Model:
<select name= "dropdown">
    <?php while( $Rows= mysqli_fetch_array($Res)) {
    ?>
    <option value ="<?php echo $Rows['Model'];?> "> <?php echo $Rows['Model'];?> </option>
    <?php
    }
    ?>
</select>