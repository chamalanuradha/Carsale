<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <style>
        h1{
            width:100%px;
  background-color:rgb(0,0,0,6);
  margin:auto;
  color:#FFFFFF;
  padding:10Px 0px 10px 0px;
  text-align:center;
  border-radius:15px;
        }
        table{
            border-collapse: collapse;
            width: 100%;
            color: black;
            font-family: sans-serif;
            font-size: 20px;
            text-align: left;
        }
        th{
            background-color: grey;
            color: black;
        }


    </style>
</head>
<body>
    <h1>Register members</h1>
 <table width="75%" border="1" cellpadding="5" cellspacing="5" >
     <tr>
         <th>First name</th>
         <th>Last name</th>
         <th>City</th>
         <th>Email</th>
     </tr>
<?php 
$conn = mysqli_connect("localhost","root","","carsale"); 
?>
    
<?php 

$sql = "SELECT Firstname,Lastname,Hometown,Email FROM carowners";

$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['Firstname']."</td><td>".$row['Lastname']."</td><td>".$row['Hometown']."</td><td>".$row['Email']."</td></tr>";

    }
    echo "</table>";
}else{
    echo "Not Working";
}

$conn->close();

?>
</table>
</body>
</html>