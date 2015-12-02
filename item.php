<?php
require_once "libdb.php";
require_once "libcity.php";
require_once "libfoodstuff.php";

$foodstuff = new Foodstuff( "localhost", "root", "445080946309");

$id = $foodstuff->GetIDfromFoodstuffName( "セロリ" );
$price = $foodstuff->GetFoodstuffPrice( "XXXXXX", $id );
var_dump( $price );
$foodstuff->RegPrice( "XXXXXX", $id, "10000", "3", NULL );
$price = $foodstuff->GetFoodstuffPrice( "XXXXXX", $id );
var_dump( $price );
?>