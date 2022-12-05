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

<form action='' method='post'>
    <?php
$conn=mysqli_connect("localhost","root","","pharma");
if(!$conn){
    die("Could not connect".mysqli_error());
}
            echo"<input type='text' name='valueToSearch' placeholder='Value To Search'><br><br>
            Quantity:<input type='number' name='qty1'><br><br>
            <input type='submit' name='search' value='Filter'><br><br>";
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
    // using concat mysql function
  //  $query2 = "INSERT INTO `buffert`(`medid`,`medname`, `mfg`, `batch`, `expdate`) SELECT `medid`,`medname`,`mfg`,`batch`,`expdate` FROM `medata` WHERE `medid` LIKE '%".$valueTo."%'";
   // $query3="UPDATE `buffert` SET `qty1`=$qty1,`mrp`=$mrp1 WHERE `medid`=$valueTo";
   // $search_result1 = mysqli_query($conn,$query2);
   // $search_result2=mysqli_query($conn,$query3);
//}
$query1="SELECT `medid`,`qty`,`medname`,`mfg`,`batch`,`expdate`,`mrp` FROM `medata`";
$ss=mysqli_query($conn,$query1);

echo"<table>
                <tr>
                    <th>MedId</th>
                    <th>Medname</th>
                    <th>Mfg</th>
                    <th>Batch</th>
                    <th>Expiry Date</th>
                    <th>MRP</th>
                </tr>";
        while($row = mysqli_fetch_array($ss,MYSQLI_ASSOC)){
        echo"<tr>";
        	echo"<td>".$row['medid']."</td>";
        	echo"<td>".$row['medname']."</td>";
        	echo"<td>".$row['mfg']."</td>";
        	echo"<td>".$row['batch']."</td>";
        	echo"<td>".$row['expdate']."</td>";
            $aa=$row['mrp']/$row['qty'];
            echo"<td>".$aa."</td>";
        	echo"</tr>";
    }
    //endwhile;
    echo"</table>";
mysqli_close($conn);

?>
<input type="button" name="Next" value="Next" onclick="location.href='sampbill.php';">
</form>
</body>
</html>