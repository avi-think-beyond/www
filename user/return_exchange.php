<?php 
session_start();
// error_reporting(null);
include 'sidebar.php';?>
<?php 
require('../connection.php');
include_once('../class/class.actors.php');
 $_SESSION['uid'];
 $_SESSION['shop'];
//  $dt=date('m-y');
//  $invoice='JG/'.$dt.'/'.rand(100000,9999999);
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
<form id="myform" method="POST" action="return_exchange_print.php">

   <div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
   <div class="container-fluid animatedParent animateOnce">
      <div class="tab-content my-3" id="v-pills-tabContent">
         <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
              <div class="row">
                <div class="col-md-2" style="background-color:#234b0f;color:#fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 7px solid #478828;">
                    
                        
                        <span class="s-8">Return Or Exchange</span>
                    
               </div>
               <div class="col-md-1"></div>
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-8">
                            <input type="text" id="search_invoice" class="form-control" placeholder="Enter Invoive Number">
                        </div>
                        <div class="col-md-2">
                            <button type='button' id="search_invoice_btn" class="btn btn-warning">Search</button>
                        </div>
                        
                    </div>
                     
                     
                </div>
                <div class="col-md-3">
                           
                <input type="text" id="search_barcode_data" class="form-control" placeholder="Scan Barcode..." style="display:none;">
                            
                </div>
            
            </div>
            
            <div class="row my-3">
               <div class="col-md-12">
                  
               </div>
            </div>
         </div>
      </div>
   </div>
       <center>
         <legend class="le">Return Or Exchange</legend>
      </center>
   <div class="col-md-12 fes">
      
        <br>
      <div class="col-md-12 table-responsive">
         <table id="listTable" class="table table-striped  table-hover table-bordered r-0" style="text-align: center; ">
            <thead>
               <tr>
                  <th>Product Code</th>
                  <th>Product Name</th>
                  <th>Type</th>
                  <th>Material</th>
                  <th>Size</th>
                  <th>Colour</th>
                  <th>Qty</th>
                  <th>MRP</th>
                  <th>Total</th>
                  <th>Return Qty</th>
               </tr>   
            </thead>
           <tbody style="font-size: 12px;" id="tbody">
               
           </tbody>
         </table>
      </div>
      <br>
   </div>
   <br>
   <!-- <div class="col-md-12">
      <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3"></div>
            <div class="col-md-5">
                <div class="row" style="margin-bottom: 5px;">
                    <div class="col-md-4 la"></div>
                    <div class="col-md-8"> 
                        <button type="button" class="btn btn-danger btn-lg"><i class="icon-documents4 mr-2"></i>Submit</button>
                    </div>
                </div>
            </div>
        </div>
      </div> -->
   <hr>
   <!-- Right Sidebar -->
   <div class="row" style="display:none;">
                <div class="col-md-9">
                </div>
                <div class="col-md-3">
                           
                <input type="text" id="search_data" class="form-control" placeholder="Scan Barcode...">
                            
                </div>
                   
            
            </div>
    <center style="display:none;">
         <legend class="le">Return</legend>
      </center>
   <div class="col-md-12 fes" style="display:none;">
       
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
                  <input type="text"  class="form-control" style="height: 28px;" id="discount_amt" placeholder="Enter Discount" name="discount">  
                 
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
               
              <!--<div class="row" style="margin-bottom: 5px;"> -->
              <!--     <div class="col-md-4 la">-->
              <!--          <label>Receive Amount</label>-->
              <!--     </div>-->
              <!--     <div class="col-md-8"> -->
              <!--    <input type="text"  class="form-control" style="height: 28px;" id="receive_amt" placeholder="Receive Amount" name="receive_amt" >  -->
              <!-- </div>-->
              <!--</div>-->
              
              <!--  <div class="row" style="margin-bottom: 5px;">-->
              <!--     <div class="col-md-4 la">-->
              <!--           <label>Return Amount</label>-->
              <!--     </div>-->
              <!--     <div class="col-md-8"> -->
              <!--    <input type="text"  class="form-control" style="height: 28px;" id="change_amt" placeholder="Return Amount" name="change_amt" >   -->
              <!-- </div>-->
              <!--</div>-->
              
                <input type="hidden" name="fromActorType" value="<?php echo Actors::SHOP ;?>">
                  <input type="hidden" name="fromActorid" value="<?php echo $_SESSION['shop'] ;?>">
                  <input type="hidden" name="invoice" id="invoice" value="">
                  
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
              <!-- <div class="row" style="margin-bottom: 5px;" id="cashdiv">-->
              <!--     <div class="col-md-4 la">-->
              <!--           <label>Cash</label>-->
              <!--     </div>-->
              <!--     <div class="col-md-8"> -->
              <!--   <input type="number" class="form-control" style="height: 28px;" placeholder="Enter Amount" id="cash" name="cash" >  -->
              <!-- </div>-->
              <!--</div>-->
              
              <!--<div class="row" style="margin-bottom: 5px;" id="carddiv">-->
              <!--     <div class="col-md-4 la">-->
              <!--           <label>Credit / Debit Card</label>-->
              <!--     </div>-->
              <!--     <div class="col-md-8"> -->
              <!--   <input type="number"  class="form-control" style="height: 28px;" placeholder="Enter Amount" name="credit_debit" id="credit_debit"  >-->
              <!-- </div>-->
             
              <!--</div>-->
              
              <!--<div class="row" style="margin-bottom: 5px;display:none;" id="trans">-->
                 
               
               
              <!--</div>-->
              
              <div class="row" style="margin-bottom: 5px;">
                   <div class="col-md-4 la">
                      
                   </div>
                   <div class="col-md-8"> 
                    <input type="submit" class="btn btn-danger btn-lg r-5" name="sale" value="Sale" style="height: 34px;background-image: linear-gradient(#137937, #267b1c);font-weight: bold;  font-size: 13px; text-align: center;"><i class=""></i>
        
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
<script>
var qtyArr = {};
var prodArr = {};
var retrunQtyArr = {};
   $(document).ready(function(){
      $("#search_invoice_btn").click(function(){
         var invoice_id = $("#search_invoice ").val();
        //  console.log(invoice_id);
         $.ajax({
            url:'../controller/adminController.php?type=searchInvoice',
            type:'POST',
            data:{'invoice_id':invoice_id},
            dataType:'JSON',
            success:function(res){
              if(res.length < 1){
                alert('invalid invoice number');
                return false;
              }
              $("#search_barcode_data").show();
               var obj = JSON.parse(res['data']);
               console.log(obj);                  
               var html = '';
               $("#discount_type").val(obj['discount_type']);
               $("#discount_amt").val(parseFloat(obj['discount']));
               $("#customer_name").val(obj['customer_name']);
               $("#customer_mobile").val(obj['customer_mobile']);
               for(var i = 0; i < obj['pro_code'].length; i++){
                  // console.log(obj['pro_code']);
                  html += '<tr>'
                          +'<td>'+obj['pro_code'][i]+'<input type="hidden" value="'+obj['pro_code'][i]+'" name="product_code[]" id="prod_code_'+obj['pro_code'][i]+'"><input type="hidden" name="pro_code[]" value="'+obj['pro_code'][i]+'"><input type="hidden" name="pro_id[]" value="'+obj['pro_id'][i]+'"><input type="hidden" name="gst[]" value="'+obj['gst'][i]+'"><input type="hidden" name="hsn[]" value="'+obj['hsn'][i]+'"></td>'                  
                          +'<td>'+obj['pro_name'][i]+'<input type="hidden" name="pro_name[]" value="'+obj['pro_name'][i]+'"></td>'                  
                          +'<td>'+obj['sub_pro_name'][i]+'</td>'
                          +'<td>'+obj['material'][i]+'</td>'
                          +'<td>'+obj['size'][i]+'</td>'
                          +'<td>'+obj['color_name'][i]+'</td>'
                          +'<td>'+obj['qty'][i]+'<input type="hidden" value="'+obj['qty'][i]+'" name="qty[]" id="prod_qty_'+obj['pro_code'][i]+'"></td>'
                          +'<td>'+obj['mrp'][i]+'<input type="hidden" value="'+obj['mrp'][i]+'" name="return_mrp[]" id="return_mrp_'+obj['pro_code'][i]+'"><input type="hidden"  name="mrp[]" value="'+obj['mrp'][i]+'"></td>'
                          +'<td>'+obj['total'][i]+'<input type="hidden" value="'+obj['total'][i]+'" name="return_total[]" id="return_total_'+obj['pro_code'][i]+'"></td>'
                          +'<td id="return_qty_td_'+obj['pro_code'][i]+'">0</td><input type="hidden" value="0" class="return_qty" name="return_qty[]" id="return_qty_'+obj['pro_code'][i]+'"><input type="hidden" value="0" class="total_return_amt" name="total_return_amt[]" id="total_return_amt_'+obj['pro_code'][i]+'">';
               }
               $("#tbody").html(html);
               $("#invoice").val(invoice_id);
              
            }
            
         
         });
      });
      $("#search_barcode_data").keypress(function(e){
        // console.log($(this).val());
        // console.log(e.which);
        if(e.which == '13'){
            e.preventDefault();
            e.stopPropagation();
          var barcode = $(this).val();
          var return_qty = $("#return_qty_"+barcode).val();
          var return_mrp = parseFloat($("#return_total_"+barcode).val());
          var return_total = parseFloat($("#return_mrp_"+barcode).val());
          var qty = $("#prod_qty_"+barcode).val();
          var total_return_amt_id = $("#total_return_amt_"+barcode).val();
          //console.log(return_qty);
          return_qty++;
          if(qty < return_qty){
          alert('return qty exceeded');
            return false;
          }else{
            $("#return_qty_td_"+barcode).text(return_qty);
            $("#return_qty_"+barcode).val(return_qty);
            
            var subtotalAmt = return_total * return_qty;
            $("#total_return_amt_"+barcode).val(subtotalAmt);
            
            var subtotalAmt1 = $("input[name='total_return_amt[]']").map(function(){return $(this).val();}).get();
            var sumAmt = subtotalAmt1.reduce(function(a, b) { return parseFloat(a) + parseFloat(b); }, 0);
            $("#subtotal").val(sumAmt.toFixed(2));
            $("#total_amt").val(sumAmt.toFixed(2));
            $("#search_barcode_data").val("");
          }
        }
      });
   });
</script> 
 <!-- <script type="text/javascript">
    var prodObjects = {};
    var count = 1;
    var barcodeArr = [];
    $(document).on("click",".decrease_qty",function(e){
          e.preventDefault();
          var prod_id = $(this).attr("data-prod_id");
          console.log(barcodeArr);
          var qty = $("#qty_input_"+prod_id).val();
          var barcode = $("#barcode_"+prod_id).val();
          barcodeArr.splice(barcodeArr.indexOf(barcode),1);
          // var qty = getBarcodeCount(barcode);
          deccreaseBarcodeCount(barcode);
          // console.log(deccreaseBarcodeCount(barcode));
          var mrp = $("#input_mrp_"+prod_id).val();
          var discount = $("#dis_input_"+prod_id).val();
          var updated_qty = parseInt(qty) - 1;
          // var updated_qty = getBarcodeCount(barcode);
          var sum =  (updated_qty * mrp);
          var total_sum = sum - (sum * discount/100);
          console.log('updated_qty => '+updated_qty);
          console.log('sum => '+sum);
          console.log('total_sum => '+total_sum);
          $("#qty_"+prod_id).text(updated_qty);
          $("#qty_input_"+prod_id).val(updated_qty);
          $('#total_input_'+prod_id).val(total_sum);
          $("#total_"+prod_id).text(total_sum);

          var subtotalAmt = $("input[name='total[]']")
              .map(function(){return $(this).val();}).get();
        var sumAmt = subtotalAmt.reduce(function(a, b) { return parseFloat(a) + parseFloat(b); }, 0);
        console.log(subtotalAmt);
        $("#subtotal").val(sumAmt.toFixed(2));
         $("#total_amt").val(sumAmt.toFixed(2));
         if(updated_qty < 1){
         	$("#prod_"+prod_id).remove();
         }

    });

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
                  // console.log(prodObjects[prod]['prod_data']['product_code']);
                  // deccreaseBarcodeCount(prodObjects[prod]['prod_data']['product_code']);
                  
                  barcodeArr.splice(barcodeArr.indexOf(prodObjects[prod]['prod_data']['product_code']),1);
                  console.log(barcodeArr);
                  alert('Stock Is Empty...!');
                  return false;
                }
                //$("#qty_"+prod).text(qty);
                $("#qty_"+prod).text(qty);
                $("#qty_input_"+prod).val(qty);
                $('#total_input_'+prod).val(total_sum);
                $("#total_"+prod).text(total_sum);
                
            }else{
              if(qty > prodObjects[prod]['a_qty'] || qty > prodObjects[prod]['prod_data']['qty']){
                  alert('No Stock Available...!');
                  return false;
                }
            html = '<tr id="prod_'+prod+'">'
            
            +'<td>'+prodObjects[prod]['prod_data']['product_cat']+'<input type="hidden" name="pro_id[]" value="'+prodObjects[prod]['prod_data']['prod_id']+'"><input type="hidden" name="pro_name[]" value="'+prodObjects[prod]['prod_data']['product_cat']+'"><input type="hidden" id="barcode_'+prod+'" name="pro_code[]" class="barcode" value="'+prodObjects[prod]['prod_data']['product_code']+'"><input type="hidden" name="gst[]" value="'+prodObjects[prod]['prod_data']['gst']+'"><input type="hidden" name="hsn[]" value="'+prodObjects[prod]['prod_data']['hsn']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['subProductName']+'<input type="hidden" name="sub_pro_name[]" value="'+prodObjects[prod]['prod_data']['subProductName']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['vendor_name']+'<input type="hidden" name="vendor_name[]" value="'+prodObjects[prod]['prod_data']['vendor_name']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['material']+'<input type="hidden" name="material[]" value="'+prodObjects[prod]['prod_data']['material']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['size']+'<input type="hidden" name="size[]" value="'+prodObjects[prod]['prod_data']['size']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['color_name']+'<input type="hidden" name="color_name[]" value="'+prodObjects[prod]['prod_data']['color_name']+'"></td>'
            +'<td id="qty_'+prod+'">'+qty+'</td><input type="hidden" name="qty[]" id="qty_input_'+prod+'" value="'+qty+'" class="get_qty" min="1">'
            +'<td id="mrp_'+prod+'">'+prodObjects[prod]['prod_data']['mrp']+'<input type="hidden" id="input_mrp_'+prod+'" name="mrp[]" value="'+prodObjects[prod]['prod_data']['mrp']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['discount']+'<input type="hidden" id="dis_input_'+prod+'" name="discount[]" value="'+prodObjects[prod]['prod_data']['discount']+'"></td>'
            +'<td class="totalAmt" id="total_'+prod+'">'+total_sum+'</td><input type="hidden" name="total[]" id="total_input_'+prod+'" value="'+total_sum+'" class="form-control btn1">'
            +'<td><a href="#" id="decrease_'+prod+'" data-prod_id="'+prod+'" class="btn btn-danger decrease_qty"><i class="icon-remove"></i></a></td>'
            +'</tr>';                
            $("#tbody").append(html);
            $('#search_data').val('');
            }

        }
        // function desccreseQty(){

        // }

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
    function deccreaseBarcodeCount(barcode){
      console.log('deccreaseBarcodeCount function called for => ',barcode);
        count = 0;
        for(var i = 0; i < barcodeArr.length; i++){
            if(barcodeArr[i] == barcode){
                count--;
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

 </script>-->
<script>
  $("#discount_amt").keyup(function(){
    var subtotal=$("#subtotal").val();
    var discount_type=$("#discount_type").val();
    var discount=$("#discount_amt").val();
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
    $("#discount_amt").val('');
  });

//   $("#receive_amt").keyup(function(){
//     var receive_amt=$("#receive_amt").val();
//     var total_amt=$("#total_amt").val();
//     var change=receive_amt-total_amt;
//     if(change > 0){
//       $("#change_amt").val(change.toFixed(2));
//     }else{
//       $("#change_amt").val(0);
//     }
    
//   });
//   $("#cash").keyup(function(){
//      var total_amt=$("#total_amt").val();
//      var cash = $(this).val();
//       var remain = parseFloat(total_amt)-parseFloat(cash);
//     //  $("#credit_debit").val(remain.toFixed(2));
//     if(remain<0)
//      {
//          alert('Invalid Amount');
//          $("#cash").val(total_amt);
//           $("#credit_debit").val('');
//      }
//      else
//      {
//           $("#credit_debit").val(remain.toFixed(2));
//      }
    
   
//   })
   
//      $("#credit_debit").keyup(function(){
//      var total_amt=$("#total_amt").val();
//      var credit_debit = $(this).val();
//      var remain = parseFloat(total_amt)-parseFloat(credit_debit);
//      //$("#cash").val(remain.toFixed(2));
//      if(remain<0)
//      {
//          alert('Invalid Amount');
//           $("#cash").val(total_amt);
//           $("#credit_debit").val('');
//      }
//      else
//      {
//           $("#cash").val(remain.toFixed(2));
//      }
    
//   })
   
   

</script>
<!--<script>
  count=1;
   // $(document).ready(function(){
        $(".get_qty").keyup(function(){
          var id=$(this).attr('id');
          console.log(id);
            console.log(count);
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
         
        });
    // });
</script> -->
</body>
</html>