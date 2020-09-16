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
  }
}
    </style>
</head>
<body>
<div style=" width: 96%; margin-right: auto; margin-left: auto;">
 <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd; margin-bottom: 20px;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Customer Balance Report</h2>
    </div>

    <div class="container-fluid" style="padding-left: 0px;">
      <div class="container-fluid" style="padding-left: 0px;">
    <div class="row">
      <div class="col-md-4">
        <div class="row">
        <div class="col-md-2">
          Date
        </div>
        <div class="col-md-4">
         <input  id="datepicker"/ style="height: 30px;">
        </div>
         <div class="col-md-2">
            Currency
          </div>
        <div class="col-md-4">
              <select style="height:30px;">
               <option selected="selected" value="All Currency" id="in">All Currency</option>
               <option value="Local Currency">Local Currency</option>
              </select>
        </div>
     
   </div>
 </div>
 <div class="col-md-6">
        <div class="row">
        <div class="col-md-2">
          <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Get Report</button>
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Print Report</button>
        </div>
         <div class="col-md-3">
           <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in" >All Customer Ageing</button>
          </div>
        <div class="col-md-2" >
            <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Dashboard</button>  
        </div>
     
   </div>
 </div>
 <div class="col-md-2">
        <div class="row">
          <div class="col-md-4">
          
        </div>
        <div class="col-md-8">
          <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;float: left;" id="in">Export To Excel</button>
        </div>
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

      <tr style="font-size: 12px; height: 35px; background-color:#0d93e2;">
        <th style="width: 50px;">Sr.No.</th>
        <th>Customer Code</th>
        <th>Customer Name</th>
        <th>Total UnMapped Invoice</th>
       <th> Total UnMapped Receipt </th>
        <th>Closing Balance</th>
       
        <th>PDC Amount</th>
        <th>Balance Amt </th>
        <th>Ageing</th>

        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" name="" style="width: 40px;height: 25px;"></td>
        <td><input type="text" name="" style="width: 80px;height: 25px;"></td>
        <td><input type="text" name="" style="width: 110px;height: 25px;"></td>
        <td><input type="text" name="" style="height: 25px;"></td>
        <td><input type="text" name="" style="width: 80px;height: 25px;"></td>
        <td><input type="text" name="" style="width: 80px;height: 25px;"></td>
        <td><input type="text" name="" style="width: 80px;height: 25px;"></td>
        <td><input type="text" name="" style="width: 80px;height: 25px;"></td>
        <td><input type="text" name="" style="width: 80px;height: 25px;"></td>
      </tr>
      <tr>
        <td>1</td>
        
        <td>01</td>
        <td>Maco Trader</td>
        <td>0.00 </td>
        <td>4,872.0</td>
        <td>(4,872.00)</td>
        <td>(0.00)</td>
        <td>(4,872.00)</td>
        <td><button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;">Get Ageing</button>  </td>
        </th>
      </tr>
      <tr>
        <td>1</td>
        
        <td>01</td>
        <td>Maco Trader</td>
        <td>0.00 </td>
        <td>4,872.0</td>
        <td>(4,872.00)</td>
        <td>(0.00)</td>
        <td>(4,872.00)</td>
        <td><button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;">Get Ageing</button>  </td>
        </th>
      </tr>
      <tr style="background-color:#0d93e2;color: white;font-weight: bold;">
        <td colspan="1">Total </td>
        <td > </td>
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