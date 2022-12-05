<!-- <?php


function cial_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
 }
 add_action('after_setup_theme','cial_theme_support');
 
 
 
 
 function cial_menus(){
 
     $locations = array(
         'primary' => "Desktop Primary ",
         'footer' => "Footer Menu Items"
      );
 
      register_nav_menus($locations);
 }
 add_action('init','cial_menus');





 function load_stylesheet(){

	$version = wp_get_theme()->get('Version');

	wp_register_style('style',get_template_directory_uri(). "./style.css", array(), true,'all');
	wp_enqueue_style('style');
   

	wp_register_style('icon',get_template_directory_uri(). "/assets/images/fevicon.png", array(), true,'all');
	wp_enqueue_style('icon');

	wp_register_style('header-style',get_template_directory_uri(). "/assets/css/style.css", array(), true,'all');
	wp_enqueue_style('header-style');

	wp_register_style('bootstrapmin',get_template_directory_uri(). "/assets/css/bootstrap.min.css", array(), true,'all');
	wp_enqueue_style('bootstrapmin');


    wp_register_style('responsive',get_template_directory_uri(). "/assets/css/responsive.css", array(), true,'all');
	wp_enqueue_style('responsive');


    wp_register_style('jquery',get_template_directory_uri(). "/assets/css/jquery.mCustomScrollbar.min.css", array(), true,'all');
	wp_enqueue_style('jquery');

	wp_register_style('fontawesome',"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" , array(), false,'all');
	wp_enqueue_style('fontawesome');


    wp_register_style('carousel',get_template_directory_uri(). "/assets/css/owl.carousel.min.css", array(), true,'all');
	wp_enqueue_style('carousel');

    wp_register_style('carousel',get_template_directory_uri(). "/assets/css/owl.theme.default.min.css", array(), true,'all');
	wp_enqueue_style('carousel');

    wp_register_style('screen',"https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" , array(), false,'all');
	wp_enqueue_style('screen');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');


function cial_register_scripts() {

	
	
	wp_register_script('my_amazing_script', get_template_directory_uri() . '/assets/js/jquery.min.jss', array('jquery'),'1.1', true);
    wp_enqueue_script('my_amazing_script');



	wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('popper');



    wp_register_script('bootstrap/assets/assets/js/jquery-3.0.0.min.js', get_template_directory_uri() . '/assets/assets/js/bootstrap.bundle.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('bootstrap/assets/assets/js/jquery-3.0.0.min.js');

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jquery');


    wp_register_script('plugin', get_template_directory_uri() . '/assets/js/plugin.js', array('jquery'),'1.1', true);
    wp_enqueue_script('plugin');


    // sidebar

    wp_register_script('scrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('scrollbar');


    wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),'1.1', true);
    wp_enqueue_script('custom');

    //  javascript

    wp_enqueue_script('cial-fancy','https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js',array(), '4.4.1',false);
    
    wp_register_script('custom', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'),'1.1', true);
    wp_enqueue_script('custom');


}
add_action('wp_enqueue_scripts', 'cial_register_scripts');





?> -->