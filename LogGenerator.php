<? 

class programlog
{

private $handle;	//File Pointer
	//Construtor Which initializes log file
	function __construct($LogFile)
	{
		  $folder     = substr($_SERVER['SCRIPT_FILENAME'],0,strrpos($_SERVER['SCRIPT_FILENAME'],"/")+1);
		// $target_dir = $folder."FTP/jsw_outbound/";
		// $final_dir  = $folder."FTP/jsw_outbound_archive/";
		   //print "In BaseClass constructor\n".$LogFile;
		 $LogFile    = 	$folder."LOGS/".$LogFile.".log"; 
			if(!$fp = fopen($LogFile, 'a'))
			{
				echo $LogFile ."Could not open log file";
			}
			else
			{
				$FileSize		=	filesize($LogFile);
				if($FileSize>104857600)
				{
					fclose($fp); // CLosing the file
					unlink($LogFile); // Deleting the file
					if(!$fp = fopen($LogFile, 'a'))// Again Opening File in append mode
					{
						echo $LogFile ."Could not open log file";
					}
				}//END OF if($FileSize>1048576)

				$this->handle	=	$fp	;		//Assigning file pointer to static handle

				// $gmObj			=	new	commonAccessFunction(); //THis class Inisied GMDateClass.php
				$Log			=	"\n\n-----------------------------------Start Of $LogFile  Log--------------------------------------";
				$Log			.=	"\nProgram Name : ".$LogFile;
				$Log			.=	" \n ";
				$Log			.=	"Log Date: ".$this->gmDate(1);// THis function is inside GMDateClass.php
				$log			.=	" \n ";
				$Log			.=	"Log Time: ".$this->gmTime(1);
				$Log			.=	" \n ";// THis function is inside GMDateClass.php
				$Log			.=	" \n ";

				if (fwrite($this->handle, $Log) === FALSE)
				{
					echo "Cannot write to file ($LogFile)";
				}
			}// END OF else
	}// END OF function __construct($LogFile)
	
	function programlogFN($LogData,$LineNo)
	{
		$Log		.=	"\n Line No: ".$LineNo;
		$Log		.=	" \n ";
		$Log		.=	$LogData;
		if (fwrite($this->handle, $Log) === FALSE)
		{
			echo "Cannot write to file";
		}
	}// END OF function programlogFN($LogData,$LineNo)






	function programlogArrFN($LogDataArr,$LineNo)
	{
		if(is_array($LogDataArr))
		{
			$Log		.=	"\n Line No: ".$LineNo;
			foreach($LogDataArr as $key => $value)
			{
				if(!is_array($value))
				{
					$Log		.=	" \n ";
					$Log		.="\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t".$key. "\t\t\t\t\t\t=\t".$value;
				}
				else{

					//$Log		.=	"\n Line No: ".$LineNo;
					$Log		.=	" \n ";
					$Log		.=	"Array should be one dimension only!!!";

				}
			}

		}
		else{

			$Log		.=	"\n Line No: ".$LineNo;
			$Log		.=	"\n";
			$Log		.=	$LogDataArr;
		}

		if (fwrite($this->handle, $Log) === FALSE)
		{
			echo "Cannot write to file";
		}
	}// END OF function programlogArrFN($LogDataArr,$LineNo)




    function gmDate($Flag)
    {
        //Calculating GMDATE
        // $date             .= "Dt=".date(Y.'-'.m.'-'.d).";";
        $h                                = "-5";
        // Hour for time zone goes here e.g. +7 or -4, just remove the + or -
        $hm                  = $h * 60-30;
        $ms                  = $hm * 60;
        //echo $gmdate;
        if($Flag==0)
        {
            $SystemDate            = gmdate("Y-m-d", time()-($ms));
        // the "-" can be switched to a plus if that's what your time zone is.
        }// END OF if($Flag==0)
        else if($Flag==1)
        {
            $SystemDate          = gmdate("d-M-Y", time()-($ms));
        }// END OF else if($Flag==1)
        return $SystemDate;
    }// END OF function GMDate($Flag)


	function gmTime($Flag)
	{
	    $PROGRAMNAME		=	"gmTime";
		$FILENAME			=	"class\commonAccessFunction.php";

		//Calculating GMTime
		$h           		= "-5";
		// Hour for time zone goes here e.g. +7 or -4, just remove the + or -
		$hm          		= $h * 60-30;
		$ms          		= $hm * 60;
		//echo $gmdate;
		if($Flag==0)
		{
			$SystemTime      		= gmdate("H:i:s", time()-($ms));
		// the "-" can be switched to a plus if that's what your time zone is.
		}// END OF if($Flag==0)
		else if($Flag==1)
		{
			$SystemTime      		= gmdate("g:i:s A", time()-($ms));
		}// END OF else if($Flag==1)
		return $SystemTime;
	}// END OF function GMDate($Flag)



}// END OF class programlog
/*
include_once("ClassProgramLog.php");
$prgLogObj		=	new	programlog("Log_FIle_Name");	//create this instance at start of program
$LogData		=	"Message_To_Be_Written_In_LogFile";
$prgLogObj->programlogFN($LogData,__LINE__);
*/

?>
