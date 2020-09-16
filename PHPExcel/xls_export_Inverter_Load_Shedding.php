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



    $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

     $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);

    $objPHPExcel->getActiveSheet()->freezePane('E3');

$objPHPExcel->getActiveSheet()->setAutoFilter('A2:R2');

$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(30);

$objPHPExcel->getActiveSheet()->getStyle('1:3')->getFont()->setBold(true)->setName('Calibri')->setSize(11);

$objPHPExcel->getActiveSheet()->getStyle('D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

 $objPHPExcel->getActiveSheet()->setShowGridlines(FALSE);



$objPHPExcel->getActiveSheet()->getStyle('N1:R1')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'CCCCFF'))))->getAlignment();

function createColumnsArray($end_column, $first_letters = '')
{
  $columns = array();
  $length = strlen($end_column);
  $letters = range('A', 'Z');
  foreach ($letters as $letter) {
  $column = $first_letters . $letter;
  $columns[] = $column;
  if ($column == $end_column)
     return $columns;
     }
  foreach ($columns as $column) {
   if (!in_array($end_column, $columns) && strlen($column) < $length) {
          $new_columns = createColumnsArray($end_column, $column);
          $columns = array_merge($columns, $new_columns);
         }
         }
        return $columns;
      }

$alpa=createColumnsArray('ZZ');


// Set document properties
$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
                             ->setLastModifiedBy("Hidayath Shaik")
                             ->setTitle("Daily Generation Report Execl Sheet")
                             ->setSubject("Daily Generation Report Execl Sheet")
                             ->setDescription(" Solar Daily Generation Report Execl Sheet")
                             ->setKeywords(" Solar Daily Generation Report Execl Sheet")
                             ->setCategory(" Solar Daily Generation Report Execl Sheet");


                              for ($i=0; $i<count($alpa); $i++) { 
                                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$i])->setWidth(15);
                               }
                              
                               $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(18);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(18);
                              
                               $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(25);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
                               
                               $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(25);
                              






$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1','Date')
->setCellValue('C1','Feeder (10 MW)')
->setCellValue('D1','Plant details')
->setCellValue('E1','Block')
->setCellValue('F1','Inverter')
->setCellValue('G1','Details of Load under Shut Down')
->setCellValue('G2','Module Type')
->setCellValue('H2','DC Capacity in KW')
->setCellValue('I1','Shut Down Duration')
->setCellValue('I2','From')
->setCellValue('J2','To')
->setCellValue('K2','Duration (in min)')
->setCellValue('L1','Reason')
->setCellValue('M2','Reference Inverter Details for Generation Loss  Calculation')
->setCellValue('N1','Calculation of Generation loss due to load shedding')
->setCellValue('N2','Type of Module/Total DC Capacity')
->setCellValue('O2','Starting Generation')
->setCellValue('P2','End Generation')
->setCellValue('Q2','Total Generation')
->setCellValue('R2','Approx Generation Loss due to Load Shedding');



include '../../OpenDb.php';
$plant_id=34;

$currentmonth=date('m');
$Current_year=date('Y');
$Current_year2DIGITS=date('y');
$Current_day=date('d');
$PREVIOUSYR=$Current_year-1;
$PREVIOUSYR2DIGITS=$Current_year2DIGITS-1;

 $row=3;
 $Month_date=array();
 $cnt_da=0;
 $select_Inverter_monthly123="SELECT today_date,kwh_today ,Inverter_id,Inverter_start_time,Inverter_end_time FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY DATE(today_date),plant_id ORDER BY plant_id,today_date" ;
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                $Month=$row161['today_date'];
                $Month_date[$cnt_da]=date('F-Y', strtotime($Month));
                $Month_date_time=date('d/m/y', strtotime($Month)); 
                
                
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $Month_date_time);
                
                $row++;
                $Month_date_time='';
                $cnt_da++;
               }

$arow=$row-1;


















  









$objPHPExcel->getActiveSheet()->getStyle('A1'.':'.'R'.$arow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        ));


$objPHPExcel->getActiveSheet()->getStyle('A3'.':'.'J'.$arow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99CCFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('L3'.':'.'P'.$arow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99CCFF'))))->getAlignment();
























 $objPHPExcel->getActiveSheet()->mergeCells('C1:C2');
 $objPHPExcel->getActiveSheet()->mergeCells('D1:D2');

 $objPHPExcel->getActiveSheet()->mergeCells('E1:E2');
 $objPHPExcel->getActiveSheet()->mergeCells('F1:F2');
  $objPHPExcel->getActiveSheet()->mergeCells('G1:H1');
 $objPHPExcel->getActiveSheet()->mergeCells('I1:K1');

 
 $objPHPExcel->getActiveSheet()->mergeCells('L1:L2');
 $objPHPExcel->getActiveSheet()->mergeCells('N1:R1'); 
 // $objPHPExcel->getActiveSheet()->mergeCells('H2:AT2');
 //  $objPHPExcel->getActiveSheet()->mergeCells('G2:G4');

//  // $objPHPExcel->getActiveSheet()->mergeCells('H3:J3');
//   $objPHPExcel->getActiveSheet()->mergeCells('K3:M3');
// $objPHPExcel->getActiveSheet()->mergeCells('N3:P3');
// $objPHPExcel->getActiveSheet()->mergeCells('Q3:S3');
// $objPHPExcel->getActiveSheet()->mergeCells('T3:V3');
// $objPHPExcel->getActiveSheet()->mergeCells('W3:Y3');
// $objPHPExcel->getActiveSheet()->mergeCells('Z3:AB3');
// $objPHPExcel->getActiveSheet()->mergeCells('AC3:AE3');
// $objPHPExcel->getActiveSheet()->mergeCells('AF3:AH3');
// $objPHPExcel->getActiveSheet()->mergeCells('AI3:AK3');
// $objPHPExcel->getActiveSheet()->mergeCells('AL3:AN3');
// $objPHPExcel->getActiveSheet()->mergeCells('AO3:AQ3');
// $objPHPExcel->getActiveSheet()->mergeCells('AR3:AT3');

// $objPHPExcel->getActiveSheet()->mergeCells('AV2:AV4');
// $objPHPExcel->getActiveSheet()->mergeCells('AW3:AY3');
// $objPHPExcel->getActiveSheet()->mergeCells('AZ3:BB3');
// $objPHPExcel->getActiveSheet()->mergeCells('BC3:BE3');
// $objPHPExcel->getActiveSheet()->mergeCells('AW2:BE2');






 // $objPHPExcel->getActiveSheet()->mergeCells('W2:W3');


 // $objPHPExcel->getActiveSheet()->mergeCells('Y2:Y3');
 // $objPHPExcel->getActiveSheet()->mergeCells('AA2:AN2');
 // $objPHPExcel->getActiveSheet()->mergeCells('AP2:AV2');


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


