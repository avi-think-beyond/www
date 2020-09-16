<?php
if ($req_files_!=1){
require_once('../PHPMailer/class.phpmailer.php');
include("../PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
}
 if($test_Email==''){
	$test_Email=$_REQUEST['tst'];
  }

include 'clear_variables.php';

$solar_plant_id=$plant_id=1;
include '/home/swltstawsfleximc/public_html/Source/xconfig.php';
include '/home/swltstawsfleximc/public_html/Source/web/plant/plant_id_details.php';
$solar_plant_name_replace_space = str_replace(" ", "_", $solar_plant_name);
$file_down_name= date('j-F-Y').'_'.$solar_plant_name_replace_space.'_report.xls';

// $Block1_name_capcity='50';
// $Block2_name_capcity='50';

// $Block1_name='TVM1';
// $Block2_name='TVM2';

$select_Irr="SELECT irradiation,today_date FROM Flexi_solar_wms_daily
WHERE DATE(today_date) = CURDATE() and wms_id='1' and plant_id='$plant_id'";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
 $Block1_name_irradiation=$Block2_name_irradiation=$Block3_name_irradiation=$irradiation=round($row16['irradiation'],2);
	}
	$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date,last_data_time FROM Flexi_solar_MFM_daily
	WHERE DATE(today_date) = CURRENT_DATE  and M_id='1' and plant_id='$plant_id'";
	$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
	while($row16=mysqli_fetch_array($rs16))
	{
	$mfm_today_date=$row16['today_date'];
	$mfm_date_time=date('dMY', strtotime($mfm_today_date));
$Block1_last_data_time=$row16['last_data_time'];
	$Block1_name_Energy_Export_today=round($row16['Energy_Export_today'],2);
	$Block1_name_Energy_import_today=round($row16['Energy_import_today'],2);
	$Block1_name_Energy_Export_total=round($row16['Energy_Export_total'],2);
	$Block1_name_Energy_import_total=round($row16['Energy_import_total'],2);

	}


	if($Block1_name_capcity!=0 && $Block1_name_capcity!=''){
	$Block1_name_specific_yield_mfm = round(($Block1_name_Energy_Export_today/$Block1_name_capcity),2);
	if($Block1_name_irradiation!=0){
	//$PR=round(($specific_yield/$irradiation)*100);
		$Block1_name_PR_mfm=round(($Block1_name_Energy_Export_today/($Block1_name_irradiation*$Block1_name_capcity))*100,1);
	}else {
		$Block1_name_PR_mfm=0;
	}
	}



	$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date,last_data_time FROM Flexi_solar_MFM_daily
	WHERE DATE(today_date) = CURRENT_DATE  and M_id='2' and plant_id='$plant_id'";
	$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
	while($row16=mysqli_fetch_array($rs16))
	{
	$mfm_today_date=$row16['today_date'];
	$mfm_date_time=date('dMY', strtotime($mfm_today_date));
	$Block2_last_data_time=$row16['last_data_time'];
	$Block2_name_Energy_Export_today=round($row16['Energy_Export_today'],2);
	$Block2_name_Energy_import_today=round($row16['Energy_import_today'],2);
	$Block2_name_Energy_Export_total=round($row16['Energy_Export_total'],2);
	$Block2_name_Energy_import_total=round($row16['Energy_import_total'],2);

	}


	if($Block2_name_capcity!=0 && $Block2_name_capcity!=''){
	$Block2_name_specific_yield_mfm = round(($Block2_name_Energy_Export_today/$Block2_name_capcity),2);
	if($Block2_name_irradiation!=0){
	//$PR=round(($specific_yield/$irradiation)*100);
	$Block2_name_PR_mfm=round(($Block2_name_Energy_Export_today/($Block2_name_irradiation*$Block2_name_capcity))*100,1);
	}else {
	$Block2_name_PR_mfm=0;
	}
	}

$select_Inverter="SELECT SUM(kwh_today) AS ENERGY_Generated_today,kwh_till_date, Time_of_use_today, today_date FROM Flexi_solar_inverters_daily
WHERE DATE(today_date) = CURDATE()  and plant_id='$plant_id'";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$ENERGY_Generated_today=round($row16['ENERGY_Generated_today'],1);


$today_date=$row16['today_date'];
$Time_of_use_today=round($row16['Time_of_use_today'],1);
if($solar_plant_dc_capacity!=0 && $solar_plant_dc_capacity!=''){
$specific_yield_inverter = round(($ENERGY_Generated_today/$solar_plant_dc_capacity),2);
if($irradiation!=0){
//$PR=round(($specific_yield/$irradiation)*100);
$PR_Inverter=round(($ENERGY_Generated_today/($irradiation*$solar_plant_dc_capacity))*100,1);
}else {
$PR_Inverter=0;
}
}


	}

//print_r($irrarr);
$select_Irr="SELECT SUM(Energy_Export_today) AS Energy_Export_today_SUM,SUM(Energy_Export_total)AS Energy_Export_total_SUM,
SUM(Energy_import_today) AS Energy_import_today_SUM,SUM(Energy_import_total) AS Energy_import_total_SUM,today_date,last_data_time FROM Flexi_solar_MFM_daily
WHERE DATE(today_date) = CURDATE() and plant_id='$plant_id'  and  MFM_Cumulative=1";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
// $irradiation=$irrarr[$mfm_date_time];
//$Block1_last_data_time=$row16['last_data_time'];
$Energy_Export_today=round($row16['Energy_Export_today_SUM'],1);
$Energy_import_today=round($row16['Energy_import_today_SUM'],1);
$Energy_Export_total=round($row16['Energy_Export_total_SUM'],1);
$Energy_import_total=round($row16['Energy_import_total_SUM'],1);
if($solar_plant_dc_capacity!=0 && $solar_plant_dc_capacity!=''){
$specific_yield_mfm = round(($Energy_Export_today/$solar_plant_dc_capacity),2);
if($irradiation!=0){
//$PR=round(($specific_yield/$irradiation)*100);
$PR_mfm=round(($Energy_Export_today/($irradiation*$solar_plant_dc_capacity))*100,1);
}else {
$PR_mfm=0;
}
}
}

$sql_zone = "SELECT Zone_id,inverter_id from Flexi_solar_inverter_list where plant_id='$plant_id'";
 $rs_zone=mysqli_query($conn2,$sql_zone) or die("error 101".mysqli_error($conn2));
 $plant_zone =array();
 $cnt_zone =array();
 $ik=0;
 while($row_zone=mysqli_fetch_array($rs_zone)){
 	$Zone_id = $row_zone['Zone_id'];
 	$plant_zone[$Zone_id] .= $row_zone['inverter_id'].',';

 	$cnt_zone[$Zone_id] = $ik++;
 }


 $arr_ENERGY_Generated_today=array();
 $inv_specific_yield_inverter=array();
 $singl_PR_Inverter=array();

 // $solar_plant_capacity_dc = "65.018";
 for($m=1;$m<=count($plant_zone);$m++){
 $trimed_val= trim($plant_zone[$m],",");

 $select_Inverter="select sum(kwh_today) as ENERGY_Generated_today from Flexi_solar_inverters_daily where DATE(today_date) = CURDATE()   and plant_id='$plant_id' and Inverter_id IN ('$trimed_val') order by today_date DESC";
 $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
 while($row16=mysqli_fetch_array($rs16)){
  $arr_ENERGY_Generated_today[$m] =round($row16['ENERGY_Generated_today'],2);

 if($solar_plant_capacity_dc!=0 && $solar_plant_capacity_dc!=''){
 $inv_specific_yield_inverter[$m] = round(($arr_ENERGY_Generated_today[$m]/$solar_plant_capacity_dc),2);
 if($irradiation!=0){
 //$PR=round(($specific_yield/$irradiation)*100);
 if($m==1){
 	$cnt_inv= 1;
 }elseif($m==2){
 	$cnt_inv= 2;
 }

 $singl_PR_Inverter[$m]=round((($arr_ENERGY_Generated_today[$m]/($irradiation*$solar_plant_capacity_dc))*100)/$cnt_inv,2);
 }else {
 $singl_PR_Inverter[$m]=0;
 }
 }
 }
 }

// $Block1_name_ENERGY_Generated_today = $arr_ENERGY_Generated_today[1];
// $Block2_name_ENERGY_Generated_today = $arr_ENERGY_Generated_today[2];

 
// $Block1_name_PR_Inverter = $singl_PR_Inverter[1];
// $Block2_name_PR_Inverter = $singl_PR_Inverter[2];


// $Block1_name_specific_yield_inverter = $inv_specific_yield_inverter[1];
// $Block2_name_specific_yield_inverter = $inv_specific_yield_inverter[2];



//$cnt_mfm = $m -1;
// $cnt_mfm = 2;
//echo "cnt_mfm".$cnt_mfm."<br>";
//exit;
// $mean_val = ($Block1_name_Energy_Export_today + $Block2_name_Energy_Export_today + $Block3_name_Energy_Export_today + $Block4_name_Energy_Export_today + $Block5_name_Energy_Export_today)/$cnt_mfm;
//  $mean_val = ($Block1_name_specific_yield_mfm + $Block2_name_specific_yield_mfm)/$cnt_mfm;

// $mean_Block1 = pow(($Block1_name_specific_yield_mfm - $mean_val),2);
// $mean_Block2 = pow(($Block2_name_specific_yield_mfm - $mean_val),2);


// $SD_block = sqrt(($mean_Block1 + $mean_Block2 )/($cnt_mfm)); 
// $CV_block = round(($SD_block/$mean_val)*100,2);


$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
      // SMTP account password
	$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
                 // set the SMTP port for the GMAIL server
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

$Mail_header_1='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<title>'.$solar_plant_name.' Daily Digest '.date("l jS  F Y").' </title>
	<style type="text/css">
		html {
			width: 100%;
		}
		body {
			-webkit-text-size-adjust: none;
			-ms-text-size-adjust: none;
			margin: 0;
			padding: 0;
		}
		table {
			border-spacing: 0;
			border-collapse: collapse;
			table-layout: fixed;
			margin: 0 auto;
		}
		table table table {
			table-layout: auto;
		}
		img {
			over-flow: hidden !important;
		}
		table td {
			border-collapse: collapse;
		}
		a {
			color: #3d96ef;
			text-decoration: none;
		}
		.textbutton a {
			font-family: \'open sans\', arial, sans-serif !important;
			color: #ffffff !important;
		}

		/*Responsive*/

		@media only screen and (max-width: 640px) {
			body {
				width: auto !important;
			}
			table[class="table680"] {
				width: 450px !important;
			}
			table[class="table-inner"] {
				width: 90% !important;
				text-align: center !important;
			}
			table[class="table2-2"] {
				width: 47% !important;
				text-align: center !important;
			}
			/* For full width */
			table[class="table-full"] {
				width: 100% !important;
				text-align: center !important;
			}
			/* ETC */
			td[class="hide"] {
				max-height: 0px !important;
				height: 0px !important;
			}
			table[class=scale] {
				width: 100%!important;
			}
			td[class=scale-center-both-topbtm] {
				width: 100%!important;
				text-align: center!important;
				padding-left: 20px!important;
				padding-right: 20px!important;
				padding-top: 12px!important;
				padding-bottom: 12px!important;
			}
			td[class=scale-center-both] {
				width: 100%!important;
				text-align: center!important;
				padding-left: 20px!important;
				padding-right: 20px!important;
			}
		}

		@media only screen and (max-width: 479px) {
			body {
				width: auto !important;
			}
			table[class="table680"] {
				width: 280px !important;
			}
			table[class="table-inner"] {
				width: 90% !important;
				text-align: center !important;
			}
			table[class="table2-2"] {
				width: 100% !important;
				text-align: center !important;
			}
			/* For full width */
			table[class="table-full"] {
				width: 100% !important;
				text-align: center !important;
			}
			/* ETC */
			td[class="hide"] {
				max-height: 0px !important;
				height: 0px !important;
			}
		}
	</style>
</head>

<body>
	<!-- Header -->';
$Mail_header_2_site_details='<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<td height="40"></td>
		</tr>
		<tr>
			<td bgcolor="#ffffff">

				<table width="680" border="0" cellspacing="0" cellpadding="0" align="center" class="scale">
					<tr>
						<td bgcolor="#ffffff">

							<table width="680" border="0" cellspacing="0" cellpadding="0" align="center" class="scale">
								<tr>
									<td height="30">&nbsp;</td>
								</tr>
								<tr>
									<td>
										<table width="100" border="0" cellspacing="0" cellpadding="0" align="left" class="scale">
											<tr>
												<td class="scale-center-both-topbtm">
													<a href="#"><img src="https://cleantech.fleximc.com/images/FlexiMC_logo_40x84.png" style="max-width: 180px;" title="FlexiMC Solutions Pvt Ltd" alt="FlexiMC Solutions Pvt Ltd" /></a>
												</td>
											</tr>
										</table>
										<table width="400" border="0" cellspacing="0" cellpadding="0" align="right" class="scale">
											<tr>
												<td height="48" align="right" class="scale-center-both" style="color: #103871; font-size: 14px; font-family:TimesNewRoman,\'Times New Roman\',Times,Baskerville,Georgia,serif;">
													<em>'.date("l, j<\s\up>S</\s\up>  F Y").'</em>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td height="35">&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!-- //Header -->

	<!--Title Bar-->

	<table bgcolor="#FFFFFF" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="center">
				<table class="table-inner" align="center" width="680" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td height="5"></td>
					</tr>
					<tr>
						<td height="20" style="border-top:1px solid #222222;"></td>
					</tr>
					<tr>
						<td style="font-family: \'Open Sans\', Arial, sans-serif; line-height:21px; text-align:center; font-weight: 600; color:#000000; font-size:18px; letter-spacing: 1px; padding:5px 0; ">
							'.$solar_plant_name.' - Daily Digest - '.date("l, j<\s\up>S</\s\up>  F Y").'
						</td>
					</tr>
					<tr>
						<td align="center" class="scale-center-both" style="font-family:Lato,Tahoma,Verdana,Segoe,sans-serif;color:#71777d; vertical-align: bottom;  font-size: 16px; line-height: 20px;padding:10px 0 20px;"
						    mc:edit="">PFA '.date("F Y").' month Energy Generation Report</td>
					</tr>
					<tr>
						<td height="10"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<!--end Title Bar-->';
$Mail_tableopen='<!-- Content list -->
	<table bgcolor="#FFFFFF" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="center">
				<table width="680" border="0" align="center" cellpadding="0" cellspacing="0" class="table-inner">';
$Mail_tr1='<tr><td style="font-family:Lato,Tahoma,Verdana,Segoe,sans-serif; font-size:14px; letter-spacing:1px; padding:15px;">';
$Mail_tr2='</td><td style="font-family:Lato,Tahoma,Verdana,Segoe,sans-serif; font-size:14px; letter-spacing:1px; padding:15px;">';
$Mail_tr3='</td></tr>';
$Mail_table_close='</table></td></tr></table><!--end Content list -->';
$Mail_extra_title_table='<!--Title Bar-->
	<table bgcolor="#FFFFFF" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="center">
				<table class="table-inner" align="center" width="680" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td height="50"></td>
					</tr>
					<tr>
						<td style="font-family: \'Open Sans\', Arial, sans-serif; line-height:21px; text-align:center; font-weight: 600; color:#000000; font-size:18px; letter-spacing: 1px; padding:5px 0; ">
						';

$Mail_extra_title_table_close='</td>
					</tr><tr>
						<td height="20"></td>
					</tr>
					</table>
			</td>
		</tr>
	</table>
	<!--end Title Bar-->
					';




$Mail_Footer='<!-- FOOTER -->
	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<td bgcolor="#fffff">

				<table width="680" border="0" cellspacing="0" cellpadding="0" align="center" class="scale">

					<tr>
						<td bgcolor="#ffffff">

							<table width="680" border="0" cellspacing="0" cellpadding="0" align="center" class="scale">
								<tr>
									<td height="30" style="border-bottom: 1px solid #cccccc;"></td>
								</tr>

								<tr>
									<td height="32">&nbsp;</td>
								</tr>
								<tr>
									<td>

										<table border="0" cellspacing="0" cellpadding="0" align="center" class="scale">
											<tr>
												<td height="0"></td>
											</tr>
											<tr>
												<td>
													<a style="display: block; border-style: none !important; border: 0 !important;" href="https://plus.google.com/+FlexiMCSolutionsPVTLTDBangalore"><img editable="true" mc:edit="google" width="35" height="35" border="0" style="display: block;" src="https://cleantech.fleximc.com/images/googleplus@2x.png" alt="Google plus" /></a>
												</td>
												<td>&nbsp;&nbsp;&nbsp;</td>
												<td>
													<a style="display: block; border-style: none !important; border: 0 !important;" href="https://www.facebook.com/FlexiMC"><img editable="true" mc:edit="facebook" width="35" height="35" border="0" style="display: block;" src="https://cleantech.fleximc.com/images/facebook@2x.png" alt="FlexiMC facebook" /></a>
												</td>
												<td>&nbsp;&nbsp;&nbsp;</td>
												<td>
													<a style="display: block; border-style: none !important; border: 0 !important;" href="https://twitter.com/FlexiMC1"><img editable="true" mc:edit="twitter" width="35" height="35" border="0" style="display: block;" src="https://cleantech.fleximc.com/images/twitter@2x.png" alt="FlexiMC Twitter" /></a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td height="30" style="border-bottom: 1px solid #cccccc;"></td>
								</tr>
							</table>

						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" height="40"></td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" height="30"></td>
					</tr>

					<tr>
						<td bgcolor="#ffffff" align="center" mc:edit="copy2" style="color: #939393; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;"
						    class="prefooter-subheader">
							<multiline>
								<span style="color: #314c67">Visit :</span> <a href="https://cleantech.fleximc.com/">https://cleantech.fleximc.com/</a>

							</multiline>

						</td>
					</tr>

					<tr>
						<td bgcolor="#ffffff" height="30"></td>
					</tr>
				</table>

			</td>
		</tr>
		<tr>
			<td height="40"></td>
		</tr>
	</table>
<!-- //FOOTER -->

</body>

</html>';
$mailBody    = $Mail_header_1.$Mail_header_2_site_details.
'<!-- Site Cum Data-->'.
$Mail_tableopen.$Mail_extra_title_table.' '.$Mail_extra_title_table_close.
$Mail_tableopen
.$Mail_tr1.' Site Name :'.$Mail_tr2.''.$solar_plant_name.''.$Mail_tr3.'

'.$Mail_tr1.' Site Location :'.$Mail_tr2.''.$solar_plant_location_city.' '.$solar_plant_location_state.''.$Mail_tr3.'
'.$Mail_tr1.' Installed Capacity :'.$Mail_tr2.''.$solar_plant_dc_capacity.' kWp'.$Mail_tr3.'

'.$Mail_tr1.' Today\'s&#160;Energy Generation [Inverters] :'.$Mail_tr2.''.$ENERGY_Generated_today.' kWh'.$Mail_tr3.'
'.$Mail_tr1.' Today\'s Energy Generation [MFM] :'.$Mail_tr2.''.$Energy_Export_today.' kWh'.$Mail_tr3.'

'.$Mail_tr1.' Specific Yield Today [Inverters] :'.$Mail_tr2.''.$specific_yield_inverter.' kWh/kWp'.$Mail_tr3.'
'.$Mail_tr1.' Specific Yield Today [MFM] :'.$Mail_tr2.''.$specific_yield_mfm.' kWh/kWp'.$Mail_tr3.'
'.$Mail_tr1.' Irradiation Today:'.$Mail_tr2.''.$irradiation.' kWh/m<sup>2</sup>'.$Mail_tr3.'

'.$Mail_tr1.'PR [Inverters] :'.$Mail_tr2.''.$PR_Inverter.' %'.$Mail_tr3. '
'.$Mail_tr1.'PR [MFM] :'.$Mail_tr2.''.$PR_mfm.' %'.$Mail_tr3.'



'.$Mail_tr1.''.$Block2_name.' Last Recorded Timestamp :'.$Mail_tr2.''.$Block1_last_data_time.  $Mail_tr3.'
'.$Mail_tr1.''.$Block2_name.' Last Recorded Value [MFM] :'.$Mail_tr2.''.$Energy_Export_total.' kWh'.$Mail_tr3.'
 '.$Mail_table_close.''







.$Mail_Footer;





if($test_Email!=1){

 include '../../OpenDb.php';
$select_emails="select * from Flexi_solar_Reports_email where status=1 and plant_id='$plant_id'";
$rs_emails=mysqli_query($conn2,$select_emails) or die("error 101".mysqli_error($conn2));
while($row_emails=mysqli_fetch_array($rs_emails))
{
	echo $send_email_id=$row_emails['email_id'];
	$send_email_added_date=$row_emails['added_date'];
	$send_email_updated_date=$row_emails['updated_date'];
	$send_email_reciver_name=$row_emails['reciver_name'];
	$send_email_status=$row_emails['status'];
	$mail->addAddress($send_email_id, $send_email_reciver_name);

}

}


if($test_Email==1){
	$mail->addAddress('sikandar.s@fleximc.com', 'mallikarjun');
$mail->addAddress('mallikarjun.h@fleximc.com', 'Mallikarjun');
}

// $mail->AddBCC('hidayath@fleximc.com', 'Hidayath FlexiMC');
//$mail->addAddress('s.hidayath@gmail.com', 'Hidayath Shaik');
// $mail->AddBCC('deepak.s@fleximc.com', 'Deepak S');
/*$mail->addAddress('nantha.kumar@solon.com', 'Nantha Kumar');
$mail->AddBCC('ravi@fleximc.com', 'Ravi FlexiMC');
$mail->AddBCC('hidayath@fleximc.com', 'Hidayath FlexiMC');
$mail->addAddress('nagesh@shaktihormann.com', 'Nagesh');
$mail->addAddress('subbaraju@shaktihormann.com', 'Subbaraju');
$mail->addAddress('rangarao.nvs@shaktihormann.com', 'Rangarao');
$mail->addAddress('vikram.manthena@shaktihormann.com', 'Vikram');
$mail->addAddress('Ravikiran.tatapudi@solon.com', 'Ravikiran');
$mail->addAddress('Suri.penubolu@solon.com', 'Suri');
$mail->addAddress('Tejasvi.suddhapalli@solon.com', 'Tejasvi');
$mail->addAddress('Mahesh.manne@solon.com', 'Mahesh');
$mail->addAddress('Kiran.turlapati@solon.com', 'Kiran');
$mail->addAddress('ramamurty.bulusu@solon.com', 'Ramamurty Bulusu');*/
//$plant_name='Sangam India Ltd';

  $mail->SetFrom('reports@fleximc.com', 'Solar Plant Reports From FlexiMC');
  $mail->FromName = 'Daily Solar Report '.$solar_plant_name;
  //$mail->AddReplyTo('name@yourdomain.com', 'First Last');
  	//$mail->Subject = 'Mail from Hidayath through SMTP, advanced';
  	//$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  	$mail->Subject =  $solar_plant_name.' - Digest '.date("Y-m-d").'';
	$mail->Body    = $mailBody;
	$mail->AltBody =  'Site ['.$solar_plant_project_name_code.'] '.$solar_plant_name.' - Digest '.date("Y-m-d").'';

 // $mail->AddAddress("hidayath@fleximc.com", "Hidayath");
	 $mail->AddAttachment('/home/swltstawsfleximc/public_html/zemail_data/'.$file_down_name); // attachment
  //$mail->AddAttachment('/home/solonrooftopflex/public_html/zemail_data/'.$file_down_name1); // attachment
  $mail->Send();
  echo "Message Sent OK<p></p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>
