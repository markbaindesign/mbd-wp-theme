<?php
if ( ! function_exists( 'baindesign324_cookie_notice' ) ) :
  function baindesign324_cookie_notice() { ?>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
      window.addEventListener("load", function(){
      window.cookieconsent.initialise({
        "palette": {
          "popup": {
            "background": "#2c3e50",
            "text": "#ffffff"
          },
          "button": {
            "background": "#faca65",
            "text": "#3d1717"
          }
        },
        "position": "top",
        "static": true,
          "content": {
          "dismiss": "OK"
        },

      })});
    </script>
    <?php }
endif;