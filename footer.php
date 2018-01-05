		<footer class="footer">
			<div class="container-fluid">
				<div class="row footer_row">
					<div class="col-md-6">
						<div class="address">
							<p>@<?php echo Date('Y'); ?> WordPress Theme</p>
							<p>123 Anytime St.</p>
							<p>Haddon Township, NJ 08108
						</div>
					</div>
					<div class="col-md-6">
						<nav id="bottom_menu">

							<?php 
							$args = array(
								'theme_location' => 'footer'
							);	
							?>

							<?php wp_nav_menu( $args ); ?>
							<!--<ul>
								<li><a>Home</a></li>
								<li><a>About US</a></li>
								<li><a>Blog</a></li>
								<li><a>Contact Us</a></li>
								<li><a>Members</a></li>
								<li><a>Past Screenings</a></li>
								<li><a>Upcoming Screenings</a></li>
							</ul>-->
						</nav>
					</div>
				</div>
			</div>
		</footer>	
		<?php wp_footer(); ?>	
	</body>
</html>