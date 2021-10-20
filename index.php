<?php
get_header(); ?>
  <main class="w-full mt-16 sm:mt-20 mb-20 max-w-[958.11px] mx-auto px-4 lg:px-0 " > 
     <!--  <h1  class="lg:text-[49.31px] text-center leading-[1] text-primary-500" >La Alimentación: <br>
        Tu ritual de belleza</h1> -->
        <div class="blog-post" >  
        <?php
          if ( have_posts() ) :

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
          else : 
              echo "sin Contenido";
          endif;
          ?>  
        </div>
       







      <!--   <img src="../build/img/imagen1.jpg"  class="mt-9 mx-auto " alt="imagen1">
        <div class="lg:text-[23.69px] my-7 space-y-5 text-heading " > 
          <p>Aunque nos cueste aceptarlo, la piel es el reflejo de nuestra alimentación, por lo que
            debemos prestar especial atención a lo que ingerimos diariamente y que podría producir efectos inflamatorios en ella.</p>
          <p>Tal es el caso de los alimentos que contienen altos niveles de glucosa que producen
            inflamación y oxidación de proteínas, lípidos y ácidos nucleicos en la sangre (AGEs).
            Esto genera el deterioro de nuestros tejidos reflejando la apariencia de arrugas en la
            piel.</p>
          <p>La buena noticia es que podemos revertir el daño ocasionado en nuestra piel (y todo
            nuestro organismo). Consumiendo una dieta rica en nutrientes que aporten a mejorar
            nuestra salud y a frenar los signos del envejecimiento prematuro.</p>
        </div>
        <img src="../build/img/imagen2.jpg"  class="mt-8 mx-auto " alt="imagen1">
        <div class="lg:text-[23.69px] my-7 space-y-5 text-heading " > 
          <p>Los alimentos claves para luchar contra el envejecimiento y que tienen efectos beneficiosos para todo nuestro organismo, son las verduras de hoja verde (mejor crudas que
            cocidas), los frutos rojos, las plantas aromáticas, el té verde, el salmón, la avena, el
            cacaco, el aceite de oliva, la palta, entre otros.</p>
        </div>
        <img src="../build/img/imagen3.jpg"  class="mt-8 mx-auto " alt="imagen1">
        <div class="lg:text-[23.69px] my-7 space-y-5 text-heading   italic font-bold " > 
          <p>Por otro lado, tratemos de evitar el consumo de alimentos que contienen altos niveles de azucar como los pasteles, los jugos en general, las gaseosas, las papas,
            el pan, los fideos. ¿Ya estás lista para empezar con tu ritual?</p>
        </div> -->
  </main> 
 

 
<?php

get_footer();
