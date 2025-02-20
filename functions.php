<?php


use WpTailwindCssThemeBoilerplate\AutoLoader;
use WpTailwindCssThemeBoilerplate\View;


/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */


 /* THUMBNAIL URL - START */

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() { 
    add_image_size( 'img-listing', 300, 300, true ); // (cropped)
    add_image_size( 'img-sidebar', 80, 80, true ); // (cropped)
}


require get_stylesheet_directory() . '/app/AutoLoader.php';
require get_stylesheet_directory() . '/inc/widgets.php'; 
require get_stylesheet_directory() . '/inc/shortcodes.php'; 






$loader = new AutoLoader();
$loader->register();
$loader->addNamespace( 'WpTailwindCssThemeBoilerplate', get_stylesheet_directory() . '/app' );

View::$view_dir = get_stylesheet_directory() . '/templates/views';

require get_stylesheet_directory() . '/includes/scripts-and-styles.php';

 

/* if ( is_product() ) { */

    // Eliminar todos los CSS de WooCommerce de golpe
/*     add_filter( 'woocommerce_enqueue_styles', '__return_false' ); */
/* } */

add_action( 'wp_enqueue_scripts', 'remove_woocommerce_styles', 100 );

function remove_woocommerce_styles() {
    if ( function_exists( 'is_woocommerce' ) ) {
     
        // Desenqueuar los estilos de WooCommerce
        /* wp_dequeue_style( 'woocommerce-layout' ); */
       /*  wp_dequeue_style( 'woocommerce-general' ); */
       /*  wp_dequeue_style( 'woocommerce-smallscreen' );
        wp_dequeue_style( 'woocommerce_frontend_styles' ); 
        wp_dequeue_style( 'woocommerce_fancybox_styles' );
        wp_dequeue_style( 'woocommerce_chosen_styles' );
           wp_dequeue_style( 'woocommerce-inline' );
        wp_dequeue_style( 'woocommerce-variation' );
        wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
      
        wp_dequeue_style( 'woocommerce-add-to-cart' );
    
        wp_dequeue_style( 'woocommerce-grouped' );
        wp_dequeue_style( 'woocommerce-tweaksmile' ); */
    }
}

 


 

// Get the url of thumbnail     
function thumbnail_image_url($size){
    global $post; 
    $image_id = get_post_thumbnail_id($post -> ID);
    $main_image = wp_get_attachment_image_src($image_id, $size);
    //0 = ruta o url, 1 = width, 2 = height, 3 = boolean
    return $main_image[0];
} 
 

function thumbnail_image_url_v2($size = 'full') {
	global $post;
	
	$image_id = get_post_thumbnail_id($post->ID);
	$main_image = wp_get_attachment_image_src($image_id, $size);
	$default_url = get_template_directory_uri()."/build/img/thumbnail-default.jpg";
	// 0 = ruta o URL, 1 = width, 2 = height, 3 = boolean
	return empty($main_image[0]) ? $default_url : $main_image[0];
}
   


// remove any tags  of excerpt 
remove_filter('the_excerpt', 'wpautop'); 
 


/* Remove dashicons - START */
add_action( 'wp_print_styles', 'zgwd_dequeue_styles' );
function zgwd_dequeue_styles() { 
    if ( ! is_user_logged_in() ) {
        wp_dequeue_style( 'dashicons' );
        wp_deregister_style( 'dashicons' );
    }
}
/* Remove dashicons - END */
 



/* Modify comements - START */
add_filter('comment_form_default_fields', 'unset_url_field');
function unset_url_field($fields){
    if(isset($fields['url']))
       unset($fields['url']);
       return $fields;
} 

function ldm_modify_comment_fields( $fields ) {
	 
   $commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array( 
      'author' =>'<p class="comment-form-author"><label for="author">Nombre <span class="required">(*)</span></label> <input id="author" name="author" type="text" value="'.esc_attr( $commenter['comment_author'] ).'" size="30" maxlength="245" ' . $aria_req . ' required="required"></p>',
      'email' =>'<p class="comment-form-email"><label for="email">Email (No será publicado) (*) <span class="required">(*)</span></label> <input id="email" name="email" type="email" value="" ' . esc_attr(  $commenter['comment_author_email'] ) .' size="30" ' . $aria_req . ' maxlength="100" required="required"></p>', 
	); 
	
	return $fields; 
}

add_filter('comment_form_default_fields', 'ldm_modify_comment_fields');
/* Modify comements - END */

 
/* Add assets in page agendasemanal - START */ 

 
function add_theme_scripts() {
    if (is_singular( array( 'agendasemanal' ) )) {

        wp_register_script( 'script_agenda',  'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', [], false, true );
        wp_register_script( 'script_owl', get_template_directory_uri().'/build/js/owlCarousel.js', [], false, true );
      
        wp_register_style( 'style1_agenda', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], false ); 
        wp_register_style( 'style2_agenda', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', [], false ); 
        wp_register_style( 'style3_agenda', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css', [], false );  

        wp_register_style( 'style3_gif', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif', [], false );  
        wp_register_style( 'style_agenda', get_template_directory_uri().'/build/css/font-agenda.css', [], '1.1', 'all' ); 

        wp_enqueue_script( 'script_agenda' );
        wp_enqueue_script( 'script_owl' ); 
        wp_enqueue_style( 'style1_agenda' );
        wp_enqueue_style( 'style2_agenda' );
        wp_enqueue_style( 'style3_agenda' );
        wp_enqueue_style( 'style3_gif' );
        wp_enqueue_style( 'style_agenda' ); 
     }  
} 
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );  
/* Add assets in page agendasemanal - END */
 

 

/* Load more posts - START */

function ldm_load_more_scripts() {
 
        global $wp_query; 
        global $wp;
        $current_slug = add_query_arg( array(), $wp->request ); 
        $total_posts = wp_count_posts( $post_type = $current_slug  ); 
        wp_register_script( 'app', get_template_directory_uri() . '/build/js/app.js');
        wp_enqueue_script( 'app' ); 

        wp_localize_script( 'app', 'ajax_posts', array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'posts' => json_encode( $wp_query->query_vars ),  
            'total_posts' => $total_posts, 
            'noposts' => __('No older posts found', 'ldm'),
        ));


        wp_enqueue_script( 'ajax_posts' );
 
 
}
 
add_action( 'wp_enqueue_scripts', 'ldm_load_more_scripts' );
 
require get_stylesheet_directory() . '/templates/posts/load-more-posts.php';  
/* Load more posts - END */
 
 

/* WOOCOMMERCE */
 

require get_stylesheet_directory() . '/inc/tienda.php';

 

function include_cpt_in_tag_page($query) {
    if ( $query->is_tag() && $query->is_main_query() ) {
        $query->set('post_type', ['post', 'mundo-parejas','viajes']);  
    }
}
add_action('pre_get_posts', 'include_cpt_in_tag_page');
