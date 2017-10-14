<!DOCTYPE html>
<html lang="en">

<!-- Page Header -->
<?php get_header(); ?>

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

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php
            //THE LOOP
            if (have_posts() ): while (have_posts() ): the_post();
                get_template_part( 'content', get_post_format() );
            endwhile; ?>
                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <?php get_pagination_links() ?>
                </ul>
                <?php
            endif;
            ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>

</html>
