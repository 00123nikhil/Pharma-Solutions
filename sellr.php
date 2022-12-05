<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","pharma");
if(isset($_POST['search'])){
	$datea=$_POST['datea'];
$que="SELECT * FROM `customerd` WHERE YEAR(`cdate`)='$datea'";
$ans=mysqli_query($conn,$que);
}
else{
    $que="SELECT * FROM `customerd`";
$ans=mysqli_query($conn,$que);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MEDICINE REPORT</title>
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

  table,tr,th,td
            {
                border: 1px solid black;
                width: 650px;
            }
            .tabl{border-collapse:collapse; width: 50%;}
    th td{ text-align: left; padding: 4px;}
    tr{ background-color: white; color: black; }
    th{ background-color:gray; color: white;  }

  </style>
</head>
<body>
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
<div style="background-color: #0066cc; padding: 200px; color: black;" class="di1">
	<form action="" method="post">
		<center>
			<label style="color:white; font-size:150%">Year:</label><input type="year" name="datea">
			<input type="submit" name="search" value="search"/>
            <br><br><br><br>
		<table style="background-color: silver; opacity: 0.7">
    <tr>
        <th>Srno</th>
        <th>Customer Name</th>
                    <th>Doctor Name</th>
                    <th>Amount</th>
                    <th>Date</th>
            
          
                </tr>
                <?php while($row = mysqli_fetch_array($ans,MYSQLI_ASSOC)):?>
                <tr>
                    <td><?php echo $row['srno1'];?></td>
                    <td><?php echo $row['custn'];?></td>
                    <td><?php echo $row['docname'];?></td>
                    <td><?php echo $row['amount'];?></td>
                    <td><?php echo $row['cdate'];?></td>
                    <?php $add=$add+$row['amount'];?>
                </tr>
                <?php endwhile;?>
                <tr align="right">
                	<td colspan="4">Income</td>
                	<td><?php echo $add ; ?></td>
           
                </tr>
            </table>
                </center>
	</form>
</div>
</body>
</html>