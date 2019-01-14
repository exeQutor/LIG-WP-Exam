<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="header">
  <div class="logo">
    <a href="<?php bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Logo"></a>
  </div>

  <div class="menu__button">
    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/hamburger.png" alt="Hamburger Button"></a>
  </div>
</div>

<div id="main_menu" class="menu">
  <?php wp_nav_menu(array(
    'menu_class' => '',
    'menu_id' => '',
    'container' => ''
  )) ?>
</div>
