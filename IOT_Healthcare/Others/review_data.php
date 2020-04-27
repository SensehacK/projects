<?php 
    // Start MySQL Connection
    include('dbconnect.php'); 
?>

<html>
<head>
    <title>Arduino Temperature Log</title>
    <style type="text/css">
        .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #000;
        }
        .table_titles {
            color: #FFF;
            background-color: #666;
        }
        .table_cells_odd {
            background-color: #CCC;
        }
        .table_cells_even {
            background-color: #FAFAFA;
        }
        table {
            border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }
    </style>
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
        echo '   <td'.$css_class.'>'.$row["id"].'</td>';
        echo '   <td'.$css_class.'>'.$row["event"].'</td>';
        echo '   <td'.$css_class.'>'.$row["sensor"].'</td>';
        echo '   <td'.$css_class.'>'.$row["pulse"].'</td>';
	    echo '   <td'.$css_class.'>'.$row["heart"].'</td>';
        echo '</tr>';
    }


?>
    </table>


<?php




$MyUsername = "root";  // enter your username for mysql
$MyPassword = "";  // enter your password for mysql
$MyHostname = "localhost";
$mysqli = new mysqli($MyHostname , $MyUsername, $MyPassword);



$profile_id = 3;  // Selecting Profile user 2 , which is Kautilya User . Use 3 for Krish , 1 is reserved for root admin 


$profile_age = array_values(mysqli_fetch_array($mysqli->query("SELECT age from test.profile WHERE id = $profile_id")))[0];


$profile_name = array_values(mysqli_fetch_array($mysqli->query("SELECT username from test.profile WHERE id = $profile_id")))[0]; //retrieving name 


                    echo "Hello User " . $profile_name ;

                    echo nl2br("\n");
                    echo nl2br("\n");

$profile_email = array_values(mysqli_fetch_array($mysqli->query("SELECT nurse from test.profile WHERE id = $profile_id")))[0]; // retrieving email address 

                    echo "Nurse Email Address info given :  " . $profile_email ;

                    echo nl2br("\n");
                    echo nl2br("\n");

                    echo "Profile Age info given : " . $profile_age ;  // Displaying User's Age 

                    echo nl2br("\n");

                    echo nl2br("\n");




$latest_pulse = array_values(mysqli_fetch_array($mysqli->query("SELECT pulse FROM test.iot ORDER BY id DESC LIMIT 1")))[0]; 

                    echo "Latest_pulse info given : " . $latest_pulse ;


                    echo nl2br("\n");
                    echo nl2br("\n");


$profile_agegroup = array_values(mysqli_fetch_array($mysqli->query("SELECT age_group from test.profile WHERE id = $profile_id")))[0];

                echo nl2br("\n");


            echo nl2br("\n");


$average_pulse = array_values(mysqli_fetch_array($mysqli->query("SELECT averagep FROM test.referencedata where id= $profile_agegroup")))[0]; 



               echo "Average pulse info given for that age  : " . $average_pulse ;


            echo nl2br("\n");


            echo nl2br("\n");


$min_pulse = array_values(mysqli_fetch_array($mysqli->query("SELECT pulse_min FROM test.referencedata where id= $profile_agegroup")))[0]; 



               echo "Min  pulse info given for that age  : " . $min_pulse ;




             echo nl2br("\n");


            echo nl2br("\n");


$max_pulse = array_values(mysqli_fetch_array($mysqli->query("SELECT pulse_max FROM test.referencedata where id= $profile_agegroup")))[0]; 



               echo "Max pulse info given for that age  : " . $max_pulse ;



































$num = $latest_pulse;



//Age categories for pulserate.
$age1 = 0;
$age2 = 5;
$age3 = 10;
$age4 = 15;
$age5 = 20;
$age6 = 30;
$age7 = 35;
$age8 = 40;
$age9 = 45;
$age10 = 50;
$age11 = 55;
$age12 = 60;
$age13 = 65;
$age14 = 70;




// Default Range of Pulse rate for specific Ages.
$value1 = 80;
$value2 = 160;

$value3 = 70;
$value4 = 130;

$value5 = 60;
$value6 = 130;

$value7 = 60;
$value8 = 200;

$value9 = 95;
$value10 = 185;

$value11 = 93;
$value12 = 185;

$value13 = 88;
$value14 = 175;

$value15 = 88;
$value16 = 170;

$value17 = 85;
$value18 = 165;

$value19 = 83;
$value20 = 160;

$value21 = 80;
$value22 = 155;

$value23 = 78;
$value24 = 155;

$value25 = 75;
$value26 = 155;



//Average Values of Pulse Rate
$avgp1 = 110;
$avgp2 = 90;
$avgp3 = 90;

$avgp4 = 100;
$avgp5 = 120;
$avgp6 = 135;

$avgp7 = 130;
$avgp8 = 125;
$avgp9 = 120;

$avgp10 = 115;
$avgp11 = 110;
$avgp12 = 105;
$avgp13 = 100;


$profile_nurse = array_values(mysqli_fetch_array($mysqli->query("SELECT nurse from test.profile WHERE id = $profile_id")))[0];

                        echo "Given Profile Nurse email is " . $profile_nurse;

                        echo nl2br("\n");

                        echo nl2br("\n");

                        echo "Latest_pulse info given : " . $latest_pulse ;


                        echo nl2br("\n");

                        echo nl2br("\n");



switch ($num){





                        case ($num>= $value1 && $num<= $value2 && $profile_age>= $age1 && $profile_age<= $age2 ): 
                           
                        echo "Within range 1";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                        echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp1;
                        break;



                        case ($num>= $value3 && $num<= $value4 && $profile_age>= $age2 && $profile_age<= $age3): 
                            echo "Within range 2";
                    echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                    echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp2;
                        break;



                    case ($num>= $value5 && $num<= $value6 && $profile_age>= $age3 && $profile_age<= $age4): 
                            echo "Within range 3";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                    echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp3;
                        break;



                    case ($num>= $value7 && $num<= $value8 && $profile_age>= $age4 && $profile_age<= $age5): 
                            echo "Within range 4";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                        echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp4;
                        break;



                    case ($num>= $value9 && $num<= $value10 && $profile_age>= $age5 && $profile_age<= $age6): 
                            echo "Within range 5";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                        echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp5;
                        break;




                    case ($num>= $value11 && $num<= $value12 && $profile_age>= $age6 && $profile_age<= $age7): 
                            echo "Within range 6";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                        echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp6;
                        break;




                    case ($num>= $value13 && $num<= $value14 && $profile_age>= $age7 && $profile_age<= $age8): 
                            echo "Within range 7";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                        echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp7;
                        break;




                    case ($num>= $value15 && $num<= $value16 && $profile_age>= $age8 && $profile_age<= $age9): 
                            echo "Within range 8";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                        echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp8;
                        break;




                    case ($num>= $value17 && $num<= $value18 && $profile_age>= $age9 && $profile_age<= $age10): 
                            echo "Within range 9";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                        echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp9;
                        break;




                    case ($num>= $value19 && $num<= $value20 && $profile_age>= $age10 && $profile_age<= $age11): 
                            echo "Within range 10";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                    echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp10;
                        break;



                    case ($num>= $value21 && $num<= $value22 && $profile_age>= $age11 && $profile_age<= $age12): 
                            echo "Within range 11";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                    echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp11;

                        break;



                    case ($num>= $value23 && $num<= $value24 && $profile_age>= $age12 && $profile_age<= $age13): 
                            echo "Within range 12";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                    echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp12;
                        break;



                    case ($num>= $value25 && $num<= $value26 && $profile_age>= $age13 && $profile_age<= $age14): 
                            echo "Within range 13";
                        echo nl2br("\n");
                        echo "Your pulse rate is totally fine";
                    echo nl2br("\n");
                        echo "Average Pulse Rate is " .$avgp13;
                        break;





       
        default: //default

            echo "Within no range regarding Pulse rate of your Age group ";
        echo nl2br("\n"); //Break line
        echo nl2br("\n"); //Break line
            echo "Consulting your care taker & Nurse for further evaluation.";
        echo nl2br("\n"); //Break line
        echo nl2br("\n"); //Break line
            echo "No need to panic.";
        echo nl2br("\n"); //Break line
        echo "Procedure for contacting your Nurse via Email. Starting...";
            






                    $to = $profile_nurse;

                    $subject = "IOT Report for $profile_name ";
                     
                     $message = "<b>Pulse Rate Report</b>";
                     $message .= "<h1>This is a trigger by IOT Healthcare for the patient.</h1>";
                     $message .= "<b>Latest Reports indicate that the pulse rate is not in specific range by its age group.</b>";
                     $message .= "<h2>Latest Pulse info given :   $latest_pulse </h2>";
                     $message .= "<h2>Profile Age info given :  $profile_age </h2>";
                     $message .= "<h3>Average pulse info given :  $average_pulse </h3>";
                     $message .= "Minimum pulse info  :  $min_pulse ";
                     $message .= "Maximum pulse info  :  $max_pulse ";
                     $message .= "<b>Please Do the needful</b>";


                     echo "Message Completed "; //debugging email 


                     $header = "From:sysadmin@iothealtcare.com \r\n";
                     $header = "Cc:admins@iothealth.com \r\n";
                     $header .= "MIME-Version: 1.0\r\n";
                     $header .= "Content-type: text/html\r\n";


                     
                     $retval = mail ($to,$subject,$message,$header);
                     
                     if( $retval == true )
                      {
                        echo "Message sent successfully... yes";
                     }

                     else {
                        echo "Message could not be sent...";
                     }

                            echo nl2br("\n");

                        echo nl2br("\n");

                            echo "End Email";







        break;
     }

?>





















<?php
echo nl2br("\n");
echo nl2br("By our readings , we believe you have a normal pulse rate. \n  \n");
echo nl2br("Don't Forget to exercise every day.\n");

?>
    </body>
</html>