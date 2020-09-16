<?php 
session_start();
$shop= $_SESSION['uid'];
error_reporting(null); 
include('../connection.php');
?>
<?php include 'sidebar.php';?>
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
    .fes {
    border: none;
    padding: 1px;
    border-radius: 2px;
    overflow: ;
    height: auto;
    background-color: #fff;
    box-shadow: #8392a9  2px 0px 15px 2px;
    border-left: 6px solid #336b18;
}
   .le {
    font-size: 12px;
    font-weight: normal;
    /* background-color: #03a9f4; */
    background-image:linear-gradient(#315b1c, #40881d);
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
    
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <form method="POST" action="#" id="exp_form">
              <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2"></div>
              </div>
              <div class="row my-3">
              <div class="col-md-3"></div>
              <div class="col-md-6">
              <form method="POST" action="#" autocomplete="off" id="exp_form">
              <fieldset class="fes">
              <legend class="le">Add Expenses</legend><br>
              <div class="col-md-12 mb-12 s">
              <div class="row">
              <label class="col-md-4 la" >Date</label>
              <div class="col-md-7"> 
              <input type="text" name="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" id="datepicker" required>

              </div>
              </div>
              </div>
              <div class="col-md-12 mb-12 s">
              <div class="row">
              <label class="col-md-4 la" >Bill No <span style="color:#ed5564;">*</span></label>
              <div class="col-md-7"> 
              <input type="text" name="bill_no" class="form-control" placeholder="Enter Bill No." required >
              </div>

              </div>
              </div>
              <div class="col-md-12 mb-12 s">
              <div class="row">
              <label class="col-md-4 la" >Bill Name</label>
              <div class="col-md-7"> 
              <input type="text" name="bill_name" class="form-control" placeholder="Enter Bill Name">
              </div>

              </div>
              </div>


              <div class="col-md-12 mb-12 s">
              <div class="row">
              <label class="col-md-4 la">Amount</label>
              <div class="col-md-7"> 
              <input type="number" class="form-control" name="amount" placeholder="Enter Amount" required>
              </div>
              </div>
              </div>
              <div class="col-md-12 mb-12 s">
              <div class="row">
              <label class="col-md-4 la" >Party Name</label>
              <div class="col-md-7"> 
              <input type="text"  class="form-control" placeholder="Enter Party Name" name="party_name">
              </div>
              </div>
              </div>


              <div class="col-md-12 mb-12 s">
              <div class="row">
              <label class="col-md-4 la">Address</label>
              <div class="col-md-7"> 
              <textarea  rows="3" cols="39"  name="exp_address"  placeholder="Enter Address"  required class="form-control"></textarea>
              </div>
              </div>
              </div>
              <div class="col-md-12 mb-12 s">
              <div class="row">
              <label class="col-md-4 la" >Mobile No.</label>
              <div class="col-md-7"> 
              <input type="" maxlength="10" minlength="10" class="form-control" name="exp_mobile" placeholder="Enter Mobile No." required>
              </div>
              </div>
              </div>




              <div class="col-md-12 mb-12 s">
              <div class="row">
              <label class="col-md-4 la" >Payment Method</label>
              <div class="col-md-7"> 

              <select class="form-control" name="payment">
                    <option seleted>Select Payment Method</option>
                    <option value="Online">Online</option>
                    <option value="Cheque">Cheque</option>
                    <option value="Cash">Cash</option>
                    <option value="Card">Card</option>
                  </select>
              </div>
              </div>
              </div><br>
              <div class="col-md-12 mb-12">
              <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-6">
              <input type="Reset" id="" value="Reset" class="btn btn-warning btn-sm " >
              <input type="submit" name="submit" value="Add Expenses" class="btn btn-success btn-sm" >
              </div>
              <div class="col-md-2"></div>
              </div>
              </div>
              <br>
              </fieldset>
              </form>


              </div>
              </div>
                
            </form>
        </div>

    </div>
</div>
<script src="assets/js/app.js"></script>
<br><br>
<?php include 'footer.php'?>
<script>
function myFunction() {
  var x = document.getElementById("add");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
    
  }
}
</script>

<!------------Date picker Start--------------->
<script type="text/javascript">
  $(function(){
    $("#datepicker").datepicker({
      dateFormat: "yy-mm-dd"
    });

});
</script>

<script>
$(function(){
    $("#datepicker1").datepicker({
        dateFormat: "yy-mm-dd"
    });
});
</script>

<!------------Date picker End--------------->
<script>
  $(document).ready(function(){
    $('#exp_form').submit(function(e){
    e.preventDefault();
    var formdata=new FormData(this);
    formdata.append('type','add_expense');
     $.ajax({
      url:'ajax.php',
      type:'POST',
      data:formdata,
      processData:false,
      contentType:false,
      cache:false,
      async:false,
      success:function(data_result){
        console.log(data_result);
       alert('Expenses added successfully');
        window.open('all_expenses.php','_self');
       
      }


    });
  });
  });
</script>