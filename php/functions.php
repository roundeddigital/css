<?php

add_action('after_setup_theme', 'uncode_language_setup');
function uncode_language_setup()
{
	load_child_theme_textdomain('uncode', get_stylesheet_directory() . '/languages');
}

function theme_enqueue_styles()
{
	$production_mode = ot_get_option('_uncode_production');
	$resources_version = ($production_mode === 'on') ? null : rand();
	$parent_style = 'uncode-style';
	$child_style = array('uncode-custom-style');
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/library/css/style.css', array(), $resources_version);
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', $child_style, $resources_version);

}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/*Write here your own functions */

/* ========================================================================================== */

/* ******************** RD ***
REGISTER NEW POST TYPES
******************** RD */

function cptui_register_my_cpts() {

	/* ********************
  * SERVICES
  ******************** */

	$labels = array(
		"name" => __( "Services", "uncode-child" ),
		"singular_name" => __( "Service", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Services", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "services", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-store",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
		"taxonomies" => array( "service_category" ),
	);

	register_post_type( "services", $args );


  /* ********************
  * TEAM MEMBERS
  ******************** */

	$labels = array(
		"name" => __( "Team Members", "uncode-child" ),
		"singular_name" => __( "Team Member", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Team Members", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "team", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-groups",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "team", $args );


   /* ********************
   * MEDIA APPEARANCES
   ******************** */

	$labels = array(
		"name" => __( "Media Appearances", "uncode-child" ),
		"singular_name" => __( "Media Appearance", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Media Appearances", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "press", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 7,
		"menu_icon" => "dashicons-megaphone",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "press", $args );

  /* ********************
  * CAREERS
  ******************** */

	$labels = array(
		"name" => __( "Careers", "uncode-child" ),
		"singular_name" => __( "Career", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Careers", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "careers", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 8,
		"menu_icon" => "dashicons-businessman",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "careers", $args );

  /* ********************
  * LOCATIONS
  ******************** */

	$labels = array(
		"name" => __( "Locations", "uncode-child" ),
		"singular_name" => __( "Location", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Locations", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "locations", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 9,
		"menu_icon" => "dashicons-location",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "locations", $args );

  /* ********************
  * AFFILIATIONS
  ******************** */

	$labels = array(
		"name" => __( "Affiliations", "uncode-child" ),
		"singular_name" => __( "Affiliation", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Affiliations", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "affiliations", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
		"taxonomies" => array( "employee_featured" ),
	);

	register_post_type( "affiliations", $args );


  /* ********************
  * ABSTRACTS
  ******************** */

	$labels = array(
		"name" => __( "Abstracts", "uncode-child" ),
		"singular_name" => __( "Abstract", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Abstracts", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "abstracts", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-aside",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
		"taxonomies" => array( "service_category", "employee_featured" ),
	);

	register_post_type( "abstracts", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

/* ========================================================================================== */

/* ******************** RD ***
REGISTER NEW TAXONMIES
******************** RD */


function cptui_register_my_taxes() {

  /* ******************** RD ***
  REGISTER NEW TAX: SERVICE TYPE
  ******************** RD */

	$labels = array(
		"name" => __( "Service Types", "uncode-child" ),
		"singular_name" => __( "Service Type", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Service Types", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Service Types",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'service_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "service_category", array( "services" ), $args );

  /* ******************** RD ***
  REGISTER NEW TAX: TEAM MEMBER CATEGORIES
  ******************** RD */

	$labels = array(
		"name" => __( "Team Member Categories", "uncode-child" ),
		"singular_name" => __( "Team Member Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Team Member Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Team Member Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'team_member_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "team_member_category", array( "team" ), $args );


  /* ******************** RD ***
  REGISTER NEW TAX: PRESS WRITEUP CATEGORIES
  ******************** RD */

	$labels = array(
		"name" => __( "Press Writeup Categories", "uncode-child" ),
		"singular_name" => __( "Press Writeup Categories", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Press Writeup Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Press Writeup Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'press_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "press_category", array( "press" ), $args );

  /* ******************** RD ***
  REGISTER NEW TAX: CAREER CATEGORIES
  ******************** RD */

	$labels = array(
		"name" => __( "Career Categories", "uncode-child" ),
		"singular_name" => __( "Career Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Career Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Career Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'career_categories', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "career_categories", array( "careers" ), $args );

  /* ******************** RD ***
  REGISTER NEW TAX: LOCATION CATEGORIES
  ******************** RD */

	$labels = array(
		"name" => __( "Location Categories", "uncode-child" ),
		"singular_name" => __( "Location Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Location Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Location Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'location_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "location_category", array( "locations" ), $args );

  /* ******************** RD ***
  REGISTER NEW TAX: DEPARTMENTS
  ******************** RD */

	$labels = array(
		"name" => __( "Departments", "uncode-child" ),
		"singular_name" => __( "Department", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Departments", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Departments",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'department', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "department", array( "team" ), $args );

  /* ******************** RD ***
  REGISTER NEW TAX: EMPLOYEE LOCATIONS
  ******************** RD */

	$labels = array(
		"name" => __( "Locations", "uncode-child" ),
		"singular_name" => __( "Location", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Locations", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Locations",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'employee_location', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "employee_location", array( "team", "careers" ), $args );

  /* ******************** RD ***
  REGISTER NEW TAX: AREAS OF EMPLOYEE EXPERTISE
  ******************** RD */

	$labels = array(
		"name" => __( "Expertise Areas", "uncode-child" ),
		"singular_name" => __( "Expertise Area", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Expertise Areas", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Expertise Areas",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'employee_expertise', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "employee_expertise", array( "team" ), $args );

	/**
	 * Taxonomy: Featured Employees.
	 */

	$labels = array(
		"name" => __( "Featured Employees", "uncode-child" ),
		"singular_name" => __( "Featured Employee", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Featured Employees", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Featured Employees",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'employee_featured', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "employee_featured", array( "press" ), $args );

  /* ******************** RD ***
  REGISTER NEW TAX: PORTFOLIO BY SERVICE
  ******************** RD */

	$labels = array(
		"name" => __( "Services", "uncode-child" ),
		"singular_name" => __( "Services", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Services", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Services",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'service', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "service", array( "press", "portfolio" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
