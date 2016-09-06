<?php
/**
 * The template for displaying search forms in Dazzling
 *
 * @package dazzling
 */
?>
<form method="get" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group" style="margin: 0;">
		<div class="input-group">
	  		<span class="screen-reader-text"><?php _ex( 'Buscar por:', 'label', 'dazzling' ); ?></span>
	    	<input type="text" class="form-control search-query" placeholder="<?php _e( 'Buscar...', 'dazzling' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	    	<span class="input-group-btn">
	      		<button type="submit" class="btn btn-theme" name="submit" id="searchsubmit" value="Search"><span class="glyphicon glyphicon-search"></span></button>
	    	</span>
	    </div>
	</div>
</form>