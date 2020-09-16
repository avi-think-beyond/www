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
    $objPHPExcel->getActiveSheet()->freezePane('B3');


$objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);


$objPHPExcel->getActiveSheet()->getStyle('1:2')->getFont()->setBold(true)->setName('Trebuchet MS')->setSize(10);

$objPHPExcel->getActiveSheet()->setAutoFilter('A2:L2');

$objPHPExcel->getActiveSheet()->getStyle('B1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

 $objPHPExcel->getActiveSheet()->setShowGridlines(FALSE);


$objPHPExcel->getActiveSheet()->getStyle('A2:L2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();

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

$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
                             ->setLastModifiedBy("Hidayath Shaik")
                             ->setTitle("Daily Generation Report Execl Sheet")
                             ->setSubject("Daily Generation Report Execl Sheet")
                             ->setDescription(" Solar Daily Generation Report Execl Sheet")
                             ->setKeywords(" Solar Daily Generation Report Execl Sheet")
                             ->setCategory(" Solar Daily Generation Report Execl Sheet");


                             for ($i=0; $i<count($alpa); $i++) { 
                                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$i])->setWidth(20);
                               }


                                $objPHPExcel->getActiveSheet()->getColumnDimension(K)->setWidth(50);
                                $objPHPExcel->getActiveSheet()->getColumnDimension(L)->setWidth(75);
$objPHPExcel->getActiveSheet()->getColumnDimension(A)->setWidth(8);

$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1','Breakdo ')
->setCellValue('B1','wn Details')
->setCellValue('A2','Sr. No.')
->setCellValue('B2','Date')
->setCellValue('C2','Equipment Name/Id')
->setCellValue('D2','Availability Impact')
->setCellValue('E2','Error Code')
->setCellValue('F2','Error Full Text')
->setCellValue('G2','From (Time)')
->setCellValue('H2','To (Time)')
->setCellValue('I2','Total Breakdown Hrs.(hh:mm)')
->setCellValue('J2','Total Breakdown Hrs.')
->setCellValue('K2','Breakdown Details')
->setCellValue('L2','Action Taken');


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
 $cnt_da=1;
 $select_Inverter_monthly123="SELECT today_date,kwh_today ,Inverter_id,Inverter_start_time,Inverter_end_time FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY DATE(today_date),plant_id ORDER BY plant_id,today_date" ;
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                $Month=$row161['today_date'];
                $Month_date[$cnt_da]=date('F-Y', strtotime($Month));
                $Month_date_time=date('d/m/y', strtotime($Month)); 
                
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $cnt_da);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $Month_date_time);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$row, '--');

                
                $row++;
                $Month_date_time='';
                $cnt_da++;
               }


$lastrow=$row-1;













  
































$objPHPExcel->getActiveSheet()->getStyle('A2'.':'.'L'.$lastrow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle('B3:C'.$lastrow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D7E4BC'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle('E3:E'.$lastrow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D7E4BC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('G3:H'.$lastrow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D7E4BC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('K3:L'.$lastrow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D7E4BC'))))->getAlignment();







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


