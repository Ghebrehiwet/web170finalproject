<?php get_header(); ?>

<!-- START SIDEBAR -->


<div id="middle"><!--opening #middle -->
	<aside id="sidebar-left"> 
		<?php get_sidebar('secondary'); ?>
	</aside>
<!-- END SIDEBAR -->
                
<!-- START CONTENT -->
	<div id="main"><!--open #main --> 
		<div id="content" class="404">
			<div class="post-box">
				<h2>Error 404</h2>
				<p>Sorry, the page you are looking for doesn't exist.</p>
			</div>
		</div>
		<div id="sidebar-right">
			<div id="widgets">
				<?php get_sidebar('primary'); ?>
			</div>
		</div>
<!-- END CONTENT -->

	</div>
								
</div>

<?php get_footer(); ?>