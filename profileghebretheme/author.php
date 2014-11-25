<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="content" class="author">
<div class="post">
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
	if(empty($curauth->user_description))	echo $curauth->first_name. ' has not yet written a bio.';
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
    
    <h2 class="posttitle">Posts by <?php echo $curauth->first_name; ?></h2>

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
	</ul>
		<?php endwhile; ?>
        
		<div class="post-nav">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>
        <p><?php _e( $curauth->first_name.' has not written anything yet.'); ?></p>

    <?php endif; ?>

    <?php if($hasposts) echo '</ul>'; ?>

<!-- End Loop -->
</div>
</div>
<?php get_footer(); ?>