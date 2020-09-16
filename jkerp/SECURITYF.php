<?php include("header.php"); ?>
  <br><br>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
   
    .bs-example{
        margin: 20px;
        
    }
    .accordion .fa{
        margin-right: 0.5rem;
    }
    
  .t2
  {
    margin-top: 5px;
  }
   
@media only screen and (max-width: 768px) {
  #in{
    width: 92%;
  }
   
}
table {
    
    margin:0px;
}

thead, tfoot {
    
    display:table;
    
    /*width:calc(100% - 18px);*/
}
tbody {
    height:200px;
    overflow-y: scroll;
    overflow-x:hidden;
    display:block;
    width:100%;
}
tbody tr {
    display:table;
    table-layout:fixed;
}


 .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        width: 100%;
        height: 25px;
      }
</style>
<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>
</head>
<body>
<div class="bs-example">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i>Page Authentication</button>									
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="row"> 
                    <div class="col-md-4"> 
                            <fieldset  style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
                                     <legend style="    font-size: 12px;  font-weight: normal;  border-bottom: none;  width: 50%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;border-radius: 5px">Select User Name</legend>
               
              
               
                                             <div class="row t2">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                       <select name="" class="in" id="in" >
                                                            <option value="108">Darshan Jade</option>
                                                            <option value="106">ntest123</option>
                                                            <option value="96">sales_11</option>
                                                            <option value="107">test1212</option>
                                                            <option value="97">testsales</option>
                                                        </select>
                                                      </div>
                                                      <div class="col-md-1">
                                                      </div>
                                                       <div class="col-md-2">
                                                        <input type="submit" name="" value="Pages for selected user"   class="btn " style="background-color: #0d93e2; color: #ffffff; height: 28px; font-size: 11px;"  autocomplete="off">
                                                      </div>
                                                   </div>
                                               </div>
                                             </div>
                                               
                             </fieldset>

                             <fieldset  style="  background-color: #f2f2f2; margin-top: 10px;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
                                     <legend style="    font-size: 12px;  font-weight: normal;  border-bottom: none;  width: 50%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;border-radius: 5px">Select User Name</legend>
                                            <ul>
                                                <li><input id="ctl00_ContentPlaceHolder1_hdroplis_0" type="checkbox" name="ctl00$ContentPlaceHolder1$hdroplis$0" autocomplete="off"><label for="ctl00_ContentPlaceHolder1_hdroplis_0">MACO INFOTECH LTD. </label>
                                                </li>
                                                 <li><input id="ctl00_ContentPlaceHolder1_hdroplis_0" type="checkbox" name="ctl00$ContentPlaceHolder1$hdroplis$0" autocomplete="off"><label for="ctl00_ContentPlaceHolder1_hdroplis_0">MACO INFOTECH LTD. </label>
                                                </li>
                                            </ul>          
                                               
                             </fieldset>
                                 <div style="margin-top: 5px;">

                                  <input type="submit" name="" value="Save"   class="btn " style="background-color: #0d93e2; color: #ffffff; height: 28px; font-size: 11px;"  autocomplete="off">
                                   <input type="submit" name="" value="Reset"   class="btn " style="background-color: #0d93e2; color: #ffffff; height: 28px; font-size: 11px;"  autocomplete="off">
                                   </div>
                  </div>
                   <div class="col-md-8 table-responsive"> 
                        
      
                    <table class="table  table-bordered table-hover" style="margin-top: 15px;">
                     
                      <thead style="background-color: #0d93e2; border-top-right-radius: 8px; border-top-left-radius: 8px; ">
                        <tr>
                          <th scope="col" style="width: 311px;">Name</th>
                          <th scope="col" style="width: 124px;"><input id="select_all" type="checkbox" name=""> &nbsp;Create</th>
                          <th scope="col" style="width: 122px;"><input type="checkbox" name=""> &nbsp;Modify</th>
                          <th scope="col" style=" width: 96px;"><input type="checkbox" name=""> &nbsp;View</th>
                          <th scope="col" style="width: 128px;"><input type="checkbox" name=""> &nbsp;Delete</th>
                         
                        </tr>
                      </thead>
                      <tbody id="dataTable">
                        <tr>
                          <td><input type="text" style="width: 308px;height: 25;" value=""  class="in" name=""></td>
                          <td><span style="display:inline-block;width: 121px;text-align: center;"><input type="text" class="in" name=""></span></td>
                          <td><span style="display:inline-block;width: 119px;text-align: center;"><input type="text" class="in" name=""></span></td>
                          <td><span style="display:inline-block;width: 94px;text-align: center;"><input type="text" class="in" name=""></span></td>
                          <td><span style="display:inline-block;width: 123px;text-align: center;"><input type="text" class="in" name=""></span></td>
                         
                        </tr>    
                         <tr>
                          <td><input type="text" style="width: 308px;height: 25;" value="Size Master" disabled="" class="in" name=""></td>
                          <td><span style="display:inline-block;width: 121px;text-align: center;"><input type="checkbox" class="checkbox" name=""></span></td>
                          <td><span style="display:inline-block;width: 119px;text-align: center;"><input type="checkbox" name=""></span></td>
                          <td><span style="display:inline-block;width: 94px;text-align: center;"><input type="checkbox" name=""></span></td>
                          <td><span style="display:inline-block;width: 123px;text-align: center;"><input type="checkbox" name=""></span></td>
                         </tr>
                       
                      </tbody>
                      
                    </table>
                        
                  </div>
                </div>
            </div>
        </div>
        

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i> Alter page Authentication</button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                   <div class="row"> 
                    <div class="col-md-4"> 
                            <fieldset  style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
                                     <legend style="    font-size: 12px;  font-weight: normal;  border-bottom: none;  width: 50%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;border-radius: 5px">Select User Name</legend>
               
              
               
                                                  <div class="row t2">
                                                      <div class="col-md-11">
                                                       <select name="" class="in" id="in" >
                                                            <option value="108">Darshan Jade</option>
                                                            <option value="106">ntest123</option>
                                                            <option value="96">sales_11</option>
                                                            <option value="107">test1212</option>
                                                            <option value="97">testsales</option>
                                                        </select>
                                                      </div>
                                                   </div>
                                                   <div class="row t2">
                                                        <div class="col-md-11">
                                                            <input type="submit" class="in"   name="" value="Get Company"   class="btn " style="background:linear-gradient(#1289A7, #b98daf) !important; color: #ffffff; height: 28px; font-size: 11px;"  autocomplete="off">
                                                        </div>
                                                   </div>
                                               
                             </fieldset>

                             <fieldset  style="  background-color: #f2f2f2; margin-top: 10px;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
                                     <legend style="    font-size: 12px;  font-weight: normal;  border-bottom: none;  width: 50%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;border-radius: 5px">Select Company</legend>

                                        <div class="row t2">
                                                      <div class="col-md-11">
                                                       <select name="" class="in" id="in" >
                                                            <option value="MACO INFOTECH LTD. ">MACO INFOTECH LTD. </option>
                                                            
                                                        </select>
                                                      </div>
                                                   </div>
                                                   <div class="row t2">
                                                        <div class="col-md-11">
                                                            <input type="submit" class="in"   name="" value="Pages for selected user"   class="btn " style="background:linear-gradient(#1289A7, #b98daf) !important; color: #ffffff; height: 28px; font-size: 11px;"  autocomplete="off">
                                                        </div>
                                                   </div>
                                          
                             </fieldset>
                                 <div style="margin-top: 5px;">

                                  <input type="submit" name="" value="Save"   class="btn " style="background:linear-gradient(#1289A7, #b98daf) !important; color: #ffffff; height: 28px; font-size: 11px;"  autocomplete="off">
                                   <input type="submit" name="" value="Reset"   class="btn " style="background:linear-gradient(#1289A7, #b98daf) !important; color: #ffffff; height: 28px; font-size: 11px;"  autocomplete="off">
                                   </div>
                                  </div>
                                   <div class="col-md-8 table-responsive"> 
                                        
                      
                                   <table class="table  table-bordered table-hover" style="margin-top: 15px;">
                                     
                                      <thead style="background:linear-gradient(#1289A7, #b98daf) !important; border-top-right-radius: 8px; border-top-left-radius: 8px; ">
                                        <tr>
                                          <th scope="col" style="width: 301px;">Name</th>
                                          <th scope="col" style="width: 108px;">Create</th>
                                          <th scope="col" style="width: 107px;">Modify</th>
                                          <th scope="col" style="width: 75px;">View</th>
                                          <th scope="col" style="width: 93px;">Delete</th>
                                          <th scope="col" style="width: 93px;">Delete</th>
                                         
                                        </tr>
                                      </thead>
                                      <tbody id="dataTable">
                                       
                                         <tr>
                                          <td style="width: 301px;height: 25;"> Size Master</td>
                                          <td><span style="display:inline-block;width: 104px;text-align: center;">Y</span></td>
                                          <td><span style="display:inline-block;width: 105px;text-align: center;">Y</span></td>
                                          <td><span style="display:inline-block;width: 72px;text-align: center;">Y</span></td>
                                          <td><span style="display:inline-block;width: 90px;text-align: center;">Y</span></td>
                                           <td><span style="display:inline-block;width: 90px;text-align: center;"><img style="width: 20px; height: 20px;" src="images/delete.png"> <input type="submit" name="" value="Submit" class="btn " style="background:linear-gradient(#1289A7, #b98daf) !important; float: right; color: #ffffff; height: 28px; font-size: 11px;" autocomplete="off"></span></td>
                                         
                                        </tr>    
                                         
                                      </tbody>
                                      
                                    </table>
                                        
                              </div>
                         </div>
                     </div>
                 </div>
        </div>
       
    </div>
</div>
</div>
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
<br>
 <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->                      