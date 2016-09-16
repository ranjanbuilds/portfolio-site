		<footer class="clearfix">
			<div id="contact" class="footer_content content">
				<!-- <div class="contact_nav page_nav">
				  <ul>
				    <a href=""><li>Email</li></a>
				    <a href=""><li>LinkedIn</li></a>
				    <a href=""><li>Twitter</li></a>
				  </ul>
				</div> -->
				<div class="footer_container content_container">
					<h1 class="page">
						<a href="mailto:rsubs03@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
						<a href="https://ca.linkedin.com/in/ranjanbuilds"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
						<a href="https://twitter.com/ranjanbuilds"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					</h1>
					<p class="title">Stay in touch</p>
					
					<form action="http://www.focuspocus.io/magic/08726064bb4f12fc35dfecfd0f9f8347" method="POST">
						<input type="text" name="firstName" placeholder="First Name" required="true" class="input_standard">
						<input type="email" name="email" placeholder="Email" required="true" class="input_standard">
						<textarea name="message" placeholder="Message" required="true" class="input_standard"></textarea>
						<input type="submit" value="Done!">
					</form>

					<!-- <p><?php the_field('address_street') ?></p> 
					<p><?php the_field('address_city') ?></p>
			        <p><?php the_field('email') ?></p> -->
			        <!-- //social media nav -->
			       <!--  <p class="copyright">&copy; Ranjan Subbiah <?php echo date('Y'); ?></p> -->
				</div>
			</div>

			<div class="footer_map" id="mapid" class="images">
			</div>
		  
		</footer>

		<script>
		// scripts.js, plugins.js and jquery are enqueued in functions.php
		/* Google Analytics! */
		 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
		 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		 s.parentNode.insertBefore(g,s)}(document,"script"));
		</script>

		<?php wp_footer(); ?>
	</div> <!-- container -->
</body>
</html>