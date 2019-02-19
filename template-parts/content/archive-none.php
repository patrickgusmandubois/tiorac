<?php
/**
 *
 * @link https://blackdigital.com.br
 *
 * @package BlackDigital
 * @subpackage BaseTheme
 * 
 * Listagem de post sem itens para mostrar
 * 
 */
?>

<section class="no-results not-found">
	<div class="page-content">
		<?php
		if ( is_search() ) :
			?>

			<p><?php _e( 'Desculpe, mas nada correspondeu aos seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.', 'black-digital' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php _e( 'Parece que não podemos encontrar o que você está procurando. Talvez a pesquisa possa ajudar.', 'black-digital' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
