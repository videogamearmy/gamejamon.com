<?php
/**
 * Edit account form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.7
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<div class="woo-maha">
	<?php wc_print_notices(); ?>

	<form action="" method="post">

		<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

			<div class="woo-content-fields woo-edit-center">
				<p class="form-row form-row-first">
					<label for="account_first_name"><?php _e( 'First name', MAHA_TEXT_DOMAIN ); ?> <span class="required">*</span></label>
					<input type="text" class="input-text" name="account_first_name" id="account_first_name" value="<?php echo esc_attr( $user->first_name ); ?>" />
				</p>
				<p class="form-row form-row-last">
					<label for="account_last_name"><?php _e( 'Last name', MAHA_TEXT_DOMAIN ); ?> <span class="required">*</span></label>
					<input type="text" class="input-text" name="account_last_name" id="account_last_name" value="<?php echo esc_attr( $user->last_name ); ?>" />
				</p>
				<p class="form-row form-row-wide">
					<label for="account_email"><?php _e( 'Email address', MAHA_TEXT_DOMAIN ); ?> <span class="required">*</span></label>
					<input type="email" class="input-text" name="account_email" id="account_email" value="<?php echo esc_attr( $user->user_email ); ?>" />
				</p>
				<p class="form-row form-row-first">
					<label for="password_1"><?php _e( 'Password (leave blank to leave unchanged)', MAHA_TEXT_DOMAIN ); ?></label>
					<input type="password" class="input-text" name="password_1" id="password_1" />
				</p>
				<p class="form-row form-row-last">
					<label for="password_2"><?php _e( 'Confirm new password', MAHA_TEXT_DOMAIN ); ?></label>
					<input type="password" class="input-text" name="password_2" id="password_2" />
				</p>
				<div class="clear"></div>

				<?php do_action( 'woocommerce_edit_account_form' ); ?>

				<p class="form-row form-nav">
					<?php wp_nonce_field( 'save_account_details' ); ?>
					<input type="submit" class="button woo-button" name="save_account_details" value="<?php _e( 'Save changes', MAHA_TEXT_DOMAIN ); ?>" />
					<input type="hidden" name="action" value="save_account_details" />
				</p>

				<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
				
			</div>
	</form>
</div>