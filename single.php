<?php 
 get_header();
$the_current_post_type=null;
if ( get_post_type( get_the_ID() ) == 'mundo-parejas' ||  get_post_type( get_the_ID() ) == 'bodas' || get_post_type( get_the_ID() ) == 'viajes' || get_post_type( get_the_ID() ) == 'novedades' || get_post_type( get_the_ID() ) == 'promociones' || get_post_type( get_the_ID() ) == 'agenda-semanal' ) {
    $the_current_post_type  =  get_post_type( get_the_ID() );
} 
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
            <section class="mt-4" >
                <?php  comments_template(); ?>  
            </section>
            <section class="mt-5">
            <h2 class="text-2xl" >También te puede interesar:</h2>
            <div class="interest card-thumbnail grid grid-cols-2 sm:grid-cols-4 gap-4 mt-3">
                <?php
                    global $post;
                    
                    //query subpages
                    $args = array(
                    'post_type' => $the_current_post_type,
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
                    wp_reset_postdata();
                ?>
            </div>
            </section>	
            
        </main> 
        <aside class="mx-auto w-full max-w-[320px] single-sidebar-wrap ">
            <div  class="w-full mb-4 " > 
                <!-- Post -  Sidebar  -->
                <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-2072313038095874"
                data-ad-slot="9092330038"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins> 
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>  
            </div> 
            <div class="mb-8"> 
                <h2  class="text-[24px]" >Los más recientes</h2>
                <div class="new card-thumbnail " >
                     
                <?php
                        global $post,$categoria; 
                        //query subpages
                        $args = array(
                        'post_type' => $the_current_post_type,
                        'orderby' => 'date',
                        'order' => 'desc',
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 3
                        );

                        $listing = new WP_query($args);

                        // create output
                        if ($listing->have_posts()) :
                            while ($listing->have_posts()) : $listing->the_post();
                              //  $arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'img-sidebar');
                                $arr_image = thumbnail_image_url('img-sidebar');  
                                if ( $arr_image != '' ) :
                                    $imagethumb = $arr_image;
                                else :
                                    $imagethumb = get_template_directory_uri()."/build/img/thumb-default.jpg";
                                endif;
                                
                                $terms = wp_get_post_terms( $listing->post->ID, array( 'catarticulos' ) ); 
                                ?>  

                                    <a   href="<?php echo get_permalink()?>">
                                        <figure ><img src="<?=$imagethumb?>" alt="<?=get_the_title()?>"/></figure>
                                        <section>
                                            <?php if (isset($terms[0]->name)):?>
                                             <p><?=$terms[0]->name?></p>
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
            <div  class="w-full mb-4 mt-4" > 
              <!-- Post - Sidebar 2 -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-2072313038095874"
                    data-ad-slot="6355891021"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div> 
          </aside> 
      </div>
  </div>
</div> 
<?php get_footer(); ?>
