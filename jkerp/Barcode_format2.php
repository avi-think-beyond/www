<?php include("header.php"); ?>
  <br><br><br>
<style type="text/css">
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
    font-weight: 600;">Item List</h2>
    </div>
            <div class="row" style="padding-left: 6px;padding-top: 6px;">
                <div class="col-md-2" style="padding-top: 6px;">
                    <label style="float: left;padding-left: 10px;">Item Code as Barcode</label>
                    <label><input type="checkbox" name="" style="margin-left: 12px;"></label>
                    
                </div>
                <div class="col-md-3" style="padding-top: 6px;">
                    
                </div>
                <div class="col-md-7" style="padding-top: 4px;">
                    <button type="submit" class="btn btn-primary" style="float:right;font-family: 'Quicksand', sans-serif;
    font-size: 13px; margin-right:20px; background-color:#0d93e2;width: 130px;">Generate Barcode</button>
                </div>
            </div>
            
            
        
       
<!------ Include the above in your HEAD tag ---------->



            <div class="panel-body" >
            
            <fieldset class="col-md-12" style="border:1px solid;padding:4px;">       
                   <legend style=" border-radius: 5px; padding-top: 2px; font-size: 14px; height: 30px; border: solid 1px #c5aaaa; width: 10%;"><center> Packed Items</center> </legend>
                    
                    
                        <div class="panel-body">
                            <div class="table-responsive" >

                <table style="font-size: 13px;" class="table table-bordered table-hover" >

    <thead >

      <tr style="font-size: 12px; height: 35px; background-color:#0d93e2; ">
        <th scope="col" style="width: 70px;" >ROWNO</th>
        <th cope="col" style="width: 50px; overflow: hidden; text-align: center;"><input type="checkbox" name="" id="select_all"> SELECT ITEM</th>
        <th>CODE</th>
        <th>NAME</th>
       <th>HSN CODE</th>
        <th>GST RATE</th>
       
        <th>UNIT</th>
        <th>SIZE</th>
        <th>COLOR</th>
        <th>BRAND</th>
        <th>MODEL</th>
        <th>GST  INCL</th>
        <th>RATE</th>
        <th>DIS%</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row" >
        <input type="text"class="in" name="" style="width: 50px;">
        <td><input class="in" type="text" name=""  style="width: 104px;"></td>
        <td><input class="in" type="text" name="" style="width: 80px;"></td>
        <td><input class="in" type="text" name="" style="width: 90px;"></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 36px;" ></td>
        <td><input class="in" type="text" name="" style="width: 71px;" ></td>
        <td><input class="in" type="text" name=""  style="width: 90px;"></td>
        <td><input class="in" type="text" name=""  style="width: 100px;"></td>
        <td><input class="in" type="text" name="" style="width: 81px;" ></td>
        <td><input class="in" type="text" name="" style="width: 95px;" ></td>
        <td><input class="in" type="text" name="" style="width: 95px;" ></td>
        
        </th>
      </tr>
      <tr>
        <td scope="row" >1</td>
        <td ><input type="checkbox" name="" class="checkbox" style="text-align: center;"></td>
        <td>01</td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td></td>
        <td>Lewis</td>
        <td>Trousers</td>
        <td><input type="checkbox" name="" class="checkbox" style="text-align: center;"></td>
         <td><input class="in" type="text" name="" style="width: 95px;" ></td>
        <td><input class="in" type="text" name="" style="width: 95px;" ></td>
      </tr>
      <tr>
        <tr>
        <td scope="row" >1</td>
        <td ><input type="checkbox" name="" class="checkbox" style="text-align: center;"></td>
        <td>01</td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td></td>
        <td>Lewis</td>
        <td>Trousers</td>
        <td><input type="checkbox" name="" class="checkbox" style="text-align: center;"></td>
        <td><input class="in" type="text" name="" style="width: 95px;" ></td>
        <td><input class="in" type="text" name="" style="width: 95px;" ></td>
      </tr>
      
      
    </tbody>
  </table>
</div>
     </div>
        </fieldset>             
    </div>
</div>
<br>
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->


    <script type="text/javascript">
        var select_all = document.getElementById("select_all"); //select all checkbox
var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

//select all checkboxes
select_all.addEventListener("change", function(e){
    for (i = 0; i < checkboxes.length; i++) { 
        checkboxes[i].checked = select_all.checked;
    }
});


for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].addEventListener('change', function(e){ //".checkbox" change 
        //uncheck "select all", if one of the listed checkbox item is unchecked
        if(this.checked == false){
            select_all.checked = false;
        }
        //check "select all" if all checkbox items are checked
        if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
            select_all.checked = true;
        }
    });
}
    </script>

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
</body>
</html>