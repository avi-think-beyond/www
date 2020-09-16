
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Inventory Management System</title>
    <link href="css/bootstrap.min1.css" rel="stylesheet" id="bootstrap-css">
    <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="css1/linearicons.css">
      <link rel="stylesheet" href="css1/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="css1/bootstrap.css"> -->
      <link rel="stylesheet" href="css1/magnific-popup.css">
      <link rel="stylesheet" href="css1/jquery-ui.css">        
      <link rel="stylesheet" href="css1/nice-select.css">              
      <link rel="stylesheet" href="css1/animate.min.css">
      <link rel="stylesheet" href="css1/owl.carousel.css">       
      <link rel="stylesheet" href="css1/main.css">
      <link rel="stylesheet" href="css/footer.css">

      <!-- <link rel="stylesheet" href="css/dashboard.css"> -->
      <!-- <link rel="stylesheet" href="css/layout.css"> -->
      <!-- <link rel="stylesheet" href="css/invertory.css"> -->

      <link rel="stylesheet" href="css/new.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<header id="header">
		    <!-- <div class="container main-menu"> -->
		    	<div class="row align-items-center justify-content-between d-flex" style="background-color: #60a3bc !important;">
		    		<div class="col-md-1">
			      <div id="logo">
			        <a href="index.php"><img src="images/logo2.png" alt="" title="" /></a>
			      </div>
			  </div>
			  <div class="col-md-11">
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-active"><a href="index.php">Dashboard</a></li>
			          <li class="menu-has-children"><a href="#">Purchase</a>
			          	<ul class="dropdown-menu">
                                <li><a href="invoice.php">Enter Purchase Invoice</a></li>
                                <li><a href="Packedoverhead.php">Item Selection -&gt; Purchase</a></li>
                                <li><a href="perchaseoverhead.php">Purchase Overhead</a></li>
                                <li><a href="DebitNote.php">Debit Note</a></li>
                                
                            </ul>
			          </li>
			          <li class="menu-has-children"><a href="#">Sale</a>
			          	<ul class="dropdown-menu">
                                <li><a href="sale_invoice.php">Generate Sale Invoice</a></li>
                                <li><a href="itemsales.php">Item Selection -&gt; Sale</a></li>
                                <li><a href="salesoverhead.php">Sales Overhead</a></li>
                                <li><a href="Credit Note .php">Credit Note</a></li>
                                
                            </ul>
			          </li>
			           <li class="menu-has-children"><a href="#">Barcode</a>
			          	<ul class="dropdown-menu">
                                <li><a href="Barcode_format.php">Generate Barcode (Format 1)</a></li>
                                <li><a href="Barcode_format2.php">Generate Barcode (Format 2)</a></li> 
                                
                            </ul>
			          </li>
			          <li class="menu-has-children"><a href="#">Supplier</a>
			          	<ul class="dropdown-menu">
                                <li><a href="new_Supplier.php">New Supplier</a></li>
                                <li><a href="Payment.php">Payment </a></li>
                                <li><a href="PA.php">Payment Adjustment</a></li>
                                <li><a href="payment_list.php">Payment List </a></li>
                                <li><a href="supplier_balance_report.php">PaymentSupplier Balance Report </a></li> 
                                
                            </ul>
			          </li>
			          <li class="menu-has-children"><a href="#">Customer</a>
			          	<ul class="dropdown-menu">
                                <li><a href="new_customer.php">New Customer</a></li>
                                <li><a href="price_structure.php">Price Structure Customer Wise </a></li>
                                <li><a href="receipt.php">Receipt</a></li>
                                <li><a href="Receipt_adjustment.php">Receipt Adjustment </a></li>
                                <li><a href="receipt_list.php">Receipt List </a></li>
                                <li><a href="customer_balance_report.php">Customer Balance Report </a></li> 
                                
                            </ul>
			          </li>
			          <li class="menu-has-children"><a href="#">Accounting</a>
			          	<ul class="dropdown-menu">
                                <li><a href="create_ledger.php" >Create Ledger A/c</a></li>
                <li><a href="modify_ledger.php">Modify Ledger A/c</a></li>
                <li><a href="merge_ledger.php"> Merge Ledger A/c </a></li>
                <li><a href="journal_entries.php">Journal Entries</a></li>
                <li><a href="bank_name_master.php">Bank Reconciliation</a></li>
                <li><a href="modify_bank_reconciliation.php" >Modify Bank Reconciliation</a></li> 
                                
                            </ul>
			          </li>
			          <li class="menu-has-children"><a href="#">Admin</a>
			          	<ul class="dropdown-menu">
                                <li> <a href="CREATE USER FORM.php">Create New User</a> </li>
                <li> <a href="USER ACCESS FORM .php">User Permission</a> </li>
                <li> <a href="SECURITYF.php">User Autorization</a> </li>
                <li> <a href="USER LIST.php">User List</a></li>
                <li> <a href="CHANGE PASSWORD.php">Change Password</a> </li>
                <li> <a href="Company Profile.php">Company Profile</a> </li> 
                                
                            </ul>
			          </li>
			          
			          <li class="menu-has-children"><a href="">Master</a>
			            <ul>
		            	  <!-- <li><a href="elements.html">Elements</a></li> -->
				          <li class="menu-has-children"><a href="">General Setting </a>
				            <ul>
				              <li><a href="#">Size Master</a></li>
                                        <li><a href="Brand_master.php">Brand Master</a></li>
                                        <li><a href="Model_master.php">Model Master</a></li>
                                        <li><a href="Color_master.php">Color Master</a></li>
                                        <li><a href="Unit_master.php">Unit Master</a></li>  
				            </ul>
				            <li><a href="Masters Selection.php">Selection Master</a></li>
                                <li><a href="HSN Master.php">HSN Master</a></li>
                                <li><a href="Cess Master.php">Cess Master</a></li>
                                <li><a href="document_no.php">Document No.</a></li>
                                <li><a href="bank_name_master.php">BankName Master</a></li>
                                <li><a href="consignee_master.php">Consignee Master</a></li>
                                <li><a href="item_creation.php">Item Creation</a></li>
				          </li>					                		
			            </ul>
			          </li>	
			          <li class="menu-has-children"><a href="">Reports</a>
			            <ul>
		            	  <!-- <li><a href="elements.html">Elements</a></li> -->
				          <li class="menu-has-children"><a href="">General Reports </a>
				            <ul>
				              <!-- <li><a href="#">Size Master</a></li> -->
                                        <li><a href="item_report.php">Item Report</a></li>
                                        <li><a href="purchase_invoice_report.php">Purchase Invoice Report</a></li>
                                        <li><a href="purchase_item_report.php">Purchase Item Report</a></li>
                                        <li><a href="sale_invoice_report.php">Sale Invoice Report</a></li>
                                        <li><a href="sale_item_report.php">Sale Item Report</a></li>
                                        <li><a href="credit_invoice_report.php">Credit Invoice Report</a></li>
                                        <li><a href="credit_item_report.php">Credit Item Report</a></li>
                                        <li><a href="debit_invoice_report.php">Debit Invoice Report</a></li>
                                        <li><a href="debit_item_report.php">Debit Item Report</a></li>
                                        <li><a href="barcode_report.php">Barcode Report</a></li>
                                        <li><a href="purchase_invoice_report.php">Purchase Item Mapping</a></li>
                                        <li><a href="standard_item_mapped_report.php">Standard Item Mapped Report</a></li>
                                        <li><a href="standard_mapping_report.php">Standard Mapping Report</a></li> 
				            </ul>
				            
				          </li>
				          <li class="menu-has-children"><a href="">Stock Reports </a>
				            <ul>
                                        <li><a href="Stock_ledger_report.php">Stock Ledger Report</a></li>
                                        <li><a href="inventory_report_basic.php">Inventory Report Basic</a></li> 
				            </ul>
				            
				          </li>
				          <li class="menu-has-children"><a href="">Accounting Reports </a>
				            <ul>
                                        <li><a href="alter_entries.php">Alter Entries</a></li>
                                        <li><a href="trial_balance.php">Trial Balance</a></li>
                                        <li><a href="balance_sheet.php">Balance Sheet</a></li>
                                        <li><a href="profit_and_loss.php">Profit and Loss</a></li>
                                        <li><a href="ledger_print.php">Ledger Print</a></li>
                                        <li><a href="ledger_view.php">Ledger View</a></li> 
				            </ul>
				            
				          </li>
				          <li class="menu-has-children"><a href="">GST Reports </a>
				            <ul>
                                        <li><a href="GSTR1 Report.php">GSTR 1</a></li>
                                <li><a href="GSTR2 Report.php">GSTR 2</a></li>
                                <li><a href="GST Rate Wise Sale Report.php">GST Rate Wise Sale Report</a></li>
                                <li><a href="GST Rate Wise Purchase Report.php">GST Rate Wise Purchase Report</a></li> 
				            </ul>
				            
				          </li>													          					                		
			            </ul>
			          </li>	
			          <li class="menu-has-children"><a href="#">Upload</a>
			          	<ul class="dropdown-menu">
                                <li><a href="Excel Upload.php">Excel Upload</a></li>
                                <li><a href="UPLOAD EXCEL .php">Excel upload(Ledger A/c)</a></li>
                                <li><a href="Upload Excel (Bank Details).php">BankStatement Upload</a></li> 
                                
                            </ul>
			          </li>


			          <li><a class="top_link1 navbtn" href="index.php" id="home"><center>Home</center></a></li>
			          <li><a class="top_link1 navbtn" href="#" id="logout"><center>Log Out</center></a></li>			 				          					          		          
			          <!-- <li><a href="contact.html">Contact</a></li> -->
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		    <!-- </div> -->
		  </header><!-- #header -->