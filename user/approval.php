<?php include 'sidebar.php';?>
<?php
//session_start();
include("../connection.php");
 $myid=$_SESSION['userid'];
$shop=$_SESSION['shop'];

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
       

</style>
  
<div class="page  has-sidebar-left height-full">
    
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                       <table class="table table-striped table-bordered table-hover r-0" style="text-align: center; " id="example">
                                        <thead>
                                            <tr class="no-b" style="color:#fff; background-color: #1e81c2;">
                                                
                                                 <th><label style="width: 100px;">Sr No</label> </th>
                                                <th><label style="width: 100px;">Product Name</label> </th>
                                                <th><label style="width: 100px;">Product Code</label></th>
                                                <th><label style="width: 100px;">Product Barcord</label></th>  
                                                <th><label style="width: 100px;">HSN Code</label></th>
                                                <th><label style="width: 100px;">Product Type</label></th>
                                                <th><label style="width: 100px;">Adult</label></th>
                                                <th><label style="width: 100px;">Child's</label></th>
                                                <th><label style="width: 100px;">Product Brand</label></th>
                                                <th><label style="width: 100px;">Product Size</label></th>
                                                <th><label style="width: 100px;">Product Colour</label></th>
                                                <th><label style="width: 100px;">Quantity</label></th>
                                                <th><label style="width: 100px;">Purchase Rate</label></th>
                                                <th><label style="width: 100px;">Sales Rate</label></th>
                                                <th><label style="width: 70px;">GST %</label></th>
                                                <th><label style="width: 100px;">Discount</label></th>
                                                <th><label style="width: 100px;">Min-Stock</label></th>
                                                <th><label style="width: 110px;">MFG</label></th>
                                                <th><label style="width: 100px;">EXP</label></th>
                                                 <th><label style="width: 100px;">Total Cost</label></th>
                                                 <th><label style="width: 100px;">Approve</label></th>
                                                 <th><label style="width: 100px;">Reject</label></th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody style="font-size: 12px;">
                                            <?php
                                            include("../connection.php"); 
                                            $fetch_record=mysqli_query($conn,"SELECT * FROM users_product where shop='$shop' and aproval_status='0'  order by id DESC");
                                            $i=1;
                                            while ($row=mysqli_fetch_assoc($fetch_record)) {
                                                # code...
                                            


                                            ?>

                                        <tr>
                                                
                                                <td ><?php echo$i ;?></td>
                                               <td ><?php echo $row['pro_name'] ;?></td>
                                                <td ><?php echo$row['pro_code'] ;?></td>
                                                <td ><?php echo$row['hsn_code'] ;?></td>
                                                <td ><?php echo$row['barcode'] ;?></td>
                                                <td ><?php echo$row['type'] ;?></td>
                                                <td ><?php echo$row['adult'] ;?></td>
                                                <td ><?php echo$row['child'] ;?></td>
                                                <td ><?php echo$row['brand'] ;?></td>
                                                <td ><?php echo$row['size'] ;?></td>
                                                <td ><?php echo$row['color'] ;?></td>
                                                <td ><?php echo$row['qty'] ;?></td>
                                                <td ><?php echo$row['purchase_price'] ;?></td>
                                                <td ><?php echo$row['sale_price'] ;?></td>
                                                <td ><?php echo$row['gst'] ;?></td>
                                                <td ><?php echo$row['discount']  ;?></td>
                                                <td ><?php echo$row['min_stock'] ;?></td>
                                                <td ><?php echo$row['manfacturing_date'] ;?></td>
                                                <td ><?php echo$row['exp_date'] ;?></td>
                                                <td ><?php echo$row['total_price'] ;?></td>
                                                <td> <a href="agree_disagree.php?id=<?php echo $row['id'] ;?>"><button type="button" class=" r-5 "  style="height: 24px;cursor: pointer;background-image: linear-gradient(#0d93e2, #044980);font-weight: bold;font-size: 10px;border: none;text-align: center;color: aliceblue;">Approve</button></a></td>
                                                <td> <a href="agree_disagree.php?id1=<?php echo $row['id'] ;?>"><button type="button" class=" r-5 "  style="height: 24px;cursor: pointer;background-image: linear-gradient(#0d93e2, #044980);font-weight: bold;font-size: 10px;border: none;text-align: center;color: aliceblue;">Reject</button></a></td>
                                                
                                                
                                            </tr>
                                           <?php $i++;}?>


                                      
                                        </tbody>
                                    </table>
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
         </form>

    
</div>
<!-- Right Sidebar -->

<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>


<?php include 'footer.php'?>

<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel/panel-page-users.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 04:35:32 GMT -->
</html>