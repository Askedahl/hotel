<?php 
/*------------------------------------------------
# info
------------------------------------------------*/

$header1 = get_field('info_header_1');
$header2 = get_field('info_header_2');
$header3 = get_field('info_header_3');
$header4 = get_field('info_header_4');
$img1 = get_field('info_icon_1');
$img2 = get_field('info_icon_2');
$img3 = get_field('info_icon_3');
$img4 = get_field('info_icon_4');
$paragraph1 = get_field('info_paragraph_1');
$paragraph2 = get_field('info_paragraph_2');
$paragraph3 = get_field('info_paragraph_3');
$paragraph4 = get_field('info_paragraph_4');

?>

<div class="block block--info">
<div class="info">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 info__container">
                <h3 class="info__container__header"><?= $header1 ?></h3>
                <div class="info__container__icon">
                    <div class="">
                        <img class="image-text__container__left__img" src="<?= $img1['sizes']['medium'] ?>" alt="<?= $img1['alt'] ?>"> 
                    </div>
                </div>
                <div class="info__container__paragraph">
                    <?= $paragraph1 ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 info__container">
                <h3 class="info__container__header"><?= $header2 ?></h3>
                <div class="info__container__icon">
                    <div class="">
                        <img class="image-text__container__left__img" src="<?= $img2['sizes']['medium'] ?>" alt="<?= $img2['alt'] ?>"> 
                    </div>
                </div>
                <div class="info__container__paragraph">
                    <?= $paragraph2 ?>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>


