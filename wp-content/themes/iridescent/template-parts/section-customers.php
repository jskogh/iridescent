<?php

if ( ! is_active_sidebar( 'sidebar-customers-section' ) ) {
    return;
}

?>

<div class="container">

    <section class="customers" id="customers">

        <div class="big-intro-text">
            <?php if ( $customers_title = get_theme_mod( 'awsm_customers_content_title' ) ) : ?>
                <h2><?php echo $customers_title; ?></h2>
            <?php endif; ?>

            <?php if ( $customers_subtitle = get_theme_mod( 'awsm_customers_content_subtitle' ) ) : ?>
                <p><?php echo $customers_subtitle; ?></p>
            <?php endif; ?>
        </div>

        <ul class="customers-list">
            <?php dynamic_sidebar( 'sidebar-customers-section' ); ?>
        </ul>

    </section>

</div>

