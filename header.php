<!DOCTYPE html>
<html lang="en" style="margin:0 !important;">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?php 
            wp_title('-', true, 'right');
            bloginfo( 'name' );
        ?>
    </title>
    
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Fjalla+One|Josefin+Sans" rel="stylesheet">
  </head>
  <?php wp_head(); ?>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbgcol">
      <div class="container headcon">
          <a class="navbar-brand" href="<?php bloginfo('siteurl'); ?>">
              <?php bloginfo('name'); ?>
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo get_home_url(); ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <?php $all_pages = get_pages(); foreach ($all_pages as $key => $page):?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo $page->guid?>">
              <?php echo $page->post_title?>
            </a>
            </li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
    </nav>
