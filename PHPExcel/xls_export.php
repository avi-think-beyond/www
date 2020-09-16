<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2013 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2013 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.9, 2013-06-02
 */

/** Error reporting */
//error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once '/home/emacsf/public_html/Source/Application/PHPExcel/Classes/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Flexi-eMACS")
							 ->setLastModifiedBy("FlexiMC Solutions PVT Ltd")
							 ->setTitle("Office 2007 XLSX for every 15 minutes meter data")
							 ->setSubject("Office 2007 XLSX every 15 minutes meter data")
							 ->setDescription("This document for every 15 minutes Energy meter data.")
							 ->setKeywords("15 minutes meter data")
							 ->setCategory("Meter Data");


// Add some data
$row = 1;
$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('A'.$row, 'Meter ID')
                              ->setCellValue('B'.$row, 'Energy Source')
                              ->setCellValue('C'.$row, 'Date Time')
                              ->setCellValue('D'.$row, 'V R-PH')
							   ->setCellValue('E'.$row, 'V Y-PH')
							    ->setCellValue('F'.$row, 'V B-PH')
								 ->setCellValue('G'.$row, 'VPH-AVG')
								  ->setCellValue('H'.$row, 'VR-Y')
								   ->setCellValue('I'.$row, 'VY-B')
								    ->setCellValue('J'.$row, 'VB-R')
									 ->setCellValue('K'.$row, 'VL-AVG')
										->setCellValue('L'.$row, 'IR')
									  ->setCellValue('M'.$row, 'IY')
									   ->setCellValue('N'.$row, 'IB')
									    ->setCellValue('O'.$row, 'IN')
									     ->setCellValue('P'.$row, 'I AVG')
									  ->setCellValue('Q'.$row, 'FR HZ')
									   ->setCellValue('R'.$row, 'FY HZ')
									    ->setCellValue('S'.$row, 'FB HZ')
										 ->setCellValue('T'.$row, 'FAVG HZ')
										  ->setCellValue('U'.$row, 'PF R')
										   ->setCellValue('V'.$row, 'PF Y')
										    ->setCellValue('W'.$row, 'PF B')
											 ->setCellValue('X'.$row, 'PF AVG')
											  ->setCellValue('Y'.$row, 'R kW')
											   ->setCellValue('Z'.$row, 'R kW')
											    ->setCellValue('AA'.$row, 'B kW')
												 ->setCellValue('AB'.$row, 'TOTAL kW')
												  ->setCellValue('AC'.$row, 'R kVAr')
												   ->setCellValue('AD'.$row, 'Y kVAr')
												    ->setCellValue('AE'.$row, 'B kVAr')
													 ->setCellValue('AF'.$row, 'TOTAL kVAr')
													  ->setCellValue('AG'.$row, 'R kVA')
													   ->setCellValue('AH'.$row, 'Y kVA')
													    ->setCellValue('AI'.$row, 'B kVA')
														 ->setCellValue('AJ'.$row, 'TOTAL kVA')
														  ->setCellValue('AK'.$row, 'kWHr')
														   ->setCellValue('AL'.$row, 'kVArHr')
														    ->setCellValue('AM'.$row, 'kW max Active power')
															->setCellValue('AN'.$row, 'kW min Active power')
															->setCellValue('AO'.$row, 'kVAr max Reactive power')
															->setCellValue('AP'.$row, 'kVAr min Reactive power')
															->setCellValue('AQ'.$row, 'kVA MAX');
$row++;
// Miscellaneous glyphs, UTF-8

include '../../OpenDb.php';
$select="SELECT * FROM flexibee_data ORDER BY id DESC";
		$rs=mysqli_query($conn2,$select) or die("error".mysqli_error($conn1));
$row_db=mysqli_fetch_array($rs);

$_id=$row_db['id'];
$FLexiBee_id=$row_db['FB_ID'];
$transfer_method=$row_db['DTT'];
$Bee_timestamp=$row_db['Time'];
$SYSTEM_ENERGY_SOURCE=$row_db['SES'];
$LENGTH_OF_POCKET=$row_db['LOP'];
$METER_ID=$row_db['M_ID'];
$PARAM=$row_db['PARAM'];
$VR_PH=$row_db['VR_PH'];
$VY_PH=$row_db['VY_PH'];
$VB_PH=$row_db['VB_PH'];
$VPH_AVG=$row_db['VPH_AVG'];
$VR_Y=$row_db['VR_Y'];
$VY_B=$row_db['VY_B'];
$VB_R=$row_db['VB_R'];
$VL_AVG=$row_db['VL_AVG'];
$IR=$row_db['IR'];
$IY=$row_db['IY'];
$IB=$row_db['IB'];
$IN=$row_db['IN'];
$IAVG=$row_db['IAVG'];
$FR=$row_db['FR'];
$FY=$row_db['FY'];
$FB=$row_db['FB'];
$FAVG=$row_db['FAVG'];
$PFR=$row_db['PFR'];
$PFY=$row_db['PFY'];
$PFB=$row_db['PFB'];
$PFAVG=$row_db['PFAVG'];
$R_kw=$row_db['R_kw'];
$Y_kw=$row_db['Y_kw'];
$B_kw=$row_db['B_kw'];
$TOTAL_kW=$row_db['TOTAL_kW'];
$R_kVAr=$row_db['R_kVAr'];
$Y_kVAr=$row_db['Y_kVAr'];
$B_kVAr=$row_db['B_kVAr'];
$TOTAL_kVAr=$row_db['TOTAL_kVAr'];
$kWHr=$row_db['kWHr'];
$Rkva=$row_db['Rkva'];
$Ykva=$row_db['Ykva'];
$Bkva=$row_db['Bkva'];
$TOTAL_kVA=$row_db['TOTAL_kVA'];
$kVArHr=$row_db['kVArHr'];
$Kvahr=$row_db['Kvahr'];
$KWmaxActive=$row_db['KWmaxActive'];
$KWminActive=$row_db['KWminActive'];
$kVarmaxReactive=$row_db['kVarmaxReactive'];
$kVarminReactive=$row_db['kVarminReactive'];
$KVAmax=$row_db['KVAmax'];


if ($SYSTEM_ENERGY_SOURCE==0)
{$SYSTEM_ENERGY_SOURCE="EB";}
if ($SYSTEM_ENERGY_SOURCE==1)
{$SYSTEM_ENERGY_SOURCE="Generator";}
if ($SYSTEM_ENERGY_SOURCE==2)
{$SYSTEM_ENERGY_SOURCE="UPS";}
    $kWHr_ar .= '{ Time: "'.$Bee_timestamp.'", KWHR: '.$kWHr.' },';
	$kVArHr_ar .= '{ Time: "'.$Bee_timestamp.'", KVARHR: '.$kVArHr.' },';
	
   $objPHPExcel->setActiveSheetIndex(0)
   							       
          						->setCellValue('A'.$row, $METER_ID)
                              ->setCellValue('B'.$row, $SYSTEM_ENERGY_SOURCE)
                              ->setCellValue('C'.$row, $Bee_timestamp)
                              ->setCellValue('D'.$row, $VR_PH)
							   ->setCellValue('E'.$row, $VY_PH)
							    ->setCellValue('F'.$row, $VB_PH)
								 ->setCellValue('G'.$row, $VPH_AVG)
								  ->setCellValue('H'.$row, $VR_Y)
								   ->setCellValue('I'.$row, $VY_B)
								    ->setCellValue('J'.$row, $VB_R)
									 ->setCellValue('K'.$row, $VL_AVG)
										->setCellValue('L'.$row, $IR)
										->setCellValue('M'.$row, $IY)
										->setCellValue('N'.$row, $IB)
										->setCellValue('O'.$row, $IN)
										->setCellValue('P'.$row, $IAVG)
										
								  		->setCellValue('Q'.$row, $FR)
									   ->setCellValue('R'.$row, $FY)
									    ->setCellValue('S'.$row, $FB)
										 ->setCellValue('T'.$row, $FAVG)
										  ->setCellValue('U'.$row, $PFR)
										   ->setCellValue('V'.$row, $PFY)
										    ->setCellValue('W'.$row, $PFB)
											 ->setCellValue('X'.$row, $PFAVG)
											  ->setCellValue('Y'.$row, $R_kw)
											   ->setCellValue('Z'.$row, $Y_kw)
											    ->setCellValue('AA'.$row, $B_kw)
												 ->setCellValue('AB'.$row, $TOTAL_kW)
												  ->setCellValue('AC'.$row, $R_kVAr)
												   ->setCellValue('AD'.$row, $Y_kVAr)
												    ->setCellValue('AE'.$row, $B_kVAr)
													 ->setCellValue('AF'.$row, $TOTAL_kVAr)
													  ->setCellValue('AG'.$row, $Rkva)
													   ->setCellValue('AH'.$row, $Ykva)
													    ->setCellValue('AI'.$row, $Bkva)
														 ->setCellValue('AJ'.$row, $TOTAL_kVA)
														  ->setCellValue('AK'.$row, $kWHr)
														   ->setCellValue('AL'.$row, $kVArHr)
														    ->setCellValue('AM'.$row, $KWmaxActive)
															->setCellValue('AN'.$row, $KWminActive)
															->setCellValue('AO'.$row, $kVarmaxReactive)
															->setCellValue('AP'.$row, $kVarminReactive)
															->setCellValue('AQ'.$row, $KVAmax);
$_id='';
$FLexiBee_id='';
$transfer_method='';
$Bee_timestamp='';
$SYSTEM_ENERGY_SOURCE='';
$LENGTH_OF_POCKET='';
$METER_ID='';
$PARAM='';
$VR_PH='';
$VY_PH='';
$VB_PH='';
$VPH_AVG='';
$VR_Y='';
$VY_B='';
$VB_R='';
$VL_AVG='';
$IR='';
$IY='';
$IB='';
$IN='';
$IAVG='';
$FR='';
$FY='';
$FB='';
$FAVG='';
$PFR='';
$PFY='';
$PFB='';
$PFAVG='';
$R_kw='';
$Y_kw='';
$B_kw='';
$TOTAL_kW='';
$R_kVAr='';
$Y_kVAr='';
$B_kVAr='';
$TOTAL_kVAr='';
$kWHr='';
$Rkva='';
$Ykva='';
$Bkva='';
$TOTAL_kVA='';
$kVArHr='';
$Kvahr='';
$KWmaxActive='';
$KWminActive='';
$kVarmaxReactive='';
$kVarminReactive='';
$KVAmax='';   

	$row++;

date_default_timezone_set('Asia/Calcutta');
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

$file_down_name= date('j-F-Y-h-i-s-A').'.xls';

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$file_down_name.'"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('/home/emacsf/public_html/1email_data/'.$file_down_name);
//$objWriter->save('php://output');
//exit;
?>
<?php 
//define the receiver of the email 
$to = 'hidayath@fleximc.com'; 
//define the subject of the email 
$subject = 'Test email with attachment'; 
//create a boundary string. It must be unique 
//so we use the MD5 algorithm to generate a random hash 
$random_hash = md5(date('r', time())); 
//define the headers we want passed. Note that they are separated with \r\n 
$headers = "From: hidayath@fleximc.com\r\nReply-To: hidayath@fleximc.com"; 
//add boundary string and mime type specification 
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\""; 
//read the atachment file contents into a string,
//encode it with MIME base64,
//and split it into smaller chunks
$attachment = chunk_split(base64_encode(file_get_contents('/home/emacsf/public_html/1email_data/'.$file_down_name))); 
//define the body of the message. 
ob_start(); //Turn on output buffering 
?>
<?php echo $random_hash; ?>

<?php 
//copy current buffer contents into $message variable and delete current output buffer 
$message = ob_get_clean(); 
//send the email 
$mail_sent = @mail( $to, $subject, $message, $headers ); 
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
//echo $mail_sent ? "Mail sent" : "Mail failed"; 
?>
