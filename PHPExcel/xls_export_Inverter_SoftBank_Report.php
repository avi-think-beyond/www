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
// $solar_plant_id=$plant_id=3;

// include '/home/swltstawsfleximc/public_html/Source/xconfig.php';
// include '/home/swltstawsfleximc/public_html/Source/web/plant/plant_id_details.php';


$solar_plant_name_replace_space = "SoftBank"; //str_replace(" ", "_", $solar_plant_name);

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
 $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setSize(20);

 $objPHPExcel->getActiveSheet()->getStyle('A2:D2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'E6B9B8'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('E2:G2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('H2:J2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'E4AD7B'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('K2:M2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D1DE35'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('N2:P2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'GREEN'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('Q2:S2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '62FAF6'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('T2:V2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FABFD3'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('A2:V2')->getFont()->setBold(true)->setSize(11);
 $objPHPExcel->getActiveSheet()->getStyle('A:V')->getFont()->setBold(true)->setSize(10);
 $objPHPExcel->getActiveSheet()->getStyle('A:V')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);




// Set document properties
$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
                             ->setLastModifiedBy("Hidayath Shaik")
                             ->setTitle("Daily Generation Report Execl Sheet")
                             ->setSubject("Daily Generation Report Execl Sheet")
                             ->setDescription(" Solar Daily Generation Report Execl Sheet")
                             ->setKeywords(" Solar Daily Generation Report Execl Sheet")
                             ->setCategory(" Solar Daily Generation Report Execl Sheet");
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(15);


// Add some data
//$row = 1;
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1',' SOFTBANK REPORT')


                ->setCellValue('C2', 'SBE Kurnool Plot 15')
                ->setCellValue('F2', 'SBE Kurnool Plot 14')
                ->setCellValue('I2', 'SBE Kurnool Plot 16')
                ->setCellValue('L2', 'SBE Kurnool Plot 17')
                ->setCellValue('O2', 'SBE Kurnool Plot 18')
                ->setCellValue('R2', 'SBE Kurnool Plot 19')
                ->setCellValue('U2', 'SBE Kurnool Plot 20')


				->setCellValue('A3', 'Time')
                ->setCellValue('B3', 'Power_TVM-1')
                ->setCellValue('C3', 'Power_TVM-2')
                ->setCellValue('D3', 'Availability')

                ->setCellValue('E3', 'Power_TVM-3')
                ->setCellValue('F3', 'Power_TVM-4')
                ->setCellValue('G3', 'Availability')

                ->setCellValue('H3', 'Power_TVM-5')
                ->setCellValue('I3', 'Power_TVM-6')
                ->setCellValue('J3', 'Availability')

                ->setCellValue('K3', 'Power_TVM-7')
                ->setCellValue('L3', 'Power_TVM-8')
                ->setCellValue('M3', 'Availability')

                ->setCellValue('N3', 'Power_TVM-9')
                ->setCellValue('O3', 'Power_TVM-10')
                ->setCellValue('P3', 'Availability')

                ->setCellValue('Q3', 'Power_TVM-11')
                ->setCellValue('R3', 'Power_TVM-12')
                ->setCellValue('S3', 'Availability')

                ->setCellValue('T3', 'Power_TVM-13')
                ->setCellValue('U3', 'Power_TVM-14')
                ->setCellValue('V3', 'Availability');
include '../../OpenDb.php';

	date_default_timezone_set('Asia/Kolkata');
$time=['00:00','00:15','00:30','00:45','01:00','01:15','01:30','01:45','02:00','02:15','02:30','02:45','03:00','03:15','03:30','03:45','04:00','04:15','04:30','04:45','05:00','05:15','05:30','05:45','06:00','06:15','06:30','06:45','07:00','07:15','07:30','07:45','08:00','08:15','08:30','08:45','09:00','09:15','09:30','09:45','10:00','10:15','10:30','10:45','11:00','11:15','11:30','11:45','12:00','12:15','12:30','12:45','13:00','13:15','13:30','13:45','14:00','14:15','14:30','14:45','15:00','15:15','15:30','15:45','16:00','16:15','16:30','16:45','17:00','17:15','17:30','17:45','18:00','18:15','18:30','18:45','19:00','19:15','19:30','19:45','20:00','20:15','20:30','20:45','21:00','21:15','21:30','21:45','22:00','22:15','22:30','22:45','23:00','23:15','23:30','23:45'];

$row=4;
$curr_time_cnt =  0;
for($k=0;$k<count($time);$k++){
  if(date('H:i') <= $time[$k]){
        break;
    }else{
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$k]);
        $row++;
        $curr_time_cnt++;
    }

}


$row=4;
$i1 = 0;
$temp = 0;
 $select_Inverter="SELECT AC_Power,hour,Inverters_Availability FROM Flexi_solar_MFM_15minutes where plant_id = 1 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =1";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));


if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}

if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;
    // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('b'.$row, $kwh_today);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, $Inverters_Availability);
    $i1++;
    $row++;
}

}

//echo $i1."==".$time[$i1]."---".$query_wms_date."<br>";

if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
    $date_times = $query_wms_date;
}else{
    $kwh_today=0;
    $Inverters_Availability=0;
    $date_times= $time[$i1];
}

// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $date_times);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('b'.$row, $kwh_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, $Inverters_Availability);
$server_date_time='';
$kwh_today='';
$Inverters_Availability='';
$row++;
$i1++;

}


if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('b'.$row, $kwh_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, $Inverters_Availability);
        $i1++;
        $row++;
    }
}




$row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 1 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =2";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));

if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}


if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('c'.$row, $kwh_today);
 $i1++;
 $row++;
}

}



//echo $i1."==".$time[$i1]."---".$query_wms_date."<br>";

if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, $kwh_today);
$i1++;
    $row++;
    }

    if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, $kwh_today);

        $i1++;
        $row++;
    }
}





 $row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 3 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =1";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));

if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}

if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$row, $kwh_today);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row, $Inverters_Availability);
    $i1++;
    $row++;
}

}



//echo $i1."==".$time[$i1]."---".$query_wms_date."<br>";

if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$row, $kwh_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row, $Inverters_Availability);
$server_date_time='';
$kwh_today='';
$Inverters_Availability='';
$row++;
$i1++;

}

if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$row, $kwh_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row, $Inverters_Availability);
        $i1++;
        $row++;
    }
}



$row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 3 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =2";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));

if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}

if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$row, $kwh_today);
$i1++;
$row++;
}

}



//echo $i1."==".$time[$i1]."---".$query_wms_date."<br>";

if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$row, $kwh_today);
$i1++;
    $row++;
    }


    if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$row, $kwh_today);
        $i1++;
        $row++;
    }
}


    $row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 4 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =1";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));

if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}

if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, $kwh_today);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row, $Inverters_Availability);
    $i1++;
    $row++;
}

}


if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, $kwh_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row, $Inverters_Availability);
$server_date_time='';
$kwh_today='';
$Inverters_Availability='';
$row++;
$i1++;

}

if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, $kwh_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row, $Inverters_Availability);
        $i1++;
        $row++;
    }
}



$row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 4 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =2";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));

if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}


if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row, $kwh_today);
$i1++;
$row++;
}

}


if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row, $kwh_today);
$i1++;
    $row++;
    }

if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row, $kwh_today);
        $i1++;
        $row++;
    }
}



 $row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 5 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =1";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));

if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}


if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$row, $kwh_today);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$row, $Inverters_Availability);
    $i1++;
    $row++;
}

}


if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$row, $kwh_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$row, $Inverters_Availability);
$server_date_time='';
$kwh_today='';
$Inverters_Availability='';
$row++;
$i1++;

}
if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$row, $kwh_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$row, $Inverters_Availability);
        $i1++;
        $row++;
    }
}



$row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 5 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =2";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));


if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}



if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$row, $kwh_today);
$i1++;
$row++;
}

}


if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$row, $kwh_today);
$i1++;
    $row++;
    }

if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$row, $kwh_today);
        $i1++;
        $row++;
    }
}



    $row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 6 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =1";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));


if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}

if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$row, $kwh_today);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$row, $Inverters_Availability);
    $i1++;
    $row++;
}

}


if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$row, $kwh_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$row, $Inverters_Availability);
$server_date_time='';
$kwh_today='';
$Inverters_Availability='';
$row++;
$i1++;

}
if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$row, $kwh_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$row, $Inverters_Availability);
        $i1++;
        $row++;
    }
}



$row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 6 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =2";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));

if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}


if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$row, $kwh_today);
$i1++;
$row++;
}

}


if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$row, $kwh_today);
$i1++;
    $row++;
    }


    if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$row, $kwh_today);
        $i1++;
        $row++;
    }
}



 $row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 7 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =1";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));



if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}


if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$row, $kwh_today);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$row, $Inverters_Availability);
    $i1++;
    $row++;
}

}


if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$row, $kwh_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$row, $Inverters_Availability);
$server_date_time='';
$kwh_today='';
$Inverters_Availability='';
$row++;
$i1++;

}
if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$row, $kwh_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$row, $Inverters_Availability);
        $i1++;
        $row++;
    }
}


$row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 7 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =2";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));


if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}

if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$row, $kwh_today);
$i1++;
$row++;
}

}


if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$row, $kwh_today);
$i1++;
    $row++;
    }

    if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$row, $kwh_today);
        $i1++;
        $row++;
    }
}

 $row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 8 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =1";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));


if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}


if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$row, $kwh_today);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.$row, $Inverters_Availability);
    $i1++;
    $row++;
}

}


if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$row, $kwh_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.$row, $Inverters_Availability);
$server_date_time='';
$kwh_today='';
$Inverters_Availability='';
$row++;
$i1++;

}

if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$row, $kwh_today);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.$row, $Inverters_Availability);
        $i1++;
        $row++;
    }
}



$row=4;
$i1 = 0;
$temp = 0;
$select_Inverter="SELECT AC_Power,hour,Inverters_Availability from Flexi_solar_MFM_15minutes where plant_id = 8 and DATE(today_date) = CURDATE() and MFM_Cumulative =1 and M_id =2";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$today_date=$row16['hour'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('H:i', strtotime($today_date));
$query_wms_hour=date('H', strtotime($today_date));


if($time[$i1] == $query_wms_date){
    $temp = 1;
}else{
    $temp = 0;
}


if($temp == 0){
while($query_wms_date != $time[$i1]){
    $kwh_today=0;
    $Inverters_Availability=0;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$row, $kwh_today);
$i1++;
$row++;
}

}


if ($time[$i1] == $query_wms_date) {
    $kwh_today=round($row16['AC_Power']/1000,2);
    $Inverters_Availability=$row16['Inverters_Availability'];
}else{
    $kwh_today=0;
    $Inverters_Availability=0;

}

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$row, $kwh_today);
$i1++;
    $row++;
    }

    if($i1 != $curr_time_cnt){
    while($i1 != $curr_time_cnt){
        $kwh_today=0;
        $Inverters_Availability=0;
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('a'.$row, $time[$i1]);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$row, $kwh_today);
        $i1++;
        $row++;
    }
}



$objPHPExcel->getActiveSheet()->mergeCells('A1:V1');
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
<?php
$file_down_name= date('j-F-Y').'_SoftBank_report.xls';
$file = '/home/swltstawsfleximc/public_html/zemail_data/'.$file_down_name;
$remote_file = '/SOLAR/AP/GE_SBE/scada/'.$file_down_name;
$ftp_address='wind3.50hertz.in';
$ftp_user_name='sbe';
$ftp_user_pass='sbe@#12pw';?>
<?php
$ftp_conn = ftp_connect($ftp_address) or print("Could not connect to $ftp_address");
$login = ftp_login($ftp_conn, $ftp_user_name, $ftp_user_pass);

// turn passive mode on
ftp_pasv($ftp_conn, true);

// $file = "localfile.txt";

// upload file
if (ftp_put($ftp_conn, $remote_file, $file, FTP_BINARY))
  {
  echo "Successfully uploaded $file.";
  }
else
  {
  echo "Error uploading $file.";
  }
  $res = ftp_size($ftp_conn, $remote_file);

if ($res != -1) {
    echo "size of $remote_file is $res bytes";
    echo "orgianl File Size :".filesize($file);
} else {
    echo "couldn't get the size";
}

// print_r($ftp_conn);
// close connection
ftp_close($ftp_conn);
?>
