<?php
if ( ! function_exists( 'baindesign324_searchform_fullscreen' ) ) :
  function baindesign324_searchform_fullscreen() { ?>
    <aside id="searchform_fullscreen" class="section">
      <div class="container">
        <div class="outer-close search-toggle">
          <a class="close"><span></span></a>
        </div>
        <nav id="nav-bar-search" class="hidden-search nav-collapse">
          <h1>Search</h1>
          <?php get_search_form(); ?>
        </nav>
      </div>
    </aside>
  <?php  }
endif;