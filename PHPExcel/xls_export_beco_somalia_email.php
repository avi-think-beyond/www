<?php
date_default_timezone_set('Africa/Nairobi');
$now_date_time=date("Y-m-d H:i:s");
$now_date_only=date("Y-m-d");

require_once('../PHPMailer/class.phpmailer.php');
include("../PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$file_down_name= 'BECO_DailyReport'.date('j-F-Y').'.xls';
$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "smtp.fleximc.com"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->Host       = "smtp.fleximc.com"; // sets the SMTP server
  $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "reports@fleximc.com"; // SMTP account username
  $mail->Password   = "hWvMwTR0";        // SMTP account password
  //$mail->AddReplyTo('s.hidayath@gmail.com', 'Gmail Hidayath');
 /* include '../OpenDb.php';
$select_emails="select * from Flexi_solar_Reports_email  where user_type=1";
$rs_emails=mysqli_query($conn2,$select_emails) or die("error 101".mysqli_error($conn2));
while($row_emails=mysqli_fetch_array($rs_emails))
{
	$send_email_id=$row_emails['email_id'];
	$send_email_added_date=$row_emails['added_date'];
	$send_email_updated_date=$row_emails['updated_date'];
	$send_email_reciver_name=$row_emails['reciver_name'];
	$send_email_status=$row_emails['status'];
	$mail->addAddress($send_email_id, $send_email_reciver_name);  

}*/
//$mail->addAddress('s.hidayath@gmail.com', 'Hidayath Shaik');
$mail->addAddress('nantha.kumar@solon.com', 'Nantha Kumar'); 
$mail->addAddress('Mohamud@umn.edu', 'Mohamud'); 
$mail->addAddress('Halane30@gmail.com', 'Halane'); 
$mail->addAddress('Kiran.Turlapati@solon.com', 'Kiran'); 
$mail->addAddress('Syed.Alhasni@solon.com', 'Syed '); 
$mail->addAddress('nagavardhan.sepuri@solon.com', 'Nagavardhan');
$mail->addAddress('Pcm.Rao@solon.com', 'Rao');  
$mail->addAddress('Sureshkumar.Gajji@solon.com', 'Sureshkumar');  
$mail->addAddress('vaibhav.roongta@solon.com', 'vaibhav');  	
  
$mail->AddBCC('ravi@fleximc.com', 'Ravi FlexiMC'); 
$mail->AddBCC('hidayath@fleximc.com', 'Hidayath FlexiMC');
/*$mail->addAddress('nagesh@shaktihormann.com', 'Nagesh');
$mail->addAddress('subbaraju@shaktihormann.com', 'Subbaraju');
$mail->addAddress('rangarao.nvs@shaktihormann.com', 'Rangarao');
$mail->addAddress('vikram.manthena@shaktihormann.com', 'Vikram');
$mail->addAddress('Ravikiran.tatapudi@solon.com', 'Ravikiran');
$mail->addAddress('Suri.penubolu@solon.com', 'Suri');
$mail->addAddress('Tejasvi.suddhapalli@solon.com', 'Tejasvi'); 
$mail->addAddress('Mahesh.manne@solon.com', 'Mahesh');   
$mail->addAddress('Kiran.turlapati@solon.com', 'Kiran');*/
  $mail->SetFrom('reports@fleximc.com', 'Solar Plant Reports From FlexiMC');
  $mail->FromName = 'Daily Report SOLON INDIA Pvt Ltd';
  //$mail->AddReplyTo('name@yourdomain.com', 'First Last');
  	//$mail->Subject = 'Mail from Hidayath through SMTP, advanced';
  	//$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  	$mail->Subject = 'Daily Report BECO '.date('j-F-Y').'';
	$mail->Body    = 'PFA the daily Energy Generation Report for BECO 2.5MW PV plant for <b> '.date('j-F-Y').'<b>';
	$mail->AltBody = 'PFA the daily Energy Generation Report for BECO 2.5MW PV plant for '.date('j-F-Y');
  
 // $mail->AddAddress("hidayath@fleximc.com", "Hidayath");
  $mail->AddAttachment('/home2/becofleximc/public_html/zemail_data/'.$file_down_name); // attachment
  //$mail->AddAttachment('/home2/solonrooftopflex/public_html/zemail_data/'.$file_down_name1); // attachment
  $mail->Send();
  echo "Message Sent OK<p></p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>  