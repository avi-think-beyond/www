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
$objPHPExcel->getActiveSheet()->freezePane('E5');

$objPHPExcel->getActiveSheet()->getStyle(1)->getFont()->setBold(true)->setName('Gisha')->setSize(9);
$objPHPExcel->getActiveSheet()->getStyle(2)->getFont()->setBold(true)->setName('Gisha')->setSize(9);

$objPHPExcel->getActiveSheet()->getStyle(3)->getFont()->setBold(true)->setName('Gisha')->setSize(9);
// $objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true)->setName('Gisha')->setSize(10);
// $objPHPExcel->getActiveSheet()->getStyle('A1:A2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
// $objPHPExcel->getActiveSheet()->getStyle('A3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Border::BORDER_THIN,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();


$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
                             ->setLastModifiedBy("Hidayath Shaik")
                             ->setTitle("Daily Generation Report Execl Sheet")
                             ->setSubject("Daily Generation Report Execl Sheet")
                             ->setDescription(" Solar Daily Generation Report Execl Sheet")
                             ->setKeywords(" Solar Daily Generation Report Execl Sheet")
                             ->setCategory(" Solar Daily Generation Report Execl Sheet");
                               $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(12);
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
->setCellValue('A1',' Description')
->setCellValue('C1','Plant UP & Stop Time')
->setCellValue('A4','Month')
->setCellValue('B4','Date')
->setCellValue('C4','Plant UP')
->setCellValue('D4','Plant Down')
->setCellValue('E2','Plant-1 P1SnW3910');
 


 $alpa=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ','BA','BB','BC','BD','BE','BF','BF','BG','BH','BI','BJ','BK','BL','BM','BN','BO','BP','BQ','BR','BS','BT','BU','BV','BW','BX','BY','BZ','CA','CB','CC','CD','CE','CF','CF','CG','CH','CI','CJ','CK','CL','CM','CN','CO','CP','CQ','CR','CS','CT','CU','CV','CW','CX','CY','CZ','DA','DB','DC','DD','DE','DF','DF','DG','DH','DI','DJ','DK','DL','DM','DN','DO','DP','DQ','DR','DS','DT','DU','DV','DW','DX','DY','DZ','EA','EB','EC','ED','EE','EF','EF','EG','EH','EI','EJ','EK','EL','EM','EN','EO','EP','EQ','ER','ES','ET','EU','EV','EW','EX','EY','EZ','FA','FB','FC','FD','FE','FF','FF','FG','FH','FI','FJ','FK','FL','FM','FN','FO','FP','FQ','FR','FS','FT','FU','FV','FW','FX','FY','FZ','GA','GB','GC','GD','GE','GF','GF','GG','GH','GI','GJ','GK','GL','GM','GN','GO','GP','GQ','GR','GS','GT','GU','GV','GW','GX','GY','GZ','HA','HB','HC','HD','HE','HF','HF','HG','HH','HI','HJ','HK','HL','HM','HN','HO','HP','HQ','HR','HS','HT','HU','HV','HW','HX','HY','HZ','IA','IB','IC','ID','IE','IF','IF','IG','IH','II','IJ','IK','IL','IM','IN','IO','IP','IQ','IR','IS','IT','IU','IV','IW','IX','IY','IZ','JA','JB','JC','JD','JE','JF','JF','JG','JH','JI','JJ','JK','JL','JM','JN','JO','JP','JQ','JR','JS','JT','JU','JV','JW','JX','JY','JZ','KA','KB','KC','KD','KE','KF','KF','KG','KH','KI','KJ','KK','KL','KM','KN','KO','KP','KQ','KR','KS','KT','KU','KV','KW','KX','KY','KZ','LA','LB','LC','LD','LE','LF','LF','LG','LH','LI','LJ','LK','LL','LM','LN','LO','LP','LQ','LR','LS','LT','LU','LV','LW','LX','LY','LZ','MA','MB','MC','MD','ME','MF','MF','MG','MH','MI','MJ','MK','ML','MM','MN','MO','MP','MQ','MR','MS','MT','MU','MV','MW','MX','MY','MZ','NA','NB','NC','ND','NE','NF','NF','NG','NH','NI','NJ','NK','NL','NM','NN','NO','NP','NQ','NR','NS','NT','NU','NV','NW','NX','NY','NZ','OA','OB','OC','OD','OE','OF','OF','OG','OH','OI','OJ','OK','OL','OM','ON','OO','OP','OQ','OR','OS','OT','OU','OV','OW','OX','OY','OZ','PA','PB','PC','PD','PE','PF','PF','PG','PH','PI','PJ','PK','PL','PM','PN','PO','PP','PQ','PR','PS','PT','PU','PV','PW','PX','PY','PZ','QA','QB','QC','QD','QE','QF','QF','QG','QH','QI','QJ','QK','QL','QM','QN','QO','QP','QQ','QR','QS','QT','QU','QV','QW','QX','QY','QZ','RA','RB','RC','RD','RE','RF','RF','RG','RH','RI','RJ','RK','RL','RM','RN','RO','RP','RQ','RR','RS','RT','RU','RV','RW','RX','RY','RZ','SA','SB','SC','SD','SE','SF','SF','SG','SH','SI','SJ','SK','SL','SM','SN','SO','SP','SQ','SR','SS','ST','SU','SV','SW','SX','SY'];



include '../../OpenDb.php';
$currentmonth=date('m');
$Current_year=date('Y');
$Current_day=date('d');



$row = 4;
$row1 = 4;
$select_Inverter="SELECT * from Flexi_solar_inverter_list where plant_id='$plant_id' GROUP BY inverter_id";
$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
$$inverter_name1=array();
$inv_cnt = 1;
$inviheading1= $alpa[$row1].'3';
while($row16=mysqli_fetch_array($rs16))
{
       $Inverter_id[$inv_cnt]=$row16['inverter_id'];
       $inverter_name=$row16['inverter_name'];
       $inverter_name1[]=$row16['inverter_name'];
       

       $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1].$row, $inverter_name);
       $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$row1])->setWidth(15);


       $inv_cnt++;
       $row1++;

}

$inviheading2=$alpa[$row1-1].'3';
$inviheading12=$alpa[$row1+1].'1';
$fo1 =$alpa[$row1];
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1].$row, 'Export_Final');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+1].$row, 'Import_Final');

$fo2 =$alpa[$row1+1];
$AFTERINVI=$alpa[$row1+2].'2';
$fo4=$alpa[$row1+2];
$fo5=$alpa[$row1+3];
$fo6=$alpa[$row1+4];
$fo7=$alpa[$row1+7];
$fo8=$alpa[$row1+10];
$fo9=$alpa[$row1+13];
$fo10=$alpa[$row1+16];
$fo11=$alpa[$row1+17];
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+2].'2', 'GHI');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+3].'2', 'Tilt Irradiance');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+4].'2', 'Ambient Temperature');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+7].'2', 'Solar Irradiance');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+10].'2', 'Module Temperture');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+13].'2', 'Wind Speed');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+16].'2', 'Weather Corrected PR');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+17].'2', 'Weather Corrected PR (compensated for load shedding)');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+18].'2', 'GHI');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+21].'2', 'Tilt');



$objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$row1+17])->setWidth(20); 

$Amb_Low_row=$alpa[$row1+4];
$Amb_Hig_row=$alpa[$row1+5];
$Amb_Avg_row=$alpa[$row1+6];
$Mod_Low_row=$alpa[$row1+7];
$Mod_Hig_row=$alpa[$row1+8];
$Mod_Avg_row=$alpa[$row1+9];
$Sol_Low_row=$alpa[$row1+10];
$Sol_Hig_row=$alpa[$row1+11];
$Sol_Avg_row=$alpa[$row1+12];
$Win_Low_row=$alpa[$row1+13];
$Win_Hig_row=$alpa[$row1+14];
$Win_Avg_row=$alpa[$row1+15];
$Weather_Corrected_PR_row=$alpa[$row1+16];
$Weather_Corrected_PR_load_row=$alpa[$row1+17];
$GHI_Without_considering_Grid_outage_row=$alpa[$row1+18];
$Loss_of_GHI_for_the_day_row=$alpa[$row1+19];
$GHI_period_taken_out_row=$alpa[$row1+20];
$Tilt_Without_outage_row=$alpa[$row1+21];
$Loss_of_Tilt_for_the_row=$alpa[$row1+22];
$Tilt_taken_out=$alpa[$row1+23];


$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+2].'4', 'GHI');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+3].'4', 'Tilt Irrad');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+4].'4', 'Amb_Low');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+5].'4', 'Amb_Hig');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+6].'4', 'Amb_Avg');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+7].'4', 'Mod_Low');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+8].'4', 'Mod_Hig');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+9].'4', 'Mod_Avg');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+10].'4', 'Sol_Low');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+11].'4', 'Sol_Hig');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+12].'4', 'Sol_Avg');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+13].'4', 'Win_Low');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+14].'4', 'Win_Hig');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+15].'4', 'Win_Avg');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($fo4.'1', 'Analog Data of Plant Day Wise');  

$fo3= $alpa[$row1+15];
 
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+18].'4', 'GHI Without considering Grid outage'); 

$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+19].'4', 'Loss of GHI for the day');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+20].'4', 'GHI for the day with grid outage period taken out'); 
$objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$row1+20])->setWidth(20);   
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+21].'4', 'Tilt Without considering Grid outage
');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+22].'4', 'Loss of Tilt for the day');  
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$row1+23].'4', 'Tilt for the day with grid outage period taken out');
$objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$row1+23])->setWidth(20);    

$invicount=$row1+24;
$invicountmer1=$alpa[$invicount].'2';
 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$invicount].'2', 'Inverter Efficiency');
for ($i=0; $i<count($Inverter_id) ; $i++) { 
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$invicount].$row, $inverter_name1[$i]);
         $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$invicount])->setWidth(15);

 $invicount++;
}

$invicountmer2=$alpa[$invicount-1].'2';
$invicc=$alpa[$invicount-1].'3';

$invicountmer3=$alpa[$invicount-1].'4';

 $row=5;
 $Month_date=array();
 $cnt_da=0;
 $select_Inverter_monthly123="SELECT today_date,kwh_today ,Inverter_id,Inverter_start_time,Inverter_end_time FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY DATE(today_date),plant_id ORDER BY plant_id,today_date" ;
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                $Month=$row161['today_date'];
                $Month_date[$cnt_da]=date('F-Y', strtotime($Month));
                $Month_date_time=date('d/F/y', strtotime($Month)); 
                $Inverter_start_time =$row161['Inverter_start_time'];
                $Inverter_end_time =$row161['Inverter_end_time'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $Month_date[$cnt_da]);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $Month_date_time);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, '05:08');
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, '18:06');
                $row++;
                $Month_date_time='';
                $cnt_da++;
               }

 $row=5;
 $rcnt=1;
 $run=4;

$select_Inverter_monthly123="SELECT today_date,SUM(kwh_today) as kwh_today ,Inverter_id FROM Flexi_solar_inverters_daily WHERE Plant_id=$plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY DATE(today_date),Inverter_id order by Inverter_id, today_date " ;
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
               $countid =$rcnt;
                $kwh_today =$row161['kwh_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$run].$row, $kwh_today);
                // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $Month_date_time);

              if($countid == count($Month_date)){
                 $run++; 
                 $row=4;
                 $rcnt=0;
               }
                
               $row++;
               $kwh_today='';
               $Month_date_time='';

               $rcnt++;
               }

$row=5;
$irr_during_grid_down=array();
$irrcnt=0;
$select_MFM="SELECT SUM(Energy_Export_today ) AS Energy_Export_today,SUM(Energy_import_today) as Energy_import_today,Weather_Corrected_PR,irr_during_grid_down FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' and MFM_Cumulative='1' and plant_id='$plant_id' GROUP BY DATE(today_date),plant_id ORDER BY plant_id,today_date";


     $rs16=mysqli_query($conn2,$select_MFM) or die("error 101".mysqli_error($conn2));
     while($row16=mysqli_fetch_array($rs16))
      {
        $mfm_today_date=$row16['today_date'];
        $mfm_date_time=date('dMY', strtotime($mfm_today_date));
        $irr_today=$irrarr[$mfm_date_time];

        $Energy_Export_total=round($row16['Energy_Export_today'],2);
        $Energy_import_total =round($row16['Energy_import_today'],2);
        $Weather_Corrected_PR =round($row16['Weather_Corrected_PR'],2);
        $irr_during_grid_down[$irrcnt] =round($row16['irr_during_grid_down'],2);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($fo1.$row, $Energy_Export_total);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($fo2.$row, $Energy_import_total);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Weather_Corrected_PR_row.$row, $Weather_Corrected_PR);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Weather_Corrected_PR_load_row.$row, $Weather_Corrected_PR);
        $Energy_Export_total='';
        $Energy_import_total ='';
        $Weather_Corrected_PR ='';
        $row++;
        $irrcnt++;
        }

$row=5;
$cunt=0;
$select_Irr="SELECT SUM(irradiation) as irradiation,SUM(Global_irradiation) as Global_irradiation,SUM(Ambient_temp_min) as Ambient_temp_min,SUM(Ambient_temp_max) as Ambient_temp_max, SUM(Ambient_temp_AVG) as Ambient_temp_AVG, SUM(module1_tmp_min) as module1_tmp_min ,SUM(module1_tmp_max) as module1_tmp_max,SUM(module1_tmp_AVG) as module1_tmp_AVG, SUM(wind_speed_min) as wind_speed_min ,SUM(wind_speed_max) as wind_speed_max,SUM(wind_speed_AVG), wind_speed_AVG ,SUM(irradiation_tilt1_min) as irradiation_tilt1_min, SUM( irradiation_tilt1_max) as  irradiation_tilt1_max,SUM(irradiation_horizantal_AVG) as irradiation_horizantal_AVG,today_date FROM Flexi_solar_wms_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day')  and wms_id='1' and plant_id='$plant_id' GROUP BY DATE(today_date),plant_id ORDER BY plant_id,today_date";
  $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
  while($row16=mysqli_fetch_array($rs16))
  {
 
    $GHI=round($row16['irradiation'],2);
    $irradiation_tilt11=round($row16['Global_irradiation'],2);
   
    $Amb_Low=round($row16['Ambient_temp_min'],2);
    $Amb_Hig=round($row16['Ambient_temp_max'],2);
    $Amb_Avg=round($row16['Ambient_temp_AVG'],2);
    $Sol_Low=round($row16['module1_tmp_min'],2);
    $Sol_Hig=round($row16['module1_tmp_max'],2);
    $Sol_Avg=round($row16['module1_tmp_AVG'],2);
    $win_Low=round($row16['wind_speed_min'],2);
    $win_Hig=round($row16['wind_speed_max'],2);
    $win_Avg=round($row16['wind_speed_AVG'],2);
    $Mod_Low=round($row16['irradiation_tilt1_min'],2);
    $Mod_Hig=round($row16['irradiation_tilt1_max'],2);
    $Mod_Avg=round($row16['irradiation_horizantal_AVG'],2);
    $sumGHi_Loss=$GHI+$irr_during_grid_down[$cunt];
    $sumirradti_Loss=$irradiation_tilt11+$irr_during_grid_down[$cunt];
   


  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($fo4.$row, $GHI);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($fo5.$row, $irradiation_tilt11);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Amb_Low_row.$row, $Amb_Low);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Amb_Hig_row.$row, $Amb_Hig);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Amb_Avg_row.$row, $Amb_Avg);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Sol_Low_row.$row, $Sol_Low);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Sol_Hig_row.$row, $Sol_Hig);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Sol_Avg_row.$row, $Sol_Avg);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Win_Low_row.$row, $win_Low);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Win_Hig_row.$row, $win_Hig);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Win_Avg_row.$row, $win_Avg);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Mod_Low_row.$row, $Mod_Low);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Mod_Hig_row.$row, $Mod_Hig);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Mod_Avg_row.$row, $Mod_Avg);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($GHI_Without_considering_Grid_outage_row.$row, $sumGHi_Loss);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Loss_of_GHI_for_the_day_row.$row, $irr_during_grid_down[$cunt]);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($GHI_period_taken_out_row.$row, $GHI);

 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Tilt_Without_outage_row.$row, $sumirradti_Loss);
 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Loss_of_Tilt_for_the_row.$row, $irr_during_grid_down[$cunt]);
 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($Tilt_taken_out.$row, $irradiation_tilt11);

  $row++;
  $cunt++;
  $irradiation1='';
  $irradiation_tilt11='';

    }
$row22=$row-1;
$lineg=$Tilt_taken_out.$row22;

































 $objPHPExcel->getActiveSheet()->mergeCells("A1:B3");
 $objPHPExcel->getActiveSheet()->mergeCells("C1:D3");
 $objPHPExcel->getActiveSheet()->mergeCells($inviheading1.":".$inviheading2);
 $objPHPExcel->getActiveSheet()->mergeCells($alpa[$row1+4].'2'.':'.$alpa[$row1+6].'3');
 $objPHPExcel->getActiveSheet()->mergeCells($alpa[$row1+7].'2'.':'.$alpa[$row1+9].'3');
 $objPHPExcel->getActiveSheet()->mergeCells($alpa[$row1+10].'2'.':'.$alpa[$row1+12].'3');
 $objPHPExcel->getActiveSheet()->mergeCells($alpa[$row1+13].'2'.':'.$alpa[$row1+15].'3');
 $objPHPExcel->getActiveSheet()->mergeCells($alpa[$row1+18].'2'.':'.$alpa[$row1+20].'3');
 $objPHPExcel->getActiveSheet()->mergeCells($alpa[$row1+21].'2'.':'.$alpa[$row1+23].'3');
 $objPHPExcel->getActiveSheet()->mergeCells($invicountmer1.':'.$invicountmer2);
 $objPHPExcel->getActiveSheet()->mergeCells("E1".':'.$inviheading12);
 $objPHPExcel->getActiveSheet()->mergeCells("E2".':'.$inviheading2);
 $objPHPExcel->getActiveSheet()->mergeCells($fo1.'2'.":".$fo2.'3');
 $objPHPExcel->getActiveSheet()->mergeCells($fo1.'3'.":".$fo2.'3');
 $objPHPExcel->getActiveSheet()->mergeCells($fo4.'1'.":".$fo3.'1');
 $objPHPExcel->getActiveSheet()->mergeCells($fo4.'2'.":".$fo4.'3');
 $objPHPExcel->getActiveSheet()->mergeCells($fo5.'2'.":".$fo5.'3');
 $objPHPExcel->getActiveSheet()->mergeCells($fo10.'2'.":".$fo10.'3');
 $objPHPExcel->getActiveSheet()->mergeCells($fo11.'2'.":".$fo11.'3');
  $objPHPExcel->getActiveSheet()->mergeCells($invicountmer1.':'.$invicc);



// echo $alpa[$row1+10].'2'.':'.$alpa[$row1+12].'2';









$objPHPExcel->getActiveSheet()->getStyle("A1:D4")->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle('E1'.':'.$invicountmer3)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle('A5'.':'.$lineg)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));



$objPHPExcel->getActiveSheet()->getStyle('A1'.':'.$invicountmer3)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();



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


