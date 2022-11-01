<?php
?>
<html>
<head>
<style>
.top{
    color:black;
    height: 12%;
    weight: 100%;
    background-color:grey;
}

.logo{
    float:left;
    font-size:32px;
    text-align:center;
    font-weight:bold;
}
.logo span:hover{
 color:yellow;

}
body {
  background-image:url('carsale.jpg'); 
  background-size:cover;
  background-position:center;
}
.submit{
    width:15%;
    height:35px;
    background-color: grey;
    margin-left:73%;
    margin-bottom:5%;
    color:white;
    font-size:25px;
    border-radius: 30px;
}
.submit:hover{
    color:blue;
}
.ul li{
    display:inline-block;
    float:right;
    margin:1%;
}
.ul li a{
    font-size:22px;
    color:black;
    text-align:center;
}
ul li a:hover{
    color:blue;
}
.reg{background-color:white;
    padding:10px 15px;
    border-radius:30px;
    width:60%;

}
.log{background-color:white;
    padding:10px 20px;
    border-radius:30px;
    width:40%;
}


h1{
    align:center;
}

.bm{width:28%;
    height:15px;
    margin-left:70%;
    margin-top:28%;
    margin-bottom:1.5%;
    color:black;
    font-size:22px;
    border-radius: 30px;

}
.footter{
    height: 40px;
    weight: 100%;
    background-color:black;
    color:white;
    margin-bottom:10px;


}   
.copy{
float:left;
margin:auto;
font-size: 16px;
}

.design{
float:right;
}

    </style>
</head>
<body>
<div class="top">
    <div class= "logo">
        <P><span>US Car Sale</span></P> 
    </div>
            <div class="ul">
               <ul>
                  <li><a class="reg" href="mem registration.php">Register</a></li>
                  <li><a class="log" href="mem login.php">Signin</a></li>
				</ul>
            </div>  
</div>
<h1>"Find the best vehicle for you"</h1>  
    <?php
    $conn=mysqli_connect("localhost","root","","carsale");
    $sql="SELECT distinct Brand FROM cars";
    $res=mysqli_query($conn,$sql);
    ?>
<form action="new.php" method="POST" enctype="multipart/form-data">
 <div class = "bm">
  Select Brand:
<select name="Brand">
<?php while ($row =mysqli_fetch_array($res)) {
    ?>
<option value ="<?php echo $row['Brand'];?>"> <?php echo $row['Brand'];?> </option>
<?php
}
?>
</select>
<?php
$Conn=mysqli_connect("localhost","root","","carsale"); 
$Sql="select distinct  Model from  cars";
$Res= mysqli_query($Conn, $Sql);
?>
Select Model:
<select name= "Model">
    <?php while( $Rows= mysqli_fetch_array($Res)) {
    ?>
    <option value ="<?php echo $Rows['Model'];?> "> <?php echo $Rows['Model'];?> </option>
    <?php
    }
    ?>
    </select>
    </div>
    <input class="submit"  type="submit"  value="search" name ="search">
</form> 
<div class="footter">
 <div class="copy">Copyright &copy; 2021</div>
 <div class="design">Design by Nibm 20.1</div>
</div>

</body>
</html>