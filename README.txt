=== Chapters for Authors ===
Contributors: deviodigital
Donate link: https://www.deviodigital.com
Tags: chapters, authors, writers, books
Requires at least: 3.0.1
Tested up to: 5.6
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Write your next book from the comfort of the WordPress dashboard.

== Description ==

Write your next book from the comfort of the WordPress dashboard, categorizing the chapters by Book name and even adding the character names that appear in each chapter.

You also have the option to add in your own custom quote for the beginning of your chapter.

== Installation ==

1. Upload `chapters-for-authors.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to `Settings -> Permalinks` and re-save your settings if you're using Custom permalink settings

== Screenshots ==

1. The Chapters post type in the admin dashboard menu
2. The available options for the Chapters post type
3. Add Chapter page with Gutenberg support (WordPress 5.0+)

== Changelog ==

= 1.1 =
* Added REST API support for Chapters post type in `admin/class-chapters-for-authors-custom-post-type.php`
* Added page-attributes to Chapters CPT support in `admin/class-chapters-for-authors-custom-post-type.php`
* Added flush rewrite rules on activation for Chapters CPT and taxonomies in `includes/class-chapters-for-authors-activator.php`
* Updated add_new text for Chapters CPT in `admin/class-chapters-for-authors-custom-post-type.php`
* Updated Introduction metabox title in `admin/class-chapters-for-authors-metaboxes.php`
* Updated text strings for localization in `admin/class-chapters-for-authors-metaboxes.php`
* Updated code escape to the quote and author variables in `admin/class-chapters-for-authors-metaboxes.php`
* Updated `.pot` file with text strings for localization in `languages/chapters-for-authors.pot`
* General code cleanup throughout various files

= 1.0.0 =
Initial release.
