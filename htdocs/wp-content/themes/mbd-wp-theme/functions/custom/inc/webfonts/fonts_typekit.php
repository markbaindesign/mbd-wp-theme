<?php 

function custom324_typekit_inline() {
    
    /* Conditionally loads the Typekit script inline if fonts are enqueued */
    
    if ( wp_script_is( 'foobot-typekit', 'done' ) ) { 
        echo '<script type="text/javascript">try{Typekit.load({ async: true });}catch(e){}</script>'; 
    }
}