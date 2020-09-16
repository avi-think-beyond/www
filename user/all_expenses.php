<?php include 'sidebar.php';
error_reporting(null); 
session_start();
$shop= $_SESSION['uid'];
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"/>



 <div class="page  has-sidebar-left height-full" style="background-color: rgb(254, 254, 254)">
    <form method="POST" action="purchase.php">
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                             <div class="col-md-2 label" style="background-color: #234b0f;color: #fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 11px solid #478828;">
                    
                                <i class="icon-shopping-cart2 s-15"></i>
                                <span class="s-8">All Expenses</span>
                            </div>
                             <div class="col-md-10">
                             </div>
                        </div>
                 <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <br>
    <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
            <tr>
                <td>From Date:</td>
                <td><input name="min" id="min" type="text" class="form-control"></td>

                <td>To Date:</td>
                <td><input name="max" id="max" type="text" class="form-control"></td>
            </tr>
            <tr>
                
            </tr>
        </tbody>
    </table>
                                    <table class="table table-striped table-hover table-bordered r-0" style="text-align: center;" id="expense_table">
                                        <thead>
                                            <tr >
                                                
                                                <th><label style="width: 35px;">Sr No</label> </th>
                                                <th><label style="width: 100px;">Bill No.</label></th>
                                                <th><label style="width: 100px;">Bill Name</label></th>
                                                <th><label style="width: 100px;">Invoice No.</label></th>
                                                <th><label style="width: 100px;">Date</label></th>
                                                <th><label style="width: 100px;">Amount</label></th>
                                                <th><label style="width: 100px;">Party Name</label></th>
                                                <th><label style="width: 100px;">Address</label></th>
                                                <th><label style="width: 100px;">Nobile No</label></th>
                                              
                                                <th><label style="width: 100px;">Payment Method</label></th>
                                               
                                                <th><label style="width: 80px;">Action</label></th>
                                                
                                            </tr>
                                        </thead>
                                    <tbody>
                                        <?php 
                                        include '../connection.php';
                                        $i=1;
                                        $sql=mysqli_query($conn,"SELECT * FROM expenses_details where user='$shop' ORDER BY id DESC");
                                        while($row=mysqli_fetch_assoc($sql))
                                        {
                                        ?>
                                           <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['bill_no']; ?></td>
                                             <td><?php echo $row['bill_name']; ?></td>
                                            <td><?php echo $row['code'].''.$row['invoice_no']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['amount']; ?></td>
                                            <td><?php echo $row['party_name']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                           
                                            <td><?php echo $row['payment_method']; ?></td>
                                            
                                             <td><a href="edit_expenses.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> </a><a href="expenses_slip.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-print"></i> </a></td>
                                           </tr>
                                           <?php $i++; } ?>
                                        </tbody>
                                         <thead>
                                            <tr >
                                                
                                                <th><label style="width: 35px;">Count<br>   <?php  
                                                $countquery=mysqli_query($conn,"SELECT count(*) as count FROM expenses_details where user='$shop'") or die(mysqli_error($conn)); 
                                                $countdata=mysqli_fetch_assoc($countquery); 
                                               echo $totalcount=$countdata['count'];
                                                ?></label> </th>
                                                <th><label style="width: 100px;"></label></th>
                                                <th><label style="width: 100px;"></label></th>
                                                <th><label style="width: 100px;"></label></th>
                                                <th><label style="width: 100px;"></label></th>
                                                <th><label style="width: 100px;">Net Value <br>
                                                <?php  
                                                $query=mysqli_query($conn,"SELECT sum(amount) as total FROM expenses_details where user='$shop'") or die(mysqli_error($conn)); 
                                                $data=mysqli_fetch_assoc($query); 
                                               echo $total=$data['total'];
                                                ?>
                                                        
                                                    </label></th>
                                                <th><label style="width: 100px;"></label></th>
                                                <th><label style="width: 100px;"></label></th>
                                                <th><label style="width: 100px;"></label></th>
                                                <th><label style="width: 100px;"></label></th>
                                               
                                                
                                                <th><label style="width: 80px;"></label></th>
                                                
                                            </tr>
                                        </thead>
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

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
    $('#expense_table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ]
    } );
} );


         $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = $('#min').datepicker("getDate");
            var max = $('#max').datepicker("getDate");
            var startDate = new Date(data[4]);
            if (min == null && max == null) { return true; }
            if (min == null && startDate <= max) { return true;}
            if(max == null && startDate >= min) {return true;}
            if (startDate <= max && startDate >= min) { return true; }
            return false;
        }
        );

       
            $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true,dateFormat: "yy-mm-dd" });
            $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true,dateFormat: "yy-mm-dd" });
            var table = $('#expense_table').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function () {
                table.draw();
            });
        });
</script>
