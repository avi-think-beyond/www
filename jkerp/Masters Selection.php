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
        font-size: 12px; 
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
    width: 96%;
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
    font-weight: 600;">Masters Selection </h2>
    </div>
  <div style=" width: 96%; margin-right: auto; margin-left: auto; overflow: hidden;">
   
<div class=" col-sm-4 pdt6">
    <input id="" type="radio" name="" value="" checked="checked" autocomplete="off"><label for="">Attribute Not Selected</label>
     &nbsp;&nbsp;&nbsp;&nbsp;
    <input id="" type="radio" name="" value="" autocomplete="off"><label for="">Attribute Selected</label>
  </div>

<div class="row">
   <div class="col-md-1"></div>
  <div class=" col-md-5">

    <fieldset id="in1" style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 80%; text-align: center;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Masters Selection List</legend>
    <br>
       <table style="font-size: 12px;"  class="table table-bordered table-hover table-condensed table-striped" id="">
        <thead>
          <tr style="background-color:#0d93e2;">
                                                                    
            <th >Name</th>
            <th>Use</th>
            <th >Order</th>
         </tr>
         </thead>
          <tbody>
         <tr>
         <td>Size</td>
         <td>
           <input id=" " type="checkbox" name="" autocomplete="off">
          </td>
          <td>
            <input name="" type="text"  id="" class="in" autocomplete="off">
          </td>
          </tr>
          <tr>
            <td>Color</td>
            <td>
            <input id="" type="checkbox" name="" autocomplete="off">
           </td>
           <td>
            <input name="" type="text" id="" class="in " autocomplete="off">
           </td>
           </tr>
             <tr>
              <td>Brand</td>
            <td>
            <input id="" type="checkbox" name="" autocomplete="off"></td>
            <td>
            <input name="" type="text"  id="" class="in" autocomplete="off">
          </td>
            </tr>
           <tr>
              <td>Model</td>
              <td><input id="" type="checkbox" name="" autocomplete="off">
              </td>
             <td>
            <input name="" type="text"  id="" class="in"  autocomplete="off">
              </td>
              </tr>
               <tr class="hidecols">
              <td>Weight</td>
              <td>
              <input id="" type="checkbox" name="" autocomplete="off">
                </td>
                <td>
                <input name="" type="text"  id="" class="in"  autocomplete="off">
                </td>
                 </tr>
                <tr >
                <td>Unit </td>
                 <td>
                 <input id="" type="checkbox" name="" checked="checked" autocomplete="off">
                </td>
                  <td>
               <input name="" type="text"  id="" class="in"  autocomplete="off">
                    </td>
           </tr>
                 <tr>
               <td>Cartons</td>
                <td>
                <input id="" type="checkbox"name="" autocomplete="off">
                 </td>
              <td>
                                                                        
             </td>
               </tr>
                <tr>
                   <td>MRP</td>
                    <td>
                  <input id="" type="checkbox" name="" autocomplete="off">
                  </td>
                  <td>
                                                                        
                  </td>
               </tr>
        </tbody>
      </table>
           <br>
           <input type="submit" name="" value="Submit" id="" class="btn" style="background-color: #0d93e2; color: #fff; float: right; font-size: 11;"  autocomplete="off">
    </fieldset>
  </div>
  <!-- <div class="col-md-1"></div> -->
  <div class=" col-md-3" >
    <br>
       <fieldset id="in1" style=" background-color: #f2f2f2;   border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
       
    <div class="row">
    
      <table style="font-size: 12px; width: 95%;" class="autoWidth table-condensed table-striped table-bordered table-hover " cellspacing="0" rules="all" border="1"  style="border-collapse:collapse;">
      <thead>
        <tr style="background-color: #0d93e2; color: #ffffff;">
          <th scope="col">General Master Name</th><th scope="col">Is Selected</th><th scope="col">Order</th>
        </tr>
      </thead><tbody>
        <tr>
          <td>Brand_master</td><td>False</td><td>&nbsp;</td>
        </tr><tr>
          <td>Color_master</td><td>False</td><td>&nbsp;</td>
        </tr><tr>
          <td>Size_master</td><td>False</td><td>&nbsp;</td>
        </tr><tr>
          <td>Model_master</td><td>False</td><td>&nbsp;</td>
        </tr><tr>
          <td>CartonMaster</td><td>False</td><td>7</td>
        </tr>
      </tbody>
    </table>
    </div>
   
    </fieldset>
  </div>
</div>

  </div>
   <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
  </body>
  </html>