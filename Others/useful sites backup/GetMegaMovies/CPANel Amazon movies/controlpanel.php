<?php   
    /* 
    Plugin Name: ControlPanel
    Plugin URI: http://www.warriorforum.com/members/coolice.html
    Description: ControlPanel plugin controls your StoreClone website. It must always stay active for your website to function properly!
    Author: Coolice
    Version: 1.0 
    Author URI: http://www.warriorforum.com/members/coolice.html
    */  
	 
	 
	 function my_admin_notice(){
	 if (isset($_POST['submit'])) {
	 echo '<div class="updated fade"><p>Your <u>changes</u> have been submited successfully. <b>Please wait... <i>Clearing up cache now...</i></b> </p></div>';
	 }
	 if (isset($_POST['submit2'])) {
	 echo '<div class="updated fade"><p>Your <u>updates</u> have been executed successfully. <b>Please wait... <i>Clearing up cache now...</i></b> </p></div>';
	 }
	 }
	 add_action('admin_notices', 'my_admin_notice');
	 
	 
	 add_option("amazon_accesskey", "", "", "");
	 add_option("amazon_secretkey", "", "", "");
	 add_option("amazon_associate", "", "", "");
	 add_option("amazon_locale", "amazon.com", "", "");
	 add_option("amazon_category", "All Categories", "", "");
	 add_option("amazon_type", "", "", "");
	 add_option("amazon_brand", "", "", "");
	 add_option("amazon_platform", "All Platforms", "", "");
	 add_option("show_slideshow", "1", "", "");
	 add_option("show_toppicks", "1", "", "");
	 add_option("show_categories", "1", "", "");
	 add_option("show_brands", "1", "", "");
	 add_option("show_platforms", "1", "", "");
	 add_option("show_news", "1", "", "");
	 add_option("show_prices", "1", "", "");
	 add_option("show_similar", "1", "", "");
	 add_option("show_comments", "1", "", "");
	 
	 
    function controlpanel() {
    global $wp_admin_bar, $wpdb;
    if ( !is_super_admin() || !is_admin_bar_showing() )
    return;
    /* Add the main siteadmin menu item */
    $wp_admin_bar->add_menu( array( 'id' => 'updates2', 'title' => __( '<img src="../wp-content/plugins/controlpanel/icon1.png" style="padding-top:5px;padding-right:5px;float:left;"> ControlPanel' ), 'href' => admin_url('admin.php?page=controlpanel/controlpanel_main.php')) );
	$wp_admin_bar->add_menu( array( 'parent' => 'updates2', 'title' => "Main Settings", 'href' => admin_url('admin.php?page=controlpanel/controlpanel_main.php')) );
	$wp_admin_bar->add_menu( array( 'parent' => 'updates2', 'title' => "Usage Instructions", 'href' => admin_url('admin.php?page=controlpanel/controlpanel_instructions.php')) );
    $wp_admin_bar->add_menu( array( 'parent' => 'updates2', 'title' => "Empty All Caches", 'href' => wp_nonce_url(admin_url('admin.php?page=w3tc_general&amp;w3tc_flush_all'), 'w3tc')) );
    }
    add_action( 'admin_bar_menu', 'controlpanel' );
	
	add_action('admin_menu', 'register_custom_menu_page');

	
	
	
function register_custom_menu_page() {
   add_menu_page('ControlPanel -> Main Settings', 'ControlPanel', 'manage_options', 'controlpanel/controlpanel_main.php', '',   plugins_url('controlpanel/icon3.png'), 61);
   add_submenu_page( 'controlpanel/controlpanel_main.php', 'ControlPanel -> Main Settings', 'Main Settings', 'manage_options', 'controlpanel/controlpanel_main.php', '' ); 
      add_submenu_page( 'controlpanel/controlpanel_main.php', 'ControlPanel -> Usage Instructions', 'Usage Instructions', 'manage_options', 'controlpanel/controlpanel_instructions.php', '' ); 
	  $urll = wp_nonce_url('admin.php?page=w3tc_general&amp;w3tc_flush_all', 'w3tc');
      add_submenu_page( 'controlpanel/controlpanel_main.php', 'ControlPanel -> Empty All Caches', 'Empty All Caches', 'manage_options', "$urll", '' );
}

	
	
	
// Adding a news feed widget to the dashboard
 function wp_admin_dashboard_add_news_feed_widget() {
 global $wp_meta_boxes;

 // Our new dashboard widget
 wp_add_dashboard_widget( 'dashboard_clonescripts_feed', 'Latest Script Updates from Coolice', 'dashboard_coolice_feed_output' );
 }
 add_action('wp_dashboard_setup', 'wp_admin_dashboard_add_news_feed_widget');

 function dashboard_coolice_feed_output() {
 echo '<div>';
 wp_widget_rss_output(array(
 'url' => 'http://coolice.co/feed',
 'title' => 'Latest Script Updates from Coolice',
 'items' => 2,
 'show_summary' => 1,
 'show_author' => 0,
 'show_date' => 1
 ));
 echo "</div>";
 }
 