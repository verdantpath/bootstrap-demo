<?php get_header(); ?>

      <div class="container">
        <div class="row">

          <div class="col-md-9">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <div class="page-header">
                <h1><?php the_title(); ?></h1>
              </div>

              <?php the_content(); ?>

            <?php endwhile; else : ?>

              <div class="page-header">
                <h1>Oh no!</h1>
              </div>

              <p>No content is appearing for this page!</p>

            <?php endif; ?>

          </div>

          <div class="col-md-3">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>

        </div>

<?php get_footer(); ?>
