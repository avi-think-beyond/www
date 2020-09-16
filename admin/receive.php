<html>
    <head>
        <title>
            received
        </title>
        <link rel="stylesheet" href="assets/css/app.css">
       <style>
           .b
           {
               border-bottom:dashed 1px #000;
           }
           span
           {
               color:#000;
           }
       </style>
   
    </head>
    <?php $total='600.00'; ?>
    <body onload="startTime(),NumToWord(<?php echo $total; ?>);" >
        <br>
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4" style="background-color:#fff;">
              <div class="col-md-12">   
                <div class="row">
                    <div class="col-md-12 b" >
                        <center>
                            <img src="assets/img/logo.png">
                            <h4>Retail Invoice</h4>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 b">
                        <div class="row">
                             <div class="col-md-3">
                                 <span>Memo # </span>
                             </div>
                             <div class="col-md-2">
                                <span>10/10</span>
                             </div>
                             <div class="col-md-2">
                              
                             </div>
                             <div class="col-md-2">
                               <span id="txt" >	</span>
                             </div>
                             <div class="col-md-3">
                                <span>
                                   <script>
        							  var currentDate = new Date(),
        							      day = currentDate.getDate(),
        							      month = currentDate.getMonth() + 1,
        							      year = currentDate.getFullYear();
        							  document.write(day + "/" + month + "/" + year)
							       </script>
							     </span>
                             </div>
                           
                        </div>
                        <div class="row">
                             <div class="col-md-3">
                               <span>User Name:</span>
                             </div>
                             <div class="col-md-9">
                                <span>Ritik</span>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 b">
                        <center>
                            <h6 style="color:#000;">Mr.Soham Banerjee(100001)</h6>
                        </center>
                    </div>
                </div>
               <div class="row">
                    <div class="col-md-12 b" >
                        <div class="row b" style="text-align:center;">
                             <div class="col-md-1">
                                 <span><b>Sr.</b></span>
                             </div>
                             <div class="col-md-3">
                                <span><b>Product</b></span>
                             </div>
                             <div class="col-md-1">
                               <span ><b>Qty</b></span>
                             </div>
                             <div class="col-md-2">
                                <span><b>Rate</b></span>
							    
                             </div>
                             <div class="col-md-1">
                                <span><b>Dis</b></span>
							    
                             </div>
                             <div class="col-md-4">
                                <span><b>Amount</b></span>
							    
                             </div>
                           
                        </div>
                        
                        <div class="row" style="text-align:center;">
                             <div class="col-md-1">
                                 <span>1</span>
                             </div>
                             <div class="col-md-3">
                                <span>John Player</span>
                             </div>
                             <div class="col-md-1">
                               <span >1</span>
                             </div>
                             <div class="col-md-2">
                                <span>300.00</span>
							    
                             </div>
                             <div class="col-md-1">
                                <span>00</span>
							    
                             </div>
                             <div class="col-md-4">
                                <span>300.00</span>
							    
                             </div>
                           
                        </div>
                        <div class="row" style="text-align:center;">
                             <div class="col-md-1">
                                 <span>2</span>
                             </div>
                             <div class="col-md-3">
                                <span>John Player</span>
                             </div>
                             <div class="col-md-1">
                               <span >1</span>
                             </div>
                             <div class="col-md-2">
                                <span>300.00</span>
							    
                             </div>
                             <div class="col-md-1">
                                <span>00</span>
							    
                             </div>
                             <div class="col-md-4">
                                <span>300.00</span>
							    
                             </div>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 b">
                        <div class="row">
                             <div class="col-md-2">
                                 <span><b>Total:</b></span>
                             </div>
                             <div class="col-md-3">
                                <span><?php echo $total; ?></span>
                             </div>
                             <div class="col-md-1">
                               <span><b>Qty:</b></span>
                             </div>
                             <div class="col-md-1">
                                <span>
                                  2
							     </span>
                             </div>
                             <div class="col-md-2">
                               <span><b>Amount:</b></span>
                             </div>
                             <div class="col-md-3">
                              <span> <?php echo $total; ?></span>
                             </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                             <span id="divDisplayWords"></span>
                            </div>
                        </div>
                         <div class="row">
                             <div class="col-md-3">
                                 <span><b>Tender:</b></span>
                             </div>
                             <div class="col-md-6">
                                
                             </div>
                             
                             <div class="col-md-3">
                              <span> <?php echo $total; ?></span>
                             </div>
                        </div>
                        <div class="row">
                             <div class="col-md-3">
                                 <span><b>Pay Mode:</b></span>
                             </div>
                             <div class="col-md-6">
                                <span>Cash</span>
                             </div>
                             
                             <div class="col-md-3">
                              <span> <?php echo $total; ?></span>
                             </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br>
            </div> 
            <div class="col-md-4">
                
            </div>
        </div>
         <script  type="text/javascript">
    	function onlyNumbers(evt) {
    var e = event || evt; // For trans-browser compatibility
    var charCode = e.which || e.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function NumToWord(inputNumber) {
    var str = new String(inputNumber)
    var splt = str.split("");
    var rev = splt.reverse();
    var once = ['Zero', ' One', ' Two', ' Three', ' Four', ' Five', ' Six', ' Seven', ' Eight', ' Nine'];
    var twos = ['Ten', ' Eleven', ' Twelve', ' Thirteen', ' Fourteen', ' Fifteen', ' Sixteen', ' Seventeen', ' Eighteen', ' Nineteen'];
    var tens = ['', 'Ten', ' Twenty', ' Thirty', ' Forty', ' Fifty', ' Sixty', ' Seventy', ' Eighty', ' Ninety'];

    numLength = rev.length;
    var word = new Array();
    var j = 0;

    for (i = 0; i < numLength; i++) {
        switch (i) {

            case 0:
                if ((rev[i] == 0) || (rev[i + 1] == 1)) {
                    word[j] = '';
                }
                else {
                    word[j] = '' + once[rev[i]];
                }
                word[j] = word[j];
                break;

            case 1:
                aboveTens();
                break;

            case 2:
                if (rev[i] == 0) {
                    word[j] = '';
                }
                else if ((rev[i - 1] == 0) || (rev[i - 2] == 0)) {
                    word[j] = once[rev[i]] + " Hundred ";
                }
                else {
                    word[j] = once[rev[i]] + " Hundred and";
                }
                break;

            case 3:
                if (rev[i] == 0 || rev[i + 1] == 1) {
                    word[j] = '';
                }
                else {
                    word[j] = once[rev[i]];
                }
                if ((rev[i + 1] != 0) || (rev[i] > 0)) {
                    word[j] = word[j] + " Thousand";
                }
                break;

                
            case 4:
                aboveTens();
                break;

            case 5:
                if ((rev[i] == 0) || (rev[i + 1] == 1)) {
                    word[j] = '';
                }
                else {
                    word[j] = once[rev[i]];
                }
                if (rev[i + 1] !== '0' || rev[i] > '0') {
                    word[j] = word[j] + " Lakh";
                }
                 
                break;

            case 6:
                aboveTens();
                break;

            case 7:
                if ((rev[i] == 0) || (rev[i + 1] == 1)) {
                    word[j] = '';
                }
                else {
                    word[j] = once[rev[i]];
                }
                if (rev[i + 1] !== '0' || rev[i] > '0') {
                    word[j] = word[j] + " Crore";
                }                
                break;

            case 8:
                aboveTens();
                break;

            default: break;
        }
        j++;
    }

    function aboveTens() {
        if (rev[i] == 0) { word[j] = ''; }
        else if (rev[i] == 1) { word[j] = twos[rev[i - 1]]; }
        else { word[j] = tens[rev[i]]; }
    }

    word.reverse();
    var finalOutput = '';
    for (i = 0; i < numLength; i++) {
        finalOutput = finalOutput + word[i];
    }
    document.getElementById('divDisplayWords').innerHTML ="(Ruppees "+finalOutput+" Only)";
}
    </script>

        
        <script>
            function startTime() {
              var today = new Date();
              var h = today.getHours();
              var m = today.getMinutes();
              var s = today.getSeconds();
              m = checkTime(m);
              s = checkTime(s);
              var suffix = "AM";
            	if (h >= 12) {
                suffix = "PM";
                h = h - 12;
            	}
            	if (h == 0) {
            	 h = 12;
            	}
              document.getElementById('txt').innerHTML =
              h + ":" + m + ":"+suffix;
              var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
              if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
              return i;
            }
       </script>
       
    </body>
</html>