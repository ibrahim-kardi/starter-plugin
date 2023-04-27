<?php 

namespace Webtop\StarterPlugin\Admin;

class Menu{
    public $addressbook;
    function __construct($addressbook)
    {   
       $this->addressbook= $addressbook;
        add_action('admin_menu',[$this,'admin_menu']);
    }

    public function admin_menu(){
        $parent_slug= "starter";
        $capability = 'manage_options';
        $hook=add_menu_page(__('Starter','starter'),__('Starter','starter'),$capability,$parent_slug,[$this->addressbook,'plugin_page'],'dashicons-welcome-learn-more
        ');
        add_submenu_page($parent_slug,__('Address Book','starter'),__('Address Book','starte'),$capability,$parent_slug,[$this->addressbook,'plugin_page']);
        add_submenu_page($parent_slug,__('Address Settings','starter'),__('Address Settings','starte'),$capability,'address-settings',[$this,'settings_page']);
        add_action( 'admin_head-' . $hook, [ $this, 'enqueue_assets' ] );


    }
  

  
    public function settings_page(){
        echo 'this settings page';
    }

     /**
     * Enqueue scripts and styles
     *
     * @return void
     */
    public function enqueue_assets() {
        wp_enqueue_style( 'academy-admin-style' );
    }
}