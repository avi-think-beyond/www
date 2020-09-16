<?php
date_default_timezone_set("Asia/Calcutta");
session_start();

include("../connection.php");

$myid=$_SESSION['userid'];

if(!isset($myid))

{

    echo "<script>window.open('../index.php','_SELF');</script>";

}

$shop=$_SESSION['shop'];

$sql=mysqli_query($conn,"SELECT * FROM users where user_id='$myid'");

$row=mysqli_fetch_assoc($sql);

$uname=$row['user_name'];

$_SESSION['uname']=$uname;

$myquery=mysqli_query($conn,"SELECT * FROM transfer_product WHERE to_actor_id='$shop' and flag='1' ");

$row2=mysqli_num_rows($myquery);

if($row2>0)

{

    $msg="<span style='color:red;'>You have products to receive</span>";

    $count=1;

}

else

{

    $msg="No Notification";

    $count=0;

}



?>

<!DOCTYPE html>

<html lang="zxx">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"

         rel = "stylesheet">

      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>

      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

      

      <!-- Javascript -->

      <script>

         $(function() {

            $( "#datepicker-13" ).datepicker();

            $( "#datepicker-131" ).datepicker();

            

          

         });

         

         

      </script>

    

    <link rel="icon" href="#" type="">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>

  

    <title>jk clothing</title>

    <!-- CSS -->

    <link rel="stylesheet" href="assets/css/app.css">

    <style>

           .btn1

    {

        height: 30px;

        font-size: 13px;

        

        width: 100px;

        border-radius: 6px;

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

   .icon1

      {

          color:#b8afc1;

      }

         



    .box_ser

    {

            margin: auto;

    border: 1px solid #b7bbbe;

    width: 100%;

    border-radius: 5px;

    height: 36px;

    }





    /*.icon{

      color:#b8afc1;

    }*/

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

<body onload="startTime()" class="light"  style="background-color:rgb(157, 187, 143);">



<div id="app">

<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>

    <section class="sidebar">

       <!--  <div class="">

          <img src="assets/img/logo1.png" style="width: 100%; height: 45px;" alt=""> 

        </div> -->

        <div class="relative">

           

            <div class="user-panel p-3  mb-2" style="background-image: linear-gradient(#406d2a, #1f470b);">

                <div>

                    <!--<div class="float-left image">-->

                    <!--    <a href="dashboard.php"><img  class="user_avatar" src="assets/img/dummy/u2.png" alt="User Image"></a>-->

                    <!--</div>-->

                    <div class="float-left info">

                       <a href="index.php"><h5 class="font-weight-light mt-3 mb-3" style="color: #fff;">FASHION STORE</h5></a> 

                    </div>

                </div>

               

            </div>

        </div>

        <ul class="sidebar-menu">

         

             <li><a href="sale_product.php"><i class="icon icon-add_shopping_cart"></i>Sale Product</a></li> 
            
            
             
             <li><a href="transfer_details.php"><i class="icon icon-location-arrow"></i>Receive Products</a></li>

             <li><a href="available_products.php"><i class="icon icon-location-arrow"></i>Available Products</a></li>

            


              <li><a href="sale_qty.php"><i class="icon icon-tag"></i>Total Sale Qty</a></li> 

               <li class="treeview">
                  <a href="#"><i class="icon1 icon icon-tag"></i>Reports<i
                     class="icon icon-angle-left s-18 pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a href="sales_register.php"><i class="icon1 icon icon-tennis-ball4"></i>Sales Register</a>
                     </li>
                     
                     <li><a href="sales_report.php"><i class="icon1 icon icon-award"></i>Sales Report</a>
                     </li>
                     <li><a href="stock_report.php"><i class="icon1 icon icon-award"></i>Stock Report</a>
                     </li>
                     <li><a href="expired_product.php"><i class="icon1 icon icon-award"></i>Expired Products</a>
                     </li>
                   </ul>
                     
                     </li>
             <li class="treeview"><a href="#"><i class="icon icon-cogs"></i>Setting<i

                    class="icon icon-angle-left s-18 pull-right"></i></a>

                <ul class="treeview-menu">

                   <li><a href="profile.php"><i class="icon icon-user"></i>Profile</a>

                     </li>

                    <li><a href="change_password.php"><i class="icon icon-key"></i>Change Password</a>

                    </li>

                    

                </ul>

            </li>   

             <li class="treeview"><a href="#"><i class="icon icon-tag"></i>Product<i

                    class="icon icon-angle-left s-18 pull-right"></i></a>

                <ul class="treeview-menu">

                    <li><a href="all_product.php"><i class="icon icon-circle-o"></i>All Product</a></li>

                     <li><a href="transfer_products.php"><i class="icon1 icon icon-add"></i> Transfer Product </a>

                     </li>

                      <li><a href="transfer_product_report.php"><i class="icon1 icon icon-add"></i> Transfer Product Report </a>

                     </li>

                </ul>

            </li>
             <li class="treeview">
                  <a href="#"><i class="icon1 icon icon-tag"></i>Expenses<i
                     class="icon icon-angle-left s-18 pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a href="expenses.php"><i class="icon1 icon icon-tennis-ball4"></i>Add Expenses</a>
                     </li>
                     
                     <li><a href="all_expenses.php"><i class="icon1 icon icon-award"></i>Expenses Report</a>
                     </li>
                     
                     </li>
                </ul>
            <li><a href="return_exchange.php"><i class="icon icon-add_shopping_cart"></i>Return Or Exchange</a></li> 
                     

           

           

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

                    <i class="fa fa-calendar" style="font-size: 17px;color: #efff01;"></i>

                </a>

            </div>

            <div class="relative">

                  

                  <span style=" font-size: 15PX;

                     line-height: 20px; color:#fdffdd;">

                     Welcome <?php echo $row['user_name'];?>

                  </span>

                 

               </div>

            <!--Top Menu Start --> 

              <ul class="nav navbar-nav">

                        <!-- Notifications -->

                                <li class="dropdown custom-dropdown notifications-menu" style="margin-top:-8px;">

                                    <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">

                                        <i class="icon-notifications "></i>

                                        <span class="badge badge-danger badge-mini rounded-circle"><?php echo $count; ?></span>

                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">

                                        <li class="header"><a href="transfer_details.php"><?php echo $msg; ?></a></li>

                                        <li>

                                            <!-- inner menu: contains the actual data -->

                                            <ul class="menu">

                                                 

                                            </ul>

                                        </li>

                                        

                                    </ul>

                                </li>

                                <li>&nbsp;&nbsp;<i class="icon icon1 icon-calendar" style="font-size: 17px;"></i>&nbsp;

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

                                <li>&nbsp;&nbsp;<i class="icon icon1 icon-time-is-money-1" style="font-size: 17px;"></i>&nbsp;&nbsp;<span id="txt" style=" font-size:15PX; color:#fdffdd">

                                  </span>&nbsp;&nbsp;

                                </li>

                                <li><a href="logout.php"><button type="button" class="r-5 " style="height: 28px;background-image: linear-gradient(#76d049, #3f6c29);border: none;cursor: pointer;color: #fff;font-size: 12px;text-align: center;"><i class="icon-sign-out mr-2"></i>LogOut</button></a>

                                </li>

                          </ul>

            

        </div>

    </div>

</div>

</body>



</html>