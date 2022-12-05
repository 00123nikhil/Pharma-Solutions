<!DOCTYPE html>
<html>
<head>
    <title></title>
          <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" type="text/css" href="stt.css">
    <style type="text/css">
    .button{width:125px; height:30;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: #b3b3b3;
  color: black;
  border-radius: 2px;}

.btn{
    width:125px; height:30;
  padding: 5px 0px;
  margin-left: 80%;
  box-sizing: border-box;
  background-color: #b3b3b3;
  color: black;
  border-radius: 2px;
}
 .tabl{border-collapse:collapse; width: 50%;}
    th td{ text-align: left; padding: 4px;}
    tr{ background-color: white; color: black; }
    th{ background-color:white; color: black;  }

table,tr,th,td
            {
                border: 1px solid black;
                width: 650px;
            }
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

<div style="background-color: #e6e6e6; padding: 50px;"  class="">

<form action='' method='post'>
    <input type="button"  name="Next" value="Next" onclick="location.href='finalbill.php';" class="btn">
    <br><br><br>
    <center>
    <?php
    error_reporting(0);
$conn=mysqli_connect("localhost","root","","pharma");
if(!$conn){
    die("Could not connect".mysqli_error());
}
            echo"Medicine Name:<input type='text' name='valueToSearch' placeholder='Value To Search'><br><br>
            Quantity:<input type='number' name='qty1'><br><br>
            <input type='submit' name='search' value='Filter' class='button'><br><br>";
             $qty1=$_POST['qty1'];
             
   if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    //$query = "SELECT `medid`,`qty`,`medname`,`mfg`,`batch`,`expdate`,`mrp` FROM `medata` WHERE `medname` LIKE '%".$valueToSearch."%'";
        $query = "SELECT * FROM `medata` WHERE `medname` LIKE '%".$valueToSearch."%'";
    //echo"$a=".$row['medid'];
    $search_result=filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "pharma");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
echo"<table>
                <tr>
                    <th>MedId</th>
                    <th>qty</th>
                    <th>Medname</th>
                    <th>Mfg</th>
                    <th>Batch</th>
                    <th>Expiry Date</th>
                    <th>Amount</th>
                </tr>";
      
    while($row = mysqli_fetch_array($search_result,MYSQLI_ASSOC)){

    echo"<tr>";
     //echo"td>".$row['srno']."</td>";
    	echo"<td>".$row['medid']."</td>";
    	$r1=$row['medid'];
    	echo"<td>".$qty1."</td>";
    	echo"<td>".$row['medname']."</td>";
    	$r2=$row['medname'];
    	echo"<td>".$row['mfg']."</td>";
    	$r3=$row['mfg'];
    	echo"<td>".$row['batch']."</td>";
    	$r4=$row['batch'];
    	echo"<td>".$row['expdate']."</td>";
    	$r5=$row['expdate'];
		 $r6=$qty1*($row['mrp']/$row['qty']/$row['pkg']);
		echo"<td>".$r6."</td>";
		 echo"</tr>";
		 $que="INSERT INTO `buffert` VALUES('',$r1,$qty1,'$r2','$r3','$r4','$r5',$r6)";
		 $ss1=mysqli_query($conn,$que);
}
//endwhile;
echo"</table>";
//if(isset($_POST['search'])){
///	echo"<input type='text' name='mrp1' value=$r6><br><br>";
//}
//$mrp1=$_POST['mrp1'];
//echo"<input type='text' name='id' value=''>";
//echo"<input type='submit' name='add' value='insert'><br><br>";
//(isset($_POST['add']))
//{
    //$valueTo = $_POST['id'];
    // search in all table columns
    
$query1="SELECT * FROM `buffert`";
$ss=mysqli_query($conn,$query1);
echo"<br><br><br>";

echo"<table>
                <tr>
                    <th>Srno</th>
                    <th>Qty</th>
                    <th>Medname</th>
                    <th>Mfg</th>
                    <th>Batch</th>
                    <th>Expiry Date</th>
                    <th>MRP</th>
                </tr>";
        while($row = mysqli_fetch_array($ss,MYSQLI_ASSOC)){
        echo"<tr>";
            echo"<td>".$row['srno']."</td>";
        	echo"<td>".$row['qty1']."</td>";
        	echo"<td>".$row['medname']."</td>";
        	echo"<td>".$row['mfg']."</td>";
        	echo"<td>".$row['batch']."</td>";
        	echo"<td>".$row['expdate']."</td>";
            echo"<td>".$row['mrp']."</td>";
        	echo"</tr>";
    }
    //endwhile;
    echo"</table>";
mysqli_close($conn);

?>

</center>
</form>
</div>
</body>
</html>