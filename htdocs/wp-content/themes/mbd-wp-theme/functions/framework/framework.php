<?php
require get_template_directory() . '/functions/framework/inc/framework-misc.php';
require get_template_directory() . '/functions/framework/inc/init/theme_setup.php';
require get_template_directory() . '/functions/framework/inc/templates/template-media-object.php';
require get_template_directory() . '/functions/framework/inc/templates/template-next-event.php';


require get_template_directory() . '/functions/framework/inc/header/header.php';
require get_template_directory() . '/functions/framework/inc/footer/footer.php';
require get_template_directory() . '/functions/framework/inc/styles/styles.php';
require get_template_directory() . '/functions/framework/inc/scripts/scripts.php';


require get_template_directory() . '/functions/framework/inc/blog/intro-blog.php';
require get_template_directory() . '/functions/framework/inc/blog/featured-post.php';
// --
require get_template_directory() . '/functions/framework/inc/menus/account.php';
// --
require get_template_directory() . '/functions/framework/inc/modules/module-featured-cpt-book.php';
require get_template_directory() . '/functions/framework/inc/modules/module-featured-cpt.php';
require get_template_directory() . '/functions/framework/inc/modules/module-secondary-content.php';
// require get_template_directory() . '/functions/framework/inc/queries/offset.php';

require get_template_directory() . '/functions/framework/inc/wrappers/wrappers.php';
require get_template_directory() . '/functions/framework/inc/misc/misc.php';

require get_template_directory() . '/functions/framework/inc/template-tags/latest-posts.php';
require get_template_directory() . '/functions/framework/inc/template-tags/search-form.php';
require get_template_directory() . '/functions/framework/inc/third-party/mmenu/mmenu.php';
require get_template_directory() . '/functions/framework/inc/hooks.php';

if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] )
	require get_template_directory() . '/functions/framework/inc/misc/featured-content.php';