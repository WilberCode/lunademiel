<?php 
get_header(); 
?> 
 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<main class="main">
		<div class="container">
			<div class="mb-8"> 
				<div class="mt-11 mb-8">
					<?php edit_post_link(__('Editar esta entrada','html5reset'), '<span  class="page-edit" >', '</span>'); ?>
					<h1  class=" text-[35px] maxsm:text-center sm:text-[40px] text-primary-500 leading-8 absolute text-transparent z-[-1] "><?php the_title(); ?></h1>
					<div class=" text-[18px] sm:text-[20px]  ">	
						<?php the_content(); ?>
					</div>
				</div>
				<div  class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4  gap-4 sm:gap-[24px]  ">
				    <?php 
					$terms = get_terms( array('taxonomy' => 'rubros','hide_empty' => false,'orderby'=>'name'));  ?>
                    <?php foreach($terms as $term) {
						$img_cat = get_metadata('term', $term->term_id, 'imagen', true );?> 
                        <a class="hover:underline" href="<?=home_url();?>/rubros/<?=$term->slug?>/">
                            <img class="inline-flex" src="<?=$img_cat['guid']; ?>" alt="<?=$term->name;?>" />
                            <h2  class=" text-[18px] sm:text-[21.91px] text-left px-[5px] mt-[10px] w-full max-w-[125px]" ><?=$term->name; ?></h2>
                        </a> 
					<?php }?>
                </div>
			</div>  
			 
		</div>
	</main>		
	<?php endwhile; endif; ?>


<?php
get_footer();
