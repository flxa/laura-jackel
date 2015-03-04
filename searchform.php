<?php
/**
 * The template for displaying search forms in laura_jackel
 *
 * @package laura_jackel
 */
?>
<form role="search" method="get" class="search-form clearfix" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'laura_jackel' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'laura_jackel' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<button type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'laura_jackel' ); ?>"><i class="icon-search"></i></button>
</form>
