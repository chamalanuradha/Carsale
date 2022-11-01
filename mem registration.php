<html>
<head>
<style>
h1{
  width:800px;
  background-color:rgb(0,0,0,6);
  margin:auto;
  color:#FFFFFF;
  padding:10Px 0px 10px 0px;
  text-align:center;
  border-radius:15px;
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
  width:15%;
    height:35px;
    background-color: grey;
    margin-left:50%;
    margin-bottom:5%;
    color:white;
    font-size:25px;
    border-radius: 30px;
}

</style>
<head>
<body>
<center>
<h1>register form<h1>
</center>
<div>
  <center>
<div class="act1">
   <form method="post" action="mem reg_action.php">
      <label class="do" for="Firstname"><b>Fitstname</b></label>
         <input class="reg"  type="text" name ="Firstname" placeholder="Enter first name"  required><br>
      <label class="do"  for="Lastname"><b>Lastname</b></label>
         <input class="reg" type="text" name="Lastname" placeholder="Enter last name"  required><br>
	    <label class="do" for="NIC"><b>NIC</b></label>
         <input class="reg" type="text" name="NIC" placeholder="NIC"  required><br>
      <label class="do"  for="Hometown"><b>Hometown</b></label>
         <input class="reg" type="text" name ="Hometown"  placeholder="Enter Hometown"  required><br>
      <label class="do" for="Email"><b>Email</b></label>
         <input class="reg" type="text"  name="Email" placeholder="Enter Email"  required><br>
      <label class="do" for="Password"><b>Password</b></label>
         <input class="reg" type="password" name="Password"placeholder="Enter Password"  required><br>
      <input class="regi" type = "submit" value="register">
 </form>
</div>
</center>
</body>
</html>
