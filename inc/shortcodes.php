<?php 
/* Shortcode - List post in frontpage */ 
function get_post_infront($category=''){ 
	global $post; 
	$post_result = '';
	$post_title = '';
 
	$post_image = '';
	$post_link = '';
	$post_category_image = '';
/* 	$post_totals = 4; */
	$args = array(
	'post_type' =>  $category,
	'orderby' => 'date',
	'orderby' => 'desc',
	'posts_per_page' => 5
	);

	$listing = new WP_query($args);
	
	$countt = 0;
	
	while ($listing->have_posts()) : $listing->the_post();
		if($countt == 0){
			$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing'); 
			if ( $arr_image[0] != '' ) :
				$imagethumb = $arr_image[0];
		   else :
				$imagethumb = get_template_directory_uri()."/build/img/thumb-default.jpg";
		   endif;
			$post_image .= '<img class="inline-flex group-hover:scale-105 transition-all ease-in-out group-hover:shadow-lg " src="'.$imagethumb.'" alt="'.get_the_title().'"/>'; 

			$postType = get_post_type_object(get_post_type());
			if ($postType) {  
				$post_title .=  esc_html($postType->labels->singular_name);
				$post_link .= esc_html($postType->name); 
			}
		}
		$countt ++;
	endwhile;  

 	$post_category_image .= '<a class="uppercase  block hover:underline group " href="'.get_home_url().'/'.$post_link.'" >'. $post_image.'<h2  class="mt-4 sm:text-[20px]" >'.$post_title .'</h2> </a> ';
 
	$posts_link =  ''; 

	$listing2 = new WP_query($args);

	// create output
	if ($listing2->have_posts()) :
		while ($listing2->have_posts()) : $listing2->the_post();
		$posts_link .= '<li><a class="hover:underline" href="'.get_permalink().'">'.get_the_title().'</a></li>';
		endwhile;
	endif;

	// reset the query
	wp_reset_postdata(); 
	return $post_result  = '<article class="text-center" >'.$post_category_image.'<ul  class="sm:text-[17px] mt-3 space-y-3 leading-5 " >'.$posts_link.'</ul></article>';
	
    

}

/* Shortcode */

add_shortcode ('ldm_post','get_post_infront'); 

function showYear($text=''){
 
	echo '<p>'.$text['text'].' - '.date("Y").' </p>';
} 

add_shortcode ('year','showYear');