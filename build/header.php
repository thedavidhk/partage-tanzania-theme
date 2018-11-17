<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Partage_Tanzania
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header id="masthead" class="site-header">
      <div class="site-branding">
        <?php
  			the_custom_logo();
  			if ( is_front_page() && is_home() ) :
  				?>
  				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  				<?php
  			else :
  				?>
  				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
  				<?php
  			endif;
        $partage_tanzania_description = get_bloginfo( 'description', 'display' );
        if ( $partage_tanzania_description || is_customize_preview() ) :
          ?>
          <p class="site-description"><?php echo $partage_tanzania_description; ?></p>
        <?php endif; ?>
      </div><!-- .site-branding -->
      <nav id="site-navigation" class="main-navigation">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          ) );
        ?>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
