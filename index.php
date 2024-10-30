<?php
      /*
      Plugin Name: Calendar Event
      Plugin URI: https://total-soft.com/wp-event-calendar/
      Description: Event Calendar plugin created for showing your events. Total-Soft Calendar is the best if you want to be original on your website.
      Author: totalsoft
      Version: 1.4.7
      Author URI: https://total-soft.com/
      License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
      */
	require_once(dirname(__FILE__) . '/Includes/Total-Soft-Calendar-Widget.php');
	require_once(dirname(__FILE__) . '/Includes/Total-Soft-Calendar-Ajax.php');
	add_action('wp_enqueue_scripts', 'TotalSoft_Cal_Widget_Style');
	function TotalSoft_Cal_Widget_Style(){
		wp_register_style('Total_Soft_Cal', plugins_url('/CSS/Total-Soft-Calendar-Widget.css',__FILE__ ));
		wp_enqueue_style('Total_Soft_Cal');
		wp_register_script('Total_Soft_Cal',plugins_url('/JS/Total-Soft-Calendar-Widget.js',__FILE__),array('jquery','jquery-ui-core'));
		wp_enqueue_script('Total_Soft_Cal');
		wp_enqueue_script("jquery");
		wp_register_style('fontawesome-css', plugins_url('/CSS/totalsoft.css', __FILE__)); 
		wp_enqueue_style('fontawesome-css');
	}
	add_action('widgets_init', 'TotalSoft_Cal_Widget_Reg');
	function TotalSoft_Cal_Widget_Reg(){
		register_widget('Total_Soft_Cal');
	}
	add_action("admin_menu", 'TotalSoft_Cal_Admin_Menu');
	function TotalSoft_Cal_Admin_Menu(){
		add_menu_page('Admin Menu',__( 'Calendar', 'Total-Soft-Calendar' ), 'manage_options','Total_Soft_Cal', 'Add_New_Calendar',plugins_url('/Images/admin.png',__FILE__));
		add_submenu_page('Total_Soft_Cal', 'Admin Menu', __( 'Calendar Manager', 'Total-Soft-Calendar' ), 'manage_options', 'Total_Soft_Cal', 'Add_New_Calendar');
		add_submenu_page('Total_Soft_Cal', 'Admin Menu', __( 'Event Manager', 'Total-Soft-Calendar' ), 'manage_options', 'Total_Soft_Events', 'Total_Soft_Event');
		add_submenu_page('Total_Soft_Cal', 'Admin Menu', __( 'Total Products', 'Total-Soft-Calendar' ), 'manage_options', 'Total_Soft_Products', 'Total_Soft_Product_Cal');
	}
	function Add_New_Calendar()
	{
		wp_register_script('Total_Soft_Cal', plugins_url('/JS/Total-Soft-Calendar-Admin.js',__FILE__),array('jquery','jquery-ui-core'));
		wp_localize_script('Total_Soft_Cal','ts_calendar_object', array('ajaxurl'=>admin_url('admin-ajax.php'),'tsc_nonce' => wp_create_nonce( 'tsc_admin_nonce_field' )));
		wp_enqueue_script('Total_Soft_Cal');
		wp_enqueue_script("jquery");
		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_style('wp-color-picker');
		wp_enqueue_script('wp-color-picker');
		wp_register_style('fontawesome-css', plugins_url('/CSS/totalsoft.css', __FILE__)); 
		wp_enqueue_style('fontawesome-css');
				wp_enqueue_script(
			'alpha-color-picker',
			plugins_url('/JS/alpha-color-picker.js', __FILE__),
			array( 'jquery', 'wp-color-picker' ), // You must include these here.
			null,
			true
		);
		wp_enqueue_style(
			'alpha-color-picker',
			plugins_url('/CSS/alpha-color-picker.css', __FILE__),
			array( 'wp-color-picker' ) // You must include these here.
		);
		require_once(dirname(__FILE__) . '/Includes/Total-Soft-Calendar-New.php');
	}
	function Total_Soft_Event()
	{
		wp_enqueue_media();
		wp_register_script('Total_Soft_Cal', plugins_url('/JS/Total-Soft-Calendar-Admin.js',__FILE__),array('jquery','jquery-ui-core'));
		wp_localize_script('Total_Soft_Cal','ts_calendar_object', array('ajaxurl'=>admin_url('admin-ajax.php'),'tsc_nonce' => wp_create_nonce( 'tsc_admin_nonce_field' )));
		wp_enqueue_script('Total_Soft_Cal');
		wp_enqueue_script("jquery");
		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_style('wp-color-picker');
		wp_enqueue_script('wp-color-picker');
		wp_register_style('fontawesome-css', plugins_url('/CSS/totalsoft.css', __FILE__)); 
		wp_enqueue_style('fontawesome-css');
				wp_enqueue_script(
			'alpha-color-picker',
			plugins_url('/JS/alpha-color-picker.js', __FILE__),
			array( 'jquery', 'wp-color-picker' ), // You must include these here.
			null,
			true
		);
		wp_enqueue_style(
			'alpha-color-picker',
			plugins_url('/CSS/alpha-color-picker.css', __FILE__),
			array( 'wp-color-picker' ) // You must include these here.
		);
		require_once(dirname(__FILE__) . '/Includes/Total-Soft-Calendar-Events.php');
	}
	function TotalSoftCalInstall()
	{
		require_once(dirname(__FILE__) . '/Includes/Total-Soft-Calendar-Install.php');
	}
	function Total_Soft_Product_Cal()
	{
		require_once(dirname(__FILE__) . '/Includes/Total-Soft-Products.php');
	}
	register_activation_hook(__FILE__,'TotalSoftCalInstall');
	function Total_SoftCal_Short_ID($atts, $content = null)
	{
		$atts=shortcode_atts(
			array(
				"id"=>"1"
			),$atts
		);
		return Total_Soft_Draw_Cal($atts['id']);
	}
	add_shortcode('Total_Soft_Cal', 'Total_SoftCal_Short_ID');
	function Total_Soft_Draw_Cal($Cal)
	{
		ob_start();
			$args = shortcode_atts(array('name' => 'Widget Area','id'=>'','description'=>'','class'=>'','before_widget'=>'','after_widget'=>'','before_title'=>'','AFTER_TITLE'=>'','widget_id'=>'','widget_name'=>'Total Soft Calendar'), $Cal, 'Total_Soft_Cal' );
			$Total_Soft_Cal=new Total_Soft_Cal;
			$instance=array('Total_Soft_Cal'=>$Cal);
			$Total_Soft_Cal->widget($args,$instance);
			$cont[]= ob_get_contents();
		ob_end_clean();
		return $cont[0];
	}
	add_action('init', 'TotalSoft_textdomain');
	function TotalSoft_textdomain() 
	{
		$path = dirname(plugin_basename(__FILE__)) . '/languages/';
		$loaded = load_plugin_textdomain('Total-Soft-Calendar', false, $path);
	}
	add_action('admin_init', 'TotalSoft_Cal_Admin_Style');
	function TotalSoft_Cal_Admin_Style(){
		wp_register_style('Total_Soft_Cal', plugins_url('/CSS/Total-Soft-Calendar-Admin.css',__FILE__));
		wp_enqueue_style('Total_Soft_Cal' );
	}
	function Total_Soft_Calendar_settings_link($links)
	{
		$forum_link   = '<a target="_blank" href="https://wordpress.org/support/plugin/calendar-event/"> Support </a>';
		$premium_link = '<a target="_blank" href="https://total-soft.com/wp-event-calendar/"> Pro Version </a>';
		array_push($links, $forum_link);
		array_push($links, $premium_link);
		return $links; 
	}
	$plugin = plugin_basename(__FILE__);
	add_filter("plugin_action_links_$plugin", 'Total_Soft_Calendar_settings_link' );
?>