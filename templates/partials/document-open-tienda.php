

<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title><?=wp_get_document_title();?></title>  
  <!--   <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script> -->
    <?php if (get_field('seo_keywords'))  { ?>
        <meta name="keywords" content="<?php the_field('seo_keywords');?>">  
    <?php }else{?>
        <meta name="keywords" content="Guía para parejas, Luna de miel, cine, entretenimiento, farándula, eventos, actividades en pareja, restaurante, novedades, celebridades, bodas, paseos, viajes, excursiones, vacaciones,fiestas, tips, regalos, oferta, promoción, promo, pareja">  
    <?php }?> 

    <?php wp_head(); ?> 

 
</head>
<body <?php body_class();  ?>  >  