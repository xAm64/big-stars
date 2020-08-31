<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'align-wide' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'editor-styles' );
function bigStars_sidebar() {
    register_sidebar([
        'name' => 'principal',
        'id' => 'bigstars-principal',
        'description' => 'La barre principale',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ]);

    register_sidebar([
        'name' => 'secondaire',
        'id' => 'bigstars-secondaire',
        'description' => 'La barre secondaire',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ]);
}

add_action ('widgets_init', 'bigStars_sidebar');
register_nav_menus(array('Top' => 'Navigation principale'));