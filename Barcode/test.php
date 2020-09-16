<?php
// ini_set("display_errors","1");
// printer.default_printer=PHP_INI_ALL
// extension=php_printer.dll
// if(isset($_POST['generate_barcode']))
// {
 // $text=$_POST['barcode_text'];
$text="8286548055";
//echo "<img alt='testing' src='barcode.php?codetype=Code128&size=40&text=".$text."&print=true'/>";
//open printer
// var_dump(printer_list(PRINTER_ENUM_LOCAL | PRINTER_ENUM_SHARED));
// }
?>






<table>
	<thead>
		<tr>
			<th> <img alt='testing' src='barcode.php?codetype=Code128&size=20&text=<?php echo $text ?>&print=true' /></th>
		
		</tr>
	</thead>
</table>