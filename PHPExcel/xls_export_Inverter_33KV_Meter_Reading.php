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
    $objPHPExcel->getActiveSheet()->freezePane('B6');


$objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);


// $objPHPExcel->getActiveSheet()->getStyle('1:3')->getFont()->setBold(true)->setName('Gisha')->setSize(10);

$objPHPExcel->getActiveSheet()->getStyle('D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

$objPHPExcel->getActiveSheet()->setShowGridlines(FALSE);


$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('B1:E1')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle('B3:E3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('B2:E2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();


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
                                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$i])->setWidth(15);
                               }





$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1','Date')
->setCellValue('B1','Main Meter')
->setCellValue('B2','P1SnW3910')
->setCellValue('B3','Export Reading')
->setCellValue('C3','Import Reading')
->setCellValue('D3','MF')
->setCellValue('E3','Total Export')
->setCellValue('G2','Plant')
->setCellValue('H2','Monthly 33kV Meter Reading at Plant End');

include '../../OpenDb.php';

$currentmonth=date('m');
$Current_year=date('Y');
$Current_year2DIGITS=date('y');
$Current_day=date('d');
$PREVIOUSYR=$Current_year-1;
$PREVIOUSYR2DIGITS=$Current_year2DIGITS-1;


$al=['Export','Import','Total'];
$yral=['Export','Import','Net Export'];

$row=3;
$ji=7;
$yo=7;

$month_count_123=0;

$monthcountplus=$moncnt+1;

 $select_Inverter_Month="SELECT DATE_FORMAT(today_date, '%M-%Y') as MONTHNAME
FROM   Flexi_solar_inverters_daily where Plant_id=$plant_id GROUP by MONTH(today_date),YEAR(today_date)
ORDER  BY today_date";
                $rs16=mysqli_query($conn2,$select_Inverter_Month) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $monthdate=$row16['MONTHNAME'];
                if ($monthdate!='') {
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji].''.$row ,$monthdate);
                  $mermonth1=$alpa[$ji];

                  for($i=0; $i<3; $i++) { 
                  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yo].'4' ,$al[$i]);
                 
                  $yo++;
                  $ji++;
                  $mermonth2=$alpa[$yo-1];
                  }
                  
                  $objPHPExcel->getActiveSheet()->mergeCells($mermonth1.'3'.':'.$mermonth2.'3');
                  
                }
                $monthdate1[$month_count_123]=$row16['MONTHNAME'];
                $month_count_123++;
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$ji].''.$row ,'TOTALF17');

$monthendline=$alpa[$ji];

$objPHPExcel->getActiveSheet()->mergeCells('G2'.':'.'G4');
$objPHPExcel->getActiveSheet()->mergeCells($alpa[$ji].'3'.':'.$alpa[$ji+2].'3');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yo].'4' ,'Export');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yo+1].'4' ,'Import');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yo+2].'4' ,'Net');
$month_col=$alpa[$yo+2];



  
$yearly_startline=$yo+4;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yo+4].'2' ,'Plant');
$YEARLYSTART1=$alpa[$yo+4];
$yryo=$yo+5;
$yrji=$yo+5;
$yearexport=$yo+5;
$yearimport=$yo+6;
$yearnet=$yo+7;



$yrline=$alpa[$yrji];
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yrji].'2' ,'Yearly Meter Reading ');
$yrcnt=0;

$select_Inverter_Year="SELECT DATE_FORMAT(today_date, '%Y') as MONTHNAME
FROM   Flexi_solar_inverters_daily where Plant_id=$plant_id GROUP by YEAR(today_date)";
                $rs16=mysqli_query($conn2,$select_Inverter_Year) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                
                $YEARDATE1=$row16['MONTHNAME'];
                $PREV=$YEARDATE1-1;

                if ($YEARDATE1!='') {
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yrji].'3' ,'FY:'.$PREV.'-'.$YEARDATE1);
                  $meryear1=$alpa[$yrji];

                  for($i=0; $i<3; $i++) { 
                  
                  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yryo].'4' ,$yral[$i]);
                 
                  $yryo++;
                  $yrji++;
                  $meryear2=$alpa[$yryo-1];
                  }
                  
                  $objPHPExcel->getActiveSheet()->mergeCells($meryear1.'3'.':'.$meryear2.'3');
                  
                }

                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$yryo])->setWidth(20);
                
                
                $yrcnt++;
                }


 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yrji].'3' ,'Cumulative');
$objPHPExcel->getActiveSheet()->mergeCells($alpa[$yrji].'3'.':'.$alpa[$yrji+2].'3');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yryo].'4' ,'Export');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yryo+1].'4' ,'Import');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yryo+2].'4' ,'Net Export');
$yearly_col=$alpa[$yryo+2];



////////////////DATAPART START/////////////////////////////////////////////////////////////////



 $row=5;
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


$row=5;
$select_MFM_daily="SELECT SUM(Energy_Export_today) AS Energy_Export_today,SUM(Energy_Import_today) AS Energy_Import_today,today_date FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by DATE(today_date) order by today_date";
                $rs16=mysqli_query($conn2,$select_MFM_daily) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                $Energy_Export_today =$row16['Energy_Export_today'];

                $Energy_Import_today =$row16['Energy_Import_today'];
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, number_format($Energy_Export_today));
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$row, number_format($Energy_Export_today));
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, number_format($Energy_Import_today));
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, '1000');
                
                $Energy_Export_today='';
                $Energy_Import_today='';
                $row++;

                }
$lastrow=$row-1;

$monenergy=7;
$montimpoty=8;
$montnet=9;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G5',$solar_plant_name);
$objPHPExcel->getActiveSheet()->getColumnDimension(G)->setWidth(25);

$select_MFM_MONTHLY1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,SUM(Energy_Import_today) AS Energy_Import_today,today_date FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by YEAR(today_date),MONTH(today_date) order by today_date";
                $rs16=mysqli_query($conn2,$select_MFM_MONTHLY1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                  
                $Energy_Export_Monthly =round($row16['Energy_Export_today'],2);
                $Energy_Export_Monthly_sum +=round($row16['Energy_Export_today'],2);

                
                $Energy_Import_Monthly =$row16['Energy_Import_today'];
                $Energy_Import_Monthly_sum +=$row16['Energy_Import_today'];

                
                $netincome=$Energy_Export_Monthly-$Energy_Import_Monthly;
                $netincome_sum +=$Energy_Export_Monthly-$Energy_Import_Monthly;

                
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monenergy].'5',number_format($Energy_Export_Monthly,2));
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$montimpoty].'5', number_format($Energy_Import_Monthly,2));
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$montnet].'5', number_format($netincome,2));
             

                $monenergy++;
                  if ($monenergy=$monenergy) {
                    $monenergy=$monenergy+2;
                  }
                  $montimpoty++;
                  if ($montimpoty=$montimpoty) {
                    $montimpoty=$montimpoty+2;
                  }
                $montnet++;
                if ($montnet=$montnet) {
                    $montnet=$montnet+2;
                  }
                
                
                $Energy_Export_Monthly='';
                $Energy_Import_Monthly='';
                $netincome='';
                }


                 $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$monenergy].'5',number_format($Energy_Export_Monthly_sum,2));
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$montimpoty].'5', number_format($Energy_Import_Monthly_sum,2));
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$montnet].'5', number_format($netincome_sum,2));



/////////////////////yearly data part///////////////////////////////////////////////////////////////////




$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearly_startline].'5',$solar_plant_name);
$objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$yearly_startline])->setWidth(25);


$select_MFM_yearly1="SELECT SUM(Energy_Export_today) AS Energy_Export_today,SUM(Energy_Import_today) AS Energy_Import_today,today_date FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$plant_id' group by YEAR(today_date)";
                $rs16=mysqli_query($conn2,$select_MFM_yearly1) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                	$Energy_Export_yearly =round($row16['Energy_Export_today'],2);
                $Energy_Export_yearly_sum +=round($row16['Energy_Export_today'],2);

                
                $Energy_Import_yearly =$row16['Energy_Import_today'];
                $Energy_Import_yearly_sum +=$row16['Energy_Import_today'];

                
                $netincomeyearly=$Energy_Export_yearly-$Energy_Import_yearly;
                $netincomeyearly_sum +=$Energy_Export_yearly-$Energy_Import_yearly;

                
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearexport].'5',number_format($Energy_Export_yearly,2));
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearimport].'5', number_format($Energy_Import_yearly,2));
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearnet].'5', number_format($netincomeyearly,2));
             

                $yearexport++;
                  if ($yearexport=$yearexport) {
                    $yearexport=$yearexport+2;
                  }
                  $yearimport++;
                  if ($yearimport=$yearimport) {
                    $yearimport=$yearimport+2;
                  }
                $yearnet++;
                if ($yearnet=$yearnet) {
                    $yearnet=$yearnet+2;
                  }
                
                
                $Energy_Export_yearly='';
                $Energy_Import_yearly='';
                $netincomeyearly='';





}


  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearexport].'5',number_format($Energy_Export_yearly_sum,2));
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearimport].'5', number_format($Energy_Import_yearly_sum,2));
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpa[$yearnet].'5', number_format($netincomeyearly_sum,2));
















 $objPHPExcel->getActiveSheet()->mergeCells('A1:A4');
 $objPHPExcel->getActiveSheet()->mergeCells('B1:E1');

 $objPHPExcel->getActiveSheet()->mergeCells('B2:E2');
 $objPHPExcel->getActiveSheet()->mergeCells('B3:B4');
  $objPHPExcel->getActiveSheet()->mergeCells('C3:C4');
//  $objPHPExcel->getActiveSheet()->mergeCells('B3:B4');

 
 $objPHPExcel->getActiveSheet()->mergeCells('D3:D4');
 $objPHPExcel->getActiveSheet()->mergeCells('E3:E4'); 

$objPHPExcel->getActiveSheet()->mergeCells($alpa[7].'2'.':'.$month_col.'2');
$objPHPExcel->getActiveSheet()->mergeCells($YEARLYSTART1.'2'.':'.$YEARLYSTART1.'4');


$objPHPExcel->getActiveSheet()->mergeCells($yrline.'2'.':'.$yearly_col.'2');




$objPHPExcel->getActiveSheet()->getStyle('G2'.':'.$month_col.'4')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle($YEARLYSTART1.'2'.':'.$yearly_col.'4')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();



$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle($YEARLYSTART1.'2'.':'.$yearly_col.'5')->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));


$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->getFont()->setBold(true)->setName('Gisha')->setSize(9);
$objPHPExcel->getActiveSheet()->getStyle('G2'.':'.$month_col.'4')->getFont()->setBold(true)->setName('Gisha')->setSize(9);
$objPHPExcel->getActiveSheet()->getStyle($YEARLYSTART1.'2'.':'.$yearly_col.'4')->getFont()->setBold(true)->setName('Gisha')->setSize(9);





$objPHPExcel->getActiveSheet()->getStyle('G2'.':'.$month_col.'5')->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle('A5'.':'.'E'.$lastrow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));




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


