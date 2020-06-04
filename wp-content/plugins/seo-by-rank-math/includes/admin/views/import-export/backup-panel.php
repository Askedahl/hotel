<?php
/**
 * Backup panel template.
 *
 * @package    RankMath
 * @subpackage RankMath\Admin
 */

$backups = get_option( 'rank_math_backups', [] );
?>
<div class="rank-math-export-form cmb2-form">

	<button type="button" class="button button-primary alignright rank-math-action" data-action="createBackup"><?php esc_html_e( 'Create Backup', 'rank-math' ); ?></button>

	<h3><?php esc_html_e( 'Backups', 'rank-math' ); ?></h3>

	<div class="list-table with-action">
		<table class="form-table">
			<tbody>
				<?php foreach ( $backups as $key => $backup ) : ?>
					<tr>
						<th>
							<?php
							/* translators: Backup formatted date */
							printf( esc_html__( 'Backup: %s', 'rank-math' ), date_i18n( 'M jS Y, H:i a', $key ) );
							?>
						</th>
						<td style="width:195px;padding-left:0;">
							<button type="button" class="button button-primary rank-math-action" data-action="restoreBackup" data-key="<?php echo esc_attr( $key ); ?>"><?php esc_html_e( 'Restore', 'rank-math' ); ?></button>
							<button type="button" class="button button-link-delete rank-math-action" data-action="deleteBackup" data-key="<?php echo esc_attr( $key ); ?>"><?php esc_html_e( 'Delete', 'rank-math' ); ?></button>
						</td>
					</tr>
				<?php endforeach; ?>
				<?php if ( empty( $backups ) ) : ?>
					<tr class="hidden">
						<th>
						</th>
						<td style="width:195px;padding-left:0;">
							<button type="button" class="button button-primary rank-math-action" data-action="restoreBackup" data-key=""><?php esc_html_e( 'Restore', 'rank-math' ); ?></button>
							<button type="button" class="button button-link-delete rank-math-action" data-action="deleteBackup" data-key=""><?php esc_html_e( 'Delete', 'rank-math' ); ?></button>
						</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>

	<p id="rank-math-no-backup-message"<?php echo ! empty( $backups ) ? ' class="hidden"' : ''; ?>><?php esc_html_e( 'There is no backup.', 'rank-math' ); ?></p>

</div>
