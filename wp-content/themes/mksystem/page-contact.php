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
		<div id="primary" class="content-area col-sm-12 col-md-8">
			<iframe height="600" frameborder="0" width="1900" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487.7248070129628!2d-77.02572674433324!3d-12.057383792513283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8bb99e2a257%3A0xb54d58529039b79f!2zSmlyw7NuIFBhcnVybywgTGltYSwgUGVyw7o!5e0!3m2!1ses!2ses!4v1472138471590"></iframe>

		</div>
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
