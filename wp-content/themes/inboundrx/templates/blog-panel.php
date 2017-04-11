<div class="triptych-panel-title">
    <?php the_title(); ?>
</div>
<div class="triptych-panel-body" id="triptych-panel-<?php echo $panel_id; ?>-content" style="display:<?php echo $panel_display[0]; ?>;">
                              
<?php the_field('blog_preview'); ?>

<div class="triptych-panel-corner-lr">
  <?php if( get_field('blog_preview') ): ?>
  <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-info">Read on!</a>
  <?php endif; ?>
</div>

</div>

<div class="triptych-panel-body" id="triptych-panel-<?php echo $panel_id; ?>-image" style="display:<?php echo $panel_display[1]; ?>; background-image:url(<?php echo the_field('blog_preview_image'); ?>); background-size:cover;">
</div>