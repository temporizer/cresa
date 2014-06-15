<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="style2.css" screen="media">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-2.0.3.min.js"></script>
<script>
	$(document).ready(function() {
		$(".menu").click(function() {
			$("#navigation").slideToggle("slow");
		})
		$(window).resize(function(){  
	    		var w = $(window).width();  
	    		if(w > 900) {  
	        		$("#nav").removeAttr('style');
	   	}  
	});
	})
</script>

</head>
<body>
<header>
<div class="menu-mobile">
	<span>Main Menu</span>
	<div class="menu-icon"><i class="fa fa-bars"></i></div>
</div>
	<div id="nav">
				<ul id="navigation">
					<li><a href=#pagewrapper title="Home"><img src="images/cresahome.png" alt="home icon"><br>Home</a></li>
					<li><a href="about2.html" title="Go To About Us"><img src="images/cresaabout.png" alt="about icon"><br>About Us</a>
					<!--	<ul>
							<li><a href="" title="Go To "></a></li>
							<li><a href="" title="Go To "></a></li>
							<li><a href="" title="Go To "></a></li>
						</ul>
						</li>	-->	
					<li class="moveDown"><a href="" title="Go To 911 Services"><img src="images/cresa911.png" alt="911 icon"><br>9-1-1 Services</a></li>
					<li><a href="" title="Go To Tech Services"><img src="images/cresatech.png" alt="tech icon"><br>Technology Services</a></li>
					<li><a href="" title="Go To Emergency Management"><img src="images/cresaem.png" alt="emergency management icon"><br>Emergency Management</a></li>
					<li><a href="" title="Go To Get Involved"><img src="images/cresagetin.png" alt="911 icon"><br>Get Involved</a></li>
					<li><a href="" title="Go To Employment"><img src="images/cresajobs.png" alt="jobs icon"><br>Employment</a></li>
					<li><a href="" title="Go To Contact"><img src="images/cresacontact.png" alt="contact icon"><br>Contact Us</a></li>
				</ul> 
			</div> <!-- end nav -->
	</header>
	<div class="placeholder"></div>

	
</body>
</html>