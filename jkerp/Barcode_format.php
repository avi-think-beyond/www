<?php include("header.php"); ?>
  <br><br><br>
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
    <style>
      

table {
    
    margin:0px;
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
<div style=" width: 96%; margin-right: auto; margin-left: auto;">
 <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;"> Barcode Master </h2>
    </div>
            
        
       
<!------ Include the above in your HEAD tag ---------->



<div class="panel-body" >
        
                    
  <div class="panel-body">
    <div class="table-responsive" >

     <table style="font-size: 13px;" class="table table-bordered table-hover" style="" >

    <thead >

      <tr style="font-size: 12px; height: 35px; background-color:#0d93e2; ">
        <th >Bar Code</th>
        <th>Item Name/Code</th>
        <th>Size</th>
        <th>Color</th>
       <th>Brand</th>
        <th>Model</th>
        <th>HSN Code</th>
        <th>Unit</th>
        <th>P Price</th>
        <th>S Price</th>
        <th>Tax Incl.</th>
        <th>Dis %</th>
        <th>GST %</th>
        <th></th>
      </tr>
    </thead>
    <tbody style="background-color:white; ">
      <tr>
        <th scope="row" >
        <input type="text"class="in" name="" style="width: 120px;">
        <td><input class="in" type="text" name=""  style="width: 190px;"></td>
        <td><input class="in" type="text" name="" style="width: 25px;"></td>
        <td><input class="in" type="text" name="" style="width: 33px;"></td>
        <td><input class="in" type="text" name="" style="width: 38px;" ></td>
        <td><input class="in" type="text" name="" style="width: 38px;" ></td>
        <td><input class="in" type="text" name="" style="width: 95px;" ></td>
        <td><input class="in" type="text" name="" style="width: 93px;" ></td>
        <td><input class="in" type="text" name="" style="width: 90px;" ></td>
        <td><input class="in" type="text" name=""  style="width: 120px;"></td>
        <td><span style=" display:inline-block;width:25px;text-align: center;"><input type="checkbox"  class="in" name=""></span></td>
        <td><input class="in" type="text" name="" style="width: 70px;" ></td>
        <td><input class="in" type="text" name="" style="width: 43px;" ></td>
        <td><button type="submit" class="btn btn-primary" style="
    font-size: 12px; background-color:#0d93e2;width:80px; height: 30px;">Generate</button></td>
        
        </th>
      </tr>      
    </tbody>
  </table>
</div>
     </div>
                
    </div>
</div>
<br>
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

</body>
</html>