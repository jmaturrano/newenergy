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
  $html .= '<li class="menu-item"><a class="social-icon" href="#"><i aria-hidden="true" class="fa fa-facebook fa-lg"></i></a></li>';
  $html .= '<li class="menu-item"><a class="social-icon" href="#"><i aria-hidden="true" class="fa fa-twitter fa-lg"></i></a></li>';
  $html .= '<li class="menu-item"><a class="social-icon" href="#"><i aria-hidden="true" class="fa fa-instagram fa-lg"></i></a></li>';
  $html .= '<li class="menu-item"><a class="social-icon" href="#"><i aria-hidden="true" class="fa fa-linkedin fa-lg"></i></a></li>';
  $html .= '<li class="menu-item"><a class="social-icon" href="#"><i aria-hidden="true" class="fa fa-youtube fa-lg"></i></a></li>';
  $html .= '<li class="menu-item"><a class="social-icon" href="#"><i aria-hidden="true" class="fa fa-vimeo fa-lg"></i></a></li>';

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
    var header = jQuery("#header_nav");
    jQuery(document).scroll(function(e) {
        if(jQuery(this).scrollTop() > jQuery("#header_page").height()) {
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
      background: #FFC700; 
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
      background: url('http://newenergy.mksystemgroup.com/wp-content/uploads/2016/08/header-background.png');
      border-bottom: 0 none !important;
      padding: 10px 0;
    }
    .footer-inner{
      background: #191919 url("http://newenergy.mksystemgroup.com/wp-content/uploads/2016/08/footer_background.png") repeat-x scroll center top;
      border: medium none;
      padding: 50px 0;
    }
    .flexslider{
      max-height: 650px;
    }
    .navbar-default .navbar-nav > li > a.social-icon:hover, 
    .footer_social-wrapper a:hover{
      background: #ffc700 !important;
    }
    .woocommerce #respond input#submit.alt, 
    .woocommerce a.button.alt, 
    .woocommerce button.button.alt, 
    .woocommerce input.button.alt{
      background-color: #FFC700 !important;
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
      background-color: #ffc700;
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
      background: #ffc700 !important;
    }
    .cfa{
      background: #FFC700 !important;
    }
    .content-map-text p{
      color: #FFC700;
      font: 700 25px/25px Lato;
    }
    .copy-right a{
      color: #FFC700 !important;
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
      $category_products[$cat->term_id]['id'] = $cat->term_id;
      $category_products[$cat->term_id]['name'] = $cat->name;
      $category_products[$cat->term_id]['slug'] = $cat->slug;
      $category_products[$cat->term_id]['taxonomy'] = $cat->taxonomy;
      $category_products[$cat->term_id]['count'] = $cat->count;
      $category_products[$cat->term_id]['description'] = $cat->description;
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
    $category_products[$subcat->parent]['childs'][$i]['id'] = $subcat->term_id;
    $category_products[$subcat->parent]['childs'][$i]['name'] = $subcat->name;
    $category_products[$subcat->parent]['childs'][$i]['slug'] = $subcat->slug;
    $category_products[$subcat->parent]['childs'][$i]['taxonomy'] = $subcat->taxonomy;
    $category_products[$subcat->parent]['childs'][$i]['count'] = $subcat->count;
    $category_products[$subcat->parent]['childs'][$i]['description'] = $subcat->description;
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
      $categories_html .= '<li>'.$span.'<a href="'.home_url('/product-category/'.$category['slug']).'">'.$category['name'].'</a></li>';
      if(count($category['childs']) > 0){
        $categories_html .= '<ul class="subcategory-product nav">';
        foreach ($category['childs'] as $subcategory) {
          $categories_html .= '<li><a href="'.home_url('/product-category/'.$subcategory['slug']).'"> > '.$subcategory['name'].'</li>';
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
    <a href="<?php echo esc_url("javascript:;","mksystem");?>" target="_blank"><?php echo esc_html__("MK System","mksystem");?></a> 
  </div>

<?php
}