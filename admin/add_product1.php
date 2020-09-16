<?php 
ini_set("display_errors","1");
// print_r(phpinfo());
// exit();
// session_start();
// print_r($_SESSION);
include_once('../function.php');
include_once("../class/class.product.php");
$prodObj = new Product();
$vendorData = $prodObj->getVendor();
$prodCat = $prodObj->getProductCat();
$prodSubCat = $prodObj->getSubProductCat();
$size = $prodObj->getSize();
$color = $prodObj->getColor();
$gender = $prodObj->getGender();
$material = $prodObj->getMaterial();
?>
<?php include_once 'sidebar.php';?>
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
        width:30%; 
        border-radius: 5px;
        cursor: pointer; 
        background-image: linear-gradient(#366121, #38711c);
        color: #fff; 
        border: none;
    }
    .sretxt
    {
      width: 66%; 
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
    background-image: linear-gradient(#315b1c, #40881d);
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
    .la {
    font-size: 12px;
    color: #2f3838;
}

</style>

<div class="page has-sidebar-left">
    
    <div class="container-fluid animatedParent animateOnce my-3" >
        <div class="animated fadeInUpShort">
          <h3 id="success"/></h3>
            <!-- <form method="POST" action="../function.php"> -->
              <form id="addProductForm" nam="addProductForm">
                <div class="row">
                    <div class="col-md-12">

                     <fieldset class="fes">
                        <legend class="le">Purchase Product</legend>
                        <div class="container">
                          
                        
                        <br>
                        <!-- 1st row -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Vendor Name</label>
                              </div>
                              <div class="col-md-8">
                                <div class="row">
                                  <div class="col-md-10">
                                     <!-- <input type="text" name="pname"class="form-control" id="product_name" value="" required> class="js-example-tags" -->
                                    <select  class="js-example-tags" name="vendor" id="getVendor">
                                    <option value="">Select Vendor</option>
                                    <?php
                                    // print_r($vendorData);
                                      for($i=0;$i<count($vendorData);$i++){
                                        echo '<option value="'.$vendorData[$i]['ID'].'">' .$vendorData[$i]['vendor_name'].'</option>';
                                      }
                                    ?>
                                    </select>
                                  </div>
                                  <div class="col-md-2">
                                    <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal">+</button>
                                  </div>
                                </div>
                               
                              </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Product Name</label>
                              </div>
                              <div class="col-md-8">
                                <select class="js-example-tags" name="product_name" id="getProduct">
                                      <option value="">Select Product</option>
                                      <?php
                                        for($i=0;$i<count($prodCat);$i++){
                                          echo '<option value="'.$prodCat[$i]['ID'].'">'.$prodCat[$i]['product_cat'].'</option>';
                                        }
                                      ?>
                                </select>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <br>
                        <!-- 2nd row -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Sub Product</label>
                              </div>
                              <div class="col-md-8">
                                <select class="js-example-tags" name="sub_product" id="getSubProduct">
                                  <option value="">Select Sub Product</option>
                                  <?php
                                  for($i=0;$i<count($prodSubCat);$i++){
                                      echo '<option value="'.$prodSubCat[$i]['ID'].'">'.$prodSubCat[$i]['subProductName'].'</option>';
                                  }
                                  ?>
                                </select>
                                
                              </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Design No.</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text"  class="form-control" name="design_no" required>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <br>
                        <!-- 3rd row -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Size</label>
                              </div>
                              <div class="col-md-8">
                                <select class="js-example-tags" name="size" id="getSize">
                                      <option value="">Select Size</option>
                                      <?php
                                        for($i=0;$i<count($size);$i++)
                                        echo '<option value="'.$size[$i]['id'].'">'.$size[$i]['size'].'</option>';
                                      ?>
                                </select>
                              </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Colour</label>
                              </div>
                              <div class="col-md-8">
                                <select class="js-example-tags" name="color" id="getColor">
                                      <option value="">Select Color</option>
                                      <?php
                                        for($i=0;$i<count($color);$i++){
                                          echo '<option value="'.$color[$i]['id'].'">'.$color[$i]['color_name'].'</option>';
                                        }
                                      ?>
                                </select>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <br>
                        <!-- 4th row -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Material</label>
                              </div>
                              <div class="col-md-8">
                                <select class="js-example-tags" name="material" id="material">
                                      <option value="">Select Material</option>
                                      <?php
                                        for($i=0;$i<count($material);$i++){
                                          echo '<option value="'.$material[$i]['ID'].'">'.$material[$i]['material'].'</option>';
                                        }
                                      ?>

                                      <!-- <option>Cotton</option>
                                      <option>Fabric</option>
                                      <option>Polyester</option> -->
                                      
                                </select>
                              </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>HSN Code</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text"  class="form-control" name="hsn_code" required>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <br>
                        <!-- 5th row -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>GST</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="gst"class="form-control"  value="" required>
                              </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Purchase Price</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="purchase_price" class="form-control" required>
                              </div>
                              
                            </div>
                          </div>
                        </div>

                        <br>
                        <!-- 6th row -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>WSP</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="wsp" class="form-control"  required>
                              </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>MRP</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="mrp" class="form-control" required>
                              </div>
                              
                            </div>
                          </div>
                        </div>

                        <br>
                        <!-- 7th row -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Qty</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="qty" class="form-control" required>
                              </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Used By</label>
                              </div>
                              <div class="col-md-8">
                                <select class="js-example-tags" name="gender" id="getGender">
                                      <option>Select</option>
                                      <?php
                                        for($i=0;$i<count($gender);$i++){
                                          echo '<option value="'.$gender[$i]['ID'].'">'.$gender[$i]['name'].'</option>';
                                        }
                                      ?>
                                      
                                      
                                </select>
                              </div>
                              
                            </div>
                          </div>
                        </div>

                        <br>
                        <!-- 8th row -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Discount</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="discount" class="form-control" required>
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                              <div class="col-md-4">
                                <label>Manufactoring Date</label>
                              </div>
                              <div class="col-md-8">
                                <input type="date" name="mfg_date" class="form-control" required>
                              </div>
                          </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-2">
                                  <label>Remarks</label>
                                </div>
                                <div class='col-md-10'>
                                  <textarea class="form-control" name="remarks"></textarea>
                                </div>
                              </div>
                            </div>
                        </div>
                       
                        
                        <hr>
                        <!-- 10th row -->
                        <div class="row">
                          <div class="col-md-12">
                            <center><input type="submit"  value="Place Order" class="btn btn-success"></center>
                        </div>
                        </div>
                        <br>
                        </div>
                     </fieldset>
                     </div>
                        </div>
                               
            </form>
             <!-- Modal vender details -->
             <form>
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                  <fieldset class="fes">
                        <legend class="le">Vendor Details</legend>
                        <br>
                        <div class="row">
                            
                          <div class="col-md-6">
                            
                            <div class="col-md-12 mb-12">
                                
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Vendor Name</label>
                                    <div class="col-md-8"> <input type="text" class="form-control " name="supplier" id="vendor_name" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Contact No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control " maxlength="10" onkeypress="return isNumber(event) " name="contact" id="contact" required>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Vendor Abbr</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control" id="vendor_abbr" required>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            </div>
                          <div class="col-md-6">
                              <div class="col-md-12 mb-12 ">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Email</label>
                                    <div class="col-md-8"> <input type="email"  class="form-control btn1" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            
                             
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Address</label>
                                    <div class="col-md-8"> <textarea style="border: 1px solid #e1e8ee;" class="form-control" name="address" id="address"  rows="4" required></textarea>
                                    </div>
                                </div>
                            </div>
                           
                            <br><br>
                            <div id="msg"></div>
                          </div>
                           
                             </div>
                               
                             <br>
                     </fieldset>
              
                <div class="modal-footer">
                  <center>
                    <button type="button" class="btn btn-success" id="add_vendor">Add Vendor</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </center>
                </div>
              </div>
              
            </div>
          </div>
          </form>
              <!-- end model -->
            </div>
          </div>
             </div> 
        </div>
    </div>
    <br><br>

    <?php include 'footer.php'?>
</div>
<script src="assets/js/app.js"></script>
<script src=""></script>
<script>
$(".js-example-tags").select2({
  tags: true
  // ajax:{
  //   url:'../controller/adminController.php?type'
  // }
});
// var elements = $(".js-example-tags");
// console.log(elements);


</script>

<script>
  $(".js-example-tags").focus(function(){
    console.log($(this));
    // $(".js-example-tags").select2();
  })
  $(document).ready(function(){
    $("#addProductForm").submit(function(e){
      e.preventDefault();
      $("#addProductForm").validate();
      if(!$("#addProductForm").valid()){
        return false;
      }
      // var formData = new FormData($("#addProductForm"));
      var formData = $(this).serialize();
      $.ajax({
        url:'../controller/adminController.php?type=addProductData',
        type:'POST',
        data:formData,
        success:function(res){
          console.log(res);
          alert('Product Added successfully!!!');
          window.location.reload()
        }
      });
    });
  })
</script>
<script>
$('#add_vendor').click(function()
{
    var vendor_name=$('#vendor_name').val();
     var contact=$('#contact').val();
     var vendor_abbr=$('#vendor_abbr').val();
     var email=$('#email').val();
     var address=$('#address').val();
    $.ajax({
         url:'new_vendor_ajax.php',
         type:'POST',
         data:{
             vendor_name:vendor_name,
             contact:contact,
             vendor_abbr:vendor_abbr,
             email:email,
             address:address,
             command:'add_vendor',
         },
         success:function(result)
         {
             $('#msg').html(result);
         }
     })
})    

</script>