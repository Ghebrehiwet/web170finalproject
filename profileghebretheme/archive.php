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
		<div id="content" class="archive">
		<?php if (have_posts()) : ?>
		
			  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			  <?php /* If this is a category archive */ if (is_category()) { ?>
				<h3 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h3>
			  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h3 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>
			  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h3 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h3>
			  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h3 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h3>
			  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h3 class="pagetitle">Archive for <?php the_time('Y'); ?></h3>
			  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h3 class="pagetitle">Author Archive</h3>
			  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h3 class="pagetitle">Blog Archives</h3>
			  <?php } ?>



				<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>" class="clear"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small class="the_time"><?php the_time('l, F jS, Y') ?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

			</div>

		<?php endwhile; ?>

		<nav class="post-nav">
			<?php posts_nav_link(' || ','Newer Posts','Older Posts'); ?>
		</nav>
        
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h3 class='center'>Sorry, but there aren't any posts in the %s category yet.</h3>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h3>Sorry, but there aren't any posts with this date.</h3>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h3 class='center'>Sorry, but there aren't any posts by %s yet.</h3>", $userdata->display_name);
		} else {
			echo("<h3 class='center'>No posts found.</h3>");
		}
		get_search_form();
	 
	endif;
?>
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
