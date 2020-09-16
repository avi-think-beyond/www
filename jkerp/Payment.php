<?php include("header.php"); ?>
  <br><br><br>

<style type="text/css">
  .t2
  {
    margin-top: 5px;
  }

      label
      {
        color: #0d93e2;
        font-size: 13px; 
      }
      .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        width: 90%;
      }
      h2 {
  text-align: center;
}



.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
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
  
<div style=" width: 96%; margin-right: auto; margin-left: auto;">
 <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Payment</h2>
    </div>
  <div style=" width:97%; padding: 1%; height: auto; box-shadow: 1px -1px 13px 3px #b6bbbf; margin-left: auto; margin-right: auto;">  <form>    
    <div class="row">
      <div class="col-md-4">
        <div class="row">
            <label class="col-md-5">
              Supplier Code
            </label>
            <div class="col-md-7">
              <input type="text" class="in"  name="">
            </div>
        </div>
         <div class="row t2">
            <label class="col-md-5">
              Payment Mode
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
              Payment Amt (Foreign Curr.)
            </label>
            <div class="col-md-7">
              <input type="text" class="in"  name="">
            </div>
        </div>
         <div class="row t2">
            <label  class="col-md-5">
              Bank Charges
            </label>
            <div class="col-md-7">
              <input type="text" class="in"  name="">
            </div>
        </div>
        <div class="row t2">
            <label class="col-md-5">
              Currency Code
            </label>
            <div class="col-md-7">
            <select name="" class="in" style="width:30%; float: left;height: 26px;">
              <option value="INR">INR</option>
              <option value="INR">INR</option>
            </select>
             <input name="" type="text" maxlength="3" class="in" style="width:30%; margin-left: 5px;">
            </div>
        </div>
      </div>
      <div class="col-md-5">
         <div class="row">
            <label class="col-md-3">
              Supplier Name
            </label>
            <div class="col-md-9">
                <input type="text" class="in"  name="">
            </div>
        </div>
        
         <div class="row t2">
            <label class="col-md-3">
           Select Ledger
            </label>
            <div class="col-md-9">
                <input type="text" class="in"  name="">
            </div>
        </div>
         <div class="row t2" >
            <label  id="show" class="col-md-3">
              Bank Name  
            </label>
             <label id="show1" style="display: none;" class="col-md-3">
             Remarks
             </label>
            <div class="col-md-9">
              <input type="text" class="in"  name="">
            </div>
        </div>
        <div class="row t2" >
            <label class="col-md-3">
              GST / IGST 
            </label>
            <div class="col-md-3">
              <span style="display:inline-block;/*width:80px;*/"><input type="radio" name="c" value="IGST" autocomplete="off"><label> IGST </label><input type="radio" name="c" value="GST" autocomplete="off"><label> GST</label></span>
            </div>
           
            <label class="col-md-2" > Rate (%)</label>
              
            <input class="col-md-3 in" type="TEXT" placeholder="GST Rate" autocomplete="off">
          
             
            
        </div>
        <div class="row t2" >
            <label class="col-md-3">
              Currency Rate 
            </label>
            <div class="col-md-2">
              <input type="text" class="in" name="">
            </div>

              <label class="col-md-3" >Payment Amt (INR)</label>
              <input class="col-md-3 in" type="TEXT" placeholder="GST Rate">
            
        </div>
        <div class="row t2" >
            <label class="col-md-4">
               
            </label>
            <div class="col-md-4">
             
            </div>
          <div class="col-md-2">
             
              <input type="button" id="" value="New Payment" class="btn" style="font-size: 13px; color: #fff; height: 30px; background-color: #0d93e2;     font-weight: bold; ">
            </div>
        </div>
      </div>
      <div class="col-md-3">
         <div class="row">
            <label class="col-md-6">
              Entry No
            </label>
            <div class="col-md-5">
              <input type="text" class="in"  name="">
            </div>
        </div>
         <div class="row t2">
            <label class="col-md-6">
            Cheque No. / Card No
            </label>
            <div class="col-md-5">
                <input type="text" class="in"  name="">
            </div>
        </div>
         <div class="row t2" >
            <label class="col-md-6">
            Payment Date
            </label>
            <div class="col-md-5">
              <input type="date" class="in"  name="">
            </div>
        </div>
        <div class="row t2" >
            <label class="col-md-6">
           Total GST
            </label>
            <div class="col-md-5">
              <input type="text" class="in"  name="">
            </div>
        </div>
        <div class="row t2" >
            <label class="col-md-6">
            Total Amt (INR)
            </label>
            <div class="col-md-5">
              <input type="text" class="in"  name="">
            </div>
        </div>


        <div class="row t2" >
            <label class="col-md-6">
                <select name="" class="in" style="height: 26px;">
                      <option value="i">Indusind Bank</option>
                      <option value="k">Kotak Bank</option>
                      <option value="c">Capital Bank</option>

                 </select>
            </label>
            <div class="col-md-5">
              <span ><input type="checkbox" name="" ></span>Print Cheque
            </div>
        </div>
        <div class="row t2" >
            <label class="col-md-7">
             
            </label>
            <div class="col-md-2">
              <button type="submit" name="" style="font-size: 13px; width: 100px; color: #fff; height: 33px; background-color: #0d93e2;    font-weight: bold;" class="btn " autocomplete="off">Save</button>
             
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

</body>
</html>