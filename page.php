<?php 
get_header();

global $wp;
$current_slug = add_query_arg( array(), $wp->request ); 
  
 /* 
$slug_name = $current_slug; */
?> 



<!-- <pre>
	<code>
	<?php //echo $wp->query_vars ; ?>
	</code>
</pre>
 -->
 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<main class="main">
		<div class="container">
			<div class="mb-8"> 
				<div class="mt-11 mb-5">
					<?php edit_post_link(__('Editar esta entrada','html5reset'), '<span  class="page-edit" >', '</span>'); ?>
					<h1  class=" text-[35px] sm:text-[40px] text-primary-500 leading-8 "><?php the_title(); ?></h1>
					<div class=" text-[18px] sm:text-[20px]  ">	
						<?php the_content(); ?>
					</div>
				</div>
				<div id="ajax-posts" class=" card-thumbnail  grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 sm:gap-6 text-center ">
				<?php 
					$postsPerPage = 16;
					//query subpages
					$args = array(
					'post_type' =>$current_slug ,
					'orderby' => 'date',
					'order' => 'desc',
					'posts_per_page' => $postsPerPage,
					);
					
					$listing = new WP_query($args);
					$post_type_exist = false;
					// create output
					if ($listing->have_posts()) :
						$post_type_exist = true;
						while ($listing->have_posts()) : $listing->the_post();
							$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing');
							if ( $arr_image[0] != '' ) :
								 $imagethumb = $arr_image[0];
							else :
								 $imagethumb = get_template_directory_uri()."/build/img/thumb-default.jpg";
							endif;?>
							    <article>
                                    <a href="<?=get_permalink()?>" class="hover:underline"   >
                                        <img src="<?=$imagethumb?>" alt="<?=get_the_title()?>" class="inline-flex w-full "/> 
                                        <h2  class=" text-[17px] sm:text-[18px]" ><?=get_the_title()?></h2>
                                    </a>
							    </article>
					<?php	endwhile;
					endif; 
					// reset the query
					wp_reset_postdata();
				  ?>
				</div>
			</div> 
				<?php if($post_type_exist){ ?> 
					<div class="text-center">
						<button id="more_posts" class="btn">Ver todos los artículos</button> 
					</div> 
				<?php } ?>
			 
		</div>
	</main>		
	<?php endwhile; endif; ?>


<?php
get_footer();
