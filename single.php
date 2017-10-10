<!DOCTYPE html>
<html lang="en">

<?php get_header()?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- Titlebar Column -->
        <div class="col-md-12">
            <h1 class="my-4">
                <?php echo get_bloginfo( 'name' ); ?>
            </h1>
            <h3 class="my-4"><small><?php echo get_bloginfo( 'description' ); ?></small></h3>
        </div>

        <!-- Post Content Column -->
        <div class="col-md-8">
            <?php
            if (have_posts() ): while (have_posts() ): the_post();
                get_template_part( 'content-single', get_post_format() );
                //if (comments_open() || get_comments_number() ):
                //    comments_template();
                //endif;
            endwhile; endif;
            ?>
        </div>

        <!-- Sidebar Widgets Column -->
        <?php get_sidebar(); ?>

    </div>

</div>
<!-- Footer -->
<?php get_footer(); ?>

</body>

</html>
