<?php

function udemy_widgets_init() {
    register_sidebar([
        'name'          => __( 'My first theme sidebar', 'udemy' ),
        'id'            => 'udemy_sidebar',
        'description'   => 'Sidebar for tutorial',
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ]);
}