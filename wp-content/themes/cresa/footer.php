<?php
/*
 * @package WordPress
 * @subpackage Cresa
 */
?>


<footer>
				<div class="search">	
					<label for="search">Search:</label> <input type="text" name="search" id="search" size="16">
				</div>
				
				<div id="social">
					<a href="mobileapp.html" title="mobile apps" id="mobile"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/phone.png" alt="mobile phone icon by Jino & Christine"></a>

					<a href="http://www.cresa911.blogspot.com/" title="Blog" id="blog"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/blogspot.png" alt="blog icon "></a> <!-- credit by www.alessandracravero.it -->
					<a href="https://www.facebook.com/CRESA.911" title="Facebook" id="facebook"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb.png" alt="facebook logo by www.alessandracravero.it"></a>
					<a href="https://twitter.com/cresa" title="Twitter icon By www.alessandracravero.it" id="twitter"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" alt="twitter logo by www.alessandracravero.it"></a>
					
					
					<a href="http://feeds.feedburner.com/cresa911" title="rss" id="rss"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" alt="rss logo by www.alessandracravero.it"></a>
				</div> <!-- end social -->
				
				<div class="container finfo">
					<div class="row">
	                                  <div class="col-sm-3" id="location">
							<p>710 West 13th Street</p>
							<p>Vancouver, WA 98660-2810</p>
							<p>Phone: (360) 737-1911</p>
							<p>Fax: (360) 694-1954</p>
							<p>Email: cresa@clark.wa.gov</p>
						</div> <!-- end location -->

						<div class="col-sm-3" id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d2789.9779632991995!2d-122.678065!3d45.631179!3m2!1i1024!2i768!4f13.1!4m9!1i0!3e6!4m0!4m5!1s0x5495a8b7b93c0ba1%3A0x7c7630132a5e7438!2sCresa+911%2C+710+W+13th+St%2C+Vancouver%2C+WA+98660!3m2!1d45.631177!2d-122.678068!5e0!3m2!1sen!2sus!4v1400653002290" width="150" height="150" frameborder="0" style="border:0"></iframe>
							<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
							<div>
								<div id="gmap_canvas" style="height:150px;width:150px;"></div>
								<a class="google-map-code" href="http://www.map-embed.com/2/" id="get-map-data"></a>
								<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
							</div>
							<script type="text/javascript"> function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(45.6310753,-122.67807040000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(45.6310753, -122.67807040000002)});infowindow = new google.maps.InfoWindow({content:"<b>CRESA 9-1-1</b><br/>710 West 13th Street<br/>98660-2810 Vancouver, WA" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script> -->
						</div> <!-- end map -->
						
						
						<!-- <div class="col-sm-2"></div> -->
						<div class="col-sm-3" id="footnav1">
							<ul>
								<li><a href="records.html" title="Records Request">Records Request</a></li>
								<li><a href="when911.html" title="When to call">When to call</a></li>							
								<li><a href="alerts.html" title="Emergency Alerts">Emergency Alerts</a></li>
								<li><a href="responder.html" title="Responder Portal">Responder Portal</a></li>
							</ul>
						
						</div> <!-- footnav1 -->
						
						<div class="col-sm-3" id="footnav2">
							<ul>
								<li><a href="prepared.html" title="Emergency Preparedness">Be Prepared</a></li>
								<li><a href="getinvolved.html" title="Get Involved">Get Involved</a></li>
								<li><a href="calendar.html" title="Training Calendar">Training Calendar</a></li>							
								<li><a href="forms.html" title="Forms">Forms</a></li>
							</ul>
						</div> <!-- footnav2 -->
					</div>
				</div>

				
				
			</footer>
		</div> <!-- end pagewrapper -->
		<!-- slimmenu navigation script -->
		<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery-2.0.3.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.slimmenu.min.js"></script>
		<!-- move to new js file in js folder after testing -->
		<script>
		$('#navigation').slimmenu(
			{
			    resizeWidth: '900',
			    collapserTitle: 'Main Menu',
			    animSpeed: 'medium',
			    easingEffect: null,
			    indentChildren: false,
			    childrenIndenter: '&nbsp;'
			});
		</script>
					
<?php wp_footer(); ?>
</body>
</html>