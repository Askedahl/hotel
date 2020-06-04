<?php
/*------------------------------------------------
# button--outlined
------------------------------------------------*/ 
$target = isset($args->target) ? 'target="' . $args->target . '"' : '';

?>

<a href="<?= $args->url; ?>" <?= $target ?> class="button button--outlined">
    <?= $args->text; ?>
</a>