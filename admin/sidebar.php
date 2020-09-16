<?php
include_once("../connection.php"); 

error_reporting(null);
session_start();
if(!isset($_SESSION['uid']))
{
    echo "<script>window.open('../index.php','_SELF');</script>";
}

?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <script src="js/canvasjs.min.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Javascript -->
      <script>
         $(function() {
            $( "#datepicker-13" ).datepicker();
            $( "#datepicker-131" ).datepicker();
             $( "#menu_date" ).datepicker();
             $( "#exp_date" ).datepicker();
           
          
         });
      </script>
      <link rel="icon" href="#" type="">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
      <title>jk clothing</title>
      <!-- CSS -->
      <link rel="stylesheet" href="assets/css/app.css">
       <script>
    /* API method to get paging information */
    'use strict';
  var $ = jQuery;
  $.getScript("https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js", function(){
       
            $('#example').DataTable( {
                
            } );
  });
</script> 
      <style>
        
      .sidebar-menu li a:hover
      {
          background-color:#0c3454;
      }

     
      .icon1
      {
          color:#b8afc1;
      }
         
      </style>
      <script>
         function startTime() {
           var today = new Date();
           var h = today.getHours();
           var m = today.getMinutes();
           var s = today.getSeconds();
           m = checkTime(m);
           s = checkTime(s);
           var suffix = "AM";
             if (h >= 12) {
             suffix = "PM";
             h = h - 12;
             }
             if (h == 0) {
              h = 12;
             }
           document.getElementById('txt').innerHTML =
           h + ":" + m + ":" + s+":"+suffix;
           var t = setTimeout(startTime, 500);
         }
         function checkTime(i) {
           if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
           return i;
         }
      </script>
      <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
   </head>

   <body onload="startTime()" class="light" style="background-color:#9dbb8f;">
      <div id="app" class="">
      <aside class="main-sidebar fixed  offcanvas shadow" data-toggle='offcanvas'>
         <section class="sidebar">
            <!--  <div class="">
               <img src="assets/img/logo1.png" style="width: 100%; height: 45px;" alt=""> 
               </div> -->
            <div class="relative">
               <div class="user-panel p-3  mb-2" style="background-image: linear-gradient(#406d2a, #1f470b);">
                  <div>
                     <!--<div class="float-left image">-->
                     <!--   <a href="dashboard.php"><img  class="user_avatar" src="assets/img/dummy/u2.png" alt="User Image"></a>-->
                     <!--</div>-->
                     <div class="float-left info">
                        <h5 class="font-weight-light mt-3 mb-3" ><a href="dashboard.php"style="color: #fff;">FASHION STORE</a></h5>
                     </div>
                  </div>
               </div>
            </div>
            <ul class="sidebar-menu">
               <li class="treeview ">
                  <a href="#"><i class="icon1 icon icon-cogs "></i>Setting<i
                     class="icon icon-angle-left s-18 pull-right"></i></a>
                  <ul class="treeview-menu">
                     <li><a href="#"><i class="icon1 icon icon-user"></i>Profile</a>
                     </li>
                     <li><a href="change_paa.php"><i class="icon1 icon icon-key"></i>Change Password</a>
                     </li>
                     <li><a href="#"><i class="icon1 icon icon-user"></i>Update Profile </a>
                     </li>
                  </ul>
               </li>
               <li class="treeview">
                  <a href="#"><i class="icon1 icon icon-user"></i>User<i
                     class="icon icon-angle-left s-18 pull-right"></i></a>
                  <ul class="treeview-menu">
                     <li><a href="cre_user.php"><i class="icon1 icon icon-add"></i>Create User</a>
                     </li>
                     <li><a href="all_user.php"><i class="icon1 icon icon-add"></i>All User</a>
                     </li>
                  </ul>
               </li>
               <li class="treeview">
                  <a href="#"><i class="icon1 icon icon-shop"></i>Shop<i
                     class="icon icon-angle-left s-18 pull-right"></i></a>
                  <ul class="treeview-menu">
                     <li><a href="add_shop.php"><i class="icon1 icon icon-add"></i>Create Shop</a>
                     </li>
                     <li><a href="all_shop.php"><i class="icon1 icon icon-circle-o"></i>ALL Shop</a>
                     </li>
                  </ul>
               </li>

               <li class="treeview">
                  <a href="#">
                  <i class="icon1 icon icon-shield"></i>
                  Products<i
                     class="icon icon-angle-left s-18 pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="all_product.php"><i class="icon1 icon icon-circle-o"></i>All Products</a>
                     </li>
                     <li><a href="add_product1.php"><i class="icon1 icon icon-add"></i>Add New </a>
                     </li>
                     <li><a href="transfer_products.php"><i class="icon1 icon icon-add"></i> Transfer Product </a></li>
                     <li><a href="products_report.php"><i class="icon1 icon icon-add"></i> Transfer Report </a></li>
                      <li><a href="transfer_details.php"><i class="icon1 icon icon-add"></i> Receive Product</a></li>
                     
                     <li><a href="prod_import.php"><i class="icon1 icon icon-compare_arrows"></i>Up-Download Excel</a>
                     </li>
                  </ul>
               </li>
               <li class="treeview">
                  <a href="#"><i class="icon1 icon icon-tag"></i>Product Details <i
                     class="icon icon-angle-left s-18 pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a href="new_vendor.php"><i class="icon1 icon icon-tennis-ball4"></i>Add New Vendor</a>
                     </li>
                     
                     <li><a href="add_product_color.php"><i class="icon1 icon icon-award"></i>Add Product Colour</a>
                     </li>
                     <li><a href="add_product_size.php"><i class="icon1 icon icon-box5"></i>Add Product Size</a>
                     </li>
                     <li><a href="add_product_type.php"><i class="icon1 icon icon-boxing-glove2"></i>Add Product Type</a>
                     </li>
                  </ul>
               </li>
               
               <li class="treeview">
                  <a href="#"><i class="icon1 icon icon-plus-circle"></i>Reports
                    <i class="icon icon-angle-left s-18 pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="sales_report.php">Sales Report</a></li>
                    <li><a href="sale_qty.php">Sale Qty of Shop</a></li>
                    <li><a href="sales_vs_stock.php">Sales Vs Stock</a></li>
                    <li><a href="expired_product.php">Expired Product</a></li>
                 <!--    <li class="treeview">
                         <a href="#">General Report<i
                     class="icon icon-angle-left s-18 pull-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a href="item_report.php">Item Report</a>
                         </li>
                      <li><a href="purchase_order.php">Purchase Order Report</a>
                         </li>
                          <li><a href="purchase_invoice.php">Purchase Invoice Report</a>
                         </li>
                          <li><a href="sale_order.php">Sale order Report</a>
                         </li>
                         <li><a href="sale_item.php">Sale Item Report</a>
                         </li>
                          <li><a href="Sale_invoice.php">Sale Invoice Report</a>
                         </li>
                  </ul>
                     </li> -->
                  </ul>
                 <!--  <ul class="treeview-menu">
                    <li class="treeview">
                         <a href="#">Stock Report<i
                     class="icon icon-angle-left s-18 pull-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a href="stock_ledger.php">Stock Ledger Report</a>
                         </li>
                      <li><a href="inventory_report.php">Inventory Report basic</a>
                         </li>
                         
                  </ul>
                     </li>
                  </ul> -->
               </li>
               <li class="treeview">
                  <a href="customer_list.php"><i class="icon1 icon icon-user"></i>Customer List</a>
               </li>
               <li class="treeview">
                  <a href="#"><i class="icon1 icon icon-tag"></i>Expenses<i
                     class="icon icon-angle-left s-18 pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a href="expenses.php"><i class="icon1 icon icon-tennis-ball4"></i>Add Expenses</a>
                     </li>
                     
                     <li><a href="all_expenses.php"><i class="icon1 icon icon-award"></i>Expenses Report</a>
                     </li>
                      <li><a href="shop_expenses.php"><i class="icon1 icon icon-award"></i>Shop Expenses</a>
                     </li>
                     
                     </li>
            </ul>
         </section>
      </aside>
      <!--Sidebar End-->
      <div class="has-sidebar-left">
         <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
               <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                  <div class="search-bar">
                     <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                        placeholder="start typing...">
                  </div>
                  <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                     aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
               </div>
            </div>
         </div>
         
         <div class="sticky">
            <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
               <div class="relative">
                   
                  <a href="#" style="color: #fff;" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                  <i class="fa fa-calendar" style="font-size: 17px;color: #ffffff;"></i>
                  </a>
               </div>
               
               <!--Top Menu Start --> 
               <div class="navbar-custom-menu">
                   <ul class="nav navbar-nav">
                        <!-- Notifications -->
                                <li class="dropdown custom-dropdown notifications-menu" style="margin-top:-8px;">
                                    <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                                        <i class="icon-notifications "></i>
                                        <span class="badge badge-danger badge-mini rounded-circle">4</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="header"><a href="approval.php">You have 10 notifications</a></li>
                                    </ul>
                                </li>
                                <li>&nbsp;&nbsp;<i class="icon  icon-calendar" style="font-size: 17px;"></i>&nbsp;
                                  <span id="currentDate" style=" font-size: 15PX;
                                     line-height: 20px; color:#fdffdd;">
                                     <script>
                                        var currentDate = new Date(),
                                            day = currentDate.getDate(),
                                            month = currentDate.getMonth() + 1,
                                            year = currentDate.getFullYear();
                                        document.write(day + "/" + month + "/" + year)
                                     </script>
                                  </span>
                                </li>
                                <li>&nbsp;&nbsp;<i class="icon icon-time-is-money-1" style="font-size: 17px;"></i>&nbsp;&nbsp;<span id="txt" style=" font-size:15PX; color:#fdffdd">
                                  </span>&nbsp;&nbsp;
                                </li>
                                <li><a href="logout.php"><button type="button" class="r-5 " style="height: 28px;background-image: linear-gradient(#76d049, #3f6c29);border: none;cursor: pointer;color: #fff;font-size: 12px;text-align: center;"><i class="icon-sign-out mr-2"></i>LogOut</button></a>
                                </li>
                          </ul>
              
               </div>
            </div>
         </div>
      </div>
   </body>
</html>