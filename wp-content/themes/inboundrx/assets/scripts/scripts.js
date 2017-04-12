/*global jQuery*/

(function($) {
   
   $('#menu-main-menu li:last-of-type > a').click(function() {
      $('#cta-modal').modal('show');
    });

   $('.triptych-panel-clickable').click(function() {
      $(this).parent().find('.modal').modal('show');
    });
    
   $('.triptych-panel-unflip').click(function() {
      $(this).parent().parent().parent().find('.triptych-panel-body').toggle();
   });

})(jQuery);
