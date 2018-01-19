<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('parts/content', 'page'); ?>
<?php endwhile; ?>
