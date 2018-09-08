<?php 
    // Start MySQL Connection
    include('dbconnect.php'); 
?>

<html>
<head>
    <title>Arduino Temperature Log</title>
    
</head>

    <body>
        <h1>Arduino Pulse Rate  Log</h1>

    <table border="0" cellspacing="0" cellpadding="4">
      
	  <tr>
            <td class="table_titles">ID</td>
            <td class="table_titles">Date and Time</td>
            <td class="table_titles">Sensor Serial</td>
            <td class="table_titles">Pulse Rate</td>
	    <td class="table_titles">Heart Rate</td>
          </tr>





<?php
$MyUsername = "root";  // enter your username for mysql
$MyPassword = "";  // enter your password for mysql
$MyHostname = "localhost";
$mysqli = new mysqli($MyHostname , $MyUsername, $MyPassword);


    // Retrieve all records and display them
    $result = mysql_query("SELECT * FROM iot ORDER BY id ASC");


$profile_name = array_values(mysqli_fetch_array($mysqli->query("SELECT username from test.profile WHERE id = 2 ")))[0]; //retrieving name 

echo nl2br("\n");
echo nl2br("\n");

echo "Hello User " . $profile_name ;

echo nl2br("\n");
echo nl2br("\n");

echo nl2br("Hello, \nSensehack \n");

echo nl2br("\n");
echo nl2br("\n");

echo nl2br("\n");
    // Used for row color toggle
    $oddrow = true;

    // process every record
    while( $row = mysql_fetch_array($result) )
    {
        if ($oddrow) 
        { 
            $css_class=' class="table_cells_odd"'; 
        }
        else
        { 
            $css_class=' class="table_cells_even"'; 
        }

        $oddrow = !$oddrow;

        echo '<tr>';
        echo '   <td>'.$row["id"].'</td>';
        echo '   <td>'.$row["event"].'</td>';
        echo '   <td>'.$row["sensor"].'</td>';
        echo '   <td>'.$row["pulse"].'</td>';
	    echo '   <td>'.$row["heart"].'</td>';
        echo '</tr>';
    }


?>
    </table>

<?php
echo nl2br("\n");
echo nl2br("By our readings , we believe you have a normal pulse rate. \n  \n");
echo nl2br("Don't Forget to exercise every day.\n");

?>
    </body>
</html>