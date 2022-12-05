<!DOCTYPE html>
<html>
<head>
	<title></title><!-- iframe tag used only-->
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		.tabl{border-collapse:collapse; width: 50%;}
    th td{ text-align: left; padding: 4px;}
    tr{ background-color: white; color: black; }
    th{ background-color:gray; color: white;  }

    label{ font-size: 70%;  }

	</style>
</head>
<body>
	<script type="text/javascript">
        
    function codespeedy(){
      var print_div = document.getElementById('print');
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();
// This is the code print a particular div element
    }

  </script>
	 <div class="header">
  <h1 style="color: white;"></h1>
</div>
<div style="background-color: ; padding:10px; font-size: 20px; color: white; " id="print">
<center>
<table border="1">
	<tr>
		<td colspan="7">
			<label class="label1">No:</label>
			<label style="margin-left: 80%">Date: / /</label>
			<center>
				<label style="font-size: 120%;"><b>Suraj Chaudhary Medical Shop</b></label>
				<br>
			<label class="label1">Raj Nagar,Plot No:1/2,Shop NO:2,Aurangbad</label>
		</center>
	</td>
	</tr>
	<tr>
		<th>Id</th>
		<th>Quality</th>
		<th>Medicine Name</th>
		<th>Mfg</th>
		<th>Batch</th>
		<th>Expiry Date</th>
		<th>Amount</th>
	</tr>
	<tr>
		<td>1</td>
		<td>22</td>
		<td>ors</td>
		<td>4455</td>
		<td>345678</td>
		<td>40.00</td>
		<td>33</td>
	</tr>
</center>
</table>
<input type="button" name="" value="Print" class="button">

</div>
<form>
    <input type="button" value="Click Me" onclick="codespeedy()">
  </form>

</body>
</html>