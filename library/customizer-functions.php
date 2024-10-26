<?php


use Kirki\Util\Helper;
include 'colors.php';
$color_array =  array(
  $primary_color ,
  $secondary_color ,
  $light_gray ,
  $medium_gray ,
  $dark_gray ,
  $black,
$transparent,
  $white,
  $theme_color_1,
  $theme_color_2,
  $theme_color_3,
  $theme_color_4

);
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Do not proceed if Kirki does not exist.
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

Kirki::add_config(
	'avidd_theme_config',
	[
		'option_type' => 'theme_mod',
		'capability'  => 'manage_options',
	]
);

new \Kirki\Panel(
	'theme_settings',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Theme Settings', 'avidd' ),
		'description' => esc_html__( 'Settings to control the theme styles.', 'avidd' ),
	]
);

$sections = [
  'site_header'      => [ esc_html__( 'Site Header', 'avidd' ), '' ],
  'site_footer'      => [ esc_html__( 'Site Footer', 'avidd' ), '' ],
  'site_settings'      => [ esc_html__( 'Site Settings', 'avidd' ), '' ],
  'social_media'      => [ esc_html__( 'Social Media', 'avidd' ), '' ],


];

foreach ( $sections as $section_id => $section ) {
	$section_args = [
		'title'       => $section[0],
		'description' => $section[1],
		'panel'       => 'theme_settings',
	];
	if ( isset( $section[2] ) ) {
		$section_args['type'] = $section[2];
	}
	new \Kirki\Section( str_replace( '-', '_', $section_id ) . '_section', $section_args );
}


new \Kirki\Section(
	'opening_times',
	[
		'title'       => esc_html__( 'Opening Times', 'avidd' ),
		'description' => esc_html__( '', 'avidd' ),
		'priority'    => 20,
	]
);


new \Kirki\Field\Color_Palette(
	[
		'settings'    => 'color_palette_setting_0',
		'label'       => esc_html__( 'Nav background colour', 'avidd' ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_header_section',
		'default'     => 'transparent',
		'transport'   => 'postMessage',
		'choices'     => [
			'colors' => $color_array,
			'style'  => 'round',
		],
    'output'      => [
      array(
        'element'  => ' .top-bar, .top-bar ul, .title-bar,#mega-menu-wrap-top-bar-r',
        'property' => 'background-color'
      ),
  ]
	]
);
new \Kirki\Field\Color_Palette(
	[
		'settings'    => 'color_palette_setting_1',
		'label'       => esc_html__( 'Nav menu item colour', 'avidd' ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_header_section',
		'default'     => '$primary-color',
		'transport'   => 'postMessage',
		'choices'     => [
			'colors' => $color_array,
			'style'  => 'round',
		],
    'output'      => [
      array(
        'element'  => '.top-bar, .desktop-menu a, .mobile-menu a',
            'property' => 'color'
      ),
  ]
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'header_background_image',
		'label'       => esc_html__( 'Header background image', 'avidd' ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_header_section',
		'default'     => '',
		'choices'     => [
      'save_as' => 'id',
		],
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'header_logo',
		'label'       => esc_html__( 'Header logo', 'avidd' ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_header_section',
		'default'     => '',
		'choices'     => [
      'save_as' => 'url',
		],
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'contained_header',
		'label'       => esc_html__( 'Contained Header', 'avidd'  ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_header_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'avidd' ),
			'off' => esc_html__( 'Disable', 'avidd' ),
		],
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'sticky_header',
		'label'       => esc_html__( 'Sticky Header', 'avidd'  ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_header_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'avidd' ),
			'off' => esc_html__( 'Disable', 'avidd' ),
		],
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'fixed_header',
		'label'       => esc_html__( 'Sticky header over featured image', 'avidd'  ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_header_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'avidd' ),
			'off' => esc_html__( 'Disable', 'avidd' ),
		],
	]
);

//Site Footer
new \Kirki\Field\Color_Palette(
	[
		'settings'    => 'color_palette_setting_3',
		'label'       => esc_html__( 'Footer background colour', 'avidd' ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_footer_section',
		'default'     => '#fefefe',
		'transport'   => 'postMessage',
		'choices'     => [
			'colors' => $color_array,
			'style'  => 'round',
		],
    'output'      => [
      array(
        'element'  => '.footer',
        'property' => 'background-color'
      ),
  ]
	]
);
new \Kirki\Field\Color_Palette(
	[
		'settings'    => 'color_palette_setting_4',
		'label'       => esc_html__( 'Footer text colour', 'avidd' ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_footer_section',
		'default'     => '$primary-color',
		'transport'   => 'postMessage',
		'choices'     => [
			'colors' => $color_array,
			'style'  => 'round',
		],
    'output'      => [
      array(
        'element'  => '.footer, .footer a, .footer li',
            'property' => 'color'
      ),
  ]
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'footer_background_image',
		'label'       => esc_html__( 'Footer background image', 'avidd' ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_footer_section',
		'default'     => '',
		'choices'     => [
      'save_as' => 'id',
		],
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'footer_links',
		'label'    => esc_html__( 'Footer images', 'avidd' ),
		'section'  => 'site_footer_section',
		'priority' => 11,
		'fields'   => [
      'footer_image' =>[
        'type'        => 'image',
        'label'       => esc_html__( 'Footer image', 'avidd' ),
        'description' => esc_html__( '', 'avidd' ),
        'section'     => 'site_footer_section',
        'default'     => '',
        'choices'     => [
          'save_as' => 'id',
        ],
      ],
	  'link_url'    => [
		'type'        => 'text',
		'label'       => esc_html__( 'Link URL', 'avidd' ),
		'default'     => '',
	],
		],
	]
);

//Social Media
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'social-instagram',
		'label'       => esc_html__( 'Instagram', 'avidd'  ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'social_media_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'avidd' ),
			'off' => esc_html__( 'Disable', 'avidd' ),
		],
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'social-instagram-url',
		'label'    => esc_html__( 'Instagram URL', 'avidd' ),
		'section'  => 'social_media_section',
		'default'  => 'https://instagram.com/',
		'priority' => 10,
		'active_callback'  => [
			[
				'setting'  => 'social-instagram',
				'operator' => '===',
				'value'    => true,
			],
		],
	],
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'social-facebook',
		'label'       => esc_html__( 'Facebook', 'avidd'  ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'social_media_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'avidd' ),
			'off' => esc_html__( 'Disable', 'avidd' ),
		],
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'social-facebook-url',
		'label'    => esc_html__( 'Facebook URL', 'avidd' ),
		'section'  => 'social_media_section',
		'default'  => 'https://facebook.com/',
		'priority' => 10,
		'active_callback'  => [
			[
				'setting'  => 'social-facebook',
				'operator' => '===',
				'value'    => true,
			],
		],
	],
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'social-x',
		'label'       => esc_html__( 'X', 'avidd'  ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'social_media_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'avidd' ),
			'off' => esc_html__( 'Disable', 'avidd' ),
		],
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'social-x-url',
		'label'    => esc_html__( 'X URL', 'avidd' ),
		'section'  => 'social_media_section',
		'default'  => 'https://x.com/',
		'priority' => 10,
		'active_callback'  => [
			[
				'setting'  => 'social-x',
				'operator' => '===',
				'value'    => true,
			],
		],
	],
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'social-linkedin',
		'label'       => esc_html__( 'LinkedIn', 'avidd'  ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'social_media_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'avidd' ),
			'off' => esc_html__( 'Disable', 'avidd' ),
		],
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'social-linkedin-url',
		'label'    => esc_html__( 'LinkedIn URL', 'avidd' ),
		'section'  => 'social_media_section',
		'default'  => 'https://linkedin.com/',
		'priority' => 10,
		'active_callback'  => [
			[
				'setting'  => 'social-linkedin',
				'operator' => '===',
				'value'    => true,
			],
		],
	],
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'social-youtube',
		'label'       => esc_html__( 'YouTube', 'avidd'  ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'social_media_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'avidd' ),
			'off' => esc_html__( 'Disable', 'avidd' ),
		],
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'social-youtube-url',
		'label'    => esc_html__( 'YouTube URL', 'avidd' ),
		'section'  => 'social_media_section',
		'default'  => 'https://youtube.com/',
		'priority' => 10,
		'active_callback'  => [
			[
				'setting'  => 'social-youtube',
				'operator' => '===',
				'value'    => true,
			],
		],
	],
);

//Site Settings
new \Kirki\Field\Color_Palette(
	[
		'settings'    => 'color_palette_setting_10',
		'label'       => esc_html__( 'Page background colour', 'avidd' ),
		'description' => esc_html__( '', 'avidd' ),
		'section'     => 'site_settings_section',
		'default'     => '#fefefe',
		'transport'   => 'postMessage',
		'choices'     => [
			'colors' => $color_array,
			'style'  => 'round',
		],
    'output'      => [
      array(
        'element'  => 'body',
        'property' => 'background-color'
      ),
  ]
	]
);



new \Kirki\Field\Repeater(
	[
		'settings' => 'opening_times',
		'label'    => esc_html__( 'Opening Hours', 'avidd' ),
		'section'  => 'opening_times',
		'priority' => 11,
		'fields'   => [
      'day' =>[
        'type'        => 'text',
        'label'       => esc_html__( 'Day', 'avidd' ),
       
      
      ],
	  'hours'    => [
		'type'        => 'text',
		'label'       => esc_html__( 'Hours', 'avidd' ),
	
	],
		],
	]
);


// CUSTOMIZER FOOTER CONTACT
function footer_contact_customizer( $wp_customize ) {
$wp_customize->add_section(
'contact_section',
array(
   'title' => 'Contact Details',
   'description' => 'Add contact details.',
   'priority' => 40,
)
);

$wp_customize->add_setting(
'contact_phone_number',
array(
'default' => '',
)
);
$wp_customize->add_control(
'contact_phone_number',
array(
'label' => 'Phone Number',
'section' => 'contact_section',
'type' => 'text',
)
);
$wp_customize->add_setting(
	'contact_mobile_number',
	array(
	'default' => '',
	)
	);
	$wp_customize->add_control(
	'contact_mobile_number',
	array(
	'label' => 'Mobile Number',
	'section' => 'contact_section',
	'type' => 'text',
	)
	);

$wp_customize->add_setting(
'contact_email',
array(
'default' => '',
)
);
$wp_customize->add_control(
'contact_email',
array(
'label' => 'Email',
'section' => 'contact_section',
'type' => 'text',
)
);
$wp_customize->add_setting(
'contact_address_1',
array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field',
)
);
$wp_customize->add_control(
'contact_address_1',
array(
'label' => 'Street',
'section' => 'contact_section',
'type' => 'text',
)
);
$wp_customize->add_setting(
'contact_address_2',
array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field',
)
);
$wp_customize->add_control(
'contact_address_2',
array(
'label' => 'Street 2',
'section' => 'contact_section',
'type' => 'text',
)
);
$wp_customize->add_setting(
'contact_address_3',
array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field',
)
);
$wp_customize->add_control(
'contact_address_3',
array(
'label' => 'Street 3',
'section' => 'contact_section',
'type' => 'text',
)
);
$wp_customize->add_setting(
'contact_address_4',
array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field',
)
);
$wp_customize->add_control(
'contact_address_4',
array(
'label' => 'City',
'section' => 'contact_section',
'type' => 'text',
)
);
$wp_customize->add_setting(
'contact_address_5',
array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field',
)
);
$wp_customize->add_control(
'contact_address_5',
array(
'label' => 'County',
'section' => 'contact_section',
'type' => 'text',
)
);
$wp_customize->add_setting(
'contact_address_6',
array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field',
)
);
$wp_customize->add_control(
'contact_address_6',
array(
'label' => 'Postcode',
'section' => 'contact_section',
'type' => 'text',
)
); 

$wp_customize->add_setting(
'footer_company_number',
array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field',
)
);
$wp_customize->add_control(
'footer_company_number',
array(
'label' => 'Company registration number',
'section' => 'contact_section',
'type' => 'text',
)
); 
}
add_action( 'customize_register', 'footer_contact_customizer' );
