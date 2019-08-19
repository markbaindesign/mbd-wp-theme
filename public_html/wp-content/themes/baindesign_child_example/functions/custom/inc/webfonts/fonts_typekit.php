<?php 

function baindesign324_child_typekit_inline() {
    
    /* Conditionally loads the Typekit script inline if fonts are enqueued */
    
    if ( wp_script_is( 'baindesign324_child_typekit', 'done' ) ) { 
        echo '<script type="text/javascript">try{Typekit.load({ async: true });}catch(e){}</script>'; 
    }
}