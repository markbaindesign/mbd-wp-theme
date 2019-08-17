<?php

/**
 * Plug into existing functions or roll your own!
 */


require get_stylesheet_directory() . '/functions/custom/inc/styles/styles.php';
require get_stylesheet_directory() . '/functions/custom/inc/scripts/scripts.php';
require get_stylesheet_directory() . '/functions/custom/inc/webfonts/fonts_typekit.php';
require get_stylesheet_directory() . '/functions/custom/inc/webfonts/fonts_google.php';
require get_stylesheet_directory() . '/functions/custom/inc/hooks_custom.php';

/**
 * Unhook default theme hooks
 */

function baindesign324_child_remove_action(){
    remove_action( 'baindesign324_header_top', 'baindesign324_mmenu_mhead', 5 );
    remove_action( 'baindesign324_pre_header', 'baindesign324_pre_header_wrapper_open', 10 );
    remove_action( 'baindesign324_header_top', 'baindesign324_menu_standard', 30 );
    remove_action( 'baindesign324_header_top', 'baindesign324_mmenu_toggle', 40 );
    remove_action( 'baindesign324_header_top', 'baindesign324_mmenu_toggle_static', 40 );
    remove_action( 'baindesign324_header_top', 'baindesign324_landing_page_menu', 50 );
    remove_action( 'baindesign324_header_top', 'baindesign324_toggle_search', 60 );
    remove_action( 'baindesign324_header_top', 'baindesign324_search_bar', 70 );
    remove_action( 'baindesign324_pre_header', 'baindesign324_menu_account', 50 );
    remove_action( 'baindesign324_pre_header', 'baindesign324_social_links', 60 );
    remove_action( 'baindesign324_pre_header', 'baindesign324_pre_header_wrapper_close', 100 );
    // ---
    remove_action( 'baindesign324_header_bottom', 'baindesign324_cover', 20 );
    // ---
    remove_action( 'baindesign324_post_header', 'baindesign324_cover', 20  );
    remove_action( 'baindesign324_pre_content', 'baindesign324_pre_content' );
    // ---
    remove_action( 'baindesign324_pre_colophon', 'baindesign324_form_contact', 10 );
    remove_action( 'baindesign324_pre_colophon', 'baindesign324_mailchimp_form', 20 );
    remove_action( 'baindesign324_pre_colophon', 'baindesign324_template_mailchimp_compact', 20 );
    // ---
    remove_action( 'baindesign324_colophon', 'baindesign324_footer_menu', 5 );
}

function baindesign324_search_bar() { ?>
    <nav id="nav-bar-search" class="">
        <?php get_search_form(); ?>
    </nav>
<?php  }

function baindesign324_site_info() {
    $copyright_notice=get_field( 'copyright_notice', 'option' );
?>
    <ul class="site-info">      
        <li class="copyright">
            <i class="far fa-copyright"></i> <?php echo $copyright_notice; ?>
        </li>
    </ul><!-- .site-info -->
<?php }

function baindesign324_social_links() {

    if( have_rows('social_media_links', 'option') ):
        echo '<ul class="social-media-links">';
        while ( have_rows('social_media_links', 'option') ) : the_row();
            $content='<li><a target="_blank" href="' . get_sub_field( 'account_url','option' ) . '" ';
            $content.='"title="'.get_sub_field( 'service_name','option' ).'" ';
            $content.='"><i class="fa '.get_sub_field( 'icon_class','option' ).'"></i><span class="visuallyhidden">'.get_sub_field( 'service_name','option' ).'</span></li>';
            echo $content;
        endwhile;
        echo '</ul>';
    else :
        echo '<!-- No social media accounts found! -->';
        echo '<!-- Add an account via Theme Settings -->';
    endif;
}

/*
 *  Add custom class to body
 */
function baindesign324_child_body_classes( $classes ) {
  
    global $post;

    $classes[] = 'baindesign324_child_body-class';
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

/**
 * foobot search
 */

function baindesign324_toggle_search() { ?>
    <a href="/?s" id="search-toggle" class="js-toggle default search-toggle toggle-search-default" aria-hidden="false"><span><span class="visuallyhidden">Search</span></span></a>
<?php  }