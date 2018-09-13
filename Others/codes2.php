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
	   	    <td class="table_titles">Temperature</td>
      </tr>


		<tbody>




<?php

    // Retrieve all records and display them
    $result = mysql_query("SELECT * FROM iot ORDER BY id DESC");




echo nl2br("\n");
echo nl2br("\n");



echo nl2br("Hello, \nSensehack \n");

echo nl2br("\n");
echo nl2br("\n");
echo "<p align='left'> <font color=blue  size='6pt'>This is left alignment 6pt</font> </p>";
echo nl2br("\n");
    // Used for row color toggle
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