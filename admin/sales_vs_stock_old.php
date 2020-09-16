<?php 
include_once('sidebar.php');
include_once('../class/class.product.php');
$prodObj = new Product();
$uid= $_SESSION['uid'];
$data = $prodObj->getAvailableQty(Actors::ADMIN,$uid);
?>
<style type="text/css">
     .btn1
    {
        height: 30px;
        font-size: 13px;
    }
     .btnsre
    {
        
       height: 34px;
    width: 15%;
    border-radius: 5px;
    cursor: pointer;
    background-image: linear-gradient(#32aef7, #074a80);
    color: #fff;
    border: none;
    }
    .sretxt
    {   
           width: 83%;
    height: 27px;
    border: none;
    background: none;
    font-size: 20px;
    padding: 10px;
}
    .box_ser
    {
            margin: auto;
    border: 1px solid #b7bbbe;
    width: 100%;
    border-radius: 5px;
    height: 36px;
    }
    .la {
    font-size: 12px;
    color: #2f3838;
}
</style>

<div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
    <form>
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                             <div class="col-md-2" style="background-color: #234b0f;color: #fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 11px solid #478828;">
                    
                                <i class="icon-shopping-cart2 s-15"></i>
                                <span class="s-8">Sales Vs Stock</span>
                            </div>
                             <div class="col-md-10">
                                 
                             </div>
                             
                </div><br>
                <div class="row">  
            <div class="col-md-4 offset-2">
                From Date: <input name="min" id="min" type="text" class="form-control" placeholder="From Date">
            </div>             
            <div class="col-md-4 ">
                To Date:<input name="max" id="max" type="text" class="form-control" placeholder="To Date">
            </div>  
                         
            </div>
            <br>
            <div class="container" style="background-color: #ffffff;padding-top: 20px;padding-bottom: 20px;border-radius: 10px;"><center>
                <button type="button" class="btn btn-info btn-xs category" data-id="Shop" id="shop"><b>Shop</b></button>
                <button type="button" class="btn btn-success btn-xs category" data-id="Gender" id="gender" ><b>Gender</b></button>
                <button type="button" class="btn btn-primary btn-xs category" data-id="Product Category" id="product"><b>Product Category</b></button>
                <button type="button" class="btn btn-danger btn-xs category" data-id="Sub Category" id="sub_category"><b>Sub Category</b></button>
                <button type="button" class="btn btn-info btn-xs category" data-id="Size" id="size"><b>Size</b></button>
                <button type="button" class="btn btn-success btn-xs category" data-id="Colour" id="color"><b>Colour</b></button>
                </center>
            </div><br>
             <div class="container" style="background-color: #ffffff;padding-top: 30px;padding-bottom: 30px;border-radius: 10px;"><center>
               <div class="show_button"></div>
               
                </center>
            </div>
           
            <br>
            
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <br>
                                    <table class="table table-striped table-hover table-bordered r-0" style="text-align: center;" id="purchase_records">
                                        <thead>
                                            
                                            <tr>
                                            <th>Sale Qty</th>
                                            <th>Net Sale Value</th> 
                                            <th>Stock Qty</th>
                                            <th>Stock values on MRP</th> 
                                            <th>Stock values on WSP</th>                    
                                            </tr>
                                        </thead>

                                        <tbody id="dataTable" style="font-size: 12px;">				
                                        </tbody>
                                    </table>
                            
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
         
    </form>
    <?php include 'footer.php'?>
</div>
<!-- Right Sidebar -->

<div class="control-sidebar-bg fixed"></div>

</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>-->
<script>



$(document).ready(function(){
$("#shop_name").hide();
$("#gender_name").hide();
$("#product_name").hide();
$("#sub_category_name").hide();
$("#size_name").hide();
$("#color_name").hide(); 
});
</script>

<script>
     $(document).ready(function(){
            $("#min").datepicker({  changeMonth: true, autoclose: true, changeYear: true,dateFormat: "yy-mm-dd" });
            $("#max").datepicker({  changeMonth: true, autoclose: true, changeYear: true,dateFormat: "yy-mm-dd" });
            var table = $('#expense_table').DataTable();
            $('#min, #max').change(function () {
                table.draw();
            });
        });
</script>

<script>
     $(document).ready(function(){
        $(".category").click(function(){
            var t = (this.id); 
            var id =(t+"_id");
            var name =$(this).attr('data-id');
            var color=$(this).attr('class');
            var get_id=$("#"+id+"").attr('id');
            var th_id =(t+"_name");
            if(get_id!=id)
            {
                $(".show_button").append("<button type='button' id='"+id+"' class='"+color+"'>"+name+"<a href='javascript:void(0);' class='remove'> <b style='color:#000000;'>&times;</b></a></button> "); 
                 $("tr").append("<th id='"+th_id+"'>"+name+"</th> "); 
            }
            //alert(th_id);
        });
         
        $(document).on("click", "a.remove" , function() {
            $(this).parent().remove();
            var preid=$(this).parent().attr('id');
            if(preid=='shop_id')
            {
                $("#shop_name").hide();
            }
            else if(preid=='gender_id')
            {
               $("#gender_name").hide(); 
            }
            else if(preid=='product_id')
            {
               $("#product_name").hide(); 
            }
            else if(preid=='sub_category_id')
            {
               $("#sub_category_name").hide(); 
            }
            else if(preid=='size_id')
            {
               $("#size_name").hide(); 
            }
            else if(preid=='color_id')
            {
               $("#color_name").hide(); 
            }
                    
        });
    });


$(document).ready(function(){
$(".category").click(function(){
    var t = (this.id); 
    var id =(t+"_id");
    var get_id=$("#"+id+"").attr('id');
    // alert(get_id);

    $.ajax({
         url:'../controller/adminController.php?type=getcategory_filter',
         type:'POST',
         data:{
             get_id:get_id,
         },
          success:function(res){
          console.log(res);
        }
    });
});
 
});


$(".category").click(function(){
    var t = (this.id); 
    var id =(t+"_name");
    var get_id=$("#"+id+"").attr('id');
    if(get_id=='shop_name')
    {
        $("#shop_name").show();
    }
    else if(get_id=='gender_name')
    {
       $("#gender_name").show(); 
    }
    else if(get_id=='product_name')
    {
       $("#product_name").show(); 
    }
    else if(get_id=='sub_category_name')
    {
       $("#sub_category_name").show(); 
    }
    else if(get_id=='size_name')
    {
       $("#size_name").show(); 
    }
    else if(get_id=='color_name')
    {
       $("#color_name").show(); 
    }
    
});
</script>
</body>
</html>