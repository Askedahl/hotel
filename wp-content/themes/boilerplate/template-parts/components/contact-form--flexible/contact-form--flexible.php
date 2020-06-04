<?php
/*------------------------------------------------
# FLEXIBLE CONTACT FORM COMPONENT
------------------------------------------------*/

/**
 * ARGS:
 * form_group
 * button_text
 */
global $form_id_flex;

if (isset($form_id_flex)) {
	$form_id_flex = ++$form_id_flex;
} else {
	$form_id_flex = 1;
}
?>

<form action="" style="margin-top:100px;">

	<?php foreach($args->form_group as $group): ?>

		<div class="form__group">

			<?php foreach($group as $field):

				foreach($field as $input):

					if($input['input_type'] === 'checkbox'): ?>

						<div class="field hej">
							<input type="checkbox" name="<?= $input['input_name'] ?>" id="<?= $input['input_name'] ?>-<?= $form_id_flex ?>">
							<label class="checkbox" for="<?= $input['input_name'] ?>-<?= $form_id_flex ?>">
								<div class="custom-checkbox">
									<div class="checkmark"></div>
								</div>
								<span><?= $input['input_label'] ?></span>
							</label>
						</div>

						<?php else: ?>

						<div class="field">
							<input type="<?= $input['input_type'] ?>" name="<?= $input['input_name'] ?>" id="<?= $input['input_name'] ?>-<?= $form_id_flex ?>">
							<label for="<?= $input['input_name'] ?>-<?= $form_id_flex ?>"><?= $input['input_label'] ?></label>
						</div>

						<?php endif;

				endforeach;

			endforeach; ?>

		</div>

	<?php endforeach; ?>

	<div class="form__group">
		<div class="field">
			<input type="submit" value="<?= $args->button_text ?>">
		</div>
	</div>

</form>

<script>
defer(function() {
	jQuery(document).ready(function($) {

		jQuery(document).on('change', 'input[type=checkbox]', function() {
			if(jQuery(this).siblings('.checkbox').hasClass('checkbox-active')) {
				jQuery(this).siblings('.checkbox').removeClass('checkbox-active');
			} else {
				jQuery(this).siblings('.checkbox').addClass('checkbox-active');
			}
		});

	});
});
</script>
