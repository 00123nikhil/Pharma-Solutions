<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="stt.css">

	<style>
 .label{
  width: 200px;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 2px;
}
.button{width:130px;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: grey;
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
  <a href="admin.php">BACK</a>
</ul>
<div style="background-color: #0066cc; padding: 64px; " class="di1">
	<div style="background-color:#83a3af; opacity: 0.9; padding:7px; font-size: 25px;color: blue;">
	<h2 style="color: white;">Add Medicine Form <hr></h2>

	<form><table>
   <tr>
    
 <td>Quantity</td><td><input type="tel" name="qty"   required="" pattern="[0-9]{1}"  class="label">&nbsp &nbsp &nbsp &nbsp</td>
 <td>Free</td><td><input type="text" name="free" class="label" required="">&nbsp &nbsp &nbsp &nbsp</td>
  <td>Medicine Name</td><td><input type="text" name="medname" class="label" required="">&nbsp &nbsp &nbsp &nbsp</td>
  
  </tr>
<tr>
  <td>Package</td><td><input type="text" name="pkg" class="label" required="" pattern="[0-9]{1}"></td>
<td>Manufacturer</td><td><input type="" name="mfg" class="label" required="" pattern="[0-9]"></td>
<td>Batch No</td><td><input type="text" name="batch" class="label" required="" pattern="[0-9]"></td>

</tr>
<tr>
  <td>Expire Date</td><td><input type="date" name="exp" class="label" required=""></td>
  <td>HSN</td><td><input type="textarea" name="hsn" class="label" required=""></td>
<td>Mrp</td><td><input type="text" name="mrp" class="label" pattern="[0-9]" required=""></td>


</tr>
<tr>
  <td>Rate</td><td><input type="textarea" name="rate" class="label" required=""></td>
  <td>Discount</td><td><input type="text" name="discount" class="label" required=""></td>
  <td>SGST</td><td><input type="text" name="sgst" class="label" required=""></td>

</tr>
<tr>
  <td>CGST</td><td><input type="text" name="cgst" class="label" pattern="[0-9]" required=""></td>
<td>Amount</td><td><input type="text" name="amount" class="label" pattern="[0-9]" required=""></td>
</tr>
<tr>
  <td><input type="submit" name="confirm" value="submit" class="button">&nbsp &nbsp &nbsp</td>
  <td><input type="reset" name="" value="Cancel" style="" class="button"></td>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","pharma");// or die("could not connect!");
if(!$conn){//mysqli_select_db($conn,"pharma")){
  echo"Datbase not selected";
}
if(isset($_POST['confirm'])){
$qty=$_POST['qty'];
$free=$_POST['free'];
$medname=$_POST['medname'];
$pkg=$_POST['pkg'];
$mfg=$_POST['mfg'];
$batch=$_POST['batch'];
$expdate=$_POST['exp'];
//$expdate=date("YYYY-MM-DD",strtotime($expdate1));
$hsn=$_POST['hsn'];
$mrp=$_POST['mrp'];
$rate=$_POST['rate'];
$dis=$_POST['discount'];
$SGST=$_POST['sgst'];
$CGST=$_POST['cgst'];
$amount=$_POST['amount'];
//$sql="INSERT INTO medata VALUES('$medid','$qty','$free','$medname','$pkg','$mfg','$batch','$expdate','$hsn','$mrp','$rate','$dis','$SGST','$CGST','$amount')";
$sql="INSERT INTO `medata`(`medid`, `qty`, `free`, `medname`, `pkg`, `mfg`, `batch`, `expdate`, `hsn`, `mrp`, `rate`, `dis`, `SGST`, `CGST`, `amount`) VALUES ('','$qty','$free','$medname','$pkg','$mfg','$batch','$expdate','$hsn','$mrp','$rate','$dis','$SGST','$CGST','$amount')";
$ss=$conn->query($sql);
echo $sql;
if(!$ss)
{
  echo "Insertion error";}
}
$conn->close();
?>
</table>
	</form>
</div>
</div>
</body>
</html>