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
            "background": "#000000",
            "text": "#ffffff"
          },
          "button": {
            "background": "#ffffff",
            "text": "#000000"
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