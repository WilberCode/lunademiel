<?php
 
/* 
defined( 'ABSPATH' ) || exit; */
$pathimage = get_template_directory_uri()."/tienda/";
get_header( 'shop' );
  
 ?> 
  <!-- 
 <div class=" flex  justify-center " >
    <div  class="relative  " >
        <img src="<?php //$pathimage.'banner-tienda.jpg';?>" alt="">
       <div  class="  md:absolute right-0 bottom-1 lg:bottom-[50px] xl:bottom-[80px] bg-white px-8 pt-[20px] pb-5 w-full maxmd:mx-auto max-w-[458px] " >
            <div  class="flex justify-between " >
              <span class="py-[8px] px-[19px]  bg-primary-500  text-[15.8px] leading-[18px] rounded-[25px/13px] font-semibold self-end " >SHOP & LOVE</span>
              <div  class="pb-2" > <img class="w-full !max-w-[80px] lg:!max-w-[100px]" src="<?//=$pathimage.'ldm.svg';?>" alt=""> </div>
            </div>
               <h1 class="text-[30px] lg:text-[46.9px] leading-[32px] lg:leading-[46px] mt-[26px] font-love " >DILO CON UNA <br> LOVE SHIRT</h1>
                <p  class="text-[18px] sm:text-[21px]  leading-[24px]  sm:leading-[25.6px] font-light " > 
                edición especial limitada <br>
                para que regales y te regales <br>
                un polo cool para esta <br>
                temporada.
                </p>
        </div> 
    </div>
 </div>-->
 <div class="banner-home w-full max-w-[1366px] flex flex-col justify-center items-center mx-auto " > 
                
    <?php dynamic_sidebar('tienda-banner') ?>
               
  </div> 

 <div class="container">
    <div  class="flex justify-center" >
        <h2  class="store-title mt-[54px] " >GRAPHIC TEES A S/59</h2>
    </div> 
 </div>
 <div class="px-2 mt-[20px]">
 <?php echo do_shortcode( '[product_category category="graphic-tees" per_page="12" columns="3" orderby="menu_order" order="desc"]' );?>
 </div>
 <div class="container">
    <div  class="flex justify-center text-center" >
        <h2  class="store-title store-title-ilustraciones mt-[1px] " >ILUSTRACIONES EN CUADROS S/79</h2>  
    </div> 
    <p  class="mt-[18px] text-center text-[16px]  " >Ilustraciones originales en hermosos cuadritos. Edición limitada.</p>
 </div>
 <div class="px-2 mt-[12px] category-ilustraciones">
 <?php echo do_shortcode( '[product_category category="ilustraciones" per_page="12" columns="3" orderby="menu_order" order="desc"]' );?>
 </div>
<!-- <div  class="px-2" >  -->
 <?php 
    /* if ( have_posts() ) : 
        // Start the Loop.
        while ( have_posts() ) :
            the_post(); 
            $the_content = apply_filters('the_content', get_the_content());
            if ( !empty($the_content) ) {
            echo $the_content;
            }else{
            echo "No hay contenido 😔 ";
            }
            ?>
        
        <?php
        endwhile;   
    else: 
        echo "sin Contenido";
    endif;
    // reset the query
    wp_reset_postdata();
     */
 ?>
 
<!--  </div> -->
 
 <?php 
get_footer( 'shop' );
  ?>
