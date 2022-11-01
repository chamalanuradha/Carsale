
<html>
<head>
<title>login page</title>
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
  padding:10px;}
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
  float:center;
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
  <h1>Login Form</h1>
  <div class= "act1">
<form action="log_action.php" method="post">
  <label class="do" for="Email"><b>Email</b></label>
    <input class="reg" type="text" name="Email" placeholder="Enter Email"  required><br>
  <label class="do" for="Password"><b>Password</b></label>
    <input class="reg"type="Password" name="Password" placeholder="Enter Password"  required><br>
    <input  class="regi" type = "submit" value="login">
</form>
</div>
</body>
</html>