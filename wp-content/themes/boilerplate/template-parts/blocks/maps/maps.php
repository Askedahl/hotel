<?php 
/*------------------------------------------------
# maps
------------------------------------------------*/

$kort = get_field('maps_kort');
$gade = get_field('maps_gade');
$by = get_field('maps_by');
$tlf = get_field('maps_tlf');
$header = get_field('maps_header');
$navn = get_field('maps_navn');

?>

<div class="block block--maps">
<div class="maps">
    <div class="maps__background"></div>
    <div class="container">
    <h2 class="maps__header"><?= $header ?></h2>
        <div class="row">
            
            <div class="col-sm-12 col-md-6 maps__container__map">

            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>

            </div> 

            <address class="col-sm-12 col-md-6 maps__container__info">

                <p class="maps__container__info__navn"><?= $navn ?></p>
                <p class="maps__container__info__gade"><?= $gade ?></p>
                <p class="maps__container__info__by"><?= $by ?></p>
                <p class="maps__container__info__tlf"><?= $tlf ?></p>
                <div class="maps__container__info__social__container">
                    <p class="maps__container__info__social__paragraph">Find os på de sociale medier:</p>
                    <div class="maps__container__info__social">
                        <a class="maps__container__info__social__icons" href="https://www.instagram.com/hotelmarina.dk/"><?php get_icon('instagram') ?></a>
                        <a class="maps__container__info__social__icons" href="https://www.facebook.com/MarinaVedbaek/"><?php get_icon('facebook') ?></a>
                    </div>
                </div>
            </address>

        </div>
    </div>
</div>
</div>