<?php
/**
 * Template Name: Diptych
 * @package WordPress
 * @subpackage Bosch
 * @since Bosch 0.6
 */
get_template_part('templates/page', 'header'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if ( get_the_content() ) { ?>
  <div class="triptych-panel-title"><?php echo the_title(); ?></div>
<div class="triptych-panel-body" style="height:auto !important;">
    <?php the_content(); ?>
</div>
<?php }; ?>
<?php endwhile; endif; ?>