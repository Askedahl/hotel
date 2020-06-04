<?php 
/*------------------------------------------------
# hero
------------------------------------------------*/

$button = get_field('hero_button');
$header = get_field('hero_header');
$link = get_field('hero_link');

?>

<div class="block block--hero">
<div class="hero">
    <a href="#section2" class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
    <div class="hero__background__video">
        <video loop muted autoplay preload="auto">
            <source src="<?= get_template_directory_uri() . '/assets/video/HotelMarina_Landingpage_23sec_v2.mp4' ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="container">
            <div class="row">
                <div class="col">
                    <div class="hero__container__header">
                        <h1 class="hero__header">hotel marina</h1>
                        </div>
                        <div class="hero__container__button">
                        <a href="<?= $link ?>">
                            <button class="Booking__button"><?= $button ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block block--secundary-menu" id="section2">
<script>

$(document).ready(function() {
  //change the integers below to match the height of your upper div, which I called
  //banner.  Just add a 1 to the last number.  console.log($(window).scrollTop())
  //to figure out what the scroll position is when exactly you want to fix the nav
  //bar or div or whatever.  I stuck in the console.log for you.  Just remove when
  //you know the position.
  $(window).scroll(function () { 
    var getWindow = jQuery(window);
  var windowHeight = getWindow.height(); 

    if ($(window).scrollTop() > windowHeight - 70 ) {
	  $('#secundary-menu').addClass('fixed3');
	  $('.secundary-menu__background').addClass('fixed4');
      $('.secundary-menu__background2').addClass('fixed5');
    }

    if ($(window).scrollTop() < windowHeight - 71 ) {
	  $('#secundary-menu').removeClass('fixed3');
	  $('.secundary-menu__background').removeClass('fixed4');
      $('.secundary-menu__background2').removeClass('fixed5');
    }
  });
});




</script>

