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
				<?php if (have_posts()) : ?>
                <div id="content" class="page">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post-box">
                        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                         
                        <?php the_content('More &raquo;'); ?>
                        <?php edit_post_link('Edit.', '<p><small>', '</small></p>'); ?>
                        </div>
                    <?php endwhile; ?>
                
                         
                
                </div><!-- END CONTENT -->
				
                <?php endif; ?>
				<div id="sidebar-right">
					<div id="widgets">
							<?php get_sidebar('primary'); ?>
					</div>
				</div>
			<?php comments_template(); ?> 
 	
		</div>						
</div>

<?php get_footer(); ?>
<?php wp_link_pages(); ?>