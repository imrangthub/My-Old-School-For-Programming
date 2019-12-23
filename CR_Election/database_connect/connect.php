<?php

$host="localhost";
$user="root";
$pass="";
$db="cr_election";
$connect=  mysql_connect($host,$user,$pass) or die(mysql_error()."Your Data base is not connected");
$selectDb=  mysql_select_db($db,$connect) or die(mysql_error()."Your Database is not selected");