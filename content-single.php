<!-- Title -->
<h1 class="mt-4">
    <?php the_title(); ?>
</h1>

<!-- Author -->
<p class="lead">
    by
    <a href="#">
        <?php the_author(); ?>
    </a>
</p>

<hr>

<!-- Date/Time -->
<p>Posted on
    <?php the_date(); ?>
</p>

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
