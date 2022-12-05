<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="stt.css">
	 <style>
 .label{
  width: 19%;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 2px;
}
.button{width: 15%;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: #6699ff;
  color: white;
  border-radius: 2px;}
</style>

</head>
<body>
	<body>
  <!--this is header of page-->
	<div class="header">
  <h1 style="color: white;">MEDICAL STORE BILLING SYSTEM</h1>
</div>
<hr>
<ul>
<div class="navbar">
  <a href="home.php">HOME</a>
  <a href="aboutus.php">ABOUT US</a>
 <a href="login.php">LOGIN</a>
  <a href="contact.php">CONTACT US</a> 
</div>
</ul>

<div style="background-color: #0066cc; padding: 70px;  font-size: 20px; color: white;" class="di1">
	<form action="" method="post">
    <?php
$conn=mysqli_connect("localhost","root","","pharma");
if(isset($_POST['insert'])){
  $name=$_POST['fname'];
  $mail=$_POST['email'];
  $phno=$_POST['phno'];
  $msg=$_POST['msg'];
$query="INSERT INTO `feedback` VALUES('','$name','$mail','$phno','$msg')";
$ans=mysqli_query($conn,$query);
}
mysqli_close($conn);
?>
  <h3>CONTACT US <hr>  </h3>
  Name &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="fname" id="us"  required=""   class="label"><br><br>
   Gmail &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="email" required=""   class="label"><br><br>
   Phone &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="phno" required=""  pattern="[0-9]{10}" class="label"><br><br>
   Message &nbsp&nbsp &nbsp &nbsp &nbsp<input type="textarea" name="msg" required=""   class="label"><br><br>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="submit" name="insert" value="submit" class="button">
  &nbsp &nbsp &nbsp &nbsp &nbsp<input type="reset" name="" value="reset" style="" class="button">

</form>
</div>


</body>
</html>