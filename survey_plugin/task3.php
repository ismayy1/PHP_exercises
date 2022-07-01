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

 add_action("admin_menu", "addmenu");
 function addMenu(){
   add_menu_page("Task3 options", "Task3 options", 4, "tak3", "task3Manu");
   add_submenu_page("task3-options", "Option 1", "Option 1", 4, "task3-option-1", "option1");
 }

 function task3Menu(){
   echo "Hello task!";
 }

 function option1(){
   echo "Ismail";
 }