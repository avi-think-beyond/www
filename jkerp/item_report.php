<?php include("header.php"); ?>
  <br><br><br>
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
@media only screen and (max-width: 768px) {
  #in{
    width: 100%;
  }
}


    </style>
</head>
<body>
<div style=" width: 96%; margin-right: auto; margin-left: auto;">
<div style="background-color: #f5f5f5; width: 100%;">
                <h4 style="margin-left: 20px;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;"> Item List</h4>
        </div>
        <div class="container-fluid" style="padding-left: 0px;">
           
            <div class="row" style="padding-left: 6px;padding-top: 6px;">
                <div class="col-md-8" style="padding-top: 6px;">
                   
                </div>
                
                <div class="col-md-2" style="padding: 6px;">
                    <button type="submit" class="btn btn-primary" style="float:right;font-family: 'Quicksand', sans-serif !important;
    font-size: 13px !important; background-color:#0d93e2;/*width: 150px;*/" id="in">Export To Excel</button>
     
                </div>
                <div class="col-md-2" style="padding: 6px;">
                    <button type="submit" class="btn btn-primary" style="float:right;font-family: 'Quicksand', sans-serif !important;
    font-size: 13px !important; background-color:#0d93e2;/*width: 150px;*/" id="in">Delete Selected Items</button>
                    
                </div>
            </div>
        </div>
    

            
            
        
       
<!------ Include the above in your HEAD tag ---------->



            <div class="panel-body" >
            
           
                    
                    
                        <div class="panel-body">
                            <div class="table-responsive" >

                <table style="font-size: 13px;" class="table table-bordered table-hover" >

    <thead >

      <tr style="font-size: 12px; height: 35px; background-color:#0d93e2; ">
        
        <th cope="col" style="width: 50px; overflow: hidden; "><input type="checkbox" name="" id="select_all"> Action</th>
        <th>SrNo.</th>
        <th>Code</th>
        <th>Name</th>
        <th> HSN Code</th>
        <th>GST RATE</th>
        <th>CESS Code</th>
        <th>CESS RATE</th>
        <th>Min_Stock</th>
        <th>Order_Level</th>
        <th>UNIT</th>
      </tr>
    </thead>
    <tbody style="background-color:white; ">
      <tr>
    
        
        <td><input class="in" type="text" name=""  style="width: 100px;"></td>
        <td><input class="in" type="text" name="" style="width: 80px;"></td>
        <td><input class="in" type="text" name="" style="width: 90px;"></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 80px;" ></td>
        <td><input class="in" type="text" name="" style="width: 50px;" ></td>
        <td><input class="in" type="text" name="" style="width: 90px;" ></td>
        <td><input class="in" type="text" name=""  style="width: 100px;"></td>
        <td><input class="in" type="text" name=""  style="width: 110px;"></td>
        <td><input class="in" type="text" name="" style="width: 110px;" ></td>
        
        
        </th>
      </tr>
      <tr>
        
        <td><input type="checkbox" name="" class="checkbox" ><input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;"><input type="image" name="" src="images/delete1.png" style="border-width: 0px;height: 20px;width: 20px;"></td>
        <td>01</td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td>Lewis</td>
        <td>Trousers</td>
        <td></td>
        <td></td>
      </tr>
      
         <tr>
        
        <td><input type="checkbox" name="" class="checkbox" ><input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;"><input type="image" name="" src="images/delete1.png" style="border-width: 0px;height: 20px;width: 20px;"></td>
        <td>01</td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td>Lewis</td>
        <td>Trousers</td>
        <td></td>
        <td></td>
      </tr>
      
     
        <tr>
        
        <td><input type="checkbox" name="" class="checkbox" ><input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;"><input type="image" name="" src="images/delete1.png" style="border-width: 0px;height: 20px;width: 20px;"></td>
        <td>01</td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td>Lewis</td>
        <td>Trousers</td>
        <td></td>
        <td></td>
      </tr>
      
        <tr>
        
        <td><input type="checkbox" name="" class="checkbox" ><input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;"><input type="image" name="" src="images/delete1.png" style="border-width: 0px;height: 20px;width: 20px;"></td>
        <td>01</td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td>Lewis</td>
        <td>Trousers</td>
        <td></td>
        <td></td>
      </tr>
      
      
        <tr>
        
        <td><input type="checkbox" name="" class="checkbox" ><input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;"><input type="image" name="" src="images/delete1.png" style="border-width: 0px;height: 20px;width: 20px;"></td>
        <td>01</td>
        <td>Test</td>
        <td>001</td>
        <td>28.00</td>
        <td></td>
        <td>KG</td>
        <td>Lewis</td>
        <td>Trousers</td>
        <td></td>
        <td></td>
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

<!-------------------------SCript File-------------------->

<style type="text/css">
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

    <script type="text/javascript">
        var select_all = document.getElementById("select_all"); //select all checkbox
var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

//select all checkboxes
select_all.addEventListener("change", function(e){
    for (i = 0; i < checkboxes.length; i++) { 
        checkboxes[i].checked = select_all.checked;
    }
});


for (var i = 0; i < checkboxes.length; i++) 
{
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
</body>
</html>