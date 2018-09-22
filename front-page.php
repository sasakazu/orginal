<?php get_header(); ?>



<div class="wrapper">

    <div style="background-image: url(<?php bloginfo('template_url'); ?>/images/bad-weather.jpg);"></div>
    <div style="background-image: url(<?php bloginfo('template_url'); ?>/images/black.jpg);"></div>
    <div style="background-image: url(<?php bloginfo('template_url'); ?>/images/jetliner.jpg);"></div>



</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">


$(function(){
$('.wrapper div:gt(0)').hide();
var interval = 6000,
    anim = (function () {
    var i = 0,
        timing = interval / 1000 * 60;
    return function () {
        if (i % timing === 0) {
            $('.wrapper div:first-child').fadeOut(4000).next('div').fadeIn(4000).end().appendTo('.wrapper');
        }
        i++;
    };
})();
(function animloop() {
    anim();
    window.requestAnimationFrame(animloop);
})();
});



</script>


<?php get_footer(); ?>
