<?php
// add all taxonmies to json api,
// needed for enhanced media library and
// media manager aspect of shopify blocks app
function sb_add_taxes_to_api() {
    $taxonomies = get_taxonomies( '', 'objects' );

    foreach( $taxonomies as $taxonomy ) {
        $taxonomy->show_in_rest = true;
    }
}
add_action( 'init', 'sb_add_taxes_to_api', 30 );
