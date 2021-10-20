<header >
    <section  class="z-30 relative" >
        <div class="max-w-container relative"> 
            <div class="absolute z-50 left-[10px] lg:left-0 top-0  " >
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                    <?php if ( has_custom_logo() ) {  ?> 
                <a  href="<?php echo home_url(); ?>" rel="home">
                    <img   class="w-16 sm:w-[150px]" src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>" >
                </a> 
                    <?php }else{?>
                <a  href="<?php echo home_url(); ?>" rel="home">
                    <?php echo  '<h1 class="text-primary-500">'.get_bloginfo( "name" ).'</h1>'; ?>
                </a>     
                    <?php }?>     
            </div>
        </div>

        <div class="w-full max-w-[1566px] mx-auto" > 
            <?php  dynamic_sidebar('home-banner') ?>   
        </div> 
        <div  class=" bg-primary-500 text-white py-[2rem] ">
            <div class="max-w-container">
                <div class="flex flex-col sm:flex-row justify-between space-y-4 sm:space-y-0 space-x-0 sm:space-x-2 "> 
                    <!--SUSCRÍBETE-->
                    <div class="home-content-heading flex-grow flex flex-col justify-center "> 
                        <?php
                        if(have_posts()):
                        while ( have_posts() ) : the_post();  ?>
                                
                                <h1><?php the_title(); ?></h1>  
                                <div class="text-[18px] md:text-[20px] "> 
                                    <?php the_content(); ?> 
                                </div>
                                <?php
                        endwhile;
                        else:
                                printf('<p>Vacio</p>');
                        endif;
                        rewind_posts(); 
                        ?>   
                    </div>
                    <div  class="w-full mx-auto max-w-[410px]">
                        <?php dynamic_sidebar('home-suscribe') ?>   
                    </div> 
                </div>
            </div>
        </div>
    </section> 
    <section  class="py-3 bg-white" > 
        <div  class=" max-w-container  header-wrap relative flex justify-between  w-full " >
            <div  class="flex-shrink z-30 flex items-center ">
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
            <div class=" search-home  absolute w-full left-0 sm:left-[10px] max-w-md m-auto mt-5 z-10">
                <?php get_search_form(true); ?>
            </div> 
            <div class="  flex  items-center  justify-end w-full h-full " > 
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
                        'theme_location'  => 'main',
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
                        'theme_location'  => 'mobile',
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
        </div>
    </section>

</header> 
