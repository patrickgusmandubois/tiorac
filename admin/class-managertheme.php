<?php
/**
 *
 * @link https://blackdigital.com.br
 *
 * @package BlackDigital
 * @subpackage BaseTheme
 * 
 * Classe de manuseio de ferramentas do tema (Em teste)
 * 
 */

class ManagerTheme {
 
    /**
    * @param 
    */
    public function __construct( ) {
        UpdateManager::get_instance();
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
            array( UpdateManager::get_instance(), 'render' )
        );
    }
}
