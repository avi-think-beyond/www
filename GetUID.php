function GetUID($LICENSEID, $RecLocationFlag='')//function to get 24 digit unique
	{
			$MicroSec		=	gettimeofday();
			//MICROSEC are generated 6 digit and with no leading zeros
			//Implemeting the logic to add leading zeros if microsec are less than 6 digit
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
					//echo "UID : ".$UID."<br>";
			return $UID;
	}



Using Log Syntax ***

// LOG ----------------------------------------
    $LogData            =    "
    QUERY             =    $sel_mem
    ";
    $proLog->programlogFN($LogData,__LINE__);    
// LOG ----------------------------------------