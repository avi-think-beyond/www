
        <?php include("header.php"); ?>
<br><br><br>
     <!------------index page css----------->
      <link rel="stylesheet" href="css/bootstrap.min2.css">
      <link rel="stylesheet" href="css/dashboard.css">
      <link rel="stylesheet" href="css/layout.css">
   </head>
   <body>



    <!-- <div class="panel-heading">
                                            <h4>
                                                Dashboard</h4>
                                            <span id="ctl00_ContentPlaceHolder1_lblMsg" class="col-sm-offset-2" style="color:Green;font-size:10px;font-weight:bold;"></span>
                                                <span class="control m-r-100">To Open Sale Page Press <b>S</b></span>
                                        </div> -->

<div class="container-fluid">
<div class="maindv">
      <div class="box-main" id="boxdash">
        <!-- <div class="row"> -->


                                  
                                                
                                            <div class="col-md-4 col-sm-6">  <div class="box1 box">  <fieldset>  <legend>Sale</legend>  <div class="boxscroll" id="Sale">    <a class="myLink" onclick="redirectToPageDash(this,'../Reports/SaleList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123Sale">Today</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/SaleList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123Sale">Last Week</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/SaleList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123Sale">Last Month</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/SaleList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123Sale">Year</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div></div>  </fieldset>  </div>   </div>

                                            <div class=" col-md-4 col-sm-6">  <div class="box1 box">  <fieldset>  <legend>CreditNote</legend>  <div class="boxscroll" id="CreditNote">    <a class="myLink" onclick="redirectToPageDash(this,'../Reports/CreditNoteList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123CreditNote">Today</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/CreditNoteList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123CreditNote">Last Week</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/CreditNoteList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123CreditNote">Last Month</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/CreditNoteList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123CreditNote">Year</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div></div>  </fieldset>  </div>   </div>

                                            <div class=" col-md-4 col-sm-6">  <div class="box1 box">  <fieldset>  <legend>Purchase</legend>  <div class="boxscroll" id="Purchase">    <a class="myLink" onclick="redirectToPageDash(this,'../Reports/PurchaseList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123Purchase">Today</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/PurchaseList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123Purchase">Last Week</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/PurchaseList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123Purchase">Last Month</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/PurchaseList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123Purchase">Year</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div></div>  </fieldset>  </div>   </div>


                                            <div class=" col-md-4 col-sm-6">  <div class="box1 box">  <fieldset>  <legend>DebitNote</legend>  <div class="boxscroll" id="DebitNote">    <a class="myLink" onclick="redirectToPageDash(this,'../Reports/DebitNoteList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123DebitNote">Today</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/DebitNoteList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123DebitNote">Last Week</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/DebitNoteList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123DebitNote">Last Month</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/DebitNoteList.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123DebitNote">Year</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id=""></span></a> <div class="clearfix"></div></div>  </fieldset>  </div>   </div>

                                            <div class=" col-md-4 col-sm-6">  <div class="box1 box">  <fieldset>  <legend>Current Stock</legend>  <div class="boxscroll" id="CurrentStock">    <a class="myLink" onclick="redirectToPageDash(this,'../Reports/stockreport.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123Current Stock">Closing Stock</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id="">101</span></a> <a class="myLink" onclick="redirectToPageDash(this,'../Reports/stockreport.aspx?horedirect=123')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123Current Stock">Closing Stock Value</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id="">925.32</span></a> </div>  </fieldset>  </div>   </div>


                                            <div class=" col-md-4 col-sm-6">  <div class="box1 box">  <fieldset>  <legend>ExipryItems</legend>  <div class="boxscroll" id="ExipryItems">    <a class="myLink" onclick="redirectToPageDash(this,'../Reports/ExpiryItems.aspx?month=')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123ExipryItems">One Month</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id="3">3</span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/ExpiryItems.aspx?month=')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123ExipryItems">Two Month</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id="0">0</span></a> <div class="clearfix"></div><a class="myLink" onclick="redirectToPageDash(this,'../Reports/ExpiryItems.aspx?month=')"><span class="col-sm-6 pdlr0" style="text-align:left;" id="id123ExipryItems">Three Month</span>  <span runat="server" class="col-sm-6" style="text-align:right;" id="0">0</span></a> <div class="clearfix"></div></div>  </fieldset>  </div>   </div></div>
                                                                          <!-- <div class="panel-body overflow-scroll col-sm-4 hidden">
                                         <label class="mrg">Low Qty Items</label>
                                                       <div class="clearfix"></div>
                                            <div class="table-responsive table-responsive mrg" id="parent" style="overflow: auto;">
                                                
                                            <table class=" table table-bordered fixTable" id="tableStock">
                                                </table></div>
                                        <div id="divLoader" style="display: none;"><img src="images/loading.gif" id="imgt" width="45px" height="45px" style="margin: 17% 50%;"></div></div> -->
                                        <div class="clearfix">
                                        </div>
                                     
                                        </div>
                                      </div>
                                    <!-- </div> -->
<!------------------------Footer------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->

<!-- <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> -->

   </body>
   </html>