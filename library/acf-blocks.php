<?php
include 'colors.php';
$color_array =  array(
	'#fefefe' => 'white',
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
if( function_exists('acf_register_block_type') ) {
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
function checkCategoryOrder($categories)
{
    //custom category array
	$temp = array(
        'slug'  => 'avidd-blocks',
        'title' => 'AVIDD'
    );
    //new categories array and adding new custom category at first location
    $newCategories = array();
    $newCategories[0] = $temp;

    //appending original categories in the new array
    foreach ($categories as $category) {
        $newCategories[] = $category;
    }

    //return new categories
    return $newCategories;
}
add_filter( 'block_categories', 'checkCategoryOrder', 99, 1);
  
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type(  __DIR__ . '/acf-5050/block.json' );
    register_block_type(  __DIR__ . '/acf-accordion/block.json' );
    register_block_type(  __DIR__ . '/acf-carousel/block.json' );
    register_block_type(  __DIR__ . '/acf-tab/block.json' );


    }
}

//50-50
acf_add_local_field_group(array(
	'key' => 'group_622b363287772',
	'title' => 'Block: 50-50',
	'fields' => array (
		array(
            'key' => 'field_622b36b9900e2',
            'label' => 'Section background',
            'name' => 'section_background',
            'type' => 'swatch',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '100',
                'class' => '',
                'id' => '',
            ),
            'choices' => $color_array,
            'allow_null' => 1,
            'default_value' => array(
                0 => '#fefefe',
            ),
            'layout' => 'horizontal',
            'return_format' => 'label',
            'other_choice' => 0,
            'save_other_choice' => 0,
        ),
        array(
            'key' => 'field_5c812c92819c9',
            'label' => 'Section background image',
            'name' => 'section_background_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '100',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
        ),
        array(
            'key' => 'field_tab1',
            'label' => 'Left',
            'name' => '',
            'type' => 'tab',
            'required' => 0,
            'conditional_logic' => 0,
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_5c8129ec8s19be',
            'label' => 'Left background Colour',
            'name' => 'left_background',
            'type' => 'swatch',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '100',
                'class' => '',
                'id' => '',
            ),
            'choices' => $color_array,
            'allow_null' => 1,
            'default_value' => '',
            'layout' => 'horizontal',
            'return_format' => 'label',
            'other_choice' => 0,
            'save_other_choice' => 0,
        ),
        array(
            'key' => 'field_5c812c928139c4',
            'label' => 'Left Overlay color',
            'name' => 'left_overlay',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c812c92h819c2',
                          'operator' => '!=empty',
                        ),
                    ),
                ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
     
        array(
            'key' => 'field_5c812c92h819c2',
            'label' => 'Left background image',
            'name' => 'left_background_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
    
        ),   
        array(
            'key' => 'field_5c812kc928d139c4',
            'label' => 'Contain background image',
            'name' => 'left_background_image_contain',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c812c92h819c2',
                          'operator' => '!=empty',
                        ),
                    ),
                ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_5c815c95b12b92',
            'label' => 'Left content',
            'name' => 'left_content',
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
            'toolbar' => 'full',
        ),
         array(
            'key' => 'field_5c812kggic928d139c4',
            'label' => 'Slider',
            'name' => 'slider_control_left',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
      
           	array(
                'key' => 'field_626dd3503bne215',
                'label' => 'Slider Content',
                'name' => 'repeater_content_carousel_left',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c812kggic928d139c4',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_626dd3503e216',
                'min' => 1,
                'max' => 0,
                'layout' => 'block',
                'button_label' => 'Add Slide',
                'sub_fields' => array(
                    
                    array(
                        'key' => 'field_626dd3503e218',
                        'label' => 'Content',
                        'name' => 'carousel_content',
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

        array(
            'key' => 'field_tab2',
            'label' => 'Right',
            'name' => '',
            'type' => 'tab',
            'required' => 0,
            'conditional_logic' => 0,
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_5c8129ec8s19ber',
            'label' => 'Right background Colour',
            'name' => 'right_background',
            'type' => 'swatch',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '100',
                'class' => '',
                'id' => '',
            ),
            'choices' => $color_array,
            'allow_null' => 1,
            'default_value' => '',
            'layout' => 'horizontal',
            'return_format' => 'label',
            'other_choice' => 0,
            'save_other_choice' => 0,
        ),
        array(
            'key' => 'field_5c812c928139c4r',
            'label' => 'Right Overlay color',
            'name' => 'right_overlay',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c812c92h819c2r',
                            'operator' => '!=empty',
                        ),
                    ),
                ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
    
        array(
            'key' => 'field_5c812c92h819c2r',
            'label' => 'Right background image',
            'name' => 'right_background_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '100',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
    
        ),  
        array(
            'key' => 'field_5c81s2kc928d139c4',
            'label' => 'Contain background image',
            'name' => 'right_background_image_contain',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c812c92h819c2r',
                           'operator' => '!=empty',
                        ),
                    ),
                ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ), 
        array(
            'key' => 'field_5c815c95b12b92r',
            'label' => 'Right content',
            'name' => 'right_content',
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
            'toolbar' => 'full',
        ),
          array(
            'key' => 'field_5c812kggic928d139c4k',
            'label' => 'Slider',
            'name' => 'slider_control_right',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
      
           	array(
                'key' => 'field_626dd3503bne215h',
                'label' => 'Slider Content',
                'name' => 'repeater_content_carousel_right',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c812kggic928d139c4k',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
               
                'min' => 1,
                'max' => 0,
                'layout' => 'block',
                'button_label' => 'Add Slide',
                'sub_fields' => array(
                    
                    array(
                        'key' => 'field_626dd3503e218ao',
                        'label' => 'Content',
                        'name' => 'carousel_content',
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
    )  ,
    'location' => array(
      array(
           array(
            'param' => 'block',
            'operator' => '==',
            'value' => 'acf/acf-50-50',
         ),
     ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seemless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
));
//Accordion
acf_add_local_field_group(array(
	'key' => 'group_622b3632877721',
	'title' => 'Block: Accordion',
	'fields' => array(
        array(
            'key' => 'field_626db345738d5',
            'label' => 'Accordion type',
            'name' => 'accordion_type',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'custom' => 'Custom',
                'faq' => 'FAQs',
            ),
            'default_value' => false,
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_626db2h7e738c3',
            'label' => 'Accordion background colour',
            'name' => 'accordion_background_color',
            'type' => 'swatch',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => $color_array,
            'allow_null' => 1,
            'default_value' => '',
            'layout' => 'horizontal',
            'return_format' => 'label',
            'other_choice' => 0,
            'save_other_choice' => 0,
        ),
       
        array(
            'key' => 'field_626db2f7738c7',
            'label' => 'Accordion Content',
            'name' => 'repeater_content_accordion',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_626db345738d5',
                        'operator' => '==',
                        'value' => 'custom',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => 'field_626db2f7738cc',
            'min' => 1,
            'max' => 0,
            'layout' => 'block',
            'button_label' => 'Add Accordion Row',
            'sub_fields' => array(
                array(
                    'key' => 'field_626db2f7738cc',
                    'label' => 'Accordion Heading',
                    'name' => 'accordion_heading',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
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
                    'key' => 'field_626db2f7738ca',
                    'label' => 'Accordion Heading Background Colour',
                    'name' => 'accordion_heading_background_color',
                    'type' => 'swatch',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => $color_array,
                    'allow_null' => 1,
                    'default_value' => '',
                    'layout' => 'horizontal',
                    'return_format' => 'label',
                    'other_choice' => 0,
                    'save_other_choice' => 0,
                ),
                array(
                    'key' => 'field_626db2f7738cd',
                    'label' => 'Accordion Content',
                    'name' => 'accordion_content',
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
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/accordion',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seemless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));
//Tab
acf_add_local_field_group(array(
	'key' => 'group_622b3632877723',
	'title' => 'Block: Tab',
	'fields' => array(
        array(
                'key' => 'field_626dcf6a205d4',
                'label' => 'Section background colour',
                'name' => 'section_background_color',
                'type' => 'swatch',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => $color_array,
                'allow_null' => 1,
                'default_value' => '',
                'layout' => 'horizontal',
                'return_format' => 'label',
                'other_choice' => 0,
                'save_other_choice' => 0,
            ),
        array(
                'key' => 'field_626da7410655fg',
                'label' => 'Tab Background Colour',
                'name' => 'tab_background_color',
                'type' => 'swatch',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => $color_array,
                'allow_null' => 1,
                'default_value' => '',
                'layout' => 'horizontal',
                'return_format' => 'label',
                'other_choice' => 0,
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'field_626dcf6a205da',
                'label' => 'Tab Content',
                'name' => 'repeater_content_tab',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_626dcf6a205db',
                'min' => 1,
                'max' => 0,
                'layout' => 'block',
                'button_label' => 'Add Tab',
                'sub_fields' => array(
                    array(
                        'key' => 'field_626dcf6a205db',
                        'label' => 'Tab Heading',
                        'name' => 'tab_heading',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
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
                        'key' => 'field_626dcf6a205dc',
                        'label' => 'Tab Background Colour',
                        'name' => 'tab_background_color',
                        'type' => 'swatch',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => $color_array,
                        'allow_null' => 1,
                        'default_value' => '',
                        'layout' => 'horizontal',
                        'return_format' => 'label',
                        'other_choice' => 0,
                        'save_other_choice' => 0,
                    ),
                    array(
                        'key' => 'field_626dd11e205e3',
                        'label' => 'Tab Content',
                        'name' => 'tab_content',
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
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/tab',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seemless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));
//Carousel
acf_add_local_field_group(array(    
	'key' => 'group_622b36328777a24',
	'title' => 'Block: Carousel',
	'fields' => array(
        array(
    'key' => 'field_5c3812a7a819bf1',
    'label' => 'Carousel Type',
    'name' => 'carousel_type',
    'type' => 'select',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => 0,
    'wrapper' => array(
        'width' => '100',
        'class' => '',
        'id' => '',
    ),
    'choices' => array(
        'people-carousel' => 'People carousel',
        'slidecarousel' => 'Slide Carousel',
        
   

    ),
    'default_value' => array(
        0 => 'gallerycarousel',
    ),
    'allow_null' => 0,
    'multiple' => 0,
    'ui' => 1,
    'ajax' => 0,
    'return_format' => 'value',
    'placeholder' => '',
    ),
  array(
        'key' => 'field_626dd35jfd03e216',
        'label' => 'Section Heading',
        'name' => 'section_heading',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
            'width' => '',
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
    'key' => 'field_5d49aea9131e31',
    'label' => 'Section background',
    'name' => 'section_background',
    'type' => 'swatch',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => 0,
    'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
    ),
    'choices' => $color_array,
    'allow_null' => 1,
    'default_value' => array(
        0 => '#fefefe',
    ),
    'layout' => 'horizontal',
    'return_format' => 'label',
    'other_choice' => 0,
    'save_other_choice' => 0,
    ),
     array(
            'key' => 'field_626ddjhp4413e2k19',
            'label' => 'Section Image',
            'name' => 'section_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
        array(
            'field' => 'field_5c3812a7a819bf1',
            'operator' => '==',
            'value' => 'slidecarousel',
        ),
    ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
         array(
        'key' => 'field_pdjdhqdliwisdsjd',
        'label' => 'Image Position',
        'name' => 'image_position',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
        array(
            'field' => 'field_5c3812a7a819bf1',
            'operator' => '==',
            'value' => 'slidecarousel',
        ),
    ),
        'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'message' => '',
        'ui' => 1,
        'default_value' => 0,
        'ui_on_text' => 'After Slide',
        'ui_off_text' => 'Before Slide',
         ), 
         array(
            'key' => 'field_5c812a7a8hgh19bf',
            'label' => 'People Group',
            'name' => 'person_group_select',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'team' => 'Team',
                'board' => 'Board',
                'other' => 'Other',
            ),
            
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 1,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
       
    array(
    'key' => 'field_625407c6661c0f',
    'label' => 'Gallery Carousel',
    'name' => 'carousel_gallery',
    'type' => 'gallery',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => array(
        array(
            'field' => 'field_5c3812a7a819bf1',
            'operator' => '==',
            'value' => 'gallerycarousel',
        ),
    ),
    'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
    ),
    'return_format' => 'array',
    'preview_size' => 'thumbnail',
    'insert' => 'append',
    'library' => 'all',
    ),
    array(
    'key' => 'field_626dd3503e215h',
    'label' => 'Carousel Content',
    'name' => 'repeater_content_carousel',
    'type' => 'repeater',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => array(
        array(
            array(
                'field' => 'field_5c3812a7a819bf1',
                'operator' => '==',
                'value' => 'slidecarousel',
            ),
        ),
    ),
    'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
    ),
    'collapsed' => 'field_626dd3503e216',
    'min' => 1,
    'max' => 0,
    'layout' => 'block',
    'button_label' => 'Add Slide',
    'sub_fields' => array(
        array(
            'key' => 'field_626ddp4413e2k19',
            'label' => 'Carousel Image',
            'name' => 'carousel_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
        array(
            'key' => 'field_626dd35jf03e216',
            'label' => 'Carousel Heading',
            'name' => 'carousel_heading',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
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
            'key' => 'field_626dd3503ell217',
            'label' => 'Carousel Background Colour',
            'name' => 'carousel_background_color',
            'type' => 'swatch',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => $color_array,
            'allow_null' => 1,
            'default_value' => '',
            'layout' => 'horizontal',
            'return_format' => 'label',
            'other_choice' => 0,
            'save_other_choice' => 0,
        ),
        array(
            'key' => 'field_626hedd3503e218',
            'label' => 'Carousel Content',
            'name' => 'carousel_content',
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
        'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/carousel',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seemless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
    )
);   


} ?>