<?php

/* WOOCOMMERCE */

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// Función para mostrar los primeros 25 caracteres de la descripción de cada producto en el catálogo
function truncar_descripcion_productos() {
    global $product;

    // Verificar si $product es un objeto de producto válido
    if (is_a($product, 'WC_Product') && $product->is_visible()) {
        // Obtener la descripción del producto
        $descripcion_producto = $product->get_short_description(); 
         

         
        // Eliminar etiquetas HTML, excepto <br>
        $descripcion_sin_etiquetas = preg_replace('/<(?!br\s*\/?)[^>]+>/i', '', $descripcion_producto);

        // Contar el número de saltos de línea (\n) en las dos primeras líneas
        $primeras_dos_lineas = explode("\n", $descripcion_sin_etiquetas, 3); // Obtener hasta 3 elementos (dos líneas más una parte)
        
        // Si hay más de dos líneas, mostrar solo las dos primeras líneas
        if (count($primeras_dos_lineas) > 2) {
            $descripcion_corta = $primeras_dos_lineas[0] . "\n" . $primeras_dos_lineas[1];
        } else {
            $descripcion_corta = $descripcion_sin_etiquetas; // Si son menos de dos líneas, mostrar todo el contenido
        }
 
        echo '<p  class="description">'.nl2br($descripcion_corta).'</p> '; 
    }
}

// Mostrar solo los primeros 25 caracteres en la descripción de los productos del catálogo
add_action('woocommerce_after_shop_loop_item_title', 'truncar_descripcion_productos', 5);



add_action('woocommerce_single_product_summary', 'mostrar_titulo_del_producto', 6);
function mostrar_titulo_del_producto() { 
    echo '<h1 class="product_title entry-title">' . get_the_title() . '</h1>';
}
 
 
// Eliminar la descripción corta original
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20); 
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 9);

// Mostrar el título del producto después del precio
/* add_action('woocommerce_single_product_summary', 'comprar_por_whatsapp', 32);
function comprar_por_whatsapp() {
    global $product;
    echo '<a  class="py-[11px] font-semibold inline-flex tracking-[0.60px] text-[13.99px] justify-center px-2   border  !text-black  border-black w-full max-w-[330px] " href="#">QUIERO COMPRAR POR WHATSAPP</a> ';
} */

add_action('woocommerce_after_add_to_cart_button', 'comprar_por_whatsapp', 32);

function comprar_por_whatsapp() {
    global $product;

    // Obtenemos los detalles del producto
    $product_id = $product->get_id();
    $product_name = $product->get_name();
    $product_price = $product->get_price();
    
    // Creamos el enlace con los datos del producto para WhatsApp
    $whatsapp_link = 'https://api.whatsapp.com/send?phone=+51938343796&text=¡Hola! Estoy interesado en el producto: ' . urlencode($product_name) . '%0A - Precio: S/' . $product_price . '%0A - Enlace del producto: ' . get_permalink($product_id);

    // Mostramos el enlace
    echo '<a href="' . esc_url($whatsapp_link) . '" class=" comprar-whatsapp leading-normal pt-[15px] pb-[11.04px] font-semibold inline-flex tracking-[0.60px] text-[13.99px] justify-center px-2 border !text-black border-black w-full max-w-[330px]">QUIERO COMPRAR POR WHATSAPP</a>';
}





add_action('woocommerce_single_product_summary', 'logo_ldm', 33);
function logo_ldm() { 
    echo '<img class="w-full !max-w-[80px] mt-[37px] lg:!max-w-[100px] ml-auto" src="'.get_template_directory_uri().'/tienda/ldm.svg'.'" alt="">';
}


/* Buttons of queantity in checkout - Start */
// Ocultamos la cadena de las cantidades junto al nombre del producto
add_filter( 'woocommerce_checkout_cart_item_quantity', '__return_empty_string' );
// Agregamos el selector de cantidades
add_filter( 'woocommerce_cart_item_subtotal', 'ayudawp_selector_cantidades_pago', 9999, 3 );
function ayudawp_selector_cantidades_pago( $product_quantity, $cart_item, $cart_item_key ) {
    if ( is_checkout() ) {
        $product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
        $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key ); 
        $product_quantity = woocommerce_quantity_input( array(
        'input_name' => 'shipping_method_qty_' . $product_id,
        'input_value' => $cart_item['quantity'],
        'max_value' => $product->get_max_purchase_quantity(),
        'min_value' => '0',
        ), $product, false );
        $product_quantity .= '<input type="hidden" name="product_key_' . $product_id . '" value="' . $cart_item_key . '">';
    }
    return $product_quantity;
}
// Detectamos el cambio de cantidad para recalcular los totales
add_action( 'woocommerce_checkout_update_order_review', 'ayudawp_recalcular_totales_selector_cantidades_pago' );
function ayudawp_recalcular_totales_selector_cantidades_pago( $post_data ) {
    parse_str( $post_data, $post_data_array );
    $updated_qty = false;
    foreach ( $post_data_array as $key => $value ) { 
        if ( substr( $key, 0, 20 ) === 'shipping_method_qty_' ) { 
            $id = substr( $key, 20 ); 
            WC()->cart->set_quantity( $post_data_array['product_key_' . $id], $post_data_array[$key], false );
            $updated_qty = true;
        } 
    } 
    if ( $updated_qty ) WC()->cart->calculate_totals();
}
 
/* Buttons of queantity in checkout - End */
 


/*Buttons of quantity - Start*/
add_action('woocommerce_before_quantity_input_field', 'btn_before_input_qty_field');
function btn_before_input_qty_field(){ 
    echo '<button type="button" class="button button-qty" data-quantity="minus">-</button>';
}

add_action('woocommerce_after_quantity_input_field', 'btn_after_input_qty_field');
function btn_after_input_qty_field(){
    echo '<button type="button" class="button button-qty" data-quantity="plus">+</button>';
}
/*Buttons of quantity  - End*/

/*Delete producto in checkout - Start*/ 
add_filter('woocommerce_cart_item_name', 'agregar_boton_eliminar_anterior', 10, 3);

function agregar_boton_eliminar_anterior($product_name, $cart_item, $cart_item_key) {
    // Verificar si estamos en la página de checkout
    if (is_checkout()) {
        $product_id = $cart_item['product_id'];
        return '<div class="woocommerce-cart-form cart"><span class="product-remove"><a href="' . esc_url(wc_get_cart_remove_url($cart_item_key)) . '"  class="remove" title="Eliminar producto" data-product_id="' . $product_id . '">×</a> </span></div> ' . $product_name;
    }
    
    // Si no estamos en la página de checkout, simplemente retornamos el nombre del producto sin modificar
    return $product_name;
}
/*Delete producto in checkout - End*/
 

// Función para mostrar las imágenes del producto después del resumen en single-product.php
function display_product_images_after_summary() {
    global $product;

    // Verificar si hay imágenes del producto
    if (has_post_thumbnail() || $product->get_gallery_image_ids()) {
        echo '<div class="product-featured"> ';  
        echo '<div class="product-featured-gallery">';  
        // Mostrar la imagen destacada
     /*    if (has_post_thumbnail()) {
            echo '<div class="product-featured-image">';
            echo get_the_post_thumbnail($product->get_id(), 'woocommerce_single');
            echo '</div>';
        } */

        // Mostrar la galería de imágenes
        $gallery_image_ids = $product->get_gallery_image_ids();
        if ($gallery_image_ids) {
            foreach ($gallery_image_ids as $image_id) {
                echo '<div class="product-featured-image">';
                echo wp_get_attachment_image($image_id, 'woocommerce_single');
                echo '</div>';
            }
        }

         echo '</div>';
        echo '</div>';
    }
}
add_action('woocommerce_after_single_product', 'display_product_images_after_summary', 10);



/* Remove tabs - start*/ 
add_filter( 'woocommerce_product_tabs', 'remove_product_tabs', 98 );
function remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );       // Remove the description tab
    unset( $tabs['additional_information'] );  // Remove the additional information tab
    unset( $tabs['reviews'] );           // Remove the reviews tab
    return $tabs;
}
/* hide tabs - end*/

/* related products to the end - start */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
 
add_action( 'woocommerce_after_single_product', 'move_related_products_to_end' );
function move_related_products_to_end() {
    global $product;
    if ( $product ) { 
        woocommerce_output_related_products(); 
    }
}
/* related products to the end - end */


/* Change Add to Cart text for catalog product list - Start*/
function change_catalog_add_to_cart_text($text) {
    if (is_shop() || is_product_category() || is_product_tag()) {  
        $text = 'SHOP & LOVE NOW!';  
    }
    return $text;
}
add_filter('woocommerce_product_add_to_cart_text', 'change_catalog_add_to_cart_text', 10, 1);
/* Change Add to Cart text for catalog product list - End*/


/* function agregar_descuento_despues_boton_agregar_carrito() {
    // Aquí puedes colocar tu contenido adicional, como el descuento
    echo '<div class="descuento-info"><span>Descuento 5%</span></div>';
}
add_action('woocommerce_after_add_to_cart_button', 'agregar_descuento_despues_boton_agregar_carrito');  */
