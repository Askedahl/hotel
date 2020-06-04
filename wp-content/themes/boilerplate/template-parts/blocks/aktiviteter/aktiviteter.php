<?php 
/*------------------------------------------------
# aktiviteter
------------------------------------------------*/

$tab1 = get_field('aktiviteter_tab_1');
$tab2 = get_field('aktiviteter_tab_2');
$tab3 = get_field('aktiviteter_tab_3');
$tab4 = get_field('aktiviteter_tab_4');
$tab5 = get_field('aktiviteter_tab_5');
$header1 = get_field('aktiviteter_header_1');
$header2 = get_field('aktiviteter_header_2');
$header3 = get_field('aktiviteter_header_3');
$header4 = get_field('aktiviteter_header_4');
$header5 = get_field('aktiviteter_header_5');
$paragraph1 = get_field('aktiviteter_paragraph_1');
$paragraph2 = get_field('aktiviteter_paragraph_2');
$paragraph3 = get_field('aktiviteter_paragraph_3');
$paragraph4 = get_field('aktiviteter_paragraph_4');
$paragraph5 = get_field('aktiviteter_paragraph_5');
$img1 = get_field('aktiviteter_img_1');
$img2 = get_field('aktiviteter_img_2');
$img3 = get_field('aktiviteter_img_3');
$img4 = get_field('aktiviteter_img_4');
$img5 = get_field('aktiviteter_img_5');
$img6 = get_field('aktiviteter_img_6');
$img7 = get_field('aktiviteter_img_7');
$img8 = get_field('aktiviteter_img_8');
$img9 = get_field('aktiviteter_img_9');
$img10 = get_field('aktiviteter_img_10');

?>

<div class="block block--aktiviteter">
<div class="aktiviteter">
    <div class="container">

                <div class="aktiviteter__bar">
                    <a class="aktiviteter__bar__item" onclick="openCity('1')"><?= $tab1 ?></a>
                    <a class="aktiviteter__bar__item" onclick="openCity('2')"><?= $tab2 ?></a>
                    <a class="aktiviteter__bar__item" onclick="openCity('3')"><?= $tab3 ?></a>
                    <a class="aktiviteter__bar__item" onclick="openCity('4')"><?= $tab4 ?></a>
                </div>

                <div id="1" class="activities__container city row">
                    <div class="activities__container__info col-sm-12 col-md-5">
                        <h3 class="activities__container__info__header"><?= $header1 ?></h3>
                        <p class="activities__container__info__paragraph"><?= $paragraph1 ?></p> 
                    </div>
                    <div class="activities__container__img col-sm-12 col-md-7">
                        <div class="activities__container__img1">
                            <div class="obj-fit">
                                <img class="activities__container__img__img" src="<?= $img1['sizes']['large'] ?>" alt="<?= $img1['alt'] ?>"> 
                            </div> 
                        </div>
                        <div class="activities__container__img2">
                            <div class="obj-fit">
                                <img class="activities__container__img__img" src="<?= $img6['sizes']['large'] ?>" alt="<?= $img6['alt'] ?>"> 
                            </div>    
                        </div>         
                    </div>
                </div>

                <div id="2" class="activities__container city row" style="display:none">
                    <div class="activities__container__info col-sm-12 col-md-5">
                        <h3 class="activities__container__info__header"><?= $header2 ?></h3>
                        <p class="activities__container__info__paragraph"><?= $paragraph2 ?></p> 
                    </div>
                    <div class="activities__container__img col-sm-12 col-md-7">
                    <div class="activities__container__img1">
                        <div class="obj-fit">
                            <img class="activities__container__img__img" src="<?= $img2['sizes']['large'] ?>" alt="<?= $img2['alt'] ?>"> 
                        </div> 
                        </div>
                        <div class="activities__container__img2">
                        <div class="obj-fit">
                            <img class="activities__container__img__img" src="<?= $img7['sizes']['large'] ?>" alt="<?= $img7['alt'] ?>"> 
                        </div>  
                        </div>           
                    </div>
                </div>

                <div id="3" class="activities__container city row" style="display:none">
                    <div class="activities__container__info col-sm-12 col-md-5">
                        <h3 class="activities__container__info__header"><?= $header3 ?></h3>
                        <p class="activities__container__info__paragraph"><?= $paragraph3 ?></p> 
                    </div>
                    <div class="activities__container__img col-sm-12 col-md-7">
                    <div class="activities__container__img1">
                        <div class="obj-fit">
                            <img class="activities__container__img__img" src="<?= $img3['sizes']['large'] ?>" alt="<?= $img3['alt'] ?>">            
                        </div>
                        </div>
                        <div class="activities__container__img2">
                        <div class="obj-fit">
                            <img class="activities__container__img__img" src="<?= $img8['sizes']['large'] ?>" alt="<?= $img8['alt'] ?>"> 
                        </div>
                        </div>   
                    </div>
                </div>

                <div id="4" class="activities__container city row" style="display:none">
                    <div class="activities__container__info col-sm-12 col-md-5">
                        <h3 class="activities__container__info__header"><?= $header4 ?></h3>
                        <p class="activities__container__info__paragraph"><?= $paragraph4 ?></p> 
                    </div>
                    <div class="activities__container__img col-sm-12 col-md-7">
                        <div class="activities__container__img1">
                            <div class="obj-fit">
                                <img class="activities__container__img__img" src="<?= $img4['sizes']['large'] ?>" alt="<?= $img4['alt'] ?>">  
                            </div> 
                        </div>
                        <div class="activities__container__img2">
                            <div class="obj-fit">
                                <img class="activities__container__img__img" src="<?= $img9['sizes']['large'] ?>" alt="<?= $img9['alt'] ?>"> 
                            </div>         
                        </div>   
                    </div>
                </div>
            
            
          
    </div>
</div>
</div>

<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "flex";  
}
</script>


