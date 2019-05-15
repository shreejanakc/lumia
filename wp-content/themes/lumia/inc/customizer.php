<?php

function lumia_customizer_options(  $wp_customize ) {

	//flex slider
	$wp_customize->add_panel( 'slider_panel', array(
				'title'		 => esc_html__( 'Slider', 'lumia' ),
				'capability' => 'edit_theme_options',
				
	));
	$wp_customize->add_section( 'slider_section', array(
				'panel' => 'slider_panel',
				'title' => esc_html__( 'Slider', 'lumia' ),
				
	));


/*No.of slider*/
	$wp_customize->add_setting( 'slider_no_setting', array(
				'capability' => 'edit_theme_options',
				'default'	 => 3,
	));

	$wp_customize->add_control( 'slider_no_setting', array(
				'section'  => 'slider_section',
				'settings' => 'slider_no_setting',
				'label'	   => esc_html__( 'Total Number of slider' ),
	));

/* Upload Image*/
	$slider = get_theme_mod( 'slider_no_setting', 3 );
	for ( $i=1; $i <= $slider; $i++ ) {

		$wp_customize->add_setting( 'slider_text_setting' .$i, array(
				'capability' => 'edit_theme_options',
				'default'	 => '',

		));
		$wp_customize->add_control( 'slider_text_setting' .$i, array(
					'type'	   => 'text',
					'section'  => 'slider_section',
					'settings' => 'slider_text_setting' .$i,
					'label'	   =>  sprintf(__( 'slider heading text %1$s', 'lumia'), $i ),
					
		));
		$wp_customize->add_setting( 'slider_subtext_setting' .$i, array(
				'capability' => 'edit_theme_options',
				'default'	 => '',

		));
		$wp_customize->add_control( 'slider_subtext_setting' .$i, array(
					'type'	   => 'text',
					'section'  => 'slider_section',
					'settings' => 'slider_subtext_setting' .$i,
					'label'	   =>  sprintf(__( 'slider subheading text %1$s', 'lumia'), $i ),
					
		));
		$wp_customize->add_setting( 'slider_image_setting'.$i, array(
				'capability' => 'edit_theme_options',
				'default'	 => '',
		));

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize, 'slider_image_setting'.$i, array(
				'label'   => esc_html__( 'Upload Image', 'lumia' ),
				'section' => 'slider_section',
				'settings'=> 'slider_image_setting'.$i,
				'label'	  => sprintf(__( 'slider image %1$s', 'lumia'), $i ),
		)));
	
	}



	//carousel slide for latest work
	$wp_customize->add_panel( 'latest_work_panel', array(
				'title'		 => esc_html__( 'Latest Work', 'lumia' ),
				'capability' => 'edit_theme_options',
				
	));
	$wp_customize->add_section( 'latest_work_section', array(
				'panel' => 'latest_work_panel',
				'title' => esc_html__( 'Slider', 'lumia' ),
				
	));


	/*No.of slider*/
	$wp_customize->add_setting( 'latest_work_slider_no_setting', array(
				'capability' => 'edit_theme_options',
				'default'	 => 6,
	));

	$wp_customize->add_control( 'latest_work_slider_no_setting', array(
				'section'  => 'latest_work_section',
				'settings' => 'latest_work_slider_no_setting',
				'label'	   => esc_html__( 'Total Number of slider' ),
	));

	/* Upload Image*/
	$latestslide = get_theme_mod( 'latest_work_slider_no_setting', 6 );
	for ( $i=1; $i <= $latestslide; $i++ ) {

		$wp_customize->add_setting( 'latest_work_slider_text_setting' .$i, array(
				'capability' => 'edit_theme_options',
				'default'	 => '',

		));

		$wp_customize->add_control( 'latest_work_slider_text_setting' .$i, array(
					'type'	   => 'text',
					'section'  => 'latest_work_section',
					'settings' => 'latest_work_slider_text_setting' .$i,
					'label'	   =>  sprintf(__( 'slider name %1$s', 'lumia'), $i ),
					
		));
		

		$wp_customize->add_setting( 'latest_work_slider_image_setting'.$i, array(
				'capability' => 'edit_theme_options',
				'default'	 => '',
		));

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize, 'latest_work_slider_image_setting'.$i, array(
				'label'   => esc_html__( 'Upload Image', 'lumia' ),
				'section' => 'latest_work_section',
				'settings'=> 'latest_work_slider_image_setting'.$i,
				'label'	  => sprintf(__( 'slider image %1$s', 'lumia'), $i ),
		)));
	
	}



	//recent work text
	// $wp_customize->add_section( 'latest_work_text_section', array(
	// 			'panel' => 'latest_work_panel',
	// 			'title' => esc_html__( 'Text', 'lumia' ),
				
	// ));

	// $wp_customize->add_setting( 'latest_work_text_setting', array(
	// 			'capability' => 'edit_theme_options',
	// 			'default'	 => '',

	// ));
	// $wp_customize->add_control( 'latest_work_text_setting', array(
	// 			'type'	   => 'text',
	// 			'section'  => 'latest_work_text_section',
	// 			'settings' => 'latest_work_text_setting',
	// 			'label'	   =>  esc_html__( 'Heading', 'lumia' ),
				
	// ));

	// $wp_customize->add_setting( 'latest_work_subtext_setting', array(
	// 			'capability' => 'edit_theme_options',
	// 			'default'	 => '',

	// ));
	// $wp_customize->add_control( 'latest_work_subtext_setting', array(
	// 			'type'	   => 'textarea',
	// 			'section'  => 'latest_work_text_section',
	// 			'settings' => 'latest_work_subtext_setting',
	// 			'label'	   =>  esc_html__( 'Content', 'lumia' ),
				
	// ));

	// $wp_customize->add_setting( 'latest_work_btntext_setting', array(
	// 			'capability' => 'edit_theme_options',
	// 			'default'	 => '',

	// ));
	// $wp_customize->add_control( 'latest_work_btntext_setting', array(
	// 			'type'	   => 'text',
	// 			'section'  => 'latest_work_text_section',
	// 			'settings' => 'latest_work_btntext_setting',
	// 			'label'	   =>  esc_html__( 'Button text', 'lumia' ),
				
	// ));

	// $wp_customize->add_setting( 'latest_work_btnurl_setting', array(
	// 			'capability' => 'edit_theme_options',
	// 			'default'	 => '',

	// ));
	// $wp_customize->add_control( 'latest_work_btnurl_setting', array(
	// 			'type'	   => 'text',
	// 			'section'  => 'latest_work_text_section',
	// 			'settings' => 'latest_work_btnurl_setting',
	// 			'label'	   =>  esc_html__( 'Button Url', 'lumia' ),
				
	// ));
	
}

add_action( 'customize_register', 'lumia_customizer_options' );