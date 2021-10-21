<?php
/*
Template Name: Home
Template Post Type: post, page, event
*/ 
get_header();?>
  <?php
  $settings = pods('configuracindelsitio');
  $foto_agenda_semanal = $settings->field('foto_agenda_semanal');
  $foto_promociones = $settings->field('foto_promociones');
  $foto_viajes = $settings->field('foto_viajes');
  $foto_entrevistas = $settings->field('foto_entrevistas');
  $foto_articulos = $settings->field('foto_articulos');
  ?>
<?php global $wp;  ?> 
<section>
    <main   class="max-w-container" >
        <div  class="block sm:flex space-y-4 sm:space-y-0 sm:space-x-6 " >
            <div  class="   flex-1 space-y-3" > 
                <?php $the_query = new WP_Query( 'page_id=228' ); ?> 
                <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>   
                    <div class="home-box" style="background:url(<?php echo thumbnail_image_url('full')?>)">
                        <dl class="home-box-content !py-3 ">
                            <dt>
                               <!--  <a href="<?php// the_permalink(); ?>">
                                    <h2><?php/// the_title(); ?></h2> 
                                </a> -->
                                <a href="<?php echo home_url( $wp->request );?>/mundo-parejas/">
                                    <!-- <h2>AGENDA ROMÁNTICA</h2>  -->
                                    <h2>MUNDO PAREJAS</h2> 
                                </a>
                            </dt>  
                            <dd  class="text-sm mt-2 " >
                            <?php
                                global $post;
                                
                                //query subpages
                                $args = array(
                                'post_type' => 'mundo-parejas',
                                'orderby' => 'date',
                                'orderby' => 'desc',
                                'posts_per_page' => 4
                                );

                                $listing = new WP_query($args);
                                $mundo_count = 1;
                                // create output
                                if ($listing->have_posts()) :
                                while ($listing->have_posts()) : $listing->the_post();
                                    if(	$mundo_count > 1){echo " / ";}else{echo "";}
                                    echo '<a href="' . get_permalink() . '">'.get_the_title().'</a>';
                                    $mundo_count++;
                                endwhile;
                                endif;

                                // reset the query
                                wp_reset_postdata();
                                ?>
                            </dd>
                        </dl>
                      
                    </div>
                 <?php endwhile;
                 wp_reset_postdata();
                 ?> 
                <?php $the_query = new WP_Query( 'page_id=224' ); ?> 
                <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>   
                    <div class="home-box" style="background:url(<?php echo thumbnail_image_url('full')?>)">
                        <dl class="home-box-content ">
                            <dt>
                                <a href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2> 
                                </a>
                            </dt> 
                            <dd class="text-sm mt-2"> 
                                <?php 
                
                                    $promolist = get_terms('promocion', array('hide_empty' => false) );
                                    $numberpromo = 1;
                                    foreach ($promolist as $promo) {
                                        if(	$numberpromo > 1){echo "/";}else{echo "";}  ?>
                                       <a  href="<?=home_url();?>/<?php echo $promo->taxonomy; ?>/<?php echo $promo->slug; ?>"> 
                                            <?php echo $promo->name; ?>  
                                        </a>
                                    <?php
                                    $numberpromo++;
                                    } 
                                    ?>
                            </dd>
                        </dl>
                    </div>
                 <?php endwhile;
                 wp_reset_postdata();
                 ?>  
                
            </div>
            <div  class=" flex-grow  max-w-[320px] mx-auto  ">
                <?php dynamic_sidebar('home-sidebar') ?>   
            </div>
        </div>
        <section  class="max-w-[870px] mx-auto mt-10" >
            <div class="grid  grid-cols-1 sm:grid-cols-3 gap-6 " >
                <?php echo do_shortcode('[ldm_post category="mundo-parejas"]'); ?>                    
                <?php echo do_shortcode('[ldm_post category="bodas" ]'); ?>                    
                <?php echo do_shortcode('[ldm_post category="viajes" ]'); ?>        
            </div>
            
            <?php
					global $post; 
					//query subpages
					$args_news = array(
					'post_type' => 'novedades',
					'orderby' => 'date',
					'orderby' => 'desc',
					'posts_per_page' => 3
					); 
					$news = new WP_query($args_news);  
            ?>
            <h3  class="text-[24px] text-center uppercase mt-8" ><?=$news->query_vars['post_type']?> </h3>
            <div class="grid  grid-cols-1 sm:grid-cols-3 gap-6 mt-5 " >
                    <?php 
                    /* Listing news Post */
					if ($news->have_posts()) :
						while ($news->have_posts()) : $news->the_post();
							$arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing');
							if ( $arr_image[0] != '' ) :
								 $imagethumb = $arr_image[0];
							else :
								 $imagethumb = get_template_directory_uri()."/build/img/thumb-default.jpg";
							endif;?>
                            
							 <article class="text-center"> 
						        <a class="hover:underline" href="<?=get_permalink()?>" ><img class="inline-flex" src="<?=$imagethumb?>" alt="<?=get_the_title()?>"/> <h2 class="mt-2 sm:text-[20px] leading-5" ><?=get_the_title()?></h2> </a>
							 </article> 
					<?php
                            endwhile;
					endif;

					// reset the query
					wp_reset_postdata();
				  ?> 
            </div>   
        </section>
        <?php 	 ?>
    </main>
</section>
  
 <?php  
get_footer();
?>

