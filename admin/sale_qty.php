<?php 
include_once('sidebar.php');
include_once('../class/class.product.php');
$prodObj = new Product();
$uid= $_SESSION['uid'];
$data = $prodObj->getAvailableQty(Actors::SHOP,$shopid);
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
<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>-->
 


<div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
    <form method="POST" action="purchase.php">
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                             <div class="col-md-2" style="background-color: #234b0f;color: #fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 11px solid #478828;">
                    
                                <!-- <i class="icon-shopping-cart2 s-15"></i> -->
                                <span class="s-8">Sales Qty Report Of Shops</span>
                            </div>
                             <div class="col-md-10">
                                 
                             </div>
                             
                </div><br>
                 <div class="row">
                    <div class="col-md-4"></div>
                    
                    <div class="col-md-4">
                        <select class="form-control js-example-tags" id="shop">
                            <option value="none" disabled selected> Select Shop</option>
                            <?php 
                                $sql=mysqli_query($conn,"SELECT * FROM shop");
                                while($row=mysqli_fetch_assoc($sql))
                                {
                            ?>
                               <option value="<?php echo $row['id']; ?>"><?php echo $row['shop_name'];?></option>
                          <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-md-4"></div>
                </div><br>
                
           
               
                    
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <br>
                                    <table class="table table-striped table-hover table-bordered r-0" style="text-align: center;" id="purchase_records">
                                        <thead>
                                        <tr>       
                                        <th><label style="width: 35px;">Sr No</label> </th>  
                                        <th><label style="width: 100px;">Product Category</label></th>
                                        <th><label style="width: 100px;">Sale Quantity</label></th>    
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

<script>


$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#purchase_records thead tr').clone(true).appendTo( '#purchase_records thead' );
    $('#purchase_records thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#purchase_records').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
        
        
    } );
   
} );
</script>
<script>
     $(document).ready(function(){
            $("#shop").on('change',function(e){
                e.preventDefault();
                var actorID = $(this).val();
                var actorType = '<?php echo Actors::SHOP; ?>';
                // console.log(actorType,actor_id);
                $.ajax({
                url:'../controller/adminController.php?type=getAvailableQty',
                type:'POST',
                dataType:'JSON',
                data:{'shopID':actorID},
                success:function(res){
                    console.log(res);
                    if(res.length <= 0){
                        alert("No data available");
                        return false;
                    }
                    var html="";
                    var j= 1;
                    for(var i=0;i<res.length;i++){
                        html += "<tr>"
                        +"<td>"+j+"</td>"
                        +"<td>"+res[i]['product_cat']+"</td>"
                        +"<td>"+res[i]['saleqty']+"</td>"
                        ;
                        j++;
                    }
                    $("#dataTable").html(html);
                }
            });


            });
           
            
        });
</script>
<script src="//cdn.datatables.net/plug-ins/1.10.20/api/sum().js">


<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

</html>