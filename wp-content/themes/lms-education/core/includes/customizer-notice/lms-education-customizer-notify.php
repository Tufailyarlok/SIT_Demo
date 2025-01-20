<?php

class LMS_Education_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $lms_education_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $lms_education_recommended_actions_title;
	
	private $lms_education_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $lms_education_install_button_label;
	
	private $lms_education_activate_button_label;
	
	private $lms_education_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof LMS_Education_Customizer_Notify ) ) {
			self::$instance = new LMS_Education_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $lms_education_customizer_notify_recommended_plugins;
		global $lms_education_customizer_notify_lms_education_recommended_actions;

		global $lms_education_install_button_label;
		global $lms_education_activate_button_label;
		global $lms_education_deactivate_button_label;

		$this->lms_education_recommended_actions = isset( $this->config['lms_education_recommended_actions'] ) ? $this->config['lms_education_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->lms_education_recommended_actions_title = isset( $this->config['lms_education_recommended_actions_title'] ) ? $this->config['lms_education_recommended_actions_title'] : '';
		$this->lms_education_recommended_plugins_title = isset( $this->config['lms_education_recommended_plugins_title'] ) ? $this->config['lms_education_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$lms_education_customizer_notify_recommended_plugins = array();
		$lms_education_customizer_notify_lms_education_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$lms_education_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->lms_education_recommended_actions ) ) {
			$lms_education_customizer_notify_lms_education_recommended_actions = $this->lms_education_recommended_actions;
		}

		$lms_education_install_button_label    = isset( $this->config['lms_education_install_button_label'] ) ? $this->config['lms_education_install_button_label'] : '';
		$lms_education_activate_button_label   = isset( $this->config['lms_education_activate_button_label'] ) ? $this->config['lms_education_activate_button_label'] : '';
		$lms_education_deactivate_button_label = isset( $this->config['lms_education_deactivate_button_label'] ) ? $this->config['lms_education_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'lms_education_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'lms_education_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'lms_education_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'lms_education_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function lms_education_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'lms-education-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/lms-education-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'lms-education-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/lms-education-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'lms-education-customizer-notify-js', 'lmseducationCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'lms-education' ),
			)
		);

	}

	
	public function lms_education_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/lms-education-customizer-notify-section.php';

		$wp_customize->register_section_type( 'LMS_Education_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new LMS_Education_Customizer_Notify_Section(
				$wp_customize,
				'lms-education-customizer-notify-section',
				array(
					'title'          => $this->lms_education_recommended_actions_title,
					'plugin_text'    => $this->lms_education_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function lms_education_customizer_notify_dismiss_recommended_action_callback() {

		global $lms_education_customizer_notify_lms_education_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'lms_education_customizer_notify_show' ) ) {

				$lms_education_customizer_notify_show_lms_education_recommended_actions = get_option( 'lms_education_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$lms_education_customizer_notify_show_lms_education_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$lms_education_customizer_notify_show_lms_education_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'lms_education_customizer_notify_show', $lms_education_customizer_notify_show_lms_education_recommended_actions );

				
			} else {
				$lms_education_customizer_notify_show_lms_education_recommended_actions = array();
				if ( ! empty( $lms_education_customizer_notify_lms_education_recommended_actions ) ) {
					foreach ( $lms_education_customizer_notify_lms_education_recommended_actions as $lms_education_lite_customizer_notify_recommended_action ) {
						if ( $lms_education_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$lms_education_customizer_notify_show_lms_education_recommended_actions[ $lms_education_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$lms_education_customizer_notify_show_lms_education_recommended_actions[ $lms_education_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'lms_education_customizer_notify_show', $lms_education_customizer_notify_show_lms_education_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function lms_education_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$lms_education_lite_customizer_notify_show_recommended_plugins = get_option( 'lms_education_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$lms_education_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$lms_education_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'lms_education_customizer_notify_show_recommended_plugins', $lms_education_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
