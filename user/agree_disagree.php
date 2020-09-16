<?php 
include('../connection.php');
if (isset($_GET['id'])) 
{
echo	$id=$_GET['id'];
	$sql=mysqli_query($conn,"UPDATE users_product set aproval_status='1' where id='$id'") or die(mysqli_error($conn));
 	if(mysqli_affected_rows($conn))
	{
	   
	    echo "<script>alert('Received successfully....');window.open('all_product.php','_self');</script>";
	}
}

?>
