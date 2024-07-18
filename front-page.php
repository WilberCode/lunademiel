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
    <main   class="max-w-container relative" >
        <div class="w-[140px] hidden xl1:block   top-0  absolute left-0 h-auto translate-x-[-140px] " > 
        <!-- Home - Sidebar Left -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:140px;height:600px"
                data-ad-client="ca-pub-2072313038095874"
                data-ad-slot="5262301206"></ins> 
                <script>
                      (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
        </div>  
        <div class="w-full  block xl1:hidden mb-4 h-auto  " > 
        <!-- Home - Sidebar Left -->
            <ins class="adsbygoogle" 
                style="display:inline-block;width:100%;height:auto"
                data-ad-client="ca-pub-2072313038095874"
                data-ad-slot="7278848626"
                data-ad-format="auto"
                 data-full-width-responsive="true"
                ></ins>
            <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
        </div>
        <div  class="block sm:flex space-y-4 sm:space-y-0 sm:space-x-6 " > 
            <div  class="flex-1 space-y-3" > 
                <?php $the_query = new WP_Query( 'page_id=228' ); ?> 
                <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>   
                    <div class=" !h-[280px] md:!h-[250px] home-box" style="background:url(<?php echo thumbnail_image_url('full')?>)">
                        <dl class="home-box-content !py-3 ">
                            <dt> 
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
                 <div>
                    <?php dynamic_sidebar('home-banner-tienda') ?>     
                 </div>
                <!-- <?php // $the_query = new WP_Query( 'page_id=224' ); ?> 
                <?php // while ($the_query -> have_posts()) : $the_query -> the_post();  ?>   
                    <div class="home-box" style="background:url(<?php //echo thumbnail_image_url('full')?>)">
                        <dl class="home-box-content ">
                            <dt>
                                <a href="<?php // the_permalink(); ?>">
                                    <h2><?php // the_title(); ?></h2> 
                                </a>
                            </dt> 
                            <dd class="text-sm mt-2"> 
                                <?php 
                /* 
                                    $promolist = get_terms('promocion', array('hide_empty' => false) );
                                    $numberpromo = 1;
                                    foreach ($promolist as $promo) {
                                        if(	$numberpromo > 1){echo "/";}else{echo "";}  ?>
                                       <a  href="<?=home_url();?>/<?php echo $promo->taxonomy; ?>/<?php echo $promo->slug; ?>"> 
                                            <?php echo $promo->name; ?>  
                                        </a>
                                    <?php
                                    $numberpromo++;
                                    }  */
                                    ?>
                            </dd>
                        </dl>
                    </div>
                 <?php /*  endwhile;
                 wp_reset_postdata(); */
                 ?>   -->
                
            </div>
            <div  class=" flex-grow  max-w-[320px] mx-auto  ">
                <?php dynamic_sidebar('home-sidebar') ?>   
            </div> 
        </div>
       
        <div class="w-[140px]  hidden xl1:block top-0  absolute right-0 h-auto translate-x-[140px] " > 
        <!-- Home - Sidebar Right -->
            <ins class="adsbygoogle" 
                style="display:inline-block;width:140px;height:600px"
                data-ad-client="ca-pub-2072313038095874"
                data-ad-slot="1746007268"></ins>
        </div>
        <div class="w-full  block xl1:hidden my-4 h-auto  " > 
        <!-- Home - Sidebar Right -->
            <ins class="adsbygoogle" 
                style="display:block"
                data-ad-client="ca-pub-2072313038095874"
                data-ad-slot="2403965899"
                data-ad-format="auto"
                data-full-width-responsive="true"
                ></ins>
                <script>
                      (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
        </div>
        <section  class="max-w-[953px] mx-auto mt-10" >
            <div class="grid  grid-cols-1 sm:grid-cols-3 gap-6 " >
                <?php echo do_shortcode('[ldm_post category="mundo-parejas"]'); ?>                    
                <?php echo do_shortcode('[ldm_post category="bodas" ]'); ?>                    
                <?php echo do_shortcode('[ldm_post category="viajes" ]'); ?>        
            </div>
            <div class="mt-10 w-full "> 
                <!-- Home - Full - Footer -->
               <!--  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2072313038095874"
     crossorigin="anonymous"></script>
                <ins class="adsbygoogle"
                    style="display:block; width:100%; "
                    data-ad-client="ca-pub-2072313038095874"
                    data-ad-slot="3701807524"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script> -->
              <div  class="grid grid-cols-1 xl1:grid-cols-2 gap-6 content-center ">
                    <div class="flex justify-center" > 
                        <!-- Home - as post 1 -->
                        <ins class="adsbygoogle"
                            style="display:inline-block;width:450px;heigh:272px"
                            data-ad-client="ca-pub-2072313038095874"
                            data-ad-slot="5629535661"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <div class="flex justify-center" > 
                        <!-- Home - as post 2 -->
                        <ins class="adsbygoogle"
                            style="display:inline-block;width:450px;height:272px"
                            data-ad-client="ca-pub-2072313038095874"
                            data-ad-slot="6256221624"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div> 
                   <!--  <div class=" hidden xl1:flex  " >  -->
                       <!-- Home - as post 3 -->
                     <!--    <ins class="adsbygoogle"
                            style="display:inline-block;width:272px;height:272px"  
                            data-ad-client="ca-pub-2072313038095874"
                            data-ad-slot="8852850407"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div> -->
              </div>
            </div> 
        </section> 
    </main>
</section>
  
 <?php  
get_footer();
?>

