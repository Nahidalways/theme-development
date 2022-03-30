<?php

// Theme Header Area

function nahid_customizar_register($wp_customize){
  $wp_customize->add_section('nahid_header_area', array(
    'title' =>__('Header Area','nahidhasan'),
    'description' => 'If you interested to update your header area, you can do it'
  ));
  $wp_customize->add_setting('nahid_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nahid_logo', array(
    'label' => 'Logo Uplod',
    'description' => 'If you interested to change your logo, you can do it',
    'setting' => 'nahid_logo',
    'section' => 'nahid_header_area',
  ) ));


  // Menu Position Option
  $wp_customize->add_section('nahid_menu_option', array(
    'title' =>__('Menu Position Option', 'nahidhasan'),
    'description' => 'If you interested to change your menu position, you can do it'
  ));
  $wp_customize->add_setting('nahid_menu_position', array(
    'default' => 'right_menu',
  ));   
  $wp_customize->add_control('nahid_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'nahid_menu_position',
    'section' => 'nahid_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
  ));
  // Footer Option
  $wp_customize->add_section('nahid_footer_option', array(
    'title' =>__('Footer Option', 'nahidhasan'),
    'description' => 'If you interested to change or update your footer setting, you can do it'
  ));
  $wp_customize->add_setting('nahid_copyright_section', array(
    'default' => '&copy; Copyright 2022 | Developer NAHID',
  ));   
  $wp_customize->add_control('nahid_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'nahid_copyright_section',
    'section' => 'nahid_footer_option',
  ));

  // Theme Custom Color
  $wp_customize->add_section('nahid_colors', array(
    'title' =>__('Theme Color', 'nahidhasan'),
    'description' => 'If you interested to change your theme color, you can do it.'
  ));
  $wp_customize->add_setting('nahid_bg_color', array(
    'default' => '#ffffff',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nahid_bg_color', array(
    'label' => 'Background Color',
    'description' => 'If need you can update your background color.',
    'setting' => 'nahid_bg_color',
    'section' => 'nahid_colors'
  )));
  $wp_customize->add_setting('nahid_primary_color', array(
    'default' => '#ea1a70',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nahid_primary_color', array(
    'label' => 'Primary Color',
    'description' => 'If need you can update your primary color.',
    'setting' => 'nahid_primary_color',
    'section' => 'nahid_colors'
  )));

}

add_action('customize_register', 'nahid_customizar_register');

function nahid_theme_color_cus(){
  ?>
<style>
body {
  background: <?php echo get_theme_mod('nahid_bg_color');
  ?>
}

:root {
  --pink: <?php echo get_theme_mod('nahid_primary_color');
  ?>
}
</style>
<?php
}

add_action( 'wp_head', 'nahid_theme_color_cus' );