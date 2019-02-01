<?php

function blackdigital_customizer( $wp_customize ){

	//
	// Contato
	//
	$wp_customize->add_section( 
		'sec_contato', array(
			'title' => __( 'Contato', 'black-digital'),
			'description' => __( 'Insira os dados de contatos que serão usados no site', 'black-digital' )
		)
	);

	//Celular
	$wp_customize->add_setting(
		'set_celular', array(
			'type' => 'theme_mod',
			'default' => __('(11) 99999-9999', 'black-digital'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_celular', array(
			'label' => __( 'Celular', 'black-digital' ),
			'description' => __( 'Adicione o número de celular', 'black-digital' ),
			'section' => 'sec_contato',
			'type' => 'text'
		)
	);

	//Telefone
	$wp_customize->add_setting(
		'set_telefone', array(
			'type' => 'theme_mod',
			'default' => __('(11) 5555-5555', 'black-digital'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_telefone', array(
			'label' => __( 'Telefone', 'black-digital' ),
			'description' => __( 'Adicione o número de telefone', 'black-digital' ),
			'section' => 'sec_contato',
			'type' => 'text'
		)
	);


	//E-mail
	$wp_customize->add_setting(
		'set_email', array(
			'type' => 'theme_mod',
			'default' => __('exemplo@mail.com', 'black-digital'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_email', array(
			'label' => __( 'E-mail', 'black-digital' ),
			'description' => __( 'Adicione o e-mail de contato', 'black-digital' ),
			'section' => 'sec_contato',
			'type' => 'text'
		)
	);

	//Endereço
	$wp_customize->add_setting(
		'set_endereco', array(
			'type' => 'theme_mod',
			'default' => __('R. Teste, 99 Centro - SP', 'black-digital'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_endereco', array(
			'label' => __( 'Endereço', 'black-digital' ),
			'description' => __( 'Adicione o endereço da empresa', 'black-digital' ),
			'section' => 'sec_contato',
			'type' => 'text'
		)
	);

	//CEP
	$wp_customize->add_setting(
		'set_cep', array(
			'type' => 'theme_mod',
			'default' => __('99999-999', 'black-digital'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_cep', array(
			'label' => __( 'CEP', 'black-digital' ),
			'description' => __( 'Adicione o CEP do endereço da empresa', 'black-digital' ),
			'section' => 'sec_contato',
			'type' => 'text'
		)
	);

	//
	// Redes Sociais
	//
	$wp_customize->add_section( 
		'sec_rede_social', array(
			'title' => __( 'Redes Sociais', 'black-digital'),
			'description' => __( 'Insira os links das suas Redes Sociais', 'black-digital' )
		)
	);

	//Facebook
	$wp_customize->add_setting(
		'set_facebook', array(
			'type' => 'theme_mod',
			'default' => __('https://www.facebook.com/tioraclab/', 'black-digital'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_facebook', array(
			'label' => __( 'Facebook', 'black-digital' ),
			'description' => __( 'Adicione o link do seu Facebook', 'black-digital' ),
			'section' => 'sec_rede_social',
			'type' => 'text'
		)
	);

	//Instagram
	$wp_customize->add_setting(
		'set_instagram', array(
			'type' => 'theme_mod',
			'default' => __('https://www.instagram.com/tioraclab/', 'black-digital'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_instagram', array(
			'label' => __( 'Instagram', 'black-digital' ),
			'description' => __( 'Adicione o link do seu Instagram', 'black-digital' ),
			'section' => 'sec_rede_social',
			'type' => 'text'
		)
	);


	//YouTube
	$wp_customize->add_setting(
		'set_youtube', array(
			'type' => 'theme_mod',
			'default' => __('https://www.youtube.com/channel/UCTdmrZOnOANE4hyGE4mP8PQ', 'black-digital'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_youtube', array(
			'label' => __( 'YouTube', 'black-digital' ),
			'description' => __( 'Adicione o link do seu YouTube', 'black-digital' ),
			'section' => 'sec_rede_social',
			'type' => 'text'
		)
	);
}
add_action( 'customize_register', 'blackdigital_customizer' );