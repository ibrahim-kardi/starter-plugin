<?php
namespace Webtop\StarterPlugin;
/**
 * installer class
 */

 class Installer{
  
    public function run(){

        $this->add_version();
        $this->create_tables();

    }

    public function add_version(){
        $installed = get_option('starter_installed');
        if(!$installed){
            update_option('starter_installed',time());
        }
        update_option('starter_version',STARTER_VERSION);
    }

    public function create_tables() {
        global $wpdb;

        $charset_collate = $wpdb->get_charset_collate();

        $schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}ac_addresses` (
          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
          `name` varchar(100) NOT NULL DEFAULT '',
          `address` varchar(255) DEFAULT NULL,
          `phone` varchar(30) DEFAULT NULL,
          `created_by` bigint(20) unsigned NOT NULL,
          `created_at` datetime NOT NULL,
          PRIMARY KEY (`id`)
        ) $charset_collate";

        if ( ! function_exists( 'dbDelta' ) ) {
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        }

        dbDelta( $schema );
    }

  

 }