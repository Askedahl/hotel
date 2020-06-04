<?php 
/*------------------------------------------------
# events
------------------------------------------------*/

$events = get_field('events');

?>

<div class="block block--events">
<div class="events">
    <div class="container">
                <div class="events__container row">

                    <?php foreach($events as $event):?>

                        <div class="event__container col-sm-12 col-md-4">
                 
                                <div class="event__container__top">
                                    <div class="obj-fit">
                                        <img class="event__container__top__img" src="<?= $event['events_img']['sizes']['large'] ?>" alt="<?= $event['events_img']['alt'] ?>">
                                    </div>
                                </div>    

                                <div class="event__container__bottom">
                                    <p class="event__container__bottom__date"><?= $event['events_date'] ?></p>
                                    <h3 class="event__container__bottom__title"><?= $event['events_title'] ?></h3>
                                    <p class="event__container__bottom__paragraph"><?= $event['events_paragraph'] ?></p>
                                    <a class="btn-dark" href="<?= $event['events_link'] ?>"><?= $event['events_button'] ?></a>
                                </div>            
                         
                        </div>

                    <?php endforeach; ?>
                
                </div>
          
    </div>
</div>
</div>
