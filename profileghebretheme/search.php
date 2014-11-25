<?php get_header(); ?>

<!-- START SIDEBAR -->


<div id="middle"><!--opening #middle -->
	<aside id="sidebar-left"> 
		<?php get_sidebar('secondary'); ?>
	</aside>
<!-- END SIDEBAR -->
                
<!-- START CONTENT -->
	<div id="main"><!--open #main --> 

			<?php if (have_posts()) : ?>
				 <div id="content" class="search">
						<h2 class="pagetitle">Search Results</h2>
						<ul>
							<?php while (have_posts()) : the_post(); ?>
							<li id="post-<?php the_ID(); ?>"><?php the_time('F jS, Y') ?> - <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
						</ul>
					<?php else : ?>

						<h2>No posts found. Try a different search?</h2>
						<p><?php get_search_form(); ?></p>
				
				
			<?php endif; ?>
				
				<div id="sidebar-right">
					<div id="widgets">
						<?php get_sidebar('primary'); ?>
					</div>
				</div>	
			</div>
					
		<!-- END CONTENT -->

			
										
	</div>

<?php get_footer(); ?>