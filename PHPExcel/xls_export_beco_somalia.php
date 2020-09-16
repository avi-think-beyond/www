<?php
date_default_timezone_set('Africa/Nairobi');
$now_date_time=date("Y-m-d H:i:s");
$now_date_only=date("Y-m-d");
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


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Flexi-ReMACS")
							 ->setLastModifiedBy("FlexiMC Solutions PVT Ltd")
							 ->setTitle("Office 2007 XLSX for Solon Halo Energy generation data")
							 ->setSubject("Office 2007 XLSX Solon Halo Energy generation data")
							 ->setDescription("This document for Solon Halo Energy generation data.")
							 ->setKeywords("Solon Halo Energy generation data")
							 ->setCategory("Energy generation data");


// Add some data
$row = 1;
$objPHPExcel->setActiveSheetIndex(0)
								->setCellValue('A'.$row, 'Date')
                              ->setCellValue('B'.$row, 'Inverter 1 (KWh)')
                              ->setCellValue('C'.$row, 'Inverter 2 (KWh)')
								->setCellValue('D'.$row, 'Total Energy (kWh)')
								->setCellValue('E'.$row, 'irradiation (kWh/m2)')
								->setCellValue('F'.$row, 'Avg Module 1 Temperature °C')
								->setCellValue('G'.$row, 'Avg Module 2 Temperature °C')
								->setCellValue('H'.$row, 'Room Temperature °C')
								->setCellValue('I'.$row, 'MFM - Enery Export Today (KWh)')
								->setCellValue('J'.$row, 'MFM - Enery Import Today (KWh)');
														    
$row++;
// Miscellaneous glyphs, UTF-8

include '../../OpenDb.php';

$select_Inverter="SELECT kwh_today ,kwh_till_date, Time_of_use_today, today_date FROM Flexi_solar_inverters_daily 
WHERE (today_date between DATE_FORMAT('$now_date_time', '%Y-%m-01') AND '$now_date_time')  and FB_ID='SM01' and Inverter_id='1'  
and FB_ID='SM01' GROUP BY DATE(today_date) order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];$Time_of_use_today=round($row16['Time_of_use_today'],2);
$server_date_time=date('d-M-Y', strtotime($today_date));

$SOLAR_IRRADIATION	=round($row16['IRRADIATION'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $server_date_time)
								->setCellValue('B'.$row, $kwh_today);
																
$query_downtime_date=date('Y-m-d', strtotime($server_date_time));
$SOLAR_IRRADIATION='';
$Time_of_use_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 2;

$select_Inverter="SELECT kwh_today ,kwh_till_date, Time_of_use_today, today_date FROM Flexi_solar_inverters_daily 
WHERE (today_date between DATE_FORMAT('$now_date_time', '%Y-%m-01') AND '$now_date_time')  and FB_ID='SM01' and Inverter_id='2'  
and FB_ID='SM01' GROUP BY DATE(today_date) order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];$Time_of_use_today=round($row16['Time_of_use_today'],2);
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, $kwh_today);
$query_downtime_date=date('Y-m-d', strtotime($server_date_time));
$kwh_today='';
$Time_of_use_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 2;

$select_Inverter="SELECT SUM(kwh_today) AS ENERGY_Generated_today,kwh_till_date, Time_of_use_today, today_date FROM Flexi_solar_inverters_daily 
WHERE (today_date between DATE_FORMAT('$now_date_time', '%Y-%m-01') AND '$now_date_time')  and FB_ID='SM01' and Inverter_id IN (1,2)  GROUP BY DATE(today_date) order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{


$ENERGY_Generated_today=round($row16['ENERGY_Generated_today'],2);
$today_date=$row16['today_date'];$Time_of_use_today=round($row16['Time_of_use_today'],2);
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, $ENERGY_Generated_today);
$ENERGY_Generated_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 2;
$select_Irr="SELECT irradiation,module1_tmp_AVG,module2_tmp_AVG,room_temperature_AVG,today_date FROM Flexi_solar_wms_daily 
WHERE (today_date between DATE_FORMAT('$now_date_time', '%Y-%m-01') AND '$now_date_time') and wms_id='1' and FB_ID='SM01' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$irradiation=round($row16['irradiation'],2);
$module1_tmp_AVG=round($row16['module1_tmp_AVG'],2);
$module2_tmp_AVG=round($row16['module2_tmp_AVG'],2);
$room_temperature_AVG=$row16['room_temperature_AVG'];
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$row, $irradiation);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$row, $module1_tmp_AVG);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row, $module2_tmp_AVG);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, $room_temperature_AVG);

$server_date_time='';
$Meter_id='';
$kwh_today='';
$irradiation='';
$module1_tmp_AVG='';
$module2_tmp_AVG='';
$room_temperature_AVG='';
$row++;
	}
$row = 2;

$select_Irr="SELECT Energy_Export_today,Energy_import_today,today_date FROM Flexi_solar_MFM_daily 
WHERE (today_date between DATE_FORMAT('$now_date_time', '%Y-%m-01') AND '$now_date_time') and M_id='1' and FB_ID='SM01' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$Energy_Export_today=round($row16['Energy_Export_today']*1000,2)	;
$Energy_import_today=round($row16['Energy_import_today']*1000,2);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row, $Energy_import_today);
$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle(date('F-Y'));


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

$file_down_name= 'BECO_DailyReport'.date('j-F-Y').'.xls';

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
$objWriter->save('/home2/becofleximc/public_html/zemail_data/'.$file_down_name);
$objWriter->save('php://output');?>