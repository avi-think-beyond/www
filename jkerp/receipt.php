 <?php include("header.php"); ?>
  <br><br><br>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">

<style type="text/css">
  .t2
  {
    margin-top: 5px;
  }

      label
      {
        color: #0d93e2;
        font-size: 12px; 
      }
      .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        width: 90%;
        margin: 3px;
      }
      h2 {
  text-align: center;
}



.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}

@media only screen and (max-width: 768px) {
  #in{
    width: 100%;
  }
}

    </style>
    <script>
function demoDisplay1() {
  document.getElementById("show").style.display = "block";
  document.getElementById("show1").style.display = "none";
}
function demoDisplay2() {
  document.getElementById("show").style.display = "none";
   document.getElementById("show1").style.display = "block";
  

}
function demoDisplay3() {
  document.getElementById("show").style.display = "none";
   document.getElementById("show1").style.display = "block";
  

}

</script>

</head>
<body>
  <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Receipt</h2>
    </div>
<div style=" width: 96%; margin-right: auto; margin-left: auto;">
 
  <div style=" width:97%; padding: 1%; height: auto; box-shadow: 1px -1px 13px 3px #b6bbbf; margin-left: auto; margin-right: auto;"> 


    <form>
    <div class="container-fluid" style="padding-left: 0px;">
    <div class="container-fluid" style="padding-left: 0px;">     
    <div class="row" >
      <div class="col-md-4">
        <div class="row">
            <label class="col-md-5">
              Customer Code
            </label>
            <div class="col-md-7">
              <input type="text" class="in" id="in" name="">
            </div>
        </div>
         <div class="row t2">
            <label class="col-md-5">
              Receipt Mode
            </label>
            <div class="col-md-7">
              <span  class="form-list" style="display:inline-block;/*width:140px;*/">
                <input type="radio" onclick="demoDisplay3()" name="e" value="Bank"><label >Bank</label>
                <input  type="radio" onclick="demoDisplay2()" name="e" value="Cash"><label>Cash</label>
                <input  type="radio" name="e" onclick="demoDisplay1()" value="PDC" ><label>PDC</label>
              </span>                                       
                                               
            </div>
        </div>
         <div class="row t2" >
            <label class="col-md-5">
              Receipt Amt (Foreign Curr.)
            </label>
            <div class="col-md-7">
              <input type="text" class="in" id="in" name="">
            </div>
        </div>
         <div class="row t2">
            <label  class="col-md-5">
              Bank Charges
            </label>
            <div class="col-md-7">
              <input type="text" class="in" id="in" name="">
            </div>
        </div>
        <div class="row t2">
            <label class="col-md-5">
              Currency Code
            </label>
            <div class="col-md-7">
            <select name="" class="in" style="width:30%; float: left;height: 26px;" id="in">
              <option value="INR" id="in">INR</option>
              <option value="INR"id="in">INR</option>
            </select>
             <input name="" type="text" maxlength="3" class="in" id="in" style="width:56%; margin-left: 5px;">
            </div>
        </div>
      </div>
      <div class="col-md-5">
         <div class="row">
            <label class="col-md-3">
             Customer Name
            </label>
            <div class="col-md-9">
                <input type="text" class="in" id="in" name="">
            </div>
        </div>
        
         <div class="row t2">
            <label class="col-md-3">
           Select Ledger
            </label>
            <div class="col-md-9">
                <input type="text" class="in" id="in" name="">
            </div>
        </div>
         <div class="row t2" >
            <label  id="show" class="col-md-3">
             Remarks
            </label>
             <label id="show1" style="display: none;" class="col-md-3">
             
             </label>
            <div class="col-md-9">
              <input type="text" class="in" id="in" name="">
            </div>
        </div>
        <div class="row t2" >
            <label class="col-md-3">
              GST / IGST 
            </label>
            <div class="col-md-3">
              <span style="display:inline-block;/*width:80px;*/"><input type="radio" name="c" value="IGST" autocomplete="off"><label> IGST </label><input type="radio" name="c" value="GST" autocomplete="off"><label> GST</label></span>
            </div>
           <div class="col-md-3">
             <label> Rate (%)</label>
           </div>
            <div class="col-md-3">
              <input type="text" class="in" id="in" name="" style="width: 65px;" placeholder="GST Rate">
            </div>
        </div>
        <div class="row t2" >
          <div class="col-md-3">
            <label >
              Currency Rate 
            </label>
          </div>
           <div class="col-md-3">
              <input type="text" class="in" id="in" name="">
            </div>
            <div class="col-md-3">

              <label  >Receipt Amt (INR)</label>
               </div>
               <div class="col-md-3">
                 <input class="in" id="in" type="text" style="width: 65px;">
               </div>
              
    
              
            
        </div>
        <div class="row t2" >
            <label class="col-md-4">
               
            </label>
            <div class="col-md-4">
             
            </div>
          <div class="col-md-2"  >
             
              <input type="button" id="in" value="New Receipt" class="btn" style="font-size: 13px; color: #fff; height: 30px; background-color: #0d93e2;font-weight: bold;width: 110px;">
            </div>
        </div>
      </div>
      <div class="col-md-3">
         <div class="row">
            <label class="col-md-6">
              Entry No
            </label>
            <div class="col-md-6">
              <input type="text" class="in" id="in" name="">
            </div>
        </div>
         <div class="row t2">
            <label class="col-md-6">
            Cheque No. / Card No
            </label>
            <div class="col-md-6">
                <input type="text" class="in" id="in" name="">
            </div>
        </div>
         <div class="row t2" >
            <label class="col-md-6">
              Receipt Date
            </label>
            <div class="col-md-6">
              <input style="height: 25px;" class="in" id="in" id="datepicker"/>
            </div>
        </div>
        <div class="row t2" >
            <label class="col-md-6">
           Total GST
            </label>
            <div class="col-md-6">
              <input type="text" class="in"  name="">
            </div>
        </div>
        <div class="row t2" >
            <label class="col-md-6">
            Total Amt (INR)
            </label>
            <div class="col-md-6">
              <input type="text" class="in" id="in" name="">
            </div>
        </div>


        
        <div class="row t2" >
            <label class="col-md-7">
             
            </label>
            <div class="col-md-2">
              <button type="submit" name="" style="font-size: 13px; width: 100px; color: #fff; height: 33px; background-color: #0d93e2;font-weight: bold;width: 90px;" class="btn " autocomplete="off"  >Save</button>
             
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
       </form> 
</div></div><br>

<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->

<script>

    /* API method to get paging information */
    'use strict';
  var $ = jQuery;
  $.getScript("https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js", function(){
       
            $('#example').DataTable( {
                "paging":   true,
                "ordering": true,
                "info":     false
            } );
  });
</script>
<!-- script for date -->
  <script>
           
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
       </script> 
        <script>
           
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap'
        });
       </script> 

</body>
</html>