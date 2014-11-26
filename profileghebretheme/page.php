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
                <div id="content" class="page">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post-box">
                        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                         
                        <?php the_content('More &raquo;'); ?>
                        <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
                        </div>
                    <?php endwhile; ?>
                
                         
                
                </div>
				
                <?php endif; ?>
				<div id="sidebar-right">
		<div id="widgets">
				<?php get_sidebar('primary'); ?>
		</div>
			<?php comments_template(); ?>	
		
 	</div>
<!-- END CONTENT -->

	
								
	 </div>

<?php get_footer(); ?>