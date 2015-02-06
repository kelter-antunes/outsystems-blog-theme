<div class="top70" data-swiftype-index="false">
	<div class="top50">
		<div id="footer-wrapper">
			<div id="footer-mid-wrapper">
				<div class="container">
					<div class="row" id="footer-mid">
						<ul class="footer-nav span2">
							<li class="title">
								<span><?php _e("Company","outsystems_blog");?></span>
							</li>
							<li>
								<a href="http://www.outsystems.com/company/"><?php _e("About Us","outsystems_blog");?></a>
							</li>
							<li>
								<a href="http://www.outsystems.com/company/careers/"><?php _e("Careers","outsystems_blog");?></a>
							</li>
							<li>
								<a href="http://www.outsystems.com/academy/" target="_blank"><?php _e("Training","outsystems_blog");?></a>
							</li>
							<li>
								<a href="http://www.outsystems.com/partners/"><?php _e("Partners","outsystems_blog");?></a>
							</li>
							<li>
								<a href="http://www.outsystems.com/company/news/"><?php _e("News","outsystems_blog");?></a>
							</li>
						</ul>
						<ul class="footer-nav span2">
							<li class="title">
								<span><?php _e("More","outsystems_blog");?></span>
							</li>
							<li>
								<a href="http://www.outsystems.com/it-resources/"><?php _e("Resources","outsystems_blog");?></a>
							</li>
							<li>
								<a href="http://www.outsystems.com/blog/" target="_blank"><?php _e("Blog","outsystems_blog");?></a>
							</li>
							<li>
								<a href="http://www.outsystems.com/community/" target="_blank"><?php _e("Community","outsystems_blog");?></a>
							</li>
							<li>
								<a href="http://www.outsystems.com/network/" target="_blank"><?php _e("Agile Network","outsystems_blog");?></a>
							</li>
							<li>
								<ul class="social-icons">
									<li>
										<a class="twitter" href="http://twitter.com/OutSystems" target="_blank"><?php _e("Twitter","outsystems_blog");?></a>
									</li>
									<li>
										<a class="facebook" href="http://www.facebook.com/OutSystems" target="_blank"><?php _e("Facebook","outsystems_blog");?></a>
									</li>
									<li>
										<a class="google" href="http://plus.google.com/+outsystems" target="_blank"><?php _e("G+","outsystems_blog");?></a>
									</li>
									<li>
										<a class="linkedin" href="http://www.linkedin.com/company/outsystems" target="_blank"><?php _e("linkedin","outsystems_blog");?></a>
									</li>
								</ul>
							</li>
						</ul>
						<ul id="footer-events-list" class="footer-nav span4">
							<li class="title">
								<span><?php _e("Upcoming Events","outsystems_blog");?></span>
							</li>

							<li class="events-more">
								<a href="http://www.outsystems.com/company/events/" id="wt15"><?php _e("more events","outsystems_blog");?> &raquo;</a>
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
								<?php _e("Built with","outsystems_blog");?> <a class="footer-op-link" href="http://www.outsystems.com/platform/?ref=f">
								OutSystems<sup>&reg;</sup> Platform
							</a>&nbsp;- OutSystems &copy; <?php _e("All rights reserved.","outsystems_blog");?>
						</p>
						<ul>
							<li>
								<a href="http://www.outsystems.com/legal/terms-of-use/" title="Terms &amp; Conditions"><?php _e("Terms &amp; Conditions","outsystems_blog");?></a>
							</li>
							<li>
								<a href="http://www.outsystems.com/legal/terms-of-use/privacy-statement/#7"><?php _e("About Cookies","outsystems_blog");?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	$( document ).ready(function() {


		$.getJSON( "https://www.outsystems.com/footer.aspx", function( data ) {
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