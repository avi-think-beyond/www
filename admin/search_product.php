<?php include 'sidebar.php';?>

<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
 function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
<style type="text/css">
    .fe
    {
      border: none;
      padding: 1px; border-radius: 2px; 
      overflow:;
      height:auto;
      background-color: #fff;
      box-shadow:#084d84 4px 4px 6px 0px;





    }
    .btnsre
    {
        height: 24px;
        width: 30px; 
        border-radius: 5px;
        cursor: pointer; 
        background-image: linear-gradient(#32aef7, #074a80); 
        color: #fff; 
        border: none;
    }
    .sretxt
    {
      width: 74%; 
      height: 17px;
      border: none;
    }
    .box_ser
    {
      margin: auto; 
      border: 1px solid #b7bbbe; 
      width: 67%;
      border-radius: 5px; 
      height: 25px;
    }
    .fes
    {
      border: none;
      padding: 1px; border-radius: 2px; 
      overflow:;
      height:auto;
     
      background-color: #fff;
      box-shadow: #8392a9 2px 0px 15px 2px;
      border-left: 6px solid  #074a80;


     
    }
    .le
    {
       font-size: 12px;
    font-weight: normal;
    /* background-color: #03a9f4; */
    background-image: linear-gradient(#32aef7, #074a80);
    border: #ddd 1px solid;
    padding-top: 3px;
    padding-bottom: 6px;
    margin-bottom: 0px;
    border-radius: 6px;
    text-align: center;
    width: 40%;
    color: #fff;
    }
    .btn1
    {
        height: 30px;
        font-size: 13px;
    }
    .s
    {
        margin-top: 10px;
    }
    .la
    {
       font-size: 12px;
        color: #2187c8;
    }
    td
    {
        width: 200px;
    }

</style>
<div class="page has-sidebar-left" >
    
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort" >
            <form >
                
                <div class="row " >
                    
                    <div class="col-md-12"  >
                        
                     <fieldset class="fes">
                        <legend class="le">Search Product</legend>
                        <br>
                        <div class="row">
                          <div class="col-md-4">
                             <div class="col-md-12 mb-12 ">
                                <div class="row">
                                    <label class="col-md-6 la"  for="validationCustom01">Product Name</label>
                                    <div class="col-md-6"> 
                                      <select class="btn1 form-control" name="" id="" value="" required>
                                        <option value="Select Product">Select Product</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                      </select>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                             <div class="col-md-12 mb-12 ">
                                <div class="row">
                                    <label class="col-md-4 la"  for="validationCustom01">Size</label>
                                    <div class="col-md-8"> 
                                        <select class="btn1 form-control"  value="" required>
                                          <option value="32">32</option>
                                          <option value="34">34</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                          </div>
                           <div class="col-md-3">
                             <div class="col-md-12 mb-12 ">
                                <div class="row">
                                    <label class="col-md-5 la"  for="validationCustom01">Colour</label>
                                    <div class="col-md-7"> 
                                        <select class="btn1 form-control" value="" required>
                                          <option value="Red">Red</option>
                                          <option value="Green">Green</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="col-md-12 mb-12 ">
                                <div class="row">
                                    <label class="col-md-4 la">Select</label>
                                    <div class="col-md-8 "> 
                                          <select class="btn1 form-control" value="" required>
                                              <option value="Adult">Adult</option>
                                              <option value="Child">Child</option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                          </div>
                          
                       </div>
                       <br>
                       
                             
                     </fieldset>
                   </div>
                 </div>
                     <br>
                     <center>
                             
                                <button type="submit" name="search" class="btn btn-danger btn-lg r-10 " style="height: 34px;background-image: linear-gradient(#0d93e2, #044980); font-weight: bold;  font-size: 13px; text-align: center;"><i class="icon icon-search3"></i>Search</button>
                     </center>
                     <br>
                        
                    
                      <div class="table-responsive">
                                <table class="table table-striped table-hover r-0">
                                        <thead style="background-color: #1974b2; border-radius: 10px; color: #fff;">
                                            <tr class="no-b">
                                                
                                                <th>Bar Code</th>
                                                <th>Product_Name</th>
                                                <th>Product_Code</th>
                                                <th>HSN_Code</th>
                                                <th>Quantity</th>
                                                <th>Parchase_Rate</th>
                                                <th>Sales_Rate</th>
                                                <th>MRP</th>
                                                <th>Discount</th>
                                                <th>GST%</th>
                                                <th>Brand</th>
                                                <th>Size</th>
                                                <th>Colour</th>
                                                <th>Product_Type</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>

                                        <tr style="color: #000;">
                                              
                                                <td>F444556</td>
                                                <td >Product Name</td>
                                                <td>Product Code</td>
                                                <td>HSNkijhio</td>
                                                <td>700</td>
                                                <td>Parchase Rate</td>
                                                <td>Sales Rate</td>
                                                <td>2000</td>
                                                <td>2%</td>
                                                <td>3%</td>
                                                <td>Reebok</td>
                                                <td>32</td>
                                                <td>Red</td>
                                                <td>Product Type</td>
                                               
                                       </tr>
                                           


                                      
                                        </tbody>
                                    </table>
                                    <br>

                             </div>
                            
                        </div>
                               
                     
                </div>
                
            </form>
        </div>
    </div>
</div>

<script src="assets/js/app.js"></script>
<?php include 'footer.php'?>