<?php get_header(); ?>

<!-- START SIDEBAR -->


<div id="middle"><!--opening #middle -->
	<aside id="sidebar-left"> 
		<?php get_sidebar('secondary'); ?>
	</aside>
<!-- END SIDEBAR -->
                
<!-- START CONTENT -->
	<div id="main"><!--open #main -->
		<div class="breadcrumbs">
					<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
		</div>
		<div id="content" class="404">
			<div class="post-box">
				<h2>Content Not Found</h2>
				<p>Sorry for not being able to get of what you have been looking for. Can you kindly search using our search engine below. Thanks</p>
				<p><?php get_search_form();?></p>
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