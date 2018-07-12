<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings = array(
	'ajax_save' => true,
	'menu_slug' => 'ondance-settings',
	'menu_type' => 'menu', // menu, submenu, options, theme, etc.
	'show_reset_all' => false,
	'framework_title' => 'OnDance <small>by 3y3ik</small>',
	'menu_title' => 'Theme Settings',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// ----------------------------------------
// Home Page
// ----------------------------------------
$options[] = array(
	'name' => 'home_section',
	'icon' => 'fa fa-home',
	'title' => 'Home Page',
	'fields' => array(
		array(
			'type' => 'heading',
			'content' => 'Home Page Settings',
		),
		array(
			'id' => 'home_slider',
			'type' => 'group',
			'title' => 'Home Slider',
			'button_title' => 'Add New Slide',
			'accordion_title' => 'Slide Settings',
			'fields' => array(
				array(
					'id' => 'title',
					'type' => 'text',
					'title' => 'Title',
				),
				array(
					'id' => 'description',
					'type' => 'textarea',
					'title' => 'Description',
				),
				array(
					'id' => 'img',
					'type' => 'image',
					'title' => 'Image',
				),
				array(
					'id' => 'link_url',
					'type' => 'text',
					'title' => 'Link URL',
				),
				array(
					'id' => 'link_text',
					'type' => 'text',
					'title' => 'Link Text',
				),
			),
		),

	),
);

// ------------------------------
// Contact
// ------------------------------
$options[] = array(
	'name' => 'contact_section',
	'icon' => 'fa fa-envelope',
	'title' => 'Contact',
	'fields' => array(
		array(
			'type' => 'heading',
			'content' => 'Contact Settings',
		),
		array(
			'id' => 'contact_address_title',
			'type' => 'text',
			'title' => 'Address Title',
		),
		array(
			'id' => 'contact_address_content',
			'type' => 'textarea',
			'title' => 'Address Content',
		),
		array(
			'id' => 'contact_communications_title',
			'type' => 'text',
			'title' => 'Communications Title',
		),
		array(
			'id' => 'contact_communications_content',
			'type' => 'textarea',
			'title' => 'Communications Content',
		),
		array(
			'id' => 'contact_schedule_title',
			'type' => 'text',
			'title' => 'Schedule Title',
		),
		array(
			'id' => 'contact_schedule_content',
			'type' => 'textarea',
			'title' => 'Schedule Content',
		),
	),
);

// ------------------------------
// Product
// ------------------------------
$options[] = array(
	'name' => 'products_section',
	'icon' => 'fa fa-shopping-basket',
	'title' => 'Products',
	'fields' => array(
		array(
			'type' => 'heading',
			'content' => 'Products Settings',
		),
		array(
			'type' => 'subheading',
			'content' => 'Table of sizes',
		),
		array(
			'id' => 'product_ts_title',
			'type' => 'text',
			'title' => 'Title',
		),
		array(
			'id' => 'product_ts_desc',
			'type' => 'textarea',
			'title' => 'Description',
		),
		array(
			'id' => 'product_ts_whiteness_man',
			'type' => 'text',
			'title' => 'Whiteness Man Title',
		),
		array(
			'id' => 'product_ts_whiteness_women',
			'type' => 'text',
			'title' => 'Whiteness Women Title',
		),
		array(
			'id' => 'product_ts_footwear',
			'type' => 'text',
			'title' => 'Footwear Title',
		),
	),
);

// ------------------------------
// Footer
// ------------------------------
$options[] = array(
	'name' => 'footer_section',
	'icon' => 'fa fa-tasks',
	'title' => 'Footer',
	'fields' => array(
		array(
			'type' => 'heading',
			'content' => 'Footer Settings',
		),
		array(
			'id' => 'footer_description',
			'type' => 'textarea',
			'title' => 'Description',
		),
	),
);




CSFramework::instance( $settings, $options );
