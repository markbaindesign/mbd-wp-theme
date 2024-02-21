<?php

// Adds some (default) fonts via Google Fonts

if (!function_exists('bd324_add_google_fonts')) :
   function bd324_add_google_fonts()
   { ?>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@0;1&display=swap" rel="stylesheet">
   <?php }
endif;