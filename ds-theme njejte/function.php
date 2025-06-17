<?php
function ds_enqueue_assets() {Add commentMore actions
    wp_enqueue_style('main-style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','ds_enqueue_assets');

?>