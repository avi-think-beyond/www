<?php 
if (isset($_GET['barcode'])) 
{
	$barcode=$_GET['barcode'];
	$design=$_GET['design'];
	$vendor=$_GET['vendor'];
	$result = substr($vendor, 0, 3);
	$product_name=$_GET['product_cat'];
	$mrp=$_GET['mrp'];
	$color=$_GET['color'];
	$size=$_GET['size'];
	$style=$design.$result;
}
 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 transitional//EN">

<html> <head>

<title></title>

<style>
td{
	float: left;
	font-size: 12px;
	}

.img{
		width: 112.32px;height: 48px;
	}

</style>

</head>

<body style="background-color: grey;">

<div style="width: 151.104px;height: 189.12px;background-color: white;" id="printMe">

	

		<table>

			<tr><td style="font-weight: bold;">Style No:</td><td><?php echo $style; ?></td></tr>

			<tr><td style="font-weight: bold;"><?php echo $product_name; ?></td></tr>

			<tr><td style="font-weight: bold;">Size: </td><td><?php echo $size; ?>,</td><td style="font-weight: bold;">Colour: </td><td><?php echo $color; ?></td></tr>

			<tr><td style="font-weight: bold;">MRP:</td><td><?php echo $mrp; ?>/-	</td></tr>

			<tr><td style="font-weight: bold;">(Inclusive of all taxes)</td></tr>

			

			<tr><td> <img alt='<?php echo $barcode ?>' src='barcode.php?codetype=Code128&size=20&text=<?php echo $barcode ?>&print=true' /></td></tr>

			

		

	</table>

	

</div>

<button onclick="printDiv('printMe')" type="button">Print</button>

</body>



</html>

<script>

		function printDiv(divName){

			var printContents = document.getElementById(divName).innerHTML;

			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}

	</script>