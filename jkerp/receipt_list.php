<?php include("header.php"); ?>
  <br><br><br>
 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
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
    margin-left: 0px;
  }
}
    </style>
</head>
<body>
<div style=" width: 96%; margin-right: auto; margin-left: auto;">
 <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Receipt List</h2>
    </div>


    <div class="container-fluid" style="padding-left: 0px;">
      <div class="container-fluid" style="padding-left: 0px;">
    <div class="row">
      <div class="col-md-5">
        <div class="row">
        <div class="col-md-1">
          From
          
        </div>
        <div class="col-md-3">
         <input id="datepicker"  / style="height: 30px;">
        </div>
         <div class="col-md-1">
         To
          
        </div>
        <div class="col-md-3">
          <input id="datepicker1"/ style="height: 30px;">
        </div>
        <div class="col-md-4" style="padding-left: 10px;">
          <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in"><center>Get Report</center></button>
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
            
            

   
<!------ Include the above in your HEAD tag ---------->     
   
     
</div>
</div></div>
</div>


<br>
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
</body>
</html>