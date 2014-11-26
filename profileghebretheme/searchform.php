<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<p><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />&nbsp;&nbsp;<small><input type="submit" name="submit" class="submit" value="search" placeholder="search"/></small></p>
</form>