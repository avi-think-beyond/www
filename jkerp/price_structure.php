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
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Item List</h2>
    </div>
<div style=" width: 96%; margin-right: auto; margin-left: auto;">

    <form class="form-group">
      
    <div class="container-fluid" style="padding-left: 0px;">
      <div class="container-fluid" style="padding-left: 0px;">
    <div class="row">
      <div class="col-md-3">
        <div class="row">
            <label class="col-md-5">
             Customer Contact No.
            </label>
            <div class="col-md-5">
              <input type="text" class="in" style="width: 100%;" name="" style="width: 100%;">
            </div>
        </div>
         
         
      </div>
      <div class="col-md-3">
        <div class="row">
            <label class="col-md-4">
              Customer Name
            </label>
            <div class="col-md-5">
              <input type="text" class="in" style="width: 100%;" name="" style="width: 100%;">
            </div>
        </div>
         
      </div>
      <div class="col-md-4">
         <div class="row">
            <label class="col-md-1">
              Dis %
            </label>
            <div class="col-md-2">
             <input type="text" class="in" style="width: 100%;" name="" style="width: 100%;">
            </div>
            <div class="col-md-2">
              <label>(Increase.)</label>
            </div>
            <div class="col-md-1">
              <button style="background-color: #0d93e2;color: white;" id="in">+</button>
            </div>
            <div class="col-md-2">
              <label>(Decrease.)</label>
            </div>
            <div class="col-md-1">
              <button style="background-color: #0d93e2;color: white;" id="in">-</button>
            </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="row">
           
            <div class="col-md-12">
              <button style="background-color: #0d93e2;color: white;" id="in">Map Customer Item Price</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </form>

            <div class="panel-body" >
            
            <fieldset class="col-md-12" style="background-color: white;" >     
                   <legend style=" border-radius: 5px; padding-top: 2px; font-size: 14px; height: 30px; border: solid 1px #c5aaaa; width: 10%;"><center> Packed Items</center> </legend>
                    
                    
                        <div class="panel-body">
                        </div>
  </fieldset>
</div>
</div>  <br>

<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->

</body>
</html>


