<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); 
 
global $wp;
$current_slug = add_query_arg( array(), $wp->request );  

 ?> 
<main class="main"> 
	<div class="container">
		<div class="mb-8"> 
			<div class="mt-11 mb-5"> 
				<h1  class=" text-[35px] sm:text-[40px] text-primary-500 leading-8 first-letter:uppercase "><?php echo single_cat_title(''); ?></h1>
				<div class=" text-[18px] sm:text-[20px]  ">	
					<?php echo category_description(); ?>
				</div>
			</div> 
			<?php if ( get_post_type( get_the_ID()  == 'promociones') || get_post_type( get_the_ID() ) == 'agendasemanal'){?>
				<nav class="border border-gray-200">
					<div class="block lg:flex">
					<div  class="tab-top flex items-center justify-between py-2 px-4 lg:hidden" id="tab-top" >
							<h3  class="sm:text-xl" >Categorias</h3>
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
						<ul class="tab flex-wrap " id="tab">
							<?php 
							if ( get_post_type( get_the_ID() ) == 'promociones') {
							$promolist = get_terms( 'promocion', array('orderby'=>'count','order'=>'desc') );?>
							<?php foreach ($promolist as $promo) {	?>
								<li>
									<a  class="<?php if($current_slug == 'promocion/'.$promo->slug ){ echo "active"; }?>"   href="<?=home_url(); ?>/<?php echo $promo->taxonomy; ?>/<?php echo $promo->slug; ?>/"><?php echo $promo->name; ?><span><?php echo $promo->count; ?></span>
									</a>
								</li>
								<?php }
							} ?>
							<?php 
							if ( get_post_type( get_the_ID() ) == 'agendasemanal') {
							$agendalist = get_terms( 'agenda', array('orderby'=>'count','order'=>'desc') );?>
							<?php foreach ($agendalist as $agenda) {?>
								<li>
									<a  class="<?php if($current_slug == 'agenda/'.$agenda->slug ){ echo "active"; }?>"    href="<?=home_url(); ?>/<?php echo $agenda->taxonomy; ?>/<?php echo $agenda->slug; ?>/"><?php echo $agenda->name; ?><span><?php echo $agenda->count; ?></span>
									</a>
								</li>
							<?php }} ?>	 
														
							</ul> 
					</div>  
					</div> 
				</nav>  
			<?php }?> 		
			<div>  
				<?php 

				global $query_string;
				query_posts( $query_string . '&post_status=publish&posts_per_page=-1' ); 


				// create output
				if (have_posts()) :?>
					<div id="ajax-posts" class=" grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 sm:gap-6  card-thumbnail  text-center mt-5 ">
					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
					<?php while (have_posts()) : the_post(); 

						$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing');
						if ( $arr_image[0] != '' ) :
							$imagethumb = $arr_image[0];
						else :
							$imagethumb = get_template_directory_uri()."/build/img/thumb-default.jpg";
						endif;?>
							<aticle class="">
								<a href="<?=get_permalink()?>" class="hover:underline"   >
									<img src="<?=$imagethumb?>" alt="<?=get_the_title()?>" class=" w-full  inline-flex "/> 
									<h2  class=" text-[17px] sm:text-[18px] mt-[6px]" ><?=get_the_title()?></h2>
								</a>
							</aticle>
					<?php	endwhile;?>
				</div>
				<?php else : ?>
					<div>
						Por el momento no tenemos promociones. Si deseas contactarnos para enviarnos promociones o deseas anunciar con nosotros puedes <a href="/contacto/" id="contacto">escribirnos aquí</a>.
					</div>
				<?php endif; 
				// reset the query
				wp_reset_postdata();  
				
				?> 
			</div>  
		</div> 
	</div> 
</main>			

<?php get_footer(); ?>

