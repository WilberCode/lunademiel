 <?php   
get_header(); ?>
	<main class="main">
		<div class="container">
			<div class="mb-8"> 
				<div class="mt-11 mb-5"> 
					<h1  class=" text-[35px] sm:text-[40px] text-primary-500 leading-8 "><?=single_tag_title('', false)?></h1>  
					<p>Leer más publicaciones sobre <strong><?=single_tag_title('', false)?></strong></p>
				</div>
				<div id="ajax-posts" class=" card-thumbnail  grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 sm:gap-6 text-center ">
				<?php  
					$post_type_exist = false;
					// create output
					if (have_posts()) :
						$post_type_exist = true;
						while (have_posts()) : the_post(); ?>
							    <article  class="post-<?=the_ID(); ?>" >
                                    <a href="<?=get_permalink()?>" class="hover:underline hover:scale-105  block transition-all ease-in-out "   > 
										<img  src="<?=thumbnail_image_url('img-listing')?>" alt="<?=get_the_title()?>" class="inline-flex w-full">   

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
				<?php /* if($post_type_exist){  */?> 
					<!-- <div class="text-center">
						<button id="more_posts" class="btn">Ver más artículos</button> 
					</div> --> 
				<?php/*  } */ ?>
			 
		</div>
	</main>		
	 
<?php
get_footer();
