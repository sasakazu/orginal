<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title><?php wp_title( ' | ', true, 'right' ); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">


        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- slick -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
        <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>


        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>


      <ul class="globalNav">
          <li class="active">
              <a href="#">
                  <strong>ホーム</strong>
                  <span>home</span>
              </a>
          </li>
          <li>
              <a href="#">
                  <strong>会社概要</strong>
                  <span>company</span>
              </a>
          </li>
          <li>
              <a href="#">
                  <strong>お問い合せ</strong>
                  <span>contact</span>
              </a>
          </li>
      </ul>
