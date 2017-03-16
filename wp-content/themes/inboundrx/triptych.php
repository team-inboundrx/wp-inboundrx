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
	    <?php if( get_field('triptych_title') ): ?>
        <h2><?php the_field('triptych_title'); ?></h2>
      <?php endif; ?>
	    <?php if( have_rows('triptych_panel') ): ?>
	       <?php $panel_id = 0; ?>
	       <div class="triptych-row">
	           <?php while ( have_rows('triptych_panel') && $panel_id <= 2 ) : the_row(); ?>
	               <?php $panel_id++; ?>
                    <div class="triptych">
                      <?php if( get_sub_field('triptych_panel_image') && get_sub_field('triptych_panel_modal_content') ) {
                          $panel_display = array('none','inline',' triptych-panel-clickable');
                        } else {
                          $panel_display = array('inline','none','');
                        }
                        ?>
                        <div class="<?php if ($panel_id == 1) {
                              echo "triptych-panel-left";
                            } elseif ($panel_id == 2) {
                              echo "triptych-panel-middle";
                            } else {
                              echo "triptych-panel-right";
                            } ?>">
                            
                            
                            <?php if( get_sub_field('triptych_panel_modal_content') ): ?>
                              <div class="modal fade" id="triptych-panel-<?php echo $panel_id; ?>-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"><?php the_sub_field('triptych_panel_title'); ?></h5>
                                    </div>
                                    <div class="modal-body">
                                      <?php echo the_sub_field('triptych_panel_modal_content'); ?>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php endif; ?>
                            
                          <?php include(locate_template('templates/content-panel.php')); ?>

                        </div>
                    </div>
        	    <?php endwhile; ?>
           </div>
        <?php endif; ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php if ( get_the_content() ) { ?>
            <div class="triptych-panel-title" style="margin-top:35px;"><?php echo the_title(); ?></div>
          <div class="triptych-panel-body" style="height:auto !important;">
              <?php the_content(); ?>
          </div>
          <?php }; ?>
        <?php endwhile; endif; ?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
