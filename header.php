<?php
/**
 * @package WordPress
 * @subpackage Cresa
 */

// bloginfo('stylesheet_directory');
// Useful when hardcoding images or scripts
// Reveals the WP directory structure to the your theme directory

?>

<!doctype html>
<html lang="en">
<head>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<title>Home</title>
		
		<link rel="stylesheet" href="css/slimmenu.css" type="text/css">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<link href="css/600.css" rel="stylesheet" media="only screen and (max-width: 600px)">
		<link href="css/900.css" rel="stylesheet" media="only screen and (max-width: 900px)">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"> 
		<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="image/png" href="images/logo.png">
</head>
<body>
	<div id="pagewrapper">
		<header>

			<h1>Clark Regional Emergency Services Agency</h1>
			<div class="search">	
					<label for="search">Search:</label> <input type="text" name="search" id="search" size="16">
				</div>

			<div id="nav">
				<ul id="navigation" class="slimmenu">
					<li><a href=#pagewrapper title="Home"><img src="images/cresahome.png" alt="home icon"><br>Home</a></li>
					<li><a href="about.html" title="Go To About Us"><img src="images/cresaabout.png" alt="about icon"><br>About Us</a>
					<!--	<ul>
							<li><a href="" title="Go To "></a></li>
							<li><a href="" title="Go To "></a></li>
							<li><a href="" title="Go To "></a></li>
						</ul>
						</li>	-->	
					<li><a href="" title="Go To 911 Services"><img src="images/cresa911.png" alt="911 icon"><br>9-1-1 Services</a></li>
					<li><a href="" title="Go To Tech Services"><img src="images/cresatech.png" alt="tech icon"><br>Technology Services</a></li>
					<li><a href="" title="Go To Emergency Management"><img src="images/cresaem.png" alt="emergency management icon"><br>Emergency Management</a></li>
					<li><a href="" title="Go To Get Involved"><img src="images/cresagetin.png" alt="911 icon"><br>Get Involved</a></li>
					<li><a href="" title="Go To Employment"><img src="images/cresajobs.png" alt="jobs icon"><br>Employment</a></li>
					<li><a href="" title="Go To Contact"><img src="images/cresacontact.png" alt="contact icon"><br>Contact Us</a><li>
				</ul> 
			</div> <!-- end nav -->
				<div id="banner">

					<img src="images/cresa3.png" alt="CRESA building" id="building"> 
					<div id="logo">
<!--						<img src="images/cresa_logo1.png" title="CRESA logo in black and white">
-->					</div> <!-- end logo -->

				</div> <!-- end banner -->

				<div class="line"></div> <!-- end line -->

		</header> <!-- end header -->