<?php
//$add=$_POST['search'];
$conn=mysqli_connect("localhost","root","","pharma");
    $query = "SELECT `srno`, `qty1`, `medname`, `mfg`, `batch`, `expdate`, `mrp` FROM `buffert`";
    $ab=mysqli_query($conn,$query);
    $add=0;
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="stt.css">
    <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }

            .tabl{border-collapse:collapse; width: 50%;}
    th td{ text-align: left; padding: 4px;}
    tr{ background-color: white; color: black; }
    th{ background-color:gray; color: white;  }

    .button{width: 200px;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: #6699ff;
  color: white;
  border-radius: 2px;}

  .label{
  width: 155px;
  padding: 3px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 2px;
}

        </style>
</head>
<body>
    <div class="header">
  <h1 style="color: white;">MEDICAL STORE BILLING SYSTEM</h1>ss
<hr>
<ul>
  <li><a class="active" href="home12.php">HOME</a></li>
  <li><a href="searchbox.php">BACK</a></li>
</ul>

   <!-- <input type="button" name="Back" value="Back" onclick="location.href='bill1.php';"> 
    <br><br>-->
<br>
    <center>
        <fieldset style="width: 700px; background-color:#e0ebeb; opacity: 0.9;">
            <label>Sr No:<?php 
         $conn=mysqli_connect("localhost","root","","pharma"); 
         $que3="SELECT * FROM customerd";
         $ans=mysqli_query($conn,$que3);
         $count = mysqli_num_rows($ans);
         echo ++$count;
         ?>
         </label>
 <label style="margin-left: 65%;"><?php echo"Date:".date("d-m-Y");?></label>
 <br>
        <center>
            <label style="font-size: 215%; font-weight: bold;">Chaudhary & Sons Medical Shop</label>
        </center>
        <center>
            <label>Raj Nagar,Plot No:1/2,Shop NO:2,Aurangbad</label>
        </center>
            <br>
<form action="" method="Post">
   
    <label>Customer name :</label><input type="text" name="cname" class="label">
    <label style="margin-left: 25%;">Doctor Name :</label><input type="text" name="place" class="label">
    
    <table style="width: 660px; color: " border="1">
    <tr>
        <th>Srno</th>
        <th>Quanity</th>
                    <th>Medname</th>
                    <th>Mfg</th>
                    <th>Batch</th>
                    <th>Expiry Date</th>
                    <th>Amount</th>
                </tr>
                <?php while($row = mysqli_fetch_array($ab)):?>
                <tr>
                    <td><?php echo $row['srno'];?></td>
                    <td><?php echo $row['qty1'];?></td>
                    <td><?php echo $row['medname'];?></td>
                    <td><?php echo $row['mfg'];?></td>
                    <td><?php echo $row['batch'];?></td>
                    <td><?php echo $row['expdate'];?></td>
                    <td><?php echo $row['mrp'];?></td>
                    <?php $add=$add+$row['mrp'];?>
                </tr>
                <?php endwhile;?>
                <tr>
                    <td colspan="6">Total</td>
                    <td><?php echo $add;?></td>
                </tr>
                
    </table>

    <br><br>
<?php
if(isset($_POST['Print']))
{
    $name=$_POST['cname'];
    $place=$_POST['place'];
$conn=mysqli_connect("localhost","root","","pharma");
    if(!$conn){
        echo"Connection failure";
    }
    $que="INSERT INTO datab(`medid`, `qty`, `medname`, `mfg`, `batch`, `expdate`, `mrp`) SELECT `medid`, `qty1`, `medname`, `mfg`, `batch`, `expdate`, `mrp` FROM buffert";
        $res=mysqli_query($conn,$que);
        if(!$res){
        echo"Insertion error";
    }
    $date=date("Y-m-d");
$abc="INSERT INTO `customerd` VALUES('','$name','$place','$add','$date')";
$res5=mysqli_query($conn,$abc);
    $que1="TRUNCATE TABLE `buffert`";
    $res1=mysqli_query($conn,$que1);
    if(!$res1){
        echo"Truncate error";
    }
}
    ?>
    <center><input type="button" value="Print" onclick="window.print()" class="button"></center>
    <!--<center><input type="submit" name="Print" value="Print" onclick="window.print()"></center>
    <br><br>-->
</form>
</fieldset>
</center>

</body>
</html>
<table>
                