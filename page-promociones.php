<?php 
get_header();
 
?>  
 
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


				<?php 
					$promolist = get_terms( 'promocion', array('hide_empty' => false,'orderby'=>'count','order'=>'desc') );
				?>
				<nav class="border border-gray-200">
				  <div class="block lg:flex">
				 	<div  class="tab-top flex items-center justify-between py-2 px-4 lg:hidden" id="tab-top" >
						 <h3  class="sm:text-xl" >Categorias de  Promociones</h3>
						<div class="nav-toggle-wrap tab-toggle-wrap ">
							<button  id="tab-toggle" class="nav-toggle focus:outline-none border-none">  
								<span ></span> 
								<span ></span> 
								<span ></span> 
								<span ></span> 
								<span ></span> 
								<span ></span>  
							</button>
						</div>
					 </div> 
					<div class="px-0 lg:px-4 tab-wrap" id="tab-wrap">
						<ul class="tab" id="tab">
							<?php foreach ($promolist as $promo) {	?>
							<li>
								<a  class="<?php if(isset($_GET["slug_name"]) == $promo->slug ){ echo "active"; }?>"  href="<?php echo get_home_url()?>/<?php echo $promo->taxonomy; ?>/<?php echo $promo->slug; ?>/">
									<?php echo $promo->name; ?>
									<span><?php echo $promo->count; ?></span>
								</a>
							</li>
							<?php } ?>				      
				     	 </ul>
				    </div>  
				  </div> 
				</nav>  
				<div class="flex justify-center" >  
					<div id="ajax-posts" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 sm:gap-6 card-thumbnail text-center mt-5 ">
					<?php  
							$postsPerPage = 16;
							//query subpages  
							$args = array(
								'post_type' =>'promociones',
								'orderby' => 'date',
								'order' => 'desc',
								'posts_per_page' => $postsPerPage, 
								//'promocion' => 'viajes' 
							);
							
							$listing = new WP_query($args);
							
							// create output
							if ($listing->have_posts()) :
								while ($listing->have_posts()) : $listing->the_post(); 
	
									$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing');
									if ( $arr_image[0] != '' ) :
										$imagethumb = $arr_image[0];
									else :
										$imagethumb = get_template_directory_uri()."/_/images/thumb-default.jpg";
									endif;?>
										<aticle class="">
											<a href="<?=get_permalink()?>" class="hover:underline hover:scale-105  block transition-all ease-in-out"   >
												<img src="<?=$imagethumb?>" alt="<?=get_the_title()?>" /> 
												<h2  class=" text-[17px] sm:text-[18px] mt-1" ><?=get_the_title()?></h2>
											</a>
										</aticle>
							<?php	endwhile;
							endif; 
							// reset the query
							wp_reset_postdata(); 
						
					?> 
					</div>
				</div>
			</div>  
			<div class="text-center">
				<button id="more_posts" class="btn">Ver todos los artículos</button> 
			</div>  
		</div>
	</main>		
	<?php endwhile; endif; ?>
  
<?php
get_footer();
