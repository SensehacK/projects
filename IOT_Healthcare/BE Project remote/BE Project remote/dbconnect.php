<?php
$MyUsername = "b15_17774708";  // enter your username for mysql
$MyPassword = "password123";  // enter your password for mysql
$MyHostname = "sql110.byethost15.com";      // this is usually "localhost" unless your database resides on a different server

$dbh = mysql_pconnect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("b15_17774708_test
",$dbh);
?>