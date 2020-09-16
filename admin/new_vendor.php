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
         <form>
            <div class="row " >
               <div class="col-md-12"  >
                   <fieldset class="fes">
                        <legend class="le">New Vendor</legend>
                        <br>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="col-md-12 mb-12">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Vendor Name</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control" id="vendor_name" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Contact No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control" maxlength="10" onkeypress="return isNumber(event) " id="contact" required>
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
                                    <div class="col-md-8"> <input type="email"  class="form-control " id="email" required>
                                    </div>
                                </div>
                            </div>
                            
                             
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Address</label>
                                    <div class="col-md-8"> <textarea style="border: 1px solid #e1e8ee;" class="form-control" id="address"  rows="4" required></textarea>
                                    </div>
                                </div>
                            </div>
                            
                           
                              <br><br>
                            <div id="msg"></div>
                            
                          </div>
                          
                           
                          
                             </div>
                             <div class="col-md-12">
                                 <br>
                                 <hr>
                                <center><button type="button" class="btn btn-success" id="add_vendor">Add Vendor</button></center>
                            </div>
                               
                             <br>
                     </fieldset>
                  <br>
                 
                 
               
                
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
<script>
$('#add_vendor').click(function()
{
     var vendor_name=$('#vendor_name').val();
     var contact=$('#contact').val();
     var vendor_abbr=$('#vendor_abbr').val();
     var email=$('#email').val();
     var address=$('#address').val();
    // alert(due_date);
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
