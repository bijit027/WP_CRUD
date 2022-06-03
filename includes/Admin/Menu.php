<?php
    namespace Crud\Tutorial\Admin;

    /**
     * the menu handler class
     */

    class Menu{

        function __construct(){
            add_action( 'admin_menu', [ $this, 'admin_menu']);
        }

        public function admin_menu(){
           
          add_menu_page( __( 'Crud Tutorial', 'practice_crud' ), __( 'Crud', 'practice_crud' ), 'manage_options', 'practice_crud', [ $this, 'plugin_page' ], 'dashicons-welcome-learn-more' );
        }


        public function plugin_page(){
            echo 'hello world';
        }
    }