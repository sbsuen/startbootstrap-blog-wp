<!-- Blog Post -->
<div class="card mb-4">
    <!-- Preview Image -->
    <?php if ( has_post_thumbnail() ) : ?>
    <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">
    <?php endif;?>
    <div class="card-body">
        <h2 class="card-title">
            <?php the_title(); ?>
        </h2>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
    </div>
    <div class="card-footer text-muted">
        Posted on
        <?php the_date(); ?> by
        <a href="#">
            <?php the_author(); ?>
        </a>
    </div>
</div>
