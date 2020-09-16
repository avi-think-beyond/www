 <?php
 function GetR_ID($LICENSEID, $RecLocationFlag='')
    {
                                        
        $MicroSec       =   gettimeofday();
        $micsec         =   $MicroSec['usec'];      // Microseconds
        $len_micsecs    =   strlen($micsec);        //Length Of Micro Seconds
        $leadingzerocnt =   6-$len_micsecs;         //Subtracting Length Of Micro seconds from 6
        //echo "Micro Sec:  ".$micsec."<br>";
        $leadingzero    =   NULL;
        for($i=1;$i<=$leadingzerocnt;$i++)
        {
            $leadingzero    .=  "0";
        }
        $micsec         =   $leadingzero.$micsec;
        $DateTimeStamp  =   gmdate("YmdHis").$micsec;
        //      $DateTimeStamp  =   gmdate("Ymdhis").$MicroSec["usec"];
        
        $UID    =   $RecLocationFlag.$LICENSEID.$DateTimeStamp;
        return $UID;
        
    }
    ?>