<?php
/*

*/

?>

<div class="wrap">    
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

    <form method="post" name="test-button">
        <span id="test-button">
            <h2>Atualização</h2>
            <ul>
                <?php foreach($this->updates as $update) { ?>
                    <li><?php echo $update["label"] ?></li>
                <?php } ?>
            </ul>
            <input id="test-settings" type="submit" value="Atualizar Temas" class="button" name="blackdigital-atualizar" >
            <p>Essa ação irá forçar uma atualização do tema, isso pode quebrar o site.</p>
        </span>
    </form>

    <?php foreach($this->results_updates as $result){ ?>
        <div class="result">
            <?php foreach($output as $result){ ?>
                <p><?php echo $output; ?></p>
            <?php } ?>        
        </div>
    <?php } ?>

</div><!-- .wrap -->
<?php