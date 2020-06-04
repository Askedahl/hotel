<?php 
/*------------------------------------------------
# værelser
------------------------------------------------*/

$vaerelser = get_field('vaerelser');

?>

<div class="block block--vaerelser">
<div class="vaerelser">
    <div class="container">
                <div class="vaerelser__container row">

                    <?php foreach($vaerelser as $vaerelse):?>

                        <div class="col-sm-12 col-md-6 vaerelse__container">
                 
                                <div class="vaerelse__container__top obj-fit">
                                        <img class="vaerelse__container__top__img" src="<?= $vaerelse['vaerelser_img']['sizes']['large'] ?>" alt="<?= $vaerelse['vaerelser_img']['alt'] ?>">
                                </div>    

                                <div class="vaerelse__container__bottom">
                                    <h3 class="vaerelse__container__bottom__title"><?= $vaerelse['vaerelser_header'] ?></h3>
                                    <p class="vaerelse__container__bottom__paragraph"><?= $vaerelse['vaerelser_paragraph'] ?></p>
                                    <a class="btn-dark" href="<?= $vaerelse['vaerelser_link'] ?>"><?= $vaerelse['vaerelser_button'] ?></a>
                                </div>            
                         
                        </div>

                    <?php endforeach; ?>
                
                </div>
          
    </div>
</div>
</div>


