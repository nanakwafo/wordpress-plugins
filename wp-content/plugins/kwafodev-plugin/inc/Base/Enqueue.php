<?php
/**
 * @package MysitePlugin
 */

namespace Inc\Base;
use \Inc\Base\BaseController;
class Enqueue extends BaseController
{
    public function register(){
        add_action('admin_enqueue_scripts',array($this,'enqueue'));
    }
    public function enqueue(){
        //enqueue all scripts
        wp_enqueue_style('mypluginstyle',$this->plugin_url.'/assets/main.css');
        wp_enqueue_script('mypluginscript',$this->plugin_url.'/assets/main.js');
    }
}