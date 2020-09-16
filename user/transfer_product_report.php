<?php include 'sidebar.php';?>
<?php
ini_set("display_errors","1");
include('../connection.php');
include_once('../class/class.product.php');
$prodObj = new Product();
$productData = $prodObj->getTransferData();
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 


<div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
    <form method="POST" action="purchase.php">
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                     <div class="col-md-2" style="background-color: #234b0f;color: #fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 11px solid #478828;">
                        <i class="icon-shopping-cart2 s-15"></i>
                        <span class="s-8">Transfer Product Report</span>
                    </div>
                    <div class="col-md-10">
                         <div class="row">
                             <div class="col-md-4">
                             </div>
                              <div class="col-md-2">
                             </div>
                              <div class="col-md-6">
                                  <!-- <button type="button" class="btn btn-info" id="admin_to_shop">Admin To Shop</button> -->
                                  <button type="button" class="btn btn-warning" id="shop_to_shop">Shop To Shop</button>
                                 <button type="button" class="btn btn-danger" id="shop_to_admin">Shop To Admin</button>
                             </div>
                         </div>
                    </div>
                </div><BR>
                <div class="row"  id="adminToshop" style="display:none;">
                    <div class="col-md-4"></div>
                    
                    <div class="col-md-4">
                        <select class="form-control" id="adminToshopID">
                            <option value=""> Select Shop</option>
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
                </div>
                
                <div class="row"  id="shopToshop" style="display:none;">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <label>From</label>
                        <select class="form-control sa" id="fromshop" >
                            <option value="none" selected> Select Shop</option>
                            <?php 
                                $sql=mysqli_query($conn,"SELECT * FROM shop");
                                while($row=mysqli_fetch_assoc($sql))
                                {
                            ?>
                               <option value="<?php echo $row['id']; ?>"><?php echo $row['shop_name'];?></option>
                          <?php } ?>
                        </select>
                    </div>
                     
                    <div class="col-md-4">
                        <label>To</label>
                        <select class="form-control sa" id="toshop" >
                            <option value="none" selected> Select Shop</option>
                           <?php 
                                $sql=mysqli_query($conn,"SELECT * FROM shop");
                                while($row=mysqli_fetch_assoc($sql))
                                {
                            ?>
                               <option value="<?php echo $row['id']; ?>"><?php echo $row['shop_name'];?></option>
                          <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-md-2"></div>
                </div>
                
                <div class="row"  id="shopToadmin" style="display:none;">
                    <div class="col-md-4"></div>
                    
                    <div class="col-md-4">
                        <select class="form-control js-example-tags" id="shop2">
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
                </div>
                    
                    <BR>
                
      
                    
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <br>
                                    <table class="table table-striped table-hover table-bordered r-0" style="text-align: center;" id="purchase_records">
                                        <thead>
                                            <tr >
                                                
                                                <th><label style="width: 35px;">Sr No</label> </th>
                                                <th><label style="width: 100px;">From</label> </th>
                                                <th><label style="width: 100px;">To</label></th>
                                                <th><label style="width: 100px;">Date</label></th>  
                                                <th><label style="width: 100px;">Status</label></th>
                                                <th><label style="width: 100px;">View Details</label></th>
                            
                                                
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

<div id="transferDetailsModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Transfer Product Details</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Category</th>
                    <th>Transfer Qty</th>
                    <th>Received Qty</th>
                </tr>
            </thead>
            <tbody id="modalTBody"></tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <?php include 'footer.php'?>

</div>
<!-- Right Sidebar -->

<div class="control-sidebar-bg fixed"></div>

</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<script>


// $(document).ready(function() {
//     // Setup - add a text input to each footer cell
//     $('#purchase_records thead tr').clone(true).appendTo( '#purchase_records thead' );
//     $('#purchase_records thead tr:eq(1) th').each( function (i) {
//         var title = $(this).text();
//         $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
 
//         $( 'input', this ).on( 'keyup change', function () {
//             if ( table.column(i).search() !== this.value ) {
//                 table
//                     .column(i)
//                     .search( this.value )
//                     .draw();
//             }
//         } );
//     } );
 
//     var table = $('#purchase_records').DataTable( {
//         orderCellsTop: true,
//         fixedHeader: true
        
        
//     } );
   
// } );



</script>

<script>
 $(".js-example-tags").select2({
  tags: true
});
</script>

<script>
    $(document).ready(function(){
        $("#admin_to_shop").click(function(){
            $("#adminToshop").show();
            $("#shopToshop").hide();
            $("#shopToadmin").hide();
        });
        
        $("#shop_to_shop").click(function(){
            $("#shopToshop").show();
            $("#adminToshop").hide();
            $("#shopToadmin").hide();
        });
        
        $("#shop_to_admin").click(function(){
            $("#shopToadmin").show();
            $("#adminToshop").hide();
            $("#shopToshop").hide();
        });
    });
</script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#adminToshopID").on('change',function(e){
                // console.log($(this));
                e.preventDefault();
                var toID = $(this).val();
                var toType = '<?php echo Actors::SHOP ; ?>';
                var fromID = '<?php echo $_SESSION['uid'];?>';
                var fromType = '<?php echo Actors::ADMIN; ?>';
                // console.log(toID,toType,fromID,fromType);
                getTransferData(fromType,fromID,toType,toID);
            });
            $("#fromshop").on('change',function(e){
                // console.log($(this));
                e.preventDefault();
                var toID = $("toshop").val(); 
                var toType = '<?php echo Actors::SHOP ; ?>';
                var fromID = $(this).val();
                var fromType = '<?php echo Actors::SHOP; ?>';
                // console.log(toID,toType,fromID,fromType);
                getTransferData(fromType,fromID,toType,toID);
            });
            $("#tohop").on('change',function(e){
                // console.log($(this));
                e.preventDefault();
                var toID = $(this).val(); 
                var toType = '<?php echo Actors::SHOP ; ?>';
                var fromID = $("fromshop").val();
                var fromType = '<?php echo Actors::SHOP; ?>';
                // console.log(toID,toType,fromID,fromType);
                getTransferData(fromType,fromID,toType,toID);
            });
        });


        function getTransferData(fromType,fromID,toType,toID){
            $.ajax({
                url:'../controller/adminController.php?type=getTransferData',
                type:'POST',
                dataType:'JSON',
                data:{'fromType':fromType,'fromID':fromID,'toType':toType,'toID':toID},
                success:function(res){
                    // console.log(res);
                    if(res.length <= 0){
                        alert("No data available");
                        return false;
                    }
                    var html="";
                    var j= 1;
                    for(var i=0;i<res.length;i++){
                        var status ="";
                        if(res[i]['flag'] == 1){
                            status ="Waiting to receive";
                        }else if(res[i]['flag'] == 2){
                            status = "Received by <b>"+res[i]['receivedBy']+"</b> on <b>"+res[i]['receive_date']+"</b>";
                        }
                        html += "<tr>"
                        +"<td>"+j+"</td>"
                        +"<td>"+res[i]['fromName']+"</td>"
                        +"<td>"+res[i]['toName']+"</td>"
                        +"<td>"+res[i]['transfer_date']+"</td>"
                        +"<td>"+status+"</td>"
                        +"<td><button type='button' class='btn btn-default viewTrf' data-toggle='modal' data-target='#transferDetailsModal' data-id='"+res[i]['ID']+"'>View</button></td>"
                        ;
                        j++;
                    }
                    $("#dataTable").html(html);
                }
            });
        }
    $(document).ready(function() {
        $('#purchase_records').DataTable( {
            // responsive: true
        });
    });
    $(document).on("click",".viewTrf",function(){
        var transactionID = $(this).attr('data-id');
        // console.log(transactionID);
        $.ajax({
            url:'../controller/adminController.php?type=getTransferQtyDetails',
            type:'POST',
            dataType:'JSON',
            data:{'transactionID':transactionID},
            success:function(res){
                var html = "";
                for(var i=0;i<res.length;i++){
                    html += "<tr>"
                    +"<td>"+res[i]['product_code']+"</td>"
                    +"<td>"+res[i]['product_cat']+"</td>"
                    +"<td>"+res[i]['t_qty']+"</td>"
                    +"<td>"+res[i]['r_qty']+"</td>"
                    +"</tr>";
                }
                $("#modalTBody").html(html);
            }
        })
    })
    </script>
<script>

// function check(selectObject) {
//     var x = selectObject.value; 
//     var y = selectObject.value;
//     if(x==y)
//     {
//         alert('failed')
//     }
//     else
//     {
//       alert('success'); 
//     }
// }

// $('.sa').on('change', function () {
//     var val = $(this).val();
//     var i = $(this).index();
//     $('.sa:not(:eq('+i+'))').each(function () {
//         if ($(this).val() === val) {
//             alert('Both has the same value');
//             $('.sa').prop('selectedIndex',0);
//         }
//     });
// });
</script>
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

</html>