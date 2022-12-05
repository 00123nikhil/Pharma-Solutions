<!DOCTYPE html>
<html>
<head>
	<title>PROJECT PAGE</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="stt.css">
</head>
<style>
            table,tr,th,td
            {
                border: 1px solid black;
            }

            .tabl{border-collapse:collapse; width: 50%;}
    th td{ text-align: left; padding: 4px;}
    tr{ background-color: white; color: black; }
    th{ background-color:white; color: black;  }

        </style>
  <body>
  <!--this is header of page-->
	<div class="header">
  <h1 style="color: white;"> MEDICAL STORE BILLING SYSTEM</h1>
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
<div style="background-color: #0066cc; padding: 100px; color: black;" class="di1">
  <center>
  <form>
  <?php
  $conn=mysqli_connect("localhost","root","","pharma"); 
  $que="SELECT * FROM `medata`";
  $ans=mysqli_query($conn,$que);
  ?>
<table style="background-color: silver; opacity: 0.7; width: 800px;">
                <tr>
                    <th>MedId</th>
                    <th>Qty</th>
                    <th>Medname</th>
                    <th>Mfg</th>
                    <th>Batch</th>
                    <th>Expiry Date</th>
                    <th>Amount</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($ans)):?>
                <tr>
                    <td><?php echo $row['medid'];?></td>
                    <td><?php echo $row['qty'];?></td>
                    <td><?php echo $row['medname'];?></td>
                    <td><?php echo $row['mfg'];?></td>
                    <td><?php echo $row['batch'];?></td>
                    <td><?php echo $row['expdate'];?></td>
                    <td><?php echo $row['amount'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
</form>
</center>s
</div>
</body>
</html>