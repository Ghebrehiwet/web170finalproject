<?php get_header(); ?>

 
<div id="middle"><!--opening #middle -->
	<aside id="sidebar-left"> 
		<?php get_sidebar('secondary'); ?>
	</aside>
 
	<div id="main"><!--open #main --> 
			<div class="breadcrumbs">
					<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
				</div>
		<div id="content" class="search">	
			<?php if (have_posts()) : ?>
				 
						<h2 class="pagetitle">Search Results</h2>
						<ul>
							<?php while (have_posts()) : the_post(); ?>
							<li id="post-<?php the_ID(); ?>"><?php the_time('F jS, Y') ?> - <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
						</ul>
						
					<?php else : ?>
						
						<h2>No Searches found! Please use the search form below to search other contents.</h2>
						<p><?php get_search_form(); ?></p>
				
				
			<?php endif; ?>
					
				
				</div>
					
		 
				<div id="sidebar-right">
						<div id="widgets">
							<?php get_sidebar('primary'); ?>
						</div>
					</div>	
			
										
	</div>
</div>

<?php get_footer(); ?>