<?php
/**
 * Plugin Name: Quiz survey plugin
 * Description: Handle the custom functions for the Quiz survey
 */

 // Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );