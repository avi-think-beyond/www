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
            <div class="col-md-4">
                From Date: <input name="min" id="min" type="text" class="form-control" placeholder="From Date">
            </div>             
            <div class="col-md-4">
                To Date:<input name="max" id="max" type="text" class="form-control" placeholder="To Date">
            </div>  
            <div class="col-md-4" style="margin-top:22px;">
                <button type="button" id="submitBtn" class="btn btn-default">Search</button>
            </div>
                         
            </div>
            </div>
           
            <br>
            
                        <!-- <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <br>
                                    <table class="table table-striped table-hover table-bordered r-0" style="text-align: center;" id="purchase_records">
                                        <thead>
                                            <tr>
                                            <th id="shop_name">Sitename</th>   
                                            <th id="gender_name">Gender</th>  
                                            <th id="product_name">Product</th>
                                            <th id="sub_category_name">Sub Category</th>
                                            <th id="size_name">Size</th>  
                                            <th id="color_name">Colour</th>       
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
                        </div> -->
                        <div id="wdr-component"></div>
                    </div>
                </div>

                
            </div>
         
    </form>
    <?php include 'footer.php'; ?>
</div>
<!-- Right Sidebar -->

<div class="control-sidebar-bg fixed"></div>

</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>-->
<link href="https://cdn.webdatarocks.com/latest/webdatarocks.min.css" rel="stylesheet" />
<script src="https://cdn.webdatarocks.com/latest/webdatarocks.toolbar.min.js"></script>
<script src="https://cdn.webdatarocks.com/latest/webdatarocks.js"></script>
<script>
// var finalDataJSON;
function drawTable(jsonFormat){
    console.log('function called');
    console.log(jsonFormat);
    var pivot = new WebDataRocks({
        container: "#wdr-component",
        toolbar: true,
        height: 395,
        report: {
            dataSource: {
                data: jsonFormat
            },
            slice:{
                rows:[
                    {
                        uniqueName : 'shop_name',
                    }
                ],
                columns: [
                    {
                        uniqueName: "[Measures]"
                    }
                ],
                measures:[
                    {
                        uniqueName : 'saleqty',
                        aggreation : 'sum',
                        caption : 'Sale Qty'
                    },
                    {
                        uniqueName : 'Smrp',
                        aggreation : 'sum',
                        caption : 'MRP'  
                    },
                    {
                        uniqueName : 'stock',
                        formula : 'sum("stockqty")-sum("saleqty")',
                        caption : 'Stock Qty'
                    },
                    {
                        uniqueName : 'Swsp',
                        aggreation : 'sum',
                        caption : 'WSP'
                    }
                ]
            }
        }
    });

}
$(document).ready(function(){
    $("#min").datepicker({  changeMonth: true, autoclose: true, changeYear: true,dateFormat: "yy-mm-dd" });
    $("#max").datepicker({  changeMonth: true, autoclose: true, changeYear: true,dateFormat: "yy-mm-dd" });
    var table = $('#expense_table').DataTable();
    $("#submitBtn").click(function(){
       var minDate =  $("#min").val();
       var maxDate =  $("#max").val();
       $.ajax({
            url:'../controller/adminController.php?type=getcategory_filter_new',
            type:'POST',
            dataType:'JSON',
            data:{
                "startDate":minDate,"endDate":maxDate // sending selected filter and date range to fetch data
            },
            async:false,
            success:function(res){
                drawTable(res);
            }
        })
    });
});
</script>

</body>
</html>