<?php
  
/*
Template Name: Landing MrBloom
Template Post Type: post, page, event
*/ 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Mr. BLOOM - Luna de miel</title>
    <meta name="description" content="Taza de tu elección">
     

     <!-- Google tag (gtag.js) -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-8DC95B28BG"></script>
        <script> 
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

           gtag('config', 'G-8DC95B28BG'); 
        </script>
 
 
   <!-- Google Tag Manager -->
    <script>
      window.onload = function(){
        setTimeout(function(){
                (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-5BVRXLK');
            },3000);
        }
    </script>
    <!-- End Google Tag Manager -->
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
        .social-item-link{
           font-size:0;
           display: block;
        }
        .mt-60{
            margin-top:56px;
        }
        .mb-56{
            margin-bottom:56px;
        }
        @media (max-width: 750px){
           .mt-60{
              margin-top:38px;
            }
            .mb-56{
                margin-bottom:50px;
            }
        } 
   
    </style>
</head>

<body>
       <!-- Google Tag Manager (noscript) -->
       <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BVRXLK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 
    <!-- End Google Tag Manager (noscript)-->

    <div class="container">
        <div >
            <img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/bloom/banner.jpg" alt="Bloom"> 
        </div>
        <div class="mt-60" >
            <a id="Instagram" class="social-item-link" href="https://www.instagram.com/mrbloom.pe/" target="_blank">
               Correo
              <img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/bloom/instagram.jpg?v=1" alt="instagram">
           </a>
          
       </div>
        <div class="mb-56" >
            <a  id="Whatsapp" class="social-item-link" href="https://api.whatsapp.com/send?phone=+51970485861&text=Quiero más información" target="_blank">
            <img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/bloom/whatsapp.jpg?v=1" alt="Whatsapp">
            Whatsapp
           </a>
      
       </div>
        
    </div>
</body>
</html>