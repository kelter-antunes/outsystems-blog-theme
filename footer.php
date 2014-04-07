<div class="top70">
	<div class="top50">
		<div id="footer-wrapper">
			<div id="footer-mid-wrapper">
				<div class="container">
					<div class="row" id="footer-mid">
						<ul class="footer-nav span2">
							<li class="title">
								<span>Company</span>
							</li>
							<li>
								<a href="http://www.outsystems.com/company/">About Us</a>
							</li>
							<li>
								<a href="http://www.outsystems.com/company/careers/">Careers</a>
							</li>
							<li>
								<a href="http://www.outsystems.com/academy/" target="_blank">Training</a>
							</li>
							<li>
								<a href="http://www.outsystems.com/partners/">Partners</a>
							</li>
							<li>
								<a href="http://www.outsystems.com/company/news/">News</a>
							</li>
						</ul>
						<ul class="footer-nav span2">
							<li class="title">
								<span>More</span>
							</li>
							<li>
								<a href="http://www.outsystems.com/it-resources/">Resources</a>
							</li>
							<li>
								<a href="http://www.outsystems.com/blog/" target="_blank">Blog</a>
							</li>
							<li>
								<a href="http://www.outsystems.com/community/" target="_blank">Community</a>
							</li>
							<li>
								<a href="http://www.outsystems.com/network/" target="_blank">Agile Network</a>
							</li>
							<li>
								<ul class="social-icons">
									<li>
										<a class="twitter" href="http://twitter.com/OutSystems" target="_blank">Twitter</a>
									</li>
									<li>
										<a class="facebook" href="http://www.facebook.com/OutSystems" target="_blank">Facebook</a>
									</li>
									<li>
										<a class="google" href="http://plus.google.com/+outsystems" target="_blank">G+</a>
									</li>
									<li>
										<a class="linkedin" href="http://www.linkedin.com/company/outsystems" target="_blank">linkedin</a>
									</li>
								</ul>
							</li>
						</ul>
						<ul id="footer-events-list" class="footer-nav span4">
							<li class="title">
								<span>Upcoming Events</span>
							</li>

							<li class="events-more">
								<a href="http://www.outsystems.com/company/events/" id="wt15">more events &raquo;</a>
							</li>
						</ul>
						<ul class="footer-nav span4">
							<li id="footer-contactus-table">
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="footer-bottom-wrapper">
				<div class="container">
					<div class="row" id="footer-bottom">
						<div class="legal span12">
							<p>
								Built with <a class="footer-op-link" href="http://www.outsystems.com/platform/?ref=f">
								OutSystems<sup>&reg;</sup> Platform
							</a>&nbsp;- OutSystems &copy; All rights reserved.
						</p>
						<ul>
							<li>
								<a href="http://www.outsystems.com/legal/terms-of-use/" title="Terms &amp; Conditions">Terms &amp; Conditions</a>
							</li>
							<li>
								<a href="http://www.outsystems.com/legal/terms-of-use/privacy-statement/#7">About Cookies</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="display:none;">
		<a class="popup_link" href="http://www.outsystems.com/contact-us-pricing-info/">contact pricing</a>
		<a class="popup_link" href="http://www.outsystems.com/try/contact-us/">contact try</a>
	</div>

	<script type="text/javascript">
	$( document ).ready(function() {


		$.getJSON( "http://www.outsystems.com/CorporateSite/Footer.aspx", function( data ) {
			if(data.locale)
				$('#footer-mid').addClass(data.locale);
			if(data.events)
				$("#footer-events-list li:first-child").after($(data.events));
			if(data.contactus)
				$('#footer-contactus-table').append($(data.contactus));
		});
	});
	</script>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>