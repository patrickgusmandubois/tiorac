<?php
/**
 * @package Custom_Admin_Settings
 */

class ManagerTheme {
 
    /**
    * @var    
    * @access private
    */
    private $themetool_page;

    /**
    * @param 
    */
    public function __construct( ) {
        UpdateManager->get_instance();
    }

    public function init() {
        add_action( 'admin_menu', array( $this, 'add_management_page' ) );
    }

    public function add_management_page() {

        add_management_page(
            'Ferramentas do Tema',
            'Ferramentas do Tema',
            'manage_options',
            'theme-tool',
            array( UpdateManager->get_instance(), 'render' )
        );
    }
}
