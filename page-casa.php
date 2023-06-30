<?php
  
/*
Template Name: Casa
Template Post Type: post, page, event
*/ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo junio especial CASA - Luna de miel</title>
    <meta name="description" content="Contacta con la tienda para hacer tu compra.">
        <!-- Google tag (gtag.js) -->
<!--     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127421070-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127421070-1');
    </script>   -->

    <!-- trackEvent - google analytics --> 
  <!--   <script type="text/javascript"> 
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-127421070-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })(); 
    </script> -->



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8DC95B28BG"></script>
    <script>
       
     setTimeout(function(){
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-8DC95B28BG');
    },2000); 
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
            },2000);
        }
    </script>
    <!-- End Google Tag Manager -->
 <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
        .container{
            width: 100%;
            max-width: 1355px;
            margin: auto;
            padding: 0 10px;
        }
        .landingtiendas,.social-item-link link_clic link_clic_ ,.landingtiendas-footer{
            display: flex;
            text-decoration: none;
        }
        .landingtiendas img,.landingtiendas-footer img{
            width: 100%;
        }
        .social img{
            width: 100%;
        }
        .social{
            width: 100%;
            display: grid;
            grid-template-columns: repeat(1,1fr);
        
        }

        @media (max-width: 688px){
            .social{ 
             background: #fce2ed;
             padding: 0 45px;
            } 
        
        }
        @media (min-width: 688px){
            .container{
                padding: 0 40px;
            }
            .social {
                grid-template-columns: repeat(3,1fr);
            }
        }
        .landingtiendas{
            position: relative;
        }
        .logo{
        color:transparent;
        width: 228px;
        height: 181px;
        position: absolute;
        top: 0;
        left: 0; 
        display:block;
        }

        @media (max-width: 1350px){
            .logo{ 
                width: 18%;
        height: 21%;
            }

        } 
        a.social-item-link img{
           display: block;
        }
        a.social-item-link  {
            font-size:0; 
            display: block;
        }
    </style>
</head>

<body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BVRXLK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="container">
            <div class="landingtiendas">
                <img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/LandingTiendas.jpg" alt="landing tiendas">
                <a class="logo"href="<?=home_url();?>">Luna de miel</a>
            </div>
        <div class="social">
            <div class="social-item" id="lovely" >
                <a class="social-item-link   " href="https://www.instagram.com/lovelytabledesign/" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Lovely.jpg" alt="lovely table desing"></a>
<!--                 <a class="social-item-link link_click link_click_Lovely_Design"  id="link_click_Lovely_Design_Instagram" href="https://www.instagram.com/lovelyhome.pe/" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Instagram01-1.jpg?v=1" alt="lovely table desing">  Lovely Design - Instagram </a>
 -->                <a class="social-item-link link_click link_click_Lovely_Design"  id="link_click_Lovely_Design_Instagram" href="https://www.cenepred.gob.pe/" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Instagram01-1.jpg?v=1" alt="lovely table desing">  Lovely Design - Instagram </a>
                <a class="social-item-link link_click link_click_Lovely_Design"  id="link_click_Lovely_Design_Facebook"  href="https://www.facebook.com/profile.php?id=100063798243118" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Facebook01-1.jpg?v=1" alt="lovely table desing">  Lovely Design - Facebook </a>
                <a class="social-item-link link_click link_click_Lovely_Design"  id="link_click_Lovely_Design_Whatsapp" href="https://api.whatsapp.com/send?phone=+51944045371&text=Hola" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Telefono01.jpg" alt="lovely table desing">  Lovely Design - Whatsapp </a>
            </div>
            <div class="social-item" id="guit">
                <a class="social-item-link  " href="https://www.instagram.com/larimavila_home/" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/lari.jpg" alt="lari mavila"></a>
                <a class="social-item-link link_click link_click_Lari_Mavila" id="link_click_Lari_Mavila_Instagram"  href="https://www.instagram.com/larimavila_home/" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Instagram02.jpg" alt="lari mavila"> Lari Mavila - Instagram</a>
                <a class="social-item-link link_click link_click_Lari_Mavila" id="link_click_Lari_Mavila_Facebook"   href="https://web.facebook.com/larimavilahome?_rdc=1&_rdr" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Facebook02.jpg" alt="lari mavila"> Lari Mavila - Facebook</a>
                <a class="social-item-link link_click link_click_Lari_Mavila" id="link_click_Lari_Mavila_Whatsapp"  href="https://api.whatsapp.com/send?phone=+51999516321&text=Hola" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Telefono02.jpg" alt="lari mavila"> Lari Mavila - Whatsapp</a>
            </div>
            <div class="social-item" id="larimavila">
                <a class="social-item-link  " href="https://www.instagram.com/guitshop/" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/guit.jpg" alt="guit shop"></a>
                <a class="social-item-link link_click link_click_Guit"  id="link_click_Guit_Instagram"   href="https://www.instagram.com/guitshop/" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Instagram03.jpg" alt="guit shop"> Guit - Instagram</a>
                <a class="social-item-link link_click link_click_Guit "  id="link_click_Guit_Facebook"   href="https://web.facebook.com/guitshop?_rdc=1&_rdr" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Facebook03.jpg" alt="guit shop"> Guit - Facebook</a>
                <a class="social-item-link link_click link_click_Guit"  id="link_click_Guit_Whatsapp"    href="https://api.whatsapp.com/send?phone=+51999669966&text=Hola" target="_blank"><img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/Telefono03.jpg" alt="guit shop"> Guit - Whatsapp</a>
            </div>
        </div>
        <div class="landingtiendas-footer">
            <img class="casa_image" src="<?=home_url();?>/wp-content/themes/ldm/landing/casa/LandingTiendas02.jpg" alt="landing tiendas">
    </div>
    </div>
</body>
</html>