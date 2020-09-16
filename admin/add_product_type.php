<?php 
session_start();
//error_reporting(E_ALL); 
include("../connection.php");
if(isset($_POST['submit']))
{
     $type=$_POST['type'];
      $date=$_POST['date'];
      $check=mysqli_query($conn,"SELECT * FROM product_type where product_type='$type'");
      if(mysqli_affected_rows($conn))
      {
         echo "<script>alert(' This Type Allready Added....');window.open('add_product_type.php','_self');</script>";
      }
      else
      {
         $insert=mysqli_query($conn,"INSERT INTO product_type(product_type,date) values('$type','$date')");
          if(mysqli_affected_rows($conn))
            {
             echo "<script>alert('Product _Type Added Sucessfully....');window.open('add_product_type.php','_self');</script>";
            }
           else
          {
  
            echo  "<script>alert('Something is wrong....');window.open('add_product_type.php','_self');</script>";
            }
      }
 
}
?>
<?php include 'sidebar.php';?>

<style type="text/css">
    .fe
    {
      border: none;
      padding: 1px; border-radius: 2px; 
      overflow:;
      height:auto;
      background-color: #fff;
      box-shadow:#084d84 4px 4px 6px 0px;





    }
   .fes {
    border: none;
    padding: 1px;
    border-radius: 2px;
    overflow: ;
    height: auto;
    background-color: #fff;
    box-shadow: #8392a9 2px 0px 15px 2px;
    border-left: 6px solid #336b18;
}
   .le {
    font-size: 12px;
    font-weight: normal;
    /* background-color: #03a9f4; */
    background-image: linear-gradient(#315b1c,#40881d);
    border: #ddd 1px solid;
    padding-top: 3px;
    padding-bottom: 6px;
    margin-bottom: 0px;
    border-radius: 6px;
    text-align: center;
    width: 70%;
    color: #fff;
}
    .btn1
    {
        height: 30px;
        font-size: 13px;
    }
    .s
    {
        margin-top: 10px;
    }
   .la {
    font-size: 13px;
    color: #155252;
}
</style>
<div class="page has-sidebar-left">
    
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <form method="POST" action="#">
                <div class="row " style="margin-top: 150px;">
                  <div class="col-md-3"></div>
                    <div class="col-md-6" >
                     <fieldset class="fes">
                        <legend class="le">Add Product Type</legend>
                        <br>
                            <div class="col-md-12 mb-12">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Product Type</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" id="" name="type" 
                                           placeholder="Product Type" value="" required>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Date</label>
                                    <div class="col-md-8"> <input type="text" id="datepicker-131" name="date"  class="form-control btn1" id=""
                                           placeholder="Product Code" value="" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 mb-12" style="margin-top: 5px;">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                     <div class="col-md-6">
                                           <input type="Reset" id="" value="Reset" style="background-image: linear-gradient(#137937, #267b1c)!important;color: #fff;height: 30px;font-size: 12px;" class="btn " >
                                      <input type="submit" name="submit" value="Submit" style="background-image: linear-gradient(#1b6969, #104040);color: #fff;height: 30px;font-size: 12px;" class="btn  pull-right" >
                                     </div>
                                      <div class="col-md-2"></div>
                                    
                                </div>
                             </div>
                             <br>
                          </fieldset>
                        </div>
                      <div class="col-md-3"></div>
                </div>
                
            </form>
        </div>
    </div>
</div>
<script src="assets/js/app.js"></script>
<?php include 'footer.php'?>