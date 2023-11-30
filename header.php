 
<?php if (  is_shop() || is_singular('product') || is_cart() || is_checkout() || is_account_page() ) { 
    get_template_part( 'templates/partials/document-open-tienda' ); 
    
} else{
     get_template_part( 'templates/partials/document-open' );
 }
    ?>
<!-- Site header markup goes here -->  
<?php if(is_front_page()){ ?>
<?php get_template_part( 'templates/views/header-home' ); ?> 
<?php } else {  
    if (  is_shop() || is_singular('product') || is_cart() || is_checkout() || is_account_page()) { 
        get_template_part( 'templates/views/header-store' );  
    } else{
          
        get_template_part( 'templates/views/header-global' );  
    }
 } ?>
		