<?php include 'sidebar.php';?>
<style>
    .back_w
    {
        background-color:#635f36;
        cursor: pointer;
    }
    .back_b
    {
        background-color:#144e4e;
        cursor: pointer;
    }
    .color_w
    {
        color:#fff;
    }
    .back_r
    {
        background-color:#675b77;
        cursor: pointer;
    }
    .back_t
    {
        background-color:#2b906e;
        cursor: pointer;
    }
    .btn-c
    {
       border: none;
    background-image: linear-gradient(#ff0404, #b31010);
    color: #e8d0d0;
    border-radius: 6px;
    cursor: pointer;
    width: 110px;
    }
</style>

<div class="page has-sidebar-left">
    
  <!-- Modal today sale -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <center><h5 class="modal-title"><span class="icon r-10  icon-calendar2  s-25"></span>&nbsp;&nbsp;Today sale</h5></center>
                  
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="col-md-12 table-responsive">
                                 <table class="table table-striped  table-hover table-bordered r-0" style="text-align: center; ">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px;">Sr.No</th>
                                                <th style="width: 30px;">Shop</th>
                                                <th style="width: 30px;">User</th>
                                                 <th style="width: 30px;">Name</th>
                                                <th style="width: 30px;">Brand</th>
                                                <th style="width: 30px;">Model</th>
                                                <th style="width: 30px;">Size</th>
                                                <th style="width: 30px;">Colour</th>
                                                <th style="width: 30px;">Qty</th>  
                                                <th style="width: 30px;">MRP</th>
                                                <th style="width: 30px;">Total</th>
                                               
                                            </tr>
                                        </thead>

                                        <tbody style="font-size: 12px; color:#1e1f1f">
                                            
                                            <tr>
                                                    <td >1</td>
                                                    <td >Reebok</td>
                                                    <td >Reebok</td>
                                                    <td >Reebok</td>
                                                    <td >Reebok</td>
                                                    <td >Reebok</td>
                                                    <td>32</td>
                                                    <td>Red</td>
                                                    <td>23</td>
                                                    <td>233</td>
                                                    <td>23333</td>
                                                   
                                            </tr>
                                          
                                      
                                        </tbody>
                                    </table>

                                </div>
                </div>
                <div class="modal-footer">
                  <center>
                        <button type="button" class="btn-c" data-dismiss="modal">Close</button>
                  </center>
                </div>
              </div>
              
            </div>
          </div>
 <!-- Modalend today sale -->  
 <!-- Modal Today Purchase  -->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <center><h5 class="modal-title"><span class="icon r-10 icon-goal s-25">&nbsp;&nbsp;</span>Today Purchase</h5></center>
                  
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                   <div class="col-md-12 table-responsive">
                                 <table class="table table-striped  table-hover table-bordered r-0" style="text-align: center; ">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px;">Sr.No</th>
                                                <th style="width: 30px;">Name</th>
                                                <th style="width: 30px;">Brand</th>
                                                <th style="width: 30px;">Model</th>
                                                <th style="width: 30px;">Size</th>
                                                <th style="width: 30px;">Colour</th>
                                                <th style="width: 30px;">Qty</th>  
                                                <th style="width: 30px;">MRP</th>
                                                <th style="width: 30px;">Total</th>
                                               
                                            </tr>
                                        </thead>

                                        <tbody style="font-size: 12px; color:#1e1f1f">
                                            
                                            <tr>
                                                    <td >1</td>
                                                    <td >Reebok</td>
                                                    <td >Reebok</td>
                                                    <td >Reebok</td>
                                                    <td>32</td>
                                                    <td>Red</td>
                                                    <td>23</td>
                                                    <td>233</td>
                                                    <td>23333</td>
                                                   
                                            </tr>
                                            
                                      
                                        </tbody>
                                    </table>

                                </div>
                </div>
                <div class="modal-footer">
                 <center>
                  <button type="button" class="btn-c" data-dismiss="modal">Close</button>
                  </center>
                </div>
              </div>
              
            </div>
          </div>
 <!-- Modal end Today Purchase-->  
  <!-- Modal Today Purchase  -->
          <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <center><h5 class="modal-title">Today Transfer</h5></center>
                  
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                   <div class="col-md-12 table-responsive">
                                 <table class="table table-striped  table-hover table-bordered r-0" style="text-align: center; ">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px;">Sr.No</th>
                                                <th style="width: 30px;">Shop</th>
                                                 <th style="width: 30px;">Name</th>
                                                <th style="width: 30px;">Brand</th>
                                                <th style="width: 30px;">Model</th>
                                                <th style="width: 30px;">Size</th>
                                                <th style="width: 30px;">Colour</th>
                                                <th style="width: 30px;">Qty</th>  
                                                <th style="width: 30px;">MRP</th>
                                                <th style="width: 30px;">Total</th>
                                               
                                            </tr>
                                        </thead>

                                        <tbody style="font-size: 12px; color:#1e1f1f">
                                            
                                            <tr>
                                                    <td >1</td>
                                                    <td >Reebok</td>
                                                    <td >Reebok</td>
                                                    <td >Reebok</td>
                                                    <td>32</td>
                                                    <td>Red</td>
                                                    <td>23</td>
                                                    <td>233</td>
                                                    <td>23</td>
                                                    <td>23333</td>
                                                   
                                            </tr>
                                            
                                      
                                        </tbody>
                                    </table>

                                </div>
                </div>
                <div class="modal-footer">
                  <center>
                  <button type="button" class="btn-c" data-dismiss="modal">Close</button>
                  </center>
                </div>
              </div>
              
            </div>
          </div>
 <!-- Modal end Today Purchase--> 
  <!-- Modal Today All Stock  -->
          <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <center><h5 class="modal-title">Today All Stock</h5></center>
                  
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                   <div class="col-md-12 table-responsive">
                                 <table class="table table-striped  table-hover table-bordered r-0" style="text-align: center; ">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px;">Sr.No</th>
                                                <th style="width: 30px;">Name</th>
                                                <th style="width: 30px;">Brand</th>
                                                <th style="width: 30px;">Model</th>
                                                <th style="width: 30px;">Size</th>
                                                <th style="width: 30px;">Colour</th>
                                                <th style="width: 30px;">Qty</th>  
                                                <th style="width: 30px;">MRP</th>
                                                <th style="width: 30px;">Total</th>
                                               
                                            </tr>
                                        </thead>

                                        <tbody style="font-size: 12px; color:#1e1f1f">
                                            
                                            <tr>
                                                    <td >1</td>
                                                    <td >Reebok</td>
                                                    <td >Reebok</td>
                                                    <td>32</td>
                                                    <td>Red</td>
                                                    <td>23</td>
                                                    <td>233</td>
                                                    <td>23</td>
                                                    <td>23333</td>
                                                   
                                            </tr>
                                            
                                      
                                        </tbody>
                                    </table>

                                </div>
                </div>
                <div class="modal-footer">
                   <center>
                  <button type="button" class="btn-c" data-dismiss="modal">Close</button>
                  </center>
                </div>
              </div>
              
            </div>
          </div>
 <!-- Modal end Today All Stock--> 
  <div class="container-fluid relative animatedParent animateOnce">  
    <div class="container-fluid animatedParent animateOnce my-3" >
      <div class="tab-pane animated fadeInUpShort show active go" id="v-pills-1">
          
          
          
          <div class="row">
                <div class="col">
                    <h1 class="s-24">
                        <i class="icon-today"></i>
                        Today<span class="s-14"></span>
                    </h1>
                </div>
            </div>
             
             <div class="row my-3">
                    <div class="col-md-3">
                     
                        <div class="counter-box  back_w  r-10 p-3" data-toggle="modal" data-target="#myModal">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon  r-10 icon-calendar2  s-48"></span>
                                </div>
                                <div class="counter-title color_w">Today sale</div>
                                <h5 class="mt-3 color_w">1,228</h5>
                            </div>
                            
                        </div>
                     
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box back_b r-10 p-3" data-toggle="modal" data-target="#myModal1">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon r-10 icon-goal s-48"></span>
                                </div>
                                <div class="counter-title color_w">Today Purchase</div>
                                <h5 class=" mt-3 color_w ">1,228</h5>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box back_t r-10 p-3" data-toggle="modal" data-target="#myModal2">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon  r-10  icon-share s-48"></span>
                                </div>
                                <div class="counter-title color_w">Today Transfer</div>
                                <h5 class=" mt-3 color_w ">1,228</h5>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box back_r  r-10 p-3" data-toggle="modal" data-target="#myModal3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon  r-10 icon-add_shopping_cart s-48"></span>
                                </div>
                                <div class="counter-title color_w">Today Stock</div>
                                <h5 class=" mt-3 color_w ">550</h5>
                            </div>
                         
                        </div>
                    </div>
                </div><hr>
                 <div class="row">
                <div class="col">
                    <h1 class="s-24">
                        <i class="icon-bar-chart2"></i>
                        Total<span class="s-14"></span>
                    </h1>
                </div>
            </div>
             <div class="row my-3">
                    <div class="col-md-3">
                     <a href="sale.php">
                        <div class="counter-box back_b    r-10 p-3 " data-toggle="modal" data-target="#myModal4">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon r-10 icon-shopping-bag2  s-48"></span>
                                </div>
                                <div class="counter-title color_w">Total sale</div>
                                <h5 class="mt-3 color_w">1,228</h5>
                            </div>
                            
                        </div>
                     </a>
                    </div>
                    <div class="col-md-3">
                       <a href="total_purchase.php">
                        <div class="counter-box back_w r-10 p-3" data-toggle="modal" data-target="#myModal5">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon r-10 icon-factory s-48"></span>
                                </div>
                                <div class="counter-title color_w">Total Purchase</div>
                                <h5 class=" mt-3 color_w ">1,228</h5>
                            </div>

                        </div>
                     </a>
                    </div>
                    <div class="col-md-3">
                     <a href="total_transfer.php">
                        <div class="counter-box back_r r-10 p-3" data-toggle="modal" data-target="#myModal6">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon r-10  icon-mail-forward s-48"></span>
                                </div>
                                <div class="counter-title color_w">Totat Transfer</div>
                                <h5 class=" mt-3 color_w ">1,228</h5>
                            </div>
                            
                        </div>
                     </a>
                    </div>
                    <div class="col-md-3">
                     <a href="total_stock.php">
                        <div class="counter-box back_t  r-10 p-3" data-toggle="modal" data-target="#myModal7">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon  r-10 icon-shopping-cart2 s-48"></span>
                                </div>
                                <div class="counter-title color_w">Total Stock</div>
                                <h5 class=" mt-3 color_w ">550</h5>
                            </div>
                         
                        </div>
                     </a>
                    </div>
                </div>
                </div><hr>
         </div>
    </div>
</div>
<?php include 'footer.php'?>
<script src="assets/js/app.js"></script>

