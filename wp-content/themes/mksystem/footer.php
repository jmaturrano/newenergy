<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mksystem
 */
?>


	<div id="footer-area">
		<div class="container footer-inner">
			<div class="row">
				<!-- <div class=""> -->
					<div class="col-md-2 col-sm-2 col-xs-4">
						<?php mksystem_footer_menu(); ?>
					</div>

					<div class="col-md-2 col-sm-2 col-xs-4">
						<?php mksystem_secondary_menu_footer(); ?>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php mksystem_categories_list_footer(); ?>
					</div>

					<nav role="navigation" class="col-md-5 col-sm-5 col-xs-12">

						<div class="footer_logo-wrapper text-center">
							<?php if( get_header_image() != '' ) : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
							<?php endif; // header image was removed ?>
							<?php if( !get_header_image() ) : ?>
								<span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
							<?php endif; ?>
						</div>
						<div class="footer_text-wrapper text-justify">
				            <?php $description = get_bloginfo( 'description', 'display' );
				            if ( $description || is_customize_preview() ) : ?>
				                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				            <?php endif; ?>
						</div>
						<div class="footer_social-wrapper">
							<?php mksystem_custom_links(); ?>
						</div>

					</nav>
				<!-- </div> -->
			</div>
		</div>

		<div class="container">
			<div class="row">
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						<div class="copyright col-md-6">
							<?php //echo of_get_option( 'custom_footer_text', 'dazzling' ); ?>
							<?php mksystem_footer_info(); ?>
						</div>
					</div><!-- .site-info -->
					<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
				</footer><!-- #colophon -->
			</div><!-- close.row-->
		</div><!-- close.container-->
	</div><!-- close#footer-area-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>