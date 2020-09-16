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
</style>
<div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
    
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                     <div class="col-md-3" style="background-color:#234b0f;color:#fff;font-size: 18px;border-bottom-right-radius: 21px;
    border-top-right-radius: 21px;border-bottom: 7px solid #478828;">
                    
                        <i class="icon-barcode s-13"></i>
                        <span class="s-5">Generate Barcode</span>
                    
                </div>
                
                <div class="col-md-7">
                    
                </div>
                
                <div class="col-md-2">
                            <a href="img/girl-with-border.jpg"class=" btn-lg r-10 "  style="height: 34px;background-image:  linear-gradient(#39741c, #39741c);color:#fff; font-weight: bold;  font-size: 14px; text-align: center;" download><i class="icon icon-arrow-circle-o-down"></i>&nbsp;Download</a>
                       </div>
                             
                </div>
                <div class="row my-3">
                     
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
                                <form>
                                    <table class="table table-striped table-hover table-bordered" style="text-align: center;" >
                                          <thead>
                                            <tr >
                                               <th><label style="width: 40px;">Sr No</label> </th>
                                                <th><label style="width: 100px;">Name</label> </th>
                                                <th><label style="width: 100px;">Code</label></th>
                                                <th><label style="width: 100px;">HSN </label></th>
                                                <th><label style="width: 100px;">Model</label></th>
                                                <th><label style="width: 60px;">Adult</label></th>
                                                <th><label style="width: 60px;">Child</label></th>
                                                <th><label style="width: 100px;">Brand</label></th>
                                                <th><label style="width: 100px;">Size</label></th>
                                                <th><label style="width: 100px;">Colour</label></th>
                                                <th><label style="width: 100px;">Qty</label></th>
                                                <th><label style="width: 100px;">Purchase Rate</label></th>
                                                <th><label style="width: 100px;">Sales Rate</label></th>
                                                <th><label style="width: 100px;">MRP</label></th>
                                                <th><label style="width: 50px;">GST %</label></th>
                                                <th><label style="width: 100px;">DIS%</label></th>
                                                
                                                <th><label style="width: 100px;">Mfg</label></th>
                                                <th><label style="width: 100px;">Exp</label></th>
                                                
                                                
                                            </tr>
                                        </thead>

                                        <tbody style="font-size: 12px;" id="dataTable">

                                      <?php 
                                         include("../connection.php");
                                         $show_data=mysqli_query($conn,"SELECT * FROM stock ORDER BY id ASC");
                                         $i=1;
                                         while($data=mysqli_fetch_assoc($show_data))
                                         {
                                          
                                        ?>
                                        <tr>
                                               
                                        <td ><label style="width: 40px;"><?php echo$i ;?></label></td>
                                        <td ><label style="width: 100px;"><?php echo $data['product_name'] ;?></label></td>
                                        <td><label style="width: 100px;"><?php echo $data['invoice'] ;?></label></td>
                                        <td><label style="width: 100px;"><?php echo $data['hsn_code'] ;?></label></td>
                                        <td><label style="width: 100px;"><?php echo $data['product_type'] ;?></label></td>
                                        <td><label style="width: 50px;"><?php echo $data['adult'] ;?></label></td>
                                        <td><label style="width: 50px;"><?php echo $data['child'] ;?></label></td>
                                        <td><label style="width: 100px;"><?php echo $data['brand'] ;?></label></td>
                                        <th><label style="width: 100px;"><?php echo $data['size'] ;?></label></th>
                                        <td><label style="width: 100px;"><?php echo $data['color'] ;?></label></td>
                                        <td><label style="width: 80px;"><?php echo $data['quantity'] ;?></label></td>
                                        <td><label style="width: 80px;"><?php echo $data['purchase_rate'] ;?></label></td>
                                        <td><label style="width: 100px;"><?php echo $data['sales_rate'] ;?></label></td>
                                        <td><label style="width: 100px;"><?php echo $data['mrp'] ;?></label></td>
                                        <td><label style="width: 50px;"><?php echo $data['gst'] ;?></label></td>
                                        <td><label style="width: 30px;"><?php echo $data['discount_price'] ;?></label></td>
                                        <td><label style="width: 80px;"><?php echo $data['manfacturing_date'] ;?></label></td>
                                        <td><label style="width: 80px;"><?php echo $data['exp_date'] ;?></label></td>
                                        
                                        <?php $i++;}?>     


                                      
                                        </tbody>
                                    </table>
                                </form>
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
         
<?php include 'footer.php'?>
    
</div>
<!-- Right Sidebar -->

<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>




<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel/panel-page-users.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 04:35:32 GMT -->
</html>