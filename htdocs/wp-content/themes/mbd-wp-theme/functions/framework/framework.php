<?php
require get_stylesheet_directory() . '/functions/framework/inc/framework-misc.php';
require get_stylesheet_directory() . '/functions/framework/inc/init/theme_setup.php';
require get_stylesheet_directory() . '/functions/framework/inc/templates/template-media-object.php';
require get_stylesheet_directory() . '/functions/framework/inc/templates/template-mailchimp-form-compact.php';
require get_stylesheet_directory() . '/functions/framework/inc/templates/template-next-event.php';
require get_stylesheet_directory() . '/functions/framework/inc/footer/menu_footer.php';
require get_stylesheet_directory() . '/functions/framework/inc/footer/site_info.php';
require get_stylesheet_directory() . '/functions/framework/inc/footer/widget-area.php';
require get_stylesheet_directory() . '/functions/framework/inc/header/branding-title.php';
require get_stylesheet_directory() . '/functions/framework/inc/header/favicons.php';
require get_stylesheet_directory() . '/functions/framework/inc/header/head_content.php';
require get_stylesheet_directory() . '/functions/framework/inc/header/menu-mmenu.php';
require get_stylesheet_directory() . '/functions/framework/inc/header/menu-responsive.php';
require get_stylesheet_directory() . '/functions/framework/inc/header/menu-standard.php';
require get_stylesheet_directory() . '/functions/framework/inc/header/progress-bar.php';
require get_stylesheet_directory() . '/functions/framework/inc/header/search-bar.php';
require get_stylesheet_directory() . '/functions/framework/inc/styles/styles.php';
require get_stylesheet_directory() . '/functions/framework/inc/scripts/scripts.php';
require get_stylesheet_directory() . '/functions/framework/inc/header/toggle-search.php';
require get_stylesheet_directory() . '/functions/framework/inc/blog/intro-blog.php';
require get_stylesheet_directory() . '/functions/framework/inc/blog/featured-post.php';
require get_stylesheet_directory() . '/functions/framework/inc/modules/module-featured-cpt-book.php';
require get_stylesheet_directory() . '/functions/framework/inc/modules/module-featured-cpt.php';
require get_stylesheet_directory() . '/functions/framework/inc/modules/module-secondary-content.php';
// require get_stylesheet_directory() . '/functions/framework/inc/queries/offset.php';
require get_stylesheet_directory() . '/functions/framework/inc/wrappers/wrappers.php';
require get_stylesheet_directory() . '/functions/framework/inc/misc/cookie_notice.php';
require get_stylesheet_directory() . '/functions/framework/inc/misc/social-links.php';
require get_stylesheet_directory() . '/functions/framework/inc/misc/offcanvas-nav.php';
require get_stylesheet_directory() . '/functions/framework/inc/misc/template-tags.php';
require get_stylesheet_directory() . '/functions/framework/inc/misc/searchform-fullscreen.php';
require get_stylesheet_directory() . '/functions/framework/inc/template-tags/search-form.php';
require get_stylesheet_directory() . '/functions/framework/inc/third-party/mmenu/mmenu.php';
require get_stylesheet_directory() . '/functions/framework/inc/hooks.php';

if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] )
	require get_stylesheet_directory() . '/functions/framework/inc/misc/featured-content.php';