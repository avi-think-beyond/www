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

// $objPHPExcel->getDefaultStyle()
//     ->getBorders()
//     ->getTop()
//     ->setBorderStyle(PHPExcel_Style_Border::BORDER_HAIR);
// $objPHPExcel->getDefaultStyle()
//     ->getBorders()
//     ->getBottom()
//     ->setBorderStyle(PHPExcel_Style_Border::BORDER_HAIR);
// $objPHPExcel->getDefaultStyle()
//     ->getBorders()
//     ->getLeft()
//     ->setBorderStyle(PHPExcel_Style_Border::BORDER_HAIR);
// $objPHPExcel->getDefaultStyle()
//     ->getBorders()
//     ->getRight()
//     ->setBorderStyle(PHPExcel_Style_Border::BORDER_HAIR);





    $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

     $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getActiveSheet()->setShowGridlines(FALSE);

$objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);

$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setName('Gisha')->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle('2')->getFont()->setBold(true)->setName('Gisha')->setSize(10);

$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true)->setName('Gisha')->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true)->setName('Gisha')->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle('A1:A2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('A3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Border::BORDER_THIN,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();

$BStyle = array(
  'borders' => array(
    'outline' => array(
      'style' => PHPExcel_Style_Border::BORDER_DOUBLE,
       'color' => array('rgb' => 'E46D0A')

    )
  )
);
$CStyle = array(
  'borders' => array(
    'outline' => array(
      'style' => PHPExcel_Style_Border::BORDER_DOUBLE,
       'color' => array('rgb' => '60497B')

    )
  )
);

 // $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setSize(14);

// Set document properties
$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
                             ->setLastModifiedBy("Hidayath Shaik")
                             ->setTitle("Daily Generation Report Execl Sheet")
                             ->setSubject("Daily Generation Report Execl Sheet")
                             ->setDescription(" Solar Daily Generation Report Execl Sheet")
                             ->setKeywords(" Solar Daily Generation Report Execl Sheet")
                             ->setCategory(" Solar Daily Generation Report Execl Sheet");
                               $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(50);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(12);
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
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BA')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BB')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BC')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BD')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BE')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BF')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BG')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BH')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BI')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BJ')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BK')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('BL')->setWidth(12);






$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1',' P1SnW3910')
->setCellValue('A2','DAILY GENERATION DETAILS:@Inverters_380V & 33 kV')
->setCellValue('A3',"Inverter Name");



include '../../OpenDb.php';
$currentmonth=date('m');
$Current_year=date('Y');
$Current_day=date('d');

$plant_id=34;

 $row=3;
 $alpa=['B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ','BA','BB','BC','BD','BE','BF','BF','BG','BH','BI','BJ','BK','BL','BM','BN','BO','BP','BQ','BR','BS','BT','BU','BV','BW','BX','BY','BZ'];

 $beta=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ','BA','BB','BC','BD','BE','BF','BF','BG','BH','BI','BJ','BK','BL','BM','BN','BO','BP','BQ','BR','BS','BT','BU','BV','BW','BX','BY','BZ'];
$count=date('d');
$HI=DATE('Y-m-1');
$aDates = array();
$oStart = new DateTime($HI);
$oEnd = clone $oStart;
$oEnd->add(new DateInterval("P1M"));



$j=0;
for($di=1;$di<=31;$di++){
  $currdate=date('d');
if($di > $currdate){
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$j].''.$row ,'Total');
$dailyInverterline= $alpa[$j].$row;
$da1245= $alpa[$j].'2';

break;
}else{
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$j].''.$row , $di.'-'.date('F'));

    $j++;
  }
}
$dailydate1="B3";
$dailydate2="AE3";













$row = 4;
$select_Inverter="SELECT * from Flexi_solar_inverter_list where plant_id='$plant_id' GROUP BY inverter_id";
$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
$kwh_today=array();
$inv_cnt = 1;
while($row16=mysqli_fetch_array($rs16))
{
       $Inverter_id[$inv_cnt]=$row16['inverter_id'];
       $inverter_name=$row16['inverter_name'];
       $inverter_name1[$inv_cnt]=$row16['inverter_name'];
       $inverter_name_month .=$row16['inverter_name'];

       $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $inverter_name);


       $inv_cnt++;

       $row++;
    

   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Generation @ Inverter (kWh) ');

}


$row = 3;
$ji=$j+3;
 for($id=1;$id<=12;$id++)
    {
   $monthdate=date('M-y', mktime(0, 0, 0, ($id),2, date('y')));
   // $monthdate1=date('M', mktime(0, 0, 0, ($id),2, date('y')));
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji].''.$row ,$monthdate);
   $ji++;
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji].''.$row ,'Total');
   $mer2=$alpa[$ji].($row-1);
   $monthly_month_line=$alpa[$ji].($row);
   $mer4=$alpa[$ji].($row);


      }
   
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji+2].'2',' Yearly Generation');
  $ymer1=$alpa[$ji+2].'2';
  $ymer3=$alpa[$ji+2].'3';

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji+2].'3',' Inverter Name');

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji+3].'3',' FY 2016-2017');
  $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$ji+3])->setWidth(20);

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji+4].'3',' FY 2017-2018');
  $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$ji+4])->setWidth(20);

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji+5].'3',' Cumulative');
  $ymer2=$alpa[$ji+5].'2';
  $ymer4=$alpa[$ji+5].'3';


  $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$ji+5])->setWidth(20);



  $objPHPExcel->getActiveSheet()->getStyle($alpa[$ji+2].'3')->getFont()->setBold( true );

$yearly_inverter_line=$alpa[$ji+2].'3';


$row=4;
for ($xcc=1 ; $xcc <= count($Inverter_id); $xcc++) {
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3] .$row , $inverter_name1[$xcc]);
          $row++;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row,'Generation @ Inverter (kWh) ');

}

$row1=$row+1;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'Generation @ 33kV Export');
$row1=$row1+1;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'Load Shedding @ 380 V');

$row1=$row1+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'Equiv Load Shedding Loss @ 33kV');
$yearly_load_line=$beta[$ji+3].$row1;
$row1=$row1+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'Tilt Irradiance');
$yearly_tilt_line=$beta[$ji+3].$row1;
$row1=$row1+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'GHI');
$row1=$row1+1;
$aclosses=$row1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'AC Losses + Day Aux. Consumption');
$yearly_aclosses_line=$beta[$ji+3].$row1;

$row1=$row1+1;
$plantrow=$row1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'% Plant Availability');
$yearly_pa_line=$beta[$ji+3].$row1;

$row1=$row1+1;
$gridrow=$row1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'% Grid Availability');
$row1=$row1+1;
$prrow=$row1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'% PR');
$row1=$row1+1;
$cufrow=$row1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'% CUF');
$row1=$row1+1;
$prload=$row1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'% PR (Compensated for Load Shedding)');
$row1=$row1+1;
$cufload=$row1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$ji+3].$row1,'% CUF (Compensated for Load Shedding)');
$yearly_cuf_line=$beta[$ji+3].$row1;

$objPHPExcel->getActiveSheet()->getColumnDimension($beta[$ji+3])->setWidth(50);


$row33kv=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row33kv,'Generation @ 33kV Export');
$row=$row33kv+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Load Shedding @ 380 V');
$row=$row+1;
$dailylineinnerline='A'.$row;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Equiv Load Shedding Loss @ 33kV');
$row=$row+1;
$wmsrow=$row;
$tiltcolor='A'.$row;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Tilt Irradiance');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'GHI');
$row=$row+1;
$aclosescolor='A'.$row;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'AC Losses + Day Aux. Consumption');
$row=$row+1;
$pacolor='A'.$row;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% Plant Availability');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% Grid Availability');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% PR');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% CUF');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% PR (Compensated for Load Shedding)');
$row=$row+1;
$loadsheddingcolor='A'.$row;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% CUF (Compensated for Load Shedding)');

$row=$row+2;
$tenmwrow=$row;

$tenmrowcolor='A'.$row;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'10 MW');

$row=$row+1;
$daywiserowinverter=$row;
$daywiserowinvertercolor='A'.$row;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Day Wise Total Generation @ Inverter');
$row=$row+1;
$daywiserowmfm=$row;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Day Wise Total Generation @ 33kV Meter');
$row=$row+1;

$objPHPExcel->getActiveSheet()->getStyle('A'.$row.":".'B'.$row)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Day Performances');

$day_performance_gridline= 'A'.$row;
$day_performance_gridline2= 'B'.$row;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row,date('d-F'));





$row=$row+1;
$geninverter=$row;
$geninverter1='A'.$row;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Generation @ Inverter');
$row=$row+1;
$genmfm=$row;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Generation @ SPD Meter');
$row=$row+1;
$aclossesperday=$row;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'AC Losses + Day Aux. Consumption');
$row=$row+1;
$paperday=$row;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% Plant Availability');
$row=$row+1;
$gridperday=$row;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% Grid Availability');
$row=$row+1;
$prperday=$row;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% PR ');
$row=$row+1;
$curperday=$row;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% CUF');
$row=$row+1;
$prloadperday=$row;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% PR (Compensated for Load Shedding)');
$row=$row+1;
$cufloadperday=$row;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% CUF (Compensated for Load Shedding)');




$wmsj=0;
  for($wmsdi=1;$wmsdi<=31;$wmsdi++){
  $currdate=date('d');
  if($wmsdi > $currdate){
  // $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$j].''.$row ,'Total');
  break;
  }else{
  $select_Irr="SELECT SUM(irradiation) as irradiation,SUM(Global_irradiation) as Global_irradiation,today_date FROM Flexi_solar_wms_daily WHERE DATE(today_date)=DATE('$Current_year-$currentmonth-$wmsdi') and wms_id='1' and plant_id='$plant_id' order by today_date asc";
  $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
  while($row16=mysqli_fetch_array($rs16))
  {
  $irr_today_date=$row16['today_date'];
  $irr_date_time=date('dMY', strtotime($irr_today_date));
  $irradiation=round($row16['irradiation'],2);
  $irradiationsum +=round($row16['irradiation'],2);

  $irradiation_tilt1=round($row16['Global_irradiation'],2);
    $irradiation_tilt1_sum +=round($row16['Global_irradiation'],2);

  $irrarr[$irr_date_time]=$irradiation;
  $irrarr1[$irr_date_time]=$irradiation_tilt1;
  $tiltline="B".$wmsrow;
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$wmsdi].$wmsrow, $irradiation);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$wmsdi+1].$wmsrow, $irradiationsum);
  $girow=$wmsrow+1;
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$wmsdi].$girow, $irradiation_tilt1);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$wmsdi+1].$girow, $irradiation_tilt1_sum);


    }
  
}
}










$j=0;
  for($mfmdi=1;$mfmdi<=31;$mfmdi++){
$currdate=date('d');
  if($mfmdi > $currdate){
  // $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$j].''.$row ,'Total');
  break;
  }else{

          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$j].''.$tenmwrow , $mfmdi.'-'.date('F'));

$tenrow1color=$alpa[$j].$tenmwrow; 

     $select_MFM="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date)=DATE('$Current_year-$currentmonth-$mfmdi') and MONTH(today_date) =MONTH('$Current_year-$currentmonth-$mfmdi') and MFM_Cumulative='1' and plant_id='$plant_id'";


     $rs16=mysqli_query($conn2,$select_MFM) or die("error 101".mysqli_error($conn2));
     while($row16=mysqli_fetch_array($rs16))
      {
        $mfm_today_date=$row16['today_date'];
        $mfm_date_time=date('dMY', strtotime($mfm_today_date));
        $irr_today=$irrarr[$mfm_date_time];

        $Energy_Export_today=round($row16['Energy_Export_today'],2);
        $Energy_Export_today1 +=round($row16['Energy_Export_today'],2);
        $Energy_Export_today2[$mfmdi] +=round($row16['Energy_Export_today'],2);

        $COUNT=date('d');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$mfmdi].$row33kv, $Energy_Export_today);

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$mfmdi].$daywiserowmfm, $Energy_Export_today);
        $daywisemfmcolor=$beta[$mfmdi].$daywiserowmfm;
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$genmfm, end($Energy_Export_today2));


      
        }
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$mfmdi+1].$row33kv, $Energy_Export_today1);
        $row33=$row33kv+1;
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$mfmdi].$row33,'0');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$mfmdi+1].$row33,'0');
        $row331=$row33+1;
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$mfmdi].$row331,'0');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$mfmdi+1].$row331,'0');

        $j++;
       }


      }
$dailyinverter1=$beta[$mfmdi].$row331;
$load1inverter=$beta[$mfmdi].$row331;

$row3s=$row331+3;
$aclosseslineinverter=$beta[$mfmdi].$row3s;

$row45=$row3s+6;
$cufloadinverter2=$beta[$mfmdi].$row45;


 $tenmwcolor=$alpa[$j-1].$tenmwrow;


$select_mfmsingle="select * from Flexi_solar_MFM_daily where plant_id=$solar_plant_id AND MFM_Cumulative = '1'  and MONTH(today_date) = MONTH(CURDATE()) and YEAR(today_date) =YEAR(CURDATE()) GROUP BY DATE(today_date)  order by today_date asc";
$result=mysqli_query($conn2,$select_mfmsingle) or print("error 412".mysqli_error($conn2));
$Energy_Export_today = array();
$Energy_import_today = array();
$Plant_Inv_availlabilty_loss_perc=array();
$Grid_availlabilty_loss_perc=array();
$Plant_PR=array();
$irr_during_grid_down=array();
$prcount=1;
$prcount1=1;
$DC_CUFcount=1;
$DC_CUFcount1=1;
$Plant=1;
$Plant1=1;
$grid=1;
$grid1=1;
$daycount=date('d');
while($fetch=mysqli_fetch_array($result)) {
  $today_date = $fetch['today_date'];
    $today_date_arr = date('Ymd',strtotime($today_date));
  
  if ($fetch['Plant_Inv_availlabilty_loss_perc']<=100) {
    $Plant_Inv_availlabilty_loss_perc=abs(round(100 - $fetch['Plant_Inv_availlabilty_loss_perc'],2));
    $Plant_Inv_availlabilty_loss_perc_sum +=abs(round(100 - $fetch['Plant_Inv_availlabilty_loss_perc'],2));
         
  }
  else{
    $Plant_Inv_availlabilty_loss_perc=0;
    $Plant_Inv_availlabilty_loss_perc_sum=0;

  }
 
    $Grid_availlabilty_loss_perc=abs(round(100 - $fetch['Grid_availlabilty_loss_perc'],2));
    $Grid_availlabilty_loss_perc_sum +=abs(round(100 - $fetch['Grid_availlabilty_loss_perc']/$daycount,2));

 
  
  if($fetch['irr_during_grid_down']<=100) {
    $irr_during_grid_down=abs(round(100 - $fetch['irr_during_grid_down'],2));
  }
  else{

    $irr_during_grid_down=0;
  }

  if($fetch['Plant_PR']<=100) {
    $Plant_PR=$fetch['Plant_PR'];
    $Plant_PR_sum +=$Plant_PR/$daycount;
  }
  else{

    $Plant_PR=0;
    $Plant_PR_sum=0;
  }

  if($fetch['DC_CUF'] <= 100) {
           $DC_CUF=abs(round($fetch['DC_CUF'],2));
       
           $DC_CUF_sum +=abs(round($fetch['DC_CUF']/$daycount,2));
           }else{
           $DC_CUF=0;
           $DC_CUF_sum=0;
          
           }
    

  

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$prcount].$prrow,$Plant_PR.'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$prcount1].$prload,$Plant_PR.'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$prloadperday,$Plant_PR.'%');

        $grid_lines_inverter=$beta[$DC_CUFcount1+1].$cufload;
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$DC_CUFcount].$cufrow,$DC_CUF.'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$DC_CUFcount1].$cufload,$DC_CUF.'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$cufloadperday,$DC_CUF.'%');
        $geninverter2= 'B'.$cufloadperday;
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$Plant].$plantrow,$Plant_Inv_availlabilty_loss_perc.'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$Plant1].$plantrow,$Plant_Inv_availlabilty_loss_perc.'%');


        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$paperday,$Plant_Inv_availlabilty_loss_perc.'%');

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$grid].$gridrow,$Grid_availlabilty_loss_perc.'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$grid1].$gridrow,$Grid_availlabilty_loss_perc.'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$gridperday,$Grid_availlabilty_loss_perc.'%');









$prcount++;
$prcount1++;
$DC_CUFcount++;
$DC_CUFcount1++;
$Plant++;
$Plant1++;
$grid++;
$grid1++;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$prcount].$prrow,$Plant_PR_sum.'%');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$prcount1].$prload,$Plant_PR_sum.'%');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$prperday,$Plant_PR.'%');

$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$DC_CUFcount].$cufrow,$DC_CUF_sum.'%');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$DC_CUFcount1].$cufload,$DC_CUF_sum.'%');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$curperday,$DC_CUF.'%');




}
$Plant_Inv_availlabilty_loss_perc_sum=$Plant_Inv_availlabilty_loss_perc_sum/$daycount;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$Plant1].$plantrow,$Plant_Inv_availlabilty_loss_perc_sum.'%');
$Grid_availlabilty_loss_perc_sum=$Grid_availlabilty_loss_perc_sum/$daycount;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$grid].$gridrow,$Grid_availlabilty_loss_perc_sum.'%');



$row = 4;

      for ($x=1 ; $x<$di; $x++) {
      for ($xc=1 ; $xc <= count($Inverter_id); $xc++) {
      
           $select_Inverter="SELECT kwh_today,today_date,plant_Inv_down_perc_avg from Flexi_solar_inverters_daily
           where DATE(today_date)=DATE('$Current_year-$currentmonth-$x') and plant_id='$plant_id' and Inverter_id='$Inverter_id[$xc]' ";
           $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
           while($row16=mysqli_fetch_array($rs16))
        
               {
                 $kwh_today=round($row16['kwh_today'],2);

                 $kwh_today_sum +=round($row16['kwh_today'],2);

                 $AC_Losses_Day_Aux_Consumption=round($row16['plant_Inv_down_perc_avg'],2);
                 $AC_Losses_Day_Aux_Consumption_sum +=round($row16['plant_Inv_down_perc_avg'],2);
                 $AC_Losses_Day_Aux_Consumption_sum1[$x] +=round($row16['plant_Inv_down_perc_avg'],2);




                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$x].$row , $kwh_today);
                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$x].$aclosses , $AC_Losses_Day_Aux_Consumption.'%');
                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$x+1].$aclosses , $AC_Losses_Day_Aux_Consumption_sum.'%');
                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$aclossesperday , end($AC_Losses_Day_Aux_Consumption_sum1).'%');
                


                 $server_date_time='';
                 $kwh_today='';
               }
                $row++;
               } 


      if ($row>count($Inverter_id)) {
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$x+1].$row , $kwh_today_sum);
          $row=4;
            }

}

                



// $Month_row = 4;
// $Month_inv_cccnt = 1;


//       for ($month_x=1 ; $month_x<$id; $month_x++) {
   
  
//        echo  $select_Inverter="SELECT today_date, SUM(kwh_today ) AS kwh_today ,Inverter_id,today_date FROM Flexi_solar_inverters_daily  WHERE Plant_id=$plant_id  and YEAR(today_date) =YEAR(CURRENT_DATE)  GROUP BY MONTH(today_date),Inverter_id";
//            $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
//            while($row16=mysqli_fetch_array($rs16))
        
//                {
//                 $date_today=$row16['today_date'];
//                 $today_date_arr = date('F',strtotime($date_today));
//                 $inverter_id=$row16['Inverter_id'];
           

                


               
//                  $Month_inv_cccnt++;

//                }
//                // echo "$kwh_today_sum".'<br>';
//                 $Month_row++;
//                 // $incr++;

                                  
// // }

//       // }
    
     
//       if ($row>count($Inverter_id)) {
//           $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$x+1].$row , $kwh_today_sum);
//           $row=4;
//             }

// }


// // }
// exit;

 $row=4;
   for ($x=1 ; $x<=1; $x++) {
       for ($xc=1 ; $xc <= count($Inverter_id); $xc++) {
       $select_Inverter="SELECT SUM(kwh_today) as kwh_today,today_date from Flexi_solar_inverters_daily
       where DATE(today_date) BETWEEN DATE('$Current_year-$currentmonth-$x') AND DATE('$Current_year-$currentmonth-$di') and plant_id='$plant_id' and Inverter_id='$Inverter_id[$xc]' ";
       $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
       while($row16=mysqli_fetch_array($rs16))
        {
           $kwh_today=round($row16['kwh_today'],2);

           $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di].$row , $kwh_today);
           $row++;
           $kwh_today='';
         } 
 

        }
          $row=1;

          $objPHPExcel->getActiveSheet()->getStyle($beta[$di+2].$row)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2] .$row , ' P1SnW3910');
          $monthly_header=$beta[$di+2] .$row;
          $objPHPExcel->getActiveSheet()->getStyle($beta[$di+2].$row)->getFont()->setBold( true );
          $row=2;
          $mer1=$beta[$di+2].$row;


          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2] .$row , 'MONTH WISE GENERATION DETAILS( Yearly Generation ) Year 2017-2018');
           
    
          $row=3;
          
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2] .$row , 'Inverter Name');
          $mer3=$beta[$di+2].$row;
          $objPHPExcel->getActiveSheet()->getColumnDimension($beta[$di+2])->setWidth(50);
          $objPHPExcel->getActiveSheet()->getStyle($beta[$di+2].$row)->getFont()->setBold( true );

          $row=4;
          $Month_jan=$beta[$di+3];
          $Month_feb=$beta[$di+4];
          $Month_mar=$beta[$di+5];
          $Month_apr=$beta[$di+6];
          $Month_may=$beta[$di+7];
          $Month_jun=$beta[$di+8];
          $Month_jul=$beta[$di+9];
          $Month_aug=$beta[$di+10];
          $Month_sep=$beta[$di+11];
          $Month_oct=$beta[$di+12];
          $Month_nov=$beta[$di+13];
          $Month_dec=$beta[$di+14];
          $Month_TOTAL=$beta[$di+15];

          for ($xc=1 ; $xc <= count($Inverter_id); $xc++) {
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row , $inverter_name1[$xc]);

          $row++;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'Generation @ Inverter (kWh) ');

           }


$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'Generation @ 33kV Export');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'Load Shedding @ 380 V');
$Load_Shedding_monthly=$beta[$di+3];
$Load_Shedding_monthly_row=$row;
$row=$row+1;
$Load_Shedding_loss_monthly=$beta[$di+3].$row;
$Load_Shedding_loss_monthly_row=$row;


$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'Equiv Load Shedding Loss @ 33kV');
$monthly_inverter_line=$beta[$di+2].$row;
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'Tilt Irradiance');
$monthly_tilt_line=$beta[$di+2].$row;
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'GHI');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'AC Losses + Day Aux. Consumption');
$monthly_aclosses_line=$beta[$di+2].$row;

$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'% Plant Availability');
$monthly_pa_line=$beta[$di+2].$row;
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'% Grid Availability');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'% PR');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'% CUF');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'% PR (Compensated for Load Shedding)');
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'% CUF (Compensated for Load Shedding)');
$monthly_cuf_line=$beta[$di+2].$row;
}










$j=0;
for($di=1;$di<=31;$di++){
  $currdate=date('d');
  if($di > $currdate){
    break;
  }
  else{
    $row=$inv_cnt+3;

 
       for ($x=1 ; $x<=1; $x++) {
       for ($xc=1 ; $xc <= count($Inverter_id); $xc++) {
           $select_Inverter="SELECT SUM(kwh_today) as kwh_today,today_date from Flexi_solar_inverters_daily
           where DATE(today_date)= DATE('$Current_year-$currentmonth-$di')  and plant_id='$plant_id' and Inverter_id='$Inverter_id[$xc]' ";
           $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
           while($row16=mysqli_fetch_array($rs16))
                   {
                        $kwh_today +=round($row16['kwh_today'],2);
                        $kwh_today12[$j] +=round($row16['kwh_today'],2);
                    } 

       }

           $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$j].$row , $kwh_today);

           $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$j].$daywiserowinverter , $kwh_today);

           $j++;
           $kwh_today='';
    }
  }
}




              $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-01-01') AND MONTH(today_date)=MONTH('$Current_year-01-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jan.$row , $kwh_today);
                
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jan.$row , $kwh_today_sum1);
                $rowdiz1=$row+1;  
                $Month_jan_total=$Month_jan.$rowdiz1;
                $rowdiz11=$row+2;  
                $rowdiz12=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jan.$rowdiz11 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jan.$rowdiz12 ,0);
                $kwh_today_sum1='';

               $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-02-01') AND MONTH(today_date)=MONTH('$Current_year-02-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_feb.$row , $kwh_today);
                
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_feb.$row , $kwh_today_sum1);
                $rowdiz2=$row+1;  
                $Month_feb_total=$Month_feb.$rowdiz2;
                $rowdiz21=$row+2;  
                $rowdiz22=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_feb.$rowdiz21 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_feb.$rowdiz22 ,0);
                 $kwh_today_sum1='';

                $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-03-01') AND MONTH(today_date)=MONTH('$Current_year-03-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_mar.$row , $kwh_today);
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_mar.$row , $kwh_today_sum1);
                $rowdiz3=$row+1;  
                $Month_mar_total=$Month_mar.$rowdiz3;
                $rowdiz31=$row+2;  
                $rowdiz32=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_mar.$rowdiz31 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_mar.$rowdiz32 ,0);
                 $kwh_today_sum1='';

                $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-04-01') AND MONTH(today_date)=MONTH('$Current_year-04-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_apr.$row , $kwh_today);
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_apr.$row , $kwh_today_sum1);
                $rowdiz4=$row+1;  
                $Month_apr_total=$Month_apr.$rowdiz4;
                $rowdiz41=$row+2;  
                $rowdiz42=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_apr.$rowdiz41 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_apr.$rowdiz42 ,0);
                $kwh_today_sum1='';

              $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-05-01') AND MONTH(today_date)=MONTH('$Current_year-05-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_may.$row , $kwh_today);
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_may.$row , $kwh_today_sum1);
                $rowdiz5=$row+1;  
                $Month_may_total=$Month_may.$rowdiz5;
                $rowdiz51=$row+2;  
                $rowdiz52=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_may.$rowdiz51 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_may.$rowdiz52 ,0);
                 $kwh_today_sum1='';
              $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-06-01') AND MONTH(today_date)=MONTH('$Current_year-06-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jun.$row , $kwh_today);
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jun.$row , $kwh_today_sum1);
                $rowdiz6=$row+1;  
                $Month_jun_total=$Month_jun.$rowdiz6;
                $rowdiz81=$row+2;  
                $rowdiz82=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jun.$rowdiz81 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jun.$rowdiz82 ,0);
                $kwh_today_sum1='';
              $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-07-01') AND MONTH(today_date)=MONTH('$Current_year-07-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jul.$row , $kwh_today);
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jul.$row , $kwh_today_sum1);
                $rowdiz7=$row+1;  
                $Month_jul_total=$Month_jul.$rowdiz7;
                $kwh_today_sum1='';
 $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-08-01') AND MONTH(today_date)=MONTH('$Current_year-08-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_aug.$row , $kwh_today);
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_aug.$row , $kwh_today_sum1);
                $rowdiz8=$row+1;  
                $Month_aug_total=$Month_aug.$rowdiz8;
                $rowdiz81=$row+2;  
                $rowdiz82=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_aug.$rowdiz81 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_aug.$rowdiz82 ,0);
                $kwh_today_sum1='';

                $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-09-01') AND MONTH(today_date)=MONTH('$Current_year-09-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_sep.$row , $kwh_today);
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_sep.$row , $kwh_today_sum1);
                $rowdiz9=$row+1;  
                $Month_sep_total=$Month_sep.$rowdiz9;
                $rowdiz91=$row+2;  
                $rowdiz92=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_sep.$rowdiz91 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_sep.$rowdiz92 ,0);
                $kwh_today_sum1='';
                $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-10-01') AND MONTH(today_date)=MONTH('$Current_year-010-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_oct.$row , $kwh_today);
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_oct.$row , $kwh_today_sum1);
                $rowdiz10=$row+1;  
                $Month_oct_total=$Month_oct.$rowdiz10;
                $rowdiz101=$row+2;  
                $rowdiz102=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_oct.$rowdiz101 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_oct.$rowdiz102 ,0);
                $kwh_today_sum1='';
                $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-11-01') AND MONTH(today_date)=MONTH('$Current_year-11-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_nov.$row , $kwh_today);
                
                $row++;

                $kwh_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_nov.$row , $kwh_today_sum1);
                $rowdiz11=$row+1;  
                $Month_nov_total=$Month_nov.$rowdiz11;
                $rowdiz111=$row+2;  
                $rowdiz112=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_nov.$rowdiz111 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_nov.$rowdiz112 ,0);
                $kwh_today_sum1='';
                $row=4;
              $select_Inverter="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and YEAR(today_date)=YEAR('$Current_year-12-01') AND MONTH(today_date)=MONTH('$Current_year-12-01') GROUP BY MONTH(today_date),Inverter_id";
                $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $date_today=$row16['today_date'];
                $kwh_today=$row16['kwh_today'];
                $kwh_today_sum1 +=$row16['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_dec.$row , $kwh_today);
               
                
                $row++;

                $kwh_today='';
                }

                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_dec.$row , $kwh_today_sum1);
                $rowdiz12=$row+1;  
                $Month_dec_total=$Month_dec.$rowdiz12;
                $rowdiz121=$row+2;  
                $rowdiz122=$row+3; 
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_dec.$rowdiz121 ,0);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_dec.$rowdiz122 ,0);
                $kwh_today_sum1='';
                $row=4;

        for ($x=1 ; $x<=1; $x++) {
        for ($xc=1 ; $xc <= count($inverter_name1); $xc++) {
        $select_Inverter="SELECT SUM(kwh_today) as kwh_today,today_date from Flexi_solar_inverters_daily
        where DATE(today_date) BETWEEN DATE('$Current_year-01-01') AND DATE('$Current_year-12-31') and plant_id='$plant_id' and Inverter_id='$Inverter_id[$xc]' ";
        $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
        while($row16=mysqli_fetch_array($rs16))
         {
             $kwh_today .=round($row16['kwh_today'],2);
             $kwh_today_total_sum +=round($row16['kwh_today'],2);
             $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_TOTAL.$row  , $kwh_today);
             $row++;
            $kwh_today='';
           } 
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_TOTAL.$row  , $kwh_today_total_sum);
          }
        }
                $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-01-01') AND DATE('$Current_year-01-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jan.$rowdiz1, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }

               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-02-01') AND DATE('$Current_year-02-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_feb.$rowdiz2, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }

               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-03-01') AND DATE('$Current_year-03-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_mar.$rowdiz3, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }

               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-04-01') AND DATE('$Current_year-04-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_apr.$rowdiz4, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }


               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-05-01') AND DATE('$Current_year-05-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_may.$rowdiz5, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }

               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-06-01') AND DATE('$Current_year-06-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jun.$rowdiz6, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }
               
               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,SUM(Plant_PR) as Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-07-01') AND DATE('$Current_year-07-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $PR_month_jul =round($row16['Plant_PR']/$Current_day,2);

                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_jul.$rowdiz7, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }
               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-08-01') AND DATE('$Current_year-08-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_aug.$rowdiz8, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }
               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-09-01') AND DATE('$Current_year-09-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_sep.$rowdiz9, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }
               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-10-01') AND DATE('$Current_year-10-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_oct.$rowdiz10, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }
               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-11-01') AND DATE('$Current_year-11-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_nov.$rowdiz11, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }
               $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Current_year-12-01') AND DATE('$Current_year-12-31') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_dec.$rowdiz12, $Energy_Export_today);
                $row++;
                $Energy_Export_today='';
                }

















//    $select_Inverter_year="SELECT DATE_FORMAT(today_date, '%M-%Y') as MONTHNAME
// FROM   Flexi_solar_inverters_daily where Plant_id=1 GROUP by MONTH(today_date),YEAR(today_date)
// ORDER  BY today_date";
//                 $rs16=mysqli_query($conn2,$select_Inverter_year) or die("error 101".mysqli_error($conn2));
//                 while($row16=mysqli_fetch_array($rs16))
        
//                {
//                 $date_today=$row16['today_date'];
//                 echo $kwh_today=$row16['MONTHNAME'];
                
//                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Month_oct.$row , $kwh_today);
                
//                 $row++;

//                 $kwh_today='';
//                 }




// exit;


$objPHPExcel->getActiveSheet()->getStyle("A3:$grid_lines_inverter")->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle("$tenmrowcolor:$daywisemfmcolor")->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$day_performance_gridline1="B".$cufloadperday;
$objPHPExcel->getActiveSheet()->getStyle($day_performance_gridline.":".$day_performance_gridline1)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($mer3.":".$monthly_inverter_line)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle($monthly_tilt_line.":".$monthly_aclosses_line)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle($monthly_pa_line.":".$monthly_cuf_line)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle($yearly_inverter_line.":".$yearly_load_line)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($yearly_tilt_line.":".$yearly_aclosses_line)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($yearly_pa_line.":".$yearly_cuf_line)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle($mer3.":".$monthly_month_line)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle($yearly_inverter_line.":".$ymer4)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$geninverter , end($kwh_today12));


$objPHPExcel->getActiveSheet()->getStyle('A'.$tenmwrow.":".$tenmwcolor)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();

 $objPHPExcel->getActiveSheet()->mergeCells($mer1.":".$mer2);
 $objPHPExcel->getActiveSheet()->getStyle($mer1.":".$mer2)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle($mer3.":".$mer4)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->mergeCells("A2:$da1245");
 $objPHPExcel->getActiveSheet()->mergeCells($ymer1.":".$ymer2);
 $objPHPExcel->getActiveSheet()->getStyle($ymer1.":".$ymer2)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
  $objPHPExcel->getActiveSheet()->getStyle($ymer3.":".$ymer4)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();


$dailyinverter="B4";

$dailylineinnerline0="A4";
$objPHPExcel->getActiveSheet()->getStyle('A1:A3')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$monthly_header")->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->getStyle($mer1.":".$mer2)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($mer3.":".$mer4)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$monthly_tilt_line:$monthly_aclosses_line")->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle("$monthly_pa_line:$monthly_cuf_line")->applyFromArray($CStyle);

$objPHPExcel->getActiveSheet()->getStyle($yearly_inverter_line.":".$yearly_load_line)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$yearly_tilt_line:$yearly_aclosses_line")->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle("$yearly_pa_line:$yearly_cuf_line")->applyFromArray($CStyle);


$objPHPExcel->getActiveSheet()->getStyle($ymer3.":".$ymer4)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($ymer1.":".$ymer2)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($mer3.":".$monthly_inverter_line)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$dailydate1:$dailyInverterline")->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("A2:$da1245")->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$dailylineinnerline0:$dailylineinnerline")->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$tiltcolor:$aclosescolor")->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle("$pacolor:$loadsheddingcolor")->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle($tenmrowcolor)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$tenmrowcolor:$tenrow1color")->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$daywiserowinvertercolor:$daywisemfmcolor")->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle("$dailyinverter:$dailyinverter1")->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$tiltline:$aclosseslineinverter")->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle("$pacolor:$cufloadinverter2")->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle("$day_performance_gridline:$day_performance_gridline2")->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$geninverter1:$$geninverter2")->applyFromArray($CStyle);




$objPHPExcel->getActiveSheet()->getStyle("$tenmrowcolor:$tenrow1color")->getFont()->setBold(true)->setName('Gisha')->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle("$dailydate1:$dailydate2")->getFont()->setBold(true)->setName('Gisha')->setSize(10);









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


