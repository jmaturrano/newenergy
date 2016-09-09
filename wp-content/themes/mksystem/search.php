<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package dazzling
 */

get_header(); ?>


<div class="site-content">
    <div class="container main-content-area">
    	<div class="row">
			<section id="primary" class="content-area col-sm-12 col-md-12">
				<main id="main" class="site-main" role="main" style="padding: 20px 0px 80px;">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( __( 'Resultados de búsqueda por: %s', 'dazzling' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'search' ); ?>

					<?php endwhile; ?>

					<?php dazzling_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</section><!-- #primary -->
    	</div><!-- .row -->
    </div><!-- .container -->
</div><!-- .site-content -->

<?php get_footer(); ?>
