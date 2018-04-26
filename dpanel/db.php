<?php
$ini_arr = @parse_ini_file("mysql.ini");

$db = new PDO('mysql:host=' . $ini_arr['mysql_host'] . ';dbname=' . $ini_arr['mysql_base'], $ini_arr['mysql_user'], $ini_arr['mysql_pass']);


