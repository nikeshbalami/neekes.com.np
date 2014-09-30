<div class="wrap">
	<?php screen_icon(); ?>
	<h2><?php _e( $this->name ); ?></h2>
	<form method="post" action="options.php">
		<?php settings_fields( $this->tag.'_options' ); ?>
		<table class="form-table">
			<?php foreach ( $this->details AS $key => $detail ) : ?>
			<tr valign="top">
				<th>
					<label for="<?php echo $this->tag; ?>[<?php esc_attr_e( $key ); ?>]">
						<?php _e( is_array( $detail ) ? $detail['label'] : $detail, 'contact' ); ?>
					</label>
				</th>
				<td>
					<?php if ( isset( $detail['input'] ) && $detail['input'] == 'textarea' ) : ?>
					<textarea class="regular-text" cols="50" rows="5" id="<?php echo $this->tag; ?>[<?php esc_attr_e( $key ); ?>]" name="<?php echo $this->tag; ?>[<?php esc_attr_e( $key ); ?>]"><?php if ( array_key_exists( $key, $this->options ) ) { esc_html_e( $this->options[$key] ); } ?></textarea>
					<?php else : ?>
					<input type="text" class="regular-text" value="<?php if ( array_key_exists( $key, $this->options ) ) { esc_html_e( $this->options[$key] ); } ?>" id="<?php echo $this->tag; ?>[<?php esc_attr_e( $key ); ?>]" name="<?php echo $this->tag; ?>[<?php esc_attr_e( $key ); ?>]"/>
					<?php endif; ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
		<p class="submit">
			<input type="submit" name="Submit" class="button-primary" value="<?php _e( 'Save Changes' ); ?>" />
		</p>
	</form>
</div>