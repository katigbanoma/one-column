<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container" style="font-family: 'Crimson Text', serif;">

      <!-- Page Heading -->
      <div class="h4pad" style="font-family: 'Josefin Sans', sans-serif;">
      A space devoted to cultivating a
      modest & productive lifestyle.<br>
      <a href="" class="btn btn-primary">Learn More</a>
      </div>

      <?php
          $args = array('orderby' => 'id');
          $categories = get_categories($args);
          foreach ($categories as $cat) :
      ?>

      <?php
          $args = array( 'posts_per_page' => 1, 'cat' => $cat->term_id );
          $the_query = new WP_Query( $args );
          if($the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
        <div class="row">
          <div class="col-md-7">
          <div style="border-bottom:1px solid #ccc">
            <a href="<?php echo get_category_link( $cat->term_id ); ?>" class="mh-widget-title-link">
                <?php echo strtoupper($cat->name); ?>
            </a>
          </div>
          
            <a href="<?php echo get_permalink(); ?>">
              <div class="bg-content main_img_height" style="background-size: 100% 250px; background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
              </div>
            </a>

          </div>
          <div class="col-md-5">
            <h3><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
            <p><?php the_content() ?></p>
            <p><?php echo get_post_time('F j, Y'); ?></p>
            <a class="btn btn-primary" href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">Continue Reading</a>
          </div>
        </div>
        <!-- /.row -->
        <hr>
     

        <?php endwhile; else: ?>
            <p>No News Today</p>
        <?php
            endif;
            // wp_reset_postdata();
            endforeach;
        ?>

      
      <!-- Pagination -->
      <!-- <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul> -->

    </div>
    <!-- /.container -->





<?php get_footer(); ?>