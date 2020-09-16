<?php
session_start();
$shop = $_SESSION['shop'];
include("../connection.php");

if(isset($_GET['type'])){
	$q=$_GET['type'];
}else{
	exit();
}

if($q=='sale')
{
    print_r($_POST);
}
?>