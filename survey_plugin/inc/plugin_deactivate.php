<?php
/**
 * @package Task3Plugin
 */

 class PracticePluginDeactivate{
   public static function deactivate(){
     flush_rewrite_rules();
   }
 }