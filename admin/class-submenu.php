<?php
/**
 * @package Custom_Admin_Settings
 */

class Submenu {
 
    /**
    * @var    Submenu_Page
    * @access private
    */
    private $themetool_page;

    /**
    * @param Submenu_Page
    */
    public function __construct( $themetool_page ) {
        $this->themetool_page = $themetool_page;
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
            array( $this->themetool_page, 'render' )
        );
    }
}
