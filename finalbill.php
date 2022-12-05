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
    <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
</style>
</head>
<body>
    <input type="button" name="Back" value="Back" onclick="location.href='searchbox.php';">

<form action="" method="Post">
   <center>

<table border="1">
    <tr>
        <td colspan="7">
            <label class="label1">Sr No:<?php 
         $conn=mysqli_connect("localhost","root","","pharma"); 
         $que3="SELECT * FROM customerd";
         $ans=mysqli_query($conn,$que3);
         $count = mysqli_num_rows($ans);
         echo ++$count;
         ?></label>
            <label style="margin-left: 65%"><?php echo"Date:".date("d-m-Y");?></label>
            <center>
                <label style="font-size: 120%;"><b>Chaudhary & Sons Medical Shop</b></label>
                <br>
            <label class="label">Raj Nagar,Plot No:1/2,Shop NO:2,Aurangbad</label><br><br>
            <label >Customer Name:</label><input type="text" name="cname">
            <label style="margin-left: 50%%;">Doctor Name:</label><input type="text" name="place">
        </center>
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
</center><br><br>
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
    if(isset($_POST['Print'])){
        $quer4="TRUNCATE TABLE `buffert`";
        $res23=mysqli_query($conn,$quer4);
         $date=date("Y-m-d");
$abc="INSERT INTO `customerd` VALUES('','$name','$place','$add','$date')";
$res5=mysqli_query($conn,$abc);
    }

   
}
    ?>
    <center><input type="submit" name="Print" value="Print" onclick="window.print()"></center>
    <br><br>
    
</form>
</body>
</html>
<table>
                