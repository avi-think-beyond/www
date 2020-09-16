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
$solar_plant_id=$plant_id=11;

include '/home/swltstawsfleximc/public_html/Source/xconfig.php';
include '/home/swltstawsfleximc/public_html/Source/web/plant/plant_id_details.php'; 
$solar_plant_name_replace_space = str_replace(" ", "_", $solar_plant_name);

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
 $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setSize(20);

 

 $objPHPExcel->getActiveSheet()->getStyle('A2:T2')->getFont()->setBold(true)->setSize(11);
 $objPHPExcel->getActiveSheet()->getStyle()->getFont()->setBold(true)->setSize(10);
 $objPHPExcel->getActiveSheet()->getStyle('A:T')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


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
                                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$i])->setWidth(35);
                                }



$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1',date("l jS \of F Y").' ENERGY PRODUCTION')
										->setCellValue('A2', 'Date');
                
include '../../OpenDb.php';
$currentmonth=date('m');
$Current_year=date('Y');
$Current_day=date('d');


$row=2;
$select_Inverter="SELECT * from Flexi_solar_inverter_list where plant_id='$solar_plant_id' ";
$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
$kwh_today=array();
$Inverter_id=array();

$inv_cnt = 1;
while($row16=mysqli_fetch_array($rs16))
{
       $Inverter_id[$inv_cnt]=$row16['inverter_id'];
       $inverter_name=$row16['inverter_name'];
       $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$inv_cnt].$row , $inverter_name.'(KWh)');
       $inv_cnt++;
}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$inv_cnt].$row ,'Total (KWh)');
$inventercount=$inv_cnt-1;
$total_rotator= $inv_cnt;
$mfmhead=$inv_cnt+1;
$fircol=$alpa[$inv_cnt];
$row=3;
$rowcount=1;
$inv_daily = 1;
 $select_Inverter_daily="SELECT kwh_today, today_date,Inverter_id from Flexi_solar_inverters_daily where MONTH(today_date) = MONTH(CURDATE()) and YEAR(today_date) =YEAR(CURDATE()) and plant_id='$solar_plant_id' order by Inverter_id,DATE(today_date) DESC";

           $rs17=mysqli_query($conn2,$select_Inverter_daily) or die("error 101".mysqli_error($conn2));
           while($row11=mysqli_fetch_array($rs17))
            {
                $today_date=$row11['today_date'];
                $date_time=date('d-M-Y', strtotime($today_date));
                
                $kwh_today=$row11['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row ,$date_time);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$inv_daily].$row ,$kwh_today);
                
                if ($rowcount==$Current_day) {
                $inv_daily++;
                $row=2;
                $rowcount=0;

             }
                $row++;
                $rowcount++;
            }


$row = 3;
$select_Inverter_total="SELECT SUM(kwh_today) AS ENERGY_Generated_today,kwh_till_date, Time_of_use_today, today_date FROM Flexi_solar_inverters_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())  and plant_id='$plant_id' GROUP BY DATE(today_date) order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter_total) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$ENERGY_Generated_today=round($row16['ENERGY_Generated_today'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$total_rotator].$row, $ENERGY_Generated_today);
$ENERGY_Generated_today='';
    $row++;
 }

$Mfm_name=array();
$mfmlistcnt=0;
$select_mfm_LIST="SELECT * FROM `Flexi_solar_MFM_list` WHERE plant_id=$solar_plant_id AND MFM_Cumulative = '1' ORDER BY plant_id DESC";
$rs16=mysqli_query($conn2,$select_mfm_LIST) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
       
       $Mfm_name[$mfmlistcnt]=$row16['M_name'];
       $mfmlistcnt++;
}
$mfmexport=$mfmhead;
$mfmimport=$mfmhead+1;
$mfmextil=$mfmhead+2;
$mfmimtil=$mfmhead+3;


$mfmexport1=$mfmhead;
$mfmimport1=$mfmhead+1;
$mfmextil1=$mfmhead+2;
$mfmimtil1=$mfmhead+3;

$mfmcol=$alpa[$mfmexport].'2';

for ($ij=0; $ij<$mfmlistcnt ;$ij++) { 
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmexport].'2', $Mfm_name[$ij].' -Enery Export (KWh)');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmimport].'2', $Mfm_name[$ij].' -Enery Import (KWh)');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmextil].'2', $Mfm_name[$ij].' - Enery Export Till date (KWh)');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmimtil].'2', $Mfm_name[$ij].'  -Enery Import Till date (KWh)');

if ($mfmexport=$mfmexport) {
    $mfmexport=$mfmexport+4;
}

if ($mfmimport=$mfmimport) {
    $mfmimport=$mfmimport+4;
}

if ($mfmextil=$mfmextil) {
    $mfmextil=$mfmextil+4;
}

if ($mfmimtil=$mfmimtil) {
    $mfmimtil=$mfmimtil+4;
}
    
}

$irrghi=$mfmimtil-3;
$irrdni=$mfmimtil-2;
$sy=$mfmimtil-1;
$pr=$mfmimtil;
$irrstarcol=$irrghi;

$mfmendcol=$alpa[$mfmimtil-4].'2';

$M_id=array();
$Midcount=0;
$select_MFM_daily="SELECT M_id FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and MFM_Cumulative=1 and plant_id='$plant_id'group by M_id   ";
$rs16=mysqli_query($conn2,$select_MFM_daily) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{


$M_id[$Midcount]=$row16['M_id'];
$Midcount++;

    }

$row = 3;
$rowa=1;
$rowb=1;
$rowc=1;
$rowd=1;


for ($mid=0; $mid<$mfmlistcnt; $mid++) { 
  $select_mfmdaily1="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id=$M_id[$mid] and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_mfmdaily1) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
$irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmexport1].$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmimport1].$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmextil1].$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmimtil1].$row, $Energy_import_total);
if ($rowa==$Current_day) {
    $mfmexport1=$mfmexport1+4;
    $row=2;
    $rowa=0;
}
if ($rowb==$Current_day) {
    $mfmimport1=$mfmimport1+4;
    
    $rowb=0;
}
if ($rowc==$Current_day) {
    $mfmextil1=$mfmextil1+4;
    
    $rowc=0;
}
if ($rowd==$Current_day) {
    $mfmimtil1=$mfmimtil1+4;
    
    $rowd=0;
}


$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
$row++;
$rowa++;
$rowb++;
$rowc++;
$rowd++;
}

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$irrghi].'2','Irradiation today [GHI] (kWh/m2');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$irrdni].'2', 'Irradiation today [DNI](kWh/m2)');

$row = 3;
    $select_Irr="SELECT irradiation,irradiation_tilt1,Global_irradiation,today_date FROM Flexi_solar_wms_daily
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

     $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$irrghi].$row, $irradiation);
     $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$irrdni].$row, $irradiation_tilt1);
    
     $irradiation='';
     $irradiation_tilt1='';
    
    $row++;
        }

     $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$sy].'2','Specific Yield (kWh/kWp)');
     $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pr].'2', 'Performance ratio (PR)');

$row=3;
$select_Irr12="SELECT SUM(Energy_Export_today) as sum_EE,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())  and MFM_Cumulative='1' and plant_id='$plant_id' group by DATE(today_date) order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr12) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
     $mfm_today_date=$row16['today_date'];
     $mfm_date_time=date('dMY', strtotime($mfm_today_date));
     $irr_today=$irrarr[$mfm_date_time];
     $Energy_Export_today1=round($row16['sum_EE'],2);
     $specific_yield = round(($Energy_Export_today1/$solar_plant_dc_capacity),2);
     if($irr_today!=0){
     $PR=round(($Energy_Export_today1/($irr_today*$solar_plant_dc_capacity))*100);
     }else{
        $PR=0;
     }
     $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$sy].$row, $specific_yield);
     $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pr].$row, $PR);
     $specific_yield='';
     $PR='';
     $row++;
}
     $lastrow=$row;
     $prenddcol=$alpa[$pr];
     $objPHPExcel->getActiveSheet()->mergeCells('A1'.':'.$alpa[$pr].'1');
     $objPHPExcel->getActiveSheet()->setTitle(date('F-T'));

     $objPHPExcel->getActiveSheet()->getStyle('A2'.':'.$fircol.'2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'E6B9B8'))))->getAlignment();
     $objPHPExcel->getActiveSheet()->getStyle($mfmcol.':'.$mfmendcol)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
     $objPHPExcel->getActiveSheet()->getStyle($alpa[$irrstarcol].'2'.':'.$prenddcol.'2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'E4AD7B'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
     $objPHPExcel->getActiveSheet()->getStyle('A3:'.$prenddcol.$lastrow)->getFont()->setBold(true)->setSize(10);
     $objPHPExcel->setActiveSheetIndex(0);
     $file_down_name= date('j-F-Y').'_'.$solar_plant_name_replace_space.'_report.xls';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$file_down_name.'"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('/home/swltstawsfleximc/public_html/zemail_data/'.$file_down_name);
$objWriter->save('php://output');?>
