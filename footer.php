 

<!-- Site footer markup goes here -->
<footer class=" footer text-heading  bg-body w-full   mt-14  pt-3 md:pt-6  "> 
    <div class="container  ">   
        <div class="  hidden md:block">
            <?php  
                    wp_nav_menu(array(
                        'theme_location'  => 'footer',
                        'container'       => 'nav',
                        'container_class' => 'footer-nav',   
                        'container_id'    => 'footer-nav',  
                        'menu' => 'ul',
                        'menu_class'      => 'footer-menu',
                        'menu_id'         => 'footer-menu',
                    ));  
                ?>
        </div>
        <div class=" flex justify-between space-x-4 items-center pt-2 md:pt-4" >
            
            <div  class="text-left text-sm m-0 py-3 sm:py-5 " > <?php dynamic_sidebar('copyright') ?></div>
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                    <?php if ( has_custom_logo() ) {  ?> 
                <a class="self-end "  href="<?php echo home_url(); ?>" rel="home">
                    <img   class="w-[8rem] sm:w-[100px]" src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>" >
                </a> 
                    <?php }else{?>
                <a  href="<?php echo home_url(); ?>" rel="home">
                    <?php echo  '<h1 class="text-primary-500">'.get_bloginfo( "name" ).'</h1>'; ?>
                </a>     
                    <?php }?>                
        </div>
    </div>
    
</footer>
<?php get_template_part( 'templates/partials/document-close' ); ?> 