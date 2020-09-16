<?php include 'sidebar.php';?>
<?php 
include '../connection.php';
if (isset($_GET['id'])) 
{
  $id=$_GET['id'];
  $sql=mysqli_query($conn,"SELECT * FROM expenses_details WHERE id='$id'") or die(mysqli_error($conn));
  $row=mysqli_fetch_assoc($sql);

}
?>

<style type="text/css">
    
   
   /* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }



/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #e40101; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 95%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
article address.norm h4 {
  font-size: 125%;
  font-weight: bold;
}
article address.norm p {
margin:7px 0 -0.75em;
}
article address.norm { float: left; font-size: 95%; font-style: normal; font-weight: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th:first-child {
  width:50px;
}
table.inventory th:nth-child(2) {
  width:300px;
}
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

table.sign {
  float: left;
  width: 220px;
}
table.sign img {
  width: 100%;
}
table.sign tr td {
  border-color: transparent;
}
@media print {
  * { -webkit-print-color-adjust: exact; }
  html { background: none; padding: 0; }
  body { box-shadow: none; margin: 0; }
  span:empty { display: none; }
  .add, .cut { display: none; }
}

@page { margin: 0; }

</style>

<div class="page has-sidebar-left" style="background-color: #ffffff;">
  <div class="container-fluid animatedParent animateOnce my-3">

    <div class="animated fadeInUpShort" >
      <form method="POST" action="#" >
        <div class="row" id="printableArea" >
          <div class="col-md-1"></div>
            <div class="col-md-10" >
              <fieldset class="fes">
                <!--  <legend class="le">EXPENSES</legend>  -->
                 <div class="container" >
                  <div >
                   <div class="row" style="margin-top: 10px;">
                           <div class="col-md-4 ">
                             <img src="assets/img/logo.png">
                           </div>
                           <div class="col-md-8 ">
                             
                             <p style="font-size: 12px;">(jk clothing 9c vora compound,near pare cotton press factory, Parel East, Mumbai, Maharashtra 400012)</p>
                             <p style="margin:-17px 0 -0.75em; text-align: center;"><strong>Phone: </strong> 022-24700139</p>
                           </div>
                         </div>
                         <hr>
                            <article>
      <h1>Recipient</h1>
      <address class="norm">
        <h4><?php echo $row['party_name']; ?></h4>
        <p> <?php echo $row['address']; ?></p>
        <p> Phone: <?php echo $row['mobile']; ?></p>
      </address>
      
      <table class="meta">
        <tr>
          <th><span >Invoice #</span></th>
          <td><span ><?php echo $row['code'].''.$row['invoice_no']; ?></span></td>
        </tr>
        <tr>
          <th><span >Date</span></th>
          <td><span ><?php $date=$row['date']; $month=date('F',strtotime($date)); $year=date('Y',strtotime($date)); $dt=date('d',strtotime($date));   echo $dt.' '.$month.' '.$year;?></span></td>
        </tr>
        
      </table>
      <table class="inventory">
        <thead>
          <tr>
            <th><span >S. No</span></th>
            <th><span >Description</span></th>
            
            
            <th><span >Total Amount</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span >1.</span></td>
            <td><span ><?php echo $row['bill_name']; ?></span></td>
         
            
            <td><span data-prefix>₹</span><span><?php echo $row['amount']; ?></span></td>
          </tr>
        </tbody>
      </table>
     <table class="balance">
        <tr>
          <th><span >Total</span></th>
          <td><span data-prefix>₹</span><span><?php echo $row['amount']; ?></span></td>
        </tr>
      </table>

    </article>
             <table class="term" style="width: 50%; float:left;">
                <tr>
                  <th>Terms and Condition</th>
                </tr>
                <tr>
                  <td>1. Subject to our Mumabi Jurisdiction<br>
                      2. Our Responsibility Ceases as soon as leaves our Premises<br>
                      3. Goods once sold will not taken back<br>
                      4.Delivery Ex-Premises<br>
                
                  </td>
                </tr>
              </table>
              <table class="signatory" style="width: 50%; float:right; height: 119px;">
               <tr>
                  <td style="vertical-align: bottom; text-align: center; font-size:14px;">Authorised Signatory</td> 
                </table>
                 </div>
                 </div>
                </fieldset>
                  </div>
                  <div class="col-lg-1 col-md-1">
                      
                  </div>
                </div>
              </form>
            </div>
          </div>
           <center><button type="button" name="submit" class="btn btn-success" onclick="printDiv('printableArea')" ><i class="fa fa-print" aria-hidden="true"></i>Print Slip</button>
            <a href="all_expenses.php" class="btn btn-danger">Cancel</a>
           </center>
        </div>
<script src="assets/js/app.js"></script>
<?php include 'footer.php'?>
 <script type="text/javascript">
// function printDiv(divName) 
// {
//      var printContents = document.getElementById(divName).innerHTML;
//      var originalContents = document.body.innerHTML;

//      document.body.innerHTML = printContents;

//      window.print();

//      document.body.innerHTML = originalContents;
// }

function printDiv() 
{

  var divToPrint=document.getElementById('printableArea');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
    </script>


