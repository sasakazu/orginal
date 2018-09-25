<?php get_header(); ?>



<div class="your-class">

  <div class = "top-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/1920.jpg);" >
    <div class = "bg-inner">
      <h2>Bass Co., Ltd.</h2>
      <p>- Logistic Futsal Aparel -</p>
    </div>
  </div>

  <div class="top-image"style="background-image:url(<?php bloginfo('template_directory'); ?>/images/jetliner.jpg);">
    <div class="bg-inner">
      <h2>Bass Co., Ltd.</h2>
      <p>- Logistic Futsal Aparel -</p>

    </div>

  </div>

  <div class="top-image baby" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/baby.jpg);">
    <div class="bg-inner">
      <h2>Bass Co., Ltd.</h2>
      <p>- Logistic Futsal Aparel -</p>

    </div>
  </div>


</div>


<div class="servise" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/women.jpg);">


    <h2>SERVISE</h2>

    <div class="servise-wrapper">


      <div class="servise-contents">
        <a href="#"  id="logistic">
          <img src="<?php bloginfo('template_directory'); ?>/images/ship2.jpg" alt="">
        </a>
      </div>

      <div class="servise-contents" id="futsal">
        <a href="#">
          <img src="<?php bloginfo('template_directory'); ?>/images/stadium.jpg" alt="">
        </a>
      </div>

      <div class="servise-contents" id="aparel">
        <a href="#">
          <img src="<?php bloginfo('template_directory'); ?>/images/people.jpg" alt="">
        </a>
      </div>

      <div class="servise-contents" id="other">
        <a href="#">
          <img src="<?php bloginfo('template_directory'); ?>/images/paper1.jpg" alt="">
        </a>
      </div>

    </div>


</div>




<div class="about" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/lionking2.jpg);">
  <div class="bg-inner">
    <div class="about-contents">


  <h2>ABOUT</h2>


    <table>
      <tr><td id="table-header">会社名</td><td id="table-detail">Bass Co,. Ltd.</td>
      <tr><td id="table-header">代表者</td><td id="table-detail">小林 武</td>
      <tr><td id="table-header">設立日</td><td id="table-detail">2014年11月4日</td>
      <tr><td id="table-header">事業内容</td><td id="table-detail">運送 フットサル アパレル</td>
      <tr><td id="table-header">A</td><td id="table-detail">B</td>
      <tr><td id="table-header">A</td><td id="table-detail">B</td>
      <tr><td id="table-header">A</td><td id="table-detail">B</td>

    </table>


    <p id="blank"></p>

  </div>

  </div>
</div>

<div class="middle">

</div>

<div class="contact" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/agreement.jpg);" >
  <div class="bg-inner">
    <div class="contact-contents">
      <h2>BASS Co., Ltd.</h2>
      <p>お気楽にお問い合わせください</p>
      <a href="#">
         <i class="far fa-envelope">メールで問い合わせる</i>
      </a>
      <div id="space">

      </div>
    </div>
  </div>
</div>







<script>
$('.your-class').slick({

  infinite: true,
  speed: 1700,
  autoplaySpeed: 4000,
  fade: true,
  cssEase: 'linear',
  autoplay: true

});
</script>


<?php get_footer(); ?>
