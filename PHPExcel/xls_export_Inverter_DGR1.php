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
                                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$i])->setWidth(12);
                               }
                              
                              
 $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(50);


$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1',' P1SnW3910')
->setCellValue('A2','DAILY GENERATION DETAILS:@Inverters_380V & 33 kV')
->setCellValue('A3',"Inverter Name");
                              





include '../../OpenDb.php';
$currentmonth=date('m');
$Current_year=date('Y');
$Previous_year=$Current_year-1;
$Current_day=date('d');

$j=1;
$row=3;
$day10mw=array();
for($di=1;$di<=31;$di++){
   $currdate=date('d');
if($di > $currdate){
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$j].''.$row ,'Total');
$dailyend=$j;

$objPHPExcel->getActiveSheet()->mergeCells('A2'.":".$alpa[$dailyend].'2');
$objPHPExcel->getActiveSheet()->getStyle('A2'.":".$alpa[$dailyend].'3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();



break;
}else{
$day10mw[]=$di.'-'.date('F');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$j].''.$row , $di.'-'.date('F'));
$j++;
  }
}
$monthW=$j+2;
$monthW1=$j+2;
$monthX=$j+3;
$alpsv1=$alpa[$j];



$objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$monthW])->setWidth(50);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].'1' , ' P1SnW3910');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].'2' , 'MONTH WISE GENERATION DETAILS( Yearly Generation ) Year '.$Previous_year.'-'.$Current_year);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].'3' , ' Inverter Name');
$row=3;
$month_count_123=0;
$inve_count=0;
         $select_Inverter_Month="SELECT DATE_FORMAT(today_date, '%M-%Y') as MONTHNAME
FROM   Flexi_solar_inverters_daily where Plant_id=$plant_id GROUP by MONTH(today_date),YEAR(today_date)
ORDER  BY today_date";
                $rs16=mysqli_query($conn2,$select_Inverter_Month) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                
                $monthdate=$row16['MONTHNAME'];
                $monthdate1[$month_count_123]=$row16['MONTHNAME'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthX].''.$row ,$monthdate);
                $monthX++;

                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthX].''.$row ,'Total');
                $month_count_123++;
                $inve_count++;
                }

$MonthEnd=$monthX;
$YearStart=$monthX+2;
$YearStartdata=$monthX+3;
$objPHPExcel->getActiveSheet()->mergeCells($alpa[$monthW].'2'.":".$alpa[$MonthEnd].'2');
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW].'1')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW].'2'.":".$alpa[$MonthEnd].'3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();







$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].'2' ,' Yearly Generation');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].'3' ,'  Inverter Name');
$objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$YearStart])->setWidth(50);
$yearcount12=0;
$select_Inverter_Year="SELECT DATE_FORMAT(today_date, '%Y') as MONTHNAME
FROM   Flexi_solar_inverters_daily where Plant_id=$plant_id GROUP by YEAR(today_date)";
                $rs16=mysqli_query($conn2,$select_Inverter_Year) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                
                $YEARDATE=$row16['MONTHNAME'];
                $year1=$YEARDATE-1;
                $YEARDATE1='FY-'.''.$year1.'-'.$YEARDATE;

                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStartdata].'3' ,$YEARDATE1);
                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$YearStartdata])->setWidth(18);
                $YearStartdata++;
                $yearcount12++;

                 
                }
                $yrcntdeviation=$yearcount12;
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStartdata].'3' ,'Cumulative');
                $yearend=$YearStartdata;
                $objPHPExcel->getActiveSheet()->mergeCells($alpa[$YearStart].'2'.":".$alpa[$YearStartdata].'2');

$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart].'2'.":".$alpa[$YearStartdata].'3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();



/////daily data start///////////////////////////////////////////////////////

// $monthinventer=$monthW;

$row = 4;
$mrow = 4;
$yrow = 4;
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
       $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $inverter_name);
       $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$mrow, $inverter_name);
       $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$yrow, $inverter_name);

       $inv_cnt++;
       $row++;
       $mrow++;
       $yrow++;
      }
          
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Generation @ Inverter (kWh) ');
          
          $row=$row+1;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Generation @ 33kV Export ');
          
          $row=$row+1;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Load Shedding @ 380 V');
          
          $row=$row+1;
          $eqline=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Equiv Load Shedding Loss @ 33kV');
          
          $row=$row+1;
          $tiltirr=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Tilt Irradiance');
          
          $row=$row+1;
          $ghirow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'GHI');
         
          $row=$row+1;
          $acrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'AC Losses + Day Aux. Consumption');
          
          $row=$row+1;
          $parow=$row;
          $lineparow=$parow;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% Plant Availability');

          $row=$row+1;
          $garow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% Grid Availability');
          
          $row=$row+1;
          $prrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% PR');
          
          $row=$row+1;
          $cufrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% CUF');
          
          $row=$row+1;
          $prloadrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% PR (Compensated for Load Shedding)');
          
          $row=$row+1;
          $curloadrow=$row;
          $linecufrow=$curloadrow;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% CUF (Compensated for Load Shedding)');
          
          $row=$row+2;
          $tenmwrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'10 MW');
          
          $row=$row+1;
          $daywiseInverterrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Day Wise Total Generation @ Inverter');
          
          $row=$row+1;
          $daywisemfmrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Day Wise Total Generation @ 33kV Meter');
          
          $row=$row+1;
          $dayperformancerow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Day Performances');
          
          $row=$row+1;
          $generationInverterrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Generation @ Inverter');
          
          $row=$row+1;
          $generationspdrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'Generation @ SPD Meter');
          
          $row=$row+1;
          $aclossesdayauxrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'AC Losses + Day Aux. Consumption');
          
          $row=$row+1;
          $padayrow=$row;
          
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% Plant Availability');
          
          $row=$row+1;
          $gadayrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% Grid Availability');
          
          $row=$row+1;
          $prdayrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% PR ');
          $row=$row+1;
          $cufdayrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% CUF');
          
          $row=$row+1;
          $prdaylsrow=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% PR (Compensated for Load Shedding)');
          
          $row=$row+1;
          $cufdaylsrow=$row;
          
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row,'% CUF (Compensated for Load Shedding)');





          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$mrow,'Generation @ Inverter (kWh) ');
          
          $row=$mrow+1;
          $month33kv=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'Generation @ 33kV Export ');
          
          $row=$row+1;
          $monthls=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'Load Shedding @ 380 V');
          
          $row=$row+1;
          $monthels=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'Equiv Load Shedding Loss @ 33kV');
          
          $row=$row+1;
          $monthti=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'Tilt Irradiance');
          
          $row=$row+1;
          $monthghi=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'GHI');
          
          $row=$row+1;
          $monthaclosses=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'AC Losses + Day Aux. Consumption');
          
          $row=$row+1;
          $monthpa=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'% Plant Availability');
          
          $row=$row+1;
          $monthga=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'% Grid Availability');
          
          $row=$row+1;
          $monthpr=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'% PR');
          
          $row=$row+1;
          $monthcuf=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'% CUF');
          
          $row=$row+1;
          $monthprls=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'% PR (Compensated for Load Shedding)');
          
          $row=$row+1;
          $monthcufls=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthW].$row,'% CUF (Compensated for Load Shedding)');




          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$yrow,'Generation @ Inverter (kWh) ');
          
          $row=$yrow+1;
          $year33kv=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'Generation @ 33kV Export ');
          
          $row=$row+1;
          $yearls=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'Load Shedding @ 380 V');
          
          $row=$row+1;
          $yearels=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'Equiv Load Shedding Loss @ 33kV');
          
          $row=$row+1;
          $yearti=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'Tilt Irradiance');
          
          $row=$row+1;
          $yearghi=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'GHI');
          
          $row=$row+1;
          $yearaclosses=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'AC Losses + Day Aux. Consumption');
          
          $row=$row+1;
          $yearpa=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'% Plant Availability');
          
          $row=$row+1;
          $yearga=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'% Grid Availability');
          
          $row=$row+1;
          $yearpr=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'% PR');
          
          $row=$row+1;
          $yearcuf=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'% CUF');
          
          $row=$row+1;
          $yearprls=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'% PR (Compensated for Load Shedding)');
          
          $row=$row+1;
          $yearcufls=$row;
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$YearStart].$row,'% CUF (Compensated for Load Shedding)');






$row = 4;
$crow = 1;

     
$dailyinverterdata=1;
$aclossesccc=1;


           
           $select_Inverter="SELECT kwh_today,today_date,plant_Inv_down_perc_avg from Flexi_solar_inverters_daily
           where MONTH(today_date) = MONTH(CURDATE()) and YEAR(today_date) =YEAR(CURDATE()) and plant_id='$plant_id' order by  today_date, Inverter_id ";
           $rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
           while($row16=mysqli_fetch_array($rs16))
        
               {
                 $kwh_today=round($row16['kwh_today'],2);
                 $kwh_today_sum +=round($row16['kwh_today'],2);
                 $AC_Losses_Day_Aux_Consumption=round($row16['plant_Inv_down_perc_avg'],2);
                 $AC_Losses_Day_Aux_Consumption_one[]=round($row16['plant_Inv_down_perc_avg'],2);
                 $AC_Losses_Day_Aux_Consumption_sum +=round($row16['plant_Inv_down_perc_avg'],2);
                 

                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$dailyinverterdata].$row , $kwh_today);

                 if ($crow==$inv_cnt) {
                     $row=$row+1;
                     $kwhdailysum[]=$kwh_today_sum;
                  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$dailyinverterdata].$row , $kwh_today_sum);
                  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$dailyinverterdata].$daywiseInverterrow, $kwh_today_sum);
                  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$dailyinverterdata].$acrow , $AC_Losses_Day_Aux_Consumption.'%');


                   $dailyinverterdata++;
                   $kwh_today_sum='';
                   $row=3;
                   $crow=0;
                   

                 }
         
                 $row++;
                 $crow++;
                 $aclossesccc++;
                 $kwh_today='';
               }
              

               $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$dailyinverterdata].$acrow , $AC_Losses_Day_Aux_Consumption.'%');
$acrowlast= $acrow; 



       $row=4;
       $select_Inverter_horizontal_sum="SELECT SUM(kwh_today) as kwh_today,today_date from Flexi_solar_inverters_daily
       where DATE(today_date) BETWEEN  DATE('$Current_year-$currentmonth-01') and DATE('$Current_year-$currentmonth-$Current_day') and plant_id='$plant_id' group by Inverter_id order by  today_date, Inverter_id ";
         $rs16=mysqli_query($conn2,$select_Inverter_horizontal_sum) or die("error 101".mysqli_error($conn2));
         while($row16=mysqli_fetch_array($rs16))
         {
           $kwh_today_horizontal_sum=round($row16['kwh_today'],2);
           $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$dailyend].$row , $kwh_today_horizontal_sum);
           
           $row++;
           $kwh_today_horizontal_sum='';
         } 

       
       $select_Inverter_vertical_sum="SELECT SUM(kwh_today) as kwh_today,today_date from Flexi_solar_inverters_daily
       where DATE(today_date) BETWEEN  DATE('$Current_year-$currentmonth-01') and DATE('$Current_year-$currentmonth-$Current_day') and plant_id='$plant_id'  order by  today_date, Inverter_id ";
         $rs16=mysqli_query($conn2,$select_Inverter_vertical_sum) or die("error 101".mysqli_error($conn2));
         while($row16=mysqli_fetch_array($rs16))
         {
           $kwh_today_vertical_sum=round($row16['kwh_today'],2);
           $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$dailyend].$row , $kwh_today_vertical_sum);

           $row++;
           $kwh_today_vertical_sum='';
         } 
 
 $mfmdi=1;
 $row33kv=$row;
 $load_shedding=$row33kv+1;
 $load_shedding_loss=$row33kv+2;
 $select_MFM_daily="SELECT Energy_Export_today AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE MONTH(today_date) = MONTH(CURDATE()) and YEAR(today_date) =YEAR(CURDATE()) and MFM_Cumulative='1' and plant_id='$plant_id'  GROUP BY DATE(today_date)  order by today_date asc";


     $rs16=mysqli_query($conn2,$select_MFM_daily) or die("error 101".mysqli_error($conn2));
     while($row16=mysqli_fetch_array($rs16))
      {
        $mfm_today_date=$row16['today_date'];
        $mfm_date_time=date('dMY', strtotime($mfm_today_date));
        $irr_today=$irrarr[$mfm_date_time];

        $Energy_Export_today=$row16['Energy_Export_today'];
        $Energy_Export_todayone[]=round($row16['Energy_Export_today'],2);
        $Energy_Export_today_sum_dg +=$row16['Energy_Export_today'];

        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmdi].$row33kv, round($Energy_Export_today,2));
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmdi].$daywisemfmrow, round($Energy_Export_today,2));
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmdi].$load_shedding,'--');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmdi].$load_shedding_loss,'--');

        $Energy_Export_today='';
        $mfmdi++;

   
      
        }
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmdi].$row33kv, round($Energy_Export_today_sum_dg,2));
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmdi].$load_shedding,'--');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$mfmdi].$load_shedding_loss,'--');
 
$alpsv=$alpa[$mfmdi];
$dailylast=$load_shedding_loss;

$tiltdaily=1;
$select_Irr="SELECT (irradiation) as irradiation,(Global_irradiation) as Global_irradiation,today_date FROM Flexi_solar_wms_daily WHERE MONTH(today_date) = MONTH(CURDATE()) and YEAR(today_date) =YEAR(CURDATE()) and wms_id='1' and plant_id='$plant_id' order by today_date";
  $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
  while($row16=mysqli_fetch_array($rs16))
  {
  $irr_today_date=$row16['today_date'];
  $irr_date_time=date('dMY', strtotime($irr_today_date));
  $irradiation=$row16['irradiation'];
  $irradiationsum +=$row16['irradiation'];
   $irradiation_tilt1=round($row16['Global_irradiation'],2);
   $irradiation_tilt1_sum +=$row16['Global_irradiation'];

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$tiltdaily].$tiltirr, $irradiation_tilt1);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$tiltdaily].$ghirow, number_format($irradiation,2));
 
$tiltdaily++;
     }
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$tiltdaily].$tiltirr, number_format($irradiation_tilt1_sum),2);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$tiltdaily].$ghirow, round($irradiationsum,2));




$select_mfmsingle="select * from Flexi_solar_MFM_daily where plant_id=$solar_plant_id AND MFM_Cumulative = '1'  and MONTH(today_date) = MONTH(CURDATE()) and YEAR(today_date) =YEAR(CURDATE()) GROUP BY DATE(today_date)  order by today_date asc";
$result=mysqli_query($conn2,$select_mfmsingle) or print("error 412".mysqli_error($conn2));

// $prcount=1;
// $prcount1=1;
// $DC_CUFcount=1;
// $DC_CUFcount1=1;
$Plant=1;
$Plant1=1;
// $grid=1;
// $grid1=1;
$daycount=date('d');
while($fetch=mysqli_fetch_array($result)) {
  $today_date = $fetch['today_date'];
    $today_date_arr = date('Ymd',strtotime($today_date));
  
  if ($fetch['Plant_Inv_availlabilty_loss_perc']<=100) {
    $Plant_Inv_availlabilty_loss_perc=number_format(100 - $fetch['Plant_Inv_availlabilty_loss_perc'],2);
    $Plant_Inv_availlabilty_loss_perc_sum +=number_format(100 - $fetch['Plant_Inv_availlabilty_loss_perc']);
    $Plant_Inv_availlabilty_loss_perc_one[]=$Plant_Inv_availlabilty_loss_perc;   
  }
  else{
    $Plant_Inv_availlabilty_loss_perc=0;
    $Plant_Inv_availlabilty_loss_perc_sum=0;
    $Plant_Inv_availlabilty_loss_perc_one[]=0;

  }
 
    $Grid_availlabilty_loss_perc=number_format(100 - $fetch['Grid_availlabilty_loss_perc'],2);
    $Grid_availlabilty_loss_perc_sum +=number_format(100 - $fetch['Grid_availlabilty_loss_perc']/$daycount,2);
    $Grid_availlabilty_loss_perc_one[]=$Grid_availlabilty_loss_perc;
 
  
 
  if($fetch['Plant_PR']<=100) {
   $Plant_PR=$fetch['Plant_PR'];
    $Plant_PR_sum +=$Plant_PR/$daycount;
    $Plant_PR_one[]=$Plant_PR;
  }
  else{

    $Plant_PR=0;
    $Plant_PR_sum=0;
    $Plant_PR_one[]=0;
  }

  if($fetch['DC_CUF'] <= 100) {
           $DC_CUF=number_format($fetch['DC_CUF'],2);
       
           $DC_CUF_sum +=number_format($fetch['DC_CUF']/$daycount,2);
           $DC_CUF_one[]=$DC_CUF;
           }else{
           $DC_CUF=0;
           $DC_CUF_sum=0;
           $DC_CUF_one[]=0;
          
           }
    
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$parow, $Plant_Inv_availlabilty_loss_perc. '%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$garow, $Grid_availlabilty_loss_perc. '%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$prrow, $Plant_PR. '%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$cufrow, $DC_CUF. '%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$prloadrow,'--');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$curloadrow,'--');
$Plant++;
}

 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$parow, $Plant_Inv_availlabilty_loss_perc_sum. '%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$garow, $Grid_availlabilty_loss_perc_sum. '%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$prrow, $Plant_PR_sum. '%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$cufrow, $DC_CUF_sum. '%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$prloadrow,'--');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant].$curloadrow,'--');







for ($s=0; $s <$Current_day ; $s++) { 
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$Plant1].$tenmwrow, $day10mw[$s]);
   $Plant1++;
  }
  $tenrowfin= $alpa[$Plant1-1].$tenmwrow;
  $tenrowfin1= $alpa[$Plant1-1];

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[1].$dayperformancerow, end($day10mw));
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[1].$generationInverterrow, end($kwhdailysum));
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[1].$generationspdrow, end($Energy_Export_todayone));
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[1].$aclossesdayauxrow, end($AC_Losses_Day_Aux_Consumption_one).'%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[1].$padayrow, end($Plant_Inv_availlabilty_loss_perc_one).'%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[1].$gadayrow, end($Grid_availlabilty_loss_perc_one).'%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[1].$prdayrow, end($Plant_PR_one).'%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[1].$cufdayrow, end($DC_CUF_one).'%');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[1].$prdaylsrow, '--');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[1].$cufdaylsrow, '--');

$lastvrowcom=$cufdaylsrow;





//////////Monthly data//////////////////////////////////////////////////////////////////////////////////////////////

$monthY=$monthW+1;
$acmonthalps=$monthY;
$month33kvalpa=$monthW+1;
$monthtialpa=$monthW+1;
$monthghialpa=$monthW+1;
$monthaclossesalpa=$monthW+1;
$monthapaalpa=$monthW+1;
$monthagaalpa=$monthW+1;
$monthapralpa=$monthW+1;
$monthacufalpa=$monthW+1;
$monthaprlsalpa=$monthW+1;
$monthacuflsalpa=$monthW+1;







$row=4;


               $select_Inverter_monthly123="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id,sum(plant_Inv_down_perc_avg) as plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '$Previous_year-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY YEAR(today_date),MONTH(today_date),Inverter_id";
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                 $Inverter_id_all=$row161['Inverter_id']; 
                 $kwh_today_month_all =$row161['kwh_today'];
                 $kwh_today_month_all_sum +=$row161['kwh_today'];
                 $kwh_today_month_all_sumlll +=$row161['kwh_today'];
                 $AC_Losses_Day_Aux_Consumption=round($row16['plant_Inv_down_perc_avg'],2);
                 $AC_Losses_Day_Aux_Consumption_sum +=round($row16['plant_Inv_down_perc_avg'],2);
                 
                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthY].$row, $kwh_today_month_all);
                 
              if($Inverter_id_all == $inv_cnt){
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$acmonthalps].$monthaclosses, $AC_Losses_Day_Aux_Consumption);
                $acmonthalps++;
                $row++;
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthY].$row, $kwh_today_month_all_sum);
                 $monthY++; 

                 $kwh_today_month_all_sum='';
                 $row=3;
               }
               $row++;
               $kwh_today_month_all='';
               $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthY].$mrow, $kwh_today_month_all_sumlll);
               
               }
               $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$acmonthalps].$monthaclosses, $AC_Losses_Day_Aux_Consumption_sum);
              
               
$row=4;


               $select_Inverter_monthly_vertical_total="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '$Previous_year-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY Inverter_id";
                $rs161=mysqli_query($conn2,$select_Inverter_monthly_vertical_total) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
              {
              $kwh_todayvertical =$row161['kwh_today'];
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthY].$row, $kwh_todayvertical);
              // $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearly_cumm].$row, $kwh_todayvertical);
              $row++;
              $kwh_todayvertical='';
              }
          
$ls='--';
   $select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Previous_year-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by YEAR(today_date),MONTH(today_date) order by today_date";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =round($row16['Energy_Export_today'],2);
                $Energy_Export_today_sum +=round($row16['Energy_Export_today'],2);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$month33kvalpa].$month33kv, $Energy_Export_today);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$month33kvalpa].$monthls,$ls);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$month33kvalpa].$monthels,$ls);

                $month33kvalpa++;
                
                $Energy_Export_today='';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$month33kvalpa].$month33kv, $Energy_Export_today_sum);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$month33kvalpa].$monthls,$ls);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$month33kvalpa].$monthels,$ls);
    


$select_Irr="SELECT SUM(irradiation) as irradiation,SUM(Global_irradiation) as Global_irradiation,today_date FROM Flexi_solar_wms_daily WHERE DATE(today_date) BETWEEN DATE('$Previous_year-01-01') AND DATE('$Current_year-$currentmonth-$Current_day')  and wms_id='1' and plant_id='$plant_id' group by YEAR(today_date),MONTH(today_date) order by today_date";
  $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
  while($row16=mysqli_fetch_array($rs16))
  {
  $irradiation1=round($row16['irradiation'],2);
  $irradiationsum1 +=round($row16['irradiation'],2);

  $irradiation_tilt11=round($row16['Global_irradiation'],2);
  $irradiation_tilt11_sum +=round($row16['Global_irradiation'],2);


  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthtialpa].$monthti, $irradiation_tilt11);
  $monthtialpa++;

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthghialpa].$monthghi, $irradiation1);
  $monthghialpa++;
  $irradiation1='';
  $irradiation_tilt11='';

    }

  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthtialpa].$monthti,  $irradiation_tilt11_sum);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthghialpa].$monthghi, $irradiationsum1);
  $irradiationsum1='';
  $irradiation_tilt11_sum='';




$select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,SUM(Plant_PR) as Plant_PR,today_date,SUM(DC_CUF) as DC_CUF,SUM(Plant_Inv_availlabilty_loss_perc) as Plant_Inv_availlabilty_loss_perc,SUM(Grid_availlabilty_loss_perc) as Grid_availlabilty_loss_perc,count(today_date) as cnt_days FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$Previous_year-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by YEAR(today_date),MONTH(today_date) ";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                
             
                 $cnt_data1 = date('Y',strtotime($row16['today_date']));
                 $cnt_data2 = date('m',strtotime($row16['today_date']));
               if(date('Y') == $cnt_data1 && date('m') == $cnt_data2){
                
                  $month_count=$Current_day;
               }else{ 
                $month_count=cal_days_in_month(CAL_GREGORIAN,$cnt_data2,$cnt_data1);
              }

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


    $Plant_P=round($row16['Plant_PR']/2,2);
    $Plant_PR1=round($Plant_P/$month_count,2);
    $Plant_PR1_sum1 +=$Plant_PR1;


           $DC_C=abs(round($row16['DC_CUF']/2,2));
           $DC_CUF12=round($DC_C/$month_count,2);
           $DC_CUF_sum1 +=$DC_CUF12;


          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthapaalpa].$monthpa, $Plant_Inv_availlabilty_loss_perc1_ave.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthagaalpa].$monthga, $Grid_availlabilty_loss_perc1_ave.'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthapralpa].$monthpr, number_format($Plant_PR1,2).'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthacufalpa].$monthcuf, number_format($DC_CUF12,2).'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthaprlsalpa].$monthprls,'--');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthacuflsalpa].$monthcufls,'--');
       
          $monthapaalpa++;
          $monthagaalpa++;
          $monthapralpa++;
          $monthaprlsalpa++;
          $monthacufalpa++;
          $monthacuflsalpa++;
                $Energy_Export_today='';
                $Plant_Inv_availlabilty_loss_perc1_ave='';
                $Grid_availlabilty_loss_perc1_ave='';
                $Plant_PR1='';
                $DC_CUF12='';
                $Plant_PR1='';
                $DC_CUF12='';
                }

       $Plant_Inv_availlabilty_loss_perc_sum1_ave=round($Plant_Inv_availlabilty_loss_perc_sum1/$inve_count,2);
       $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthapaalpa].$monthpa, number_format($Plant_Inv_availlabilty_loss_perc_sum1_ave,2).'%');

      $Grid_availlabilty_loss_perc1_sum_ave=round($Grid_availlabilty_loss_perc1_sum/$inve_count,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthagaalpa].$monthga, number_format($Grid_availlabilty_loss_perc1_sum_ave,2).'%');

      $Plant_PR_sum1=$Plant_PR1_sum1/$inve_count;
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthapralpa].$monthpr, number_format($Plant_PR_sum1,2).'%');

      $DC_CUF_sum1=round($DC_CUF_sum1/$inve_count,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthacufalpa].$monthcuf, number_format($DC_CUF_sum1,2).'%');

      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthaprlsalpa].$monthprls,'--');

      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monthacuflsalpa].$monthcufls,'--');
$Plant_Inv_availlabilty_loss_perc_sum1_ave='';
$Grid_availlabilty_loss_perc1_sum_ave='';
$Plant_PR_sum1='';
$DC_CUF_sum1='';

///////////////////////////////////////////////////yearly generation/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
$row=4;
$yearlydatastart=$YearStart+1;
$yearlydatastart1=$YearStart+1;
$yearlytistart=$YearStart+1;
$pa_star=$YearStart+1;




$select_Inverter_yearly12="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id,sum(plant_Inv_down_perc_avg) as plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '$Previous_year-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY YEAR(today_date),Inverter_id";
                $rs1612=mysqli_query($conn2,$select_Inverter_yearly12) or die("error 101".mysqli_error($conn2));
                while($row112=mysqli_fetch_array($rs1612))
        
               {
                 $date_today=$row112['today_date']; 
                 $Inverter_id1=$row112['Inverter_id']; 
                 $kwh_today_yearly =$row112['kwh_today'];
                 $kwh_today_yearly_horizontal +=$row112['kwh_today'];
                 $AC_Losses_Day_Aux_Consumption_yearly=round($row112['plant_Inv_down_perc_avg'],2);
                 $AC_Losses_Day_Aux_Consumption_yearly_sum +=round($row112['plant_Inv_down_perc_avg'],2);

                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart].$row, $kwh_today_yearly);
                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart].$yearaclosses, $AC_Losses_Day_Aux_Consumption_yearly);
                 $row_co=$row;
                 if($Inverter_id1 == $inv_cnt){
                  $kwh_today_yearly_horizontal_sum +=$kwh_today_yearly_horizontal;
                  $row++;
                  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart].$row, $kwh_today_yearly_horizontal);
                 $yearlydatastart++; 
                 $inverrowsum=$row;
                 $row=3;

                 }
                 $row++;
                 $kwh_today_yearly='';
                 $AC_Losses_Day_Aux_Consumption_yearly='';
                 }
                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart].$inverrowsum, $kwh_today_yearly_horizontal_sum);
                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart].$yearaclosses, $AC_Losses_Day_Aux_Consumption_yearly_sum);


$row=4;


               $select_Inverter_yearly_vertical_total="SELECT today_date, SUM(kwh_today) AS kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY Inverter_id";
                $rs161=mysqli_query($conn2,$select_Inverter_yearly_vertical_total) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
              {
              $kwh_todayverticalssum =$row161['kwh_today'];
             
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearend].$row, $kwh_todayverticalssum);
              $row++;
              $kwh_todayverticalssum='';
              }

$ylshedding='--';
$select_MFM_Yearly1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by YEAR(today_date) order by today_date";
                $rs16=mysqli_query($conn2,$select_MFM_Yearly1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today_yearly =round($row16['Energy_Export_today'],2);
                $Energy_Export_today_sum_yearly +=$Energy_Export_today_yearly;
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart1].$year33kv, $Energy_Export_today_yearly);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart1].$yearls, $ylshedding);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart1].$yearels, $ylshedding);
                
                $yearlydatastart1++;
                $Energy_Export_today_yearly='';

                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart1].$year33kv, round($Energy_Export_today_sum_yearly,2) );
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart1].$yearls, $ylshedding);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlydatastart1].$yearels, $ylshedding);


$select_Irr_yearly="SELECT SUM(irradiation) as irradiation,SUM(Global_irradiation) as Global_irradiation,today_date FROM Flexi_solar_wms_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day')  and wms_id='1' and plant_id='$plant_id' group by YEAR(today_date) order by today_date";
  $rs16=mysqli_query($conn2,$select_Irr_yearly) or die("error 101".mysqli_error($conn2));
  while($row16=mysqli_fetch_array($rs16))
  {
 
  $irradiation1=round($row16['irradiation'],2);
  $irradiationsum1 +=round($row16['irradiation'],2);

  $irradiation_tilt11=round($row16['Global_irradiation'],2);
  $irradiation_tilt11_sum +=round($row16['Global_irradiation'],2);


  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlytistart].$yearti, $irradiation_tilt11);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlytistart].$yearghi, $irradiation1);
  $yearlytistart++;
  $irradiation1='';
  $irradiation_tilt11='';

    }
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlytistart].$yearti, $irradiation_tilt11_sum);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearlytistart].$yearghi, $irradiationsum1);



$select_MFM_year="SELECT SUM(Energy_Export_today) AS Energy_Export_today,avg(Plant_PR) as Plant_PR,today_date,avg(DC_CUF) as DC_CUF,avg(Plant_Inv_availlabilty_loss_perc) as Plant_Inv_availlabilty_loss_perc,avg(Grid_availlabilty_loss_perc) as Grid_availlabilty_loss_perc,count(YEAR(today_date)) as cnt_days,today_date FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by YEAR(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_year) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {

  if ($row16['Plant_Inv_availlabilty_loss_perc']<=100) {
      $Plant_Inv_availlabilty_loss_perc1=abs(round(100 - $row16['Plant_Inv_availlabilty_loss_perc'],2));

    $Plant_Inv_availlabilty_loss_perc1_ave=round($Plant_Inv_availlabilty_loss_perc1,2);
    $Plant_Inv_availlabilty_loss_perc_sum11 +=$Plant_Inv_availlabilty_loss_perc1_ave;
  }
  else{
    $Plant_Inv_availlabilty_loss_perc1_ave=0;
    $Plant_Inv_availlabilty_loss_perc_sum11=0;

  }
 
    $Grid_availlabilty_loss_perc1=abs(round(100 - $row16['Grid_availlabilty_loss_perc'],2));
    $Grid_availlabilty_loss_perc1_ave=round($Grid_availlabilty_loss_perc1,2);
    $Grid_availlabilty_loss_perc1_sum1 += $Grid_availlabilty_loss_perc1_ave;

    $Plant_PR1=round($row16['Plant_PR'],2);

    $Plant_PR1_sum11 +=$Plant_PR1;
 
           $DC_C=abs(round($row16['DC_CUF'],2));
           $DC_CUF12=round($DC_C,2);
           $DC_CUF_sum11 +=$DC_CUF12;
         
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearpa, number_format($Plant_Inv_availlabilty_loss_perc1_ave,2).'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearga, number_format($Grid_availlabilty_loss_perc1_ave,2).'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearpr, number_format($Plant_PR1,2).'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearcuf, number_format($DC_CUF12,2).'%');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearprls,'--');
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearcufls,'--');
       
          $pa_star++;
         
                $Energy_Export_today='';
                $Plant_Inv_availlabilty_loss_perc1_ave='';
                $Grid_availlabilty_loss_perc1_ave='';
                $Plant_PR1='';
                $DC_CUF12='';
                $Plant_PR1='';
                $DC_CUF12='';
                }

      $Plant_Inv_availlabilty_loss_perc_sum11=round($Plant_Inv_availlabilty_loss_perc_sum11/$yrcntdeviation,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearpa, number_format($Plant_Inv_availlabilty_loss_perc_sum11,2).'%');

      $Grid_availlabilty_loss_perc1_sum_ave=round($Grid_availlabilty_loss_perc1_sum1/$yrcntdeviation,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearga, number_format($Grid_availlabilty_loss_perc1_sum_ave,2).'%');

      $Plant_PR_sum1=round($Plant_PR1_sum11/$yrcntdeviation,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearpr, number_format($Plant_PR_sum1,2).'%');

      $DC_CUF_sum1=round($DC_CUF_sum11/$yrcntdeviation,2);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearcuf, number_format($DC_CUF_sum1,2).'%');

      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearprls,'--');

      $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$pa_star].$yearcufls,'--');
$Plant_Inv_availlabilty_loss_perc_sum1_ave='';
$Grid_availlabilty_loss_perc1_sum_ave='';
$Plant_PR_sum1='';
$DC_CUF_sum1='';











$objPHPExcel->getActiveSheet()->getStyle('A'.$tenmwrow.":".$tenrowfin1.$daywisemfmrow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle('A'.$generationInverterrow.":".'B'.$cufdaylsrow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle('A3'.":".$alpsv1.$linecufrow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW].'3'.":".$alpa[$MonthEnd].$linecufrow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart].'3'.":".$alpa[$YearStartdata].$linecufrow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

















 $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($BStyle);
 $objPHPExcel->getActiveSheet()->getStyle('A3')->applyFromArray($BStyle);
 $objPHPExcel->getActiveSheet()->getStyle('A2'.":".$alpsv1.'2')->applyFromArray($BStyle);
 $objPHPExcel->getActiveSheet()->getStyle('A4'.":".'A'.$eqline)->applyFromArray($BStyle);
 $objPHPExcel->getActiveSheet()->getStyle('B3'.":".$alpsv1.'3')->applyFromArray($BStyle);
 $objPHPExcel->getActiveSheet()->getStyle('B4'.":".$alpsv1.$dailylast)->applyFromArray($BStyle);
 $objPHPExcel->getActiveSheet()->getStyle('A'.$tiltirr.":".'A'.$acrow)->applyFromArray($CStyle);
 $objPHPExcel->getActiveSheet()->getStyle('B'.$tiltirr.":".$alpsv1.$acrowlast)->applyFromArray($CStyle);
 $objPHPExcel->getActiveSheet()->getStyle('A'.$lineparow.":".'A'.$linecufrow)->applyFromArray($CStyle);
 $objPHPExcel->getActiveSheet()->getStyle('B'.$lineparow.":".$alpsv1.$linecufrow)->applyFromArray($CStyle);





$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW].'1')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW].'2'.":".$alpa[$MonthEnd].'2')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW].'3')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW+1].'3'.":".$alpa[$MonthEnd].'3')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW].'4'.":".$alpa[$monthW].$eqline)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW+1].'4'.":".$alpa[$MonthEnd].$eqline)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW].$tiltirr.":".$alpa[$monthW].$acrow)->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW+1].$tiltirr.":".$alpa[$MonthEnd].$acrowlast)->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW].$lineparow.":".$alpa[$monthW].$linecufrow)->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$monthW+1].$lineparow.":".$alpa[$MonthEnd].$linecufrow)->applyFromArray($CStyle);



$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart].'2'.":".$alpa[$YearStartdata].'2')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart].'3')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart+1].'3'.":".$alpa[$YearStartdata].'3')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart].'4'.":".$alpa[$YearStart].$eqline)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart+1].'4'.":".$alpa[$YearStartdata].$eqline)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart].$tiltirr.":".$alpa[$YearStart].$acrow)->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart+1].$tiltirr.":".$alpa[$YearStartdata].$acrowlast)->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart].$lineparow.":".$alpa[$YearStart].$linecufrow)->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle($alpa[$YearStart+1].$lineparow.":".$alpa[$YearStartdata].$linecufrow)->applyFromArray($CStyle);







$objPHPExcel->getActiveSheet()->getStyle('A'.$tenmwrow.":".$tenrowfin)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('A'.$tenmwrow)->applyFromArray($BStyle);
 $objPHPExcel->getActiveSheet()->getStyle('B'.$tenmwrow.":".$tenrowfin)->applyFromArray($BStyle);
 $objPHPExcel->getActiveSheet()->getStyle('A'.$daywiseInverterrow.":".'A'.$daywisemfmrow)->applyFromArray($CStyle);
 $objPHPExcel->getActiveSheet()->getStyle('A'.$daywiseInverterrow.":".$tenrowfin1.$daywisemfmrow)->applyFromArray($CStyle);



$objPHPExcel->getActiveSheet()->getStyle('A'.$dayperformancerow.":".'B'.$dayperformancerow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('A'.$dayperformancerow)->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle('B'.$dayperformancerow)->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle('A'.$generationInverterrow.":".'A'.$cufdaylsrow)->applyFromArray($CStyle);
$objPHPExcel->getActiveSheet()->getStyle('B'.$generationInverterrow.":".'B'.$cufdaylsrow)->applyFromArray($CStyle);






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


