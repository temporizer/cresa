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
	<meta charset="UTF-8">
	<title>Home</title>
		
		<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slimmenu.css" type="text/css"> -->
		<link href=<?php bloginfo('stylesheet_url'); ?> rel="stylesheet" media="screen">
		<link href="<?php bloginfo('template_url'); ?>/css/600.css" rel="stylesheet" media="only screen and (max-width: 600px)">
		<link href="<?php bloginfo('template_url'); ?>/css/900.css" rel="stylesheet" media="only screen and (max-width: 900px)">
		<link href="<?php bloginfo('template_url'); ?>/style2.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="<?php bloginfo('template_url'); ?>/image/png" href="images/logo.png">
		<script src="<?php bloginfo('template_url') ?>/js/jquery-2.0.3.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function() {
				$(".menu-mobile").click(function() {
					$("#navigation").slideToggle("slow");
				});

				$(window).resize(function() {
					var w = $(window).width();
					if (w > 900) {
						$("#navigation").removeAttr('style');
					}
				})
				
				});
		</script>
</head>
<body>
	<div id="pagewrapper">
		<header>

			<h1>Clark Regional Emergency Services Agency</h1>
			<?php get_search_form(); ?>
<div class="menu-mobile">
	<span>Main Menu</span>
	<div class="menu-icon"><i class="fa fa-bars"></i></div>
</div>
			<div id="nav">
				<ul id="navigation">
					<li><a href=#pagewrapper title="Home"><img src="<?php bloginfo('template_url'); ?>/images/cresahome.png" alt="home icon"><br>Home</a></li>
					<li><a href="about2.html" title="Go To About Us"><img src="<?php bloginfo('template_url'); ?>/images/cresaabout.png" alt="about icon"><br>About Us</a>
					<!--	<ul>
							<li><a href="" title="Go To "></a></li>
							<li><a href="" title="Go To "></a></li>
							<li><a href="" title="Go To "></a></li>
						</ul>
						</li>	-->	
					<li class="moveDown"><a href="" title="Go To 911 Services"><img src="<?php bloginfo('template_url'); ?>/images/cresa911.png" alt="911 icon"><br>9-1-1 Services</a></li>
					<li><a href="" title="Go To Tech Services"><img src="<?php bloginfo('template_url'); ?>/images/cresatech.png" alt="tech icon"><br>Technology Services</a></li>
					<li><a href="" title="Go To Emergency Management"><img src="<?php bloginfo('template_url'); ?>/images/cresaem.png" alt="emergency management icon"><br>Emergency Management</a></li>
					<li><a href="" title="Go To Get Involved"><img src="<?php bloginfo('template_url'); ?>/images/cresagetin.png" alt="911 icon"><br>Get Involved</a></li>
					<li><a href="" title="Go To Employment"><img src="<?php bloginfo('template_url'); ?>/images/cresajobs.png" alt="jobs icon"><br>Employment</a></li>
					<li><a href="" title="Go To Contact"><img src="<?php bloginfo('template_url'); ?>/images/cresacontact.png" alt="contact icon"><br>Contact Us</a></li>
				</ul> 
			</div> <!-- end nav -->
				<div id="banner">

					<?php
						if ( has_post_thumbnail() ) {
							// the_post_thumbnail('full');
							$post_thumbnail_id = get_post_thumbnail_id();
        						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
							echo '<img src="'. $post_thumbnail_url .'" alt="Featured Image">';
						}  else {
							?>
							<img src="<?php echo bloginfo('template_url'); ?>/images/default_banner.jpg" alt="CRESA building" id="building">
							<?php
						}
					?>
					
					<div id="logo">
<!--						<img src="images/cresa_logo1.png" title="CRESA logo in black and white">
-->					</div> <!-- end logo -->

				</div> <!-- end banner -->

				<div class="line"></div> <!-- end line -->

		</header> <!-- end header -->