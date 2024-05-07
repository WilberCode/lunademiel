<?php 
function more_post_ajax(){ 
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
     $slug_name = (isset($_POST['current_slug'])) ? $_POST['current_slug'] : 'post';

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => $slug_name,
		'orderby' => 'date',
		'order' => 'desc',
        'posts_per_page' => $ppp,
        'paged'    => $page,
    );

    $loop = new WP_Query($args);

    $out = '';

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
		$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing');
		if ( $arr_image[0] != '' ) :
				$imagethumb = $arr_image[0];
		else :
				$imagethumb = get_template_directory_uri()."/build/img/thumb-default.jpg";
		endif; 
        $out .= ' 
			<article class="post-'.get_the_ID().'" >
				<a href="'.get_permalink().'" class="hover:underline"   >
					<img src="'.$imagethumb.'" alt="'.get_the_title().'"/> 
					<h2  class=" text-[17px] sm:text-[18px]" >'.get_the_title().'</h2>
				</a>
			</article> ';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

?>
