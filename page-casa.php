<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo junio especial CASA - Luna de miel</title>
    <meta name="description" content="Contacta con la tienda para hacer tu compra.">
        <!-- Google tag (gtag.js) -->
<!--     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127421070-1"></script> -->
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
        .landingtiendas,.social-item-link,.landingtiendas-footer{
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
    </style>
</head>

<body>
    <div class="container">
            <div class="landingtiendas">
                <img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/LandingTiendas.jpg" alt="landing tiendas">
                <a class="logo"href="<?=home_url();?>">Luna de miel</a>
            </div>
        <div class="social">
            <div class="social-item" id="lovely" >
                <a class="social-item-link" href="https://www.instagram.com/lovelytabledesign/" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/Lovely.jpg" alt="lovely table desing"></a>
                <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Lovely Design', 'Enlace Saliente', 'Facebook']);" href="https://www.instagram.com/lovelytabledesign/" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/Instagram01.jpg" alt="lovely table desing"></a>
                <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Lovely Design', 'Enlace Saliente', 'Instagram']);" href="https://web.facebook.com/profile.php?id=100063798243118&_rdc=1&_rdr" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/Facebook01.jpg" alt="lovely table desing"></a>
                <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Lovely Design', 'Enlace Saliente', 'Whatsapp']);" href="https://api.whatsapp.com/send?phone=+51944045371&text=Hola" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/Telefono01.jpg" alt="lovely table desing"></a>
            </div>
            <div class="social-item" id="guit">
                <a class="social-item-link" href="https://www.instagram.com/larimavila_home/" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/lari.jpg" alt="lari mavila"></a>
                <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Lari Mavila', 'Enlace Saliente', 'Facebook']);"  href="https://www.instagram.com/larimavila_home/" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/Instagram02.jpg" alt="lari mavila"></a>
                <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Lari Mavila', 'Enlace Saliente', 'Instagram']);"  href="https://web.facebook.com/larimavilahome?_rdc=1&_rdr" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/Facebook02.jpg" alt="lari mavila"></a>
                <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Lari Mavila', 'Enlace Saliente', 'Whatsapp']);" href="https://api.whatsapp.com/send?phone=+51999516321&text=Hola" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/Telefono02.jpg" alt="lari mavila"></a>
            </div>
            <div class="social-item" id="larimavila">
                <a class="social-item-link" href="https://www.instagram.com/guitshop/" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/guit.jpg" alt="guit shop"></a>
                <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Guit', 'Enlace Saliente', 'Facebook']);" href="https://www.instagram.com/guitshop/" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/Instagram03.jpg" alt="guit shop"></a>
                <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Guit', 'Enlace Saliente', 'Instagram']);"  href="https://web.facebook.com/guitshop?_rdc=1&_rdr" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/Facebook03.jpg" alt="guit shop"></a>
                <a class="social-item-link" onclick="_gaq.push(['_trackEvent', 'Guit', 'Enlace Saliente', 'Whatsapp']);" href="https://api.whatsapp.com/send?phone=+51999669966&text=Hola" target="_blank"><img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/Telefono03.jpg" alt="guit shop"></a>
            </div>
        </div>
        <div class="landingtiendas-footer">
            <img src="<?=home_url();?>/wp-content/themes/ldm/casaimages/LandingTiendas02.jpg" alt="landing tiendas">
    </div>
    </div>
</body>
</html>