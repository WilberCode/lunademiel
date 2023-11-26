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
  
 
    <!-- Facebook Pixel Code -->
<!--     <script>
        
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
    </script> -->
 

    <?php wp_head(); ?> 

     <!-- Google tag (gtag.js) -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-8DC95B28BG__TEST"></script>
        <script> 
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-8DC95B28BG__TEST'); 
        </script>
 
 
   <!-- Google Tag Manager -->
    <script>
      window.onload = function(){
        setTimeout(function(){
                (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-5BVRXLK__TEST');
            },3000);
        }
    </script>
    <!-- End Google Tag Manager -->
 <style>
    .single-content .entry img{
	display:block;
	margin-top:1rem;
	margin-bottom:1rem;
}

.entry img[src*="/images/201601/"], .entry img[src*="/images/2013/"], .entry img[src*="/images/articulos/"],.entry img[src*="/images/"]{
	display:none !important;
}

#mailpoet_form_2 .mailpoet_validate_success{
	color:white !important;
}

.mailpoet_form_successfully_send .mailpoet_form_column,.mailpoet_form_successfully_send  .mailpoet_form_columns {
	
    flex-direction: row;
}

.mailpoet_message *{
  color:white;	
}

 

.banner-home-content{
	position:initial;
	margin-top:0;
	padding-top: 10px;
	display:none;
}
.banner-home img{
	width: 100%;
}

.titulo-editorial{
	max-width: 523px !important;
}

@media (min-width:700px){ 
	.float-left{
		float:left;
		margin-right:18px;
	} 
}
.clear{clear:both;}


/*banner*/
.rslides_nav{
	background: var(--primary) !important;
	color:white;
	display:none;
	font-size:0;
}
.rslides_nav:before {
	content:'>';
	font-size: 20px;
	
}

.rslides_nav:nth-child(2):before {
	content:'<';
	font-size: 20px; 
}


.banner-home:hover .rslides_nav{
	 display:block;
	transform: scaleY(1.8);
}
.metaslider  .rslides {
	 margin:0 !important; 
}
.home-banner ul li img{
	width: 100%;
}
 </style>
   
</head>
<body <?php body_class();  ?>  > 
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BVRXLK__TEST"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 
    <!-- End Google Tag Manager (noscript)-->
