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
if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once 'Classes/PHPExcel.php';

// require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';
$solar_plant_id=$plant_id=43;

include '/home/swltstawsfleximc/public_html/Source/xconfig.php';
include '/home/swltstawsfleximc/public_html/Source/web/plant/plant_id_details.php'; 
$solar_plant_name_replace_space = str_replace(" ", "_", $solar_plant_name);

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
 $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setSize(20);

 $objPHPExcel->getActiveSheet()->getStyle('A2:L2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'E6B9B8'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('M2:P2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('Q2:T2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'E4AD7B'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('A2:T2')->getFont()->setBold(true)->setSize(11);
 $objPHPExcel->getActiveSheet()->getStyle('A:T')->getFont()->setBold(true)->setSize(10);
 $objPHPExcel->getActiveSheet()->getStyle('A:Z')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);




// Set document properties
$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
							 ->setLastModifiedBy("Hidayath Shaik")
							 ->setTitle("Daily Generation Report Execl Sheet")
							 ->setSubject("Daily Generation Report Execl Sheet")
							 ->setDescription(" Solar Daily Generation Report Execl Sheet")
							 ->setKeywords(" Solar Daily Generation Report Execl Sheet")
							 ->setCategory(" Solar Daily Generation Report Execl Sheet");
// $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(35);
// $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(35);







// Add some data
//$row = 1;
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1',date("l jS \of F Y").' ENERGY PRODUCTION')
										->setCellValue('A2', 'Date');

include '../../OpenDb.php';
$plant_id=43;
$alpa=['B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ','BA','BB','BC','BD','BE','BF','BF','BG','BH','BI','BJ','BK','BL','BM','BN','BO','BP','BQ','BR','BS','BT','BU','BV','BW','BX','BY','BZ','CA','CB','CC','CD','CE','CF','CF','CG','CH','CI','CJ','CK','CL','CM','CN','CO','CP','CQ','CR','CS','CT','CU','CV','CW','CX','CY','CZ','DA','DB','DC','DD','DE','DF','DF','DG','DH','DI','DJ','DK','DL','DM','DN','DO','DP','DQ','DR','DS','DT','DU','DV','DW','DX','DY','DZ','EA','EB','EC','ED','EE','EF','EF','EG','EH','EI','EJ','EK','EL','EM','EN','EO','EP','EQ','ER','ES','ET','EU','EV','EW','EX','EY','EZ','FA','FB','FC','FD','FE','FF','FF','FG','FH','FI','FJ','FK','FL','FM','FN','FO','FP','FQ','FR','FS','FT','FU','FV','FW','FX','FY','FZ','GA','GB','GC','GD','GE','GF','GF','GG','GH','GI','GJ','GK','GL','GM','GN','GO','GP','GQ','GR','GS','GT','GU','GV','GW','GX','GY','GZ','HA','HB','HC','HD','HE','HF','HF','HG','HH','HI','HJ','HK','HL','HM','HN','HO','HP','HQ','HR','HS','HT','HU','HV','HW','HX','HY','HZ','IA','IB','IC','ID','IE','IF','IF','IG','IH','II','IJ','IK','IL','IM','IN','IO','IP','IQ','IR','IS','IT','IU','IV','IW','IX','IY','IZ','JA','JB','JC','JD','JE','JF','JF','JG','JH','JI','JJ','JK','JL','JM','JN','JO','JP','JQ','JR','JS','JT','JU','JV','JW','JX','JY','JZ','KA','KB','KC','KD','KE','KF','KF','KG','KH','KI','KJ','KK','KL','KM','KN','KO','KP','KQ','KR','KS','KT','KU','KV','KW','KX','KY','KZ','LA','LB','LC','LD','LE','LF','LF','LG','LH','LI','LJ','LK','LL','LM','LN','LO','LP','LQ','LR','LS','LT','LU','LV','LW','LX','LY','LZ','MA','MB','MC','MD','ME','MF','MF','MG','MH','MI','MJ','MK','ML','MM','MN','MO','MP','MQ','MR','MS','MT','MU','MV','MW','MX','MY','MZ','NA','NB','NC','ND','NE','NF','NF','NG','NH','NI','NJ','NK','NL','NM','NN','NO','NP','NQ','NR','NS','NT','NU','NV','NW','NX','NY','NZ','OA','OB','OC','OD','OE','OF','OF','OG','OH','OI','OJ','OK','OL','OM','ON','OO','OP','OQ','OR','OS','OT','OU','OV','OW','OX','OY','OZ','PA','PB','PC','PD','PE','PF','PF','PG','PH','PI','PJ','PK','PL','PM','PN','PO','PP','PQ','PR','PS','PT','PU','PV','PW','PX','PY','PZ','QA','QB','QC','QD','QE','QF','QF','QG','QH','QI','QJ','QK','QL','QM','QN','QO','QP','QQ','QR','QS','QT','QU','QV','QW','QX','QY','QZ','RA','RB','RC','RD','RE','RF','RF','RG','RH','RI','RJ','RK','RL','RM','RN','RO','RP','RQ','RR','RS','RT','RU','RV','RW','RX','RY','RZ','SA','SB','SC','SD','SE','SF','SF','SG','SH','SI','SJ','SK','SL','SM','SN','SO','SP','SQ','SR','SS','ST','SU','SV','SW','SX','SY'];

$select_Inverter="SELECT * from Flexi_solar_inverter_list where plant_id='$plant_id' GROUP BY inverter_id";
$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
$kwh_today=array();
$inv_cnt = 0;
while($row16=mysqli_fetch_array($rs16))
{
       $Inverter_id[$inv_cnt]=$row16['inverter_id'];
       $inverter_name=$row16['inverter_name'];
       $inverter_name1[$inv_cnt]=$row16['inverter_name'];
       $inverter_name_month .=$row16['inverter_name'];
       // $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$inv_cnt].''.$row, $inverter_name);
       // $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$inv_cnt])->setWidth(15);


       $inv_cnt++;







}
$row = 2;
for ($i=0; $i <=536 ; $i++) { 
    // echo "$alpa[$i]$row, $inverter_name";
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$i].'2', $inverter_name);

       $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$i])->setWidth(15);
}




// $row=3;


// for ($i=1; $i <=537 ; $i++) { 
// $cnn=0;

// $select_Invert="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
// YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='$i' order by today_date DESC";
// $rs16=mysqli_query($conn2,$select_Invert) or die("error 101".mysqli_error($conn2));
// while($row16=mysqli_fetch_array($rs16))
// {


// $kwh_today=round($row16['kwh_today'],2);

// $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$cnn].$row, $kwh_today);
// $server_date_time='';
// $Meter_id='';
// $kwh_today='';
//     $row++;
//     }
//     $cnn++;

// $row='3';
// }




          
							  
							 //      ->setCellValue('L2', 'Total (KWh)')
								// ->setCellValue('M2'.$row, 'OG MFM - Enery Export (KWh)')
								// ->setCellValue('N2'.$row, 'OG MFM - Enery Import (KWh)')
								// ->setCellValue('O2'.$row, 'OG MFM - Enery Export Till date (KWh)')
								// ->setCellValue('P2'.$row, 'OG MFM - Enery Import Till date (KWh)')
                               
								// ->setCellValue('Q2'.$row, 'Irradiation today [GHI] (kWh/m2)')
								// ->setCellValue('R2'.$row, 'Irradiation today [DNI](kWh/m2)')
								// ->setCellValue('S2'.$row, 'Specific Yield (kWh/kWp)')
								// ->setCellValue('T2'.$row, 'Performance ratio (PR)');
								// ->setCellValue('J2', 'Block_G_MFM - Energy Export (KWh)')
								// ->setCellValue('K2', 'Block_G_MFM - Energy Import (KWh)')
								// ->setCellValue('L2', 'Block_G_MFM - Energy Export Till date (KWh)')
								// ->setCellValue('M2', 'Block_G_MFM - Energy Import Till date (KWh)')
								// ->setCellValue('N2', 'Block_K_MFM - Energy Export2 (KWh)')
								// ->setCellValue('O2', 'Block_K_MFM - Energy Import2 (KWh)')
								// ->setCellValue('P2', 'Block_K_MFM - Energy Export Till date2 (KWh)')
								// ->setCellValue('Q2', 'Block_K_MFM - Energy Import Till date2 (KWh)')
								// ->setCellValue('R2', 'Specific Yield (kWh/kWp)')
								// ->setCellValue('S2', 'Performance ratio (PR)')
							    /* ->setCellValue('P'.$row, 'Inverter 5 (kWh)')
								->setCellValue('Q'.$row, 'Inverter 1 (KWh)')
                              ->setCellValue('R'.$row, 'Inverter 2 (KWh)')
                              ->setCellValue('S'.$row, 'Inverter 3 (KWh)')
							   ->setCellValue('T'.$row, 'Inverter 4 (KWh)')
							    ->setCellValue('U'.$row, 'Inverter 5 (kWh)');*/

//$row++;
// Miscellaneous glyphs, UTF-8
// include 'db/OpenDb.php';

// $row=3;



// $select_Invert="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
// YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='1' order by today_date DESC";

// $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
// while($row16=mysqli_fetch_array($rs16))
// {

// $_id=$row16['id'];
// $Inverter_id=$row16['Inverter_id'];
// $kwh_today=round($row16['kwh_today'],2);
// $today_date=$row16['today_date'];
// $server_date_time=date('d-M-Y', strtotime($today_date));
// $query_wms_date=date('Y-m-d H', strtotime($server_date_time));
// //$SOLAR_IRRADIATION	=round($row16['IRRADIATION'],2);

// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $kwh_today);
// $server_date_time='';
// $Meter_id='';
// $kwh_today='';
// 	$row++;
// 	}









// $row = 3;


// $select_Inverter="SELECT SUM(kwh_today) AS ENERGY_Generated_today,kwh_till_date, Time_of_use_today, today_date FROM Flexi_solar_inverters_daily
// WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())  and plant_id='$plant_id' GROUP BY DATE(today_date) order by today_date DESC";

// $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
// while($row16=mysqli_fetch_array($rs16))
// {


// $ENERGY_Generated_today=round($row16['ENERGY_Generated_today'],2);
// $today_date=$row16['today_date'];$Time_of_use_today=round($row16['Time_of_use_today'],2);
// $server_date_time=date('d-M-Y', strtotime($today_date));
// $query_wms_date=date('Y-m-d H', strtotime($server_date_time));

// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$row, $ENERGY_Generated_today);
// $server_date_time='';
// $Meter_id='';
// $kwh_today='';
// 	$row++;
// 	}
// 	$row = 3;
// 	$select_Irr="SELECT irradiation,Global_irradiation,today_date FROM Flexi_solar_wms_daily
// 	WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE()) and wms_id='1' and plant_id='$plant_id' order by today_date DESC";
// 	$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
// 	while($row16=mysqli_fetch_array($rs16))
// 	{
// 	$irr_today_date=$row16['today_date'];
// 	$irr_date_time=date('dMY', strtotime($irr_today_date));
// 	 $irradiation=round($row16['irradiation'],2);
// 	$irradiation_tilt1=round($row16['Global_irradiation'],2);
// 	 $irrarr[$irr_date_time]=$irradiation;
// 		$irrarr1[$irr_date_time]=$irradiation_tilt1;

// 	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$row, $irradiation);
// 	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$row, $irradiation_tilt1);
// 	$server_date_time='';
// 	$Meter_id='';
// 	$kwh_today='';
// 	 $irradiation='';
// 	$irradiation_tilt1='';
// 	$module1_tmp_AVG='';
// 	$module2_tmp_AVG='';
// 	$room_temperature_AVG='';
// 	$row++;
// 		}
	

// $row = 3;
// //print_r($irrarr);
// $select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
// WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='2' and plant_id='$plant_id' order by today_date DESC";
// $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
// while($row16=mysqli_fetch_array($rs16))
// {
// $mfm_today_date=$row16['today_date'];
// $mfm_date_time=date('dMY', strtotime($mfm_today_date));
//  $irr_today=$irrarr[$mfm_date_time];

// $Energy_Export_today=round($row16['Energy_Export_today'],2);
// $Energy_import_today=round($row16['Energy_import_today'],2);
// $Energy_Export_total=round($row16['Energy_Export_total'],2);
// $Energy_import_total=round($row16['Energy_import_total'],2);
// // $solar_plant_dc_capacity=5600;
// $specific_yield = round(($Energy_Export_today/$solar_plant_dc_capacity),2);
// if($irr_today!=0){
// // $PR=round(($specific_yield/$irr_today)*100);
//  $PR=round(($Energy_Export_today/($irr_today*$solar_plant_dc_capacity))*100);
// }
// else {
// $PR=0;
// }
// // echo"mfm_today_date=====".$mfm_today_date."<br>";
// // echo"irri_today=====".$irr_today."<br>";
// // echo"Energy_Export_today=====".$Energy_Export_today."<br>";
// // echo"pr========" .$PR."<br>";
// // echo "solar_plant_capacity_kw========".$solar_plant_dc_capacity."<br>";

// $server_date_time=date('d-M-Y', strtotime($mfm_today_date));
// //$SOLAR_IRRADIATION	=round($row16['IRRADIATION'],2);
// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $server_date_time);
// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$row, $Energy_Export_today);
// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$row, $Energy_import_today);
// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$row, $Energy_Export_total);
// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$row, $Energy_import_total);
// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$row, $specific_yield);
// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$row, $PR);
// $Energy_Export_today='';
// $Energy_import_today='';
// $server_date_time='';
// $Meter_id='';
// $kwh_today='';
// 	$row++;
// 	}


 // $row = 3;
//print_r($irrarr);
/*$select_Irr="SELECT SUM(Energy_Export_today) as sum_EE,today_date FROM Flexi_solar_MFM_daily 
WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())  and MFM_Cumulative='1' and plant_id='$plant_id' group by DATE(today_date) order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['sum_EE'],2);
//$solar_plant_dc_capacity=5600;
$specific_yield = round(($Energy_Export_today/$solar_plant_dc_capacity),2);
if($irr_today!=0){
//$PR=round(($specific_yield/$irr_today)*100);
$PR=round(($Energy_Export_today/($irr_today*$solar_plant_dc_capacity))*100);
}
else {
$PR=0;  
}
$server_date_time=date('d-M-Y', strtotime($mfm_today_date));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$row, $specific_yield);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$row, $PR);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }*/
/*
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='14' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 3;
*/
// Rename worksheet





$objPHPExcel->getActiveSheet()->mergeCells('A1:T1');
$objPHPExcel->getActiveSheet()->setTitle(date('F-Y'));


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


$file_down_name= date('j-F-Y').'_'.$solar_plant_name_replace_space.'_report.xls';

// $file_down_name= date('j-F-Y').'_report.xls';
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
$objWriter->save('/home/swltstawsfleximc/public_html/zemail_data/'.$file_down_name);
$objWriter->save('php://output');?>
