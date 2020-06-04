<?php 
/*------------------------------------------------
# banner
------------------------------------------------*/

$img = get_field('banner_img');

?>

<div class="block block--banner">
<div class="banner">
    <div class="banner__background obj-fit">
    <img class="banner__background__img" src="<?= $img['sizes']['2048x2048'] ?>" alt="<?= $img['alt'] ?>">        
    </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner__container">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


