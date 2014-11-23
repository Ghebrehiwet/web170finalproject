<aside id="primary">

<?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>
		<!-- Begin Categories -->
				<?php wp_list_categories(); ?> 
			<!-- End Categories -->
			<!-- Begin Links -->
		<!-- Create some custom HTML or call the_widget().  It's up to you. -->
		 

	<?php endif; ?>
	
	
        
    </aside><!-- /primary-->