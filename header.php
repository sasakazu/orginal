<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title><?php wp_title( ' | ', true, 'right' ); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>


      <div class="topnav">
        <div class="nav-title">
          <h1><a href=""><?php bloginfo( $show ); ?></a></h1>

        </div>

        <ul>
          <li><a href="">SERVISE</a></li>
          <li><a href="">ABOUT</a></li>
          <li><a href="">CONTACT</a></li>
        </ul>


      </div>
