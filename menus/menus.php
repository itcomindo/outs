<?php
defined('ABSPATH') || exit;

/**
 * register topbar menu
 * horizontal menu
 */

function register_topbar_menu() {
    register_nav_menu('topbar-menu', 'Topbar Menu');
}
add_action( 'init', 'register_topbar_menu' );

// create topbar menu
function mnmenu_show_topbar_menu() {
    wp_nav_menu( array(
        'theme_location' => 'topbar-menu',
        'container' => 'nav',
        'container_id' => 'topbarMenu',
        'container_class' => 'horizontal',
        'menu_id' => 'topbar-menu__list',
        'menu_class' => 'horizontalMenus',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ) );
}

/**
 * register header menu
 * horizontal menu
*/
function register_header_menu() {
    register_nav_menu('header-menu', 'Header Menu');
}
add_action( 'init', 'register_header_menu' );

// create header menu
function mnmenu_show_header_menu() {
    wp_nav_menu( array(
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'container_id' => 'headerMenu',
        'container_class' => 'horizontal vertical',
        'menu_id' => 'header-menu__list',
        'menu_class' => 'horizontalMenus',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ) );
}



/**
 * register footer menu
 * vertical menu
*/
function register_footer_menu() {
    register_nav_menu('footer-menu', 'Footer Menu');
}
add_action( 'init', 'register_footer_menu' );
// create footer menu vertical menu
function mnmenu_show_footer_menu() {
    wp_nav_menu( array(
        'theme_location' => 'footer-menu',
        'container' => 'nav',
        'container_id' => 'footerMenu',
        'container_class' => 'vertical',
        'menu_id' => 'footer-menu__list',
        'menu_class' => 'verticalMenus',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ) );
}