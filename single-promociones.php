<?php 
 get_header();
 
 ?> 
<div class="single-content" >
  <div class="container">
    <div  class="md:flex justify-between space-x-8 pt-10 "> 
        <main class="single-main  mx-auto w-full sm:mx-0 max-w-[730px] "> 
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php echo get_the_title(); ?></h1>
            <?php endwhile; endif; ?> 
            <div class="entry">
                <?php the_content(); ?>
            </div>  
            <!-- <section class="mt-8">
                <h2 class="text-2xl" >También te puede interesar:</h2>
                <div class="interest card-thumbnail grid grid-cols-2 sm:grid-cols-4 gap-4 mt-3">
                    <?php
                       /*  global $post;
                        
                        //query subpages
                        $args = array(
                        'post_type' =>'promociones',
                        'orderby' => 'comment_count',
                        'order' => 'desc',
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 4
                        );

                        $listing = new WP_query($args);

                        // create output
                        if ($listing->have_posts()) :
                            while ($listing->have_posts()) : $listing->the_post();
                                $arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-listing');
                                if ( $arr_image[0] != '' ) :
                                    $imagethumb = $arr_image[0];
                                else :
                                    $imagethumb = get_template_directory_uri()."/build/img/thumb-default.jpg";
                                endif;?>
                                <a  href="<?=get_permalink();?>">
                                    <img src="<?=$imagethumb ?>"  alt="<?=get_the_title();?>"/> 
                                    <h3><?=get_the_title();?></h3>
                                </a>
                            <?php endwhile;
                        endif;

                        // reset the query
                        wp_reset_postdata(); */
                    ?>
                </div>
            </section>	 -->
            <section class="mt-8" >
                <?php  comments_template(); ?>  
            </section>
        </main> 
        <sidebar class="mx-auto w-full max-w-[320px] single-sidebar-wrap ">
            <div class="mb-8"> 
                <h2  class="text-[24px]" >Los más recientes</h2>
                <div class="new card-thumbnail " >
                <?php
                        global $post,$categoria; 
                        //query subpages
                        $args = array(
                        'post_type' => 'promociones',
                        'orderby' => 'date',
                        'order' => 'desc',
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 3
                        );

                        $listing = new WP_query($args);

                        // create output
                        if ($listing->have_posts()) :
                            while ($listing->have_posts()) : $listing->the_post();
                                $arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-sidebar');
                                if ( $arr_image[0] != '' ) :
                                    $imagethumb = $arr_image[0];
                                else :
                                    $imagethumb = get_template_directory_uri()."/build/img/thumb-default.jpg";
                                endif;
                                $terms = wp_get_post_terms( $listing->post->ID, array( 'promocion' ) ); 
							
							    $categoria = $terms[0]->name;
                                ?> 
                                    <a   href="<?=get_permalink()?>">
                                        <figure ><img src="<?=$imagethumb?>" alt="<?=get_the_title()?>"/></figure>
                                        <section>
                                            <?php if ($categoria):?>
                                             <p><?=$categoria?></p>
                                            <?php endif; ?> 
                                            <h3>
                                                <?=get_the_title()?>
                                            </h3>
                                        </section>
                                    </a> 
                          <?php  endwhile;
                        endif;

                        // reset the query
                        wp_reset_postdata();
                    ?>
                    </div>
            </div>   

            <?php   dynamic_sidebar("single-sidebar");?>
        </sidebar> 
      </div>
  </div>
</div> 
<?php get_footer(); ?>
