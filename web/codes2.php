<?php 
    // Start MySQL Connection
    include('dbconnect.php'); 
?>



<html>
<head>
<title>We Care a Medical Category Flat Bootstrap Responsive website Template | Short Codes :: w3layouts</title>
<!-- Custom Theme files -->


<style type="text/css">
        .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #000;
        }
        .table_titles {
            color: #DDD;
            background-color: #000;

        }
        .table_cells_odd {
            background-color: #CCC;
            
            
            

        }
        .table_cells_even {
            background-color: #FAFAFA;
            
        }

        .table_pulse {
            color: #DDD;
            background-color: #324;
            font-weight: bold;
        }

        .table_temperature {
            color: #DDD;
            background-color: #820;
            font-weight: bold;
        }
        .table_pulse2 {
            color: #DDD;
            background-color: #624;
            font-weight: bold;
        }

        .table_temperature2 {
            color: #DDD;
            background-color: #784;
            font-weight: bold;
        }
        table {
            border: 2px solid #333;
			font-size:28px;
 			font-family:Arial;

        }
        body { font-family: "Trebuchet MS", Arial; }
    </style>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="We Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->	
</head>



<body>
	<!--header-->
	<div class="header">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header navbar-left">
					<h1><a href="index.html"><img src="images/logo.png" alt="">We Care</a></h1>
				</div>
				<!--navigation-->
				<div class="header-text navbar-left">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting<p>
				</div>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="header-right">
					<div class="top-nav-text">
						<ul>
							<li>Call us: <span>+11 111 2222</span></li>
							<li>Email : <a class="email-link" href="mailto:example@mail.com">mail@example.com</a></li>
							<li>
								<ul class="social-icons">
									<li><a href="#"></a></li>
									<li><a href="#" class="pin"></a></li>
									<li><a href="#" class="in"></a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">					
						<ul class="nav navbar-nav navbar-left">
							<li><a href="index.html" class="link link--yaku"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>
							<li><a href="about.html" class="link link--yaku"><span>A</span><span>B</span><span>O</span><span>U</span><span>T</span></a></li>
							<li class="active"><a href="codes.html"><span>S</span><span>H</span><span>O</span><span>R</span><span>T</span> <span>C</span><span>O</span><span>D</span><span>E</span><span>S</span></a></li>
							<li><a href="#" class="dropdown-toggle link link--yaku" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>G</span><span>A</span><span>L</span><span>L</span><span>E</span><span>R</span><span>Y</span><span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="gallery.html">Gallery1</a></li>
									<li><a class="hvr-bounce-to-bottom" href="gallery.html">Gallery2</a></li>
									<li><a class="hvr-bounce-to-bottom" href="gallery.html">Gallery3</a></li>      
								</ul>
							</li>
							<li><a href="contact.html" class="link link--yaku"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span> <span>U</span><span>S</span></a></li>
						</ul>		
						<div class="clearfix"> </div>
					</div><!--//navigation-->
				</div>
				<div class="clearfix"> </div>
			</div>	
		</nav>		
	</div>	
	<!--//header-->
		



<div class="codes">
		<div class="container">





<h1>Arduino Pulse Rate  Log</h1>

    <table class="table table-bordered table-striped table-hover ">
      
	  <tr>
            <td class="table_titles">ID</td>
            <td class="table_titles">Date and Time</td>
            <td class="table_titles">Sensor Serial</td>
            <td class="table_titles">Pulse Rate</td>
	   	    <td class="table_titles">Temperature &deg;F</td>
      </tr>


		<tbody>




<?php

    // Retrieve all records and display them
    $result = mysql_query("SELECT * FROM iot ORDER BY id DESC");




echo nl2br("\n");
echo nl2br("\n");

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


echo nl2br("Hello, \nSensehack \n");

echo nl2br("\n");
echo nl2br("\n");

echo "<p align='left'> <font color=blue  size='6pt'>This is left alignment 6pt</font> </p>";
echo nl2br("\n");
    // Used for row color toggle





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


                     $header = "From:wecarepulse@gmail.com \r\n";
                     $header = "Cc:krish118231@gmail.com \r\n";
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















echo nl2br("\n"); //Break line
        echo nl2br("\n"); //Break line

echo nl2br("\n");
echo nl2br("By our readings , we believe you have a normal pulse rate. \n  \n");
echo nl2br("Don't Forget to exercise every day.\n");


echo nl2br("\n"); //Break line
        echo nl2br("\n"); //Break lineecho nl2br("\n"); //Break line
        echo nl2br("\n"); //Break line






















$oddrow = true;

    // process every record
    while( $row = mysql_fetch_array($result) )
    {

    	$css_pulse=' class="table_pulse"';
    	$css_temp=' class="table_temperature"';

        if ($oddrow) 
        { 
            $css_class=' class="table_cells_odd"'; 
            $css_pulse=' class="table_pulse"';
    		$css_temp=' class="table_temperature"';
        }
        else
        { 
            $css_class=' class="table_cells_even"'; 
            $css_pulse=' class="table_pulse2"';
    		$css_temp=' class="table_temperature2"';
        }

        $oddrow = !$oddrow;

        echo '<tr>';
       
        echo '   <td>'.$row["id"].'</td>';
        echo '   <td>'.$row["event"].'</td>';
        echo '   <td>'.$row["sensor"].'</td>';
        echo '   <td'.$css_pulse.'>'.$row["pulse"].'</td>' ;
		echo '   <td'.$css_temp. '>'.$row["heart"].' </td>';

        echo '</tr>';
    }


?>










    </tbody>

    </table>

















			</div>
	</div>
			










			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>







	<!--//short-codes-->		
	<!--footer-->
	<div class="footer">
		<div class="container">
			<h3 class="title">GET IN <span>TOUCH</span></h3>
			<div class="footer-grids">
				<div class="col-md-6 footer-left">
					<h5><a href="#">Ready to hire me?</a></h5>
					<div class="more">
						<a href="contact.html">Get in touch</a>
					</div>
				</div>
				<div class="col-md-6 footer-right">
					<div class="address">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p>+111 222 3333 111</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p>345 Diamond Street,London.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p><a href="mailto:example@mail.com">mail@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<!--copy-right-->
	<div class="copy-right">
		<div class="container">
			<ul>
				<li><a href="#"></a></li>
				<li><a href="#" class="gg"></a></li>
				<li><a href="#" class="twt"></a></li>
				<li><a href="#" class="be"></a></li>
			</ul>
			<div class="clearfix"> </div>
			<p>© 2016 We care . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>	
		</div>
	</div>
	<!--//copy-right-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>