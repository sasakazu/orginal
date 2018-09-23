<?php


function my_enqueue_script()
{
// </head>タグ前に出力する
wp_enqueue_script( 'script', get_template_directory_uri() . '/slick/slick.js');
}
add_action('wp_enqueue_scripts', 'my_enqueue_script');
