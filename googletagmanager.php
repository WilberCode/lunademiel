<?php 
    $current_user = wp_get_current_user();
    if ( 0 == $current_user->ID ) {
?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-K7ZWB4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
 window.onload = function(){
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K7ZWB4');
 }


</script>
<!-- End Google Tag Manager -->
<?php } 
?>
