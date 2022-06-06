<?php
    namespace Crud\Tutorial\Admin;

    /**
     * the menu handler class
     */

    class Menu{

       public $addressbook;

        function __construct( $addressbook ){

            $this->addressbook = $addressbook;
            add_action( 'admin_menu', [ $this, 'admin_menu']);
        }

        public function admin_menu(){
         /*  $parent_slug = 'practice_crud';
           $capability = 'manage_options';
          add_menu_page( __( 'Crud Tutorial', 'practice_crud' ), __( 'Crud', 'practice_crud' ), $capability, $parent_slug , [ $this, 'addressbook_page' ], 'dashicons-welcome-learn-more' );
          add_submenu_page( $parent_slug, __('Address Book','practice_crud'), __( 'Address Book','practice_crud' ), $capability, $parent_slug, [$this, 'addressbook_page' ] );
          add_submenu_page( $parent_slug, __('Settings','practice_crud'), __( 'Settings page','practice_crud' ), $capability, 'practice_crud_settings', [$this, 'settings_page' ] );

*/
          $parent_slug = 'practice_crud';
          $capability = 'manage_options';
  
          add_menu_page( __( 'Crud Tutoria', 'practice_crud' ), __( 'Crud', 'practice_crud'  ), $capability, $parent_slug, [ $this->addressbook, 'plugin_page' ], 'dashicons-welcome-learn-more' );
          add_submenu_page( $parent_slug, __( 'Address Book', 'practice_crud' ), __( 'Address Book', 'practice_crud' ), $capability, $parent_slug, [$this->addressbook, 'plugin_page' ] );
          add_submenu_page( $parent_slug, __( 'Settings', 'practice_crud' ), __( 'Settings', 'practice_crud' ), $capability, 'practice_crud_settings', [ $this, 'settings_page' ] );
        }


     /*  public function plugin_page(){
            echo 'hello world';
        }
        */
        


        

        public function settings_page(){
            echo 'hello settings_book';
        }
    }