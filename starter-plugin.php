<?php 
/**
 * Plugin Name: starter plugin
 * Description: It is a starter 
 * Author: kardi
 * Author URI: https://www.webtoptemplates.com
 * Version: 1.0.0
 * Text Domain: starter
 * Domain Path: /languages
 * Tested up to: 6.2
 *
 *
 * @package Starter
 */


 if( !defined('ABSPATH')){
    exit;
 }

 require_once __DIR__ .'/vendor/autoload.php';

/**
 * The main plugin class
 */

 final class Starter{

    /**
     * plugin version
     */
    const version = 1.0;

    /**
     * class constructor
     */

     private function __construct(){
        $this->define_constants();
        register_activation_hook(__FILE__,[$this,'activate']);
        add_action('plugins_loaded',[$this,'init_plugin']);
     }

     /**
      * initialize a singleton instance 
      *return \Starter
      */

      public static function init(){
        static $instance = false;
        if( ! $instance){
            $instance = new self();
        }
        return $instance;
      }

      public function define_constants(){
        define('STARTER_VERSION',self::version);
        define('STARTER_FILE',__FILE__);
        define('STARTER_PATH',__DIR__);
        define('STARTER_URL',plugins_url('', STARTER_FILE ));
        define('STARTER_ASSETS',STARTER_URL.'/assets');

      }

      /**
       * do when plugin activate
       */

      public function activate(){
       $installer = new \Webtop\StarterPlugin\Installer();
       $installer->run();
      }

      /**
       * initialize plugin classes after loaded
       */

      public function init_plugin(){
        new Webtop\StarterPlugin\Assets();
        if(is_admin()){
            new  Webtop\StarterPlugin\Admin();
        }
        else{

            new \Webtop\StarterPlugin\Frontend();

        }

      }


 }
 /**
  * initialize the main plugin
  *@return \Starter
  */

  function starter_func(){
    return Starter::init();
  }

  /**
   * kick of the plugin
   */
  starter_func();
