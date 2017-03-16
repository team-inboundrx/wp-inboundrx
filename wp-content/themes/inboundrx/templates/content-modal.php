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