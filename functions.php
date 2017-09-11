<?php

function neowp_menus() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'neowp_menus' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

?>