<?php
/**
 * Template Name: Pagina Categorias
 *
 * This is the template that displays full width page without sidebar
 *
 * @package Mksystem
 */

get_header('page'); ?>
<div class="container main-content-area" style="padding-bottom: 80px;">
	<div class="row">

		<div id="primary" class="content-area col-sm-12 col-md-12">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		
		<div class="clear"></div>
		
		<?php mksystem_categories_list_page(); ?>

	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
