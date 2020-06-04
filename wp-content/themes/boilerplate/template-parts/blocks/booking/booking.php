<?php 
/*------------------------------------------------
# booking
------------------------------------------------*/

$header = get_field('booking_header');
$button = get_field('booking_button');
$link = get_field('booking_link');

?>

<div class="block block--booking">
<div class="booking">
    <div class="booking__background"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="booking__container">
                        <h2 class="booking__header"><?= $header ?></h2>
                        <a class="btn-box" href="<?= $link ?>"><?= $button ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


