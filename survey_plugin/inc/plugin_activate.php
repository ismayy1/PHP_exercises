<?php
/**
 * @package Task3Plugin
 */

 class PracticePluginActivate{
   public static function activate(){
     flush_rewrite_rules();
   }
 }