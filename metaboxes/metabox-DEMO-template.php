<?php
/**
 * Register meta boxes
 *
 * @return void
 */
function DEMO_register_meta_boxes()
{
	$meta_boxes = contact_metabox();

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( ! class_exists( 'RW_Meta_Box' ) )
		return;

	// Register meta boxes only for some posts/pages
	if ( ! contact_maybe_include() )
		return;

	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}

add_action( 'admin_init', 'contact_register_meta_boxes' );

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function DEMO_maybe_include()
{
	// Include in back-end only
	if ( ! defined( 'WP_ADMIN' ) || ! WP_ADMIN )
		return false;

	// Check for post IDs
	if ( isset( $_GET['post'] ) )
		$post_id = $_GET['post'];
	elseif ( isset( $_POST['post_ID'] ) )
		$post_id = $_POST['post_ID'];
	else
		$post_id = false;

	$post_id = (int) $post_id;

	// Check for page template
	$checked_templates = array( 'default', 'page.php', 'page-home.php' );

	$template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( in_array( $template, $checked_templates ) )
		return true;

	// If no condition matched
	return false;
}

/**
* Creates metaboxes
*
* @return metabox
*/
function contact_metabox()
{
	$prefix = 'wp_';
	$meta_boxes   = array();
	$meta_boxes[] = array(
		'id' => 'stringID',
		'title' => __( 'Titel DEMO', 'rwmb' ),
		'pages' => array( 'post', 'page' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
		        'type' => 'heading',
		        'name' => __( 'DEMO heading', 'rwmb' ),
		        'id'   => 'demo_heading'
		    ),
			array(
				'name'  => __( 'DEMO text:', 'rwmb' ),
				'id'    => "{$prefix}demo_text",
				'desc'  => __( 'DEMO voor text', 'rwmb' ),
				'type'  => 'text',
				'std'   => __( '', 'rwmb' ),
				'clone' => false,
			),
			

			// Google maps embedding
		    array(
		        'type' => 'heading',
		        'name' => __( 'Google maps', 'rwmb' ),
		        'id'   => 'map_heading'
		    ),
		    array(
		        'id'            => 'address-one',
		        'name'          => __( 'Address', 'rwmb' ),
		        'type'          => 'text',
		    ),
		    array(
		        'id'            => 'loc',
		        'name'          => __( 'Location', 'rwmb' ),
		        'type'          => 'map',
		        'style'         => 'width: 500px; height: 250px',
		        'address_field' => 'address-one',                     // Name of text field where address is entered. Can be list of text fields, separated by commas (for ex. city, state)
		    ),
		    array(
		    	'name'  => __( 'Extra infomatie:', 'rwmb' ),
				'id'    => "{$prefix}map_extra",
				'desc'  => __( 'Extra informatie in het kader op de kaart', 'rwmb' ),
				'type'  => 'text',
				'std'   => '',
				'clone' => false,
		    ),
		)
	);

	return $meta_boxes;
}