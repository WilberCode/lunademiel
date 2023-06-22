<?php 
get_header(); 
global $wp;
$current_slug = add_query_arg( array(), $wp->request );  
$imagethumb=null;
?>  
<main class="main">
    <div class="container">
        <div class="mb-8"> 
            <div class="mt-11 mb-8 w-full  ">
                <?php edit_post_link(__('Editar esta entrada','html5reset'), '<span  class="page-edit" >', '</span>'); ?>
                <h1  class=" text-[30px] maxsm:text-center sm:text-[40px] text-[#333333] leading-9  uppercase mb-4"><?php echo single_cat_title(''); ?></h1>
                <div class=" text-[18px] sm:text-[20px]  ">	
                    <?php echo category_description(); ?>
                </div>
            </div> 
                    <?php if (have_posts()) : ?>
                    <div> 	
                    <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3  gap-4 sm:gap-[33px]  ">		
                    <?php 
                        $catId = get_queried_object()->term_id; //capturo el ID del current term
                        
                        $args = array(
                        'post_type' => 'proveedores',
                        'tax_query' => array(
                                        array(
                                            'taxonomy' => 'rubros',
                                            'field'    => 'term_id',
                                            'terms'    => $catId,
                                        ),
                                    ), 
                       /*  'orderby' => 'modify', */
                        'order' => 'desc',
                        'posts_per_page' => -1,
                        );

                        $listing = new WP_query($args);
                        
                        while ($listing->have_posts()) : $listing->the_post();
                         
                        $telefono = get_post_meta( $post->ID, 'telefono', true );
                        $instagram = get_post_meta( $post->ID, 'instagram', true );
                        $facebook = get_post_meta( $post->ID, 'facebook', true );
                        $email = get_post_meta( $post->ID, 'email', true );
                        $sitio_web = get_post_meta( $post->ID, 'sitio_web', true ); 

                        $arr_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'proveedores-single-thumbnail');
                       
                        if ($arr_image):
                            $imagethumb = $arr_image[0];
                        else:
                            $imagethumb = get_template_directory_uri()."/build/img/thumb-default.jpg";
                        endif;
                        ?>
                            <dl class="border border-[#333333] px-[12px] pt-[8px] pb-0 rounded-[12px] text-[#333333] font-semibold flex flex-col h-full" >
                                <img class="rounded-[12px]" src="<?=$imagethumb?>" alt="<?=get_the_title()?>"  />  
                                <!--< div  class="py-[22px] px-1  " > -->
                                    <div  class="pt-[22px] pb-[26px] px-[4px]" >
                                        <dt  class=" text-lg sm:text-[25.68px] font-semibold text-primary-500 tracking-[0.20px] " ><?php echo get_the_title();?></dt>
                                        <p  class="max-w-[429px]" ><?php echo get_the_content();?></p>
                                    </div>

                                    <div  class="h-[108px] mt-auto mb-[24px] px-[4px]" > 
                                        <?php if ($telefono) {?><dd><span class="hidden">Teléfono: </span><?php echo $telefono;?></dd><?php }?> 
                                        <?php if ($facebook) {?><dd><span>FB: </span><?php echo $facebook;?></dd><?php }?> 
                                        <?php if ($instagram) {?><dd><span>IG: </span><?php echo $instagram ;?></dd><?php }?> 
                                        
                                        <?php if ($sitio_web) {?><dd><span class="hidden">Sitio Web: </span> <?php echo $sitio_web;?> </dd><?php }?>
                                        
                                        <?php if ($email) {?><dd><span class="hidden">Email: </span><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></dd><?php }?>
                                     
                                    </div>
                              <!--   </div> -->
                            </dl>
                    <?php endwhile; ?>
                    </div> 	
                   
                    <?php endif; ?> 
              
            </div>
            
    </div>
</main>		 


<?php
get_footer();?>


