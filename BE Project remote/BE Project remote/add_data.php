<?php
    // Connect to MySQL
    include("dbconnect.php");

    // Prepare the SQL statement
    $SQL = "INSERT INTO b15_17774708_test.iot (sensor ,pulse ,heart) VALUES ('".$_GET["serial"]."', '".$_GET["pulserate"]."', '".$_GET["heartrate"]."')";     

    // Execute SQL statement
    mysql_query($SQL);
 $pulse1= $_GET["pulserate"];


echo $pulse1;

    
?>