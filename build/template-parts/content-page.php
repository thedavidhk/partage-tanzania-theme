<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Partage_Tanzania
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <section class="page-section <?php echo get_post_field( 'post_name' ); ?>-section1">
      <?php
      the_content();
      ?>
    </section>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
