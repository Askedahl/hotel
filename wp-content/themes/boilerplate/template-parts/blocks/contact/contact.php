<?php 
/*------------------------------------------------
# contact
------------------------------------------------*/

$header = get_field('contact_header');
$form = get_field('contact_form');

?>

<div class="block block--contact">
<div class="contact">
    <div class="contact__background"></div>
    <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contact__container">
                        <h2 class="contact__header"><?= $header ?></h2>
                        <?= $form ?>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>

