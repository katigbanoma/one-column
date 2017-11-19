<?php get_header() ?>
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
<div class="container brdcrumb">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php single_cat_title( '', true ); ?></li>
            </ol>
        </nav>
    </div>
    <!-- Page Content -->
    <div class="container">
         
      <div class="row">
      
        <!-- Blog Entries Column -->
        <div class="col-md-12">
        <?php
        // Display optional category description
        if ( category_description() ) : ?>
        <?php //echo category_description(); ?><?php endif; ?>
        <?php  while ( have_posts() ) : the_post(); ?>
          <!-- Blog Post -->
          <div class="card mb-4">
          <a href="<?php the_permalink() ?>">
            <img class="card-img-top catimgheight" id="catimgheight" src="<?php echo get_the_post_thumbnail_url();?>" alt="Card image cap">
            </a>
            <div class="card-body">
              <h2 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
              <p class="card-text">
              <a href="<?php the_permalink() ?>">
              <?php the_content(); ?>
               </a>
               </p>
              <a href="<?php the_permalink() ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>
            </div>
          </div>

          <?php endwhile; 
 
          else:
           ?>
          <p>Sorry, no posts matched your criteria.</p>
          
          
          <?php endif; ?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

       </div>
    </div>
    <!-- /.container -->

  





<?php get_footer() ?>