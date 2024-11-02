<?php
	
	
/** IMAGE FUNCTIONS */

/** ACF Responsive Images */
add_filter( 'acf_the_content', 'wp_make_content_images_responsive' );

	// REMOVE P TAG FROM IMAGES
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="figure">$1</div>', $pee);
    return $pee;
}
add_filter( 'acf_the_content', 'img_unautop', 30 );


	// REMOVE P TAG FROM Buttons
  function a_unautop($aa) {
    $aa = preg_replace('/<p>\\s*?(<a .*?><a.*?><\\/a>|<a.*?>)?\\s*<\\/p>/s', '$1', $aa);
    return $aa;
}
add_filter( 'acf_the_content', 'a_unautop', 30 );

add_post_type_support( 'page', 'excerpt' );
// GUTENBURG
add_theme_support( 'align-wide' );
function custom_block_categories( $categories ) {
  return array_merge(
      $categories,
      [
          [
              'slug'  => 'avidd',
              'title' => __( 'AVIDD Blocks', 'avidd' ),
          ],
      ]
  );
}
add_action( 'block_categories_all', 'custom_block_categories', 10, 2 );

add_filter(
    'acf/pre_save_block',
    function( $attributes ) {
        if ( empty( $attributes['anchor'] ) ) {
            $attributes['anchor'] = 'acf-block-' . uniqid();
        }
        return $attributes;
    }
);

// change buttons in WYSWIG post editor, edit color palette
function my_mce4_options($init) {
  include 'colors.php';

  $default_colours = '"fefefe", "White",
                      "000000", "Black",
                       "'.$primary_color = substr($primary_color, 1).'" ,"primary",
                       "'.$secondary_color = substr($secondary_color, 1).'","secondary",
                       "'.$light_gray = substr($light_gray, 1).'", "dark gray",
                       "'.$medium_gray = substr($medium_gray, 1).'", "dark gray",
                       "'.$dark_gray = substr($dark_gray, 1).'", "dark gray",
                       "'.$theme_color_1 = substr($theme_color_1, 1).'", "theme color 1",
                       "'.$theme_color_2 = substr($theme_color_2, 1).'", "theme color 2",
                       "'.$theme_color_3 = substr($theme_color_3, 1).'", "theme color 3",
                       "'.$theme_color_4 = substr($theme_color_4, 1).'", "theme color 4",
                      ';
  $init['textcolor_map'] = '['.$default_colours.']';
  return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');

  
// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}

// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

add_filter( 'tiny_mce_before_init', 'custom_mce_before_init' );
function custom_mce_before_init( $settings ) {
    $style_formats = array(
        array(
            'title' => 'Standard Button main colour',
            'selector' => 'a',
            'classes' => 'button hollow',
        ),
    
      array(
        'title' => 'Standard Button secondary colour',
        'selector' => 'a',
        'classes' => 'button hollow secondary',
    ),


    );
    $settings['style_formats'] = json_encode( $style_formats );
    return $settings;
}

  


/**  PASTE AS TEXT */
add_filter('tiny_mce_before_init', 'ag_tinymce_paste_as_text');
function ag_tinymce_paste_as_text( $init ) {
	$init['paste_as_text'] = true;
	return $init;
}


//Responsive native video embed

function alx_embed_html( $html ) {
  return '<div class="responsive-embed">' . $html . '</div>';
}

add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' );

function oembed_related( $html, $url, $attr, $post_id ) {
  if ( strpos ( $html, 'feature=oembed' ) !== false )
    return str_replace( 'feature=oembed',
      'feature=oembed&amp;rel=0&modestbranding=1&showinfo=0', $html );
  else
    return $html;
}
add_filter('embed_oembed_html', 'oembed_related', 10, 4 );


// Fix a long-standing issue with ACF, where fields sometimes aren't shown
// in previews (ie. from Preview > Open in new tab).
if ( class_exists( 'acf_revisions' ) )
{
	// Reference to ACF's <code>acf_revisions</code> class
	// We need this to target its method, acf_revisions::acf_validate_post_id
	$acf_revs_cls = acf()->revisions;

	// This hook is added the ACF file: includes/revisions.php:36 (in ACF PRO v5.11)
	remove_filter( 'acf/validate_post_id', array( $acf_revs_cls, 'acf_validate_post_id', 10 ) );
}

function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyCf4nsA8K3CiVJXfztkpl2pmAfD5Dpq06E';
  return $api;	
  }

  // Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}