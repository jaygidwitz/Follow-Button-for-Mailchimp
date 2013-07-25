<?php

if(!class_exists('FollowBMCPluginOptions')) :

// DEFINE PLUGIN ID
define('FOLLOWBMCPLUGINOPTIONS_ID', 'followbmc-plugin-options');
// DEFINE PLUGIN NICK
define('FOLLOWBMCPLUGINOPTIONS_NICK', 'Follow Button for Mailchimp');

    class FollowBMCPluginOptions
    {
		/** function/method
		* Usage: return absolute file path
		* Arg(1): string
		* Return: string
		*/
		public static function file_path($file)
		{
			return ABSPATH.'wp-content/plugins/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).$file;
		}
		/** function/method
		* Usage: hooking the plugin options/settings
		* Arg(0): null
		* Return: void
		*/
		public static function register()
		{
			register_setting(FOLLOWBMCPLUGINOPTIONS_ID.'_options', 'followbmc_url');
		}
		/** function/method
		* Usage: hooking (registering) the plugin menu
		* Arg(0): null
		* Return: void
		*/
		public static function menu()
		{
			// Create menu tab
			add_options_page(FOLLOWBMCPLUGINOPTIONS_NICK.' Plugin Options', FOLLOWBMCPLUGINOPTIONS_NICK, 'manage_options', FOLLOWBMCPLUGINOPTIONS_ID.'_options', array('FollowBMCPluginOptions', 'options_page'));
		}
		/** function/method
		* Usage: show options/settings form page
		* Arg(0): null
		* Return: void
		*/
		public static function options_page()
		{ 
			if (!current_user_can('manage_options')) 
			{
				wp_die( __('You do not have sufficient permissions to access this page.') );
			}
			
			$plugin_id = FOLLOWBMCPLUGINOPTIONS_ID;
			// display options page
			include(self::file_path('options.php'));
		}
		/** function/method
		* Usage: filtering the content
		* Arg(1): string
		* Return: string
		*/
		
    }
	
	if ( is_admin() )
	{
		add_action('admin_init', array('FollowBMCPluginOptions', 'register'));
		add_action('admin_menu', array('FollowBMCPluginOptions', 'menu'));
	}
endif;

?>