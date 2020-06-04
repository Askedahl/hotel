<?php

/*------------------------------------------------
# HEADING COMPONENT
------------------------------------------------*/

/**
 * ARGS:
 * heading_align
 * heading_type
 * heading_text
 */

?>

<div class="heading align--<?= $args->heading_align ?>">
    <h<?= $args->heading_type ?>><?= oak_highlight($args->heading_text) ?></h<?= $args->heading_type ?>>
</div>
