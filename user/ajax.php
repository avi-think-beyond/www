<?php
date_default_timezone_set('Asia/Kolkata'); 
include('../connection.php');

session_start();
$shop= $_SESSION['uid'];

// ADD EXPENSES
if(isset($_POST['type']) && $_POST['type']=='add_expense')
{
	extract($_POST);
	print_r($_POST);
		
	$query=mysqli_query($conn,"SELECT * FROM expenses_details ORDER BY id DESC LIMIT 1");
		$row=mysqli_fetch_assoc($query);
		 $invoice_no=$row['invoice_no']+1;
		
	mysqli_query($conn,"INSERT INTO expenses_details(bill_no,bill_name,amount,party_name,address,mobile,payment_method,date,invoice_no,user) VALUES('$bill_no','$bill_name','$amount','$party_name','$exp_address','$exp_mobile','$payment','$date','$invoice_no','$shop')") or die(mysqli_error($conn));

}

// EDIT EXPENSES
if(isset($_POST['type']) && $_POST['type']=='edit_expense')
{
	extract($_POST);
	print_r($_POST);
		

	mysqli_query($conn,"UPDATE expenses_details SET date='$date',bill_no='$bill_no',bill_name='$bill_name',amount='$amount',party_name='$party_name',address='$exp_address',mobile='$mobile',payment_method='$payment' WHERE id='$exp_id'") or die(mysqli_error($conn));

}
?>

	