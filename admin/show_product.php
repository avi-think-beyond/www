<?php include 'sidebar.php';?>
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
    .label {
    margin-bottom: 0px;
    }
</style>
<div class="page  has-sidebar-left height-full">
    <form method="POST" action="purchase.php">
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="row">
                             <div class="col-md-2" style="background-color:#234b0f;color:#fff;font-size: 18px;border-bottom-right-radius: 21px;
    border-top-right-radius: 21px;border-bottom: 7px solid #478828;">
                    
                        <i class="icon-factory s-15"></i>
                        <span class="s-8">Purchase</span>
                    
                </div>
                             <div class="col-md-3">
                                 
                             </div>
                             <div class="col-md-5">
                               
                             </div>
                             <div class="col-md-2">
                                  <button type="submit" name="purchase" class="btn btn-danger btn-lg r-10 " style="height: 34px;float:right;background-image: linear-gradient(#234b0f, #478828); font-weight: bold;  font-size: 13px; text-align: center;"><i class="icon-add_shopping_cart mr-2"></i>Purchase</button>
                             </div>
                        </div><div class="row my-3">
                     
                     <div class="col-md-2" > 
                               	<label class="la" ><i class="icon-calendar s-15"></i>&nbsp;&nbsp;From (Date)</label>
                                         <input type="text" id="datepicker-13" class="btn1 form-control" >
                    </div>
                     <div class="col-md-2" > 
                               	<label class="la"><i class="icon-calendar s-15"></i>&nbsp;&nbsp;To (Date)</label>
                                        <input type="text" id="datepicker-131" class="btn1 form-control" >
                                    
                    </div>
                    <div class="col-md-2" > 
                               	<label class="la" ><i class="icon-book-bookmark s-15"></i>&nbsp;&nbsp;Product Name</label>
                                        <input list="brow5" class="btn1 form-control" >
                                        <datalist id="brow5">
                                          <option value="Jackets and coats.">
                                          <option value="Suits">
                                          <option value="Skirts and dresses">
                                          <option value=" waistcoats">
                                          
                                        </datalist>  
                    </div>
                    <div class="col-md-2" > 
                                    <label class="la"><i class="icon-tags s-15"></i>&nbsp;&nbsp;Brand</label>
                                         <input list="brow3"class="btn1 form-control" >
                                        <datalist id="brow3">
                                          <option value="Christian Dior">
                                          <option value="Nike">
                                          <option value="Adidas">
                                          <option value="Gap">
                                          <option value="Under Armour">
                                        </datalist>  
                    </div>
                     <div class="col-md-1"> 
                          <label class="la"><i class="icon-expand s-15"></i>&nbsp;&nbsp; Size</label>
                                         <input list="brow"class="btn1 form-control" >
                                        <datalist id="brow">
                                          <option value="32">
                                          <option value="34">
                                        </datalist>  
                    </div>
                     <div class="col-md-2"> 
                             <label class="la"><i class="icon-camera2 s-15"></i>&nbsp;&nbsp; Colour</label>
                                        <input list="brow1"class="btn1 form-control" >
                                        <datalist id="brow1">
                                          <option value="Red">
                                          <option value="Blue">
                                          <option value="Blue-green">
                                          <option value="Blue-violet">
                                          <option value="Orange">
                                        </datalist>  
                    </div>
                     <div class="col-md-1"> 
                            <label class="la" ><i class="icon-mask s-15"></i>&nbsp;&nbsp; Group</label>
                                       <input list="brow2"class="btn1 form-control" style="padding:0px;padding-left:4px;" >
                                        <datalist id="brow2">
                                           <option value="Adult">
                                              <option value="Child">
                                        </datalist>  
                                       
                    </div>
            </div>
                    
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                
                                    <table class="table table-striped table-hover table-bordered " style="text-align: center; " id="example1" >
                                        <thead>
                                            <tr class="" style="color:#fff; background-color: #1e81c2;">
                                                <th><label style="width: 20px;">
                                                    

                                                  <input type="checkbox" id="selectAll"> 
                                                   
                                                </th>
                                                <th><label style="width: 40px;">Sr No</label> </th>
                                                <th><label style="width: 80px;">Name</label> </th>
                                                <th><label style="width: 80px;">Code</label></th>
                                                <th><label style="width: 80px;">HSN</label></th>  
                                                <th><label style="width: 80px;">Barcode</label></th>
                                                <th><label style="width: 80px;">Model</label></th>
                                                <th><label style="width: 30px;">Adult</label></th>
                                                <th><label style="width: 30px;">Child</label></th>
                                                <th><label style="width: 80px;">Brand</label></th>
                                                <th><label style="width: 30px;">Size</label></th>
                                                <th><label style="width: 60px;">Colour</label></th>
                                                <th><label style="width: 50px;">Qty</label></th>
                                                <th><label style="width: 80px;">Purchase Rate</label></th>
                                                <th><label style="width: 80px;">Sales Rate</label></th>
                                                <th><label style="width: 80px;">MRP</label></th>
                                                <th><label style="width: 35px;">GST%</label></th>
                                                <th><label style="width: 30px;">DIS%</label></th>
                                                <th><label style="width: 70px;">Min-Stock</label></th>
                                                <th><label style="width: 70px;">MFG</label></th>
                                                <th><label style="width: 70px;">EXP</label></th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody style="font-size: 12px;">
                                            <?php
                                            include("../connection.php"); 
                                            $fetch_record=mysqli_query($conn,"SELECT * FROM product order by id DESC");
                                            $i=1;
                                            while ($row=mysqli_fetch_assoc($fetch_record)) {
                                                
                                            ?>

                                                <tr>
                                                <td>
                                                 <label style="width: 20px;">  <input type="checkbox" name="check[]" value="<?php echo $row['id'] ;?>"></label>
                                                </td>
                                                <td ><label style="width: 40px;"><?php echo$i ;?></label></td>
                                                <td ><label style="width: 80px;"><?php echo $row['pro_name'] ;?></label></td>
                                                <td ><label style="width: 80px;"><?php echo$row['pro_code'] ;?></label></td>
                                                <td ><label style="width: 80px;"><?php echo$row['hsn_code'] ;?></label></td>
                                                <td ><label style="width: 80px;"><?php echo$row['barcode'] ;?></label></td>
                                                <td ><label style="width: 80px;"><?php echo$row['type'] ;?></label></td>
                                                <td ><label style="width: 30px;"><?php echo$row['adult'] ;?></label></td>
                                                <td ><label style="width: 30px;"><?php echo$row['child'] ;?></label></td>
                                                <td ><label style="width: 80px;"><?php echo$row['brand'] ;?></label></td>
                                                <td ><label style="width: 30px;"><?php echo$row['size'] ;?></label></td>
                                                <td ><label style="width: 60px;"><?php echo$row['color'] ;?></label></td>
                                                <td ><label style="width: 50px;"><?php echo$row['qty'] ;?></label></td>
                                                <td ><label style="width: 80px;"><?php echo$row['purchase_price'] ;?></label></td>
                                                <td ><label style="width: 80px;"><?php echo$row['sale_price'] ;?></label></td>
                                                <td ><label style="width: 80px;"><?php echo$row['mrp'] ;?></label></td>
                                                <td ><label style="width: 35px;"><?php echo$row['gst'] ;?></label></td>
                                                <td ><label style="width: 30px;"><?php echo$row['discount']  ;?></label></td>
                                                <td ><label style="width: 70px;"><?php echo$row['min_stock'] ;?></label></td>
                                                <td ><label style="width: 70px;"><?php echo$row['manfacturing_date'] ;?></label></td>
                                                <td ><label style="width: 70px;"><?php echo$row['exp_date'] ;?></label></td>
                                                
                                                
                                            </tr>
                                           <?php $i++; } ?>


                                      
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

<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
<script type="text/javascript">
  $(document).ready(function () {
  $('body').on('click', '#selectAll', function () {
    if ($(this).hasClass('allChecked')) {
        $('input[type="checkbox"]', '#example1').prop('checked', false);
    } else {
        $('input[type="checkbox"]', '#example1').prop('checked', true);
    }
    $(this).toggleClass('allChecked');
  })
});
</script>
</body>

</html>