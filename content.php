<!-- Blog Post -->
<div class="card mb-4">
    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
    <div class="card-body">
        <h2 class="card-title">
            <?php the_title(); ?>
        </h2>
        <?php the_content(); ?>
    </div>
    <div class="card-footer text-muted">
        Posted on
        <?php the_date(); ?> by
        <a href="#">
            <?php the_author(); ?>
        </a>
    </div>
</div>

<!-- Pagination 
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>
            -->
