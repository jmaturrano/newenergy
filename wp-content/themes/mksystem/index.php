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
 * @package dazzling
 */

    get_header();
?>


<div class="top-section">
    <?php mksystem_featured_slider(); ?>
</div>

<div id="content" class="site-content">

    

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






                <div class="content-area col-sm-12 col-md-3">
                    <h3 class="category-product-list">Categorías</h3>
                    <?php mksystem_categories_list_html(); ?>
                </div>

                <div class="col-md-9 col-sm-12">
                    <div class="banners_wrapper">
                        <div class="banners_wrapper_wrap_inner">
                            <a class="banner-wrap right-image" href="shop">
                                <figure class="featured-thumbnail">
                                    <img alt="" title="&lt;strong&gt;Power&lt;/strong&gt; Tools" src="http://livedemo00.template-help.com/woocommerce_53020/wp-content/uploads/2015/02/banner1-image.png">
                                </figure>
                                <div class="banner_content">
                                    <h5><strong>Power</strong> Tools</h5>
                                    <h4>20% off</h4>
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </a>
                            <a class="banner-wrap left-image" href="shop">
                                <figure class="featured-thumbnail">
                                    <img alt="" title="&lt;strong&gt;Hand &lt;/strong&gt;Tools" src="http://livedemo00.template-help.com/woocommerce_53020/wp-content/uploads/2015/02/banner2-image.png">
                                </figure>
                                <div class="banner_content">
                                    <h5><strong>Hand </strong>Tools</h5>
                                    <h4>20% off</h4>
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
            
            </div><!--row-->
        </div><!--container-->


        <div class="middle-section">
            <?php mksystem_call_for_action(); ?>
        </div>

        <div class="middle-section">
            <div class="content-map">
                <div class="content-map-text text-center">
                    <h4>Jr. Paruro N° 1132 - Lima</h4>
                    <p>(+51) 234-5678</p>
                    <p>(+51) 234-5678</p>
                    <span>Email: informes@ejemplo.com</span>
                </div>
                <div class="mask-map">
                    &nbsp;
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487.7248070129628!2d-77.02572674433324!3d-12.057383792513283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8bb99e2a257%3A0xb54d58529039b79f!2zSmlyw7NuIFBhcnVybywgTGltYSwgUGVyw7o!5e0!3m2!1ses!2ses!4v1472138471590" width="1900" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

        <?php /*get_sidebar();*/ ?>
        <?php get_footer(); ?>