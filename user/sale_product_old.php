<?php 
session_start();
error_reporting(null);
include 'sidebar.php';?>
<?php 
require('../connection.php');
include_once('../class/class.actors.php');
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
   font-size: 14px;
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
<form id="myform" method="POST" action="print_receipt.php">
    <!-- Modal Today Purchase  -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="max-width: 39%;margin: 1.75rem auto;">
              <!-- Modal content-->
            
              <div class="modal-content" style="border-radius:0rem;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-2">
                         <img src="assets/img/name-card-icon.png">
                       </div>
                       <div class="col-md-8">
                           
                            <input type="text" placeholder="Customer Name" name="customer_name" style="margin-top:10px;"class="form-control" required>
                            
                       </div>
                        
                   </div>
                   <br>
                   
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-2">
                         <img src="assets/img/phone_number_telephone-512.png">
                       </div>
                       <div class="col-md-8">
                           
                            <input type="text" placeholder="Contact No." name="customer_mobile" style="margin-top:10px;" class="form-control" required>
                            
                       </div>
                        
                   </div>
                    <br>
                    
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-2">
                         <img src="assets/img/name-card-icon.png">
                       </div>
                       <div class="col-md-8">
                           
                            <select class="form-control" id="payment" name="payment" style="margin-top:10px;" required>
                                <option disabled selected>Select Payment Method</option>
                                <option value="Cash">Cash</option>
                                <option value="Credit / Debit Card">Credit / Debit Card</option>
                            </select>
                            <br>
                            <input type="text" id="transaction_id" class="form-control" name="transaction_id" placeholder="Enter transaction id"  style="display:none;">
                            
                       </div>
                        
                   </div>
                     
                     
                  
                </div>
               <br>
                 <center>
                <button type="submit" name="sale" class="btn btn-warning">Submit</button>
                  <button type="button" data-dismiss="modal"  class="btn btn-danger">Close</button>
                  </center>
                  <br>
               
              </div>
              
              
            </div>
          </div>
 <!-- Modal end Today Purchase-->
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
                           
                <input type="text" id="search_data" style="margin-top:10px;height: 30px;"class="form-control">
                            
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
                  <!--<th>Sr.No.</th>-->
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
            <button type="button" class="btn btn-danger btn-lg r-5 " data-toggle="modal" data-target="#myModal" style="height: 34px;background-image: linear-gradient(#137937, #267b1c);font-weight: bold;  font-size: 13px; text-align: center;"><i class="icon-documents4 mr-2"></i>Sale</button>
         </div>
         <div class="col-md-3">
         </div>
         <div class="col-md-5">
            <div class="row">
               <label class="col-md-4 la" name="total" >Subtotal</label>
               <div class="col-md-8"> 
                  <input type="text" readonly="" id="subtotal" class="form-control" style="height: 28px;background-image: linear-gradient(#154f4f, #154f4f);color:#fff;"  name="total" value="500" required>  
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="col-md-12">
      <div class="row">
         <div class="col-md-4">
            
         </div>
         <div class="col-md-3">
         </div>
         <div class="col-md-5">
            <div class="row">
              
               <label class="col-md-4 la">Discount(%)</label>
               <div class="col-md-8"> 
                  <input type="text"  class="form-control" style="height: 28px;background-image: linear-gradient(#154f4f, #154f4f);color:#fff;" id="discount"  name="" required>  
               </div>
               <label class="col-md-4 la">Total Amount</label>
               <div class="col-md-8"> 
                  <input type="text"  class="form-control" style="height: 28px;background-image: linear-gradient(#154f4f, #154f4f);color:#fff;" id="total_amt" name="" required>  
               </div>
               <label class="col-md-4 la">Receive Amount</label>
               <div class="col-md-8"> 
                  <input type="text"  class="form-control" style="height: 28px;background-image: linear-gradient(#154f4f, #154f4f);color:#fff;" id="receive_amt"  name="" required>  
               </div>
               <label class="col-md-4 la">Return Amount</label>
               <div class="col-md-8"> 
                  <input type="text"  class="form-control" style="height: 28px;background-image: linear-gradient(#154f4f, #154f4f);color:#fff;" id="change_amt" name="" required>  
               </div>
                <label class="col-md-4 la">Customer Name</label>
               <div class="col-md-8"> 
                  <input type="text"  class="form-control" style="height: 28px;background-image: linear-gradient(#154f4f, #154f4f);color:#fff;"  name="" required>  
               </div>
                <label class="col-md-4 la" >Customer Phone No.</label>
               <div class="col-md-8"> 
                  <input type="number"  class="form-control" style="height: 28px;background-image: linear-gradient(#154f4f, #154f4f);color:#fff;"  name="" required>  
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
             var sum=  (qty * mrp);
             var total_sum= sum-(sum * discount/100);
           
            if($("#prod_"+prod).length){
                console.log("row already exist");
                $("#qty_"+prod).text(qty);
                $("#qty_input_"+prod).val(qty);
                $('#total_input_'+prod).val(total_sum);
                
            }else{
            html = '<tr id="prod_'+prod+'">'
            
            +'<td>'+prodObjects[prod]['prod_data']['product_cat']+'<input type="hidden" name="pro_name[]" value="'+prodObjects[prod]['prod_data']['product_cat']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['subProductName']+'<input type="hidden" name="sub_pro_name[]" value="'+prodObjects[prod]['prod_data']['subProductName']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['vendor_name']+'</td>'
            +'<td>'+prodObjects[prod]['prod_data']['material']+'</td>'
            +'<td>'+prodObjects[prod]['prod_data']['size']+'</td>'
            +'<td>'+prodObjects[prod]['prod_data']['color_name']+'</td>'
            +'<td id="qty_'+prod+'">'+qty+' </td><input type="hidden" name="qty[]" id="qty_input_'+prod+'" value="'+qty+'">'
            +'<td>'+prodObjects[prod]['prod_data']['mrp']+'<input type="hidden" name="mrp[]" value="'+prodObjects[prod]['prod_data']['mrp']+'"></td>'
            +'<td>'+prodObjects[prod]['prod_data']['discount']+'<input type="hidden" name="discount[]" value="'+prodObjects[prod]['prod_data']['discount']+'"></td>'
            +'<td style="width: 10px;"><center><input type="text" name="total[]" id="total_input_'+prod+'" value="'+total_sum+'" class="form-control btn1"></center></td>'
            +'<td><a href="" class="btn btn-success btn1">Remove</a></td>'
            +'</tr>';                
            $("#tbody").append(html);
            $('#search_data').val('');
            }

        }
    }


    function getBarcodeCount(barcode){
        count = 0;
        for(var i = 0; i< barcodeArr.length; i++){
            if(barcodeArr[i] == barcode){
                count++;
            }
        }
        return count;
    }
    count=1;
    $(document).ready(function(){
        $('#search_data').unbind();
        $('#search_data').bind('input',function(e){
            console.log(count);
            count++;
            e.preventDefault();
            e.stopPropagation();
            var barcode = $('#search_data').val();
            var actorType = '<?php echo Actors::ADMIN; ?>';
            var actorID = '<?php echo $_SESSION['uid']; ?>';
            
            $.ajax({
                url:'../controller/adminController.php?type=getProductDataTrf',
                type:'POST',
                dataType:'JSON',
                data:{'barcode':barcode,'actorType':actorType,'actorID':actorID},
                success:function(res){
                    barcodeArr.push(barcode);
                    if(res.prodID != null){
                           prodObjects[res.prodID]=res;
                           tableData(prodObjects);
                            $("#search_data").val("");
                    }
                    }
            })
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
  $('#payment').on('change', function(){
      var val = $(this).val();
       
       if(val!='Cash')
       {
           $("#transaction_id").show();
           $("#transaction_id").attr('required',true);
       }
       else
       {
            $("#transaction_id").hide();
            $("#transaction_id").attr('required',false);
            
       }
    })
</script>
<script>
  $("#discount").keyup(function(){
    var subtotal=$("#subtotal").val();
    var discount=$("#discount").val();
    var total=subtotal-(subtotal*discount/100);
    $("#total_amt").val(total);
    
  });


   $("#receive_amt").keyup(function(){
    var receive_amt=$("#receive_amt").val();
    var total_amt=$("#total_amt").val();
    var change=receive_amt-total_amt;
    $("#change_amt").val(change);
    
  });
  
  
</script>
</body>
</html>