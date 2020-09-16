<?php include 'sidebar.php';?>
<script type="text/javascript">
 function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>

<style type="text/css">
   .fe
   {
   border: none;
   padding: 1px; border-radius: 2px; 
   overflow:;
   height:auto;
   background-color: #fff;
   box-shadow:#084d84 4px 4px 6px 0px;
   }
   .btnsre
   {
   height: 24px;
   width: 30px; 
   border-radius: 5px;
   cursor: pointer; 
   background-image: linear-gradient(#32aef7, #074a80); 
   color: #fff; 
   border: none;
   }
   .sretxt
   {
   width: 74%; 
   height: 17px;
   border: none;
   }
   .box_ser
   {
   margin: auto; 
   border: 1px solid #b7bbbe; 
   width: 67%;
   border-radius: 5px; 
   height: 25px;
   }
   .fes {
    border: none;
    padding: 1px;
    border-radius: 2px;
    overflow: ;
    height: auto;
    background-color: #fff;
    box-shadow: #8392a9 2px 0px 15px 2px;
    border-left: 6px solid #336b18;
}
   .le {
    font-size: 12px;
    font-weight: normal;
    /* background-color: #03a9f4; */
    background-image: linear-gradient(#315b1c,#40881d);
    border: #ddd 1px solid;
    padding-top: 3px;
    padding-bottom: 6px;
    margin-bottom: 0px;
    border-radius: 6px;
    text-align: center;
    width: 70%;
    color: #fff;
}
   .btn1
   {
   height: 30px;
   font-size: 13px;
   }
   .s
   {
   margin-top: 10px;
   }
   .la
   {
   font-size: 12px;
   color: #114c4c;
   }
</style>
<div class="page has-sidebar-left" >
   <div class="container-fluid animatedParent animateOnce my-3">
      <div class="animated fadeInUpShort" >
         <form method="POST" action="../function.php">
            <div class="row " >
               <div class="col-md-12"  >
                   <fieldset class="fes">
                        <legend class="le">Purchase Item's</legend>
                        <br>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="col-md-12 mb-12">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Supplier Name</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="supplier" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Contact No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" maxlength="10" onkeypress="return isNumber(event) " name="contact" required>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Supplier GST%</label>
                                    <div class="col-md-8"> <input type="text" maxlength="4" onkeypress="return isNumber(event) " class="form-control btn1" name="supplier_gst" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Invoice No</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="invoice_no" value="<?php echo date(dmyhis); ?>";required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Date</label>
                                    <div class="col-md-8"> 
                                        <input  type="text" class="form-control btn1"  value="<?php echo date('d/m/Y'); ?>" name="date" required>
                                    </div>
                                </div>
                            </div>
                            </div>
                          <div class="col-md-6">
                              <div class="col-md-12 mb-12 ">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Email</label>
                                    <div class="col-md-8"> <input type="email"  class="form-control btn1" name="email" required>
                                    </div>
                                </div>
                            </div>
                            
                             
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Address</label>
                                    <div class="col-md-8"> <textarea style="border: 1px solid #e1e8ee;" class="form-control" name="address"  rows="4" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Payment Due Date</label>
                                    <div class="col-md-8"> <input type="text" class="form-control btn1" id="datepicker-13" name="due_date" required>
                                    </div>
                                </div>
                            </div>
                             
                            
                          </div>
                         
                             </div>
                               
                             <br>
                     </fieldset>
                  <br>
                  <div class="table-responsive">
                     <table class="table table-striped table-hover table-bordered r-0">
                        <thead style="background-color: #1974b2; border-radius: 10px; color: #fff;">
                           <tr >
                              <th>Sr.</th>
                              <th>Barcode</th>
                              <th>Name</th>
                              <th>Code</th>
                              <th>HSN </th>
                              <th>Qty</th>
                              <th>Parchase Rate</th>
                              <th>Sales Rate</th>
                              <th>MRP</th>
                              <th>Dis%</th>
                              <th>GST%</th>
                              <th>Total</th>
                              <th>MFG</th>
                              <th>EXP</th>
                              <th>Adult</th>
                              <th>Child</th>
                              <th>Brand</th>
                              <th>Size</th>
                              <th>Colour</th>
                              <th>Model</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           require('../connection.php');
                           if(isset($_POST['purchase']))
                           {
                             if(gettype($_POST['check'])=="array")
                               { $i=1;
                                foreach ($_POST['check'] as $transfer) 
                                 {
                                   $id=$transfer;
                                  $sql=mysqli_query($conn,"SELECT * FROM product where id='$id'");
                                  if ($row=mysqli_fetch_assoc($sql)) {
                                  
                           ?>
                           <tr>
                              <td><?php echo $i; ?></td>
                              <td><input type="text" readonly class="form-control btn1" name="bar_code[]" id="barcode" value="<?php echo $row['barcode']; ?>" style="width: 135px;" >
                              </td>

                              <td><input type="text" readonly class="form-control btn1" name="product_name[]" id="product_name" value="<?php echo $row['pro_name']; ?>"  style="width: 130px;" >
                              </td>
                              <td><input type="text" readonly class="form-control btn1" name="product_code[]" id="product_code" value="<?php echo $row['pro_code']; ?>" style="width: 110px;" >
                              </td>
                              <td><input type="text" readonly class="form-control btn1" name="hsn_code[]" id="hsn_code"value="<?php echo $row['hsn_code']; ?>" style="width: 80px;" >
                              </td>
                              <td><input type="text" class="form-control btn1 quantity " name="quty[]" id="quantity_<?=$i;?>" data-id="<?=$i;?>" value="" onload="calc();" style="width: 70px;" >
                              </td>
                              <td><input type="number" class="form-control btn1 purchase" name="parchase_rate[]" id="product_price_<?=$i;?>"data-id="<?=$i;?>" value="<?php echo $row['purchase_price']; ?>" style="width: 80px;">
                              </td>
                              <td><input type="text" class="form-control btn1" name="sale_rate[]" id="sale_rate" value="<?php echo $row['sale_price']; ?>" style="width: 60px;">
                              </td>
                              <td><input type="text" class="form-control btn1" name="mrp[]" id="mrp" value="<?php echo $row['mrp']; ?>" style="width: 80px;" ></td>
                              <td><input type="text" class="form-control btn1 discount" name="discount[]" id="discount_<?=$i;?>" value="<?php echo $row['discount']; ?>"  style="width: 50px;" >
                              </td>
                              <td><input type="text" class="form-control btn1 gst" name="gst[]" id="gst_<?=$i;?>" value="<?php echo $row['gst']; ?>" style="width: 50px;" >
                              </td>
                              <td><input type="text" class="form-control btn1 total" name="total[]" id="total_<?=$i;?>" value=""  style="width: 120px;" readonly >
                              </td>
                              <td><input type="text" class="form-control btn1 " name="manufacture[]" id="manufacture" value="<?php echo $row['manfacturing_date']; ?>"  style="width: 90px;" readonly >
                              </td>
                              <td><input type="text" class="form-control btn1 " name="expire[]" id="expire" value="<?php echo $row['exp_date']; ?>"  style="width: 90px;" readonly >
                              </td>
                              <td><input type="text" class="form-control btn1 " name="adult[]" id="adult" value="<?php echo $row['adult']; ?>"  style="width: 50px;" readonly >
                              </td>
                              <td><input type="text" class="form-control btn1 " name="child[]" id="child" value="<?php echo $row['child']; ?>"  style="width: 50px;" readonly >
                              </td>
                              <td><input type="text" class="form-control btn1" name="brand[]" id="brand" value="<?php echo $row['brand']; ?>" style="width: 70px;" readonly >
                              </td>
                              <td><input type="number" class="form-control btn1" name="size[]" id="size" value="<?php echo $row['size']; ?>" style="width: 60px;" readonly >
                              </td>
                              <td><input type="text" class="form-control btn1" name="colour[]" id="color" value="<?php echo $row['color']; ?>" style="width: 70px;" readonly>
                              </td>
                              <td><input type="text" class="form-control btn1" name="pro_type[]" id="type" value="<?php echo $row['type']; ?>" style="width: 100px;" readonly >
                              </td>
                           </tr>
                           <?php $i++;} }
                              }
                           } ?>
                        </tbody>
                     </table>
                     <br>
                  </div>
                  <div class="col-md-12" style="margin-top: 5px;">
                     <div class="row">
                        <div class="col-md-4">
                          
                           <input type="submit" name="purchase" value="Purchase" id="" style="background-image: linear-gradient(#137937, #267b1c);color: #fff;height: 30px;font-size: 12px;" class="btn  pull-right" >
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                           <div class="row">
                              <label class="col-md-4 la" name="total" style="font-size:14px;">Total Rs.</label>
                              <div class="col-md-8"> 
                              <input type="text" readonly="" style="background-image: linear-gradient(#1c6767, #154f4f);color: #fff;"  class="form-control btn1 subtotal"  name="total_price" id="grand_total" value="" required>  
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               
                <nav class="my-3" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            </div>
         </form>
      </div>
   </div>
   <?php include 'footer.php'?>
</div>
<script src="assets/js/app.js"></script>
<script src="js/purchase.js"></script>
<script>
  $('.quantity').keyup(function(){
    var qty = parseInt($(this).val());
    var id = $(this).attr('data-id');
    console.log(qty+' '+id);
    var product_price = parseInt($('#product_price_'+id).val());
    var discount=parseInt($('#discount_'+id).val());
    var gst=parseInt($('#gst_'+id).val());
    console.log(product_price);
    console.log(discount);
    
    var product_discount=qty*product_price*discount/100;
    var total_price = qty*product_price-product_discount;
    var included_gst=total_price*gst/100;
    var total= total_price+included_gst;
    console.log(total);
    if(isNaN(total)){
      total = 0;
    }
    $('#total_'+id).val(total);
    calculate_price();
  })
  $('.purchase').keyup(function(){
    var product_price = parseInt($(this).val());
    var id = $(this).attr('data-id');
    console.log(qty+' '+id);
    var qty = parseInt($('#quantity_'+id).val());
    var discount=parseInt($('#discount_'+id).val());
    var gst=parseInt($('#gst_'+id).val());
    console.log(product_price);
    console.log(discount);
    
    var product_discount=qty*product_price*discount/100;
    var total_price = qty*product_price-product_discount;
    var included_gst=total_price*gst/100;
    var total= total_price+included_gst;
    console.log(total);
    if(isNaN(total)){
      total = 0;
    }
    $('#total_'+id).val(total);
    calculate_price();
  })

  function calculate_price(){
    var grand_total = 0;
    $('.total').each(function(){
      var total = parseFloat($(this).val());
      if(isNaN(total)){
        total = 0;
      }
      grand_total += total;
    })
    $('#grand_total').val(grand_total);
  }
</script>

x