<!DOCTYPE html>
<html lang="ES" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title><?= wp_get_document_title() ?></title>  
    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
    <?php if (get_field('seo_keywords'))  { ?>
        <meta name="keywords" content="<?php the_field('seo_keywords');?>">  
    <?php }else{?>
        <meta name="keywords" content="Guía para parejas, Luna de miel, cine, entretenimiento, farándula, eventos, actividades en pareja, restaurante, novedades, celebridades, bodas, paseos, viajes, excursiones, vacaciones,fiestas, tips, regalos, oferta, promoción, promo, pareja">  
    <?php }?>
  
 
    <!-- Facebook Pixel Code -->
    <script>
        
    window.onload = function(){

        setTimeout(function(){ 
            !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2347629658600209'); 
        fbq('track', 'PageView');

          },3000)
        
    }
    </script>

    <script type='text/javascript'>
        window.onload = function(){
        setTimeout(function(){
                var googletag = googletag || {};
                googletag.cmd = googletag.cmd || [];
                (function() {
                    var gads = document.createElement('script');
                    gads.async = true;
                    gads.type = 'text/javascript';
                    var useSSL = 'https:' == document.location.protocol;
                    gads.src = (useSSL ? 'https:' : 'http:') +
                    '//www.googletagservices.com/tag/js/gpt.js';
                    var node = document.getElementsByTagName('script')[0];
                    node.parentNode.insertBefore(gads, node);
                })();
            },3000)
        }
    </script>


   
    <?php wp_head() ?> 

 
</head>
<body <?php body_class();  ?>  > 
