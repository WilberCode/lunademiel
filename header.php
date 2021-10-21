<?php get_template_part( 'templates/partials/document-open' ); ?> 
<!-- Site header markup goes here --> 
<?php include_once("googletagmanager.php") ?>
<?php if(is_front_page()){ ?>
<?php get_template_part( 'templates/views/header-home' ); ?> 
<?php } else { ?>
<?php get_template_part( 'templates/views/header-global' ); ?> 

<?php } ?>
		