<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package dazzling
 */

get_header('page'); ?>
<div class="container main-content-area">
	<div class="row">
		<div id="primary" class="content-area col-sm-12 col-md-12">
			<main id="main" class="site-main" role="main">

				
				<?php woocommerce_content(); ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
