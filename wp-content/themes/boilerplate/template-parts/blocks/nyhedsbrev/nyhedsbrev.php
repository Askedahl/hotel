<?php 
/*------------------------------------------------
# nyhedsbrev
------------------------------------------------*/

$header = get_field('nyhedbrev_header');
$form = get_field('nyhedbrev_form');

?>

<div class="block block--nyhedsbrev">
<div class="nyhedsbrev">
    <div class="nyhedsbrev__background"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="nyhedsbrev__container">
                    <h2 class="nyhedsbrev__header"><?= $header ?></h2>
                    <?= $form ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


