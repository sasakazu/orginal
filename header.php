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

      <a href="#" id="bass">BASS</a>


      <ul class="globalNav">


          <li>
              <a href="#">
                  <strong>SERVISE</strong>
                  <span>事業内容</span>
              </a>
          </li>
          <li>
              <a href="#">
                  <strong>ABOUT</strong>
                  <span>会社概要</span>
              </a>
          </li>
          <li>
              <a href="#">
                  <strong>CONTACT</strong>
                  <span>お問い合わせ</span>
              </a>
          </li>
      </ul>
