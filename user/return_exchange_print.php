<?php
session_start();
date_default_timezone_set('Asia/Calcutta'); 
include('../connection.php');
include_once('../class/class.transaction.php');
include_once('../class/class.actors.php');
$transactionObj = new transaction();
if(isset($_POST['sale']))
{
     $Invoice       =   $_POST['invoice'];
     $userid        =   $_SESSION['uid'];
     $shopid        =   $_SESSION['shop'];
     $guest_name    =   $_POST['customer_name'];
     $guest_mobile  =   $_POST['customer_mobile'];
     $total_amt     =   $_POST['total_amt'];
     $receive_amt   =   $_POST['receive_amt'];
     $change_amt    =   $_POST['change_amt'];
     $cash          =   $_POST['cash'];
     //$payment_type  =   $_POST['payment_type'];
     $credit_debit  =   $_POST['credit_debit'];

    $checkmobile=mysqli_query($conn,"SELECT * FROM guest_user WHERE guest_mobile='$guest_mobile' ") or die(mysqli_error($conn));
     if (mysqli_affected_rows($conn)) 
     {
        $row1=mysqli_fetch_assoc($checkmobile);
        $guest_id=$row1['ID'];
     }
     
     //$payment   =   $_POST['payment'];
     $pro_id1   =   $_POST['pro_id'];
     $pro_name  =   $_POST['pro_name'];
     $qty1      =   $_POST['qty'];
     $mrp1      =   $_POST['mrp'];
     $discount1 =   $_POST['discount'];
     $discount_type =   $_POST['discount_type'];
     $total1    =   $_POST['total'];
     $pro_code1 =   $_POST['pro_code'];
     $gst1      =   $_POST['gst'];
     $hsn1      =   $_POST['hsn'];
     $return_qty1 = $_POST['return_qty'];
     $tot       = sizeof($pro_name);
    
     $from_actor_type   =   Actors::GUEST;
     $from_actor_id     =   $guest_id;
     $to_actor_type     =   Actors::SHOP;
     $to_actor_id       =   $shopid;
     
     $data=json_encode($_POST);
     
     $generated_on_date=date('Y-m-d');
     $valid_till_date=$NewDate=Date('Y-m-d', strtotime('+10 days'));
     $credit_note=rand(100000,999999);
      $query="INSERT INTO credit_note(invoice_id,credit_note_id,amount,generated_on_date,valid_till_date,data) VALUES('$Invoice','$credit_note','$total_amt','$generated_on_date','$valid_till_date','$data')";
      mysqli_query($conn,$query) or die(mysqli_error($conn));
     // die();
     
}
?>

<!DOCTYPE html>

<html>

<head>

	<title></title>

<style>

 * {
    font-size: 12px;
    font-family: 'Times New Roman';
    }
th,
table {
    /*border-top: 1px solid black;*/
    border-collapse: collapse;
    border-bottom:dashed 1px #000;
}
.dash {
    /*border-top: 1px solid black;*/
    border-collapse: collapse;
    border-bottom:dashed 1px #000;
}
td.description,
th.description {
    width: 75px;
    max-width: 75px;
}
td.quantity,
th.quantity {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}
td.price,
th.price {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}
.centered {
    text-align: center;
    align-content: center;
    font-size: 18px;
}

.centered1 {
    text-align: center;
    align-content: center;
}
.ticket {
            /*width: 155px;*/
            /*max-width: 155px;*/
            background-color: #fff;
        }

img {

    max-width: inherit;

    width: inherit;

    }

@media print {

    .hidden-print,

    .hidden-print * {
                        display: none !important;
                    }
              }
 .b{
       border-bottom:dashed 1px #000;
   }
span{
       color:#000;
   }
</style>

</head>

<body onload="startTime()">

	<center> <img src="assets/img/logo.png" alt="Logo" class="centered">     

     <p>Saroj Enterprise-Dombivali<br>
     	Shop No.5 Savita Apartmentm<br>
     	Kelkar Road,Dombivali(E).<br>
     	Dist.Thane.<br>
     	Phone No:NA<br>
     	GSTIN: 27AJQPJ8511Q1ZE</p>
      	<h1>CREDIT NOTE</h1>
      	Invoice No 	: <?php echo $Invoice; ?><br>
      	GST Ref No. A34P1920-0001477<br>
      	Date 	 	: <?php echo date('d-m-Y h:i A'); ?>

<table>
				        <thead>
                    <tr>                        
                        <th colspan="7"></th>
                    </tr>
                </thead>
				        <thead>
                    <tr>
                        <th class="quantity">Sn</th>
                        <th class="description" colspan="2">Barcode Item Name</th>
                        <th class="price">QTY</th>
                        <th class="price">PCS <br>HSN</th>
                        <th class="price">Rate</th>
                        <th class="description">Amount</th>
                    </tr>
                </thead>
                <tbody>

                        <?php 
                        $j=1;
                        $al_gst=0;$cgst=0;$sgst=0;$sum=0;
                for($i=0;$i<$tot;$i++) 
                  {
                    $pro_id=$pro_id1[$i];
                    $gst=$gst1[$i];
                    $hsn=$hsn1[$i];
                    $product_name=$pro_name[$i];
                    $qty=$qty1[$i];
                    $mrp=$mrp1[$i];
                    $return_qty = $return_qty1[$i];
                    $after_return_qty= $qty-$return_qty;
                     $discount=$discount1[$i];
                    $subtotal=$mrp * $after_return_qty;
                    
                    
                    $pro_code=$pro_code1[$i];
                    $sum+=$subtotal;
                   $transactionObj->transactionDetails($from_actor_type,$from_actor_id,$to_actor_type,$to_actor_id,$pro_id,$return_qty);
                    

                  
                ?>
                	  <tr>
                        <td class="centered1 dash"><?php echo $j; ?></td>
                        <td class="centered1 dash" colspan="2"><?php echo $product_name; ?><br><?php echo $pro_code; ?></td>
                        <td class="centered1 dash"><?php echo $after_return_qty; ?></td>
                        <td class="centered1 dash"><?php echo $hsn; ?></td>
                        <td class="centered1 dash"><?php echo $mrp; ?></td>
                        <td class="centered1 dash"><?php echo $subtotal; ?></td>
                    </tr>
                    <?php $j++;} ?>
                </tbody>

                <thead>
                	<tr>
                		<th>Total:</th>
                		<th></th>
                		<th></th>
                		<th><?php echo $tot;  ?></th>
                		<th></th>
                		<th></th>
                		<th>(<?php echo $sum; ?>)</th>
                	</tr>
                </thead>

                <tbody>
                	<tr>
                		<td>Balance</td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td class="centered1"><?php echo $sum; ?></td>
                	</tr>

                	<tr class="dash">
                		<td style="font-weight: bold;" colspan="3">Net Payable</td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td class="centered1" style="font-weight: bold;"><?php echo  $sum; ?></td>
                	</tr>
                </tbody>

                

                <tbody>

                	<tr>
                		<td style="font-weight: bold;" colspan="3">Terms & Condition</td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                	</tr>

                	<tr>
                		<td colspan="3" style="font-weight: bold;">Exchange Details</td>               	
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                	</tr>

                	<tr><td colspan="7">(1) Time 1:00 pm to 4:00 pm.</td></tr>
                	<tr><td colspan="7">(2) Exchange Only Monday to Friday.</td></tr>
                	<tr><td colspan="7">(3) No Guarantee for Silk Fabrics.</td></tr>
                	<tr><td colspan="7">(4) First dry Clean Any.</td></tr>
                	<tr><td colspan="7">(5) Party wear fabrics.</td></tr>
                	<tr><td colspan="7">(6) No Exchange without Bill & Price Tag.</td></tr>
                	<tr><td colspan="7">(7) No Guarantee for Color & Zari.</td></tr>
                	<tr><td colspan="7">(8) Exchange withing 15 Days Only.</td></tr>

                </tbody>
</table>

			<h1 style="font-weight: bold;">THANK YOU PLEASE VISIT AGAIN</h1>
      <?php
          
         echo $barcode_img= '<img class="barcode" alt="'.$Invoice.'" src="barcode.php?text='.$Invoice.'&codetype=code128&orientation=horizontal&size=20&print=true"/>';

      ?>
			

</center>
<br>
<center>
<button id="btnPrint" class="hidden-print btn btn-success">Print</button>
<a href="sale_product.php"><button>Close</button></a>
</center>
</body>
</html>

<script>

            function startTime() {

              var today = new Date();

              var h = today.getHours();

              var m = today.getMinutes();

              var s = today.getSeconds();

              m = checkTime(m);

              s = checkTime(s);

              var suffix = "AM";

            	if (h >= 12) {

                suffix = "PM";

                h = h - 12;

            	}

            	if (h == 0) {

            	 h = 12;

            	}

              document.getElementById('txt').innerHTML =

              h + ":" + m + ":"+suffix;

              var t = setTimeout(startTime, 500);

            }

            function checkTime(i) {

              if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10

              return i;

            }

       </script>



        <script>

			const $btnPrint = document.querySelector("#btnPrint");

			$btnPrint.addEventListener("click", () => {

			window.print();

			});

        </script>