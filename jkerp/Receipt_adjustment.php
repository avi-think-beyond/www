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
        font-size: 14px; 
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

@media only screen and (max-width: 768px) {
  #in{
    width: 100%;
  }
}
    </style>
    <script>

</script>
</head>
<body>
   <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Receipt Adjustment</h2>
    </div>
<div style=" width: 96%; margin-right: auto; margin-left: auto;">

  <div style=" width:97%; padding: 1%; height: auto; box-shadow: 1px -1px 13px 3px #b6bbbf; margin-left: auto; margin-right: auto;">  
    <form> 
      <div class="container-fluid" style="padding-left: 0px;">
      <div class="container-fluid" style="padding-left: 0px;">
    <div class="row">
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
             Customer GSTIN No
            </label>
            <div class="col-md-7">
                     <input type="text" class="in" id="in" name="">                               
                                               
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
            <label class="col-md-5">
              Currency Code
            </label>
            <div class="col-md-7">

             <input name="" type="text" maxlength="3" class="in" id="in">
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
           Select Receipt
            </label>
            <div class="col-md-9">
                <input type="text" class="in" id="in" name="">
            </div>
        </div>
         <div class="row t2" >
            
             <label class="col-md-3">
             Remarks
             </label>
            <div class="col-md-9">
              <input type="text" class="in" id="in" name="">
            </div>
        </div>
        <div class="row t2" >
            <label class="col-md-3">
              Currency Rate 
            </label>
            <div class="col-md-2">
              <input type="text" class="in" id="in" name="">
            </div>

              <label class="col-md-3" >Receipt Amt (INR)</label>
              <input class="col-md-3 in" id="in" type="TEXT">
            
        </div>
        <br>
        <div class="row t2" >
            <label class="col-md-4">
               
            </label>
            <div class="col-md-4">
             
            </div>
          <div class="col-md-2">
             
              <input type="button" id="" value="New Receipt" class="btn" style="font-size: 13px; color: #fff; height: 30px; background-color: #0d93e2;     font-weight: bold; ">
            </div>
        </div>
      </div>
      <div class="col-md-3">
         <div class="row">
            <label class="col-md-6">
              Entry No
            </label>
            <div class="col-md-5">
              <input type="text" class="in"  id="in" name="">
            </div>
        </div>
         <div class="row t2">
            <label class="col-md-6">
           Customer Credit (Foreign Curr.)
            </label>
            <div class="col-md-5">
                <input type="text" class="in" id="in" name="">
            </div>
        </div>
         <div class="row t2" >
            <label class="col-md-6">
            Receipt Date
            </label>
            <div class="col-md-5">
              <input type="date" class="in"  id="in" name="">
            </div>
        </div>
        <div class="row t2" >
            <label class="col-md-6">
            Total Amt (INR)
            </label>
            <div class="col-md-5">
              <input type="text" class="in"  id="in" name="">
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
  </div>
</div>
       </form> 
</div></div>
<br>
    <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
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