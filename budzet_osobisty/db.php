<?php
$host="localhost"; $user="setmax2_test6"; $pass="-xDYjfZ)h)5xH6]-"; $dbname="setmax2_test6";
$conn=new mysqli($host,$user,$pass,$dbname);
$conn->set_charset("utf8");
if($conn->connect_error) die("Błąd połączenia");
session_start();
?>