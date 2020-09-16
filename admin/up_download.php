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
    .fes {
    border: none;
    padding: 1px;
    border-radius: 2px;
    overflow: ;
    height: auto;
    background-color: #fff;
    box-shadow: #8392a9 2px 0px 15px 2px;
    border-left: 6px solid #336b18;
}
   .le {
    font-size: 12px;
    font-weight: normal;
    /* background-color: #03a9f4; */
     background-image: linear-gradient(#315b1c, #40881d);
    border: #ddd 1px solid;
    padding-top: 3px;
    padding-bottom: 6px;
    margin-bottom: 0px;
    border-radius: 6px;
    text-align: center;
    width: 70%;
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
       font-size: 15px;
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
                    <div class="col-md-1"  ></div>
                    <div class="col-md-10"  >
                        
                     <fieldset class="fes">
                        <legend class="le">Upload & Download Excel File</legend>
                        <br>
                        <div class="row">
                          <div class="col-md-4">
                              
                             
                              <a href="img/girl-with-border.jpg"class=" btn-lg r-10 "  style="height: 34px;background-image:  linear-gradient(#39741c, #39741c);color:#fff; font-weight: bold;  font-size: 14px; text-align: center;" download><i class="icon icon-arrow-circle-o-down"></i>&nbsp;Download</a>
                            
                          </div>
                          <div class="col-md-3">
                             
                           
                          </div>
                          <div class="col-md-5">
                             <div class="col-md-12 mb-12 ">
                                <div class="row">
                                    
                                    <div class="col-md-6"> 
                                      <input type="file" class="form-control" style="font-size:12px; width:220px;" name="" id="">
                                    
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                    <label class="col-md-4 la"  for="validationCustom01"> <button type="button" name="" class=" btn-lg r-10 " style="height: 34px;color:#fff;background-image:  linear-gradient(#39741c, #39741c);border:none; font-weight: bold;  font-size: 14px; text-align: center;"><i class="icon icon-arrow-circle-o-up"></i>&nbsp;&nbsp;Upload</button></label>
                                </div>
                            </div>
                          </div>
                          
                          
                       </div>
                       <br>
                       
                             
                     </fieldset>
                     <br>
                    
                     <br>
                        
                    
                      
                            
                        </div>
                               
                     
                </div>
                
            </form>
        </div>
    </div>
</div>

<script src="assets/js/app.js"></script>
<?php include 'footer.php'?>