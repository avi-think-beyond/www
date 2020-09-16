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
</head>
<body>
  <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Customer Master</h2>
    </div>
<div style=" width: 96%; margin-right: auto; margin-left: auto;">
 
    <form class="form-group">
      
      <div class="container-fluid" style="padding-left: 0px;">
      <div class="container-fluid" style="padding-left: 0px;">      
    <div class="row">
      <div class="col-md-3">
        <div class="row">
            <label class="col-md-4">
              Code
            </label>
            <div class="col-md-7">
              <input type="text" class="in" style="width: 100%;" name="">
            </div>
        </div>
         <div class="row t2">
            <label class="col-md-4">
              Address
            </label>
            <div class="col-md-7">
             <input type="text" class="in" style="width: 100%;" name="">
            </div>
        </div>
         <div class="row t2" >
            <label class="col-md-4">
              Ref. Cust No.
            </label>
            <div class="col-md-7">
              <input type="text" class="in" style="width: 100%;" name="">
            </div>
        </div>
         
      </div>
      <div class="col-md-3">
        <div class="row">
            <label class="col-md-4">
              Name*
            </label>
            <div class="col-md-7">
              <input type="text" class="in" style="width: 100%;" name="">
            </div>
        </div>
         <div class="row t2">
            <label class="col-md-4">
              GSTIN
            </label>
            <div class="col-md-7">
                <input type="text" class="in" style="width: 100%;" name="">
            </div>
        </div>
         <div class="row t2" >
            <label class="col-md-4">
              Ref. Cust Name
            </label>
            <div class="col-md-7">
              <input type="text" class="in" style="width: 100%;" name="">
            </div>
        </div>
      </div>
      <div class="col-md-3">
         <div class="row">
            <label class="col-md-4">
              Contact No.
            </label>
            <div class="col-md-7">
              <input type="text" class="in" style="width: 100%;" name="">
            </div>
        </div>
         <div class="row t2">
            <label class="col-md-4">
             Overhead Name
            </label>
            <div class="col-md-7">
                <input type="text" class="in" style="width: 100%;" name="">
            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row">
            <label class="col-md-4">
              Email Id
            </label>
            <div class="col-md-7">
              <input type="text" class="in" style="width: 100%;" name="">
            </div>
        </div>
         <div class="row t2">
            <label class="col-md-4">
              Overhead Amount
            </label>
            <div class="col-md-7">
             <input type="text" class="in" style="width: 100%;" name="">
            </div>
        </div>
         <div class="row t2" >
            <div class="col-md-6">
              
            </div>
            
            <div class="col-md-6">
              <input type="submit" name="" value="Submit" style="font-size: 12px; color: #fff; height: 30px; background-color: #0d93e2;" class="btn ">
              <input type="Reset" name="" value="Reset" style="font-size: 12px; color: #fff; height: 30px; background-color: #0d93e2;" class="btn" autocomplete="off">
            </div>
        </div>
      </div>
    <!--   </form> -->
    </div>
  </div>
</div>
    </form>
  </div>
   <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Customer Master List</h2>
    </div>
  <div style=" width: 96%; margin-right: auto; margin-left: auto;">

   
    <div>
      <button onclick="exportTableToExcel('tblData')" style="background-color: #0d93e2; float: right;color: white;">Export</button>
    </div>
       
<!------ Include the above in your HEAD tag ---------->     
    <div class="table-responsive" >

  <table id="tblData" style="font-size: 13px;" class="table table-bordered table-hover">

    <thead >

      <tr style="font-size: 12px; height: 35px; background-color:#0d93e2; ">
        <th >Code</th>
        <th>name</th>
        <th>Contact Number</th>
        <th>Address</th>
       <th>GSTIN</th>
        <th>Overhead Name</th>
        <th>Overhead Amount</th>
        <th>Customer Ledger</th>
        <th>Principal Customer</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row" >
        <input type="text"class="in" name="" style="width: 50px;">
        <td><input class="in" type="text" name=""  style="width: 90px;"></td>
        <td><input class="in" type="text" name="" style="width:90px;"></td>
        <td><input class="in" type="text" name="" style="width: 90px;"></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 100px;" ></td>
        <td><input class="in" type="text" name="" style="width: 100px;" ></td>
        <td><input class="in" type="text" name="" style="width: 100px;" ></td>
        <td><input class="in" type="text" name="" style="width: 100px;" ></td>
        
        <td><input class="in" type="text" name=""  style="width: 100px;"></td>
        
        
        </th>
      </tr>
      <tr>
        <td scope="row" >1</td>
        <td ></td>
        <td>01</td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td></td>
        <td>
          <input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;">
          <input type="image" name="" src="images/delete.png" style="border-width: 0px;height: 20px;width: 20px;">
        </td>
       
      </tr>
      
        <tr>
        <td scope="row" >1</td>
        <td ></td>
        <td>01</td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td></td>
        <td>
          <input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;">
          <input type="image" name="" src="images/delete.png" style="border-width: 0px;height: 20px;width: 20px;">
        </td>       
      </tr>
      
      
    </tbody>
  </table>
</div></div><br>
     
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->

<script type="text/javascript">
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
</body>
</html>