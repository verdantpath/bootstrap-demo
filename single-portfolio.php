<?php get_header(); ?>

      <div class="container">
        <div class="row">



            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <div class="col-md-8 portfolio-image">
                <?php

                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );

                ?>
                <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo the_title(); ?> graphic"></a></p>


              </div>

              <div class="col-md-4">

                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

              </div>

            <?php endwhile; else : ?>

              <div class="page-header">
                <h1>Oh no!</h1>
              </div>

              <p>No content is appearing for this page!</p>

            <?php endif; ?>



        </div>

<?php get_footer(); ?>
