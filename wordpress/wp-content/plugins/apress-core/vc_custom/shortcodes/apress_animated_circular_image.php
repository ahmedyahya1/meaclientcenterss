<?php 
/*-----------------------------------------------------------------------------------*/
/* Animated Circular Image
/*-----------------------------------------------------------------------------------*/
if ( ! defined( 'ABSPATH' ) ) { exit; }
class WPBakeryShortCode_Apress_Animated_Circular_Image extends WPBakeryShortCode {}

$doc_link = 'http://apressthemes.com/apress/documentation';

if ( function_exists( 'vc_map' ) ) {
		vc_map( array(		
		"name"			=> __("Circular Image", "apcore"),
		"description"	=> __( "Anmated Circular Image", "apcore"),
		"base"			=> "apress_animated_circular_image",
		"icon"			=> APRESS_EXTENSIONS_PLUGIN_URL . "vc_custom/assets/images/vc_icons/vc-icon-circular.png",
		"weight"		=> 32,
		"category"		=> __('Apress', 'apcore'),
		"params"		=> array(	
			
			//Circle 1
			array(
				"type"				=> "dropdown",
				"heading"			=> __("Select Color Scheme",'apcore'),
				"param_name"		=> "circle1_scheme",
				"value"				=> array(
					__("Primary Color",'apcore') 	=> "primary_color_scheme",
					__("Color Scheme 1",'apcore') 	=> "color_scheme1",
					__("Color Scheme 2",'apcore') 	=> "color_scheme2",
					__("Gradient Scheme 1",'apcore') 	=> "gradient_scheme1",
					__("Gradient Scheme 2",'apcore') 	=> "gradient_scheme2",
					__("Gradient Scheme 3",'apcore') 	=> "gradient_scheme3",
					__("Custom Color",'apcore') 		=> "design_your_own"
				),
				'group'				=> esc_html__('Circle 1', 'apcore'),
			),
			array(
				"type"				=> "colorpicker",
				"heading"			=> __("Circle Color",'apcore'),
				"param_name"		=> "circle1_color",
				"value"				=> '#549ffc',
				'dependency'		=> array('element' => 'circle1_scheme', 'value' => array('design_your_own')),
				'group'				=> esc_html__('Circle 1', 'apcore'),
			),
			array(
				'type' 		=> 'zolo_number',
				'heading' 	=> __("Color Opacity",'apcore'),
				'param_name'=> 'circle1_opacity',
				"value" => 0.7,
				"min" => 0.0,
				"max" => 1.0,
				"step" => 0.1,
				'group'				=> esc_html__('Circle 1', 'apcore'),
			),
			array(
				'type' 			=> 'attach_image',
				'heading' 		=> __( 'Image', 'apcore' ),
				'param_name' 	=> 'image1',
				'value' 		=> '',
				'group'				=> esc_html__('Circle 1', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Top","apcore"),
				"param_name"		=> "circle1_top",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 1', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Right","apcore"),
				"param_name"		=> "circle1_right",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 1', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Bottom","apcore"),
				"param_name"		=> "circle1_bottom",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 1', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Left","apcore"),
				"param_name"		=> "circle1_left",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 1', 'apcore'),
			),					
			
			//Circle 2
			array(
				"type"				=> "dropdown",
				"heading"			=> __("Select Color Scheme",'apcore'),
				"param_name"		=> "circle2_scheme",
				"value"				=> array(
					__("Primary Color",'apcore') 	=> "primary_color_scheme",
					__("Color Scheme 1",'apcore') 	=> "color_scheme1",
					__("Color Scheme 2",'apcore') 	=> "color_scheme2",
					__("Gradient Scheme 1",'apcore') 	=> "gradient_scheme1",
					__("Gradient Scheme 2",'apcore') 	=> "gradient_scheme2",
					__("Gradient Scheme 3",'apcore') 	=> "gradient_scheme3",
					__("Custom Color",'apcore') 		=> "design_your_own"
				),
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				"type"				=> "colorpicker",
				"heading"			=> __("Circle Color",'apcore'),
				"param_name"		=> "circle2_color",
				"value"				=> '#549ffc',
				'dependency'		=> array('element' => 'circle2_scheme', 'value' => array('design_your_own')),
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				'type' 		=> 'zolo_number',
				'heading' 	=> __("Color Opacity",'apcore'),
				'param_name'=> 'circle2_opacity',
				"value" => 0.7,
				"min" => 0.0,
				"max" => 1.0,
				"step" => 0.1,
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				'type'				=> 'zolo_param_heading',
				'text'				=> esc_html__('Image 1 Options', 'apcore'),
				'param_name'		=> 'subtitle_margin_heading',
				'edit_field_class'	=> 'apress-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				'type' 			=> 'attach_image',
				'heading' 		=> __( 'Image', 'apcore' ),
				'param_name' 	=> 'image2',
				'value' 		=> '',
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Top","apcore"),
				"param_name"		=> "circle2_top",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Right","apcore"),
				"param_name"		=> "circle2_right",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Bottom","apcore"),
				"param_name"		=> "circle2_bottom",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Left","apcore"),
				"param_name"		=> "circle2_left",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				'type'				=> 'zolo_param_heading',
				'text'				=> esc_html__('Image 2 Options', 'apcore'),
				'param_name'		=> 'subtitle_margin_heading',
				'edit_field_class'	=> 'apress-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				'type' 			=> 'attach_image',
				'heading' 		=> __( 'Image', 'apcore' ),
				'param_name' 	=> 'image3',
				'value' 		=> '',
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Top","apcore"),
				"param_name"		=> "circle2_top2",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Right","apcore"),
				"param_name"		=> "circle2_right2",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Bottom","apcore"),
				"param_name"		=> "circle2_bottom2",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Left","apcore"),
				"param_name"		=> "circle2_left2",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 2', 'apcore'),
			),			
			
			//Circle 3
			array(
				"type"				=> "dropdown",
				"heading"			=> __("Select Color Scheme",'apcore'),
				"param_name"		=> "circle3_scheme",
				"value"				=> array(
					__("Primary Color",'apcore') 	=> "primary_color_scheme",
					__("Color Scheme 1",'apcore') 	=> "color_scheme1",
					__("Color Scheme 2",'apcore') 	=> "color_scheme2",
					__("Gradient Scheme 1",'apcore') 	=> "gradient_scheme1",
					__("Gradient Scheme 2",'apcore') 	=> "gradient_scheme2",
					__("Gradient Scheme 3",'apcore') 	=> "gradient_scheme3",
					__("Custom Color",'apcore') 		=> "design_your_own"
				),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "colorpicker",
				"heading"			=> __("Circle Color",'apcore'),
				"param_name"		=> "circle3_color",
				"value"				=> '#549ffc',
				'dependency'		=> array('element' => 'circle3_scheme', 'value' => array('design_your_own')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				'type' 		=> 'zolo_number',
				'heading' 	=> __("Color Opacity",'apcore'),
				'param_name'=> 'circle3_opacity',
				"value" => 0.7,
				"min" => 0.0,
				"max" => 1.0,
				"step" => 0.1,
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				'type'				=> 'zolo_param_heading',
				'text'				=> esc_html__('Image 1 Options', 'apcore'),
				'param_name'		=> 'subtitle_margin_heading',
				'edit_field_class'	=> 'apress-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				'type' 			=> 'attach_image',
				'heading' 		=> __( 'Image', 'apcore' ),
				'param_name' 	=> 'image4',
				'value' 		=> '',
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Top","apcore"),
				"param_name"		=> "circle3_top",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Right","apcore"),
				"param_name"		=> "circle3_right",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Bottom","apcore"),
				"param_name"		=> "circle3_bottom",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Left","apcore"),
				"param_name"		=> "circle3_left",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				'type'				=> 'zolo_param_heading',
				'text'				=> esc_html__('Image 2 Options', 'apcore'),
				'param_name'		=> 'subtitle_margin_heading',
				'edit_field_class'	=> 'apress-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				'type' 			=> 'attach_image',
				'heading' 		=> __( 'Image', 'apcore' ),
				'param_name' 	=> 'image5',
				'value' 		=> '',
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Top","apcore"),
				"param_name"		=> "circle3_top2",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Right","apcore"),
				"param_name"		=> "circle3_right2",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Bottom","apcore"),
				"param_name"		=> "circle3_bottom2",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Left","apcore"),
				"param_name"		=> "circle3_left2",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				'type'				=> 'zolo_param_heading',
				'text'				=> esc_html__('Image 3 Options', 'apcore'),
				'param_name'		=> 'subtitle_margin_heading',
				'edit_field_class'	=> 'apress-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				'type' 			=> 'attach_image',
				'heading' 		=> __( 'Image', 'apcore' ),
				'param_name' 	=> 'image6',
				'value' 		=> '',
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Top","apcore"),
				"param_name"		=> "circle3_top3",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Right","apcore"),
				"param_name"		=> "circle3_right3",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Bottom","apcore"),
				"param_name"		=> "circle3_bottom3",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			array(
				"type"				=> "textfield",
				"heading"			=> __("Left","apcore"),
				"param_name"		=> "circle3_left3",
				"value"				=> "",
				'description' 		=> __( 'px or % ex: 10px.', 'apcore' ),
				'edit_field_class'	=> 'vc_column vc_col-sm-3',
				'dependency'		=> array('element' => 'element_position', 'value' => array('absolute')),
				'group'				=> esc_html__('Circle 3', 'apcore'),
			),
			
			array(
				'type'				=> 'zolo_param_heading',
				'text'				=> esc_html__('Extra features', 'apcore'),
				'param_name'		=> 'subtitle_margin_heading',
				'edit_field_class'	=> 'apress-heading-param-wrapper vc_column vc_col-sm-12 no-top-margin',
				'group'				=> esc_html__('Extra Features', 'apcore'),
			),
			array(
				'type'				=> 'textfield',
				'heading'			=> __( 'Extra class name', 'apcore' ),
				'param_name'		=> 'class',
				'description'		=> __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'apcore' ),
				'group'				=> esc_html__('Extra Features', 'apcore'),
			),	
			array(
				"type"				=> "dropdown",
				"class"				=> "",
				"heading"			=> __("CSS Animation",'apcore'),
				"param_name"		=> "data_animation",
				"value"				=> apress_data_animations(),
				"description"		=> __("Select type of animation. Note: Works only in modern browsers.",'apcore'),
				"edit_field_class"	=> "apress-heading-param-wrapper vc_column vc_col-sm-8 no-top-margin",
				'group'				=> esc_html__('Extra Features', 'apcore'),
			),  
			array(
				"type"				=> "textfield",
				"class"				=> "",
				"heading"			=> __("Delay","apcore"),
				"param_name"		=> "data_delay",
				"value"				=> "0",
				"description"		=> __("Delay","apcore"),
				"edit_field_class"	=> "apress-heading-param-wrapper vc_column vc_col-sm-4 no-top-margin",
				'group'				=> esc_html__('Extra Features', 'apcore'),
			),
			array(
				"type"				=> "zolo_video_link_param",
				"heading"			=> esc_html__("Video tutorial and theme documentation article","apcore"),
				"param_name"		=> "tutorials",
				"doc_link"			=> $doc_link,
				"video_link"		=> "https://youtu.be/OrK1A77Prjc",
				'group'				=> esc_html__('Extra Features', 'apcore'),
			),

		)
	) );		
		
}	