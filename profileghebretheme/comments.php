<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<?php /* You can start editing here*/ ?>





<?php get_header(); ?>

<!-- START SIDEBAR -->


<div id="middle"><!--opening #middle -->
	<aside id="sidebar-left"> 
		<?php get_sidebar('secondary'); ?>
	</aside>
<!-- END SIDEBAR -->
                
<!-- START CONTENT -->
	<div id="main"><!--open #main --> 
	
	
				<?php if ( have_comments() ) : ?>
				<div id="content" class="index">
					<h3 id="comments-head"><?php comments_number('No Responses', 'One Response', '% Responses' );?></h3>
					<div class="navigation">
						<div class="alignleft"><?php previous_comments_link() ?></div>
						<div class="alignright"><?php next_comments_link() ?></div>
					</div>
					<ol class="commentlist">
					<?php wp_list_comments(); ?>
					</ol>
					<div class="navigation">
						<div class="alignleft"><?php previous_comments_link('x') ?></div>
						<div class="alignright"><?php next_comments_link() ?></div>
					</div>
				 <?php else : // this is displayed if there are no comments so far ?>
					<?php if ('open' == $post->comment_status) : ?>
						<!-- If comments are open, but there are no comments. -->
					 <?php else : // comments are closed ?>
						<!-- If comments are closed. -->
						<p class="nocomments">Comments are closed.</p>
					<?php endif; ?>
				<?php endif; ?>
				<?php if ('open' == $post->comment_status) : ?>
				<div id="respond">
				<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

					<p class="cancel-comment-reply"><small><?php cancel_comment_reply_link(); ?></small></p>

				<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
				<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
				<?php else : ?>

				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

				<?php if ( $user_ID ) : ?>

				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

				<?php else : ?>

				<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

				<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

				<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
				<label for="url"><small>Website</small></label></p>

				<?php endif; ?>

				<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

				<p><textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea></p>

				<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
				<?php comment_id_fields(); ?>
				</p>
				<?php do_action('comment_form', $post->ID); ?>

				</form>

				<?php endif; // If registration required and not logged in ?>
				</div>

				<?php endif; // if you delete this the sky will fall on your head ?>

				</div>
			 
				
			<div id="sidebar-right">
				<div id="widgets">
						<?php get_sidebar('primary'); ?>
				</div>
			</div>
<!-- END CONTENT --> 
								
	 </div>

<?php get_footer(); ?>