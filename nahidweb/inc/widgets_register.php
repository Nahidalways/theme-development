<?php
// Sidebar Register Function

function nahid_widgets_register(){
  register_sidebar( array(
    'name' =>__('Main Widget Area', 'nahidhasan'),
    'id' => 'sidebar-1',
    'description' =>__('Appears in the sidebar in blog page and also other page', 'nahidhasan'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ) );
  register_sidebar( array(
    'name' =>__('Footer 1', 'nahidhasan'),
    'id' => 'footer-1',
    'description' =>__('Appears in the sidebar in blog page and also other page', 'nahidhasan'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ) );
  register_sidebar( array(
    'name' =>__('Footer 2', 'nahidhasan'),
    'id' => 'footer-2',
    'description' =>__('Appears in the sidebar in blog page and also other page', 'nahidhasan'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ) );
  register_sidebar( array(
    'name' =>__('Footer 3', 'nahidhasan'),
    'id' => 'footer-3',
    'description' =>__('Appears in the sidebar in blog page and also other page', 'nahidhasan'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ) );
    // homepage widget....
  register_sidebar( array(
    'name' =>__('Homepage Widget', 'nahidhasan'),
    'id' => 'home-1',
    'description' =>__('Appears in the sidebar in blog page and also other page', 'nahidhasan'),
    'before_widget' => '<div class="child_home">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ) );
}

add_action( 'widgets_init', 'nahid_widgets_register' );