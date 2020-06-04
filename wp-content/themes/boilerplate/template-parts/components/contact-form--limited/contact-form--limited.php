<?php
/*------------------------------------------------
# LIMITED CONTACT FORM COMPONENT
------------------------------------------------*/

/**
 * ARGS:
 * args (holding all form inputs)
 * button_text
 */

global $form_id_limited;

if (isset($form_id_limited)) {
	$form_id_limited = ++$form_id_limited;
} else {
	$form_id_limited = 1;
}
?>

<form id="form-<?= $form_id_limited ?>">
	<input type="hidden" name="action" value="contact_form_mail">

	<?php foreach($args as $key => $field):

		if($field['add_input'] == 1): ?>

			<div class="form__group">

			<?php switch ($key):

				case 'name':

					if($field['add_input_split'] == 1): ?>

						<div class="field">
							<input type="text" name="firstname" id="firstname-<?= $form_id_limited ?>">
							<label for="firstname-<?= $form_id_limited ?>"><?= $field['label_first_name']; ?></label>
						</div>

						<div class="field">
							<input type="text" name="lastname" id="lastname-<?= $form_id_limited ?>">
							<label for="lastname-<?= $form_id_limited ?>"><?= $input['input_label'] ?></label>
						</div>

					<?php else: ?>

						<div class="field">
							<input type="text" name="name" id="name-<?= $form_id_limited ?>">
							<label for="name-<?= $form_id_limited ?>"><?= $field['label_full_name'] ?></label>
						</div>

					<?php endif;

					break;

				case 'phone': ?>

					<div class="field">
						<input type="text" name="phone" id="phone-<?= $form_id_limited ?>">
						<label for="phone-<?= $form_id_limited ?>"><?= $field['label_'.$key] ?></label>
					</div>

					<?php break;

				case 'checkbox': ?>

					<div class="field">
						<input type="checkbox" name="<?= $field['label_'.$key] ?>" id="<?= $field['label_'.$key] ?>-<?= $form_id_limited ?>">
						<label class="checkbox" for="<?= $field['label_'.$key] ?>-<?= $form_id_limited ?>">
							<div class="custom-checkbox">
								<div class="checkmark"></div>
							</div>
							<span><?= $field['label_'.$key] ?></span>
						</label>
					</div>

				<?php break;

				case 'textarea': ?>

					<div class="field">
						<textarea name="<?= $field['label_'.$key] ?>" id="<?= $field['label_'.$key] ?>-<?= $form_id_limited ?>" cols="30" rows="10"></textarea>
						<label for="<?= $field['label_'.$key] ?>-<?= $form_id_limited ?>"><?= $field['label_'.$key] ?></label>
					</div>

					<?php break;

				default:

				$label = $field['label_'.$key]; ?>

				<div class="field">
					<input type="<?= $key ?>" name="<?= $field['label_'.$key] ?>" id="<?= $field['label_'.$key] ?>-<?= $form_id_limited ?>">
					<label for="<?= $field['label_'.$key] ?>-<?= $form_id_limited ?>"><?= $field['label_'.$key] ?></label>
				</div>

			<?php endswitch; ?>

			</div>

		<?php endif;

	endforeach; ?>

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

		jQuery('form').unbind('submit').bind('submit', function(e) {
			e.preventDefault();

			console.log($(this));
			// Saving the form data as a variable
			var data = new FormData($(this)[0]);

			jQuery.ajax({
				url: ajax_url,
				type: 'POST',
				processData: false,
				contentType: false,
				data: data,
				success: function (data) {
					var response = JSON.parse(data);
					console.log(response);
				},
				error: function (data) {
					var response = data.responseJSON.errors;
					console.log(response);
				}
			});
		});
	});
});
</script>
