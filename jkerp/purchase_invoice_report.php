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
    font-weight: 600;">Purchase List</h2>
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
        <div class="col-md-6">
         
        </div>
        <div class="col-md-1" >
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
            

   
<!------ Include the above in your HEAD tag ---------->     
    <div class="table-responsive" style="margin-top: 10px;box-shadow: 2px solid #4291e6;">

  <table style="font-size: 13px;" class="table table-bordered table-hover" >

    <thead >

      <tr style="font-size: 12px; height: 35px; background-color:#0d93e2; ">
        <th style="width: 50px;">Edit/View</th>
        <th>Delete</th>
        <th>Db Note</th>
        <th>Date</th>
       <th>Invoice No</th>
        <th>Supplier Name</th>
       
        <th>Supplier GSTIN</th>
        <th>Quantity</th>
        <th>Purchase Value</th>
        <th>Overhead Charges</th>
        <th>CGST</th>
        <th>SGST</th>
        <th>IGST</th>
       
        <th>CESS Amount</th>
        <th>Roundoff</th>
        <th>Gross Value</th>
        <th>Remarks</th>
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
        
        
        
        
        </th>
      </tr>
      <tr>
        <td scope="row" > <input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;"><input type="image" name="" src="images/report.png" style="border-width: 0px;height: 20px;width: 20px;padding-left: 5px;"></td>
        
        <td > <input type="image" name="" src="images/delete1.png" style="border-width: 0px;height: 20px;width: 20px;"></td>
        <td><input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;"></td>
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
         <td scope="row" > <input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;"><input type="image" name="" src="images/report.png" style="border-width: 0px;height: 20px;width: 20px;padding-left: 5px;"></td>
        
        <td > <input type="image" name="" src="images/delete1.png" style="border-width: 0px;height: 20px;width: 20px;"></td>
        <td><input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;"></td>
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
  </table>
</div>
     
</div><br>
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
 
</body>
</html>