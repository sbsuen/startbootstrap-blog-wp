<!-- Sidebar Widgets Column -->
<div class="col-md-4">
    <div class="card my-4">
        <h5 class="card-header">About</h5>
        <div class="card-body">
            <p>
                <?php the_author_meta( 'description' ); ?>
            </p>
            <p>
                <?php wp_count_posts('page'); ?>
            </p>
        </div>
    </div>

    <!-- Archive widget -->
    <div class="card my-4">
        <h5 class="card-header">Archives</h5>
        <div class="card-body">
            <ul class="list-unstyled mb-0">
                <?php wp_get_archives( 'type=monthly' ); ?>
            </ul>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">Web Design</a>
                        </li>
                        <li>
                            <a href="#">HTML</a>
                        </li>
                        <li>
                            <a href="#">Freebies</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">JavaScript</a>
                        </li>
                        <li>
                            <a href="#">CSS</a>
                        </li>
                        <li>
                            <a href="#">Tutorials</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
    </div>


</div>
