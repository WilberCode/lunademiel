<?php
  
/*
Template Name: Bibi
Template Post Type: post, page, event
*/ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBI VALVERDE - Luna de miel</title>
    <meta name="description" content="POR SER DE LA COMUNIDAD LUNA DE MIEL obtén 10%OFF en piezas exclusivas de Bibi Valverde">
        <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127421070-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127421070-1');
    </script>  

    <!-- trackEvent - google analytics --> 
    <script type="text/javascript"> 
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-127421070-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })(); 
    </script>

 <style>
    *, html,body{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
        .container{
            width: 100%;
            max-width: 1355px;
            margin: auto; 
        } 

        .casa_image{
            width: 100%;
            max-width:1355px;
            display:block;
        }
      
        @media (min-width: 688px){
          /*   .container{
                padding: 0 40px;
            }  */
        } 
        .social-item{
            display:flex;
            align-items: center;
            justify-content: center;
            padding-bottom:40px;
        }
   
    </style>
</head>

<body>
    <div class="container">
        <div >
            <img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/bibi/BibiValverde.jpg" alt="BibiValverde"> 
        </div>
        <div class="social-item" id="bibi" >
            <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Bibi valverde', 'Enlace Saliente', 'Instagram']);" href="https://www.instagram.com/valverdebibi/" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/bibi/instagram.jpg?v=1" alt="instagram"></a>
            <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Bibi valverde', 'Enlace Saliente', 'Whatsapp']);" href="https://api.whatsapp.com/send?phone=+51999121109&text=Hola" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/bibi/whatsapp.jpg" alt="whatsapp"></a>
       </div>
        
    </div>
</body>
</html>