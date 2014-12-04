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
		<div id="content" class="author">
			<!-- This sets the $curauth variable -->
				<?php
				if(isset($_GET['author_name'])) :
					$curauth = get_userdatabylogin($author_name);
				else :
					$curauth = get_userdata(intval($author));
				endif;
				?>
				<h2 class="posttitle"><?php echo $curauth->display_name; ?></h2>
				<p>
			<?php if(!empty($curauth->userphoto_thumb_file)){
			?>
				   <div style="float:left;padding-right:15px;padding-bottom:15px;"><img class="photo" alt="<?php echo $curauth->display_name; ?>" src="/wp-content/uploads/userphoto/<?php echo $curauth->userphoto_thumb_file; ?>" /></div>
			<?php
			}
			?>

			<?php 
				if(empty($curauth->user_description))	echo $curauth->first_name. ' Here are what you have authored.';
				else echo $curauth->user_description; 
				?></p>
				<?php
				if(!empty($curauth->user_url)){
					?>
					<p>Website: <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
					<?
				}
				if(!empty($curauth->twitter)){
					?>
					<p>Twitter: <a href="http://twitter.com/<?php echo $curauth->twitter; ?>">http://twitter.com/<?php echo $curauth->twitter; ?></a></p>
					<?
				}
				?>
				
				 

				<ul>
			<!-- The Loop -->

				<?php 
					$hasposts = have_posts();
					if ( $hasposts ) : while ( have_posts() ) : the_post(); ?>
					<li>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
						<?php the_title(); ?></a>,
						<?php the_time('d M Y'); ?> in <?php the_category(', ');?>
					</li>
				
					<?php endwhile; ?>
				</ul>	
					<div class="post-nav">
						<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					</div>

				<?php else : ?>
					<p><?php _e( $curauth->first_name.' has not written anything yet.'); ?></p>

				<?php endif; ?>

				<?php if($hasposts) echo ''; ?>

			<!-- End Loop -->
					
			<!-- END CONTENT -->

		</div>
				<div id="sidebar-right">
						<div id="widgets">
								<?php get_sidebar('primary'); ?>
						</div>
				</div>
								
</div>
</div>

<?php get_footer(); ?>