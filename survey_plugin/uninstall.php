<?php

/**
 * Trigger this file on Plugin uninstall
 * 
 * @package Task3Plugin
 */

 if(! defined('WP_UNINSTALL_PLUGIN')) {
   die;
 }

 // Clear Database stored data
//  $books = get_posts(array('post_type' => 'book', 'numberposts' => -1));

//  foreach($books as $book) {
//    wp_delete_post($book->Id, true);
//  }

// same as following SQL code

//Access the database vie SQL
global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN(SELECT id FROM wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN(SELECT id FROM wp_posts)");
