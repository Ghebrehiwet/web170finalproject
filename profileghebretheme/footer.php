				<footer>
				<div id="validation">
						<h1>
						  <a href="<?php echo get_option('home'); ?>">
							<span><?php bloginfo('name'); ?> </span><!-- for SEO -->
							<img src="<?php bloginfo('template_url'); ?>/images/myimg2.JPG" id="logo"  
							  alt="My Logo"> <!-- for screen readers --> 	
						  </a>
					</h1> 
				</div>
				
				<div id="copyright">
					 
					<ul>  
                        <li><a href="<?php echo wp_login_url(); ?>" title="Login">Login</a></li>
                        <li><a href="http://www.gebgebonline.com/myprofile/contact-me/">Contact</a></li>
						<li><a href="https://www.facebook.com/ghebrehiwet.berhane" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook11.png" alt="facebook icon"></a></li>
						<li><a href="http://www.linkedin.com/pub/ghebrehiwet-ghebremedhin/40/631/89a?trk=pub-pbmap"  target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/linkedin7.png" alt="linkedIn"></a></li>
						<li><a href="https://github.com/Ghebrehiwet"  target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/github7.png" alt="GitHub"></a></li>
						<li>Copyright&copy; <?php echo date("Y"); ?> </li>
					</ul>
				
				</div>
			
		</footer> 
		<?php wp_footer(); ?>
		</div><!--close #wrapper --> 
	</body>
</html>