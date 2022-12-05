<!DOCTYPE html>
<html>
<head>
  <title> </title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="stt.css">
<style>
 .label{
  width: 197px;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 2px;
}
.button{width: 200px;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: #6699ff;
  color: white;
  border-radius: 2px;}
</style>

</head>
<div style="background-color: white;">
<!-- this is the div tag for displaying the whole contain in centre -->
<body>

  <!--this is header of page-->
  <div class="header">
  <h1 style="color: white;">MEDICAL STORE BILLING SYSTEM</h1>
</div><hr>
<ul>
  <div class="navbar">
    <a href="createuser.php">CREATE USER</a>
  <a href="changepass3.php">CHANGE PASSWORD</a>
  <a href="login.php">LOGOUT</a>

</ul>


  <div style="background-color: #0066cc; padding:130px; font-size: 25px; color: white;" class="di1">
    <form action="" method="post">
  <h3>CHANGE YOUR ACCOUNT PASSWORD  <hr></h3><table>
    <tr>
      <td>Username</td><td><input type="Username" name="usname" id="Us"  required=""   class="label"></td></tr>
      <td>Phone No</td><td><input type="Username" name="phno" id="Us"  required="" pattern="[0-9]{10}"  class="label"></td></tr>
  <td>New Password</td><td><input type="Username" name="pass1" id="Us"  required=""   class="label"></td></tr>
  <tr><td>Confirm Password</td><td><input type="password" name="pass2" required=""   class="label"></td></tr>
  <tr><td><input type="submit" name="Confirm" value="Change Password" class="button">&nbsp &nbsp &nbsp</td>
  <td><input type="submit" name="" value="Reset" style="" class="button"></td></tr>
  <?php
$conn=mysqli_connect("localhost","root","","pharma");
if(isset($_POST['Confirm']))
{
  $user=$_POST['usname'];
  $phno=$_POST['phno'];
  $pass1=$_POST['pass1'];
  $pass2=$_POST['pass2'];
  if($pass1==$pass2){
$que4="UPDATE `user` SET `pass`='$pass1',`pass1`='$pass2' WHERE `uname`='$user' && `phno`='$phno'";
$ins=mysqli_query($conn,$que4); 
echo'<script>alert("Password changed")</script>';
}
else{
  echo'<script>alert("passwords do not match")</script>';
}
} 
?>
</table>
</form>`
</div>
</div>
</body>
</html>