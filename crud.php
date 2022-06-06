<?php
/**
 * Plugin Name:       Practice Crud
 * Plugin URI:        https://abc.com/plugins/the-basics/
 * Description:       Plugin is made for practice
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Bijit Deb
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


 //don't call the file directly
 if ( !defined( 'ABSPATH' ) ) exit;


 /**
  * the main plugin class
  */

  require_once __DIR__ . '/vendor/autoload.php';

  final class Crud{

    /**
     * Plugin version
     *
     * @var string
     */
    const version = '1.0';

    /**
     * Class constructor
     */
     private function __construct(){
         $this->define_constants();

         register_activation_hook( __FILE__, [$this, 'activate' ] );

         add_action( 'plugins_loaded', [ $this, 'init_plugin' ]  );

      }
      /**
       * Initializes a singelton instance
       * 
       * @return \crud
       */

      public static function init(){
          static $instance = false;

          if(!$instance){
              $instance = new self();
          }

          return $instance;
      }

      /**
       * define the required plugin constants
       * @return void
       */


      public function define_constants(){
          define('WD_ACADEMY_VERSION', self::version);
          define('WD_ACADEMY_FILE', __FILE__);
          define('WD_ACADEMY_PATH', __DIR__);
          define('WD_ACADEMY_URL', plugins_url('',WD_ACADEMY_FILE) );
          define('WD_ACADEMY_ASSETS', WD_ACADEMY_URL . '/assets' );
      }

      /**
       * Initialize the plugin
       * 
       * @return void
       */
      public function init_plugin(){

        if ( is_admin() ){

            new Crud\Tutorial\Admin();

        } else { 

            new Crud\Tutorial\Frontend();

        }

        
      }

      /**
       * Do stuff upon plugin activation
       */
      public function activate(){

        $installer = new Crud\Tutorial\Installer();
        $installer->run(); 

      }
  }

  /**
   * Initialize the main page
   * 
   * @return \Crud
   */

  function crud(){
      return Crud::init();
  }


  crud();