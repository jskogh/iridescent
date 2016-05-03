<?php

if ( ! is_active_sidebar( 'sidebar-services-section' ) ){
    return;
}

?>

<section class="services">

    <?php dynamic_sidebar( 'sidebar-services-section' ); ?>

</section>