<?php

/**
 * Plug into existing functions or roll your own!
 */

require get_stylesheet_directory() . '/functions/custom/inc/hooks_custom.php';
require get_stylesheet_directory() . '/functions/custom/inc/webfonts/fonts_typekit.php';
require get_stylesheet_directory() . '/functions/custom/inc/webfonts/fonts_google.php';


/*
 *  Add custom class to body
 */
function custom324_body_classes( $classes ) {
  
    global $post;

    $classes[] = 'custom-theme-body-class';
    $classes[] = 'with-sidebar';
    $classes[] = 'right-sidebar';

    return $classes;
}


function custom324_dequeue_styles() {
    // wp_dequeue_style( 'algolia-instantsearch' );
}

function foobot324_comments() { ?>
    <div id="comments" class="section ">
        <div class="container ">
            <?php comments_template(); ?>
        </div><!-- .container  -->
    </div><!-- #comments  -->   
<?php }

function foobot324_article_header() { ?>
    <header id="article-header">
        <section>
            <h1><?php the_title(); ?></h1>

            <div class="featured-image">
                <?php echo get_the_post_thumbnail(); ?>
            </div>

            <footer class="section-footer">
                <?php echo baindesign324_post_meta(); ?>
            </footer> 
 
        </section>
    </header><!-- #article-header .section -->              
<?php }



/**
 * Custom Readmore
 */
if ( ! function_exists( 'baindesign324_custom_ellipsis_replacement' ) ) :
    function baindesign324_custom_ellipsis_replacement() {
        return '...';
    }
endif;


/**
 * Blog Category Filter
 */
if ( ! function_exists( 'baindesign324_blog_category_filter' ) ) :
    function baindesign324_blog_category_filter($tax) {
        $categories = get_terms($tax);
        // var_dump($tax); 
        // var_dump($categories); 
    ?>
        <div class="categories">
            <div class="in">
                <h5>Categories</h5>
                <ul id="category-menu">
                    <li>
                        <button class="all is-checked" data-filter="*">
                            All
                        </button>
                    </li>
                    <?php foreach ( $categories as $cat ) { ?>
                        <li>
                            <button class="<?php echo $cat->slug; ?>" data-filter=".<?php echo $tax; ?>-<?php echo $cat->slug; ?>" href="#">
                                <?php echo $cat->name; ?>
                            </button>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php }
endif;

/**
 * Custom Readmore
 */
if ( ! function_exists( 'baindesign324_custom_excerpt_readmore' ) ) :
    function baindesign324_custom_excerpt_readmore( $output ) {
        global $post;
        return $output . ' <a href="' . get_permalink( $post->ID ) . '" title="Read more"><span class="">Read more</span><i class="fa"></i></a>';
    }
endif;

function baindesign324_load_cat_posts () {
    $cat_id = $_POST[ 'cat' ];
         $args = array (
        'cat' => $cat_id,
        'order' => 'DESC'

    );
    $posts = get_posts( $args );
            global $post;
    ob_start ();
    foreach ( $posts as $post ) {
    setup_postdata( $post ); ?>
<div class="post">
    <div class="in">
        <div class="post__image">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="post__title">
            <h4>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h4>
        </div>
        <div class="post__content">
            <?php the_excerpt(); ?>
        </div>
        <div class="post__readmore">
            <a href="<?php the_permalink(); ?>" class="btn btn--brand btn--block">Read More ></a>
        </div>
    </div>
    </div>
    <?php } wp_reset_postdata();
$response = ob_get_contents();
ob_end_clean();

echo $response;
die(1);
}
/**
 * Header Top Open Wrapper
 */
function baindesign324_header_top_wrapper_open( ) {
    echo '<header id="masthead" class="with-progress-bar">';
    echo '<div class="site-header section" role="banner">';
    echo '<div class="container">';
}
/**
 * Header Top Close Wrapper
 */
function baindesign324_header_top_wrapper_close( ) {
    echo '</div><!-- .container -->';
    echo '</div><!-- .section -->';
    baindesign324_progress_bar();
    echo '</header>';
}

/**
 * foobot324_mmenu_toggle_static
 */

function baindesign324_mmenu_toggle_static() {
    # Overrule default toggle for Foobot
    ?>

    <div id="offcanvas-nav-trigger" class="Fixed nav-toggle Sticky background-check">
        <button id="offcanvas-main-nav-trigger" class="hamburger hamburger--collapse" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
    </div>
    <?php
}

function custom324_mmenu_mhead() { ?>

    <header id="masthead-mobile" class="mh-head Sticky with-progress-bar headhesive custom324_mmenu_mhead">
       <span class="mh-btns-left">
            <a class="mh-hamburger" href="#menu"></a>
       </span>
       <span class="mh-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo $blog_title; ?> | Home"><div class="mobile-menu-logo mh-logo"><img src='https://placekitten.com/g/200/300'/></a></div></span>
       <span class="mh-btns-right">
             <?php echo baindesign324_toggle_search(); ?>
          </span>
    </header>

<?php }

/**
 * foobot search
 */

function baindesign324_toggle_search() { ?>
    <a href="/?s" id="search-toggle" class="js-toggle default search-toggle toggle-search-default" aria-hidden="false"><span><span class="visuallyhidden">Search</span></span></a>
<?php  }