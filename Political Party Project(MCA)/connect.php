<?php
define ("base_url","https://localhost/prasadPatil/html/ltr/");
$connection = mysqli_connect('localhost', 'root', '');
mysqli_set_charset($connection,"utf8");
	
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'mns_db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>