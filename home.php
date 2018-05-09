<?php get_header(); ?>

      <div class="container">
        <div class="row">

          <div class="col-md-9">

            <div class="page-header">
              <h1><?php wp_title(''); ?></h1>
            </div>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="..." alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="..." alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                ...
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <article class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><em>by <?php the_author(); ?> on <?php echo the_time('l, F jS, Y'); ?> in <?php the_category( ', ' ); ?> - <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></em></p>

                <?php the_excerpt(); ?>

                <hr>

              </article>

            <?php endwhile; else : ?>

              <div class="page-header">
                <h1>Oh no!</h1>
              </div>

              <p>No content is appearing for this page!</p>

            <?php endif; ?>

          </div>

          <?php get_sidebar( 'blog' ); ?>

        </div>

<?php get_footer(); ?>
