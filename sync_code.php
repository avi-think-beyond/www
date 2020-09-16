<?php  	

	
	// $db_name			=	"jdb_isales";
	$db_name				=	"1st";
	$db_name2			=	"2nd";
	
	
	
	$hostname			=	;
	$username			=	;
	$password			=	;
	
	$hostname1			=	;
	$username1			=	;
	$password1			=	;
	
	$dbh1 = mysql_connect($hostname, $username, $password); 
	$dbh2 = mysql_connect($hostname1, $username1, $password1, true); 

	mysql_select_db($db_name, $dbh1) or die($cobj->QueryDie($db_name, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
	mysql_select_db($db_name2, $dbh2) or die($cobj->QueryDie($db_name2, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
	
	date_default_timezone_set('Asia/Kolkata');
	$CURRENT_DATE 	 	= 	date("Y-m-d");
	
	$CURRENT_MONTH 	 	= 	intval(date('m'));
	$CURRENT_YEAR 	 	= 	date('Y');
	
	$PREV_MONTH 	 	= 	intval(date("m",strtotime("-1 month"))); 
	$PREV_MONTH_YEAR 	= 	date("Y",strtotime("-1 month"));	
	
	/* 
	// =================== Code To remove duplicates start here =======================================//
	$proLog 				= 	new programlog("AddToArchiveDBCheckUnique.php"); 
	// $query				= 	"SELECT table_name FROM information_schema.tables WHERE table_schema =  '".$db_name."' AND Table_Type != 'VIEW'"; 
	// $query				= 	"SHOW FULL TABLES WHERE Table_Type !=  'VIEW'"; 
	$query				= 	"show full tables where Table_Type = 'BASE TABLE'"; 
	$CHECK_STRING 		=	"Tables_in_".$db_name;
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			query	 			=	$query";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 							
	$sql				=	mysql_query($query, $dbh1) or die($cobj->QueryDie($query, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION	 			=	$sql";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
	$check_cnt			=	mysql_num_rows($sql); 
	if($check_cnt)
	{
		while($row 		= 	mysql_fetch_assoc($sql)) 
		{
			$row 		= 	array_map('trim', $row);
			$row 		= 	array_map('mysql_escape_string', $row);
			$Tables[] 	=	$row[$CHECK_STRING]; 
			$Check_Table=	"SELECT TABLE_NAME from db_tables WHERE TABLE_NAME = '".$row[$CHECK_STRING]."' AND DELFLAG = '1' ";
			
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			query	 			=	$Check_Table";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 		
			$sqlTable	=	mysql_query($Check_Table, $dbh1) or die($cobj->QueryDie($Check_Table, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION	 			=	$sqlTable";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
			
			$check_tbl	=	mysql_num_rows($sqlTable); 
			if($check_tbl == 0)
			{
				$TABLE_ID	=	$cobj->GetUID(77);
				$TABLE_NAME	=	$row[$CHECK_STRING];
				$UID		=	$cobj->GetUID(77);
				$Ins_Table=	"INSERT INTO db_tables (LID, TABLE_ID, TABLE_NAME, DATE_CREATED, DATE_MODIFIED, DELFLAG, SYN1, SYN2, UID) VALUES ('77', '$TABLE_ID', '$TABLE_NAME', '$CURRENT_DATE', '0000-00-00', '1', '1', '1', '$UID') ";
			
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			query	 			=	$Ins_Table";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 		
				$sqlInsTable	=	mysql_query($Ins_Table, $dbh1) or die($cobj->QueryDie($Ins_Table, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION	 			=	$sqlInsTable";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
			}
		}	
	}	
	// echo "<pre>"; print_r($Tables); die;
	$cnt = 0;
	$cnt1 = 0;
	$cnt2 = 0;
	$cnt3 = 0;
	$cnt4 = 0;
	$size = count($Tables);
	
	foreach($Tables as $key )
	{
		$cnt1++;
		
		
		if($key == "sessions")
		{
			
		}
		else
		{
			
			$query2 = "SELECT LID, UID, COUNT( * ) AS COUNTING FROM `$key` GROUP BY UID HAVING COUNT( * ) > 1";
			
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			$key	 			=	$query2";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 							
			$sql2				=	mysql_query($query2, $dbh1) or die($cobj->QueryDie($query2, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION	 			=	$sql2";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
			$check_cnt			=	mysql_num_rows($sql2); 
			if($check_cnt > 0)
			{
				$cnt++;
				while($row				=	mysql_fetch_assoc($sql2))
				{
					$LID				=	$row["LID"];
					$UID				=	$row["UID"]; 
					$COUNTING			=	$row["COUNTING"];
					if(empty($LID))
					{
						$LID 			=	77;
					}
					// $NEWUID				=	$cobj -> GetUID($LID);
					$NAMES[$key][$UID] 	= 	$COUNTING;
					$NAMES_ARR[] 		= 	$key;
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			LID	 				=	$LID
																			UID	 				=	$UID
																			Repeat Count	 	=	$COUNTING
																			";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
					while($COUNTING 	>= 	1)
					{
						$UPDCNT++;
						$NEWUID			=	$cobj -> GetUID($LID);
						$UPD 			=	"UPDATE $key SET UID = '$NEWUID', DATE_MODIFIED = '$CURRENT_DATE' WHERE  UID	= '$UID' LIMIT 	1; ";
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			$key	 			=	$UPD
																			";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
						$UPDSQL 		=	mysql_query($UPD, $dbh1) or die($cobj->QueryDie($UPD, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION	 			=	$UPDSQL
																			";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
						if($UPDSQL) 
						{
							$cnt3++;
						}
						$COUNTING--;
					}
				}
				$q_temp = "ALTER TABLE `$key` CHANGE `UID` `UID` VARCHAR( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ";
				$sqlTable	=	mysql_query($q_temp, $dbh1) or die($cobj->QueryDie($q_temp, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
				
				$ApplyUnique 			=	"ALTER TABLE  `$key` ADD UNIQUE (`UID`)";
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			$key	 			=	$ApplyUnique
																			";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 							
				$SQLUNIQUE				=	mysql_query($ApplyUnique, $dbh1) or die("Query failed at line no : ".__LINE__. "<br /> Query : ".$ApplyUnique);
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION	 			=	$SQLUNIQUE
																			";
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
				if($SQLUNIQUE) 
				{
					$cnt4++;
				} 
			}
			else
			{
				$cnt2++;
			}
			
		}
		
	}
	
	// =================== Code To remove duplicates end here =======================================//
	 */
	
	// echo "<pre>"; print_r($Tables); die;
	
	$query				= 	"SELECT * FROM archive_controller_master WHERE PROCESS_FLAG =  '1' AND ACTIVE = '1' AND DELFLAG = '1' LIMIT 1"; 
	
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			archive_controller_master	=	$query
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 							
	$sql				=	mysql_query($query, $dbh1) or die($cobj->QueryDie($query, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION	 		=	$sql
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
	$check_cnt			=	mysql_num_rows($sql);
	
	if($check_cnt == 0)
	{
		$UPDATEQUERY	=	"UPDATE archive_controller_master SET PROCESS_FLAG = '1', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE DELFLAG = '1' AND ACTIVE = '1' ";
		
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			archive_controller_master	=	$UPDATEQUERY
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
																		
		$UPDATESQL			=	mysql_query($UPDATEQUERY, $dbh1) or die($cobj->QueryDie($UPDATEQUERY, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
		
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION	 			=	$UPDATESQL
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
	
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
		while($row = mysql_fetch_assoc($sql))
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
			
			// $REPORT_ARR[$PRIMARY_TABLE_NAME]['ACTION_DATE']						= $CURRENT_DATE;
			// $REPORT_ARR[$PRIMARY_TABLE_NAME]['ACTION_DATETIME_FROM']			= $ACTION_DATETIME;
			// $REPORT_ARR[$PRIMARY_TABLE_NAME]['FIELD_NAME'] 						= $FIELD_NAME;
			// $REPORT_ARR[$PRIMARY_TABLE_NAME]['REFERENCE_FIELD'] 				= $REFERENCE_KEY;
			// $REPORT_ARR[$PRIMARY_TABLE_NAME]['CONDITION'] 						= $CONDITION;
			// $REPORT_ARR[$PRIMARY_TABLE_NAME]['PARENT_TABLE'] 					= $PRIMARY_TABLE_NAME;
			// $REPORT_ARR[$PRIMARY_TABLE_NAME]['TABLE_NAME'] 						= $PRIMARY_TABLE_NAME;
			// $REPORT_ARR[$PRIMARY_TABLE_NAME]['RECORDS_TO_PROCESS'] 				= $RECORDS_TO_PROCESS;
			// $REPORT_ARR[$PRIMARY_TABLE_NAME]['PROCESSED_COUNT'] 				+= 1;
					
			if(!empty($PRIMARY_TABLE_NAME) && !empty($RECORDS_TO_PROCESS))
			{
				// $CONDITION = $FIELD_NAME." ".$CONDITION." '".$FIELD_VALUE."' ";
				$CONDITION = "LIMIT ".$RECORDS_TO_PROCESS." ";
				
				// $query = "SELECT * FROM ".$PRIMARY_TABLE_NAME." WHERE SYN2 = '1' ".$CONDITION.""; //check reference should not be empty
				$query = "SELECT * FROM ".$PRIMARY_TABLE_NAME." WHERE SYN2 = '1' ".$CONDITION.""; //check reference should not be empty
				
																		// LOG ----------------------------------------
																			$LogData				=	" 
																			$PRIMARY_TABLE_NAME		=	$query
																			";
																			$proLog 				= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
		
				$sql	=	mysql_query($query, $dbh1) or die($cobj->QueryDie($query, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
				
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION			=	$sql
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
		
				if(mysql_num_rows($sql) >= 1)
				{
					ini_set('max_execution_time', 300);
					// $ARCHIVE_TABLE_NAME	= $PRIMARY_TABLE_NAME;
				
					while($row = mysql_fetch_assoc($sql))
					{
						ini_set('max_execution_time', 300);
						$REFERENCE_KEY_VAL 	= 	$row[$REFERENCE_KEY];
						$ARCHIVE_COND 		= 	"AND ".$REFERENCE_KEY." = '".$REFERENCE_KEY_VAL."'";
						
						$PRIMARYARRAY[$PRIMARY_TABLE_NAME][$row['UID']]		=	$row;
						if(!empty($REF_TABLE_ARR))
						{
							foreach($REF_TABLE_ARR as $TABLENAME)
							{
								// $query11 	= 	"SELECT * FROM ".$TABLENAME." WHERE SYN2 = '1' ".$ARCHIVE_COND."";
								$query11 	= 	"SELECT * FROM ".$TABLENAME." WHERE SYN2 = '1' ".$ARCHIVE_COND."";
																		// LOG ----------------------------------------
																			$LogData				=	" 
																			$TABLENAME				=	$query11
																			";
																			$proLog 				= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
		
								$sql11		=	mysql_query($query11, $dbh1) or die($cobj->QueryDie($query11, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
								
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION			=	$sql11
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
		
								if(mysql_num_rows($sql11) >= 1)
								{
									while($row11 = mysql_fetch_assoc($sql11))
									{
										$REFARRAY[$TABLENAME][$row11['UID']]	=	$row11;
									}
								}
							}
						}
					}
						
				}
				else
				{
					
				}
			}						
		}
		
		$MailPInsCnt	=	0;
		$MailPUpdCnt	=	0;
		$MailAUpdCnt	=	0;
		$REFUPD			=	array();
		$UIDSTRING	=	"('";		// To update SYN flag from 1 to 2 on ACTIVE server.
		$COMMA 		= 	'';
		
		$PASS = "INSERT INTO $PRIMARY_TABLE_NAME ";
		$QS			=	"(";	// Insert query string
		$VS			=	"(";	// Value query string
		$COMMA3		=	"";		// Comma for multiple insert 
		$COMMA4		=	"";		// Comma for update query 
		$R			=	0; 		// Counter to check whether UID insert/update
		$x			=	0;		// Counter for multi-Insert query's 1st column row 
		$PMCOUNT	=	0;		//Primary table multi-Insert Limit counter
		
		foreach($PRIMARYARRAY[$PRIMARY_TABLE_NAME] as $K => $V)
		{
			$PMCOUNT++;
			$SELECT 	= 	"SELECT UID FROM `$PRIMARY_TABLE_NAME` WHERE UID = '".$K."' ";
			
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			$PRIMARY_TABLE_NAME	=	$SELECT
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
			
			$SQLSELECT	=	mysql_query($SELECT, $dbh2) or die($cobj->QueryDie($SELECT, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
			
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION	 			=	$SQLSELECT
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
	
			// Set counters to check whether insert/update 
			$PMINS		=	0;	// Passive server master insertion counter
			$PMUPD		=	0;	// Passive server master Updation counter
			if(mysql_num_rows($SQLSELECT) >= 1)
			{
				// UPDATE RECORD ON ARCHIVE SERVER BASED ON UID 
				// Code start to generate Update query on Passive server based on UID
				$MailPUpdCnt++;
				$R++;
				$PMUPD++;
				$PassiveUPD		=	"UPDATE `$PRIMARY_TABLE_NAME` SET ";
				foreach($V	as $S => $M)
				{
					$PassiveUPD		.=	$COMMA4."$S = '".$V[$S]."'";
					$COMMA4		=	", ";
				}
				$PassiveUPD		.=	" WHERE UID = '".$K."'";
				// Code end to generate Update query on Passive server based on UID
				
				
				
			}
			else
			{
				// INSERT INTO ARCHIVE SERVER 
				// Code to multi-insert query start here 
				$MailPInsCnt++;
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
				// $UPDPASSIVE		=	mysql_query($PassiveUPD, $dbh2) or die("Line No ".__LINE__." Query Failed in $basename " . $PassiveUPD. "". mysql_errno($link) . ": " . mysql_error($link) ."");
				$PASSUPD[]		=	$PassiveUPD;	// Push update on passive server query into array
				$PassiveUPD		=	"";
				$COMMA4		=	"";
				
				// To return UID string
				$UIDSTRING 	.=	$COMMA.$K;			// Query to SYN2 flag = 2 in Active Server 
				$COMMA		=	"', '";
				$MailAUpdCnt++; 					// Count for Update SYN2 flag in Active Server. 
			}
			
			// Added new block on 13-May-2018 to set LIMIT of multi-insert PRIMARY table.
			if($PMCOUNT == 150) // For Testing
			{
				$PASS = "INSERT INTO $PRIMARY_TABLE_NAME ";
				$QS			=	"(";	// Insert query string
				$VS			=	"(";	// Value query string
				$COMMA3		=	"";		// Comma for multiple insert 
				$x 			=	0;
			}
			
		}
		if($x > 0)
		{
			$PASS		.=	$Complete;		// Multi-Insert query into passive server
			// $MULTIINSERT		=	mysql_query($PASS, $dbh2) or die("Line No ".__LINE__." Query Failed in $basename " . $PASS. "". mysql_errno($link) . ": " . mysql_error($link) ."");
			$REFMULTI_INS[]	=	$PASS;		// Pushing into array to check query correct or not
		}
		else
		{
			$PASS		=	"";
		}
		
		if($R > 0)
		{
			$UIDSTRING		.=	"')";
			// We'll uncomment later the bellow code
			$ACTIVEQUERY 	=	"UPDATE `$PRIMARY_TABLE_NAME` SET SYN2 = '77', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE UID IN $UIDSTRING ";
			$UPDACTIVE		=	mysql_query($ACTIVEQUERY, $dbh1) or die($cobj->QueryDie($ACTIVEQUERY, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
			if($UPDACTIVE)
			{
				$ACTIVEQUERY 	=	"UPDATE `$PRIMARY_TABLE_NAME` SET SYN2 = '2', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE SYN2 = '77' AND UID IN $UIDSTRING ";
				$REFUPD[]		=	$ACTIVEQUERY;
			}
			// $ACTIVEQUERY 	=	"UPDATE `$PRIMARY_TABLE_NAME` SET SYN2 = '2', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE UID IN $UIDSTRING ";
			// $REFUPD[]		=	$ACTIVEQUERY;
		}
		// echo $PASS."<br>";			// To check multi-insert query 
		// echo "<pre>"; print_r($PASSUPD); 
		// echo "<pre>"; print_r($REFUPD); die;
		
		$UIDSTR			=	"";
		$j 				=	0; 
		$COMMA2 		= 	'';
		$QCNT			=	0;
		// $PASSUPD	=	array();
		foreach($REF_TABLE_ARR as $TABLENAME)
		{
			$j++;
			$a = 0;
			$d = 0;
			$UIDSTR.$j	=	"('";
			$COMMA2 		= 	'';
			$PASS2 = "INSERT INTO $TABLENAME ";
			$QS			=	"(";	// Insert query string
			$VS			=	"(";	// Value query string
			$COMMA3		=	"";		// Comma for multiple insert 
			$COMMA4		=	"";		// Comma for update query 
			$Complete	=	"";		// String to complete insert string
			$PassiveUPD	=	"";		// Update query string 
			
			$x			=	0;		// Multi-Insert counter
			foreach($REFARRAY[$TABLENAME] as $K2 => $V2)
			{
				
				$a++;
				$d++;
				$PRINS		=	0;	// Passive server reference insertion counter
				$PRUPD		=	0;	// Passive server reference Updation counter
				$UIDCNT		=	0;	// Counter to return UID string
				
				$SELECT 	= 	"SELECT UID FROM `$TABLENAME` WHERE UID = '".$K2."' ";
				
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			$TABLENAME			=	$SELECT
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
			
				$SQLSELECT	=	mysql_query($SELECT, $dbh2) or die($cobj->QueryDie($SELECT, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
				
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION	 		=	$SQLSELECT
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
	
				if(mysql_num_rows($SQLSELECT) >= 1)
				{
					// UPDATE RECORD ON ARCHIVE SERVER BASED ON UID 
					$MailPUpdCnt++;
					$UIDCNT++;
					$PRUPD++;
					$PassiveUPD		=	"UPDATE `$TABLENAME` SET ";
					foreach($V2	as $S2 => $M2)  
					{
						$PassiveUPD		.=	$COMMA4."$S2 = '".$V2[$S2]."'";
						$COMMA4		=	", ";
					}
					$PassiveUPD		.=	" WHERE UID = '".$K2."'";
					
				}
				else
				{
					// INSERT INTO ARCHIVE SERVER 
					// INSERT INTO ARCHIVE SERVER 
					$MailPInsCnt++;
					$UIDCNT++;
					$x++;
					$PRINS++;
					foreach($V2	as $S2 => $M2)
					{
						if($x==1)
						{
							$QS		.=	$COMMA3.$S2;
						}
						// $VS		.=	$COMMA3."'".$V2[$S2]."'";
						$VS			.=	$COMMA3."'".$M2."'";
						$COMMA3		=	", ";
					}
				}
				
				if($PRINS > 0)
				{
					$VS			.=	")";
					if($x==1)
					{
						$QS			.=	")";
						$Complete	=	$QS." VALUES ".$VS;
						// echo "We are first time"."<br>";
					}
					else
					{
						$Complete	.=	$VS;
					}
					
					$COMMA3		=	", ";
					$VS			=	$COMMA3."(";
					$COMMA3		=	"";
					
					$UIDSTR.$j 	.=	$COMMA2.$K2;
					$COMMA2		=	"', '";
					$MailAUpdCnt++; 					// Count for Update SYN2 flag in Active Server.
				}
				
				if($PRUPD > 0)
				{
					// $UPDPASSIVE		=	mysql_query($PassiveUPD, $dbh2) or die("Line No ".__LINE__." Query Failed in $basename " . $PassiveUPD. "". mysql_errno($link) . ": " . mysql_error($link) ."");
					$PASSUPD[]		=	$PassiveUPD;	// Push update on passive server query into array
					$PassiveUPD		=	"";
					$COMMA4			=	"";
					
					$UIDSTR.$j 	.=	$COMMA2.$K2;
					$COMMA2		=	"', '";
					$MailAUpdCnt++; 					// Count for Update SYN2 flag in Active Server.
				}
				
				if($a == 150)				// To set limit of IN clause in Update of Active servers SYN2 flag from 1 to 2
				{
					$UIDSTR.$j		.=	"')";
					$INSTRING	=	$UIDSTR.$j;
					$QIN2 		=	"UPDATE `$TABLENAME` SET SYN2 = '77', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE UID IN $INSTRING ";
					$UPDACTIVE		=	mysql_query($QIN2, $dbh1) or die($cobj->QueryDie($QIN2, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
					if($UPDACTIVE)
					{
						$QIN 		=	"UPDATE `$TABLENAME` SET SYN2 = '2', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE SYN2 = '77' AND UID IN $INSTRING ";
						$REFUPD[]	=	$QIN;
					}
					// $QIN 		=	"UPDATE `$TABLENAME` SET SYN2 = '2', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE UID IN $INSTRING ";
					// $REFUPD[]	=	$QIN;
					$QCNT++;
					$a 			=	0;
					
					$UIDSTR.$j	=	"('";
					$COMMA2 		= 	'';
				} 
				
				if($x > 0)
				{
					$PASS2		.=	$Complete;		// Multi-Insert query 
					$Complete	=	"";
				}
				if($x == 150)			// To set limit of multiple insert query 
				{
					// $MULTIINSERT		=	mysql_query($PASS2, $dbh2) or die("Line No ".__LINE__." Query Failed in $basename " . $PASS2. "". mysql_errno($link) . ": " . mysql_error($link) ."");
					$REFMULTI_INS[]	=	$PASS2;
					$PASS2 = "INSERT INTO $TABLENAME ";
					$x	=	0;
					$QS			=	"(";	// Insert query string
					$VS			=	"(";	// Value query string
					$COMMA3		=	"";		// Comma for multiple insert 
				}
				
			}	// End of Data inside each Ref. Table
			// if(($PRINS > 0) && ($d > 0))
			if(($PRINS > 0) && ($x > 0))	// 	if one of the occurance in insert block then only push into insert array
			{
				$REFMULTI_INS[]	=	$PASS2;
			}
			if($UIDCNT > 0)
			{
				$UIDSTR.$j		.=	"')";
			}
			
			if(($a > 0) && ($UIDCNT > 0))
			{
				$INSTRING	=	$UIDSTR.$j;
				$QIN2 		=	"UPDATE `$TABLENAME` SET SYN2 = '77', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE UID IN $INSTRING ";
				$UPDACTIVE		=	mysql_query($QIN2, $dbh1) or die($cobj->QueryDie($QIN2, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
				if($UPDACTIVE)
				{
					$QIN 		=	"UPDATE `$TABLENAME` SET SYN2 = '2', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE SYN2 = '77' AND UID IN $INSTRING ";
					$REFUPD[]	=	$QIN;
				}
				// $QIN 		=	"UPDATE `$TABLENAME` SET SYN2 = '2', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE UID IN $INSTRING ";
				// $REFUPD[]		=	$QIN;
				$QCNT++;
			}
		}	// End of Ref. Table array 
		
		$Updquery = "UPDATE archive_controller_master SET PROCESS_FLAG = '2', DATE_MODIFIED = '".$CURRENT_DATE."' WHERE INDEXNO = '".$INDEXNO."' ";
		
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			archive_controller_master	=	$Updquery
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
			
		$Updsql	=	mysql_query($Updquery, $dbh1) or die($cobj->QueryDie($Updquery, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
		
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			EXECUTION			=	$Updsql
																			";
																			$proLog 			= 	new programlog("AddToArchiveDB.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
			
	}
	
	// echo "<pre>"; print_r($PASSUPD); 
	// echo "<pre>"; print_r($REFMULTI_INS);
	// echo "<pre>"; print_r($REFUPD);  
	
	$PASSINSCNT		=	0;
	$PASSUPDCNT		=	0;
	$ACTUPDCNT		=	0;
	if(!empty($REFMULTI_INS))
	{
		foreach($REFMULTI_INS	as $MULTIINSQUERY)
		{
			
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			QUERY				=	$MULTIINSQUERY
																			";
																			$proLog 			= 	new programlog("AddToArchiveDBQueries.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
			
			$PASSIVEINSSQL 	= 	mysql_query($MULTIINSQUERY, $dbh2) or die($cobj->QueryDie($MULTIINSQUERY, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
			$NROWSPINS		=	mysql_affected_rows();
			$PASSINSCNT		+=	$NROWSPINS;
		}
	}
	if(!empty($PASSUPD))
	{
		foreach($PASSUPD	as $MULTIUPDQUERY)
		{
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			QUERY				=	$MULTIUPDQUERY
																			";
																			$proLog 			= 	new programlog("AddToArchiveDBQueries.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
			
			$PASSIVEUPDSQL = mysql_query($MULTIUPDQUERY, $dbh2) or die($cobj->QueryDie($MULTIUPDQUERY, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
			$NROWSPUPD		=	mysql_affected_rows();
			$PASSUPDCNT		+=	$NROWSPUPD;
		}
	}
	if(!empty($REFUPD))
	{
		foreach($REFUPD	as $SYNQUERY)
		{
																		// LOG ----------------------------------------
																			$LogData			=	" 
																			QUERY				=	$SYNQUERY
																			";
																			$proLog 			= 	new programlog("AddToArchiveDBQueries.php"); 
																			$proLog->programlogFN($LogData,__LINE__);	
																		// LOG ---------------------------------------- 
			
			$ACTIVESQL = mysql_query($SYNQUERY, $dbh1) or die($cobj->QueryDie($SYNQUERY, __LINE__, $PROGRAMNAME, $FILENAME, $LID, mysql_errno(), mysql_error()));
			$NROWSAUPD		=	mysql_affected_rows();
			$ACTUPDCNT		+=	$NROWSAUPD;
		}
	}
	
	// echo "<pre>"; print_r($PRIMARYARRAY); 
	// echo "<pre>"; print_r($REFARRAY); die;
	// echo "<pre>"; print_r($RECARRAY); die;
	// $MailPInsCnt	=	0;
	// $MailPUpdCnt	=	0;
	// $MailAUpdCnt	=	0;
	//<td><span style="float:left;"> No of records updated on Active Server <br> (SYN2 flag from 1 to 2)  </span>  </td> 
	//				<td><b> : &nbsp; '.$MailAUpdCnt.'</b> </td>
	
	if($MSG)
	{
		$cobj->mailfunction($SUPPORTEMAIL, $EMAILSUB, $MSG, $headers);
		// $cobj->mailfunction($SUPPORTEMAIL, "".$MAIL_SUBJECT." : Add to Archive from Active to Passive ", $MSG, $headers, 'Select data from Active and Paste into Passive');
		// @mail("isales.support@sutracomputers.com", "".$MAIL_SUBJECT." : Sales Invoice Status ", $MSG, $headers);
	} 
	//$cobj->close();
	echo $MSG; 
	
?>