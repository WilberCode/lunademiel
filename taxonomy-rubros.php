<?php 
get_header(); 
global $wp;
$current_slug = add_query_arg( array(), $wp->request );  
?>  
<main class="main">
    <div class="container">
        <div class="mb-8"> 
            <div class="mt-11 mb-8 w-full max-w-[1110px] mx-auto ">
                <?php edit_post_link(__('Editar esta entrada','html5reset'), '<span  class="page-edit" >', '</span>'); ?>
                <h1  class=" text-[35px] maxsm:text-center sm:text-[40px] text-primary-500 leading-8 "><?php echo single_cat_title(''); ?></h1>
                <div class=" text-[18px] sm:text-[20px]  ">	
                    <?php echo category_description(); ?>
                </div>
            </div>
            <div  class="flex flex-col md:flex-row   md:space-x-6 justify-center ">
                <div class="w-full max-w-[730px]  ">
                    <?php if (have_posts()) : ?>
                    <div> 			
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
                        'meta_query' => array(
                                        array(
                                            'key'     => 'prov_premium',
                                            'value'   => 1,
                                            'compare' => '=',
                                        ),
                                    ),
                        'orderby' => 'modify',
                        'order' => 'desc',
                        'posts_per_page' => -1,
                        );

                        $listing = new WP_query($args);
                        
                        while ($listing->have_posts()) : $listing->the_post();
                        
                        $direccion = get_post_meta( $post->ID, 'direccion', true );
                        $email = get_post_meta( $post->ID, 'email', true );
                        $sitio_web = get_post_meta( $post->ID, 'sitio_web', true );
                        $telefono = get_post_meta( $post->ID, 'telefono', true );
                        
                        $horario = get_post_meta( $post->ID, 'horario', true );
                        ?>
                            <dl class="promo-list" >
                                <dt><?php echo get_the_title() ?></dt>
                                <?php if ($direccion) {?><dd><span>Dirección: </span><?php echo $direccion;?></dd><?php }?>
                                
                                <?php if ($telefono) {?><dd><span>Teléfono: </span><?php echo $telefono;?></dd><?php }?>
                                <?php if ($sitio_web) {?><dd><span>Sitio Web: </span><a href="<?php echo $sitio_web;?>"><?php echo $sitio_web;?></a></dd><?php }?>
                                
                                <?php if ($email) {?><dd><span>Email: </span><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></dd><?php }?>
                                
                                    <?php if ($horario) {?><dd><span>horario: </span><?php echo $horario;?></dd><?php }?>
                            </dl>
                    <?php endwhile; ?>
                    </div>
                    <div> 			
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
                        'meta_query' => array(
                                        array(
                                            'key'     => 'prov_premium',
                                            'value'   => 1,
                                            'compare' => '!=',
                                        ),
                                    ),
                        'orderby' => 'modify',
                        'order' => 'desc',
                        'posts_per_page' => -1,
                        );

                        $listing = new WP_query($args);
                        
                        while ($listing->have_posts()) : $listing->the_post();
                        
                        $direccion = get_post_meta( $post->ID, 'direccion', true );
                        $email = get_post_meta( $post->ID, 'email', true );
                        $sitio_web = get_post_meta( $post->ID, 'sitio_web', true );
                        $telefono = get_post_meta( $post->ID, 'telefono', true );
                        
                            $horario = get_post_meta( $post->ID, 'horario', true );
                        
                        
                    ?>
                        <dl class="promo-list" >
                            <dt><?php echo get_the_title() ?></dt>
                            <?php if ($direccion) {?><dd><span>Dirección: </span><?php echo $direccion;?></dd><?php }?>
                            <?php if ($telefono) {?><dd><span>Teléfono: </span><?php echo $telefono;?></dd><?php }?>
                            <?php if ($sitio_web) {?><dd><span>Sitio Web: </span><a href="<?php echo $sitio_web;?>"><?php echo $sitio_web;?></a></dd><?php }?>
                            <?php if ($email) {?><dd><span>Email: </span><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></dd><?php }?>
                            
                                <?php if ($horario) {?><dd><span>horario: </span><?php echo $horario;?></dd><?php }?>
                        </dl>
                    <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="w-full max-w-[350px] text-center mx-auto "> 
                    <?php
                        $terms = get_terms( array('taxonomy' => 'rubros','hide_empty' => false,'orderby'=>'count','order'=>'desc','number'=>10));
                    ?> 
                    <div class="list-group">
                        <?php foreach($terms as $term) {?>			
                        <a  class="<?php if($current_slug == 'rubros/'.$term->slug ){ echo "active"; }?>"  href="<?=home_url()?>/rubros/<?php echo $term->slug?>/" > <div><?php echo $term->name; ?></div> <span class="badge"><?php echo $term->count; ?></span></a>
                            
                        <?php  }?>
                        <a class="list-group-last" href="<?=home_url()?>/proveedores/" >Ver más categorías</a>
                        </div> 
                    </div>
                </div>  
            </div>
            
    </div>
</main>		 


<?php
get_footer();?>


