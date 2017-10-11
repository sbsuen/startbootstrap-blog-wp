<!-- Title -->
<h1 class="mt-4">
    <?php the_title(); ?>
</h1>

<hr>

<!-- Preview Image -->
<?php if ( has_post_thumbnail() ) : ?>
<img class="img-fluid rounded" src="<?php the_post_thumbnail_url() ?>" alt="">
<?php endif;?>

<hr>

<!-- Post Content -->
<p>
    <?php the_content(); ?>
</p>

<hr>
