<?php

$server_name="localhost";
$user_name="root";
$pwd="";
$db_name="portfolio";

$con =  mysqli_connect($server_name,$user_name,$pwd,$db_name);

if (mysqli_connect_errno()) {
	echo "can't connect";
}else{
	//echo "connected";
}
