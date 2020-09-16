<?php 
session_start();
error_reporting(null);
include 'sidebar.php';?>
<?php 
require('../connection.php');
include_once('../class/class.actors.php');
 $_SESSION['uid'];
 $_SESSION['shop'];
 $dt=date('m-y');
 $invoice='JG/'.$dt.'/'.rand(100000,9999999);
?>
<style type="text/css">
   .fes
   {
   border: none;
   overflow:;
   height:auto;
   background-color: #fff;
   box-shadow: #8392a9 2px 0px 15px 2px;
   border-left: 6px solid  #336b18;
   }
   .sretxt
   {   
   width: 83%;
   height: 32px;
   border: none;
   background: none;
   font-size: 18px;
   padding: 10px;
   }
   .la
   {
   font-size: 13px;
   color:#154f4f;
   }
   .le
   {
   font-size: 12px;
   font-weight: normal;
   /* background-color: #03a9f4; */
   background-image: linear-gradient(#315b1c, #40881d);
   border: #ddd 1px solid;
   padding-top: 3px;
   padding-bottom: 6px;
   margin-bottom: 0px;
   border-radius: 6px;
   text-align: center;
   width: 40%;
   color: #fff;
   }
</style>
<form id="myform" method="POST" action="print.php">

   <div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
   <div class="container-fluid animatedParent animateOnce">
      <div class="tab-content my-3" id="v-pills-tabContent">
         <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
             <div class="row">
                <div class="col-md-2" style="background-color:#234b0f;color:#fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 7px solid #478828;">
                    
                        <i class="icon-shopping-cart2 s-15"></i>
                        <span class="s-8">Sale Product</span>
                    
                </div>
                <div class="col-md-7">
                </div>
                <div class="col-md-3">
                           
                <input type="text" id="search_data" class="form-control" placeholder="Scan Barcode...">
                            
                </div>
                   
            
            </div>
            <div class="row my-3">
               <div class="col-md-12">
                  
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Right Sidebar -->
    <center>
         <legend class="le">Sale Product</legend>
      </center>
   <div class="col-md-12 fes">
      
        <br>
      <div class="col-md-12 table-responsive">
         <table id="success" class="table table-striped  table-hover table-bordered r-0" style="text-align: center; ">
            <thead>
               <tr>
                  
                  <th>Product Name</th>
                  <th>Type</th>
                  <th>Brand</th>
                  <th>Material</th>
                  <th>Size</th>
                  <th>Colour</th>
                  <th>Qty</th>
                  <th>MRP</th>
                  <th>Discount</th>
                  <th>Total</th>
                  <th>Remove</th>
               </tr>   
            </thead>
           <tbody style="font-size: 12px;" id="tbody">
               
           </tbody>
         </table>
      </div>
      <br>
   </div>
   <br>
  

   <div class="col-md-12">
      <div class="row">
         <div class="col-md-4">
            
         </div>
         <div class="col-md-3">
         </div>
         <div class="col-md-5">
             <div class="row" style="margin-bottom: 5px;">
                <div class="col-md-4 la">
                    <label>Subtotal</label>
                </div>   
               <div class="col-md-8"> 
                  <input type="text" readonly="" id="subtotal" class="form-control" style="height: 28px;"  name="sbtotal" value="0" required>  
               </div>
               </div>
               <div class="row" style="margin-bottom: 5px;">
                <div class="col-md-4 la">
                    <label>Discount Type</label>
                </div>   
               <div class="col-md-8"> 
                  <select class="form-control" id="discount_type" name="discount_type">
                      <option disabled selected>Select Discount type</option>
                      <option value="%">%</option>
                      <option value="Rs">Rs</option>
                  </select>
               </div>
               </div>
                <div class="row" style="margin-bottom: 5px;">
                <div class="col-md-4 la">
                    <label>Discount</label>
                </div>   
               <div class="col-md-8"> 
                  <input type="text"  class="form-control" style="height: 28px;" id="discount" placeholder="Enter Discount" name="discount" >  
                 
               </div>
               </div>
               
               <div class="row" style="margin-bottom: 5px;">
                   <div class="col-md-4 la">
                       <label>Total Amount</label>
                   </div>
                    <div class="col-md-8"> 
                        <input type="text"  class="form-control" style="height: 28px;" id="total_amt" placeholder="Total Amount" name="total_amt" required>  
                    </div>
               </div>
               
              <div class="row" style="margin-bottom: 5px;"> 
                   <div class="col-md-4 la">
                        <label>Receive Amount</label>
                   </div>
                   <div class="col-md-8"> 
                  <input type="text"  class="form-control" style="height: 28px;" id="receive_amt" placeholder="Receive Amount" name="receive_amt" >  
               </div>
              </div>
              
                <div class="row" style="margin-bottom: 5px;">
                   <div class="col-md-4 la">
                         <label>Return Amount</label>
                   </div>
                   <div class="col-md-8"> 
                  <input type="text"  class="form-control" style="height: 28px;" id="change_amt" placeholder="Return Amount" name="change_amt" >   
               </div>
              </div>
              
                <input type="hidden" name="fromActorType" value="<?php echo Actors::SHOP ;?>">
                  <input type="hidden" name="fromActorid" value="<?php echo $_SESSION['shop'] ;?>">
                  <input type="hidden" name="invoice" value="<?php echo $invoice; ?>">
                  
               <div class="row" style="margin-bottom: 5px;">
                   <div class="col-md-4 la">
                         <label>Customer Name</label>
                   </div>
                   <div class="col-md-8"> 
                  <input type="text"  class="form-control" style="height: 28px;" placeholder="Enter Name" name="customer_name" id="customer_name" required>   
                 

               </div>
              </div>
               
                <div class="row" style="margin-bottom: 5px;">
                   <div class="col-md-4 la">
                         <label>Customer Phone No.</label>
                   </div>
                   <div class="col-md-8"> 
                 <input type="number"  class="form-control" style="height: 28px;" placeholder="Enter Phone no." name="customer_mobile" id="customer_mobile" required>   
               </div>
              </div>
               <!--<div class="row" style="margin-bottom: 5px;">-->
               <!-- <div class="col-md-4 la">-->
               <!--     <label>Payment Type</label>-->
               <!-- </div>   -->
               <!--<div class="col-md-8"> -->
               <!--   <select class="form-control" id="payment_type" name="payment_type">-->
               <!--       <option disabled selected>Select Payment type</option>-->
               <!--       <option value="cash">Cash</option>-->
               <!--       <option value="card">Credit / Debit Card</option>-->
               <!--   </select>-->
               <!--</div>-->
               <!--</div>-->
               <div class="row" style="margin-bottom: 5px;" id="cashdiv">
                   <div class="col-md-4 la">
                         <label>Cash</label>
                   </div>
                   <div class="col-md-8"> 
                 <input type="number" class="form-control" style="height: 28px;" placeholder="Enter Amount" id="cash" name="cash" >  
               </div>
              </div>
              
              <div class="row" style="margin-bottom: 5px;" id="carddiv">
                   <div class="col-md-4 la">
                         <label>Credit / Debit Card</label>
                   </div>
                   <div class="col-md-8"> 
                 <input type="number"  class="form-control" style="height: 28px;" placeholder="Enter Amount" name="credit_debit" id="credit_debit"  >
               </div>
             
              </div>
              
              <div class="row" style="margin-bottom: 5px;display:none;" id="trans">
                 <!--  <div class="col-md-4 la">
                      
                   </div>
                  <div class="col-md-8">
                  <input type="text"  class="form-control" style="height: 28px;" placeholder="Enter Transaction Id" id="transaction_id"  name="transaction_id">  
               </div> -->
               
               
              </div>
              
              <div class="row" style="margin-bottom: 5px;">
                   <div class="col-md-4 la">
                      
                   </div>
                   <div class="col-md-8"> 
                    <button type="submit" class="btn btn-danger btn-lg r-5" name="sale" style="height: 34px;background-image: linear-gradient(#137937, #267b1c);font-weight: bold;  font-size: 13px; text-align: center;"><i class="icon-documents4 mr-2"></i>Sale</button>
        
               </div>
               
               
              </div>
            
             
            </div>
         </div>
      </div>
   </div>
   
</form>
<!--/#app -->
<script src="assets/js/app.js"></script>
<?php include 'footer.php'?>

<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>

 <script type="text/javascript">
     var prodObjects = {};
    var count = 1;
    var barcodeArr = [];
    function tableData(prodObjects){
        
        var html = "";
        for(var prod in prodObjects){
            var qty = getBarcodeCount(prodObjects[prod]['prod_data']['product_code']);
            console.log(prodObjects[prod]);
            var mrp = prodObjects[prod]['prod_data']['mrp'];
            var discount = prodObjects[prod]['prod_data']['discount'];
            var sum =  (qty * mrp);
            var total_sum = sum - (sum * discount/100);
           
            if($("#prod_"+prod).length){
                console.log("row already exist");
                if(qty > prodObjects[prod]['a_qty'] || qty > prodObjects[prod]['prod_data']['qty']){
                  alert('Stock Is Empty...!');
                  return false;
                }
                //$("#qty_"+prod).text(qty);
                $("#qt_"+prod).val(qty);
                $("#qty_input_"+prod).val(qty);
                $('#total_input_'+prod).val(total_sum);
                $("#total_"+prod).text(total_sum);
                
            }else{
              if(qty > prodObjects[prod]['a_qty'] || qty > prodObjects[prod]['prod_data']['qty']){
                  alert('No Stock Available...!');
                  return false;
                }
            html = '<tr id="prod_'+prod+'">'
            
            +'<td>'+prodObjects[prod]['prod_data']['product_cat']+'<input type="hidden" name="pro_id[]" value="'+prodObjects[prod]['prod_data']['prod_id']+'"><input type="hidden" name="pro_name[]" value="'+prodObjects[prod]['prod_data']['product_cat']+'"><input type="hidden" name="pro_code[]" class="barcode" value="'+prodObjects[prod]['prod_data']['product_code']+'"><input type="hidden" name="gst[]" value="'+prodObjects[prod]['prod_data']['gst']+'"><input type="hidden" name="hsn[]" value="'+prodObjects[prod]['prod_data']['hsn']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['subProductName']+'<input type="hidden" name="sub_pro_name[]" value="'+prodObjects[prod]['prod_data']['subProductName']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['vendor_name']+'<input type="hidden" name="vendor_name[]" value="'+prodObjects[prod]['prod_data']['vendor_name']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['material']+'<input type="hidden" name="material[]" value="'+prodObjects[prod]['prod_data']['material']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['size']+'<input type="hidden" name="size[]" value="'+prodObjects[prod]['prod_data']['size']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['color_name']+'<input type="hidden" name="color_name[]" value="'+prodObjects[prod]['prod_data']['color_name']+'"></td>'
            +'<td id="qty_'+prod+'"><input type="number" name="qty[]" id="qty_input_'+prod+'" value="'+qty+'" class="form-control get_qty" min="1" onkeyup="get_qty()"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['mrp']+'<input type="hidden" name="mrp[]" value="'+prodObjects[prod]['prod_data']['mrp']+'" class="mrp"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['discount']+'<input type="hidden" name="discount[]" value="'+prodObjects[prod]['prod_data']['discount']+'"></td>'
            +'<td class="totalAmt" id="total_'+prod+'">'+total_sum+'</td><input type="hidden" name="total[]" id="total_input_'+prod+'" value="'+total_sum+'" class="form-control btn1">'
            +'<td><a href="" class="btn btn-danger"><i class="icon-remove"></i></a></td>'
            +'</tr>';                
            $("#tbody").append(html);
            $('#search_data').val('');
            }

        }
        var subtotalAmt = $("input[name='total[]']")
              .map(function(){return $(this).val();}).get();
        var sumAmt = subtotalAmt.reduce(function(a, b) { return parseFloat(a) + parseFloat(b); }, 0);
        $("#subtotal").val(sumAmt.toFixed(2));
         $("#total_amt").val(sumAmt.toFixed(2));
    }


    function getBarcodeCount(barcode){
        count = 0;
        for(var i = 0; i < barcodeArr.length; i++){
            if(barcodeArr[i] == barcode){
                count++;
            }
        }
        return count;
    }
    count=1;
    $(document).ready(function(){
        // $('#search_data').unbind();
        $('#search_data').keypress(function(e)
        {
        if(e.which == 13)
         {
            console.log(count);
            count++;
            e.preventDefault();
            e.stopPropagation();
            var barcode = $('#search_data').val();
            var actorType = '<?php echo Actors::SHOP; ?>';
            var actorID = '<?php echo $_SESSION['shop']; ?>';
            
            $.ajax({
                url:'../controller/adminController.php?type=SaleProduct',
                type:'POST',
                dataType:'JSON',
                data:{'barcode':barcode,'actorType':actorType,'actorID':actorID},
                success:function(res){
                    barcodeArr.push(barcode);
                    // console.log(res);
                    if(res.prodID != null){
                           prodObjects[res.prodID]=res;
                           tableData(prodObjects);
                            $("#search_data").val("");
                    }
                    else
                    {
                        alert('This Product Does Not Available...!');
                        $("#search_data").val("");
                    }
                    
                    
                    }
            })
         }
        });
    });
   </script>
   <script type="text/javascript">
    function manage_table_count(){
      var i = 1;
      $('#success tbody tr').each(function(){
        $(this).find('th:first').text(i)
        i++;
      });
    }
  </script>

 <script>

 </script>
<script>
  $("#discount").keyup(function(){
    var subtotal=$("#subtotal").val();
    var discount_type=$("#discount_type").val();
    var discount=$("#discount").val();
    if(discount_type=='%')
    {
        var total=subtotal-(subtotal*discount/100);
        $("#total_amt").val(total.toFixed(2));
        // $("#cash").val(total.toFixed(2));
        // $("#credit_debit").val(total.toFixed(2));
        $("#cash").val(total.toFixed(2));
        // $("#credit_debit").val('');
        // $("#cashdiv").hide();
        // $("#carddiv").hide();
       // $('#payment_type').prop('selectedIndex',0);
    }
    else
    {
        var total=subtotal-discount;
        console.log(total);
        $("#total_amt").val(total.toFixed(2));
        // $("#cash").val(total.toFixed(2));
        $("#cash").val(total.toFixed(2));
        // $("#credit_debit").val('');
        // $("#cashdiv").hide();
        // $("#carddiv").hide();
        // $('#payment_type').prop('selectedIndex',0);
        
    }
    
  });

$("#discount_type").on('change', function (e) {
   $("#total_amt").val('');
   $("#discount").val('');
});

   $("#receive_amt").keyup(function(){
    var receive_amt=$("#receive_amt").val();
    var total_amt=$("#total_amt").val();
    var change=receive_amt-total_amt;
    if(change > 0){
      $("#change_amt").val(change.toFixed(2));
    }else{
      $("#change_amt").val(0);
    }
    
  });
   $("#cash").keyup(function(){
     var total_amt=$("#total_amt").val();
     var cash = $(this).val();
      var remain = parseFloat(total_amt)-parseFloat(cash);
    //  $("#credit_debit").val(remain.toFixed(2));
    if(remain<0)
     {
         alert('Invalid Amount');
         $("#cash").val(total_amt);
          $("#credit_debit").val('');
     }
     else
     {
          $("#credit_debit").val(remain.toFixed(2));
     }
    
   
   })
   
     $("#credit_debit").keyup(function(){
     var total_amt=$("#total_amt").val();
     var credit_debit = $(this).val();
     var remain = parseFloat(total_amt)-parseFloat(credit_debit);
     //$("#cash").val(remain.toFixed(2));
     if(remain<0)
     {
         alert('Invalid Amount');
          $("#cash").val(total_amt);
          $("#credit_debit").val('');
     }
     else
     {
          $("#cash").val(remain.toFixed(2));
     }
    
   })
   
   

</script>
<script>

function get_qty()
{
      var id=$(this).attr('id');
      console.log(id);
      //console.log(count);
      count++;
      // e.preventDefault();
      // e.stopPropagation();
      var barcode = $('.barcode').val();
      var actorType = '<?php echo Actors::SHOP; ?>';
      var actorID = '<?php echo $_SESSION['shop']; ?>';
      
      $.ajax({
          url:'../controller/adminController.php?type=SaleProduct',
          type:'POST',
          dataType:'JSON',
          data:{'barcode':barcode,'actorType':actorType,'actorID':actorID},
          success:function(res){
              barcodeArr.push(barcode);
              // console.log(res);
              if(res.prodID != null){
                     prodObjects[res.prodID]=res;
                     tableData(prodObjects);
                      $("#search_data").val("");
              }
              else
              {
                  alert('This Product Does Not Available...!');
                  $("#search_data").val("");
              }
              
              
              }
      });
         
  
}
</script>
</body>
</html>