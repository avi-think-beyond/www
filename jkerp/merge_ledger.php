<?php include("header.php"); ?>
  <br><br>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min1.css" rel="stylesheet" id="bootstrap-css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
<style type="text/css">
  .t2
  {
    margin-top: 5px;
  }
  select
  {
    font-size: 14px;
  }
  option
  {
    border: 1px solid #000;
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
        font-size: 12px;
      }
      h2 {
  text-align: center;
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 12px;
}
@media only screen and (max-width: 768px) {
  #in{
    width: 100%;
  }
}
    </style>
</head>
<body>
  <div style="width: 100%; margin-top: 5px; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;"><b>LEDGER MERGE</b></h2>
    </div>
<div style=" width: 86%; margin-right: auto; margin-left: auto;">
 
  <div style=" padding: 1%; height: auto; box-shadow: 1px -1px 13px 3px #b6bbbf; margin-left: auto; margin-right: auto;">  
    <form>    
    <div class="row">
      <div class="col-md-10">
        <div class="row">
            <label class="col-md-6">
             Select Ledger to Merge (First Ledger) :
            </label>
            <div class="col-md-5">
              <input type="text" class="in"  name="">
            </div>
          </div>
         <div class="row t2">
            <label class="col-md-6">
              Select Ledger to be Merged (Second Ledger):
            </label>
            <div class="col-md-5">
              <input type="text" class="in"  name="">      
            </div>
        </div>
        <div class="row t2">
            <div class="col-md-6">
              <input type="checkbox" name="">
              <label>Select period to merge </label>
            </div>
        <div class="">
         <label> From:&nbsp;</label>
        </div>
        <div class="col-md-2">
          <input class="in" type="date"  style="height: 25px;"/> 
        </div>
        <div class="">
        <label>  To:&nbsp;</label>
      </div>
        <div class="col-md-2">
          <input class="in" type="date"  style="height: 25px;" />
        </div>
          </div>
          <div class="row">
            
          <div class="col-md-4">
              <input type="checkbox"   name=""><label> Select if want to delete first ledge </label>
          </div>
          </div>

          
          </div>
          <div class="row t2">
           
          <div class="col-md-6">
           <button type="button" id="in" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;">Save</button>
        </div>
      </div>
    </div>   
  </div>
</form> 
</div>
</div>
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
       </div>
 <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
</body>

</html>