<?php
/**
 * @package Custom_Admin_Settings
 */
 
/**
 * @package Custom_Admin_Settings
 */
class ThemeTool_Page {

    protected $updates = array();

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
        $output= array();

        foreach($this->updates as $update) {
            chdir($update["uri"]);
            $cmd = "git pull {origin} {branch} 2>&1";
            $cmd = str_replace("{origin}", $update["origin"], $cmd);
            $cmd = str_replace("{branch}", $update["branch"], $cmd);
            exec($cmd, $output);
        }

        chdir($current);
        echo " - Fim5";
        return $output;
    }
 
    public function render() {
        $results = array();

        foreach($_POST as $key=>$post_data){
            if ($key == "blackdigital-atualizar") {
                $results[] = $this->atualizarTemas();
            }
        }

        require_once get_template_directory() . '/admin/view.php';
    }
}