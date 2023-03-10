<?php

// function dequeue_my_css() {
// 	wp_dequeue_style('prestware-style');
// 	wp_deregister_style('prestware-style');
// 	wp_dequeue_style('wp-block-library');
// 	wp_deregister_style('wp-block-library');
//   }
//   add_action('wp_enqueue_scripts','dequeue_my_css');
  
//   add_filter( 'wp_enqueue_scripts', 'change_default_jquery', 1 );
//   function change_default_jquery( ){
// 	  wp_dequeue_script( 'jquery');
// 	  wp_deregister_script( 'jquery');
// 	  wp_dequeue_script( 'jquery-core');
// 	  wp_deregister_script( 'jquery-core');
//   }

  

/**
 * prestware custom style css adding
 *
 */
// Register Nav Walker class_alias
require_once('wp-bootstrap-navwalker.php');

 if (!function_exists('prestware_style_css')) {
	function prestware_style_css()
	{
		wp_enqueue_style('icons', get_template_directory_uri() . '/assets/css/icons.css', array(), 'all');
		wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), 'all');
		wp_enqueue_style('slick-min', get_template_directory_uri() . '/assets/css/slick.min.css', array(), 'all');
		wp_enqueue_style('animate-min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), 'all');
		wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'all');
		wp_enqueue_style('style-min', get_template_directory_uri() . '/assets/css/style.css', array(), 'all');
	}
	add_action('wp_head', 'prestware_style_css', 1);
}

if (!function_exists('prestware_script_js')) {
	function prestware_script_js(){
		// wp_enqueue_script('jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js', array(), true);
		wp_enqueue_script('jquery-min-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), true);
		wp_enqueue_script('modernizr-min', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), true);
		wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array(), true);
		wp_enqueue_script('popper-min', get_template_directory_uri() . '/assets/js/popper.min.js', array(), true);
		wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), true);
		wp_enqueue_script('slick-min-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), true);
		wp_enqueue_script('scrollUp-min', get_template_directory_uri() . '/assets/js/scrollUp.min.js', array(), true);
		wp_enqueue_script('counterup-min', get_template_directory_uri() . '/assets/js/counterup.min.js', array(), true);
		wp_enqueue_script('magnific-popup-min', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), true);
		wp_enqueue_script('jquery-sticky-kit', get_template_directory_uri() . '/assets/js/jquery.sticky-kit.js', array(), true);
		wp_enqueue_script('jquery-easypiechart-min', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', array(), true);
		wp_enqueue_script('active-js', get_template_directory_uri() . '/assets/js/active.js', array(), true); 
	}
	add_action('wp_footer', 'prestware_script_js');
}

// if (!function_exists('add_lang_item_to_nav_menu')) {
// 	add_filter('wp_nav_menu_items', 'add_lang_item_to_nav_menu', 10, 2);
// 	function add_lang_item_to_nav_menu($items, $args)
// 	{
// 		if ($args->theme_location == 'header-menu') {
// 			$items .= '<li class="languages">
// 							<select name="languages">
// 								<option value="en">EN</option>
// 								<option value="es">ES</option>
// 								<option value="pt">PT</option>
// 								<option value="fr">FR</option>
// 								<option value="zh">ZH</option>
// 							</select>
// 						</li>';
// 		}
// 		return $items;
// 	}
// }


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

	if (function_exists('acf_add_options_page')) {
		// Theme General Options
		$general_options   = array(
			'page_title' 	=> __('Theme General Options', 'prestware'),
			'menu_title'	=> __('Theme Options', 'prestware'),
			'menu_slug' 	=> 'theme-general-options',
			'capability'	=> 'edit_posts',
			'redirect'	=> true,
			'icon_url'      => 'dashicons-screenoptions',
			'position'      => 2
		);
		acf_add_options_page($general_options);

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Header',
			'menu_title'	=> 'Theme Header',
			'parent_slug'	=> 'theme-general-options',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer',
			'menu_title'	=> 'Theme Footer',
			'parent_slug'	=> 'theme-general-options',
		));
	}
}


// add css file in admin for acf
function acf_admin_theme_style()
{
	wp_enqueue_style('acf-admin', get_template_directory_uri() . '/assets/css/acf-admin.css');
}
add_action('admin_enqueue_scripts', 'acf_admin_theme_style');
add_action('login_enqueue_scripts', 'acf_admin_theme_style');


// testimonial post type register
/**
 * Post Type: Testimonials.
 */
function register_prestware_testimonials() {
	$labels = [
		"name" => __( "Testimonials", "prestware" ),
		"singular_name" => __( "Testimonials", "prestware" ),
	];
	$args = [
		"label" => __( "Testimonials", "prestware" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-quote",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];
	register_post_type( "testimonials", $args );
}
add_action( 'init', 'register_prestware_testimonials' );


/**
 * Taxonomy: Testimonial Category.
 */
// function register_prestware_testimonial_category()
// {
// 	$labels = [
// 		"name" => __("Testimonial Categories", "prestware"),
// 		"singular_name" => __("Category", "prestware"),
// 	];
// 	$args = [
// 		"label" => __("Categories", "prestware"),
// 		"labels" => $labels,
// 		"public" => true,
// 		"publicly_queryable" => true,
// 		"hierarchical" => true,
// 		"show_ui" => true,
// 		"show_in_menu" => true,
// 		"show_in_nav_menus" => true,
// 		"query_var" => true,
// 		"rewrite" => ['slug' => 'testimonial_category', 'with_front' => true,  'hierarchical' => true,],
// 		"show_admin_column" => true,
// 		"show_in_rest" => true,
// 		"show_tagcloud" => false,
// 		"rest_base" => "testimonial_category",
// 		"rest_controller_class" => "WP_REST_Terms_Controller",
// 		"show_in_quick_edit" => true,
// 		"show_in_graphql" => false,
// 	];
// 	register_taxonomy("testimonial_category", ["testimonials"], $args);
// }
// add_action('init', 'register_prestware_testimonial_category');





// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
	global $wp_version;
	if ($wp_version !== '4.7.1') {
		return $data;
	}
	$filetype = wp_check_filetype($filename, $mimes);
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




// Function to get the client IP address
function get_client_ip()
{
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if (isset($_SERVER['HTTP_X_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if (isset($_SERVER['HTTP_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if (isset($_SERVER['REMOTE_ADDR']))
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	else
		$ipaddress = 'UNKNOWN';
	return $ipaddress;
}
add_shortcode('client_ip', 'get_client_ip');


// contact form 7 validation
add_filter('wpcf7_before_send_mail', function ($contact_form, &$abort) {
	$submission = WPCF7_Submission::get_instance();
	$data = $submission->get_posted_data();
	$email = sanitize_text_field($data['email']);

	if (preg_match("/[~`!@#$%^&*()+={}\[\]|\\:;\"'<>,.?\/]/", sanitize_text_field($data['fullname']))) {
		$abort = true;
		$submission->set_response("Invalid Your Name. Please try again.");
	} else if (preg_match("/[~`!@#$%^&*()+={}\[\]|\\:;\"'<>,.?\/]/", sanitize_text_field($data['subject']))) {
		$abort = true;
		$submission->set_response("Invalid Your Subject. Please try again later.");
	} else if (preg_match("/[~`!@#$%^&*()+={}\[\]|\\:;\"'<>,.?\/]/", sanitize_text_field($data['message']))) {
		$abort = true;
		$submission->set_response("There was an error trying to send your message. Please try again later.");
	}
}, 10, 2);


// remove archive prefix "Archives"
add_filter('get_the_archive_title_prefix', '__return_false');



// logo link site url
function custom_login_logo_url()
{
	return get_bloginfo('url');
}
add_filter('login_headerurl', 'custom_login_logo_url');

// add a new logo to the login page
function wptutsplus_login_logo()
{
	$logoImage = wp_get_attachment_url(get_theme_mod('custom_logo'), 'full'); ?>
<style type="text/css">
.login #login h1 a {
    background-image: url('<?php echo $logoImage; ?>');
    background-size: 200px auto;
    height: 50px;
    width: 100%;
    margin-bottom: 10px;
}

.login #nav a,
.login #backtoblog a {
    color: #3f7e44 !important;
}

.login #nav a:hover,
.login #backtoblog a:hover {
    color: #3f7e44 !important;
}

.login #login_error,
.login .message,
.login .success {
    margin-bottom: 10px;
}

.login form {
    margin-top: 10px;
}

.login.wp-core-ui .button.button-primary {
    background: #3f7e44 !important;
    border-color: #3f7e44 !important;
    color: #fff !important;
}

.login.wp-core-ui .button-primary.focus,
.login.wp-core-ui .button-primary.hover,
.login.wp-core-ui .button-primary:focus,
.login.wp-core-ui .button-primary:hover {
    background: #3f3f41 !important;
    border-color: #3f3f41 !important;
}

.login.wp-core-ui .button,
.login.wp-core-ui .button-secondary {
    color: #3f3f41 !important;
}

.login .button.wp-hide-pw:focus {
    border-color: #3f3f41 !important;
    box-shadow: 0 0 0 1px #3f3f41 !important;
}

.login #loginform input[type="checkbox"]:focus,
.login #loginform input[type="password"]:focus,
.login #loginform input[type="radio"]:focus,
.login #loginform input[type="text"]:focus,
.login #loginform select:focus,
.login #loginform textarea:focus {
    border-color: #3f3f41 !important;
    box-shadow: 0 0 0 1px #3f3f41 !important;
    outline: 2px solid transparent;
}

.login #loginform input[type="checkbox"]:checked::before {
    content: "" !important;
    mask-image: url("data:image/svg+xml;utf8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' viewBox%3D'0 0 20 20'%3E%3Cpath d%3D'M14.83 4.89l1.34.94-5.81 8.38H9.02L5.78 9.67l1.34-1.25 2.57 2.4z' fill%3D'%233582c4'%2F%3E%3C%2Fsvg%3E");
    mask-origin: border-box;
    background: #3f3f41;
}
</style>
<?php }
add_action('login_enqueue_scripts', 'wptutsplus_login_logo');




// function mailFun(){
// 	mail('pavan0001@gmail.com', 'subject', 'hello world!');
// }


// add_action( 'transition_post_status', 'send_mails_on_publish', 10, 3 );

// function send_mails_on_publish( $new_status, $old_status, $post )
// {
//     if ( 'publish' !== $new_status or 'publish' === $old_status or 'post' !== get_post_type( $post ) )
//         return;

//     $subscribers = get_users( array ( 'role' => 'administrator' ) );
//     $emails      = array ();

//     foreach ( $subscribers as $subscriber )
//         $emails[] = $subscriber->user_email;

//     $body = sprintf( 'Hey there is a new entry!
//         See <%s>',
//         get_permalink( $post )
//     );
//     wp_mail($emails, 'New entry!', $body);
// }



// add_action( 'phpmailer_init', 'set_phpmailer_details' );
// function set_phpmailer_details( $phpmailer ) {
// 	$email = 'pavan@glasier.in';
// 	$name = 'pv';
//     $phpmailer->isSMTP();
//     $phpmailer->Host = 'smtp.gmail.com';
//     $phpmailer->SMTPAuth = true;
//     $phpmailer->Port = 465;
//     $phpmailer->Username = 'pavanvish001@gmail.com';
//     $phpmailer->Password = 'mdkkffjszuztlzig';
//     $phpmailer->SMTPSecure = 'ssl';
// 	// $phpmailer->AddAddress($email,"Prestware");
// 	// $phpmailer->SetFrom($email,$name);
// 	// $phpmailer->Subject = 'subject';
// 	// // $phpmailer->AddAttachment($_FILES['formFile']['tmp_name'], $_FILES['formFile']['name']);
// 	// $phpmailer->Body = 'message';
// 	// if($phpmailer->Send()){
// 	// 	echo json_encode(array('message' => 'Thanks for contacting us! We will be in touch with you shortly.', 'status' => true));
// 	// 	exit;
// 	// }else{
// 	// 	echo json_encode(array('message' => 'mail sent failed.', 'status' => false));
// 	// 	exit;
// 	// }
// }




// 
// 