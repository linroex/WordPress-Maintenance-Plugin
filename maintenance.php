<?php
    /*
         * Plugin Name: WP Maintenance Plugin by linroex 
         * Plugin URI: https://github.com/linroex/WordPress-Maintenance-Plugin
         * Description: 讓訪客無法瀏覽網站，但登入用戶可以瀏覽的外掛
         * Version: 0.1.1
         * Author: linroex
         * Author URI: http://me.coder.tw
     */
    
    
    function maintenance_run(){
        if(!is_user_logged_in()){
            
            if(strpos($_SERVER['PHP_SELF'], 'wp-login.php') === false){

                $url = plugins_url() . '/' . plugin_basename(dirname(__FILE__)) . '/custom.php';
                header("location: $url");
                die();
            }
            
        }
        
        
    }
    add_action('init','maintenance_run');