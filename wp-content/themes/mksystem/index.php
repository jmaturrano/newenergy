<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mksystem
 */

    get_header();
?>


<div class="top-section">
    <div class="container">
        <div class="row">
            <?php mksystem_featured_slider(); ?>
        </div><!--.row-->
    </div><!--.container-->
</div>

<div class="site-content">
    <div class="container main-content-area">
    <?php
        global $post;
        if( get_post_meta($post->ID, 'site_layout', true) ){
                $layout_class = get_post_meta($post->ID, 'site_layout', true);
        }
        else{
                $layout_class = of_get_option( 'site_layout' );
        }
        if( is_home() && is_sticky( $post->ID ) ){
                $layout_class = of_get_option( 'site_layout' );
        }
        ?>
        <div class="row <?php echo $layout_class; ?>">


            <div id="content" class="">
                <div class="content-area col-sm-12 col-md-3">
                    <h3 class="category-product-list">Categorías</h3>
                    <?php mksystem_categories_list_html(); ?>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="banners_wrapper">
                        <div class="banners_wrapper_wrap_inner">
                            <a class="banner-wrap right-image" href="<?= get_url_shop(); ?>">
                                <figure class="featured-thumbnail">
                                    <img alt="" title="&lt;strong&gt;Power&lt;/strong&gt; Tools" src="<?php echo esc_url( get_theme_mod('Imagen_1') ); ?>" >
                                </figure>
                                <div class="banner_content">
                                    <h5><?php if ( get_theme_mod('Texto_1', '') != '' ){ ?>
                                     <?php echo  get_theme_mod('Texto_1', ''); ?>
                                     <?php } ?></h5>
                                    <h4><?php if ( get_theme_mod('Texto_2', '') != '' ){ ?>
                                     <?php echo  get_theme_mod('Texto_2', ''); ?>
                                     <?php } ?></h4>
                                    <p><?php if ( get_theme_mod('Descripcion', '') != '' ){ ?>
                                     <?php echo  get_theme_mod('Descripcion', ''); ?>
                                     <?php } ?></p>
                                </div>
                            </a>
                            <a class="banner-wrap left-image" href="<?= get_url_shop(); ?>">
                                <figure class="featured-thumbnail">
                                    <img alt="" title="&lt;strong&gt;Power&lt;/strong&gt; Tools" src="<?php echo esc_url( get_theme_mod('Imagen_2') ); ?>" >
                                </figure>
                                <div class="banner_content">
                                    <h5><?php if ( get_theme_mod('Texto_1b', '') != '' ){ ?>
                                     <?php echo  get_theme_mod('Texto_1b', ''); ?>
                                     <?php } ?></h5>
                                    <h4><?php if ( get_theme_mod('Texto_2b', '') != '' ){ ?>
                                     <?php echo  get_theme_mod('Texto_2b', ''); ?>
                                     <?php } ?></h4>
                                    <p><?php if ( get_theme_mod('Descripcionb', '') != '' ){ ?>
                                     <?php echo  get_theme_mod('Descripcionb', ''); ?>
                                     <?php } ?></p>
                                </div>
                            </a>
                            <div class="clear"></div><!-- .clear (end) -->
                        </div>
                    </div>
                    <div class="featured-products_wrapper">
                        <div class="featured-products_wrapper_wrap_inner">
                            <h2><strong>Principales</strong> productos</h2>
                            <?php mksystem_featured_products(); ?>
                        </div>
                    </div>
                </div>
            </div><!--#content-->
        </div><!--.row-->
    </div><!-- .container -->
</div><!-- close .site-content -->

<div class="site-content">
    <div class="container">
        <div class="row">
            <?php mksystem_call_for_action(); ?>
        </div>
    </div>
</div>

<div class="site-content">
    <div class="container">
        <div class="row">
            <div class="content-map">
                <div class="content-map-text text-center">
                    <h4><?php if ( get_theme_mod('direccion', '') != '' ){ ?>
                        <?php echo  get_theme_mod('direccion', ''); ?>
                        <?php } ?></h4>
                    <p><?php if ( get_theme_mod('telefono1', '') != '' ){ ?>
                        <?php echo  get_theme_mod('telefono1', ''); ?>
                        <?php } ?></p>
                    <p><?php if ( get_theme_mod('telefono2', '') != '' ){ ?>
                        <?php echo  get_theme_mod('telefono2', ''); ?>
                        <?php } ?></p>
                    <span><?php if ( get_theme_mod('email', '') != '' ){ ?>
                        <?php echo  get_theme_mod('email', ''); ?>
                        <?php } ?></span>
                </div>
                <div class="mask-map">
                    &nbsp;
                </div>
                <?php if ( get_theme_mod('Mapa', '') != '' ){ ?>
                        <?php echo  get_theme_mod('Mapa', ''); ?>
                <?php } ?>
            </div>
        </div><!-- close .row -->
    </div><!-- close .container -->
</div><!-- close .site-content -->

<?php get_footer(); ?>