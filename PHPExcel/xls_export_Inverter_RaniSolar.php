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
$solar_plant_id=$plant_id=29;

include '/home/swltstawsfleximc/public_html/Source/xconfig.php';
include '/home/swltstawsfleximc/public_html/Source/web/plant/plant_id_details.php'; 
$solar_plant_name_replace_space = str_replace(" ", "_", $solar_plant_name);

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
 $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setSize(20);

 $objPHPExcel->getActiveSheet()->getStyle('A2:AF2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'E6B9B8'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('AG2:AN2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('AO2:AR2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'E4AD7B'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('A2:AR2')->getFont()->setBold(true)->setSize(11);
 $objPHPExcel->getActiveSheet()->getStyle('A:AR')->getFont()->setBold(true)->setSize(10);
 $objPHPExcel->getActiveSheet()->getStyle('A:AR')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);




// Set document properties
$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
							 ->setLastModifiedBy("Hidayath Shaik")
							 ->setTitle("Daily Generation Report Execl Sheet")
							 ->setSubject("Daily Generation Report Execl Sheet")
							 ->setDescription(" Solar Daily Generation Report Execl Sheet")
							 ->setKeywords(" Solar Daily Generation Report Execl Sheet")
							 ->setCategory(" Solar Daily Generation Report Execl Sheet");
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AR')->setWidth(35);








// Add some data
//$row = 1;
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1',date("l jS \of F Y").' ENERGY PRODUCTION')
										->setCellValue('A2', 'Date')
                ->setCellValue('B2', 'INV_1MW_A_1 (KWh)')
                ->setCellValue('C2', 'INV_1MW_B_1 (KWh)')
                ->setCellValue('D2', 'BINV_1MW_C_1 (KWh)')
                ->setCellValue('E2', 'INV_1MW_E_1 (KWh)')
                ->setCellValue('F2', 'BINV_1MW_F_1 (KWh)')
                ->setCellValue('G2', 'BINV_1MW_G_1 (KWh)')
                ->setCellValue('H2', 'INV_3MW_A_1 (KWh)')
                ->setCellValue('I2', 'INV_3MW_A_2 (KWh)')
                ->setCellValue('J2', 'INV_3MW_A_3 (KWh)')
                ->setCellValue('K2', 'INV_3MW_B_1 (KWh)')
                ->setCellValue('L2', 'INV_3MW_B_2 (KWh)')
                ->setCellValue('M2', 'INV_3MW_B_3 (KWh)')
                ->setCellValue('N2', 'INV_5MW_A_1 (KWh)')
                ->setCellValue('O2', 'INV_5MW_A_2 (KWh)')
                ->setCellValue('P2', 'INV_5MW_A_3 (KWh)')
                ->setCellValue('Q2', 'INV_5MW_A_4 (KWh)')
                ->setCellValue('R2', 'INV_5MW_A_5 (KWh)')
                ->setCellValue('S2', 'INV_5MW_B_1 (KWh)')
                ->setCellValue('T2', 'INV_5MW_B_2 (KWh)')
                ->setCellValue('U2', 'INV_5MW_B_3 (KWh)')
                ->setCellValue('V2', 'INV_5MW_B_4 (KWh)')
                ->setCellValue('W2', 'INV_5MW_B_5 (KWh)')
                ->setCellValue('X2', 'INV_8MW_A_1 (KWh)')
                ->setCellValue('Y2', 'INV_8MW_A_2 (KWh)')
                ->setCellValue('Z2', 'BINV_8MW_A_3 (KWh)')
                ->setCellValue('AA2', 'INV_8MW_A_4 (KWh)')
                ->setCellValue('AB2', 'INV_8MW_B_1 (KWh)')
                ->setCellValue('AC2', 'INV_8MW_B_2 (KWh)')
                ->setCellValue('AD2', 'INV_8MW_B_3(KWh)')
                ->setCellValue('AE2', 'INV_8MW_B_4 (KWh)')
         
                
							  
							      ->setCellValue('AF2', 'Total (KWh)')
								->setCellValue('AG2'.$row, 'MFM_33kV_MCR19 - Enery Export (KWh)')
								->setCellValue('AH2'.$row, 'MFM_33kV_MCR19 - Enery Import (KWh)')
								->setCellValue('AI2'.$row, 'MFM_33kV_MCR19 - Enery Export Till date (KWh)')
								->setCellValue('AJ2'.$row, 'MFM_33kV_MCR19 - Enery Import Till date (KWh)')
                                ->setCellValue('AK2'.$row, 'MFM_33kV_MCR11 - Enery Export (KWh)')
                                ->setCellValue('AL2'.$row, 'MFM_33kV_MCR11 - Enery Import (KWh)')
                                ->setCellValue('AM2'.$row, 'MFM_33kV_MCR11 - Enery Export Till date (KWh)')
                                ->setCellValue('AN2'.$row, 'MFM_33kV_MCR11 - Enery Import Till date (KWh)')

                       
								->setCellValue('AO2'.$row, 'Irradiation today [GHI] (kWh/m2)')
								->setCellValue('AP2'.$row, 'Irradiation today [DNI](kWh/m2)')
								->setCellValue('AQ2'.$row, 'Specific Yield (kWh/kWp)')
								->setCellValue('AR2'.$row, 'Performance ratio (PR)');
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
include '../../OpenDb.php';
$plant_id=29;
$row=3;
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='1' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));
//$SOLAR_IRRADIATION	=round($row16['IRRADIATION'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
	$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='2' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='3' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='4' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='5' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='6' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='7' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='8' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='9' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='10' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='11' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='12' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='13' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

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

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='15' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='16' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='17' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='18' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='19' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='20' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='21' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='22' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='23' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('X'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='24' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Y'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='25' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='26' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AA'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='27' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AB'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='28' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AC'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='29' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AD'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='30' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AE'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }




$row = 3;


$select_Inverter="SELECT SUM(kwh_today) AS ENERGY_Generated_today,kwh_till_date, Time_of_use_today, today_date FROM Flexi_solar_inverters_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())  and plant_id='$plant_id' GROUP BY DATE(today_date) order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{


$ENERGY_Generated_today=round($row16['ENERGY_Generated_today'],2);
$today_date=$row16['today_date'];$Time_of_use_today=round($row16['Time_of_use_today'],2);
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AF'.$row, $ENERGY_Generated_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
	$row = 3;
	$select_Irr="SELECT irradiation,Global_irradiation,today_date FROM Flexi_solar_wms_daily
	WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE()) and wms_id='1' and plant_id='$plant_id' order by today_date DESC";
	$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
	while($row16=mysqli_fetch_array($rs16))
	{
	$irr_today_date=$row16['today_date'];
	$irr_date_time=date('dMY', strtotime($irr_today_date));
	 $irradiation=round($row16['irradiation'],2);
	$irradiation_tilt1=round($row16['Global_irradiation'],2);
	 $irrarr[$irr_date_time]=$irradiation;
		$irrarr1[$irr_date_time]=$irradiation_tilt1;

	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AO'.$row, $irradiation);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AP'.$row, $irradiation_tilt1);
	$server_date_time='';
	$Meter_id='';
	$kwh_today='';
	 $irradiation='';
	$irradiation_tilt1='';
	$module1_tmp_AVG='';
	$module2_tmp_AVG='';
	$room_temperature_AVG='';
	$row++;
		}
	

$row = 3;
//print_r($irrarr);
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='2' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);

$server_date_time=date('d-M-Y', strtotime($mfm_today_date));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $server_date_time);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AG'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AH'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AI'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AJ'.$row, $Energy_import_total);



$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}

     $row = 3;
//print_r($irrarr);
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily 
WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())  and M_id='3' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AK'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AL'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AM'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AN'.$row, $Energy_import_total);
$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  




 $row = 3;
//print_r($irrarr);
$select_Irr="SELECT SUM(Energy_Export_today) as sum_EE,today_date FROM Flexi_solar_MFM_daily 
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

 $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AQ'.$row, $specific_yield);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AR'.$row, $PR);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

// Rename worksheet
$objPHPExcel->getActiveSheet()->mergeCells('A1:AR1');
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
