<?php
/*
Plugin Name: Hide Admin Tab
Plugin URI: 
Description: Hide the admin tab for Non admins users
Version: 1.0
Author: Prathap Rathod
Author URI: https://prathaprathod.github.io
*/
/*
	Licensed under the GPLv2 license: http://www.gnu.org/licenses/gpl-2.0.html
*/

function hide_admin_tab()
{
?>
	<style type="text/css">
		.show-admin-bar {
			display: none;
		}
	</style>
<?php
}
function hide_admin_tab_disable_admin_bar()
{
	if(!current_user_can('administrator'))
	{
		add_filter( 'show_admin_bar', '__return_false' );
		add_action( 'admin_print_scripts-profile.php', 'hide_admin_tab' );
	}
}
add_action('init', 'hide_admin_tab_disable_admin_bar', 9);
