<?php 
PHPExcel_Cell::setValueBinder( new PHPExcel_Cell_AdvancedValueBinder() );

$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);



$objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);

  $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

     $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getActiveSheet()->setShowGridlines(FALSE);




$objPHPExcel->getActiveSheet()->getStyle('C4:C7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('8')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FDE9D9'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('E4:E7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('G4:G7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('I4:I7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle('M4:M7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('O4:O7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('Q4:Q7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('S4:S7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
// $objPHPExcel->getActiveSheet()->getStyle('7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('K4')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D6E1CF'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle('U8:U9')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('A7:B7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('D7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('F7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('H7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('J7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('L7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('N7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('P7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('R7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('T7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('U7')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF'))))->getAlignment();


 $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setSize(14);
 $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '8DB4E3'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('F2:G2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('J2:K2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FAC090'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('N2:O2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FAC090'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('D11:F11')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99FF33'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('H11')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99FF33'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('J11')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99FF33'))))->getAlignment();



 $objPHPExcel->getActiveSheet()->getStyle('A2:S2')->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
 $objPHPExcel->getActiveSheet()->getStyle('B4:T4')->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
 $objPHPExcel->getActiveSheet()->getStyle('A:T')->getFont()->setBold(true)->setSize(10);
 $objPHPExcel->getActiveSheet()->getStyle('A8:B8')->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
 $objPHPExcel->getActiveSheet()->getStyle('A7:B7')->getFont()->setBold(true)->setName('Arial Unicode MS')->setSize(8);
  $objPHPExcel->getActiveSheet()->getStyle('C8:T8')->getFont()->setBold(true)->setName('Calibri')->setSize(11);
 
$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
                             ->setLastModifiedBy("Hidayath Shaik")
                             ->setTitle("Daily Generation Report Execl Sheet")
                             ->setSubject("Daily Generation Report Execl Sheet")
                             ->setDescription(" Solar Daily Generation Report Execl Sheet")
                             ->setKeywords(" Solar Daily Generation Report Execl Sheet")
                             ->setCategory(" Solar Daily Generation Report Execl Sheet");
                               $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
                                // $objPHPExcel->getActiveSheet()->getColumnDimension('8')->setHeight(15);
                              
                               $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(12);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
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




$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1',' Executive Summary of DGR forDate:'.date("Y-m-d"))
->setCellValue('A2','Sr.No')
->setCellValue('B2','Plant_Details')
->setCellValue('C2','Generation @ Inverter(kWh)')
->setCellValue('E2','Generation 33kV Export')
->setCellValue('G2','Generation Per MW AC')
->setCellValue('I2','Tilt (kWh/m2)')
->setCellValue('K2','PR %')
->setCellValue('M2','CUF %')
->setCellValue('O2','PA %')
->setCellValue('Q2','GA %')
->setCellValue('S2','AC Losess+Aux.Cons.')
->setCellValue('C4','Daily')
->setCellValue('D4','This Month-Till Today')
->setCellValue('E4','Daily')
->setCellValue('F4','This Month-Till Today')
->setCellValue('G4','Daily')
->setCellValue('H4','This Month-Till Today')
->setCellValue('I4','Daily')
->setCellValue('J4','This Month-Till Today')
->setCellValue('K4','Daily')
->setCellValue('L4','This Month-Till Today')
->setCellValue('M4','Daily')
->setCellValue('N4','This Month-Till Today')
->setCellValue('O4','Daily')
->setCellValue('P4','This Month-Till Today')
->setCellValue('Q4','Daily')
->setCellValue('R4','This Month-Till Today')
->setCellValue('S4','Daily')
->setCellValue('T4','This Month-Till Today');

include $Source_path."OpenDb.php";


$row = 7;
$select_Inverter="SELECT SUM(kwh_today) AS kwh_today,plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily
WHERE DATE(today_date) = DATE($rd_date) and plant_id='$solar_plant_id' GROUP BY DATE(today_date) order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
$kwh_today=array();

while($row16=mysqli_fetch_array($rs16))
{
$kwh_today=round($row16['kwh_today'],2);
$COUNT=date('d');

$plant_Inv_down_perc_avg=round($row16['plant_Inv_down_perc_avg'],2);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, 1);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $solar_plant_name);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, number_format($kwh_today));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$row, number_format($plant_Inv_down_perc_avg,2) .'%');

$row = 8;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, 'Total/Average');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $solar_plant_capacity.'kW');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, number_format($kwh_today));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$row, number_format($plant_Inv_down_perc_avg,2) .'%');

$Meter_id='';
$kwh_today='';
    $row++;
    }

$row = 7;
$select_Inverter="SELECT SUM(kwh_today) AS SUM_kwh_today,SUM(plant_Inv_down_perc_avg) AS SUM_plant_Inv_down_perc_avg FROM Flexi_solar_inverters_daily
WHERE MONTH(today_date) = MONTH($rd_date) and plant_id='$solar_plant_id' ";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

    $SUM_kwh_today =$row16['SUM_kwh_today'];
    $COUNT=date('d');

    $SUM_plant_Inv_down +=$row16['SUM_plant_Inv_down_perc_avg'];
    $Plant_Inv_availlabilty_loss=round(($SUM_plant_Inv_down_perc_avg/$COUNT),2);

   

    $Meter_id='';
    $COUNT='';
    $kwh_today='';
    $row++;
    }
    $row = 7;
    $COUNT=date('d');


 $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, number_format($SUM_kwh_today));   
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$row, number_format($Plant_Inv_availlabilty_loss,2) .'%');


$row = 8;
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, number_format(($SUM_kwh_today))); 
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$row, number_format($Plant_Inv_availlabilty_loss,2).'%');

$row = 10;
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row,'Days');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, $COUNT);


$row = 11;
    $ave=round(($SUM_kwh_today/$COUNT),2);
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row,'Dly Avg');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, number_format($ave,2));


$row = 7;
    $select_Irr="SELECT irradiation FROM Flexi_solar_wms_daily
    WHERE DATE(today_date) = DATE($rd_date)  and wms_id='1' and plant_id='$solar_plant_id' order by today_date DESC";
    $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
    while($row16=mysqli_fetch_array($rs16))
    {
    $irr_today_date=$row16['today_date'];
    $irr_date_time=date('dMY', strtotime($irr_today_date));
    $irradiation=round($row16['irradiation'],2);
    $irrarr[$irr_date_time]=$irradiation;
    $irrarr[$irr_date_time]=$irradiation_tilt1;
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row, number_format($irradiation,2));
    
    $row = 8;
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row, number_format($irradiation,2));
        $server_date_time='';
        $Meter_id='';
        $kwh_today='';
        $irradiation='';
        $irradiation_tilt1='';
 
    $row++;
        }


    $row = 7;
    $select_Irr="SELECT SUM(irradiation) AS SUM_IRRIDATION FROM Flexi_solar_wms_daily
    WHERE MONTH(today_date) = MONTH($rd_date)  and wms_id='1' and plant_id='$solar_plant_id' order by today_date DESC";
    $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
    while($row16=mysqli_fetch_array($rs16))
    {
        $COUNT=date('d');

        $irr_today_date=$row16['today_date'];
        $irr_date_time=date('dMY', strtotime($irr_today_date));
        $SUM_IRRIDATION +=round($row16['SUM_IRRIDATION'],2);
        $irrarr[$irr_date_time]=$irradiation;
        $irrarr[$irr_date_time]=$irradiation_tilt1;

       

        $ave1='';
        $server_date_time='';
        $Meter_id='';
        $kwh_today='';
        $irradiation='';
        $irradiation_tilt1='';
        $row++;
        }


    $row = 7;
         $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row, number_format($SUM_IRRIDATION,2));
        
    $row = 8;
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row,number_format($SUM_IRRIDATION,2));

    $row = 10;
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row, 'Days');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row, $COUNT);

    $row = 11;
        $ave1=round(($SUM_IRRIDATION/$COUNT),2);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row,'Dly Avg' );
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row, number_format($ave1,2));

    $row = 7;
        $select_Irr="SELECT SUM(Energy_Export_today) AS Energy_Export_today,Plant_PR,today_date,DC_CUF,Plant_Inv_availlabilty_loss_perc,Grid_availlabilty_loss_perc FROM Flexi_solar_MFM_daily 
    WHERE DATE(today_date) = DATE($rd_date) and MFM_Cumulative='1' and plant_id='$solar_plant_id'";
    $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
    while($row16=mysqli_fetch_array($rs16))
    {
        $mfm_today_date=$row16['today_date'];
        $mfm_date_time=date('dMY', strtotime($mfm_today_date));
        $irr_today=$irrarr[$mfm_date_time];

        $Energy_Export_today=$row16['Energy_Export_today'];
        $PR=$row16['Plant_PR'];
        $CUF=$row16['DC_CUF'];
        $COUNT=date('d');



        if ($row16['Plant_Inv_availlabilty_loss_perc'] <= 100) {
        $Plant_Inv_availlabilty_loss_perc=round(abs(100 - $row16['Plant_Inv_availlabilty_loss_perc']),2);
        }else{
        $Plant_Inv_availlabilty_loss_perc=0;
        }

        if($row16['Grid_availlabilty_loss_perc'] <= 100) {
        $Grid_availlabilty_loss_perc=round(abs(100 - $row16['Grid_availlabilty_loss_perc']),2);
        $Grid_availlabilty_loss_perc=0;
        }   


        $Generation_Per_MW_AC=round(($Energy_Export_today/$solar_plant_capacity),2);

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$row, number_format($Energy_Export_today));
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row, number_format($Generation_Per_MW_AC,2));
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('k'.$row, number_format($PR,2) .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$row, number_format($CUF,2) .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$row, number_format($Plant_Inv_availlabilty_loss_perc,2) .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$row, number_format($Grid_availlabilty_loss_perc,2) .'%');
 
    $row = 8;

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$row, number_format($Energy_Export_today));
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row, number_format($Generation_Per_MW_AC,2));
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('k'.$row, number_format($PR,2) .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$row, number_format($CUF,2) .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$row, number_format($Plant_Inv_availlabilty_loss_perc,2) .'%');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$row, number_format($Grid_availlabilty_loss_perc,2) .'%');

        $Energy_Export_today='';
        $Energy_import_today='';
        $server_date_time='';
        $Meter_id='';
        $kwh_today='';
        $row++;
        }
   

    $row = 7;
    $PR= 0;
    $select_Irr="SELECT SUM(Energy_Export_today) AS SUM_Energy_Export_today,Plant_PR as SUM_Plant_PR,
DC_CUF AS SUM_CUF,Plant_Inv_availlabilty_loss_perc AS SUM_Plant_Inv_availlabilty_loss_perc,
Grid_availlabilty_loss_perc AS SUM_Grid_availlabilty_loss_perc,today_date FROM Flexi_solar_MFM_daily WHERE 
MONTH(today_date) = MONTH($rd_date) and plant_id=$solar_plant_id AND MFM_Cumulative = '1' GROUP BY DATE(today_date)";
     $rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
     while($row16=mysqli_fetch_array($rs16))
     {
         $mfm_today_date=$row16['today_date'];
         $mfm_date_time=date('dMY', strtotime($mfm_today_date));
         $irr_today=$irrarr[$mfm_date_time];
         $COUNT=date('d');
         $SUM_Energy_Export_today +=round($row16['SUM_Energy_Export_today'],2);
 
            $PR +=$row16['SUM_Plant_PR'];
            $cuf +=$row16['SUM_CUF'];
            $plant_loss +=$row16['SUM_Plant_Inv_availlabilty_loss_perc'];
            $grid_loss +=$row16['SUM_Grid_availlabilty_loss_perc'];

            $SUM_CUF =round($row16['SUM_CUF']/$COUNT,2);
     
            $Grid_availlabilty_loss +=round(($Grid_availlabilty_loss_perc/$COUNT),2);
            $Plant_Inv_availlabilty_loss +=round(($SUM_Plant_Inv_availlabilty_loss_perc/$COUNT),2);
            $server_date_time=date('d-M-Y', strtotime($mfm_today_date));


           

            $Energy_import_today='';
            $server_date_time='';
            $Meter_id='';
            $kwh_today='';
            $row++;
            }

      $TOTAL_Generation_Per_MW_AC +=round(($SUM_Energy_Export_today/$solar_plant_capacity),2);


      $row = 7;

      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$row, number_format($SUM_Energy_Export_today));
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, number_format($TOTAL_Generation_Per_MW_AC,2));
        
      $row = 8;
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$row, number_format($SUM_Energy_Export_today));
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, number_format($TOTAL_Generation_Per_MW_AC,2));

       $row = 10;
            
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row, 'Days');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, $COUNT);

            $row = 11;
            
            $ave1=round(($TOTAL_Generation_Per_MW_AC/$COUNT),2);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row,'Dly Avg' );
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, number_format($ave1,2));
            




// exit();

    $SUM_Plant_PR=$PR/$COUNT;
    $SUM_CUF=$cuf/$COUNT;
    $Plant_Inv_availlabilty_loss=$plant_loss/$COUNT;
    $Grid_availlabilty_loss_perc=$grid_loss/$COUNT;


            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L7', number_format($SUM_Plant_PR,2)  .'%');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N7', number_format($SUM_CUF,2) .'%');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P7', number_format((100 - $Plant_Inv_availlabilty_loss),2) .'%');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('R7', number_format(100 -$Grid_availlabilty_loss_perc,2) .'%');

            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L8', number_format($SUM_Plant_PR,2)  .'%');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N8', number_format($SUM_CUF,2) .'%');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P8', number_format((100 - $Plant_Inv_availlabilty_loss),2) .'%');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('R8', number_format(100 -$Grid_availlabilty_loss_perc,2) .'%');











            $objPHPExcel->getActiveSheet()->mergeCells('A8:A9');
            $objPHPExcel->getActiveSheet()->mergeCells('B8:B9');
            $objPHPExcel->getActiveSheet()->mergeCells('C8:C9');
            $objPHPExcel->getActiveSheet()->mergeCells('D8:D9');
            $objPHPExcel->getActiveSheet()->mergeCells('E8:E9');
            $objPHPExcel->getActiveSheet()->mergeCells('F8:F9');
            $objPHPExcel->getActiveSheet()->mergeCells('G8:G9');
            $objPHPExcel->getActiveSheet()->mergeCells('H8:H9');
            $objPHPExcel->getActiveSheet()->mergeCells('I8:I9');
            $objPHPExcel->getActiveSheet()->mergeCells('J8:J9');
            $objPHPExcel->getActiveSheet()->mergeCells('K8:K9');
            $objPHPExcel->getActiveSheet()->mergeCells('L8:L9');
            $objPHPExcel->getActiveSheet()->mergeCells('M8:M9');
            $objPHPExcel->getActiveSheet()->mergeCells('N8:N9');
            $objPHPExcel->getActiveSheet()->mergeCells('O8:O9');
            $objPHPExcel->getActiveSheet()->mergeCells('P8:P9');
            $objPHPExcel->getActiveSheet()->mergeCells('Q8:Q9');
            $objPHPExcel->getActiveSheet()->mergeCells('R8:R9');
            $objPHPExcel->getActiveSheet()->mergeCells('S8:S9');
            $objPHPExcel->getActiveSheet()->mergeCells('T8:T9');



            $objPHPExcel->getActiveSheet()->mergeCells('C2:C3');
            $objPHPExcel->getActiveSheet()->mergeCells('C4:C6');
            $objPHPExcel->getActiveSheet()->mergeCells('D4:D6');

            $objPHPExcel->getActiveSheet()->mergeCells('E2:E3');
            $objPHPExcel->getActiveSheet()->mergeCells('E4:E6');
            $objPHPExcel->getActiveSheet()->mergeCells('F4:F6');

            $objPHPExcel->getActiveSheet()->mergeCells('G2:G3');
            $objPHPExcel->getActiveSheet()->mergeCells('G4:G6');
            $objPHPExcel->getActiveSheet()->mergeCells('H4:H6');

            $objPHPExcel->getActiveSheet()->mergeCells('I2:I3');
            $objPHPExcel->getActiveSheet()->mergeCells('I4:I6');
            $objPHPExcel->getActiveSheet()->mergeCells('J4:J6');

            $objPHPExcel->getActiveSheet()->mergeCells('K2:K3');
            $objPHPExcel->getActiveSheet()->mergeCells('K4:K6');
            $objPHPExcel->getActiveSheet()->mergeCells('L4:L6');

            $objPHPExcel->getActiveSheet()->mergeCells('M2:M3');
            $objPHPExcel->getActiveSheet()->mergeCells('M4:M6');
            $objPHPExcel->getActiveSheet()->mergeCells('N4:N6');

            $objPHPExcel->getActiveSheet()->mergeCells('O2:O3');
            $objPHPExcel->getActiveSheet()->mergeCells('O4:O6');
            $objPHPExcel->getActiveSheet()->mergeCells('P4:P6');

            $objPHPExcel->getActiveSheet()->mergeCells('Q2:Q3');
            $objPHPExcel->getActiveSheet()->mergeCells('Q4:Q6');
            $objPHPExcel->getActiveSheet()->mergeCells('R4:R6');

            $objPHPExcel->getActiveSheet()->mergeCells('S2:S3');
            $objPHPExcel->getActiveSheet()->mergeCells('S4:S6');
            $objPHPExcel->getActiveSheet()->mergeCells('T4:T6');



            $objPHPExcel->getActiveSheet()->mergeCells('C2:D2');
            $objPHPExcel->getActiveSheet()->mergeCells('E2:F2');
            $objPHPExcel->getActiveSheet()->mergeCells('G2:H2');
            $objPHPExcel->getActiveSheet()->mergeCells('I2:J2');
            $objPHPExcel->getActiveSheet()->mergeCells('K2:L2');
            $objPHPExcel->getActiveSheet()->mergeCells('M2:N2');
            $objPHPExcel->getActiveSheet()->mergeCells('O2:P2');
            $objPHPExcel->getActiveSheet()->mergeCells('Q2:R2');
            $objPHPExcel->getActiveSheet()->mergeCells('S2:T2');
            $objPHPExcel->getActiveSheet()->mergeCells('A2:A6');
            $objPHPExcel->getActiveSheet()->mergeCells('B2:B6');

            $objPHPExcel->getActiveSheet()->mergeCells('A1:T1');
            $objPHPExcel->getActiveSheet()->setTitle(date('F-T'));


$objPHPExcel->getActiveSheet()->getStyle("A2:T9")->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));
$objPHPExcel->getActiveSheet()->getStyle("C10:J11")->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));




$objPHPExcel->getActiveSheet()->getStyle('C7:D7')->getNumberFormat()
    ->setFormatCode(
        '0'
    );


?>