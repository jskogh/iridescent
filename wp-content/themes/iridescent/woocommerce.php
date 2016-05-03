<?php

/*
  Template Name: Woocommerce
*/

?>

<?php get_header(); ?>

    <div class="container">
        <div class="row webshop">
            <div class="col-md-12">
                <?php woocommerce_content(); ?>
                <?php the_content(); ?>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 article-preview">

            </div>
        </div>



    </div>



<?php get_footer(); ?>