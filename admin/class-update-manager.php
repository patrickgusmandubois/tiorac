<?php
/**
 * @package Custom_Admin_Settings
 */
 
/**
 * @package Custom_Admin_Settings
 */
class UpdateManager {

    protected $updates = array();
    protected $results_updates = array();
    protected static $instance = NULL;

    public function __construct() {
        //$this->wp_version = $GLOBALS['wp_version'];
    }

    public static function get_instance() {
        NULL === self::$instance and self::$instance = new self;
        return self::$instance;
    }

    public function insertToUpdate($label, $uri, $origin, $branch) {
        foreach($this->updates as $update) {
            if ($update["uri"] == $uri) {
                return;
            }
        }

        $this->updates[] = array(
			'label'     => $label,
			'uri'       => $uri,
			'origin'    => $origin,
			'branch'    => $branch
        );
    }

    private function atualizarTemas() {
        $current = getcwd();
        $this->results_updates = array();

        foreach($this->updates as $update) {
            chdir($update["uri"]);
            $cmd = "git pull {origin} {branch} 2>&1";
            $cmd = str_replace("{origin}", $update["origin"], $cmd);
            $cmd = str_replace("{branch}", $update["branch"], $cmd);
            exec($cmd, $output);
            $this->results_updates[] = $output;
        }

        chdir($current);
    }
 
    public function render() {

        foreach($_POST as $key=>$post_data){
            if ($key == "blackdigital-atualizar") {
                $this->atualizarTemas();
            }
        }

        require_once get_template_directory() . '/admin/view.php';
        $this->results_updates = array();
    }
}