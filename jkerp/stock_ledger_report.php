<?php include("header.php"); ?>
  <br><br>
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
        font-size: 12px; 
      }
      .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        height: 25px;
        font-size: 12px;
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
   <div style="width: 100%; margin-top: 3px; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Stock Ledger Report</h2>
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
         <input id="datepicker" class="in" style="width:90%;">
        </div>
         <div class="col-md-1" style="margin-left: 30px;">
         To Date
        </div>
        <div class="col-md-1">
          <input id="datepicker1" class="in" style="width: 90%;">
        </div>
        <div class="col-md-3">
         
        </div>
        <div class="col-md-2" >
          
          <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Export To Excel</button>

          
        </div>
         <div class="col-md-1" style="margin-left: 30px;">
         Method
        </div>

        <div class="col-md-1">
          
          <select>
            <option>Average Rate</option>
          </select>
          
        </div>
        </div>
        
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
    <div class="table-responsive" style="margin-top: 10px;box-shadow: 2px solid #4291e6;">

  <table style="font-size: 13px;" class="table table-bordered table-hover" >

    <thead >

      <tr style="font-size: 12px; height: 35px; background-color:#0d93e2; ">
        <th style="width: 50px;">ITEM CODE</th>
        <th>ITEM NAME</th>
        <th>HSN CODE</th>
        <th>UNIT</th>
       <th>BRAND</th>
        <th>MODEL</th>
       
        <th>SIZE</th>
        <th>COLOR</th>
        <th>OPEN STOCK</th>
        <th>OP VALUE</th>
        <th>IN QTY</th>
        <th>IN VALUE</th>
        <th>OUT QTY</th>
       
        <th>OUT VALUE</th>
        <th>CLOSING STOCK</th>
        <th>AVG RATE</th>
        <th>STOCK VALUE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row" >
        <input type="text"class="in" name="" style="width: 50px;">
        <td><input class="in" type="text" name=""  style="width: 50px;"></td>
        <td><input class="in" type="text" name="" style="width:80px;"></td>
        <td><input class="in" type="text" name="" style="width: 90px;"></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name=""  style="width:80px;"></td>
        <td><input class="in" type="text" name=""  style="width:80px;"></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name=""  style="width:80px;"></td>
      </tr>
      <tr>
        <td scope="row" >
        
        <td ></td>
        <td></td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td></td>
        <td>Lewis</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
        
      </tr>
      <tr>
         <td scope="row" ></td>
        
        <td></td>
        <td></td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td></td>
        <td>Lewis</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
      </tr>
      
      
    </tbody>
    <tfoot>
      <td>Total</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tfoot>
  </table>
</div></div>
     
</div><br>
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
 
</body>
</html>