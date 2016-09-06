<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">


	<div class="custom-header-page">
		<div class="container">
			<div class="row">
				<nav id="header_page" class="navbar navbar-default header-page">
					<div class="col-md-7 col-sm-7 col-xs-12">
						<span style="color:#fff;">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
						</span>
			  		</div>
					<div class="col-md-5 col-sm-5 col-xs-12">
						<?php get_search_form(); ?>
					</div>

					<div class="navbar-header" style="display: none">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					    <span class="sr-only"><?php _e( 'Toggle navigation', 'dazzling' ); ?></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					  </button>

						<?php if( get_header_image() != '' ) : ?>

							<div id="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
							</div><!-- end of #logo -->

						<?php endif; // header image was removed ?>

						<?php if( !get_header_image() ) : ?>

							<div id="logo">
								<span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
							</div><!-- end of #logo -->
			            <?php $description = get_bloginfo( 'description', 'display' );
			            if ( $description || is_customize_preview() ) : ?>
			                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			            <?php
			            endif; ?>

						<?php endif; // header image was removed (again) ?>

					</div>
					<div class="header-rigth" style="display:none">
						<?php mksystem_custom_links(); ?>
						<?php mksystem_secondary_menu_header(); ?>
					</div>
					<div class="nav navbar-nav nav-search col-md-4" style="display:none">
						<?php get_search_form(); ?>
					</div>
				</nav><!-- .site-navigation -->
			</div><!--.row-->
		</div><!--.container-->
	</div><!--.custom-header-->
	
	<div class="custom-navbar">
		<div class="container">
			<div class="row">
				<nav id="header_nav" class="navbar navbar-mksystem" role="navigation">
					<div class="col-md-2 col-sm-2 col-xs-12">
						
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only"><?php _e( 'Toggle navigation', 'dazzling' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php if( get_header_image() != '' ) : ?>

							<div id="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
							</div><!-- end of #logo -->

						<?php endif; // header image was removed ?>

						<?php if( !get_header_image() ) : ?>

							<div id="logo">
								<span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
							</div><!-- end of #logo -->
			            <?php $description = get_bloginfo( 'description', 'display' );
			            if ( $description || is_customize_preview() ) : ?>
			                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			            <?php
			            endif; ?>

						<?php endif; // header image was removed (again) ?>

					</div>
					<div class="col-md-10 col-sm-10 col-xs-12">
						<?php mksystem_header_menu(); ?>	
					</div>
				</nav><!--.nav-->

			</div><!--.row-->
		</div><!--.container-->
	</div><!--.custom-header-->



