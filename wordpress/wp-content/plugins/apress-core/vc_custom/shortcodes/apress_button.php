<?php 
/*-----------------------------------------------------------------------------------*/
/* Button
/*-----------------------------------------------------------------------------------*/

if ( ! defined( 'ABSPATH' ) ) { exit; }
class WPBakeryShortCode_Apress_Button extends WPBakeryShortCode {}

$doc_link = 'http://apressthemes.com/apress/documentation';

if ( function_exists( 'vc_map' ) ) {
		vc_map( array(
			"name"			=> __("Button", 'apcore'),
			"base"			=> "apress_button",
			"weight"		=> 4,
			"class"			=> "",
			"category"		=> __( "Apress", "apcore"),
			"description"	=> __( "Button with gradient options", "apcore"),
			"icon"			=> APRESS_EXTENSIONS_PLUGIN_URL . "vc_custom/assets/images/vc_icons/vc-icon-button.png",
			"params"		=> array(
			
				array(
					'type'        => 'radio_image_select',
					'heading'     => esc_html__( 'Style', 'apcore' ),
					'param_name'  => 'button_shape',
					'simple_mode' => false,
					'options'     => array(
						'square' => array(
							'tooltip' => esc_attr__('Button Style1','apcore'),
							'src' => APRESS_EXTENSIONS_PLUGIN_URL . 'vc_custom/assets/images/button/button_style1.jpg'
						),
						'rounded' => array(
							'tooltip' => esc_attr__('Button Style2','apcore'),
							'src' => APRESS_EXTENSIONS_PLUGIN_URL . 'vc_custom/assets/images/button/button_style2.jpg'
						),
						'round' => array(
							'tooltip' => esc_attr__('Button Style3','apcore'),
							'src' => APRESS_EXTENSIONS_PLUGIN_URL . 'vc_custom/assets/images/button/button_style3.jpg'
						),
						'style4' => array(
							'tooltip' => esc_attr__('Button Style4','apcore'),
							'src' => APRESS_EXTENSIONS_PLUGIN_URL . 'vc_custom/assets/images/button/button_style4.jpg'
						),
						'style5' => array(
							'tooltip' => esc_attr__('Button Style5','apcore'),
							'src' => APRESS_EXTENSIONS_PLUGIN_URL . 'vc_custom/assets/images/button/button_style5.jpg'
						),
						'style6' => array(
							'tooltip' => esc_attr__('Button Style6','apcore'),
							'src' => APRESS_EXTENSIONS_PLUGIN_URL . 'vc_custom/assets/images/button/button_style6.jpg'
						),
						'style7' => array(
							'tooltip' => esc_attr__('Button Style7','apcore'),
							'src' => APRESS_EXTENSIONS_PLUGIN_URL . 'vc_custom/assets/images/button/button_style7.jpg'
						),
						'style8' => array(
							'tooltip' => esc_attr__('Button Style8','apcore'),
							'src' => APRESS_EXTENSIONS_PLUGIN_URL . 'vc_custom/assets/images/button/button_style8.jpg'
						),
						'style9' => array(
							'tooltip' => esc_attr__('Button Style9','apcore'),
							'src' => APRESS_EXTENSIONS_PLUGIN_URL . 'vc_custom/assets/images/button/button_style9.jpg'
						),
						'style10' => array(
							'tooltip' => esc_attr__('Button Style10','apcore'),
							'src' => APRESS_EXTENSIONS_PLUGIN_URL . 'vc_custom/assets/images/button/button_style10.jpg'
						),
					),					
				),
				array(
					'type'				=> 'textfield',
					'heading'			=> esc_html__('Button Text', 'apcore'),
					'param_name'		=> 'button_text',
					'value'				=> esc_html__('Button','apcore'),
					'admin_label'		=> true,
				),
				array(
					"type"			=> "vc_link",
					"heading"		=> __("Button Link",'apcore'),
					"param_name"	=> "button_link",
					"description"	=> __("http://example.com",'apcore'),
				 ),
				 array(
					"type"				=> "colorpicker",
					"heading"			=> __("Button Border Color",'apcore'),
					'param_name'		=> "button_border_color_for_style5",
					"value"				=> '#e5e5e5',
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style5', 'style9')),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Button Hover Border Color",'apcore'),
					'param_name'		=> "button_hover_border_color_for_style5",
					"value"				=> '#549ffc',
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style5', 'style9')),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
				),
				array(
					"type"			=> "dropdown",
					"heading"		=> __("Select Color Scheme",'apcore'),
					"description"	=> __("Options available in Theme Options > Colors for and Theme Options > Button",'apcore'),
					"param_name"	=> "color_scheme",
					"value"			=> array(
						__("Default Button Color",'apcore') => "default_button_color_scheme",
						__("Primary Color",'apcore') 	=> "primary_color_scheme",
						__("Color Scheme 1",'apcore') 	=> "color_scheme1",
						__("Color Scheme 2",'apcore') 	=> "color_scheme2",
						__("Gradient Scheme 1",'apcore')=> "gradient_scheme1",
						__("Gradient Scheme 2",'apcore')=> "gradient_scheme2",
						__("Gradient Scheme 3",'apcore')=> "gradient_scheme3",
						__("Custom Color",'apcore') 	=> "design_your_own"
					),
					'dependency'	=> array('element' => 'button_shape', 'value' => array('square', 'rounded', 'round', 'style7', 'style10')),
				),
				array(
					'type'				=> 'zolo_number',
					'heading'			=> esc_html__('Border Height','apcore'),
					'param_name'		=> 'button_border_height_for_style4',
					'step'				=> '1',
					'value'				=> '2',
					'suffix'			=> 'px',
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style4')),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Border Color",'apcore'),
					'param_name'		=> "button_border_color_for_style4",
					"value"				=> '#e5e5e5',
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style4')),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
				),
				array(
					"type"			=> "dropdown",
					"heading"		=> __("Select Color Scheme",'apcore'),
					"description"	=> __("Options available in Theme Options > Colors for and Theme Options > Button",'apcore'),
					"param_name"	=> "color_scheme2",
					"value"			=> array(
						__("Default Button Color",'apcore') => "default_button_color_scheme",
						__("Primary Color",'apcore') 	=> "primary_color_scheme",
						__("Color Scheme 1",'apcore') 	=> "color_scheme1",
						__("Color Scheme 2",'apcore') 	=> "color_scheme2",
						__("Gradient Scheme 1",'apcore')=> "gradient_scheme1",
						__("Gradient Scheme 2",'apcore')=> "gradient_scheme2",
						__("Gradient Scheme 3",'apcore')=> "gradient_scheme3",
					),
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style4')),
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Background Color",'apcore'),
					"param_name"		=> "button_bg_color",
					"value"				=> '#5295ea',
					'dependency'		=> array('element' => 'color_scheme', 'value' => array('design_your_own')),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Hover Background Color",'apcore'),
					"param_name"		=> "button_bg_color_h",
					"value"				=> '#3b65d6',
					"dependency"		=> array("element" => "color_scheme", "value" => array("design_your_own")),
					"edit_field_class"	=> "vc_column vc_col-sm-6 crum_vc apress-number-wrap",
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Border Color",'apcore'),
					'param_name'		=> "button_border_color",
					"value"				=> '#5295ea',
					'dependency'		=> array('element' => 'color_scheme', 'value' => array('design_your_own')),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Hover Border Color",'apcore'),
					'param_name'		=> "button_border_color_h",
					"value"				=> '#3b65d6',
					'dependency'		=> array('element' => 'color_scheme', 'value' => array('design_your_own')),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
				),				
				array(
					"type"				=> "dropdown",
					"heading"			=> __("Select Button Hover Style",'apcore'),
					'param_name'		=> "button_hover_style",
					'value' 	=> array(
						__("Hover Style 1 - Fade",'apcore') 			=> "hoverstyle1",
						__("Hover Style 2 - Top To Bottom",'apcore') 	=> "hoverstyle2",
						__("Hover Style 3 - Bottom to Top",'apcore') 	=> "hoverstyle3",
						__("Hover Style 4 - Left To Right",'apcore') 	=> "hoverstyle4",
						__("Hover Style 5 - Right To Left",'apcore') 	=> "hoverstyle5",
					),
					'dependency'		=> array('element' => 'color_scheme', 'value' => array('design_your_own')),
				),				
				array(
					"type"				=> "dropdown",
					"class"				=> "",
					"heading"			=> __("Button Size",'apcore'),
					'param_name'		=> "button_size",
					"value"				=> array (
						__("Small",'apcore') => "small",
						__("Medium",'apcore') => "medium", 
						__("Large",'apcore') => "large",
						__("Full Width",'apcore') => "fullwidth",
						__("Design Your Own",'apcore') 	=> "design_your_own"
					 ), 
					 'dependency'	=> array('element' => 'button_shape', 'value' => array('square', 'rounded', 'round', 'style5', 'style7', 'style9', 'style10')),
					),
				
				array(
					'type'				=> 'zolo_number',
					'heading'			=> esc_html__('Padding Top & Bottom','apcore'),
					'param_name'		=> 'padding_top_bottom',
					'step'				=> '1',
					'value'				=> '15',
					'suffix'			=> 'px',
					'dependency'		=> array('element' => 'button_size', 'value' => 'design_your_own'),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
				),
				array(
					'type'				=> 'zolo_number',
					'heading'			=> esc_html__('Padding Right & Left','apcore'),
					'param_name'		=> 'padding_right_left',
					'step'				=> '1',
					'value'				=> '25',
					'suffix'			=> 'px',
					'dependency'		=> array('element' => 'button_size', 'value' => 'design_your_own'),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
				),
				array(
					'type'				=> 'zolo_number',
					'heading'			=> esc_html__('Padding Top & Bottom','apcore'),
					'param_name'		=> 'padding_top_bottom_for_style4',
					'step'				=> '1',
					'value'				=> '12',
					'suffix'			=> 'px',
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style4', 'style6', 'style8')),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
				),
				array(
					'type'				=> 'zolo_radio_advanced',
					'heading'			=> esc_html__('Alignment', 'apcore'),
					'param_name'		=> 'button_alignment',
					'value'				=> 'inline',
					'options'			=> array(
						esc_html__('Inline', 'apcore')	=> 'inline',
						esc_html__('Left', 'apcore') 	=> 'left',
						esc_html__('Right', 'apcore')	=> 'right',
						esc_html__('Center', 'apcore')	=> 'center'
					),
				),
				array(
					'type' 				=> 'zolo_number',
					'heading'			=> esc_html__('Button Left Margin','apcore'),
					'param_name'		=> 'button_left_margin',
					'value'				=> '6',
					'step'				=> '1',
					'suffix'			=> 'px',
					'dependency'		=> array('element' => 'button_alignment', 'value' => array('inline')),
					"edit_field_class"	=> "apress-heading-param-wrapper vc_column vc_col-sm-6 no-top-margin",
				),
				array(
					'type' 				=> 'zolo_number',
					'heading'			=> esc_html__('Button Right Margin','apcore'),
					'param_name'		=> 'button_right_margin',
					'value'				=> '6',
					'step'				=> '1',
					'suffix'			=> 'px',
					'dependency'		=> array('element' => 'button_alignment', 'value' => array('inline')),
					"edit_field_class"	=> "apress-heading-param-wrapper vc_column vc_col-sm-6 no-top-margin",
				),
				array(
				   'type'    => 'zolo_box_shadow_param',
				   'heading'	=> esc_html__('Button Shadow', 'apcore'),
				   'param_name' => 'box_shadow',
				   "value"		=> 'box_shadow_enable:enable|shadow_horizontal:1|shadow_vertical:2|shadow_blur:4|shadow_spread:0|box_shadow_color:rgba(0%2C0%2C0%2C0.2)',
				   'dependency'	=> array('element' => 'button_shape', 'value' => array('square', 'rounded', 'round', 'style5', 'style7', 'style9', 'style10')),
				),
				array(
				   'type'    => 'zolo_box_shadow_param',
				   'heading'	=> esc_html__('Button Hover Shadow', 'apcore'),
				   'param_name' => 'box_hover_shadow',
				   "value"		=> 'box_shadow_enable:enable|shadow_horizontal:2|shadow_vertical:2|shadow_blur:7|shadow_spread:0|box_shadow_color:rgba(0%2C0%2C0%2C0.2)',
				   'dependency'	=> array('element' => 'button_shape', 'value' => array('square', 'rounded', 'round', 'style5', 'style7', 'style9', 'style10')),
				),
				array(
					'type'				=> 'zolo_single_checkbox',
					'heading'			=> esc_html__('Button Swing', 'apcore'),
					'param_name'		=> 'button_swing',
					'value'				=> 'no',
					'options'			=> array(
						'yes'			=> array(
							'on'				=> 'Yes',
							'off'				=> 'No',
						),
					),
					'dependency'	=> array('element' => 'button_shape', 'value' => array('square', 'rounded', 'round', 'style7', 'style10')),
				),
				array(
					'type'				=> 'zolo_param_heading',
					'text'				=> esc_html__('Extra features', 'apcore'),
					'param_name'		=> 'subtitle_margin_heading',
					'edit_field_class'	=> 'apress-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
				),
				array(
					"type"				=> "dropdown",
					"class"				=> "",
					"heading"			=> __("CSS Animation",'apcore'),
					"param_name"		=> "data_animation",
					"value"				=> apress_data_animations(),
					"description"		=> __("Select type of animation. Note: Works only in modern browsers.",'apcore'),
					"edit_field_class"	=> "apress-heading-param-wrapper vc_column vc_col-sm-8 no-top-margin",
				),  
				array(
					"type"				=> "textfield",
					"class"				=> "",
					"heading"			=> __("Delay","apcore"),
					"param_name"		=> "data_delay",
					"value"				=> "500",
					"description"		=> __("Delay","apcore"),
					"edit_field_class"	=> "apress-heading-param-wrapper vc_column vc_col-sm-4 no-top-margin",
				),
				array(
					"type"				=> "textfield",
					"heading"			=> __("Extra class name", "apcore"),
					"param_name"		=> "class",
					"description"		=> __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "apcore")
				),

				array(
					'type'				=> 'dropdown',
					'heading'			=> __( 'Icon library', 'apcore' ),
					'value'				=> array(
						__( 'Font Awesome', 'apcore' )	=> 'fontawesome',
						__( 'Open Iconic', 'apcore' )	=> 'openiconic',
						__( 'Typicons', 'apcore' )		=> 'typicons',
						__( 'Entypo', 'apcore' )		=> 'entypo',
						__( 'Linecons', 'apcore' )		=> 'linecons',
						__( 'Mono Social', 'apcore' )	=> 'monosocial',
						__( 'Linea', 'apcore' ) 	=> 'linea',
					),
					'save_always' 		=> true,
					'param_name' 		=> 'icon_family',
					'description' 		=> __( 'Select icon library.', 'apcore' ),
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style5', 'style6', 'style7', 'style8', 'style9', 'style10')),
					'group'				=> esc_html__('Icon', 'apcore'),
				),
				array(
					'type'				=> 'iconpicker',
					'heading'			=> __('Icon', 'apcore'),
					'param_name'		=> 'icon_fontawesome',
					'value'				=> 'fa fa-adjust',
					'settings'			=> array( 'emptyIcon' => false, 'iconsPerPage' => 4000),
					'dependency'		=> array('element' => 'icon_family', 'value' => 'fontawesome'),
					'description'		=> __('Select icon from library.', 'apcore'),
					'group'				=> esc_html__('Icon', 'apcore'),
				),	
				array(
					'type'				=> 'iconpicker',
					'heading'			=> __( 'Icon', 'apcore' ),
					'param_name'		=> 'icon_openiconic',
					'value'				=> 'vc-oi vc-oi-dial',
					'settings'			=> array('emptyIcon' => false, 'type' => 'openiconic', 'iconsPerPage' => 4000),
					'dependency'		=> array('element' => 'icon_family','value' => 'openiconic'),
					'description'		=> __( 'Select icon from library.', 'apcore' ),
					'group'				=> esc_html__('Icon', 'apcore'),
				),	
				array(
					'type'				=> 'iconpicker',
					'heading'			=> __( 'Icon', 'apcore' ),
					'param_name'		=> 'icon_typicons',
					'value'				=> 'typcn typcn-adjust-brightness',
					'settings'			=> array('emptyIcon' => false,'type' => 'typicons','iconsPerPage' => 4000),
					'dependency'		=> array('element' => 'icon_family','value' => 'typicons'),
					'description'		=> __( 'Select icon from library.', 'apcore'),
					'group'				=> esc_html__('Icon', 'apcore'),
				),
				array(
					'type' 				=> 'iconpicker',
					'heading' 			=> __( 'Icon', 'apcore' ),
					'param_name' 		=> 'icon_entypo',
					'value' 			=> 'entypo-icon entypo-icon-note',
					'settings' 			=> array('emptyIcon' => false,'type' => 'entypo','iconsPerPage' => 4000),
					'dependency' 		=> array('element' => 'icon_family','value' => 'entypo'),
					'description' 		=> __( 'Select icon from library.', 'apcore' ),
					'group'				=> esc_html__('Icon', 'apcore'),
				),
				array(
					'type' 				=> 'iconpicker',
					'heading' 			=> __( 'Icon', 'apcore' ),
					'param_name' 		=> 'icon_linecons',
					'value' 			=> 'vc_li vc_li-heart',
					'settings' 			=> array('emptyIcon' => false,'type' => 'linecons','iconsPerPage' => 4000),
					'dependency' 		=> array('element' => 'icon_family','value' => 'linecons'),
					'description' 		=> __( 'Select icon from library.', 'apcore' ),
					'group'				=> esc_html__('Icon', 'apcore'),
				),	
				array(
					'type'				=> 'iconpicker',
					'heading'			=> __( 'Icon', 'apcore' ),
					'param_name'		=> 'icon_monosocial',
					'value'				=> 'vc-mono vc-mono-fivehundredpx',
					'settings'			=> array('emptyIcon' => false,'type' => 'monosocial','iconsPerPage' => 4000),
					'dependency'		=> array('element' => 'icon_family','value' => 'monosocial'),
					'description'		=> __( 'Select icon from library.', 'apcore' ),
					'group'				=> esc_html__('Icon', 'apcore'),
				),	
				array(
					'type'				=> 'iconpicker',
					'heading'			=> __('Icon', 'apcore'),
					'param_name'		=> 'icon_linea',
					'value'				=> 'icon-basic-heart',
					'settings'			=> array( 'emptyIcon' => true, 'type' => 'linea', 'iconsPerPage' => 4000),
					'dependency'		=> array('element' => 'icon_family', 'value' => 'linea'),
					'description'		=> __('Select icon from library.', 'apcore'),
					'group'				=> esc_html__( 'Icon', 'apcore' ),
				),
				array(
					'type' 				=> 'zolo_number',
					'heading'			=> esc_html__('Icon size','apcore'),
					'param_name'		=> 'icon_size',
					'value'				=> '16',
					'step'				=> '1',
					'suffix'			=> 'px',
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style5', 'style6', 'style7', 'style8', 'style9', 'style10')),
					'group'				=> esc_html__('Icon', 'apcore'),
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Icon Color",'apcore'),
					'param_name'		=> "icon_color",
					"value"				=> '#333333',
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style5', 'style6', 'style7', 'style8', 'style9', 'style10')),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
					'group'				=> esc_html__('Icon', 'apcore'),
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Icon Hover Color",'apcore'),
					'param_name'		=> "icon_hover_color",
					"value"				=> '#ffffff',
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style5', 'style6', 'style7', 'style8', 'style9', 'style10')),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
					'group'				=> esc_html__('Icon', 'apcore'),
				),
				array(
					'type'				=> 'zolo_single_checkbox',
					'heading'			=> esc_html__('Icon Background Enable', 'apcore'),
					'param_name'		=> 'icon_bg_color_show',
					'value'				=> 'no',
					'options'			=> array(
						'yes'			=> array(
							'on'				=> 'Yes',
							'off'				=> 'No',
						),
					),
					'dependency'		=> array('element' => 'button_shape', 'value' => array('style6', 'style8')),
					'group'				=> esc_html__('Icon', 'apcore'),
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Icon Background Color",'apcore'),
					'param_name'		=> "icon_bg_color_for_style6",
					"value"				=> '#e5e5e5',
					'dependency' => array( 'element' => 'icon_bg_color_show', 'value' => 'yes'),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
					'group'				=> esc_html__('Icon', 'apcore'),
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Icon Hover Background Color",'apcore'),
					'param_name'		=> "icon_hover_bg_color_for_style6",
					"value"				=> '#549ffc',
					'dependency' => array( 'element' => 'icon_bg_color_show', 'value' => 'yes'),
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
					'group'				=> esc_html__('Icon', 'apcore'),
				),
				array(
					'type'				=> 'zolo_video_link_param',
					'heading'			=> esc_html__('Video tutorial and theme documentation article','apcore'),
					'param_name'		=> 'tutorials',
					'doc_link'			=> $doc_link,
					'video_link'		=> 'https://youtu.be/d5rL7pfQ0_Q',
				),
				array(
					'type'				=> 'zolo_font_container',
					'heading'			=> '',
					'param_name'		=> 'button_font_options',
					'settings'				=> array(
						'fields'				=> array(
							'font_size',							
							'line_height',
							'letter_spacing',
							'font_style',
						),
					),
					'group'				=> esc_html__('Typography', 'apcore'),
				),
				array(
					'type'				=> 'zolo_radio_advanced',
					'heading'			=> esc_html__('Custom font family', 'apcore'),
					'param_name'		=> 'button_google_fonts',
					'value'				=> 'no',
					'options'			=> array(
						esc_html__('Yes', 'apcore')	=> 'yes',
						esc_html__('No', 'apcore') => 'no',
					),
					'edit_field_class'	=> 'vc_column vc_col-sm-12 no-border-bottom',
					'group'				=> esc_html__('Typography', 'apcore'),
				),
				array(
					'type'				=> 'google_fonts',
					'param_name'		=> 'button_custom_fonts',
					'settings'			=> array(
						'fields'			=> array(
							'font_family_description'	=> esc_html__('Select font family.', 'apcore'),
							'font_style_description'	=> esc_html__('Select font style.', 'apcore'),
						),
					),
					'dependency' => array( 'element' => 'button_google_fonts', 'value' => 'yes'),
					'group'				=> esc_html__('Typography', 'apcore'),
				),	
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Text Color",'apcore'),
					'param_name'		=> "button_text_color",
					"value"				=> '',
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
					'group'				=> esc_html__('Typography', 'apcore'),
				),
				array(
					"type"				=> "colorpicker",
					"heading"			=> __("Hover Text Color",'apcore'),
					'param_name'		=> "button_text_color_h",
					"value"				=> '',
					'edit_field_class'	=> 'vc_column vc_col-sm-6 crum_vc apress-number-wrap',
					'group'				=> esc_html__('Typography', 'apcore'),
				),			
										
				),
				
			//"js_view" => 'VcColumnView'
			) 
		);		
		
	}		