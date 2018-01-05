<?php 
	//an attempt to add new functions to the customizer
	function bronson_customize_register( $wp_customize ){
		//page dropdown
		$wp_customize->add_section('dropdown', array(
			'title'  => __('Dropdown', 'bronson-theme'),
			'description'  => sprintf(__('Dropdown menu for theme')),
			'priority' => 130
		));

		$wp_customize->add_setting('dropdown_heading', array(
			'capability'  => 'edit_theme_options',
			'type'		  => 'theme_mod'
		));

		$wp_customize->add_control('dropdown_heading', array(
			'label'		  => __('Heading', 'bronson-theme'),
			'section'	  => 'dropdown',
			'priority'	  => 1
		));
	}

	add_action('customize_register', 'bronson_customize_register');


 