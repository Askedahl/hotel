<?php
/*------------------------------------------------
# button--small
------------------------------------------------*/ 
$target = isset($args->target) ? 'target="' . $args->target . '"' : '';

?>

<a href="<?= $args->url; ?>" <?= $target ?> class="button button--small">
    <?= $args->text; ?>
</a>