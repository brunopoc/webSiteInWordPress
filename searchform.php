<?php
/**
 * The template for displaying search forms
 *
 * @package foliogine-lite
 */
?>
	<div class="widget search">
		<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
			<input type="text" name="s" value="search" id="s" onblur="if (this.value=='') this.value='search';" onfocus="if (this.value=='search') this.value='';">
			<input type="submit" class="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'foliogine-lite' ); ?>" />
		</form>
	</div>