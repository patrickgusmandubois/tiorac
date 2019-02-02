<?php
/**
 * @package Custom_Admin_Settings
 */
 
/**
 * @package Custom_Admin_Settings
 */
class ThemeTool_Page {

    protected $updates = array();
    protected $results_updates = array();

    public function __construct() {
        //$this->wp_version = $GLOBALS['wp_version'];
    }

    public function insertToUpdate($label, $uri, $origin, $branch) {
        $this->updates[] = array(
			'label'     => $label,
			'uri'       => $uri,
			'origin'    => $origin,
			'branch'    => $branch
        );
    }

    private function atualizarTemas() {
        $current = getcwd();

        foreach($this->updates as $update) {
            chdir($update["uri"]);
            $cmd = "git pull {origin} {branch} 2>&1";
            $cmd = str_replace("{origin}", $update["origin"], $cmd);
            $cmd = str_replace("{branch}", $update["branch"], $cmd);
            exec($cmd, $output);
            $this->results_updates[] = $output
        }

        chdir($current);
        echo " - Fim5";
    }
 
    public function render() {

        foreach($_POST as $key=>$post_data){
            if ($key == "blackdigital-atualizar") {
                $this->atualizarTemas();
            }
        }

        require_once get_template_directory() . '/admin/view.php';
    }
}