<?php get_header(); ?>

<div class="top-image">

  <div class="viewer">
    <ul>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/1920.jpg" alt="">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/jetliner.jpg" alt="">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/black.jpg" alt="">
    </ul>
  </div>


  <h2>Bass Co., Ltd.</h2>
  <h3>logistic - futsal - aparel</h3>
</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function(){
    var $setElm = $('.viewer'),
    fadeSpeed = 2500,
    switchDelay = 7000;

    $setElm.each(function(){
        var targetObj = $(this);
        var findUl = targetObj.find('ul');
        var findLi = targetObj.find('li');
        var findLiFirst = targetObj.find('li:first');

        findLi.css({display:'block',opacity:'0',zIndex:'99'});
        findLiFirst.css({zIndex:'100'}).stop().animate({opacity:'1'},fadeSpeed);

        setInterval(function(){
            findUl.find('li:first-child').animate({opacity:'0'},fadeSpeed).next('li').css({zIndex:'100'}).animate({opacity:'1'},fadeSpeed).end().appendTo(findUl).css({zIndex:'99'});
        },switchDelay);
    });
});
</script>

<?php get_footer(); ?>
