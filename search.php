<?php get_header();?>
<div class="msearch">
    <div class="bg-gray-200 py-10">
        <div class="container">
            <div  class="max-w-lg m-auto" ><?php get_search_form(true);?></div>
        </div>
    </div>
	<div class="container"> 
		<div class="max-w-lg m-auto ">
        <h1 class="mt-8 mb-4 text-xl1  ">Los resultados para la busqueda
			<b>
				<?php echo  get_search_query();?>
			</b> son:
		</h1>
		<div class="msearch-posts   ">
			<?php if(have_posts()):
					while(have_posts()):  the_post(); ?>  
						<a href="<?php the_permalink();?>" class=" flex leading-5 sm:leading-6 mb-4 ring-1 ring-body hover:underline hover:text-primary-500   ">
							<?php if(thumbnail_image_url('full')){  ?> 
                            <figure>
                                <img  class="block object-cover object-top  h-[7rem] sm:h-[9rem] w-[7rem] sm:w-[9rem] p-1 "  src="<?php echo thumbnail_image_url('full'); ?>" alt="<?=the_title();?>">
							</figure>
							<div class=" flex-1  flex justify-start items-center py-4  px-5 sm:px-6 "> 
								<h3  class="   text-lg sm:text-xl  ">  
								    <?php the_title(); ?> 
								</h3>
							</div> 
							<?php }else{	?>
								<h3 href="<?php the_permalink(); ?>" class=" flex justify-center items-center  text-lg sm:text-xl  py-5 px-8  col-span-3  ">  
								 <?php the_title(); ?> 
								</h3>
							<?php }?>
						</a>  
			<?php endwhile;  ?>
			<div class="search-navigation mt-6 mb-4 text-base ">
				<?php echo paginate_links();?>
			</div>
			<?php else:?>
			<div class="msearch-not mb-6">
				<h2 class="m-0 text-2xl">No se han encontrado resultados.</h2>
				<p class="text-sm m-0 text-secondary-400 ">👉 Prueba con otras palabras clave.</p>
			</div>
			<?php endif;
                        rewind_posts();  
                        ?> 
		</div>
        </div>
	</div>
</div>
<?php get_footer();