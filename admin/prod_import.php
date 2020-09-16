<?php 

// ini_set("display_errors","1");

session_start();

// print_r($_SESSION);

include_once('../function.php');

include_once("../class/class.product.php");

// include_once("PHPExcel/Classes/PHPExcel/IOFactory.php");

$prodObj = new Product();

$vendorData = $prodObj->getVendor();

$prodCat = $prodObj->getProductCat();

$prodSubCat = $prodObj->getSubProductCat();

$size = $prodObj->getSize();

$color = $prodObj->getColor();

$gender = $prodObj->getGender();

$material = $prodObj->getMaterial();
// echo '<pre>';
// print_r($_SESSION);
?>

<?php include_once 'sidebar.php';?>

<script type="text/javascript">

 function isNumber(evt) {

    evt = (evt) ? evt : window.event;

    var charCode = (evt.which) ? evt.which : evt.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57)) {

        return false;

    }

    return true;

}

</script>

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

     .btnsre

    {

        height: 24px;

        width:30%; 

        border-radius: 5px;

        cursor: pointer; 

        background-image: linear-gradient(#366121, #38711c);

        color: #fff; 

        border: none;

    }

    .sretxt

    {

      width: 66%; 

      height: 17px;

      border: none;

    }

    .box_ser

    {

      margin: auto; 

      border: 1px solid #b7bbbe; 

      width: 67%;

      border-radius: 5px; 

      height: 25px;

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

    background-image: linear-gradient(#315b1c, #40881d);

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

    font-size: 12px;

    color: #2f3838;

}



</style>



<div class="page has-sidebar-left">

    

    <div class="container-fluid animatedParent animateOnce my-3" >

        <div class="animated fadeInUpShort">

          <h3 id="success"/></h3>

            <!-- <form method="POST" action="../function.php"> -->

              <form id="importForm" name="importForm" enctype="multipart/form-data">

                <div class="row">

                    <div class="col-md-12">



                     <fieldset class="fes">

                        <legend class="le">Import Purchase Product</legend>

                        <div class="container">

                        <div class="row">

                          <div class="col-md-12 text-center" style="margin-top:20px;">

                              <button type="button" class="btn btn-primary" id="excelBtn">Upload Excel Here</button>

                              <input type="file" name="importFile" class="fomr-control" id="importFile"  style="display:none;"/>

                          </div>

                        <div class="col-md-12 text-center" style="margin-top:20px;">

                          <span>Sample File : <a href="../prodImportSample.xlsx" style="color:blue" download>Click here to Download</a> </span>

                        </div>

                        </div>                        

                        

                        <hr>

                        <!-- 10th row -->

                        <div class="row">

                          <div class="col-md-12">

                            <center><input type="submit"  value="Import" class="btn btn-success"></center>

                        </div>

                        </div>

                        <br>

                        </div>

                     </fieldset>

                     </div>

                        </div>

                               

            </form>

             </div> 

        </div>

    </div>

    <br><br>



    <?php include 'footer.php'?>

</div>

<script src="assets/js/app.js"></script>

<script type="text/javascript">

    $(document).ready(function(){

        $("#excelBtn").click(function(){

          $("#importFile").click();

        });

        $(document).on("submit","#importForm",function(e){

          e.preventDefault();

          var formData = new FormData(this);

          $.ajax({

            url:'../controller/adminController.php?type=productImport',

            type:'POST',

            data:formData,

            success:function(res){

              console.log(res);

              window.alert("data updated succefully");

              // location.reload();

            },

            cache: false,

            contentType: false,

            processData: false

          })

        });

    });

</script>