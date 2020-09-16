<?php

	// error_reporting(0);
    $pc_id = 1;
	$connected = @fsockopen("www.google.com", 80); 
                                        //website, port  (try 80 or 443)
    if ($connected){
        $is_conn 				= true; //action when connected
        fclose($connected);
        echo "connected";
        $servername				='182.50.132.82';
		$username				='erp500';
		$password				='H3DCsXJww2*Y';
		// $password				='{/HU8j{K';
		$dbname					='500erpdb';
        $connection_type		="live";

    }
    else
    {
        $is_conn 				= false; //action in connection failure
        echo "No internet";
        $servername				='localhost';
		$username				='root';
		$password				='';
		$dbname					='500erpdb';
        $connection_type		="local";
        
    }

	$servername_local			='localhost';
	$username_local				='root';
	$password_local				='';
	$dbname_local				='500erpdb';

	$conn 			= mysqli_connect($servername,$username,$password,$dbname) or die (mysqli_connect_error());
	$local_conn 	= mysqli_connect($servername_local,$username_local,$password_local,$dbname_local) or die (mysqli_connect_error());



   
?>
