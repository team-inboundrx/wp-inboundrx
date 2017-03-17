<div class="triptych-panel-title  <?php echo $panel_display[2]; ?>">
    <?php the_sub_field('triptych_panel_title'); ?>
</div>
<div class="triptych-panel-body" id="triptych-panel-<?php echo $panel_id; ?>-content" style="display:<?php echo $panel_display[0]; ?>;">
                              
<?php the_sub_field('triptych_panel_content'); ?>

<div class="triptych-panel-corner-ll">
  <?php if( get_sub_field('triptych_panel_page_link') ): ?>
  <a href="<?php the_sub_field('triptych_panel_page_link'); ?>" class="btn btn-sm btn-info"><?php the_sub_field('triptych_panel_page_link_button'); ?></a>
  <?php endif; ?>
</div>

</div>

<div class="triptych-panel-body <?php echo $panel_display[2]; ?>" id="triptych-panel-<?php echo $panel_id; ?>-image" style="display:<?php echo $panel_display[1]; ?>; background-image:url(<?php echo the_sub_field('triptych_panel_image'); ?>)">
</div>