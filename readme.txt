=== Plugin Name ===
Contributors: spike2828
Donate link: http://novadigitalmedia.com/
Tags: webmaster role, add new role, add webmaster role, client role, nova digital media, nova webmaster role, add new role for client, website manager role
Requires at least: 3.0.1
Tested up to: 3.6.1
Stable tag: 4.3
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The Nova Webmaster Role adds a new role between Editor and Administrator

== Description ==
Welcome to the Nova Digital Media Webmaster Role Plugin

This plugin add a new role called webmaster with the following access:

read - true

edit_posts - true

delete_posts - true

activate_plugins - false

delete_others_pages - true

delete_others_posts - true

delete_pages - true

delete_plugins - false

delete_posts - true

delete_private_pages - true

delete_private_posts - true

delete_published_pages - true

delete_published_posts - true

edit_dashboard - false

edit_files - false

edit_others_pages - true

edit_others_posts - true

edit_pages - true

edit_posts - true

edit_private_pages - true

edit_private_posts - true

edit_published_pages - true

edit_published_posts - true

edit_theme_options - true

export - false

import - false

list_users - false

manage_categories - true

manage_links - true

manage_options - false

moderate_comments - true

promote_users - false

publish_pages - true

publish_posts - true

read_private_pages - true

read_private_posts - true

read - true

remove_users - false

switch_themes - false

upload_files - true

create_product - true

You can edit what you would like the user to get access to by using the FAQ guide... You must edit the PHP file >BEFORE< you activate the plugin


Please note once the plugin has been activated you will not be able to remove the user role

If you get a PHP error when install just remove the plugin and the error will disappear but the role will remain on your wordpress site.



Big Thanks to some of <a href="http://www.novadigitalmedia.com" alt="The local marketing experts In Essex">The Best local marketing experts In Essex</a> <a href="http://www.novadigitalmedia.com" alt="The local marketing experts In Essex">Nova Digital Media</a>

== Installation ==

1. Extract and Upload the webmaster role folder to the `/wp-content/plugins/` directory

BEFORE you activate the plugin, if you need to edit what roles you want the user to have, use the FAQ page for help...

Once activated you will not be able to edit the role

2. Activate the plugin through the 'Plugins' menu in WordPress
3. And Enjoy the plugin

== Frequently Asked Questions ==

= What if i don't want the plugin to give access to a part of the website? =

BEFORE you install activate the plugin you must edit the PHP file...

Plugins > Editor > Webmaster Role > nova-webmaster-role.php

To find out what capabilities give what you need to use this link... <a href="http://codex.wordpress.org/Roles_and_Capabilities" >Wordpress Guide</a>

You can give and remove access to parts by putting "true" or "False at the end of each section

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



== Screenshots ==

No Screenshots needed

== Changelog ==

1.0
*Added The role access

== Upgrade Notice ==

2.0 Plans
*create customize option

