<!DOCTYPE html>
<html lang="en">

<?php get_header()?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- Page Content -->
        <div class="col-md-12">
            <?php
            if (have_posts() ): while (have_posts() ): the_post();
                get_template_part( 'content-page', get_post_format() );
            endwhile; endif;
            ?>
        </div>
        <!-- /.row -->

    </div>
</div>
<!-- /.container -->

<?php get_footer(); ?>

</html>
