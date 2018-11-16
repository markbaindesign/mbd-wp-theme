<?php

require get_template_directory() . '/framework/inc/markup.php';
require get_template_directory() . '/framework/inc/init/theme_setup.php';
require get_template_directory() . '/framework/inc/templates/template-media-object.php';
require get_template_directory() . '/framework/inc/templates/template-next-event.php';


require get_template_directory() . '/framework/inc/header/header.php';
require get_template_directory() . '/framework/inc/styles/styles.php';

require get_template_directory() . '/framework/inc/admin/functions_admin.php';
require get_template_directory() . '/framework/inc/forms/functions_forms.php';
require get_template_directory() . '/framework/inc/media/functions_media.php';
require get_template_directory() . '/framework/inc/modules/functions_modules.php';
require get_template_directory() . '/framework/inc/nav/functions_nav.php';
require get_template_directory() . '/framework/inc/posts/functions_posts.php';
require get_template_directory() . '/framework/inc/scripts/functions_scripts.php';
require get_template_directory() . '/framework/inc/footer/functions_footer.php';

// require get_template_directory() . '/framework/inc/queries/offset.php';

require get_template_directory() . '/framework/inc/wrappers/wrappers.php';
require get_template_directory() . '/framework/inc/misc/misc.php';

require get_template_directory() . '/framework/inc/template-tags/template-tags.php';
require get_template_directory() . '/framework/inc/third-party/mmenu/mmenu.php';
require get_template_directory() . '/framework/inc/hooks.php';

if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] )
	require get_template_directory() . '/framework/inc/misc/featured-content.php';