<?php
/**
 * @package Custom_Admin_Settings
 */
 
/**
 * @package Custom_Admin_Settings
 */
class Submenu_Page {
 
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

    private function atualizarTemas() {
        $current = getcwd();

        chdir(get_template_directory());

        exec("git pull origin master 2>&1", $output);
        print_r($output);

        chdir($current);

        echo " - Fim4";
    }
}