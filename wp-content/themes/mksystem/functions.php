<?php



function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('dazzling', '', $directory_template).'mksystem';
  return $directory_child;
}


/**
 * registrando menu secundario
 */
register_nav_menus(array(
  'secondary' => __('Menu Secundario', 'mksystem')
));


/**
 * header menu (should you choose to use one)
 */
function mksystem_header_menu() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  ));
} /* end header menu */

/**
 * secondary menu (should you choose to use one)
 */
function mksystem_secondary_menu_header() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'secondary',
    'theme_location'    => 'secondary',
    'menu_class'        => 'nav navbar-nav nav-header text-center',
    'depth'             => 2,
    'container'         => '',
    'container_class'   => ''
  ));
} /* end header menu */

/**
 * secondary menu (should you choose to use one)
 */
function mksystem_secondary_menu_footer() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'secondary',
    'theme_location'    => 'secondary',
    'menu_class'        => 'nav footer-nav clearfix',
    'depth'             => 2,
    'container'         => '',
    'container_class'   => ''
  ));
} /* end header menu */


/**
 * footer menu
 */
function mksystem_footer_menu() {
  wp_nav_menu(array(
    'container'       => '',                              // remove nav container
    'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    'menu'            => __( 'Footer Links', 'dazzling' ),   // nav name
    'menu_class'      => 'nav footer-nav clearfix',      // adding custom nav class
    'theme_location'  => 'footer-links',             // where it's located in the theme
    'before'          => '',                                 // before the menu
    'after'           => '',                                  // after the menu
    'link_before'     => '',                            // before each link
    'link_after'      => '',                             // after each link
    'depth'           => 0,                                   // limit the depth of the nav
    'fallback_cb'     => 'dazzling_footer_links_fallback'  // fallback function
  ));
} /* end header menu */


/**
 * Social links
 */
function mksystem_social_icons(){
    wp_nav_menu(
      array(
        'theme_location'  => 'social-menu',
        'container'       => 'nav',
        'container_id'    => 'social',
        'container_class' => 'social-icon',
        'menu_id'         => 'menu-social-items',
        'menu_class'      => 'social-menu',
        'depth'           => 1,
        'fallback_cb'     => '',
        'link_before'     => '<i class="social_icon fa"><span>',
        'link_after'      => '</span></i>'
      )
    );
}



/**
 * custom links header
 */
function mksystem_custom_links(){
  $html = '';
  $html .= '<ul class="nav navbar-nav nav-header text-center">';
    if (get_theme_mod('social_facebook','')!='') {
      $html .= '<li class="menu-item"><a class="social-icon" href="'.get_theme_mod('social_facebook').'"><i aria-hidden="true" class="fa fa-facebook fa-lg"></i></a></li>';
    }

    if (get_theme_mod('social_twitter','')!='') {
      $html .= '<li class="menu-item"><a class="social-icon" href="'.get_theme_mod('social_twitter').'"><i aria-hidden="true" class="fa fa-twitter fa-lg"></i></a></li>';
    }
    if (get_theme_mod('social_instagram','')!='') {
      $html .= '<li class="menu-item"><a class="social-icon" href="'.get_theme_mod('social_instagram').'"><i aria-hidden="true" class="fa fa-instagram fa-lg"></i></a></li>';
    }
    if (get_theme_mod('social_linkedin','')!='') {
      $html .= '<li class="menu-item"><a class="social-icon" href="'.get_theme_mod('social_linkedin').'"><i aria-hidden="true" class="fa fa-linkedin fa-lg"></i></a></li>';
    }
    if (get_theme_mod('social_youtube','')!='') {
      $html .= '<li class="menu-item"><a class="social-icon" href="'.get_theme_mod('social_youtube').'"><i aria-hidden="true" class="fa fa-youtube fa-lg"></i></a></li>';
    }
    if (get_theme_mod('social_vimeo','')!='') {
      $html .= '<li class="menu-item"><a class="social-icon" href="'.get_theme_mod('social_vimeo').'"><i aria-hidden="true" class="fa fa-vimeo fa-lg"></i></a></li>';
    }
  
  $html .= '</ul>';

  echo $html;
}



/**
 * Mk system header scripts
 *
 */
function mksystem_header_scripts() {
?>
  <script>
    var header = jQuery(".custom-navbar");
    jQuery(document).scroll(function(e) {
        if(jQuery(this).scrollTop() > jQuery(".custom-header-page").height()) {
            header.css({"position" : "fixed", "top" : "0", "width" : "100%", "z-index" : "1000"});
        } else {
            header.css("position", "relative");
        }
    });

    jQuery(document).on('click', '.icon-subcategory', function(e){
      var $subcategory = jQuery(this).parent().next();
      if(jQuery(this).hasClass('glyphicon-plus')){
        jQuery(this).removeClass('glyphicon-plus');
        jQuery(this).addClass('glyphicon-minus');
        $subcategory.slideDown();
      }else{
        jQuery(this).removeClass('glyphicon-minus');
        jQuery(this).addClass('glyphicon-plus');
        $subcategory.slideUp();
      }
    });

    if(jQuery('.woo-menu-cart').length > 0){
      jQuery('.woo-menu-cart').hover(
        function(){
        jQuery('.quotelist-section').addClass('active');
        }, function(){
          jQuery('.quotelist-section').removeClass('active');
        }
      );
    }//end if
  </script>
<?php
}
add_action('wp_footer','mksystem_header_scripts', 100);



/**
 * Mk system header styles
 *
 */
function mksystem_header_styles() {

  //Google Fonts      
  wp_register_style('polmo-googleFontsLato','//fonts.googleapis.com/css?family=Lato:300,400,700,900');
  wp_enqueue_style( 'polmo-googleFontsLato');
?>
  <style type="text/css">
    .navbar-mksystem{
      /*background: #FFC700; */
      background: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
    }
    .navbar-mksystem a{
      color: #000; 
    }
    .navbar-mksystem a:hover,
    .navbar-mksystem a:active{
      background-color: #e7c01b !important;
      color: #fff;
    }
    .social-icon{
      background: #fff;
    }
    .header-page{
      background: url("<?php echo get_template_directory_child().'/inc/img/background/header-background.png'; ?>");
      border-bottom: 0 none !important;
      padding: 10px 0;
    }
    .footer-inner{
      background: #191919 url("<?php echo get_template_directory_child().'/inc/img/background/footer_background.png'; ?>") repeat-x scroll center top;
      border: medium none;
      padding: 50px 0;
    }
    .flexslider{
      max-height: 650px;
    }
    .navbar-default .navbar-nav > li > a.social-icon:hover, 
    .footer_social-wrapper a:hover{
      background: <?php echo get_theme_mod('color_mksystem_theme'); ?> !important;
    }
    .woocommerce #respond input#submit.alt, 
    .woocommerce a.button.alt, 
    .woocommerce button.button.alt, 
    .woocommerce input.button.alt{
      background-color: <?php echo get_theme_mod('color_mksystem_theme'); ?> !important;
      color: #000 !important;
    }
    .woocommerce #respond input#submit.alt:hover, 
    .woocommerce a.button.alt:hover, 
    .woocommerce button.button.alt:hover, 
    .woocommerce input.button.alt:hover{
      background-color: #e7c01b !important;
      color: #fff !important;
    }
    .btn-quote{
      background-color: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
      color: #000;
      font-weight: 600 !important;
      height: 31px;
      line-height: 11px !important;
      padding: 8px 14px !important;
    }
    .btn-quote:hover{
      background-color: #e7c01b;
      color: #fff;
    }
    .scroll-to-top:hover{
      background: <?php echo get_theme_mod('color_mksystem_theme'); ?> !important;
    }
    .cfa{
      background: <?php echo get_theme_mod('color_mksystem_theme'); ?> !important;
    }
    .content-map-text p{
      color: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
      font: 700 25px/25px Lato;
    }
    .copy-right a{
      color: <?php echo get_theme_mod('color_mksystem_theme'); ?> !important;
    }
    .btn-theme{
      background-color: #e7c01b;
      border-color: #e7c01b;
    }
    #searchsubmit{
      color: #000;
    }
    .main-content-area{
      background: <?php echo get_theme_mod('color_mksystem_fondo'); ?>;
    }
    .btn-default, .label-default, 
    .woocommerce #respond input#submit, 
    .woocommerce a.button, 
    .woocommerce button.button, 
    .woocommerce input.button{
      background-color: <?php echo get_theme_mod('color_mksystem_theme'); ?> !important;
      border-color: <?php echo get_theme_mod('color_mksystem_theme'); ?> !important;
      color: #000 !important;
    }
  </style>
<?php
}
add_action( 'wp_enqueue_scripts', 'mksystem_header_styles' );


/**
 * Mk system custom header
 */
function mksystem_custom_header_setup() {
  add_theme_support( 'custom-header', apply_filters( 'mksystem_custom_header_args', array(
    'width'                  => 320,
    'height'                 => 110
  ) ) );
}
add_action( 'after_setup_theme', 'mksystem_custom_header_setup' );


/**
 * Mk system slider
 */
function mksystem_featured_slider() {
    // if ( is_front_page() && of_get_option('dazzling_slider_checkbox') == 1 ) {
      echo '<div class="flexslider">';
        echo '<ul class="slides">';

          $count = of_get_option('dazzling_slide_number');
          $slidecat = of_get_option('dazzling_slide_categories');

            if ( $count && $slidecat ) {
            $query = new WP_Query( array( 'cat' => $slidecat, 'posts_per_page' => $count ) );
//            print_r($query);
            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();

              echo '<li>';
                if ( has_post_thumbnail() ) { // Check if the post has a featured image assigned to it.
                  the_post_thumbnail();
                }

                echo '<div class="flex-caption">';
                  echo '<a href="'. get_permalink() .'">';
                    if ( get_the_title() != '' ) echo '<h2 class="entry-title">'. get_the_title().'</h2>';
                    if ( get_the_excerpt() != '' ) echo '<div class="excerpt">' . get_the_excerpt() .'</div>';
                  echo '</a>';
                echo '</div>';

                endwhile;
              endif;

            } else {
                echo "Slider is not properly configured";
            }

            echo '</li>';
        echo '</ul>';
      echo ' </div>';
    // }
}

/**
 * Call for action button & text area
 */
function mksystem_call_for_action() {
  // if ( is_front_page() && of_get_option('w2f_cfa_text')!=''){
    echo '<div class="cfa">';
      echo '<div class="container">';
        echo '<div class="col-md-5">';
          echo '<span class="cfa-text"><i aria-hidden="true" class="fa fa-envelope"></i> &nbsp;&nbsp;Suscribase para novedades</span>';
          echo '</div>';
          echo '<div class="col-md-7">';
          echo do_shortcode('[ssm_form id="70"]');
          echo '</div>';
      echo '</div>';
    echo '</div>';
  // }
}


/**
 * Get all categories
 */
function mksystem_product_categories(){

  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 1;      // 1 for yes, 0 for no
  $pad_counts   = 1;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'child_of'     => 0,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
  $all_categories = get_categories( $args );
  $category_products = array();
  $subcategory = array();
  foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {

      $term_link = get_term_link($cat, 'product_cat');

      $category_products[$cat->term_id]['id'] = $cat->term_id;
      $category_products[$cat->term_id]['name'] = $cat->name;
      $category_products[$cat->term_id]['slug'] = $cat->slug;
      $category_products[$cat->term_id]['taxonomy'] = $cat->taxonomy;
      $category_products[$cat->term_id]['count'] = $cat->count;
      $category_products[$cat->term_id]['description'] = $cat->description;
      $category_products[$cat->term_id]['term_link'] = $term_link;

      $category_products[$cat->term_id]['childs'] = array();

      $category_id = $cat->term_id;
      $args2 = array(
              'taxonomy'     => $taxonomy,
              'child_of'     => 0,
              'parent'       => $category_id,
              'orderby'      => $orderby,
              'show_count'   => $show_count,
              'pad_counts'   => $pad_counts,
              'hierarchical' => $hierarchical,
              'title_li'     => $title,
              'hide_empty'   => $empty
      );
      $subcategoryx = get_categories( $args2 );
      $subcategory = array_merge($subcategory, $subcategoryx);

    }//end if
  }//end foreach

  if(count($subcategory) > 0){
    $i = 0;
    foreach ($subcategory as $subcat) {

      $term_link = get_term_link($subcat, 'product_cat');

      $category_products[$subcat->parent]['childs'][$i]['id'] = $subcat->term_id;
      $category_products[$subcat->parent]['childs'][$i]['name'] = $subcat->name;
      $category_products[$subcat->parent]['childs'][$i]['slug'] = $subcat->slug;
      $category_products[$subcat->parent]['childs'][$i]['taxonomy'] = $subcat->taxonomy;
      $category_products[$subcat->parent]['childs'][$i]['count'] = $subcat->count;
      $category_products[$subcat->parent]['childs'][$i]['description'] = $subcat->description;
      $category_products[$subcat->parent]['childs'][$i]['term_link'] = $term_link;
      $i++;
    }//end foreach
  }//end if
  
  return $category_products;
}


/**
 * Get all categories
 */
function mksystem_categories_list_html(){
  $categories_html = '';
  $category_products = mksystem_product_categories();
  if(count($category_products) > 0){
    $categories_html .= '<ul class="category-product nav">';
    foreach ($category_products as $category) {
      $span = (count($category['childs'])>0) ? '<span class="icon-subcategory glyphicon glyphicon-plus"></span>' : '';
      $categories_html .= '<li>'.$span.'<a href="'.$category['term_link'].'">'.$category['name'].'</a></li>';
      if(count($category['childs']) > 0){
        $categories_html .= '<ul class="subcategory-product nav">';
        foreach ($category['childs'] as $subcategory) {
          // $categories_html .= '<li><a href="'.home_url('/product-category/'.$subcategory['slug']).'"> > '.$subcategory['name'].'</li>';
          $categories_html .= '<li><a href="'.$subcategory['term_link'].'"> > '.$subcategory['name'].'</li>';
        }//end foreach
        $categories_html .= '</ul>';
      }//end fi
    }//end foreach
    $categories_html .= '</ul>';
  }//end if

  echo $categories_html;
}


/**
 * Get all categories for footer
 */
function mksystem_categories_list_footer(){
  $categories_html = '';
  $category_products = mksystem_product_categories();
  if(count($category_products) > 0){
    $items = 0;
    $categories_html .= '<ul class="nav footer-nav clearfix">';
    foreach ($category_products as $category) {
      if($items <= 9){
        $categories_html .= '<li class="menu-item"><a href="'.home_url('/product-category/'.$category['slug']).'">'.$category['name'].'</a></li>';
      }//end if
      $items++;
    }//end foreach
    $categories_html .= '</ul>';
  }//end if

  echo $categories_html;
}

/**
 * Get featured products
 */
function mksystem_featured_products(){
  echo do_shortcode('[featured_products per_page="12" columns="3"]');
}

/**
 * function to show the footer info, copyright information
 */
function mksystem_footer_info() {
?>
  <div class="copy-right">&copy; <?php echo bloginfo('name');?> <?php echo date_i18n('Y'); ?>
    <?php echo esc_html__(" - Desarrollado por","mksystem");?> 
    <a href="<?php echo esc_url("http://mksystemsoft.com","mksystem");?>" target="_blank"><?php echo esc_html__("MK System","mksystem");?></a> 
  </div>

<?php
}
/*
*
* Renombrando los tabs de productos
*
*/
function woo_rename_tabs( $tabs ) {

  $tabs['description']['title'] = __( 'Descripción' );    // Rename the description tab
  $tabs['reviews']['title'] = __( 'Comentarios' );        // Rename the reviews tab
  // $tabs['additional_information']['title'] = __( 'Product Data' ); // Rename the additional information tab
  return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );


/*
*
* Cambio de orden de los elementos en la ficha de producto de WooCommerce
*
*/

  remove_action( 'woocommerce_single_product_summary',
            'woocommerce_output_product_data_tabs', 50 );
    add_action( 'woocommerce_single_product_summary',
            'woocommerce_output_product_data_tabs', 30 );
 remove_action( 'woocommerce_single_product_summary',
            'woocommerce_template_single_add_to_cart', 30 );
    add_action( 'woocommerce_single_product_summary',
            'woocommerce_template_single_add_to_cart', 15 );

/*
*
* customizer 
*
*/

function mksystem_customizer_register( $wp_customize ) {

  /*
  *
  * Cambios de tema
  *
  */
  $wp_customize->add_setting('color_mksystem_theme',array(
    'default' => '#FFD800',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'color_mksystem_theme', array(
    'label'        => __( 'Color del tema <style>#accordion-section-dazzling_important_links, #accordion-section-dazzling_layout_options, #accordion-section-dazzling_action_options, #accordion-section-dazzling_typography_options, #accordion-section-dazzling_header_options, #accordion-section-dazzling_footer_options, #accordion-section-dazzling_social_options, #accordion-section-dazzling_other_options, #customize-control-header_textcolor, #customize-control-background_color{display:none !important;}</style>', 'mksystem' ),
    'section'    => 'colors',
    'settings'   => 'color_mksystem_theme',
  )));

  /*
  *
  * Cambios de fondo
  */
  $wp_customize->add_setting('color_mksystem_fondo',array(
    'default' => '#FFF',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'color_mksystem_fondo', array(
    'label'        => __( 'Color del Fondo <style> #customize-control-color_mksystem_cabecera, #accordion-section-background_image, #accordion-panel-widgets, #accordion-section-static_front_page{display:none !important;}</style>', 'mksystem' ),
    'section'    => 'colors',
    'settings'   => 'color_mksystem_fondo',
  )));

   /*
  *
  * Imagen de cabecera y pie de pagina
  */
  $wp_customize->add_setting('imagen_mksystem_pie_pagina',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagen_mksystem_pie_pagina' , array(
    'label' => __('Pie de página' , 'mksystem'),
    'section' => 'header_image',
    'settings' => 'imagen_mksystem_pie_pagina'
  )));

  /*
  *
  * Agregando opción: social links
  *
  */
  $wp_customize->add_section(
        'social_links',
        array(
            'title' => __('Social links', 'mksystem'),
            'priority' => 100
        )
    );
  $wp_customize->add_setting('social_facebook',array(
    'default' => __('http://facebook.com','mksystem')
  ));
  $wp_customize->add_control('social_facebook',array(
    'label' => __('Facebook','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_facebook',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_twitter',array(
    'default' => __('http://twitter.com','mksystem')
  ));
  $wp_customize->add_control('social_twitter',array(
    'label' => __('Twitter','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_twitter',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_instagram',array(
    'default' => __('http://instagram.com','mksystem')
  ));
  $wp_customize->add_control('social_instagram',array(
    'label' => __('Instagram','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_instagram',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_youtube',array(
    'default' => __('http://youtube.com','mksystem')
  ));
  $wp_customize->add_control('social_youtube',array(
    'label' => __('Youtube','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_youtube',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_linkedin',array(
    'default' => __('http://linkedin.com','mksystem')
  ));
  $wp_customize->add_control('social_linkedin',array(
    'label' => __('Linkedin','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_linkedin',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_vimeo',array(
    'default' => __('http://vimeo.com','mksystem')
  ));
  $wp_customize->add_control('social_vimeo',array(
    'label' => __('Vimeo','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_vimeo',
    'type'    => 'text'
  ));

  /*
  *
  * Publicidad 
  *
  */
  $wp_customize->add_section(
        'mksystem_publicidad',
        array(
            'title' => __('Publicidad', 'mksystem'),
            'priority' => 100
        )
    );
  $wp_customize->add_setting('Texto_1',array(
    'default' => __('Power Tools','mksystem')
  ));
  $wp_customize->add_control('Texto_1',array(
    'label' => __('Texto 1','mksystem'),
    'section' => 'mksystem_publicidad',
    'setting' => 'Texto_1',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('Texto_2',array(
    'default' => __('20% off','mksystem')
  ));
  $wp_customize->add_control('Texto_2',array(
    'label' => __('Texto 2','mksystem'),
    'section' => 'mksystem_publicidad',
    'setting' => 'Texto_2',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('Descripcion',array(
    'default' => __('Descripción','mksystem')
  ));
  $wp_customize->add_control('Descripcion',array(
    'label' => __('Descripción','mksystem'),
    'section' => 'mksystem_publicidad',
    'setting' => 'Descripcion',
    'type'    => 'textarea'
  ));
  $wp_customize->add_setting('Imagen_1',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Imagen_1' , array(
    'label' => __('Imagen 1' , 'mksystem'),
    'section' => 'mksystem_publicidad',
    'settings' => 'Imagen_1'
  )));


  $wp_customize->add_setting('Texto_1b',array(
    'default' => __('Power Tools','mksystem')
  ));
  $wp_customize->add_control('Texto_1b',array(
    'label' => __('Texto 1','mksystem'),
    'section' => 'mksystem_publicidad',
    'setting' => 'Texto_1b',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('Texto_2b',array(
    'default' => __('20% off','mksystem')
  ));
  $wp_customize->add_control('Texto_2b',array(
    'label' => __('Texto 2','mksystem'),
    'section' => 'mksystem_publicidad',
    'setting' => 'Texto_2b',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('Descripcionb',array(
    'default' => __('Descripcion','mksystem')
  ));
  $wp_customize->add_control('Descripcionb',array(
    'label' => __('Descripción','mksystem'),
    'section' => 'mksystem_publicidad',
    'setting' => 'Descripcionb',
    'type'    => 'textarea'
  ));
  $wp_customize->add_setting('Imagen_2',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Imagen_2' , array(
    'label' => __('Imagen 2' , 'mksystem'),
    'section' => 'mksystem_publicidad',
    'settings' => 'Imagen_2'
  )));

  /*
  *
  * Contactos
  *
  */
  $wp_customize->add_section(
        'mksystem_contacto',
        array(
            'title' => __('Contactos', 'mksystem'),
            'priority' => 100
        )
    );
  $wp_customize->add_setting('direccion',array(
    'default' => __('Jr. Paruro N° 1132 - Lima','mksystem')
  ));
  $wp_customize->add_control('direccion',array(
    'label' => __('Dirección','mksystem'),
    'section' => 'mksystem_contacto',
    'setting' => 'direccion',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('telefono1',array(
    'default' => __('(+51) 234-5678','mksystem')
  ));
  $wp_customize->add_control('telefono1',array(
    'label' => __('Teléfono','mksystem'),
    'section' => 'mksystem_contacto',
    'setting' => 'telefono1',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('telefono2',array(
    'default' => __('(+51) 234-5678','mksystem')
  ));
  $wp_customize->add_control('telefono2',array(
    'label' => __('Teléfono','mksystem'),
    'section' => 'mksystem_contacto',
    'setting' => 'telefono2',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('email',array(
    'default' => __('informes@ejemplo.com','mksystem')
  ));
  $wp_customize->add_control('email',array(
    'label' => __('Email','mksystem'),
    'section' => 'mksystem_contacto',
    'setting' => 'email',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('Mapa',array(
    'default' => __('informes@ejemplo.com','mksystem')
  ));
  $wp_customize->add_control('Mapa',array(
    'label' => __('Mapa','mksystem'),
    'section' => 'mksystem_contacto',
    'setting' => 'Mapa',
    'type'    => 'textarea'
  ));

   $wp_customize->add_setting('texto_cabecera',array(
    'default' => __('Texto por defecto','mksystem')
  ));
  $wp_customize->add_control('texto_cabecera',array(
    'label' => __('Texto de Cabecera','mksystem'),
    'section' => 'mksystem_contacto',
    'setting' => 'texto_cabecera',
    'type'    => 'textarea'
  ));


}


add_action('customize_register','mksystem_customizer_register');


function get_url_shop(){
  $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ));
  return $shop_page_url;
}
