<?php
/**
 * Template Name: Pagina Contacto
 *
 * This is the template that displays full width page without sidebar
 *
 * @package Mksystem
 */

get_header('page'); ?>
<div class="container main-content-area">
	<div class="row">

		<div id="primary" class="content-area col-sm-12 col-md-4">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="content-area col-sm-12 col-md-8">
			<div class="content-map" style="padding: 40px 0;">
                <?php if ( get_theme_mod('Mapa', '') != '' ){ ?>
                        <?php echo  get_theme_mod('Mapa', ''); ?>
                <?php } ?>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
