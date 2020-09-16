<?php include("header.php"); ?>
  <br><br>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min1.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style>
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
        width: 90%;
      }
      h2 {
  text-align: center;
}
@media only screen and (max-width: 768px) {
  #in{
    width: 79%;
  }
    #in1{
    width: 99.99%;
  }
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
    font-weight: 600;"> USER ACCESS FORM »» ASSIGN PERMISSION </h2>
    </div>

   <div class="col-md-2"></div>
  <div class=" col-md-7" style="margin: auto;">
    <fieldset id="in1" style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none; text-align: center; width: 70%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Create New User</legend>
       <div class=" row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-12">
          <fieldset style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;"><legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 59%;  background-color: #f9f9f9; border: #ddd 1px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Select User Name</legend>
              
                <select size="1" name="" style="margin-top: 10px; margin-bottom: 10px;"  class="in" >
                  <option value="108">Darshan Jade</option>
                  <option selected="selected" value="106">ntest123</option>
                  <option value="96">sales_11</option>
                  <option value="107">test1212</option>
                  <option value="97">testsales</option>

                </select>
              </fieldset>
            </div>
          </div>
          <br>
           <div class="row t2">
            <div class="col-md-12">
          <fieldset id="in1" style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;"><legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 59%;  background-color: #f9f9f9; border: #ddd 1px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Select Company</legend>
              
                <table >
                      <tbody>
                        <tr>
                        <td><input type="checkbox" name="" autocomplete="off"><label for="">Connectivity Solutions Pvt Ltd </label></td>
                      </tr><tr>
                        <td><input type="checkbox" name="" autocomplete="off"><label for="">Huma Cosmetic Center </label></td>
                      </tr><tr>
                        <td><input id="" type="checkbox" name="" autocomplete="off"><label for="">maco </label></td>
                      </tr><tr>
                        <td><input id="" type="checkbox" name="" autocomplete="off"><label for="">MACO INFOTECH 2 </label></td>
                      </tr><tr>
                        <td><input id="" type="checkbox" name="" autocomplete="off"><label for="">MACO INFOTECH LTD. </label></td>
                      </tr><tr>
                        <td><input  type="checkbox" name="" autocomplete="off"><label for="">NEW HANDLOOM WORLD </label></td>
                      </tr>

                    </tbody>
                  </table>
                  <input type="submit" name="" value="Save"  class="btn" style="font-weight:normal; font-size: 13px; height: 29px; color: #f2f2f2; background-color:#0473bf; " autocomplete="off">
              </fieldset>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>

        <div class="col-md-5">
          <div class="row t2">
            <div class="col-md-12">
              <input type="submit" name="" value="Get company for selected user"class="btn btn-info" style="font-weight:normal; font-size: 12px; height: 30px;" autocomplete="off">
            </div>
            
            <div class="col-md-10">
              <br>
               <fieldset id="in1" style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;"><legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 80%;  background-color: #f9f9f9; border: #ddd 1px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Select Company for test1212</legend>
                      <table  >
                          <tbody>
                            <tr>
                            <td><input id="" type="checkbox" name="" autocomplete="off"><label for="">Huma Cosmetic Center </label></td>
                          </tr>
                          <tr>
                            <td><input id="" type="checkbox" name="" autocomplete="off"><label for="">maco </label></td>
                          </tr>
                            

                        </tbody>
                      </table>
              
                    <input type="submit" name="" value="Delete" class="btn btn-info" style="font-weight:normal;font-size: 12px; height:29px;" autocomplete="off">    
              </fieldset>
            </div>
          </div>
        </div>
       </div>    
    </fieldset>
  </div>
</div>

   <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
  


  </body>
  