<?php  	
/*
====================================================================================================
Application Name: 
====================================================================================================
		  Module: data_tranasfer
		Filename: data_transfer_live_to_local.php
		  Author: Ashish Vishwakarma
	Created Date: 31-Aug-2020
   Modified Date: 
	 Description: This program developed to create mirror image of server by copying records from one server and paste on the another server.
   File Included: connection.php
Functions Called:  
Data Coming From: 
Data Submited To: 		  
....................................................................................................
====================================================================================================
====================================================================================================
*/
	set_time_limit(0);
	// check internet connection is stable
	$connected = @fsockopen("www.google.com", 80);

	include_once('connection.php');
	
	
	$db_name			=	"500erpdb"; // live db
	$db_name2			=	"500erpdb"; // local db
	
	
	// live server detail
	$hostname			=	"182.50.132.82";
	$username			=	"erp500";
	$password			=	"H3DCsXJww2*Y";
	
	// local server details
	$hostname1			=	"localhost";
	$username1			=	"root";
	$password1			=	"";
	
	$dbh1 = mysqli_connect($hostname, $username, $password, $db_name); 
	$dbh2 = mysqli_connect($hostname1, $username1, $password1, $db_name2); 

	
	date_default_timezone_set('Asia/Kolkata');
	$CURRENT_DATE 	 	= 	date("Y-m-d");
	
	$CURRENT_MONTH 	 	= 	intval(date('m'));
	$CURRENT_YEAR 	 	= 	date('Y');
	
	$PREV_MONTH 	 	= 	intval(date("m",strtotime("-1 month"))); 
	$PREV_MONTH_YEAR 	= 	date("Y",strtotime("-1 month"));	
	
		
	$query				= 	"SELECT * FROM controller WHERE PROCESS_FLAG =  '1' AND ACTIVE = '1' AND DELFLAG = '1' LIMIT 1"; 			
	$sql				=	mysqli_query($dbh1,$query) or die("controller query fail");
	$check_cnt			=	mysqli_num_rows($sql);
	
	if($check_cnt == 0)
	{
		$UPDATEQUERY	=	"UPDATE controller SET PROCESS_FLAG = '1', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE DELFLAG = '1' AND ACTIVE = '1' ";
		
																		
		$UPDATESQL			=	mysqli_query($dbh1,$UPDATEQUERY) or die($cobj->QueryDie($UPDATEQUERY, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
		
	
		if($UPDATESQL)
		{
			// echo "<script>alert('Process Flags are updated successfully');</script>";
			// echo "<script>window.location.href='FTP_AddToArchiveDatabase.php'</script>";
			echo "All the Process Flags Updated Successfully";
		}
		die();
	}
	else
	{
		$i = 0;
		$PRIMARYARRAY = array();
		while($row = mysqli_fetch_assoc($sql))
		{
			$row = array_map('trim', $row);
			$i++;
			
			ini_set('max_execution_time', 300);
			$INDEXNO 				= $row['INDEXNO'];
			$PRIMARY_TABLE_NAME 	= $row['PRIMARY_TABLE_NAME'];
			$FIELD_NAME 			= $row['FIELD_NAME'];
			$CONDITION 				= $row['CONDITION'];
			$RECORDS_TO_PROCESS 	= $row['RECORDS_TO_PROCESS'];
			$REFERENCE_TABLE_NAME 	= $row['REFERENCE_TABLE_NAME'];
			$REFERENCE_KEY 			= $row['REFERENCE_KEY'];
			$ACTION_DATETIME 		= $row['ACTION_DATETIME'];
			$REF_TABLE_ARR			= '';
			
			if(!empty($REFERENCE_TABLE_NAME))
			{
				$REF_TABLE_ARR = explode('~', $REFERENCE_TABLE_NAME);
				$REF_TABLE_ARR = array_map('trim', $REF_TABLE_ARR);		
			}
			
			
					
			if(!empty($PRIMARY_TABLE_NAME) && !empty($RECORDS_TO_PROCESS))
			{
				// $CONDITION = $FIELD_NAME." ".$CONDITION." '".$FIELD_VALUE."' ";
				$CONDITION = " ORDER BY id ASC LIMIT ".$RECORDS_TO_PROCESS." ";

				$Last_ID = 0;
				$query 	= "SELECT LAST_ID FROM controller_insert WHERE DELFLAG=1 AND PC_ID=".$pc_id." AND TABLE_NAME='".$PRIMARY_TABLE_NAME."' ORDER BY sr_no DESC Limit 1";
				$sql	=	mysqli_query($dbh1, $query) or die("query fail".$PRIMARY_TABLE_NAME);

				while($row = mysqli_fetch_assoc($sql))
				{
					$Last_ID = $row['LAST_ID'];
				}	
				
				// $query = "SELECT * FROM ".$PRIMARY_TABLE_NAME." WHERE SYN2 = '1' ".$CONDITION.""; //check reference should not be empty
				$query = "SELECT * FROM ".$PRIMARY_TABLE_NAME." WHERE  id>".$Last_ID. $CONDITION.""; //check reference should not be empty
				
																		
		
				$sql	=	mysqli_query( $dbh1,$query) or die("query fail".$PRIMARY_TABLE_NAME);
				
		
				if(mysqli_num_rows($sql) >= 1)
				{
					ini_set('max_execution_time', 300);
					// $ARCHIVE_TABLE_NAME	= $PRIMARY_TABLE_NAME;
				
					while($row = mysqli_fetch_assoc($sql))
					{
						ini_set('max_execution_time', 300);
						$REFERENCE_KEY_VAL 	= 	$row[$REFERENCE_KEY];
						$ARCHIVE_COND 		= 	"AND ".$REFERENCE_KEY." = '".$REFERENCE_KEY_VAL."'";
						
						$PRIMARYARRAY[$PRIMARY_TABLE_NAME][$row['id']]		=	$row;
						
					}
						
				}
				
			}						
		}
		// echo "<pre>";print_r($PRIMARYARRAY);die;
		$PMCOUNT	=	0;		//Primary table multi-Insert Limit counter
		$final_id	=	0;		//Primary table multi-Insert Limit counter
			
		if(!empty($PRIMARYARRAY))
		{
			$MailPInsCnt	=	0;
			$MailPUpdCnt	=	0;
			$MailAUpdCnt	=	0;
			$REFUPD			=	array();
			$PASSUPD		=	array();
			$LOCAL 			=	array();
			$UIDSTRING	=	"('";		// To update SYN flag from 1 to 2 on ACTIVE server.
			$COMMA 		= 	'';
			
			$PASS = "INSERT INTO $PRIMARY_TABLE_NAME ";
			$QS			=	"(";	// Insert query string
			$VS			=	"(";	// Value query string
			$COMMA3		=	"";		// Comma for multiple insert 
			$COMMA4		=	"";		// Comma for update query 
			$R			=	0; 		// Counter to check whether UID insert/update
			$x			=	0;		// Counter for multi-Insert query's 1st column row 
			
			foreach($PRIMARYARRAY[$PRIMARY_TABLE_NAME] as $K => $V)
			{
				$PMCOUNT++;
				$SELECT 	= 	"SELECT * FROM `$PRIMARY_TABLE_NAME` WHERE id = '".$K."' Limit 1";
				
				$SQLSELECT	=	mysqli_query($dbh2,$SELECT) or die("local table select query fail");
				
																		
				// Set counters to check whether insert/update 
				$PMINS		=	0;	// Passive server master insertion counter
				$PMUPD		=	0;	// Passive server master Updation counter
				if(mysqli_num_rows($SQLSELECT) > 0)
				{
					while ($row = mysqli_fetch_assoc($SQLSELECT)) 
					{
						$r_id = $row['R_ID'];					
					
						
							// $MailPUpdCnt++;
							$R++;
							$PMUPD++;
							$PassiveUPD		=	"UPDATE `$PRIMARY_TABLE_NAME` SET ";
							foreach($V	as $S => $M)
							{
								$PassiveUPD		.=	$COMMA4."$S = '".$V[$S]."'";
								$COMMA4		=	", ";
							}
							$PassiveUPD		.=	" WHERE id = '".$K."'";
						if($r_id!=$V['R_ID'])
						{
							unset($row['id']);
							$new_R_ID 		= GetR_ID('77');
							$row['R_ID'] 	= $new_R_ID;
							$LOCAL[$PRIMARY_TABLE_NAME][$row['R_ID']]		=	$row;
						}
					}	
				}
				else
				{
					// INSERT INTO ARCHIVE SERVER 
					// Code to multi-insert query start here 
					// $MailPInsCnt++;
					$R++;
					$x++;
					$PMINS++;
					foreach($V	as $S => $M)
					{
						if($x==1)
						{
							$QS		.=	$COMMA3.$S;
						}
						// $VS		.=	$COMMA3."'".$V[$S]."'";
						$VS			.=	$COMMA3."'".$M."'";
						$COMMA3		=	", ";
					}
					// Code for multiple insert end here 
					
				}
				
				if($PMINS > 0)
				{
					$VS			.=	")";
					if($x==1)
					{
						$QS			.=	")";
						$Complete	=	$QS." VALUES ".$VS; 
					}
					else
					{
						$Complete	.=	$VS;
					}
					$COMMA3		=	", ";
					$VS			=	$COMMA3."(";
					$COMMA3		=	"";
					
					// To return UID string
					$UIDSTRING 	.=	$COMMA.$K;			// Query to SYN2 flag = 2 in Active Server  
					$COMMA		=	"', '";
					$MailAUpdCnt++; 					// Count for Update SYN2 flag in Active Server.
				}
				
				if($PMUPD > 0)
				{
					// $UPDPASSIVE		=	mysqli_query($PassiveUPD, $dbh2) or die("Line No ".__LINE__." Query Failed in $basename " . $PassiveUPD. "". mysql_errno($link) . ": " . mysql_error($link) ."");
					$PASSUPD[]		=	$PassiveUPD;	// Push update on passive server query into array
					$PassiveUPD		=	"";
					$COMMA4		=	"";
					
					// To return UID string
					$UIDSTRING 	.=	$COMMA.$K;			// Query to SYN2 flag = 2 in Active Server 
					$COMMA		=	"', '";
					$MailAUpdCnt++; 					// Count for Update SYN2 flag in Active Server. 
				}
				
				// Added new block on 13-May-2018 to set LIMIT of multi-insert PRIMARY table.
				if($x == 150) // For Testing
				{
					$PASS		.=	$Complete;		// Multi-Insert query into passive server
					$MULTIINSERT		=	mysqli_query($dbh2, $PASS) or die("Line No ".__LINE__." Query Failed ");
				
					$PASS = "INSERT INTO $PRIMARY_TABLE_NAME ";
					$QS			=	"(";	// Insert query string
					$VS			=	"(";	// Value query string
					$COMMA3		=	"";		// Comma for multiple insert 
					$x 			=	0;

				}
			$final_id = $K;	
				
			}
			if($x > 0)
			{
				$PASS		.=	$Complete;		// Multi-Insert query into passive server
				$MULTIINSERT		=	mysqli_query($dbh2, $PASS) or die("Line No ".__LINE__." Query Failed ");
				$REFMULTI_INS[]	=	$PASS;		// Pushing into array to check query correct or not
			}
			else
			{
				$PASS		=	"";
			}
			
			if(!empty($PASSUPD))
			{
				foreach ($PASSUPD as $k_update => $update_val) 
				{
					mysqli_query($dbh2, $update_val) or die("Line No ".__LINE__." Query Failed update recorde");
				}
			}

			if(!empty($LOCAL))
			{
				$UIDSTRING	=	"('";		// To update SYN flag from 1 to 2 on ACTIVE server.
				$COMMA 		= 	'';
				
				$PASS = "INSERT INTO $PRIMARY_TABLE_NAME ";
				$QS			=	"(";	// Insert query string
				$VS			=	"(";	// Value query string
				$COMMA3		=	"";		// Comma for multiple insert 
				$COMMA4		=	"";		// Comma for update query 
				$R			=	0; 		// Counter to check whether UID insert/update
				$x			=	0;		// Counter for multi-Insert query's 1st column row 
				
				foreach($LOCAL[$PRIMARY_TABLE_NAME] as $K => $V)
				{
					// INSERT INTO ARCHIVE SERVER 
					// Code to multi-insert query start here 
					// $MailPInsCnt++;
					
					$x++;
					$PMINS++;
					foreach($V	as $S => $M)
					{
						if($x==1)
						{
							$QS		.=	$COMMA3.$S;
						}
						// $VS		.=	$COMMA3."'".$V[$S]."'";
						$VS			.=	$COMMA3."'".$M."'";
						$COMMA3		=	", ";
					}
					// Code for multiple insert end here 
					if($PMINS > 0)
					{
						$VS			.=	")";
						if($x==1)
						{
							$QS			.=	")";
							$Complete	=	$QS." VALUES ".$VS; 
						}
						else
						{
							$Complete	.=	$VS;
						}
						$COMMA3		=	", ";
						$VS			=	$COMMA3."(";
						$COMMA3		=	"";					
						
					}
					// Added new block on 13-May-2018 to set LIMIT of multi-insert PRIMARY table.
					if($x == 150) // For Testing
					{
						$PASS		.=	$Complete;		// Multi-Insert query into passive server
						$MULTIINSERT		=	mysqli_query($dbh1, $PASS) or die("Line No ".__LINE__." Query Failed ");
						$MULTIINSERT		=	mysqli_query($dbh2, $PASS) or die("Line No ".__LINE__." Query Failed ");
					
						$PASS = "INSERT INTO $PRIMARY_TABLE_NAME ";
						$QS			=	"(";	// Insert query string
						$VS			=	"(";	// Value query string
						$COMMA3		=	"";		// Comma for multiple insert 
						$x 			=	0;
					}
					
				}
				if($x > 0)
				{
					$PASS				.=	$Complete;		
					// Multi-Insert query into passive server
					$MULTIINSERT		=	mysqli_query($dbh1, $PASS) or die("Line No ".__LINE__." Query Failed ");
					$MULTIINSERT		=	mysqli_query($dbh2, $PASS) or die("Line No ".__LINE__." Query Failed ");
					$REFMULTI_INS[]		=	$PASS;		// Pushing into array to check query correct or not
				}
			}
			
			
				
		}
		$query = "INSERT INTO `controller_insert`(`PC_ID`, `TABLE_NAME`, `LAST_ID`, `NO_RECORD`, `DATE_CREATED`, `DELFLAG`) VALUES ('".$pc_id."','".$PRIMARY_TABLE_NAME."','".$final_id."','".$PMCOUNT."',now(), '1')";
		$Updsql	=	mysqli_query($dbh1, $query) or die();
		$Updquery = "UPDATE controller SET PROCESS_FLAG = '2', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE INDEXNO = '".$INDEXNO."' ";
			
		$Updsql	=	mysqli_query($dbh1, $Updquery) or die();

		

			
	}
	
	
	function GetR_ID($LICENSEID, $RecLocationFlag='')
	{
										
		$MicroSec		=	gettimeofday();
		$micsec			=	$MicroSec['usec'];		// Microseconds
		$len_micsecs	=	strlen($micsec);		//Length Of Micro Seconds
		$leadingzerocnt	=	6-$len_micsecs;			//Subtracting Length Of Micro seconds from 6
		//echo "Micro Sec:	".$micsec."<br>";
		$leadingzero	=	NULL;
		for($i=1;$i<=$leadingzerocnt;$i++)
		{
			$leadingzero	.=	"0";
		}
		$micsec			=	$leadingzero.$micsec;
		$DateTimeStamp 	= 	gmdate("YmdHis").$micsec;
//		$DateTimeStamp 	= 	gmdate("Ymdhis").$MicroSec["usec"];
		
		$UID	=	$RecLocationFlag.$LICENSEID.$DateTimeStamp;
		return $UID;
		
	}

	
?>