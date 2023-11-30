<header class="bg-primary-100 relative h-[140px] header-global " > 
    <div  class="container   flex justify-between space-x-4 h-full relative " > 
    
        <div class=" " >
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                    <?php if ( has_custom_logo() ) {  ?> 
                    <a  href="<?php echo home_url(); ?>" rel="home">
                        <img   class="w-[80px] sm:w-[100px]" src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>" >
                    </a> 
                <?php }else{?>
                    <a  href="<?php echo home_url(); ?>" rel="home">
                        <?php echo  '<h1 class="text-primary-500">'.get_bloginfo( "name" ).'</h1>'; ?>
                    </a>     
                <?php }?>     
        </div>  
        <section  class="py-3   flex  justify-center  items-center  lg:items-end  flex-row lg:flex-col h-full  " > 
            <div  class="flex items-center justify-end ">
                <?php  
                        wp_nav_menu(array(
                            'theme_location'  => 'social-media',
                            'container'       => 'nav',
                            'container_class' => 'social-media',
                            'container_id'    => 'social-media',  
                            'menu' => 'ul',
                            'menu_class'      => 'social-media-menu',
                            'menu_id'         => 'social-media-menu',
                        ));  
                    ?>   
            </div> 
            <div class=" header-wrap lg:relative  flex  items-center  justify-end w-full h-full " > 
                <div class="nav-toggle-wrap block lg:hidden ">
                    <button  id="nav-toggle" class="nav-toggle focus:outline-none border-none">  
                        <span ></span> 
                        <span ></span> 
                        <span ></span> 
                        <span ></span> 
                        <span ></span> 
                        <span ></span>  
                    </button>
                </div> 
                <?php  
                    wp_nav_menu(array(
                        'theme_location'  => 'main-store',
                        'container'       => 'nav',
                        'container_class' => 'header-nav',   
                        'container_id'    => 'header-nav',  
                        'menu' => 'ul',
                        'menu_class'      => 'header-menu',
                        'menu_id'         => 'header-menu',
                    ));  
                ?> 
                    <div class="mobile-nav-wrap " id="mobile-nav-wrap"  > 
                    <?php  
                    wp_nav_menu(array(
                        'theme_location'  => 'mobile-store',
                        'container'       => 'nav',
                        'container_class' => 'mobile-nav',
                        'container_id'    => 'mobile-nav',  
                        'menu' => 'ul',
                        'menu_class'      => 'mobile-menu',
                        'menu_id'         => 'mobile-menu' ,
                    ));  
                ?> 
                </div>
                
            </div>    
        </section>
        <div class=" search-home search-global absolute w-full right-0   sm:right-[10px] max-w-md mx-auto mt-2 z-10">
            <?php get_search_form(true); ?>
        </div> 
    </div>

</header> 
