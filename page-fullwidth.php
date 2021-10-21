<?php
  
/*
Template Name: Página completa
Template Post Type: post, page, event
*/ 
 get_header(); ?> 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<main class="pt-10" >
		<div class="container">  
            <?php edit_post_link(__('Editar esta entrada','html5reset'), '<span  class="page-edit" >', '</span>'); ?>
  			<?php the_content(); ?> 
		</div>
	</main>		
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
