<?php 
/*------------------------------------------------
# historie
------------------------------------------------*/

$title1 = get_field('historie_title1');
$title2 = get_field('historie_title2');
$title3 = get_field('historie_title3');
$title4 = get_field('historie_title4');
$title5 = get_field('historie_title5');
$paragraph1 = get_field('historie_paragraph1');
$paragraph2 = get_field('historie_paragraph2');
$paragraph3 = get_field('historie_paragraph3');
$paragraph4 = get_field('historie_paragraph4');
$paragraph5 = get_field('historie_paragraph5');
$date1 = get_field('historie_date1');
$date2 = get_field('historie_date2');
$date3 = get_field('historie_date3');
$date4 = get_field('historie_date4');
$date5 = get_field('historie_date5');
$img1 = get_field('historie_img1');
$img2 = get_field('historie_img2');
$img3 = get_field('historie_img3');
$img4 = get_field('historie_img4');
$img5 = get_field('historie_img5');

?>

<div class="block block--historie">
<div class="historie">
    <div class="container">

            <div class="row img-left">

                <div class="col-sm-12 col-md-5">
                    
                    <div class="histo__container__info">
                        <h3 class="histo__container__info__title"><?= $title1 ?></h3>
                        <p class="histo__container__info__paragraph"><?= $paragraph1 ?></p>         
                    </div>

                </div>
                
                <div class="col-sm-12 col-md-2 histo__container__date__wrapper">
                    
                    <div class="histo__container__date"> 
                        <p class="histo__container__date__date"><?= $date1 ?></p>
                    </div>

                </div>

                <div class="col-sm-12 col-md-5">

                    <div class="histo__container__img">
                        <div class="obj-fit">
                            <img class="histo__container__img__img" src="<?= $img1['sizes']['large'] ?>" alt="<?= $img1['alt'] ?>">        
                        </div>    
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-sm-12 col-md-5">
                    
                    <div class="histo__container__info">
                        <h3 class="histo__container__info__title"><?= $title2 ?></h3>
                        <p class="histo__container__info__paragraph"><?= $paragraph2 ?></p>         
                    </div>

                </div>
                
                <div class="col-sm-12 col-md-2 histo__container__date__wrapper">
                    
                    <div class="histo__container__date"> 
                        <p class="histo__container__date__date"><?= $date2 ?></p>
                    </div>

                </div>

                <div class="col-sm-12 col-md-5">

                    <div class="histo__container__img">
                        <div class="obj-fit">
                            <img class="histo__container__img__img" src="<?= $img2['sizes']['large'] ?>" alt="<?= $img2['alt'] ?>">        
                        </div>    
                    </div>

                </div>

            </div>


            <div class="row img-left">

                <div class="col-sm-12 col-md-5">
                    
                    <div class="histo__container__info">
                        <h3 class="histo__container__info__title"><?= $title3 ?></h3>
                        <p class="histo__container__info__paragraph"><?= $paragraph3 ?></p>         
                    </div>

                </div>
                
                <div class="col-sm-12 col-md-2 histo__container__date__wrapper">
                    
                    <div class="histo__container__date"> 
                        <p class="histo__container__date__date"><?= $date3 ?></p>
                    </div>

                </div>

                <div class="col-sm-12 col-md-5">

                    <div class="histo__container__img">
                        <div class="obj-fit">
                            <img class="histo__container__img__img" src="<?= $img3['sizes']['large'] ?>" alt="<?= $img3['alt'] ?>">        
                        </div>    
                    </div>

                </div>

            </div>


            <div class="row">

                <div class="col-sm-12 col-md-5">
                    
                    <div class="histo__container__info">
                        <h3 class="histo__container__info__title"><?= $title4 ?></h3>
                        <p class="histo__container__info__paragraph"><?= $paragraph4 ?></p>         
                    </div>

                </div>
                
                <div class="col-sm-12 col-md-2 histo__container__date__wrapper">
                    
                    <div class="histo__container__date"> 
                        <p class="histo__container__date__date"><?= $date4 ?></p>
                    </div>

                </div>

                <div class="col-sm-12 col-md-5">

                    <div class="histo__container__img">
                        <div class="obj-fit">
                            <img class="histo__container__img__img" src="<?= $img4['sizes']['large'] ?>" alt="<?= $img4['alt'] ?>">        
                        </div>    
                    </div>

                </div>

            </div>


            <div class="row img-left">

                <div class="col-sm-12 col-md-5">
                    
                    <div class="histo__container__info">
                        <h3 class="histo__container__info__title"><?= $title5 ?></h3>
                        <p class="histo__container__info__paragraph"><?= $paragraph5 ?></p>         
                    </div>

                </div>
                
                <div class="col-sm-12 col-md-2 histo__container__date__wrapper">
                    
                    <div class="histo__container__date"> 
                        <p class="histo__container__date__date"><?= $date5 ?></p>
                    </div>

                </div>

                <div class="col-sm-12 col-md-5">

                    <div class="histo__container__img__last">
                        <div class="obj-fit">
                            <img class="histo__container__img__img" src="<?= $img5['sizes']['large'] ?>" alt="<?= $img5['alt'] ?>">        
                        </div>    
                    </div>

                </div>

            </div>


    </div>
</div>
</div>

