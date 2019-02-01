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
        $updates[] = array(
			'label'     => $label,
			'uri'       => $uri,
			'origin'    => $origin,
			'branch'    => $branch
        );
    }

    private function atualizarTemas() {
        $current = getcwd();
        var_dump($this->$updates);

        foreach($this->$updates as $update) {
            chdir($update["uri"]);
            $cmd = "git pull {origin} {branch} 2>&1";
            $cmd = str_replace("{origin}", $update["origin"], $cmd);
            $cmd = str_replace("{branch}", $update["branch"], $cmd);
            exec($cmd, $output);
            print_r($output);
        }

        chdir($current);
        echo " - Fim5";
    }
 
    public function render() {
        ?>
            <div class="wrap">    
                <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

                <form method="post" name="test-button">
                    <span id="test-button">
                        <h2>Atualização</h2>
                        <input id="test-settings" type="submit" value="Atualizar Temas" class="button" name="blackdigital-atualizar" >
                        <p>Essa ação irá forçar uma atualização do tema, isso pode quebrar o site.</p>
                    </span>
                </form>
            </div><!-- .wrap -->
        <?php

        foreach($_POST as $key=>$post_data){
            if ($key == "blackdigital-atualizar") {
                $this->atualizarTemas();
            }
        }
    }
}