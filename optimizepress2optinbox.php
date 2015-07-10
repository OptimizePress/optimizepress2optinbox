<?php
/*
Plugin Name: OptimizePress 2 Optin box filter on fields
Plugin URI: http://www.optimizepress.com
Description: Sample plugin that attaches filters on optin box fields
Author URI: http://www.optimizepress.com
*/

add_filter('op_optin_field_value', 'add_user_meta_shortcodes_on_optin_fields', 10, 2);

function add_user_meta_shortcodes_on_optin_fields($value, $name)
{
	switch ($name) {
		case 'email':
			$value = do_shortcode('[otheruserinfo field="user_login" nospan="true" uservar="theuserlogin"]');
			break;
		case 'LNAME':
			$value = do_shortcode('[otheruserinfo field="last_name" nospan="true" uservar="theuserlogin"]');
			break;
		case 'name':
			$value = do_shortcode('[otheruserinfo field="first_name" nospan="true" uservar="theuserlogin"]');
			break;
	}

	return $value;
}