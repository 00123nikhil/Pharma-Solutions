<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","pharma");
if(isset($_POST['search'])){
	$ser=$_POST['med'];
$que="SELECT * FROM `datab` WHERE `medname` LIKE '%".$ser."%'";
$ans=mysqli_query($conn,$que);
$que1="SELECT `qty`,`pkg` FROM `medata` WHERE `medname` LIKE '%".$ser."%'";
$ans1=mysqli_query($conn,$que1);
while($row1 = mysqli_fetch_array($ans1,MYSQLI_ASSOC)){
$a1= $row1['qty'];
$a2=$row1['pkg'];
$total=$a1*$a2;

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MEDICINE REPORT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="stt.css">
	<style>
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
  <a href="admin.php">ADMINATION</a>
  <a href="changepass.php">CHANGE PASSWORD</a>
  <a href="contact.php">CONTACT US</a>
  <a href="login.php">LOGOUT</a>

</ul>
<div style="background-color: #0066cc; padding: 200px;" class="di1">
    <br><br>
	<form action="" method="post">
		<center>
			<label style="color: black;font-size: 20px">Medicine Name:</label><input type="text" name="med">
			<input type="submit" name="search" value="search"/>
            <br><br>
		<table style="background-color: silver; opacity: 0.7;">
    <tr>
        <th>Srno</th>
        <th>Quanity</th>
                    <th>Medname</th>
                    <th>Mfg</th>
                    <th>Batch</th>
                    <th>Expiry Date</th>
          
                </tr>
                <?php while($row = mysqli_fetch_array($ans,MYSQLI_ASSOC)):?>
                <tr>
                    <td><?php echo $row['srno'];?></td>
                    <td><?php echo $row['qty'];?></td>
                    <td><?php echo $row['medname'];?></td>
                    <td><?php echo $row['mfg'];?></td>
                    <td><?php echo $row['batch'];?></td>
                    <td><?php echo $row['expdate'];?></td>
                    <?php $add=$add+$row['qty'];?>
                </tr>
                <?php endwhile;?>
                <tr>
                    <td>Total</td>
                    <td><?php echo $total ; ?></td>
                	<td>Sold</td>
                	<td><?php echo $add ; ?></td>
                    <td>Remaining</td>
                    <td><?php 
                    $rem=$total-$add;
                    echo $rem; ?></td>
                </tr>
                </table>
                </center>
	</form>
</div>
</body>
</html>