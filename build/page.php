<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Partage_Tanzania
 */

get_header();
?>

<main id="main" class="main-content">

  <?php
  /* Start the Loop */
  while ( have_posts() ) :
    the_post();

    /*
     * Include the Post-Type-specific template for the content.
     * Add a file called content-myposttype.php for post type 'myposttype'
     */
    get_template_part( 'template-parts/content', 'page' );

  endwhile;
  ?>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
