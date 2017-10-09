<!DOCTYPE html>
<html lang="en">

<!-- Page Header -->
<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="my-4">
                <?php echo get_bloginfo( 'name' ); ?>
            </h1>
            <h3 class="my-4"><small><?php echo get_bloginfo( 'description' ); ?></small></h2>

                <?php
            if (have_posts() ): while (have_posts() ): the_post();
                get_template_part( 'content', get_post_format() );
            endwhile; endif;
            ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>

</html>
