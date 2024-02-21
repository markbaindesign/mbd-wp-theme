jQuery(document).ready(function($) {
  /*
   =====================================================

   Back to top scrolling

   =====================================================
   */

  // scroll body to 0px on click
  $("#back-to-top a").click(function() {
    $("body,html").animate(
      {
        scrollTop: 0
      },
      800
    );
    return false;
  });
});
