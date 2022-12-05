<!DOCTYPE html>
<html>
<head>
	<title>PROJECT PAGE</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="stt.css">
    <style type="text/css">
    .button{width:490px; height:50px;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: #6699ff;
  color: white;
  border-radius: 2px;}

  </style>
</head>

<body>
  <!--this is header of page-->
	<div class="header">
  <h1 style="color: white;">MEDICAL STORE BILLING SYSTEM</h1>
</div>
<hr>
<ul>
<div class="navbar">
  <a href="dashboard.php">DASHBOARD</a>
  <a href="admin.php">ADMINSTRATION</a>
  <a href="changepass.php">CHANGE PASSWORD</a>
  <a href="contact1.php">CONTACT US</a>
  <a href="login.php">LOGOUT</a>
</ul>
<div style="background-color: #0066cc; padding: 50px;" class="di1"> 
  <h1 style="color: white;">Medical Store Billing System<hr></h1>
    <table>
      <tr><td>
    <button onclick="window.location.href = 'medicinform.php';" class="button">ADD MEDICINE FORM</button></td>
  </tr>
  <tr><td>
    <button onclick="window.location.href = 'searchbox.php';" class="button">ADD SELL</button></td>
  </tr>
  <tr><td>
    <button onclick="window.location.href = 'report.php';" class="button">MEDICINE REPORT</button></td>
  </tr>
  <tr><td>
    <button onclick="window.location.href = 'sellr.php';" class="button">SELL REPORT</button></td>
  </tr>
    </table>
</div>

</body>
</html>