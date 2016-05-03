<div class="col-md-3 sidebar">

    <?php if(!dynamic_sidebar('page')) : ?>

        <h3>Mer att läsa... </h3>
        <p>Please add widgets to the page sidebar to have them display here</p>
        <?php dynamic_sidebar('blog-sidebar'); ?>
    <?php endif; ?>
</div>