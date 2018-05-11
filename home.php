<?php get_header(); ?>

      <div class="container">
        <div class="row">

          <div class="col-md-9">

            <div class="page-header">
              <h1><?php wp_title(''); ?></h1>
            </div>

            <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'featured'
            );
            $the_query = new WP_Query( $args );

            ?>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if( $the_query->current_post == 0 ) : ?> active<?php endif; ?>"></li>
                <?php endwhile; endif; ?>

              </ol>

              <?php rewind_posts(); ?>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>

                <div class="item active">
                  <img src="..." alt="...">
                  <div class="carousel-caption"><?php echo the_title(); ?></div>
                </div>
                <?php endwhile; endif; ?>

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
