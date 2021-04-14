<?php

add_action('admin_menu', 'all_purpose_admin_menu');

function all_purpose_admin_menu() {

global $seosbusiness_settings_page;

   $seosbusiness_settings_page = add_theme_page(__('All-Purpose Premium', 'all-purpose'), __('Premium Theme', 'all-purpose'), 'edit_theme_options',  'my-unique-identifier', 'all_purpose_settings_page');

}

function all_purpose_settings_page() {
?>
<div class="wrap">

	<form class="theme-options" method="post" action="options.php" accept-charset="ISO-8859-1">
		<?php settings_fields( 'seos-settings-group' ); ?>
		<?php do_settings_sections( 'seos-settings-group' ); ?>
		
		<div class="all-purpose-form">
			<a target="_blank" href="https://seosthemes.com/free-wordpress-all-purpose-theme/">
				<div class="btn s-red">
					 <?php esc_html_e('Buy', 'all-purpose'); ?> <img class="ss-logo" src="<?php echo esc_url(get_template_directory_uri()) . '/framework/images/logo.png'; ?>"/><?php esc_html_e(' Now', 'all-purpose'); ?>
				</div>
			</a>
		</div>
		<div style="width: 100%; margin: 0 auto; text-align: center; display: inline-block;">
		<h1><?php esc_html_e('You can support us by Buying an All-Purpose Pro theme with a lot new features & extensions!', 'all-purpose'); ?></h1>
			<a class="p-demo" href="http://seosthemes.info/all-purpose-free-wordpress-theme/" target="_blank">Premium Demo</a>
		</div>		
		<div class="cb-center">	
			<img class="sb-demo" src="<?php echo esc_url(get_template_directory_uri()) . '/framework/images/all-purpose-premium.jpg'; ?>"/>			
		</div>
		
	</form>
	
</div>
<?php } ?>