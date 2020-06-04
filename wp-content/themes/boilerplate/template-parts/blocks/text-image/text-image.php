<?php 
/*------------------------------------------------
# text-image
------------------------------------------------*/

$img1 = get_field('text-image_img1');
$img2 = get_field('text-image_img2');
$header = get_field('text-image_header');
$paragraph = get_field('text-image_paragraph');
$button = get_field('text-image_button');
$link = get_field('text-image_link');

?>

<div class="block block--text-image">
    <div class="text-image__background"></div>
    <div class="container">
        <div class="text-image">
            <div class="row">
                <div class="col-sm-12 col-md-5 image-text__container__left">
                    <h3 class="image-text__container__left__header"><?= $header ?></h3>
                    <p class="image-text__container__left__paragraph"><?= $paragraph ?></p>
                    <a class="btn-dark" href="<?= $link ?>"><?= $button ?></a>
                </div>
                

                    <div class="image-text__container__right col-sm-12 col-md-7">
                        <div class="image-text__container__img1">
                            <div class="obj-fit">
                                <img class="image-text__container__img__img" src="<?= $img1['sizes']['large'] ?>" alt="<?= $img1['alt'] ?>"> 
                            </div> 
                        </div>
                        <div class="image-text__container__img2">
                            <div class="obj-fit">
                                <img class="image-text__container__img__img" src="<?= $img2['sizes']['large'] ?>" alt="<?= $img2['alt'] ?>"> 
                            </div>    
                        </div>         
                    </div>

            </div>
        </div>
    </div>
</div>


