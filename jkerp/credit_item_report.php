<?php include("header.php"); ?>
  <br><br><br>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />



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
</head>
<body>
  <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Credit note item report</h2>
    </div>
<div style=" width: 96%; margin-right: auto; margin-left: auto;">
 

<div class="container-fluid" style="padding-left: 0px;">
  <div class="container-fluid" style="padding-left: 0px;">

    <div class="row">
      <div class="col-md-12">
        <div class="row">
        <div class="col-md-1">
          From Date
        </div>
        <div class="col-md-1">
         <input id="datepicker" class="in" style="width:90%;height: 30px;">
        </div>
         <div class="col-md-1" style="margin-left: 30px;">
         To Date
        </div>
        <div class="col-md-1">
          <input id="datepicker1" class="in" style="width: 90%;height: 30px;">
        </div>
        <div class="col-md-5">
         
        </div>
        <div class="col-md-2" >
          <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Back</button>
          <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Export To Excel</button>
        </div>
        </div>
        
    </div>
    <div class="col-md-6"></div>
  </div>
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
</div><br>
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
 
</body>
</html>