<?php 
/*------------------------------------------------
# image-text
------------------------------------------------*/

$img1 = get_field('image-text_img1');
$img2 = get_field('image-text_img2');
$header = get_field('image-text_header');
$paragraph = get_field('image-text_paragraph');
$button = get_field('image-text_button');
$link = get_field('image-text_link');

?>

<div class="block block--image-text">
    <div class="container">
        <div class="image-text">
            <div class="row">
               

                    <div class="image-text__container__left col-sm-12 col-md-7">
                    <div class="image-text__container__img2">
                            <div class="obj-fit">
                                <img class="image-text__container__img__img" src="<?= $img2['sizes']['large'] ?>" alt="<?= $img2['alt'] ?>"> 
                            </div>    
                        </div>    
                        <div class="image-text__container__img1">
                            <div class="obj-fit">
                                <img class="image-text__container__img__img" src="<?= $img1['sizes']['large'] ?>" alt="<?= $img1['alt'] ?>"> 
                            </div> 
                        </div>
                            
                    </div>

                
                <div class="col-sm-12 col-md-5 image-text__container__right">
                    <h3 class="image-text__container__right__header"><?= $header ?></h3>
                    <p class="image-text__container__right__paragraph"><?= $paragraph ?></p>
                    <a class="btn-dark" href="<?= $link ?>"><?= $button ?></a>
                </div>
            </div>
        </div>
    </div>
</div>


