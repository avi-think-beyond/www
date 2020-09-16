<?php 
 $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

     $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getActiveSheet()->freezePane('D4');


$objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);


$objPHPExcel->getActiveSheet()->getStyle('1:3')->getFont()->setBold(true)->setName('Gisha')->setSize(10);

$objPHPExcel->getActiveSheet()->getStyle('D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

    $objPHPExcel->getActiveSheet()->setShowGridlines(FALSE);


$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('A1:D1')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('A3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Border::BORDER_THIN,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('A2:Y3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();


// Set document properties


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


$solar_plant_cap=$solar_plant_capacity/1000;

$objPHPExcel->setActiveSheetIndex(2)
->setCellValue('A1','Plant Availability & Grid Availability')
->setCellValue('D1','Yield of P1SnW3910')
->setCellValue('A2','Plant UP time')
->setCellValue('F2','P1SnW3910')
->setCellValue('H2','Transmission Line (Internal Not grid)')
->setCellValue('K2','HT panel/ TF Down time in Min.   ')
->setCellValue('N2','Inverter Down time in Min    ')
->setCellValue('Q2','CB Down time')
->setCellValue('T2','String Down time')
->setCellValue('W2','Total down time of plant')
->setCellValue('Y2','Plant Availability in (%)')

->setCellValue('A3','Date')
->setCellValue('B3','Start Time')
->setCellValue('C3','End Time')
->setCellValue('D3','Plant Up Time')
->setCellValue('E3','Total Generation Hours')
->setCellValue('F3','Grid down time in Hrs '.$solar_plant_cap.' MW')
->setCellValue('G3','Grid Availability in (%) '.$solar_plant_cap.' MW')
->setCellValue('H3','# of  HT Line')
->setCellValue('I3','Down time in Minutes')
->setCellValue('J3','TL Down time in minutes')
->setCellValue('K3','# of inverter in Panel')
->setCellValue('L3','Down time')
->setCellValue('M3','Panel down time')
->setCellValue('N3','# of Inverter')
->setCellValue('O3','Down Time')
->setCellValue('P3','Inverter Down time')
->setCellValue('Q3','# of CB out')
->setCellValue('R3','time')
->setCellValue('S3','CB down time')
->setCellValue('T3','# of String out')
->setCellValue('U3','Down time')
->setCellValue('V3','String Down time')
->setCellValue('AA3','Plant')
->setCellValue('AA4','P1SnW3910')
->setCellValue('AA9','Plant')
->setCellValue('AA10','P1SnW3910')
->setCellValue('H4','100')
->setCellValue('I4','(min)')
->setCellValue('K4','20')
->setCellValue('N4','10.00')
->setCellValue('O4','(min)')
->setCellValue('Q4','1.25')
->setCellValue('R4','(min)')
->setCellValue('T4','0.07')
->setCellValue('U4','(min)')
->setCellValue('W4','min')
->setCellValue('X4','hours')
->setCellValue('A4','Weightage');





include $Source_path."OpenDb.php";


 $row=3;

$currentmonth=date('m');
$Current_year=date('Y');
$Current_year2DIGITS=date('y');
$Current_day=date('d');
$PREVIOUSYR=$Current_year-1;
$PREVIOUSYR2DIGITS=$Current_year2DIGITS-1;



 $row=5;
 $Month_date=array();
 $cnt_da=0;
 $select_Inverter_monthly123="SELECT today_date,kwh_today ,Inverter_id,Inverter_start_time,Inverter_end_time FROM Flexi_solar_inverters_daily WHERE Plant_id=$solar_plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY DATE(today_date),plant_id ORDER BY plant_id,today_date desc" ;
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                $Month=$row161['today_date'];
                $Month_date[$cnt_da]=date('F-Y', strtotime($Month));
                 $Month_date_time=date('d/m/y', strtotime($Month)); 
                
                $START_TIME='0506';
                $END_TIME='1808';
                 $chunks1 = str_split($START_TIME, 2);
                 $STARTTIME1 = implode(':', $chunks1);

                 $chunks2 = str_split($END_TIME, 2);
                 $ENDTIME1 = implode(':', $chunks2);

                $PLANTUPTIME=$END_TIME-$START_TIME;
                $chunks3 = str_split($PLANTUPTIME, 2);
                $PLANTUPTIME1 = implode(':', $chunks3);
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue('A'.$row, $Month_date_time);
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue('B'.$row, $STARTTIME1);
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue('C'.$row, $ENDTIME1);
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue('D'.$row, $PLANTUPTIME1);
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue('E'.$row, $PLANTUPTIME1);
                $row++;
                $Month_date_time='';
                $cnt_da++;
               }

$ra=$row-1;
$liz='Y'.$ra;
















$MONTHLYSTARTLINE=$alpa[26].'2';
$MONTHLYSTARTLINE1=$alpa[26].'8';
$objPHPExcel->setActiveSheetIndex(2)->setCellValue($MONTHLYSTARTLINE,'Monthly Plant availability of Plant For FY:'.$PREVIOUSYR2DIGITS.'-'.$Current_year2DIGITS);
$objPHPExcel->setActiveSheetIndex(2)->setCellValue($MONTHLYSTARTLINE1,'Monthly Grid Availability of Plant For FY:'.$PREVIOUSYR2DIGITS.'-'.$Current_year2DIGITS);

$row=3;
$ji=27;
$row8=9;
$month_count_123=0;

 $select_Inverter_Month="SELECT DATE_FORMAT(today_date, '%M-%Y') as MONTHNAME
FROM   Flexi_solar_inverters_daily where Plant_id=$solar_plant_id and DATE(today_date) BETWEEN '$PREVIOUSYR-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP by MONTH(today_date),YEAR(today_date)
ORDER  BY today_date ";
                $rs16=mysqli_query($conn2,$select_Inverter_Month) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                $monthdate=$row16['MONTHNAME'];
                $monthdate1[$month_count_123]=$row16['MONTHNAME'];
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$ji].''.$row ,$monthdate);
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$ji].''.$row8 ,$monthdate);
                $ji++;
                $month_count_123++;
                }
              
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$ji].''.$row ,'FY:'.$PREVIOUSYR.'-'.$Current_year);
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$ji].''.$row8 ,'FY:'.$PREVIOUSYR.'-'.$Current_year);
                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$ji])->setWidth(20);


$MONTHLYMER= $alpa[$ji].'2';
$MONTHLYMERFIN= $alpa[$ji].'3';
$MONTHLYMERFIN1= $alpa[$ji].'4';
$MONTHLYMERFIN12= $alpa[$ji].'10';
$MONTHLYMER8= $alpa[$ji].'8';
$MONTHLYMERBOLD= $alpa[$ji].'9';
$YEARLYSTART=$ji+2;
$YEARLYSTART1=$ji+3;

$objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART].'2','Yearly Plant Availability');
$objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART].'3','Plant');
$objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART].'4','P1SnW3910');

$objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART].'8','Yearly Grid Availability');
$objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART].'9','Plant');
$objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART].'10','P1SnW3910');

$yrcnt=0;
$select_Inverter_Year="SELECT DATE_FORMAT(today_date, '%Y') as MONTHNAME
FROM   Flexi_solar_inverters_daily where Plant_id=$solar_plant_id GROUP by YEAR(today_date)";
                $rs16=mysqli_query($conn2,$select_Inverter_Year) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
        
               {
                
                $YEARDATE1=$row16['MONTHNAME'];
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART1].'3' ,$YEARDATE1);
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART1].'9' ,$YEARDATE1);
                $YEARLYSTART1++;
                $yrcnt++;
                }
            $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART1].'3' ,'Availability');
                $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART1].'9' ,'Availability');
$row=5;
$select_MFM_DAILY="SELECT Plant_Inv_availlabilty_loss_perc,Grid_down_time,Grid_availlabilty_loss_perc,Grid_down_time_perc,Plant_PR,today_date,irr_during_grid_down FROM `Flexi_solar_MFM_daily` WHERE plant_id=$solar_plant_id AND MFM_Cumulative = '1' and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY DATE(today_date),plant_id ORDER BY plant_id,today_date desc";
                $rs16=mysqli_query($conn2,$select_MFM_DAILY) or die("error 101".mysqli_error($conn2));
                while($row16=mysqli_fetch_array($rs16))
                {
                
                 if ($row16['Plant_Inv_availlabilty_loss_perc']<=100) {
                 $Plant_Inv_availlabilty_loss_perc1=abs(round(100 - $row16['Plant_Inv_availlabilty_loss_perc'],2));

               
                }else{
                    $Plant_Inv_availlabilty_loss_perc1_ave=0;
                }
 if ($row16['Grid_down_time_perc']<=100) {
    $Grid_availlabilty_loss_perc1=(100 - $row16['Grid_down_time_perc']);
   }else{
    $Grid_availlabilty_loss_perc1=0;
   }
$Grid_down_time=$row16['Grid_down_time'];
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('Y'.$row, number_format($Plant_Inv_availlabilty_loss_perc1,2).'%');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('G'.$row, number_format($Grid_availlabilty_loss_perc1,2).'%');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('F'.$row,round($Grid_down_time));
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('H'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('I'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('J'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('K'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('L'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('M'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('N'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('O'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('P'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('Q'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('R'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('S'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('T'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('U'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('V'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('W'.$row,'--');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue('X'.$row,'--');
    
    $Plant_Inv_availlabilty_loss_perc1_ave='';
    $Grid_availlabilty_loss_perc1_ave='';
    $row++;
      }
   








$pa_month=27;
$row=4;
$select_MFM_MONTHLY1="SELECT SUM(Plant_Inv_availlabilty_loss_perc) as Plant_Inv_availlabilty_loss_perc,SUM(Grid_availlabilty_loss_perc) as Grid_availlabilty_loss_perc,SUM(Grid_down_time_perc) as Grid_down_time_perc,count(today_date) as cnt_days,today_date FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('$PREVIOUSYR-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$solar_plant_id' group by YEAR(today_date),MONTH(today_date) ";
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

                 $Plant_Inv_availlabilty_loss_perc1_ave =round($Plant_Inv_availlabilty_loss_perc1/$month_count,2);

                $Plant_Inv_availlabilty_loss_perc1_ave_plus +=round($Plant_Inv_availlabilty_loss_perc1/$month_count,2);

   
                }else{
                    $Plant_Inv_availlabilty_loss_perc1_ave=0;
                }

    $Grid_availlabilty_loss_perc1=abs(round(100 - $row16['Grid_down_time_perc'],2));
    $Grid_availlabilty_loss_perc1_ave=round($Grid_availlabilty_loss_perc1/$month_count,2);
    $Grid_availlabilty_loss_perc1_sum += $Grid_availlabilty_loss_perc1_ave;

    $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$pa_month].$row, number_format($Plant_Inv_availlabilty_loss_perc1_ave,2).'%');
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$pa_month].'10', number_format($Grid_availlabilty_loss_perc1_ave,2).'%');
    $pa_month++;
    $Plant_Inv_availlabilty_loss_perc1_ave='';
    $Grid_availlabilty_loss_perc1_ave='';
      }
    $Plant_Inv_availlabilty_loss_perc1_ave11= round($Plant_Inv_availlabilty_loss_perc1_ave_plus/$month_count_123,2);
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$pa_month].$row, number_format($Plant_Inv_availlabilty_loss_perc1_ave11,2).'%');

    $Grid_availlabilty_loss_perc1_ave11=round($Grid_availlabilty_loss_perc1_sum/$month_count_123,2);
    $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$pa_month].'10', number_format($Grid_availlabilty_loss_perc1_ave11,2).'%');
  

$YEARLYSTART1=$pa_month+3;

$select_Yearly="SELECT avg(Plant_Inv_availlabilty_loss_perc) as Plant_Inv_availlabilty_loss_perc,avg(Grid_availlabilty_loss_perc) as Grid_availlabilty_loss_perc,avg(Grid_down_time_perc) as Grid_down_time_perc,count(YEAR(today_date)) as cnt_days,today_date FROM Flexi_solar_MFM_daily WHERE DATE(today_date) BETWEEN DATE('2017-01-01') AND DATE('$Current_year-$currentmonth-$Current_day') and MFM_Cumulative='1' and plant_id='$solar_plant_id' group by YEAR(today_date)";
                $rs16=mysqli_query($conn2,$select_Yearly) or die("error 101".mysqli_error($conn2));
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
 
    $Grid_availlabilty_loss_perc1=abs(round(100 - $row16['Grid_down_time_perc'],2));
    $Grid_availlabilty_loss_perc1_ave=round($Grid_availlabilty_loss_perc1,2);
    $Grid_availlabilty_loss_perc1_sum1 += $Grid_availlabilty_loss_perc1_ave;

   
         
          $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART1].'4', number_format($Plant_Inv_availlabilty_loss_perc1_ave,2).'%');
          $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART1].'10', number_format($Grid_availlabilty_loss_perc1_ave,2).'%');

       
          $YEARLYSTART1++;

                $Energy_Export_today='';
                // $Plant_Inv_availlabilty_loss_perc1_ave='';
                $Grid_availlabilty_loss_perc1_ave='';

                }

$Plant_Inv_availlabilty_loss_perc1_ave11=$Plant_Inv_availlabilty_loss_perc_sum11/$yrcnt;
 $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART1].'4', number_format($Plant_Inv_availlabilty_loss_perc1_ave11,2).'%');
 // $Grid_availlabilty_loss_perc1_sum1=$Grid_availlabilty_loss_perc1_sum1;
$Grid_availlabilty_loss_perc1_ave112=$Grid_availlabilty_loss_perc1_sum1/$yrcnt;
          $objPHPExcel->setActiveSheetIndex(2)->setCellValue($alpa[$YEARLYSTART1].'10', number_format($Grid_availlabilty_loss_perc1_ave112,2).'%');

































 $objPHPExcel->getActiveSheet()->mergeCells('A1:C1');
 $objPHPExcel->getActiveSheet()->mergeCells('D1:E1');

 // $objPHPExcel->getActiveSheet()->mergeCells('A2:B2');
 $objPHPExcel->getActiveSheet()->mergeCells('H2:J2');
 $objPHPExcel->getActiveSheet()->mergeCells('K2:M2');
 $objPHPExcel->getActiveSheet()->mergeCells('N2:P2');
 $objPHPExcel->getActiveSheet()->mergeCells('Q2:S2'); 
 $objPHPExcel->getActiveSheet()->mergeCells('A2:C2');
  $objPHPExcel->getActiveSheet()->mergeCells('W2:X3');

 $objPHPExcel->getActiveSheet()->mergeCells('Y2:Y3');
 $objPHPExcel->getActiveSheet()->mergeCells('AA2:'.$MONTHLYMER);
 $objPHPExcel->getActiveSheet()->mergeCells($MONTHLYSTARTLINE1.':'.$MONTHLYMER8);
  $objPHPExcel->getActiveSheet()->mergeCells($alpa[$YEARLYSTART].'2'.':'.$alpa[$YEARLYSTART1].'2');
   $objPHPExcel->getActiveSheet()->mergeCells($alpa[$YEARLYSTART].'8'.':'.$alpa[$YEARLYSTART1].'8');



$objPHPExcel->getActiveSheet()->getStyle($MONTHLYSTARTLINE.':'.$MONTHLYMERFIN)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle($MONTHLYSTARTLINE1.':'.$MONTHLYMERBOLD)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle($alpa[$YEARLYSTART].'2'.':'.$alpa[$YEARLYSTART1].'3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle($alpa[$YEARLYSTART].'8'.':'.$alpa[$YEARLYSTART1].'9')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();




$objPHPExcel->getActiveSheet()->getStyle('A2'.':'.'Y3')->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle('A1'.':'.'E1')->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle($MONTHLYSTARTLINE.':'.$MONTHLYMERFIN1)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($MONTHLYSTARTLINE1.':'.$MONTHLYMERFIN12)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($alpa[$YEARLYSTART].'2'.':'.$alpa[$YEARLYSTART1].'4')->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle($alpa[$YEARLYSTART].'8'.':'.$alpa[$YEARLYSTART1].'10')->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle('A4'.':'.$liz)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));



$objPHPExcel->getActiveSheet()->getStyle($MONTHLYSTARTLINE1.':'.$MONTHLYMERBOLD)->getFont()->setBold(true)->setName('Gisha')->setSize(10);

$objPHPExcel->getActiveSheet()->getStyle($alpa[$YEARLYSTART].'8'.':'.$alpa[$YEARLYSTART1].'9')->getFont()->setBold(true)->setName('Gisha')->setSize(10);
$objPHPExcel->setActiveSheetIndex(2);
$Grid_availlabilty_loss_perc1_sum='';
$Grid_availlabilty_loss_perc1_ave11='';
$Plant_Inv_availlabilty_loss_perc_sum11='';
$Grid_availlabilty_loss_perc1_sum1='';

?>