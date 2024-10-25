<?php if (function_exists('acf_add_local_field_group')) {
include 'colors.php';
$color_array =  array(
	'#fefefe' => 'white',
	$primary_color => 'primary',
	$secondary_color => 'secondary',
	$light_gray => 'light-gray',
	$medium_gray => 'medium-gray',
	$dark_gray => 'dark-gray',
	$theme_color_1 => 'theme-color-1',
	$theme_color_2 => 'theme-color-2',
	$theme_color_3 => 'theme-color-3',
	$theme_color_4 => 'theme-color-4',
	'transparent' => 'transparent',
);
//Page Options
acf_add_local_field_group(array(
	'key' => 'group_5c756aae12c9d',
	'title' => 'Page Options',
	'fields' => array(
	
		array(
			'key' => 'field_5c756acdc2285',
			'label' => 'Background colour',
			'name' => 'page_background_color',
			'type' => 'swatch',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'choices' => $color_array,
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'layout' => 'horizontal',
			'return_format' => 'label',
			'placeholder' => '',
		),
		
	),
	'location' => array(	
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => false,
));



//FAQ OPTIONS PAGE
acf_add_local_field_group(array(
	'key' => 'group_5d54589f208266',
	'title' => 'Options Page',
	'fields' => array(
		array(
			'key' => 'field_5c3j4ede232af66',
			'label' => 'Accordion',
			'name' => 'repeater_accordion',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Section',
			'sub_fields' => array(
		array(
			'key' => 'field_5d49ad43a131e16',
			'label' => 'Section heading',
			'name' => 'section_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		
		array(
			'key' => 'field_5c34ede232af66',
			'label' => 'Accordion Content',
			'name' => 'repeater_content_accordion',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Accordion',
			'sub_fields' => array(
				array(
					'key' => 'field_5c34ee0032af76',
					'label' => 'Header',
					'name' => 'header',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '100',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),

				array(
					'key' => 'field_614b0df41e61b6',
					'label' => 'Categories',
					'name' => 'categories',
					'type' => 'taxonomy',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'category',
					'field_type' => 'checkbox',
					'add_term' => 0,
					'save_terms' => 0,
					'load_terms' => 0,
					'return_format' => 'object',
					'multiple' => 0,
					'allow_null' => 0,
				),
				array(
					'key' => 'field_5c34ee0932af86',
					'label' => 'Content',
					'name' => 'content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
			),
		),
	),
),
),

	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'faqs',
			),
		),
	),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
));

acf_add_local_field_group(array(
		'key' => 'group_5d54589f208269',
		'title' => 'People',
		'fields' => array(
		
	
			array(
				'key' => 'field_5c34ede232af66f1',
				'label' => 'People',
				'name' => 'people_repeater',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'block',
				'button_label' => 'Add Person',
				'sub_fields' => array(
				
					array(
						'key' => 'field_5c812c9h28a19c2',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'thumbnail',
						'library' => 'all',
	
					),
					
					array(
						'key' => 'field_5c34ee003g2af746',
						'label' => 'Name',
						'name' => 'name',
						'type' => 'text',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
					
					),
					array(
						'key' => 'field_5c34ee0032arf746',
						'label' => 'Job Title',
						'name' => 'job',
						'type' => 'text',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
					
					),
				
					array(
						'key' => 'field_524ee20032arf746',
						'label' => 'Email',
						'name' => 'email',
						'type' => 'text',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
					
					),
				
				
					array(
						'key' => 'field_5c34ere0932af86',
						'label' => 'Biography',
						'name' => 'biography',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 0,
						'delay' => 0,
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'people',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));


} //END ACF 






if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'FAQs',
		'menu_title'	=> 'FAQs',
		'menu_slug' 	=> 'faqs',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_page(array(
		'page_title' 	=> 'People',
		'menu_title'	=> 'People',
		'menu_slug' 	=> 'people',
		'capability'	=> 'edit_posts',
		'icon_url' => 'dashicons-buddicons-buddypress-logo',
		'redirect'		=> false
	));
}


add_action('admin_head', 'gutenberg_sidebar');

function gutenberg_sidebar() {
  echo 
  '<style>
    .edit-post-sidebar {width: 400px;}
  </style>';
}
add_action('acf/input/admin_head', 'my_acf_admin_head5');
function my_acf_admin_head5()
{

	?>
<style type="text/css">
	.acf-editor-wrap iframe {
		min-height: 100px;
		height: 150px !important;
	}

	ul.acf-swatch-list.acf-hl>li {
		margin-right: .1rem;

	}

	ul.acf-swatch-list label {
		font-size: 0;
	}

	ul.acf-swatch-list .swatch-toggle {
		border-radius: 50%;
		border: 1px solid #aaaaaa;
	}
</style>
<?php

}
