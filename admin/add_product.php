<?php 
//session_start();
include('../function.php');

?>
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
            <form method="POST" action="../function.php">
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
                                     <!-- <input type="text" name="pname"class="form-control" id="product_name" value="" required> -->
                                    <select class="js-example-tags ">
                                      <option>Reebok</option>
                                      <option>Lee Cooper</option>
                                      <option>Puma</option>
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
                                <select class="js-example-tags">
                                      <option>T-Shirt</option>
                                      <option>Jeans</option>
                                      <option>Shirt</option>
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
                                <select class="js-example-tags">
                                      <option>Full Sleeve</option>
                                      <option>Half Sleeve</option>
                                      <!-- <option>Shirt</option> -->
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
                                <input type="text" name="" class="form-control" required>
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
                                <select class="js-example-tags">
                                      <option>S</option>
                                      <option>M</option>
                                      <option>L</option>
                                      <option>XL</option>
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
                                <select class="js-example-tags">
                                      <option>Red</option>
                                      <option>Blue</option>
                                      <option>Green</option>
                                      <option>White</option>
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
                                <select class="js-example-tags">
                                      <option>Cotton</option>
                                      <option>Fabric</option>
                                      <option>Polyester</option>
                                      
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
                                <input type="text" name="" class="form-control" required>
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
                                <input type="text" name=" pname"class="form-control" id="product_name" value="" required>
                              </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Purchase Price</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="" class="form-control" required>
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
                                <input type="text" name="pname" class="form-control" id="product_name" value="" required>
                              </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>MRP</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="" class="form-control" required>
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
                                <input type="text" name="pname" class="form-control" id="product_name" value="" required>
                              </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-4">
                                <label>Gender</label>
                              </div>
                              <div class="col-md-8">
                                <select class="js-example-tags">
                                      <option>Men</option>
                                      <option>Women</option>
                                      <option>Boys</option>
                                      <option>Girls</option>
                                      
                                      
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
                                <input type="text" name="" class="form-control" required>
                              </div>
                              
                            </div>
                        </div>
                          <div class="col-md-6">
                             <div class="row">
                              <div class="col-md-4">
                                <label>Remark</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="pname"class="form-control" id="product_name" value="" required>
                              </div>
                          </div>
                          </div>
                        </div>
                            <br>
                       
                        
                        <hr>
                        <!-- 10th row -->
                        <div class="row">
                          <div class="col-md-12">
                            <center><input type="button" name="purchase" value="Purchase" class="btn btn-success" ></center>
                        </div>
                        </div>
                        <br>
                        </div>
                     </fieldset>
                     </div>
                        </div>
                               
            </form>
             <!-- Modal Vendor  details -->
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
<script>
 $(".js-example-tags").select2({
  tags: true
});
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