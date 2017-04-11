<?php
/**
 * Template Name: Diptych
 * @package WordPress
 * @subpackage Bosch
 * @since Bosch 0.6
 */
get_template_part('templates/page', 'header'); ?>

<?php
/**
 * Template Name: Triptych
 * @package WordPress
 * @subpackage Bosch
 * @since Bosch 0.1
 */
get_template_part('templates/page', 'header'); ?>

<div id="primary">
	<main id="main" class="site-main" role="main">
	  <h2>The InboundRx Blog</h2>
	    <?php if( have_posts() ): ?>
	       <?php $panel_id = 0; ?>
	       <div class="triptych-row">
	           <?php while ( have_posts() ) : the_post(); ?>
	               <?php $panel_id++; ?>
                    <div class="triptych">
                      <?php if( get_field('blog_preview_image') ) {
                          $panel_display = array('none','inline');
                        } else {
                          $panel_display = array('inline','none');
                        }
                        ?>
                        <div class="<?php if ($panel_id == 1 || $panel_id % 4 == 0) {
                              echo "triptych-panel-left";
                            } elseif ($panel_id == 2) {
                              echo "triptych-panel-middle";
                            } else {
                              echo "triptych-panel-right";
                            } ?>">
                            
                          <?php include(locate_template('templates/blog-panel.php')); ?>

                        </div>
                    </div>
        	    <?php endwhile; ?>
           </div>
        <?php endif; ?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
