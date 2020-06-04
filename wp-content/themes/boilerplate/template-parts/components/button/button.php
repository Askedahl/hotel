<?php
/*------------------------------------------------
# button
------------------------------------------------*/ 
$target = isset($args->target) ? 'target="' . $args->target . '"' : '';

?>

<a href="<?= $args->url; ?>" <?= $target ?> class="button button--primary">
    <?= $args->text; ?>
</a>