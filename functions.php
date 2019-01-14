<?php

class LIG_WP_Exam {

  function __construct() {

    $this->register_nav_menus();

    add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));

  }

  function wp_enqueue_scripts() {

    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css', array(), time());
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), time(), true);

  }

  function register_nav_menus() {
    register_nav_menus(
      array('primary-menu' => 'Primary Menu')
    );
  }

}

new LIG_WP_Exam;
