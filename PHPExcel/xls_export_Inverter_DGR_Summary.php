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
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
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
$solar_plant_id=$plant_id=34;

include '/home/swltstawsfleximc/public_html/Source/xconfig.php';
include '/home/swltstawsfleximc/public_html/Source/web/plant/plant_id_details.php';


$solar_plant_name_replace_space = str_replace(" ", "_", $solar_plant_name);

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

 $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


 $objPHPExcel->getActiveSheet()->setShowGridlines(FALSE);

$objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);

  $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

     $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->getActiveSheet()->freezePane('C8');


$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '00FF00'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99CCFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('B3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('B4')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('C1:AZ1')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '8AEEDD'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('A10:AZ10')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '538ED5'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle('C5:D5')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D7E4BC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('C8:D8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D7E4BC'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle('F6:F8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('I6:I8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('L6:L8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('O6:O8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('R6:R8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('U6:U8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('X6:X8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('AA6:AA8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('AD6:AD8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('AG6:AG8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('AJ6:AJ8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('AM6:AM8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('AP6:AP8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('AS6:AS8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('AX6:AX8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle('O5:Q5')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('AA5:AF5')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFC000'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('AV5:AW5')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'C5D9F1'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle('G13:H13')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99FF33'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('J13:K13')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99FF33'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('O13:Q13')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99FF33'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('S13:T13')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99FF33'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('V13:W13')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99FF33'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('Y13:Z13')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99FF33'))))->getAlignment();


$objPHPExcel->getActiveSheet()->getStyle('A10:AZ10')->applyFromArray(array('font' => array('size' => 11,'bold' => true,'color' => array('rgb' => 'FFFF00'))));








$objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true)->setName('Arial Narrow')->setSize(12);

$objPHPExcel->getActiveSheet()->getStyle(1)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize();
$objPHPExcel->getActiveSheet()->getStyle(2)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle(3)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle(4)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle(5)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle(6)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle(7)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);

$objPHPExcel->getActiveSheet()->getStyle(8)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle(9)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle(10)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle(A)->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);




 // $objPHPExcel->getActiveSheet()->getStyle('B4:T4')->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
 // $objPHPExcel->getActiveSheet()->getStyle('A:T')->getFont()->setBold(true)->setSize(10);

// Set document properties
$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
                             ->setLastModifiedBy("Hidayath Shaik")
                             ->setTitle("Daily Generation Report Execl Sheet")
                             ->setSubject("Daily Generation Report Execl Sheet")
                             ->setDescription(" Solar Daily Generation Report Execl Sheet")
                             ->setKeywords(" Solar Daily Generation Report Execl Sheet")
                             ->setCategory(" Solar Daily Generation Report Execl Sheet");
                               $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AR')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AS')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AT')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AU')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AV')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AW')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AX')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AY')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('AZ')->setWidth(12);




$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('B1',date('F/Y'))
->setCellValue('B2',date('d/F/Y'))

->setCellValue('C1','NV-VOGT-10 MW')
->setCellValue('A1','Month :-')
->setCellValue('A2','Date :-')
->setCellValue('A3','DOC:-')
->setCellValue('A4','O&M effective date:-')
->setCellValue('A5','Sr. No.')
->setCellValue('B5','Plant Details')
->setCellValue('C5','AC Capacity in KW')
->setCellValue('D5','DC Capacity in KW')
->setCellValue('E5','Customer/ Site')
->setCellValue('F5','Generation @ Inverter (kWh) ')
->setCellValue('I5','Generation @ 33kV Export')
->setCellValue('L5','33kV Import')
->setCellValue('O5','Generation Per MW AC')
->setCellValue('R5','Equiv Load Shedding Loss @ 33kV')
->setCellValue('U5','GHI')
->setCellValue('X5','Tilt Irradiance')
->setCellValue('AA5','% PR (Compensated for Load Shedding)')
->setCellValue('AD5','% CUF (Compensated for Load Shedding)')
->setCellValue('AG5','% PR ')
->setCellValue('AJ5','% CUF')
->setCellValue('AM5','Plant Availability % ')
->setCellValue('AP5','Grid Availibility %')
->setCellValue('AS5','AC Losses + Day Aux. Consumption')
->setCellValue('AV5','Line Loss SPD to GSS')
->setCellValue('AX5','Load Shedding Minutes')


->setCellValue('F6','Daily')
->setCellValue('G6','This Month-Till Today')
->setCellValue('H6','This Year -Till Today')
->setCellValue('I6','Daily')
->setCellValue('J6','This Month-Till Today')
->setCellValue('K6','This Year -Till Today')
->setCellValue('L6','Daily')
->setCellValue('M6','This Month-Till Today')
->setCellValue('N6','This Year -Till Today')
->setCellValue('O6','Daily')
->setCellValue('P6','This Month-Till Today')
->setCellValue('Q6','This Year -Till Today')
->setCellValue('R6','Daily')
->setCellValue('S6','This Month-Till Today')
->setCellValue('T6','This Year -Till Today')
->setCellValue('U6','Daily')
->setCellValue('V6','This Month-Till Today')
->setCellValue('W6','This Year -Till Today')
->setCellValue('X6','Daily')
->setCellValue('Y6','This Month-Till Today')
->setCellValue('Z6','This Year -Till Today')
->setCellValue('AA6','Daily')
->setCellValue('AB6','This Month-Till Today')
->setCellValue('AC6','This Year -Till Today')
->setCellValue('AD6','Daily')
->setCellValue('AE6','This Month-Till Today')
->setCellValue('AF6','This Year -Till Today')
->setCellValue('AG6','Daily')
->setCellValue('AH6','This Month-Till Today')
->setCellValue('AI6','This Year -Till Today')
->setCellValue('AJ6','Daily')
->setCellValue('AK6','This Month-Till Today')
->setCellValue('AL6','This Year -Till Today')
->setCellValue('AM6','Daily')
->setCellValue('AN6','This Month-Till Today')
->setCellValue('AO6','This Year -Till Today')
->setCellValue('AP6','Daily')
->setCellValue('AQ6','This Month-Till Today')
->setCellValue('AR6','This Year -Till Today')
->setCellValue('AS6','Daily')
->setCellValue('AT6','This Month-Till Today')
->setCellValue('AU6','This Year -Till Today')
->setCellValue('AV6','This Month-Till Today')
->setCellValue('AW6','This Year -Till Today')
->setCellValue('AX6','Daily')
->setCellValue('AY6','This Month-Till Today')
->setCellValue('AZ6','This Year -Till Today')

->setCellValue('A8','1')
->setCellValue('A10','Total')
->setCellValue('F12','Days')
->setCellValue('F13','Dly Avg')
->setCellValue('I12','Days')
->setCellValue('I13','Dly Avg')
->setCellValue('O12','Days')
->setCellValue('O13','Dly Avg')
->setCellValue('R12','Days')
->setCellValue('R13','Dly Avg')
->setCellValue('U12','Days')
->setCellValue('U13','Dly Avg')
->setCellValue('X12','Days')
->setCellValue('X13','Dly Avg')
->setCellValue('F12','Days')
->setCellValue('F13','Dly Avg');

$arr =getdate();
 $count_thisyear_days=$arr['yday']+1;



// ->setCellValue('S4','Daily')
// ->setCellValue('T4','This Month-Till Today');

include '../../OpenDb.php';

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B8','10MW -'. $solar_plant_name);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E8', $solar_plant_name);
$MW=$solar_plant_dc_capacity/1000;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B10', $MW.'MW');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C8', $solar_plant_dc_capacity);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C10', $solar_plant_dc_capacity);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D8', $solar_plant_capacity);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D10', $solar_plant_capacity);


$select_Inverter="SELECT SUM(kwh_today) AS kwh_today,plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily
WHERE DATE(today_date) = DATE(CURRENT_DATE) and plant_id='$plant_id' GROUP BY DATE(today_date) order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
$kwh_today=array();

while($row16=mysqli_fetch_array($rs16))
{
$kwh_today=round($row16['kwh_today'],2);
$COUNT=date('d');

$plant_Inv_down_perc_avg=round($row16['plant_Inv_down_perc_avg'],2);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F8', $kwh_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F10', $kwh_today);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AS8', $plant_Inv_down_perc_avg .'%');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AS10', $plant_Inv_down_perc_avg .'%');



    }



$select_Inverter="SELECT SUM(kwh_today) AS SUM_kwh_today,SUM(plant_Inv_down_perc_avg) AS SUM_plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE) and plant_id='$plant_id' ";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

    $SUM_kwh_today =$row16['SUM_kwh_today'];
    $COUNT=date('d');

    $SUM_plant_Inv_down +=$row16['SUM_plant_Inv_down_perc_avg'];
    $Plant_Inv_availlabilty_loss=round(($SUM_plant_Inv_down_perc_avg/$COUNT),2);

    }
 $COUNT=date('d');


    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G8', round($SUM_kwh_today),2);   
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G10', round($SUM_kwh_today),2);  
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G12', $COUNT); 
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AT8'.$row, $Plant_Inv_availlabilty_loss .'%');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AT10'.$row, $Plant_Inv_availlabilty_loss .'%');

    $ave=round(($SUM_kwh_today/$COUNT),2);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G13', $ave);




 $select_Inverter="SELECT SUM(kwh_today) AS SUM_kwh_today,SUM(plant_Inv_down_perc_avg) AS SUM_plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily
WHERE YEAR(today_date) = YEAR(CURRENT_DATE) and plant_id='$plant_id' ";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

    $SUM_kwh_today +=$row16['SUM_kwh_today'];
    $COUNT=date('d');

    $SUM_plant_Inv_down +=$row16['SUM_plant_Inv_down_perc_avg'];
    $Plant_Inv_availlabilty_loss=round(($SUM_plant_Inv_down_perc_avg/$COUNT),2);

    }
 $COUNT=date('d');

 


 $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H8', round($SUM_kwh_today),2);   
 $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H10', round($SUM_kwh_today),2);  
 $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H12', $count_thisyear_days); 
 $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AU8'.$row, $Plant_Inv_availlabilty_loss .'%');
 $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AU10'.$row, $Plant_Inv_availlabilty_loss .'%');
 $ave=round(($SUM_kwh_today/$count_thisyear_days),2);
 $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H13', $ave);




  $select_Irr="SELECT irradiation,Global_irradiation FROM Flexi_solar_wms_daily
    WHERE DATE(today_date) = DATE(CURRENT_DATE)  and wms_id='1' and plant_id='$plant_id' order by today_date DESC";
    $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
    while($row16=mysqli_fetch_array($rs16))
    {
    $irradiation=round($row16['irradiation'],2);
    $GLOBALirradiation=round($row16['Global_irradiation'],2);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('U8', $irradiation);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('U10', $irradiation);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('X8', $GLOBALirradiation);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('X10', $GLOBALirradiation);
  
        }


    $select_Irr="SELECT SUM(irradiation) AS SUM_IRRIDATION,SUM(Global_irradiation) as Global_irradiation FROM Flexi_solar_wms_daily
    WHERE MONTH(today_date) = MONTH(CURRENT_DATE)  and wms_id='1' and plant_id='$plant_id' order by today_date DESC";
    $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
    while($row16=mysqli_fetch_array($rs16))
    {
        $COUNT=date('d');
        $mONTH_IRRIDATION =round($row16['SUM_IRRIDATION'],2);
         $mONTH_GLOBAL =round($row16['Global_irradiation'],2);
        $ave1=round(($mONTH_IRRIDATION/$COUNT),2);
        $MONTHave1=round(($mONTH_GLOBAL/$COUNT),2);


        }

          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Y8', $mONTH_GLOBAL);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Y10', $mONTH_GLOBAL);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('V12', $COUNT);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('V13', $ave1);

         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('V8', $mONTH_IRRIDATION);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('V10', $mONTH_IRRIDATION);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Y12', $COUNT);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Y13', $MONTHave1);


    $select_Irr="SELECT SUM(irradiation) AS SUM_IRRIDATION,SUM(Global_irradiation) as Global_irradiation FROM Flexi_solar_wms_daily
    WHERE YEAR(today_date) = YEAR(CURRENT_DATE)  and wms_id='1' and plant_id='$plant_id' order by today_date DESC";
    $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
     while($row16=mysqli_fetch_array($rs16))
    {
         $arr =getdate();
         $count_thisyear_days=$arr['yday']+1;
        $SUM_IRRIDATION1 =round($row16['SUM_IRRIDATION'],2);
        $Global_irradiation =round($row16['Global_irradiation'],2);
        $ave2=round(($SUM_IRRIDATION1/$count_thisyear_days),2);
        $globalave2=round(($Global_irradiation/$count_thisyear_days),2);



        }


        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z8', $Global_irradiation);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z10', $Global_irradiation);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('W12', $count_thisyear_days);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('W13', $ave2);

         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('W8', $SUM_IRRIDATION1);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('W10', $SUM_IRRIDATION1);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z12', $count_thisyear_days);
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z13', $globalave2);




 $select_Irr="SELECT SUM(Energy_Export_today) AS Energy_Export_today,SUM(Energy_import_today) as Energy_import_today  ,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily 
    WHERE DATE(today_date) = DATE(CURRENT_DATE) and MFM_Cumulative='1' and plant_id='$plant_id'";
    $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
    while($row16=mysqli_fetch_array($rs16))
    {
        $mfm_today_date=$row16['today_date'];
        $mfm_date_time=date('dMY', strtotime($mfm_today_date));
        $irr_today=$irrarr[$mfm_date_time];

        $Energy_Export_today=round($row16['Energy_Export_today'],2);
        $Energy_import_today=round($row16['Energy_import_today'],2);
        $PR=round($row16['Plant_PR'],2);
        $CUF=round($row16['DC_CUF'],2);
        $COUNT=date('d');
       



        if ($row16['Plant_Inv_availlabilty_loss_perc'] <= 100) {
        $Plant_Inv_availlabilty_loss_perc=abs(round(100 - $row16['Plant_Inv_availlabilty_loss_perc'],2));
        }else{
        $Plant_Inv_availlabilty_loss_perc=0;
        }

        if($row16['Grid_availlabilty_loss_perc'] <= 100) {
        $Grid_availlabilty_loss_perc=abs(round(100 - $row16['Grid_availlabilty_loss_perc'],2));
        }else{
        $Grid_availlabilty_loss_perc=0;
        }   


        $Generation_Per_MW_AC=round(($Energy_Export_today/$solar_plant_dc_capacity),2);

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I8', $Energy_Export_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O8', $Generation_Per_MW_AC);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L8', $Energy_import_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L10', $Energy_import_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AG8', $PR .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AA8', $PR .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AJ8', $CUF .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AD8', $CUF .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AM8', $Plant_Inv_availlabilty_loss_perc .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AP8', $Grid_availlabilty_loss_perc .'%');
        
 

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I10', $Energy_Export_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O10', $Generation_Per_MW_AC);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AG10', $PR .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AA10', $PR .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AA10', $PR .'%');

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AD10', $CUF .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AJ10', $CUF .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AM10', $Plant_Inv_availlabilty_loss_perc .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AP10', $Grid_availlabilty_loss_perc .'%');
         $Energy_Export_today='';
         $Energy_import_today='';
        $PR='';
        $CUF='';
        }



       $select_mfm="SELECT SUM(Energy_Export_today) AS Energy_Export_today,SUM(Energy_import_today) as Energy_import_today,SUM(Plant_PR) as Plant_PR,today_date,SUM(DC_CUF) as DC_CUF,SUM(Plant_Inv_availlabilty_loss_perc) as Plant_Inv_availlabilty_loss,SUM(Grid_availlabilty_loss_perc) as Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily 
    WHERE MONTH(today_date) = MONTH(CURRENT_DATE) and MFM_Cumulative='1' and plant_id='$plant_id'";
    $rs16=mysqli_query($conn2,$select_mfm) or die("error 101".mysqli_error($conn2));
    while($row16=mysqli_fetch_array($rs16))
    {
        $mfm_today_date=$row16['today_date'];
        $mfm_date_time=date('dMY', strtotime($mfm_today_date));
        $irr_today=$irrarr[$mfm_date_time];
         $COUNT=date('d');
        $Energy_Export_today_month=round($row16['Energy_Export_today'],2);
        $Energy_Import_today_month=round($row16['Energy_import_today'],2);

        $PR_month=round($row16['Plant_PR']/$COUNT,2);
        $CUF_month=round($row16['DC_CUF']/$COUNT,2);

         $MONTHLYAVE=round($Energy_Export_today_month/$COUNT,2);
        



        if ($row16['Plant_Inv_availlabilty_loss_perc'] <= 100) {
        $Plant_Inv_availlabilty_loss_perc=abs(round(100 - $row16['Plant_Inv_availlabilty_loss_perc']/$COUNT,2));
        }else{
        $Plant_Inv_availlabilty_loss_perc=0;
        }

        if($row16['Grid_availlabilty_loss_perc'] <= 100) {
        $Grid_availlabilty_loss_perc=abs(round(100 - $row16['Grid_availlabilty_loss_perc']/$COUNT,2));
        }else{
        $Grid_availlabilty_loss_perc=0;
        }   


        $Generation_Per_MW_AC=round(($Energy_Export_today_month/$solar_plant_dc_capacity),2);
        $Generation_Per_MW_AC_AVE=round($Generation_Per_MW_AC/$COUNT,2);

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J8', $Energy_Export_today_month);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J10', $Energy_Export_today_month);

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M8', $Energy_Import_today_month);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M10', $Energy_Import_today_month);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J12', $COUNT);

        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P8', $Generation_Per_MW_AC);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P10', $Generation_Per_MW_AC);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J13', $MONTHLYAVE);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P13', $Generation_Per_MW_AC_AVE);

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P12', $COUNT);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q12', $count_thisyear_days);
       
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AB8',$PR_month .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AB10', $PR_month .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AH8', $PR_month .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AH10', $PR_month .'%');
        
       
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AE8', $CUF_month .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AE10', $CUF_month .'%');
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AK8', $CUF_month .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AK10', $CUF_month .'%');


        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AN8', $Plant_Inv_availlabilty_loss_perc .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AN10', $Plant_Inv_availlabilty_loss_perc .'%');
        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AQ8', $Grid_availlabilty_loss_perc .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AQ10', $Grid_availlabilty_loss_perc .'%');

 }
   

   $select_mfm_YEARLY="SELECT SUM(Energy_Export_today) AS Energy_Export_today,SUM(Energy_import_today) as Energy_import_today,SUM(Plant_PR) as Plant_PR,today_date,SUM(DC_CUF) as DC_CUF,SUM(Plant_Inv_availlabilty_loss_perc) as Plant_Inv_availlabilty_loss,SUM(Grid_availlabilty_loss_perc) as Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily 
    WHERE YEAR(today_date) = YEAR(CURRENT_DATE) and MFM_Cumulative='1' and plant_id='$plant_id'";
    $rs16=mysqli_query($conn2,$select_mfm_YEARLY) or die("error 101".mysqli_error($conn2));
    while($row16=mysqli_fetch_array($rs16))
    {
        $mfm_today_date=$row16['today_date'];
        $mfm_date_time=date('dMY', strtotime($mfm_today_date));
        $irr_today=$irrarr[$mfm_date_time];
        $COUNT=$count_thisyear_days;
        $Energy_Export_today_YEARLY=round($row16['Energy_Export_today'],2);
        $Energy_Import_today_YEARLY=round($row16['Energy_import_today'],2);

        $PR_YEARLY=round($row16['Plant_PR']/$COUNT,2);
        $CUF_YEARLY=round($row16['DC_CUF']/$COUNT,2);
        $YEARLYAVE=round($Energy_Export_today_YEARLY/$COUNT,2);
        



        if ($row16['Plant_Inv_availlabilty_loss_perc'] <= 100) {
        $Plant_Inv_availlabilty_loss_perc1=abs(round(100 - $row16['Plant_Inv_availlabilty_loss_perc']/$COUNT,2));
        }else{
        $Plant_Inv_availlabilty_loss_perc1=0;
        }

        if($row16['Grid_availlabilty_loss_perc'] <= 100) {
        $Grid_availlabilty_loss_perc1=abs(round(100 - $row16['Grid_availlabilty_loss_perc']/$COUNT,2));
        }else{
        $Grid_availlabilty_loss_perc1=0;
        }   


        $Generation_Per_MW_AC1=round(($Energy_Export_today_YEARLY/$solar_plant_dc_capacity),2);

        $Generation_Per_MW_AC1_AVE=round($Generation_Per_MW_AC1/$COUNT,2);

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K8', $Energy_Export_today_YEARLY);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K10', $Energy_Export_today_YEARLY);

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N8', $Energy_Import_today_YEARLY);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N10', $Energy_Import_today_YEARLY);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K12', $COUNT);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K13', $YEARLYAVE);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q13', $Generation_Per_MW_AC1_AVE);
        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q8', $Generation_Per_MW_AC1);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q10', $Generation_Per_MW_AC1);
       
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AC8',$PR_YEARLY .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AC10', $PR_YEARLY .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AI8', $PR_YEARLY .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AI10', $PR_YEARLY .'%');
        
       
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AF8', $CUF_YEARLY .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AF10', $CUF_YEARLY .'%');
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AL8', $CUF_YEARLY .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AL10', $CUF_YEARLY .'%');


        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AO8', $Plant_Inv_availlabilty_loss_perc1 .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AO10', $Plant_Inv_availlabilty_loss_perc1 .'%');
        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AR8', $Grid_availlabilty_loss_perc1 .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AR10', $Grid_availlabilty_loss_perc1 .'%');

 }
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AV8' ,'--');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AV10' ,'--');

    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AW8', '--');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AW10', '--');
    
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AX8', '--');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AX10','--');
    
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AY8', '--');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AY10','--');
    
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AZ8', '--');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('AZ10','--');

    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('R8', 0);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('R10',0);
    
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('S8', 0);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('S10',0);
    
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('T8', 0);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('T10',0); 
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B4','--/--/--');   
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B3',$solar_plant_DOC);         








        
            $objPHPExcel->getActiveSheet()->mergeCells('C1:AZ1');
            $objPHPExcel->getActiveSheet()->mergeCells('A5:A7');
            $objPHPExcel->getActiveSheet()->mergeCells('B5:B7');
            $objPHPExcel->getActiveSheet()->mergeCells('C5:C7');
            $objPHPExcel->getActiveSheet()->mergeCells('D5:D7');
            $objPHPExcel->getActiveSheet()->mergeCells('E5:E7');
            $objPHPExcel->getActiveSheet()->mergeCells('F5:H5');
            $objPHPExcel->getActiveSheet()->mergeCells('I5:K5');
            $objPHPExcel->getActiveSheet()->mergeCells('L5:N5');
            $objPHPExcel->getActiveSheet()->mergeCells('O5:Q5');
            $objPHPExcel->getActiveSheet()->mergeCells('R5:T5');
            $objPHPExcel->getActiveSheet()->mergeCells('U5:W5');
            $objPHPExcel->getActiveSheet()->mergeCells('X5:Z5');
            $objPHPExcel->getActiveSheet()->mergeCells('AA5:AC5');
            $objPHPExcel->getActiveSheet()->mergeCells('AD5:AF5');
            $objPHPExcel->getActiveSheet()->mergeCells('AG5:AI5');
            $objPHPExcel->getActiveSheet()->mergeCells('AJ5:AL5');
            $objPHPExcel->getActiveSheet()->mergeCells('AM5:AO5');
            $objPHPExcel->getActiveSheet()->mergeCells('AP5:AR5');
            $objPHPExcel->getActiveSheet()->mergeCells('AS5:AU5');
            $objPHPExcel->getActiveSheet()->mergeCells('AV5:AW5');
            $objPHPExcel->getActiveSheet()->mergeCells('AX5:AZ5');


            $objPHPExcel->getActiveSheet()->mergeCells('F6:F7');
            $objPHPExcel->getActiveSheet()->mergeCells('G6:G7');
            $objPHPExcel->getActiveSheet()->mergeCells('H6:H7');
            $objPHPExcel->getActiveSheet()->mergeCells('I6:I7');
            $objPHPExcel->getActiveSheet()->mergeCells('J6:J7');
            $objPHPExcel->getActiveSheet()->mergeCells('K6:K7');
            $objPHPExcel->getActiveSheet()->mergeCells('L6:L7');
            $objPHPExcel->getActiveSheet()->mergeCells('M6:M7');
            $objPHPExcel->getActiveSheet()->mergeCells('N6:N7');
            $objPHPExcel->getActiveSheet()->mergeCells('O6:O7');
            $objPHPExcel->getActiveSheet()->mergeCells('P6:P7');
            $objPHPExcel->getActiveSheet()->mergeCells('Q6:Q7');
            $objPHPExcel->getActiveSheet()->mergeCells('R6:R7');
            $objPHPExcel->getActiveSheet()->mergeCells('S6:S7');
            $objPHPExcel->getActiveSheet()->mergeCells('T6:T7');
            $objPHPExcel->getActiveSheet()->mergeCells('U6:U7');
            $objPHPExcel->getActiveSheet()->mergeCells('V6:V7');
            $objPHPExcel->getActiveSheet()->mergeCells('W6:W7');
            $objPHPExcel->getActiveSheet()->mergeCells('X6:X7');
            $objPHPExcel->getActiveSheet()->mergeCells('Y6:Y7');
            $objPHPExcel->getActiveSheet()->mergeCells('Z6:Z7');
            $objPHPExcel->getActiveSheet()->mergeCells('AA6:AA7');
            $objPHPExcel->getActiveSheet()->mergeCells('AB6:AB7');
            $objPHPExcel->getActiveSheet()->mergeCells('AC6:AC7');
            $objPHPExcel->getActiveSheet()->mergeCells('AD6:AD7');
            $objPHPExcel->getActiveSheet()->mergeCells('AE6:AE7');
            $objPHPExcel->getActiveSheet()->mergeCells('AF6:AF7');
            $objPHPExcel->getActiveSheet()->mergeCells('AG6:AG7');
            $objPHPExcel->getActiveSheet()->mergeCells('AH6:AH7');
            $objPHPExcel->getActiveSheet()->mergeCells('AI6:AI7');
            $objPHPExcel->getActiveSheet()->mergeCells('AJ6:AJ7');
            $objPHPExcel->getActiveSheet()->mergeCells('AK6:AK7');
            $objPHPExcel->getActiveSheet()->mergeCells('AL6:AL7');
            $objPHPExcel->getActiveSheet()->mergeCells('AM6:AM7');
            $objPHPExcel->getActiveSheet()->mergeCells('AN6:AN7');
            $objPHPExcel->getActiveSheet()->mergeCells('AO6:AO7');
            $objPHPExcel->getActiveSheet()->mergeCells('AP6:AP7');
            $objPHPExcel->getActiveSheet()->mergeCells('AQ6:AQ7');
            $objPHPExcel->getActiveSheet()->mergeCells('AR6:AR7');
            $objPHPExcel->getActiveSheet()->mergeCells('AS6:AS7');
            $objPHPExcel->getActiveSheet()->mergeCells('AT6:AT7');
            $objPHPExcel->getActiveSheet()->mergeCells('AU6:AU7');
            $objPHPExcel->getActiveSheet()->mergeCells('AV6:AV7');
            $objPHPExcel->getActiveSheet()->mergeCells('AW6:AW7');
            $objPHPExcel->getActiveSheet()->mergeCells('AX6:AX7');
            $objPHPExcel->getActiveSheet()->mergeCells('AY6:AY7');
            $objPHPExcel->getActiveSheet()->mergeCells('AZ6:AZ7');




            $objPHPExcel->getActiveSheet()->mergeCells('A8:A9');
            $objPHPExcel->getActiveSheet()->mergeCells('B8:B9');
            $objPHPExcel->getActiveSheet()->mergeCells('C8:C9');
            $objPHPExcel->getActiveSheet()->mergeCells('D8:D9');
            $objPHPExcel->getActiveSheet()->mergeCells('E8:E9');
            $objPHPExcel->getActiveSheet()->mergeCells('F8:F9');
            $objPHPExcel->getActiveSheet()->mergeCells('G8:G9');
            $objPHPExcel->getActiveSheet()->mergeCells('H8:H9');
            $objPHPExcel->getActiveSheet()->mergeCells('I8:I9');
            $objPHPExcel->getActiveSheet()->mergeCells('J8:J9');
            $objPHPExcel->getActiveSheet()->mergeCells('K8:K9');
            $objPHPExcel->getActiveSheet()->mergeCells('L8:L9');
            $objPHPExcel->getActiveSheet()->mergeCells('M8:M9');
            $objPHPExcel->getActiveSheet()->mergeCells('N8:N9');
            $objPHPExcel->getActiveSheet()->mergeCells('O8:O9');
            $objPHPExcel->getActiveSheet()->mergeCells('P8:P9');
            $objPHPExcel->getActiveSheet()->mergeCells('Q8:Q9');
            $objPHPExcel->getActiveSheet()->mergeCells('R8:R9');
            $objPHPExcel->getActiveSheet()->mergeCells('S8:S9');
            $objPHPExcel->getActiveSheet()->mergeCells('T8:T9');
            $objPHPExcel->getActiveSheet()->mergeCells('U8:U9');
            $objPHPExcel->getActiveSheet()->mergeCells('V8:V9');
            $objPHPExcel->getActiveSheet()->mergeCells('W8:W9');
            $objPHPExcel->getActiveSheet()->mergeCells('X8:X9');
            $objPHPExcel->getActiveSheet()->mergeCells('Y8:Y9');
            $objPHPExcel->getActiveSheet()->mergeCells('Z8:Z9');
            $objPHPExcel->getActiveSheet()->mergeCells('AA8:AA9');
            $objPHPExcel->getActiveSheet()->mergeCells('AB8:AB9');
            $objPHPExcel->getActiveSheet()->mergeCells('AC8:AC9');
            $objPHPExcel->getActiveSheet()->mergeCells('AD8:AD9');
            $objPHPExcel->getActiveSheet()->mergeCells('AE8:AE9');
            $objPHPExcel->getActiveSheet()->mergeCells('AF8:AF9');
            $objPHPExcel->getActiveSheet()->mergeCells('AG8:AG9');
            $objPHPExcel->getActiveSheet()->mergeCells('AH8:AH9');
            $objPHPExcel->getActiveSheet()->mergeCells('AI8:AI9');
            $objPHPExcel->getActiveSheet()->mergeCells('AJ8:AJ9');
            $objPHPExcel->getActiveSheet()->mergeCells('AK8:AK9');
            $objPHPExcel->getActiveSheet()->mergeCells('AL8:AL9');
            $objPHPExcel->getActiveSheet()->mergeCells('AM8:AM9');
            $objPHPExcel->getActiveSheet()->mergeCells('AN8:AN9');
            $objPHPExcel->getActiveSheet()->mergeCells('AO8:AO9');
            $objPHPExcel->getActiveSheet()->mergeCells('AP8:AP9');
            $objPHPExcel->getActiveSheet()->mergeCells('AQ8:AQ9');
            $objPHPExcel->getActiveSheet()->mergeCells('AR8:AR9');
            $objPHPExcel->getActiveSheet()->mergeCells('AS8:AS9');
            $objPHPExcel->getActiveSheet()->mergeCells('AT8:AT9');
            $objPHPExcel->getActiveSheet()->mergeCells('AU8:AU9');
            $objPHPExcel->getActiveSheet()->mergeCells('AV8:AV9');
            $objPHPExcel->getActiveSheet()->mergeCells('AW8:AW9');
            $objPHPExcel->getActiveSheet()->mergeCells('AX8:AX9');
            $objPHPExcel->getActiveSheet()->mergeCells('AY8:AY9');
            $objPHPExcel->getActiveSheet()->mergeCells('AZ8:AZ9');


            $objPHPExcel->getActiveSheet()->mergeCells('A10:A11');
            $objPHPExcel->getActiveSheet()->mergeCells('B10:B11');
            $objPHPExcel->getActiveSheet()->mergeCells('C10:C11');
            $objPHPExcel->getActiveSheet()->mergeCells('D10:D11');
            $objPHPExcel->getActiveSheet()->mergeCells('E10:E11');
            $objPHPExcel->getActiveSheet()->mergeCells('F10:F11');
            $objPHPExcel->getActiveSheet()->mergeCells('G10:G11');
            $objPHPExcel->getActiveSheet()->mergeCells('H10:H11');
            $objPHPExcel->getActiveSheet()->mergeCells('I10:I11');
            $objPHPExcel->getActiveSheet()->mergeCells('J10:J11');
            $objPHPExcel->getActiveSheet()->mergeCells('K10:K11');
            $objPHPExcel->getActiveSheet()->mergeCells('L10:L11');
            $objPHPExcel->getActiveSheet()->mergeCells('M10:M11');
            $objPHPExcel->getActiveSheet()->mergeCells('N10:N11');
            $objPHPExcel->getActiveSheet()->mergeCells('O10:O11');
            $objPHPExcel->getActiveSheet()->mergeCells('P10:P11');
            $objPHPExcel->getActiveSheet()->mergeCells('Q10:Q11');
            $objPHPExcel->getActiveSheet()->mergeCells('R10:R11');
            $objPHPExcel->getActiveSheet()->mergeCells('S10:S11');
            $objPHPExcel->getActiveSheet()->mergeCells('T10:T11');
            $objPHPExcel->getActiveSheet()->mergeCells('U10:U11');
            $objPHPExcel->getActiveSheet()->mergeCells('V10:V11');
            $objPHPExcel->getActiveSheet()->mergeCells('W10:W11');
            $objPHPExcel->getActiveSheet()->mergeCells('X10:X11');
            $objPHPExcel->getActiveSheet()->mergeCells('Y10:Y11');
            $objPHPExcel->getActiveSheet()->mergeCells('Z10:Z11');
            $objPHPExcel->getActiveSheet()->mergeCells('AA10:AA11');
            $objPHPExcel->getActiveSheet()->mergeCells('AB10:AB11');
            $objPHPExcel->getActiveSheet()->mergeCells('AC10:AC11');
            $objPHPExcel->getActiveSheet()->mergeCells('AD10:AD11');
            $objPHPExcel->getActiveSheet()->mergeCells('AE10:AE11');
            $objPHPExcel->getActiveSheet()->mergeCells('AF10:AF11');
            $objPHPExcel->getActiveSheet()->mergeCells('AG10:AG11');
            $objPHPExcel->getActiveSheet()->mergeCells('AH10:AH11');
            $objPHPExcel->getActiveSheet()->mergeCells('AI10:AI11');
            $objPHPExcel->getActiveSheet()->mergeCells('AJ10:AJ11');
            $objPHPExcel->getActiveSheet()->mergeCells('AK10:AK11');
            $objPHPExcel->getActiveSheet()->mergeCells('AL10:AL11');
            $objPHPExcel->getActiveSheet()->mergeCells('AM10:AM11');
            $objPHPExcel->getActiveSheet()->mergeCells('AN10:AN11');
            $objPHPExcel->getActiveSheet()->mergeCells('AO10:AO11');
            $objPHPExcel->getActiveSheet()->mergeCells('AP10:AP11');
            $objPHPExcel->getActiveSheet()->mergeCells('AQ10:AQ11');
            $objPHPExcel->getActiveSheet()->mergeCells('AR10:AR11');
            $objPHPExcel->getActiveSheet()->mergeCells('AS10:AS11');
            $objPHPExcel->getActiveSheet()->mergeCells('AT10:AT11');
            $objPHPExcel->getActiveSheet()->mergeCells('AU10:AU11');
            $objPHPExcel->getActiveSheet()->mergeCells('AV10:AV11');
            $objPHPExcel->getActiveSheet()->mergeCells('AW10:AW11');
            $objPHPExcel->getActiveSheet()->mergeCells('AX10:AX11');
            $objPHPExcel->getActiveSheet()->mergeCells('AY10:AY11');
            $objPHPExcel->getActiveSheet()->mergeCells('AZ10:AZ11');









            $objPHPExcel->getActiveSheet()->mergeCells('C2:AZ2');
            $objPHPExcel->getActiveSheet()->mergeCells('C3:AZ3');
            $objPHPExcel->getActiveSheet()->mergeCells('C4:AZ4');


$objPHPExcel->getActiveSheet()->getStyle("A1:B11")->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle("C5:AZ11")->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle("F12:K13")->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle("O12:Z13")->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));



           








            // $objPHPExcel->getActiveSheet()->setTitle(date('F-T'));









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


