<?php
//
// 	Custom functions
//

add_image_size( 'beitrag-large', 980, 550, true ); // Large Featured Image
add_image_size( 'beitrag-medium', 640, 340, true ); // Medium Featured Image
add_image_size( 'beitrag-small', 300, 150, true ); // Small Featured Image

function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
        	width: 128px;
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/hung.svg);
            background-size: 128px;
            padding-bottom: 50px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

