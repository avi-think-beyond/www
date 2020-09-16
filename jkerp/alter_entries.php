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
        font-size: 14px; 
      }
      .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        width: 100%;
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
  <div style="width: 100%; margin-top: 5px; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Ledger Reports</h2>
    </div>
<div style=" width: 96%; margin-right: auto; margin-left: auto;">
 
<div class="container-fluid" style="padding-left: 0px;">
  <div class="container-fluid" style="padding-left: 0px;">
    <div class="row">
      <div class="col-md-12">
        
          <center>
            <button type="button" class="btn btn-primary" onclick="PrintPreview()" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Print Preview</button>
           <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Print Preview In Excel</button>
            <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Trial B/L In XML</button>
            <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in"> A/C Heads in XML 
            </button>
          </center>
       
    </div>
    
  </div>
</div>
</div>

<!------ Include the above in your HEAD tag ---------->     
    <div class="table-responsive" style="margin-top: 10px;box-shadow: 2px solid #4291e6;" id="printarea">
      <h5>Alter Entries</h5>
  <table style="font-size: 13px;" class="table table-bordered table-hover" >
    <thead >
      <tr style="font-size: 12px; height: 35px; background-color:#0d93e2; ">
        <th>Ledger Name</th>
        <th>Account Head</th>
        <th>Amount(Dr.)</th>
        <th>Amount(Cr.)</th>
      </tr>
    </thead>
    <tbody>
      <tr id="drop2">
        <td><input type="text"class="in" name="" ></td>
        <td><input class="in" type="text" name="" ></td>
        <td><input class="in" type="text" name="" ></td>
        <td><input class="in" type="text" name="" ></td>
  
      </tr>
      <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>Test</td>
      </tr>
      <tr>
        <td >1</td>
        <td>1</td>
        <td>1</td>
        <td>Test</td>
      </tr>   
    </tbody>
  </table>
</div>
<script type="text/javascript">
  /*--This JavaScript method for Print Preview command--*/

    function PrintPreview() {

        var toPrint = document.getElementById('printarea');
        document.getElementById('drop2').style.display = "none";
        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');

        popupWin.document.open();

        popupWin.document.write(toPrint.innerHTML);


        popupWin.document.write('</html>');

        popupWin.document.close();
        document.getElementById('drop2').style.display = "block";
    }
</script>
     
</div><br>
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
 
</body>
</html>