		<footer>
			<!--=== MERRILL COLLEGE LOGO ===-->
			<a href="http://merrill.umd.edu" target="_blank">
				<img id="footer-logos" src="<?php echo home_url(); ?>/wp-content/themes/AJR-theme/images/merrill-logo.png">
			</a>
			<div id="copyright">&#169; 2013 American Journalism Review</div>
			<!--=== FOOTER MENU ===-->
			<div id="footer-links">
				<div class="footer-link"><a href="<?php echo home_url( '/' ); ?>about">ABOUT</a></div>
				<div class="footer-link"><a href="<?php echo home_url( '/' ); ?>about">ADVERTISING</a></div>
				<div class="footer-link"><a href="<?php echo home_url( '/' ); ?>terms">TERMS OF SERVICE</a></div>
				<div class="footer-link"><a href="http://merrill.umd.edu">MERRILL COLLEGE</a></div>
				<div class="footer-link"><a href="http://ajrarchive.org" target="_blank">ARCHIVE</a></div>
			</div>
			<?php wp_footer(); ?>
		</footer>
		<script type="text/javascript">
			/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			var disqus_shortname = 'americanjournalismreview'; // required: replace example with your forum shortname

			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function () {
			var s = document.createElement('script'); s.async = true;
			s.type = 'text/javascript';
			s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
			(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
			}());
		</script>
		
		<!--Twitter-->
		<script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
		</script>
		<!--Facebook-->
		<divid="fb-root"></div>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=227892017352930";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<!--Google+-->
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
		<!--Pinterest-->
		<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
    </body>
</html>