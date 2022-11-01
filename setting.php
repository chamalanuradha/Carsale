<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carsale</title>
     <style>

        h2{
            text-align: center;
            color: black;
            background-color: grey;
            padding: 2%;
        }
        h2:hover{
          color:yellow;
        }
        body{
  background-image:url('carsale.jpg'); 
  background-size:cover;
  background-position:center;
        }
        .act1{
  width:800px;
  background-color:rgb(0,0,0,0.5);
  margin:auto;
  border-radius:2px;
}
form{
  padding:10px;
}
.do{
  position: relative;
  color:white;
  font-size:18px;
  font-weight:bold;
  padding:0 22px;
  float:left;
  margin-bottom:25px;
}
.reg{
  position: relative;
  margin-bottom:25px;
  width:480px;
  line-height:40px;
  border-radius:8px;


}
.regi{
   width:50%;
    height:35px;
    background-color: grey;
    margin-left:50%;
    margin-bottom:5%;
    color:white;
    font-size:25px;
    border-radius: 30px;
}
.regi:hover{
  color:blue;
}
    </style>
</head>
<body>
        <h2>Car Sale</h2>
        <?php
            $conn= new mysqli("localhost","root","","carsale");
            $query = "select * from cars order by Id asc";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                  
                        <form method="post" action="">
                    
                                <img src="<?php echo $row["image"];?>" width="190px" height="200px" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["Brand"];?></h5>
                                <h5 class="text-info"><?php echo $row["Model"];?></h5>
                                <h5 class="text-danger"><?php echo $row["Price"];?></h5>  
                    
                        </form>
                
        <?php
                }
            }
        ?>
  <h2>Register your vehicales</h2>
  <div class="act1">
  <form action="uploded.php" method="post" enctype="multipart/form-data">
 <label class="do" for="Model"><b>Model</b></label>
    <input class="reg" type="text" name="Model" placeholder="Model"  required><br>
  <label class="do" for="Brand"><b>Brand</b></label>
    <input class="reg" type="text" name ="Brand" placeholder="Brand"  required><br>
  <label class="do" for="Condi"><b>Condi</b></label>
    <input class="reg" type="text" name="Condi" placeholder= "Condi"  required><br>
    <label class="do" for="image"><b>image</b></label>
    <input class="reg" type="file" name="image"  placeholder="image"  required><br>
 <label class="do" for="Price"><b>Price</b></label>
    <input class="reg" type="text" name ="Price"  placeholder="Price"  required><br>
  <label class="do" for="description"><b>description</b></label>
    <input class="reg" type="text"  name="description" placeholder="description"  required><br>
  <input  class="regi" type = "submit" name="upload" value="Add car list your vehicle">
</form>
          </div>
</body>
</html>