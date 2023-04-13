<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Auto Express</title>

  <?php wp_head(); ?>
  
</head>

<body>

  <header class="header header-private">
    <div class="container">
      <div class="header__top">
        <!-- <a class="logo" href="#">
          <img class="logo__img" src=(?php bloginfo('template_url');?)"/assets/images/logo.svg" alt="logo">
        </a> -->
        <?php the_custom_logo(); ?>
        <a class="phone" href="tel:<?php the_field('simple-phone', 7); ?>"><?php the_field('phone', 7); ?></a>
      </div>
      
    </div>
  </header>