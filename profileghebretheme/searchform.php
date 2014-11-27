<!-- <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<p><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />&nbsp;&nbsp;<small><input type="submit" name="submit" class="submit" value="search"/></small></p>
</form> -->

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>