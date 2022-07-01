<?php
/**
 * @package Task3Plugin
 */

 /*
  Plugin Name: Task3 plugin
  Plugin URI:
  Description: Task3 plugin for completeing the task
  Author: ISM
  Author URI: http://tkmgala.tk
  Version: 1.0.0
  License: GPLv2 or later
  Text Domain: task3 plugin
 */

 /*
 The licenses for most software are designed to take away your freedom to share and change it. By contrast, the GNU General Public License is intended to guarantee your freedom to share and change free software--to make sure the software is free for all its users. This General Public License applies to most of the Free Software Foundation's software and to any other program whose authors commit to using it. (Some other Free Software Foundation software is covered by the GNU Lesser General Public License instead.) You can apply it to your programs, too.

 When we speak of free software, we are referring to freedom, not price. Our General Public Licenses are designed to make sure that you have the freedom to distribute copies of free software (and charge for this service if you wish), that you receive source code or can get it if you want it, that you can change the software or use pieces of it in new free programs; and that you know you can do these things.

 Copyright 2005-2015 Automatic, Inc.
 */

 //===== securing your webiste =====

//  if( ! defined('ABSPATH')){
//    die;
//  }

// define('ABSPATH') or die('You can\t acess this file!');

if( ! function_exists('add_action')){
  echo 'bla bla bla bla!';
  exit;
}
 //===== securing your webiste =====


//==================================
if(class_exists('PracticePlugin')) {
  class PracticePlugin {

    // function __construct(){
    //   add_action('init', array($this, 'custom_post_type'));
    // }

    public static function register(){
      add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }
    // function activate(){
    //   //generated a CPT
    //   $this->custom_post_type();
    //   //flush rewrite rules
    //   flush_rewrite_rules();
    // }

    // function deactivate(){
    //   //flush rewrite rules
    //   flush_rewrite_rules();
    // }

    // instead of using this method, we gonna create a separate file for it
    // function uninstall(){
    // }

    //custom post type
    function custom_post_type(){
      register_post_type('book', ['public' => 'true', 'label' => 'Books']);
    }

    function enqueue(){
      // enqueue all our scripts
      wp_enqueue_style('mypluginstyle', plugins_url('/assets/style.css', __FILE__));
    }

    function activate(){
      require_once plugin_dir_path(__FILE__).'inc//plugin_activate.php';
      PracticePluginActivate::activate();
    }

  }


    $practicePlugin = new PracticePlugin();
    $practicePlugin->register();
  

  // activation

  register_activation_hook(__FILE__, array($practicePlugin, 'activate'));
  //  register_activation_hook(__FILE__, array('PracticePluginActivate', 'activate'));

  // deactivation
  require_once plugin_dir_path(__FILE__).'inc//plugin_deactivate.php';
  //  register_deactivation_hook(__FILE__, array($practicePlugin, 'deactivate'));
  register_de activation_hook(__FILE__, array('PracticePluginDeactivate', 'deactivate'));

  // uninstall
  register_uninstall_hook(__FILE__, array($practicePlugin, 'uninstall'));
}