<?php
/**
 * Plugin Name: Nova Webmaster Role
 * Plugin URI: http://www.novadigitalmedia.com
 * Description: The Nova Webmaster Role adds a new role between Editor and Administrator
 * Version: 1.0
 * Author: Conor Lyons
 * Author URI: http://conorlyonsuk.com
 * License: GPL2
 */
 
  /*  Copyright 2013  Conor Lyons  (email : c.lyons@novadigitalmedia.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
 
 //Webmaster role
 
 // You can give and remove access to parts by putting "true" or "False at the end of each section
add_role('webmaster', 'Webmaster', array(
    'read' => true,
    'edit_posts' => true,
    'delete_posts' => true,
	'activate_plugins' => false,
	'delete_others_pages' => true,
	'delete_others_posts' => true,
	'delete_pages' => true,
	'delete_plugins' => false,
	'delete_posts' => true,
	'delete_private_pages' => true,
	'delete_private_posts' => true,
	'delete_published_pages' => true,
	'delete_published_posts' => true,
	'edit_dashboard' => false,
	'edit_files' => false,
	'edit_others_pages' => true,
	'edit_others_posts' => true,
	'edit_pages' => true,
	'edit_posts' => true,
	'edit_private_pages' => true,
	'edit_private_posts' => true,
	'edit_published_pages' => true,
	'edit_published_posts' => true,
	'edit_theme_options' => true,
	'export' => false,
	'import' => false,
	'list_users' => false,
	'manage_categories' => true,
	'manage_links' => true,
	'manage_options' => false,
	'moderate_comments' => true,
	'promote_users' => false,
	'publish_pages' => true,
	'publish_posts' => true,
	'read_private_pages' => true,
	'read_private_posts' => true,
	'read' => true,
	'remove_users' => false,
	'switch_themes' => false,
	'upload_files' => true,
	'create_product' => true,
	
));

// RSS Dashboard Widget
function nova_rss_dashboard_widget() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://www.novadigitalmedia.com/feed/' );        
		$limit = $feed->get_item_quantity(20);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>


	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'nova' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<div style="padding-bottom:5px;"></div>
	<?php }
}

function nova_custom_dashboard_widgets() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget', __( 'Recently From Nova Digital Media', 'nova' ), 'nova_rss_dashboard_widget' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets' );
?>

