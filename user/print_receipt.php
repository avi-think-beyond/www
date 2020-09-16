<?php
session_start();
include('../connection.php');
include_once('../class/class.transaction.php');
include_once('../class/class.actors.php');
$transactionObj = new transaction();
if(isset($_POST['sale']))
{
	 $Invoice		=	$_POST['invoice'];
	 $userid        =   $_SESSION['uid'];
	 $shopid        =   $_SESSION['shop'];
	 $guest_name    =   $_POST['customer_name'];
	 $guest_mobile  =   $_POST['customer_mobile'];
	 
	 
	 $checkmobile=mysqli_query($conn,"SELECT * FROM guest_user WHERE guest_mobile='$guest_mobile' ") or die(mysqli_error($conn));
	 if (mysqli_affected_rows($conn)) 
	 {
	 	$row1=mysqli_fetch_assoc($checkmobile);
	 	$guest_id=$row1['ID'];
	 }
	 else
	 {
		$sql=mysqli_query($conn,"INSERT INTO guest_user(guest_name,guest_mobile) VALUES('$guest_name','$guest_mobile')") or die(mysqli_error($conn));
		if(mysqli_affected_rows($conn))
		{
		   $guest_id   =   mysqli_insert_id($conn);
		}
	 }
	 $payment   =   $_POST['payment'];
	 $pro_id1   =   $_POST['pro_id'];
	 $pro_name  =   $_POST['pro_name'];
	 $qty1      =   $_POST['qty'];
	 $mrp1      =   $_POST['mrp'];
	 $discount1 =   $_POST['discount'];
	 $total1    =   $_POST['total'];
	 $tot       = sizeof($pro_name);
	 $guest_type=   Actors::GUEST ;
	 $from_actor_type   =   $_POST['fromActorType'];
	 $from_actor_id     =   $_POST['fromActorid'];
	 
	 $data=json_encode($_POST);
	 $query="INSERT INTO sales_data(user,shop,guest_id,data) VALUES('$userid','$shopid','$guest_id','$data')";
	 mysqli_query($conn,$query) or die(mysqli_error($conn));
	 // die();
	 
}
?>

<html>
    <head>
        <title>
            received
        </title>
        <link rel="stylesheet" href="assets/css/app.css">
       <style>
           .b
           {
               border-bottom:dashed 1px #000;
           }
           span
           {
               color:#000;
           }
       </style>
   
    </head>

    <body onload="startTime()" >
        <br>
        <div class="row" >
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4" style="background-color:#fff;" id="printableArea">
              <div class="col-md-12">   
                <div class="row">
                    <div class="col-md-12 b" >
                        <center>
                            <img src="assets/img/logo.png">
                            <h4>Retail Invoice</h4>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 b">
                        <div class="row">
                             <div class="col-md-3">
                                 <span>Memo # </span>
                             </div>
                             <div class="col-md-2">
                                <span><?php echo rand(10000,99999);?></span>
                             </div>
                             <div class="col-md-2">
                              
                             </div>
                             <div class="col-md-2">
                               <span id="txt" >	</span>
                             </div>
                             <div class="col-md-3">
                                <span>
                                   <script>
        							  var currentDate = new Date(),
        							      day = currentDate.getDate(),
        							      month = currentDate.getMonth() + 1,
        							      year = currentDate.getFullYear();
        							  document.write(day + "/" + month + "/" + year)
							       </script>
							     </span>
                             </div>
                           
                        </div>
                        <!--<div class="row">-->
                        <!--     <div class="col-md-3">-->
                        <!--       <span>User Name:</span>-->
                        <!--     </div>-->
                        <!--     <div class="col-md-9">-->
                        <!--        <span><?php //echo $_SESSION['uname'];; ?></span>-->
                        <!--     </div>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 b">
                        <center>
                            <h6 style="color:#000;"><?php echo $guest_name; ?></h6>
                        </center>
                    </div>
                </div>
                
               <div class="row">
                    <div class="col-md-12 b" >
                        <div class="row b" style="text-align:center;">
                             <div class="col-md-1">
                                 <span><b>Sr.</b></span>
                             </div>
                             <div class="col-md-3">
                                <span><b>Product</b></span>
                             </div>
                             <div class="col-md-1">
                               <span ><b>Qty</b></span>
                             </div>
                             <div class="col-md-2">
                                <span><b>Rate</b></span>
							    
                             </div>
                             <div class="col-md-1">
                                <span><b>Dis</b></span>
							    
                             </div>
                             <div class="col-md-4">
                                <span><b>Amount</b></span>
							    
                             </div>
                           
                        </div>
                        <?php 
                        $j=1;
                for($i=0;$i<$tot;$i++) 
                  {
                    $pro_id=$pro_id1[$i];
                    $product_name=$pro_name[$i];
                    $qty=$qty1[$i];
                    $mrp=$mrp1[$i];
                    $discount=$discount1[$i];
                    $subtotal=$total1[$i];
                    $sum+=$subtotal;
                    $transactionObj->transactionDetails($from_actor_type,$from_actor_id,$guest_type,$guest_id,$pro_id,$qty);
                    // $query=mysqli_query($conn,"INSERT INTO transaction_details(from_actor,from_actor_id,to_actor,to_actor_id,product_id,qty)
                    // VALUES('$from_actor_type','$from_actor_id','$guest_type','$guest_id','$pro_id','$qty')") or die(mysqli_error($conn));

                  
                ?>
                        <div class="row" style="text-align:center;">
                             <div class="col-md-1">
                                 <span><?php echo $j; ?></span>
                             </div>
                             <div class="col-md-3">
                                <span><?php echo $product_name; ?></span>
                             </div>
                             <div class="col-md-1">
                               <span><?php echo $qty; ?></span>
                             </div>
                             <div class="col-md-2">
                                <span><?php echo $mrp; ?></span>
							    
                             </div>
                             <div class="col-md-1">
                                <span><?php echo $discount; ?>%</span>
							    
                             </div>
                             <div class="col-md-4">
                                <span><?php echo $subtotal; ?></span>
							    
                             </div>
                           
                        </div>
                        <?php $j++;} ?>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 b">
                        <div class="row">
                             <div class="col-md-2">
                                 <span><b>Total:</b></span>
                             </div>
                             <div class="col-md-3">
                                <span><?php echo $sum; ?></span>
                             </div>
                             <div class="col-md-1">
                               <span><b>Qty:</b></span>
                             </div>
                             <div class="col-md-1">
                                <span>
                                  <?php echo $tot;?>
							     </span>
                             </div>
                             <div class="col-md-2">
                               <span><b>Amount:</b></span>
                             </div>
                             <div class="col-md-3">
                              <span> <?php echo $sum; ?></span>
                             </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input id="number" type="hidden" value="<?php echo round($sum); ?>" />
                             <span id="words"></span>
                            </div>
                        </div>
                         <div class="row">
                             <div class="col-md-3">
                                 <span><b>Tender:</b></span>
                             </div>
                             <div class="col-md-6">
                                
                             </div>
                             
                             <div class="col-md-3">
                              <!--<span> <?php //echo $total; ?></span>-->
                             </div>
                        </div>
                        <div class="row">
                             <div class="col-md-3">
                                 <span><b>Pay Mode:</b></span>
                             </div>
                             <div class="col-md-6">
                                <span><?php echo $payment; ?></span>
                             </div>
                             
                             <div class="col-md-3">
                              <!--<span> <?php echo $total; ?></span>-->
                             </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br>
            
            </div> 
            <div class="col-md-4">
                <button onclick="printDiv('printableArea')" type="button" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>PRINT</button>
            </div>
        </div>
        
        <script type="text/javascript">
		function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
	</script>
         <script  type="text/javascript">
    	function onlyNumbers(evt) {
    var e = event || evt; // For trans-browser compatibility
    var charCode = e.which || e.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}


    </script>

        
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
       	<script type="text/javascript">
		var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

function inWords (num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
    return str;
}

// document.getElementById('number').onkeyup = function () {
    document.getElementById('words').innerHTML = inWords(document.getElementById('number').value);
//};
	</script>
    </body>
</html>