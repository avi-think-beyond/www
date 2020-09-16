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


$plant_id=1;

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



// $row = 3;
// $ji=$j+3;
//  for($id=1;$id<=date('n');$id++)
//     {
//    $monthdate=date('M-y', mktime(0, 0, 0, ($id),2, date('y')));
//    $monthdate1=date('M', mktime(0, 0, 0, ($id),2, date('y')));
//    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji].''.$row ,$monthdate);
//    $ji++;
//    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji].''.$row ,'Total');
//    $mer2=$alpa[$ji].($row-1);
//    $monthly_month_line=$alpa[$ji].($row);
//    $mer4=$alpa[$ji].($row);


//       }

$row = 3;
$ji=$j+3;
$month_kwh_run=$ji;
$month_count_123=0;
         $select_Inverter_Month="SELECT DATE_FORMAT(today_date, '%M-%Y') as MONTHNAME
FROM   Flexi_solar_inverters_daily where Plant_id=$plant_id GROUP by MONTH(today_date),YEAR(today_date)
ORDER  BY today_date";
                $rs16=mysqli_query($conn2,$select_Inverter_Month) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                
                $monthdate=$row16['MONTHNAME'];
                $monthdate1[$month_count_123]=$row16['MONTHNAME'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji].''.$row ,$monthdate);
                $ji++;

                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji].''.$row ,'Total');
                 $mer2=$alpa[$ji].($row-1);
                $monthly_month_line=$alpa[$ji].($row);
                $mer4=$alpa[$ji].($row);
                $month_count_123++;
                }
$month_total=$alpa[$ji];
   
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji+2].'2',' Yearly Generation');
  $ymer1=$alpa[$ji+2].'2';
  $ymer3=$alpa[$ji+2].'3';

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji+2].'3',' Inverter Name');
// $month_count_123=0;
  $yearcoun= $ji+3;
       

$yearly_inv_star= $yearcoun;
$Generation_Inverte_star= $yearcoun;
$Generation_33kv_star= $yearcoun;
$Load_Shedding_star=$yearcoun;
$els_star= $yearcoun;
$tilti_star= $yearcoun;
$ghi_star= $yearcoun;
$acloses_star= $yearcoun;
$pa_star= $yearcoun;
$ga_star= $yearcoun;
$pr_star= $yearcoun;
$cuf_star= $yearcoun;
$pf1_star= $yearcoun;
$cuf1_star= $yearcoun;

$yearcount12=0;
$select_Inverter_Year="SELECT DATE_FORMAT(today_date, '%Y') as MONTHNAME
FROM   Flexi_solar_inverters_daily where Plant_id=$plant_id GROUP by YEAR(today_date)";
                $rs16=mysqli_query($conn2,$select_Inverter_Year) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                
                $YEARDATE=$row16['MONTHNAME'];
                $year1=$YEARDATE-1;
                $YEARDATE1='FY-'.''.$year1.'-'.$YEARDATE;

                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearcoun].'3' ,$YEARDATE1);
                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$yearcoun])->setWidth(18);
                $yearcoun++;
                $yearcount12++;

                 
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearcoun].'3' ,'Cumulative');

  $ymer2=$alpa[$yearcoun].'2';
  $ymer4=$alpa[$yearcoun].'3';
$yearly_cumm=$yearcoun;

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
    $Plant_PR_sum +=abs(round($Plant_PR/$daycount,2));
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
          for ($xc=1 ; $xc <= count($Inverter_id); $xc++) {
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row , $inverter_name1[$xc]);
          $row++;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'Generation @ Inverter (kWh) ');

           }

$Monthgenta=$di+3;

$Monthgentarow=$row;
 $row=$row+1;
 $month_MFM_Row=$row;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'Generation @ 33kV Export');
 $row=$row+1;
 $load_shedding_row0=$row;
$load_shedding_row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'Load Shedding @ 380 V');
$load_sehd_apl=$di+2;
$acl_mon=$load_sehd_apl;
$row=$row+1;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$di+2].$row,'Equiv Load Shedding Loss @ 33kV');
$monthly_inverter_line=$beta[$di+2].$row;
 $row=$row+1;
 $month_tilt_row=$row;
 $ghi_tilt_row=$row+1;
 $ac_loss_row=$row+2;
 $pa_row=$row+3;
 $ga_row=$row+4;
 $pr_row=$row+5;
 $cuf_row=$row+6;
 $pr1_row=$row+7;
 $cuf1_row=$row+8;
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
$monthwisestartrow= $alpa[$month_kwh_run].'4';
$row=4;

               $select_Inverter_monthly123="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id,sum(plant_Inv_down_perc_avg) as plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY MONTH(today_date),Inverter_id";
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                $date_today=$row161['today_date']; 
                 $Inverter_id=$row161['Inverter_id']; 
                 $kwh_today_month =$row161['kwh_today'];
                 $kwh_today +=$row161['kwh_today'];
                 $AC_Losses_Day_Aux_Consumption=round($row16['plant_Inv_down_perc_avg'],2);
                 $AC_Losses_Day_Aux_Consumption_sum +=round($row16['plant_Inv_down_perc_avg'],2);

                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$month_kwh_run].$row, $kwh_today_month);
              if($Inverter_id == count($inverter_name1)){
                 $month_kwh_run++; 
                 $row=3;
               }
               $row++;
               
               $kwh_today='';
               $AC_Losses_Day_Aux_Consumption='';
               }





                $select_Inverter_monthly123="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id,sum(plant_Inv_down_perc_avg) as plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY MONTH(today_date)";
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                 $AC_Losses_Day_Aux_Consumption=round($row16['plant_Inv_down_perc_avg'],2);
                 $AC_Losses_Day_Aux_Consumption_sum +=round($row16['plant_Inv_down_perc_avg'],2);
                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$acl_mon].$ac_loss_row, $AC_Losses_Day_Aux_Consumption);
                  $acl_mon++;
                 $AC_Losses_Day_Aux_Consumption='';
                 }
                  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$acl_mon].$ac_loss_row, $AC_Losses_Day_Aux_Consumption_sum);



          $row=4;

               $select_Inverter_monthly123="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id,sum(plant_Inv_down_perc_avg) as plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY MONTH(today_date)";
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                 $kwh_today_month1 =$row161['kwh_today'];
                 $kwh_today_month1_total +=$row161['kwh_today'];
 				 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$Monthgenta].$Monthgentarow, $kwh_today_month1);
             
               
               $Monthgenta++;
               }
               $objPHPExcel->setActiveSheetIndex(0)->setCellValue($beta[$Monthgenta].$Monthgentarow, $kwh_today_month1_total);




$row=4;

               $select_Inverter_monthly_vertical_total="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY YEAR(today_date),Inverter_id";
                $rs161=mysqli_query($conn2,$select_Inverter_monthly_vertical_total) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
               $kwh_today =$row161['kwh_today'];
               $objPHPExcel->setActiveSheetIndex(0)->setCellValue($month_total.$row, $kwh_today);
              
               $row++;
               $kwh_today='';
               }



$mfmnew=$load_sehd_apl;
$tilt_month=$load_sehd_apl;
$GHI_month=$load_sehd_apl;
$ac_losses_month=$load_sehd_apl;
$pa_month=$load_sehd_apl;
$Ga_month=$load_sehd_apl;
$PR_month=$load_sehd_apl;
$cuf_month=$load_sehd_apl;
$pr1_month=$load_sehd_apl;
$cuf1_month=$load_sehd_apl;






$inve_count= count($monthdate1); 

for ($i1=0; $i1 <=count($monthdate1) ; $i1++) { 
$Load_Shedding_monthly=0;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$load_sehd_apl].$load_shedding_row, $Load_Shedding_monthly);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$load_sehd_apl].$load_shedding_row0, $Load_Shedding_monthly);


$load_sehd_apl++;

}
$ting=$load_sehd_apl-1;
$ting1= $load_shedding_row0+1;
$monthwisestartrow1= $alpa[$ting].$ting1;

$monthparowline=$alpa[$pa_month].$pa_row;

$select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date),YEAR(today_date) order by today_date";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $Energy_Export_today_sum +=round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmnew].$month_MFM_Row, $Energy_Export_today);
                $row++;
                $mfmnew++;
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmnew].$month_MFM_Row, $Energy_Export_today_sum);
                $Energy_Export_today='';
                }




$select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,SUM(Plant_PR) as Plant_PR,today_date,SUM(DC_CUF) as DC_CUF,SUM(Plant_Inv_availlabilty_loss_perc) as Plant_Inv_availlabilty_loss_perc,SUM(Grid_availlabilty_loss_perc) as Grid_availlabilty_loss_perc,count(id) as cnt_days FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by MONTH(today_date) order by today_date";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $Energy_Export_today_sum +=round($row16['Energy_Export_today'],2);
                $month_count=$row16['cnt_days'];
                

  if ($row16['Plant_Inv_availlabilty_loss_perc']<=100) {
    $Plant_Inv_availlabilty_loss_perc1=abs(round(100 - $row16['Plant_Inv_availlabilty_loss_perc'],2));

    $Plant_Inv_availlabilty_loss_perc1_ave=round($Plant_Inv_availlabilty_loss_perc1/$month_count,2);
    $Plant_Inv_availlabilty_loss_perc_sum1 +=$Plant_Inv_availlabilty_loss_perc1_ave;
  }
  else{
    $Plant_Inv_availlabilty_loss_perc1_ave=0;
    $Plant_Inv_availlabilty_loss_perc_sum1_ave=0;

  }
 
    $Grid_availlabilty_loss_perc1=abs(round(100 - $row16['Grid_availlabilty_loss_perc'],2));
    $Grid_availlabilty_loss_perc1_ave=round($Grid_availlabilty_loss_perc1/$month_count,2);
    $Grid_availlabilty_loss_perc1_sum += $Grid_availlabilty_loss_perc1_ave;

  // if($row16['Plant_PR']<=100) {
    $Plant_P=$row16['Plant_PR'];
    $Plant_PR1=round($Plant_P/$month_count,2);
    $Plant_PR1_sum1 +=$Plant_PR1;
    
  // }
  // else{

  //   $Plant_PR1=0;
  //   $Plant_PR_sum1=0;
  // }

  // if($row16['DC_CUF'] <= 100) {
           $DC_C=abs(round($row16['DC_CUF'],2));
           $DC_CUF12=round($DC_C/$month_count,2);
           $DC_CUF_sum1 +=$DC_CUF12;
           // }else{
           // $DC_CUF1=0;
           // $DC_CUF_sum1=0;
          
           // }
    

          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_month].$pa_row, $Plant_Inv_availlabilty_loss_perc1_ave.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Ga_month].$ga_row, $Grid_availlabilty_loss_perc1_ave.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$PR_month].$pr_row, $Plant_PR1.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$cuf_month].$cuf_row, $DC_CUF12.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pr1_month].$pr1_row, $Plant_PR1.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$cuf1_month].$cuf1_row, $DC_CUF12.'%');
       
          $pa_month++;
          $Ga_month++;
          $PR_month++;
          $pr1_month++;
          $cuf_month++;
          $cuf1_month++;
                $Energy_Export_today='';
                $Plant_Inv_availlabilty_loss_perc1_ave='';
                $Grid_availlabilty_loss_perc1_ave='';
                $Plant_PR1='';
                $DC_CUF12='';
                $Plant_PR1='';
                $DC_CUF12='';
                }
                $pa_row1=$pa_row-1;
                $tiltmonthline1= $alpa[$pa_month].$pa_row1;


      $Plant_Inv_availlabilty_loss_perc_sum1_ave=round($Plant_Inv_availlabilty_loss_perc_sum1/$inve_count,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_month].$pa_row, $Plant_Inv_availlabilty_loss_perc_sum1_ave.'%');

      $Grid_availlabilty_loss_perc1_sum_ave=round($Grid_availlabilty_loss_perc1_sum/$inve_count,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Ga_month].$ga_row, $Grid_availlabilty_loss_perc1_sum_ave.'%');

      $Plant_PR_sum1=round($Plant_PR1_sum1/$inve_count,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$PR_month].$pr_row, $Plant_PR_sum1.'%');

      $DC_CUF_sum1=round($DC_CUF_sum1/$inve_count,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$cuf_month].$cuf_row, $DC_CUF_sum1.'%');

      // $Plant_PR_sum1=round($Plant_PR1_sum1/$inve_count,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pr1_month].$pr1_row, $Plant_PR_sum1.'%');

      // $DC_CUF_sum1=round($DC_CUF_sum1/$inve_count,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$cuf1_month].$cuf1_row, $DC_CUF_sum1.'%');
$Plant_Inv_availlabilty_loss_perc_sum1_ave='';
$Grid_availlabilty_loss_perc1_sum_ave='';
$Plant_PR_sum1='';
$DC_CUF_sum1='';




$tiltmonthline=$alpa[$tilt_month].$month_tilt_row;
$monthparowline1= $alpa[$cuf1_month].$cuf1_row;


$select_Irr="SELECT SUM(irradiation) as irradiation,SUM(Global_irradiation) as Global_irradiation,today_date FROM Flexi_solar_wms_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day')  and wms_id='1' and plant_id='$plant_id' group by MONTH(today_date) order by today_date";
  $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
  while($row16=mysqli_fetch_array($rs16))
  {
  $irr_today_date=$row16['today_date'];
  $irr_date_time=date('dMY', strtotime($irr_today_date));
  $irradiation1=round($row16['irradiation'],2);
  $irradiationsum1 +=round($row16['irradiation'],2);

  $irradiation_tilt11=round($row16['Global_irradiation'],2);
    $irradiation_tilt11_sum +=round($row16['Global_irradiation'],2);


  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$tilt_month].$month_tilt_row, $irradiation1);
  $tilt_month++;

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$GHI_month].$ghi_tilt_row, $irradiation_tilt11);
  $GHI_month++;
  $irradiation1='';
  $irradiation_tilt11='';

    }

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$tilt_month].$month_tilt_row, $irradiationsum1);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$GHI_month].$ghi_tilt_row, $irradiation_tilt11_sum);
  $irradiationsum1='';
  $irradiation_tilt11_sum='';






//yearly generation////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
$row=4;
$yearlyfirstline= $alpa[$yearly_inv_star].$row;

               $select_Inverter_monthly1234="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id,sum(plant_Inv_down_perc_avg) as plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY YEAR(today_date),Inverter_id";
                $rs1612=mysqli_query($conn2,$select_Inverter_monthly1234) or die("error 101".mysqli_error($conn2));
                while($row112=mysqli_fetch_array($rs1612))
        
               {
                $date_today=$row112['today_date']; 
                 $Inverter_id1=$row112['Inverter_id']; 
                 $kwh_today_yearly =$row112['kwh_today'];
                 $kwh_today_yearly_sum[$year_cunt_vertical] +=$row112['kwh_today'];
                 $AC_Losses_Day_Aux_Consumption_yearly=round($row112['plant_Inv_down_perc_avg'],2);
                 $AC_Losses_Day_Aux_Consumption_yearly_sum +=round($row112['plant_Inv_down_perc_avg'],2);

                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearly_inv_star].$row, $kwh_today_yearly);
                 
                  
                 $row_co=$row;
              if($Inverter_id1 == count($inverter_name1)){
                 $yearly_inv_star++; 
                 $row=3;

               }
               
               $row++;
               
               $kwh_today_yearly='';
               $AC_Losses_Day_Aux_Consumption_yearly='';
               }






$row_inve=$row_co+1;
$gene_inv_year=$row_inve+1;
$ls_year=$gene_inv_year+1;
$ells_year=$ls_year+1;
$year_tilt_row=$ells_year+1;
 $ghi_tilt_row1=$year_tilt_row+1;
$ac_loss_row1=$ghi_tilt_row1+1;
 $pa_row1=$ac_loss_row1+1;
 $ga_row1=$pa_row1+1;
 $pr_row1=$ga_row1+1;
 $cuf_row1=$pr_row1+1;
 $pr1_row1=$cuf_row1+1;
 $cuf1_row1=$pr1_row1+1;


               $select_Inverter_monthly123_horizontal="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY YEAR(today_date)";
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123_horizontal) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                 $kwh_today_year1 =$row161['kwh_today'];
                 $kwh_today_year1_total +=$row161['kwh_today'];
 				 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Generation_Inverte_star].$row_inve, $kwh_today_year1);
             
               
               $Generation_Inverte_star++;
               }
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Generation_Inverte_star].$row_inve, $kwh_today_year1_total);



$select_MFM_Yearly1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by YEAR(today_date) order by today_date";
                $rs16=mysqli_query($conn2,$select_MFM_Yearly1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today_yearly =round($row16['Energy_Export_today'],2);
                $Energy_Export_today_sum_yearly +=$Energy_Export_today_yearly;
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Generation_33kv_star].$gene_inv_year, $Energy_Export_today_yearly);
                
                $Generation_33kv_star++;
                
                $Energy_Export_today='';

                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Generation_33kv_star].$gene_inv_year, $Energy_Export_today_sum_yearly);
$yrcntdeviation=$yearcount12;
$yrcnt=$yearcount12+1;
for ($j1=1; $j1 <=$yrcnt ; $j1++) { 
$Load_Shedding_Yearly1=0;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Load_Shedding_star].$ls_year, $Load_Shedding_Yearly1);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Load_Shedding_star].$ells_year, $Load_Shedding_Yearly1);


$Load_Shedding_star++;

}
$yearlastline= $alpa[$pa_star].$pa_row1;
$select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,SUM(Plant_PR) as Plant_PR,today_date,SUM(DC_CUF) as DC_CUF,SUM(Plant_Inv_availlabilty_loss_perc) as Plant_Inv_availlabilty_loss_perc,SUM(Grid_availlabilty_loss_perc) as Grid_availlabilty_loss_perc,count(id) as cnt_days FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by YEAR(today_date) order by today_date";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
               
                 $YEAR_CNT1z=$row16['cnt_days'];
               

  if ($row16['Plant_Inv_availlabilty_loss_perc']<=100) {
     $Plant_Inv_availlabilty_loss_perc1=abs(round(100 - $row16['Plant_Inv_availlabilty_loss_perc'],2));

    $Plant_Inv_availlabilty_loss_perc1_ave=round($Plant_Inv_availlabilty_loss_perc1/$YEAR_CNT1z,2);
    $Plant_Inv_availlabilty_loss_perc_sum11 +=$Plant_Inv_availlabilty_loss_perc1_ave;
  }
  else{
    $Plant_Inv_availlabilty_loss_perc1_ave=0;
    $Plant_Inv_availlabilty_loss_perc_sum11=0;

  }
 
    $Grid_availlabilty_loss_perc1=abs(round(100 - $row16['Grid_availlabilty_loss_perc'],2));
    $Grid_availlabilty_loss_perc1_ave=round($Grid_availlabilty_loss_perc1/$YEAR_CNT1z,2);
    $Grid_availlabilty_loss_perc1_sum1 += $Grid_availlabilty_loss_perc1_ave;

    $Plant_P=$row16['Plant_PR'];
    $Plant_PR1=round($Plant_P/$YEAR_CNT1z,2);
    $Plant_PR1_sum11 +=$Plant_PR1;
 
           $DC_C=abs(round($row16['DC_CUF'],2));
           $DC_CUF12=round($DC_C/$YEAR_CNT1z,2);
           $DC_CUF_sum11 +=$DC_CUF12;
         
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$pa_row1, $Plant_Inv_availlabilty_loss_perc1_ave.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ga_star].$ga_row1, $Grid_availlabilty_loss_perc1_ave.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pr_star].$pr_row1, $Plant_PR1.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$cuf_star].$cuf_row1, $DC_CUF12.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pf1_star].$pr1_row1, $Plant_PR1.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$cuf1_star].$cuf1_row1, $DC_CUF12.'%');
       
          $pa_star++;
          $ga_star++;
          $pr_star++;
          $pf1_star++;
          $cuf_star++;
          $cuf1_star++;
                $Energy_Export_today='';
                $Plant_Inv_availlabilty_loss_perc1_ave='';
                $Grid_availlabilty_loss_perc1_ave='';
                $Plant_PR1='';
                $DC_CUF12='';
                $Plant_PR1='';
                $DC_CUF12='';
                }
                // $pa_row11=$pa_row1-1;
                // $tiltmonthline1= $alpa[$pa_star].$pa_row11;


      $Plant_Inv_availlabilty_loss_perc_sum11=round($Plant_Inv_availlabilty_loss_perc_sum11/$yrcntdeviation,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$pa_row1, $Plant_Inv_availlabilty_loss_perc_sum11.'%');

      $Grid_availlabilty_loss_perc1_sum_ave=round($Grid_availlabilty_loss_perc1_sum1/$yrcntdeviation,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ga_star].$ga_row1, $Grid_availlabilty_loss_perc1_sum_ave.'%');

      $Plant_PR_sum1=round($Plant_PR1_sum11/$yrcntdeviation,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pr_star].$pr_row1, $Plant_PR_sum1.'%');

      $DC_CUF_sum1=round($DC_CUF_sum11/$yrcntdeviation,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$cuf_star].$cuf_row1, $DC_CUF_sum1.'%');

      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pf1_star].$pr1_row1, $Plant_PR_sum1.'%');

      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$cuf1_star].$cuf1_row1, $DC_CUF_sum1.'%');
$Plant_Inv_availlabilty_loss_perc_sum1_ave='';
$Grid_availlabilty_loss_perc1_sum_ave='';
$Plant_PR_sum1='';
$DC_CUF_sum1='';
$pa_row111=$pa_row1-1;
$yearline= $alpa[$pa_star].$pa_row111;
$yearlsline= $alpa[$cuf1_star].$cuf1_row1;



// $tiltmonthline=$alpa[$tilt_month].$month_tilt_row;
// $monthparowline1= $alpa[$cuf1_month].$cuf1_row;
 $tiltyearline =$alpa[$tilti_star].$year_tilt_row;

$select_Irr="SELECT SUM(irradiation) as irradiation,SUM(Global_irradiation) as Global_irradiation,today_date FROM Flexi_solar_wms_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day')  and wms_id='1' and plant_id='$plant_id' group by YEAR(today_date) order by today_date";
  $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
  while($row16=mysqli_fetch_array($rs16))
  {
 
  $irradiation1=round($row16['irradiation'],2);
  $irradiationsum1 +=round($row16['irradiation'],2);

  $irradiation_tilt11=round($row16['Global_irradiation'],2);
    $irradiation_tilt11_sum +=round($row16['Global_irradiation'],2);


  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$tilti_star].$year_tilt_row, $irradiation1);
  $tilti_star++;

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ghi_star].$ghi_tilt_row1, $irradiation_tilt11);
  $ghi_star++;
  $irradiation1='';
  $irradiation_tilt11='';

    }

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$tilti_star].$year_tilt_row,  $irradiationsum1);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ghi_star].$ghi_tilt_row1, $irradiation_tilt11_sum);
  $irradiationsum1='';
  $irradiation_tilt11_sum='';
$yearly_grid_line= $alpa[$ghi_star].$ells_year;


$select_Inverter_YEARlylossed="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id,sum(plant_Inv_down_perc_avg) as plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY YEAR(today_date)";
                $rs161=mysqli_query($conn2,$select_Inverter_YEARlylossed) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                 $AC_Losses_Day_Aux_Consumption123=round($row16['plant_Inv_down_perc_avg'],2);
                 $AC_Losses_Day_Aux_Consumption_sum123 +=round($row16['plant_Inv_down_perc_avg'],2);
                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$acloses_star].$ac_loss_row1, $AC_Losses_Day_Aux_Consumption123);
                  $acloses_star++;
                 $AC_Losses_Day_Aux_Consumption123='';
                 }
                  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$acloses_star].$ac_loss_row1, $AC_Losses_Day_Aux_Consumption_sum123);


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

$objPHPExcel->getActiveSheet()->getStyle($monthwisestartrow.":".$monthwisestartrow1)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($tiltmonthline.":".$tiltmonthline1)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($monthparowline.":".$monthparowline1)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($yearlyfirstline.":".$yearly_grid_line)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($tiltyearline.":".$yearline)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($yearlastline.":".$yearlsline)->applyFromArray(array(
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
$objPHPExcel->getActiveSheet()->getStyle("$geninverter1:$geninverter2")->applyFromArray($CStyle);

$objPHPExcel->getActiveSheet()->getStyle($yearlyfirstline.":".$yearly_grid_line)->applyFromArray($BStyle);


$objPHPExcel->getActiveSheet()->getStyle("$tiltyearline:$yearline")->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle("$yearlastline:$yearlsline")->applyFromArray($CStyle);

$objPHPExcel->getActiveSheet()->getStyle("$monthwisestartrow:$monthwisestartrow1")->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle("$tiltmonthline:$tiltmonthline1")->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle("$monthparowline:$monthparowline1")->applyFromArray($CStyle);







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


