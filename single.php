<?php
/**
 * The template for displaying single post
 *
 * This is the template that displays all single post of any post type by default.
 *
 * @package theScript
 * @subpackage Single Template
 * @since v2017.01
 */

get_header(); ?>

        <div class="mh-wrapper clearfix">
            <div class="mh-main clearfix">
                <div id="main-content" class="mh-content" role="main" itemprop="mainContentOfPage">

                    <!--Breadcrumb-->
                    <nav class="mh-breadcrumb"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.php" itemprop="url"><span itemprop="title">Home</span></a>
                        </span><span class="mh-breadcrumb-delimiter"><i class="fa fa-angle-right"></i></span><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                         <?php
                            $category = get_the_category(); 
                            $category_link = get_category_link($category[0]->cat_ID);
                            $category_name = $category[0]->cat_name;
                        ?>

                        <a href="<?php echo $category_link ?>" itemprop="url">
                        <span itemprop="title"><?php echo $category_name?></span>
                        </a>
                        </span><span class="mh-breadcrumb-delimiter"><i class="fa fa-angle-right"></i></span><?php echo get_the_title(); ?>
                    </nav>


                    <article>
                        <header class="entry-header clearfix">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                            <div class="mh-subheading-top"></div>
                            <!--<h2 class="mh-subheading">This is a custom subheading for your article</h2>-->
                            <div class="mh-meta entry-meta"> 
                                <span class="entry-meta-date updated">
                                    <i class="fa fa-clock-o"></i><a href="#"><?php echo get_post_time('F j, Y')?></a>
                                </span>
                                <span class="entry-meta-author author vcard"><i class="fa fa-user"></i><a class="fn" href="<?php echo get_the_author_link() ?>"><?php get_the_author(); ?></a></span>
                                <span class="entry-meta-categories"><i class="fa fa-folder-open-o"></i><a href="#" rel="category tag">Politics</a></span>
                                <span class="entry-meta-comments"><i class="fa fa-comment-o"></i><a href="#" class="mh-comment-count-link" ><?php echo wp_count_comments()->total_comments ?></a></span></div>
                        </header>

                

                        <div id="text-3" class="mh-widget mh-posts-1 widget_text">
                            <div class="textwidget">
                                <div class="mh-ad-label">Advertisement</div>
                                <div class="mh-ad-area">
                                    <div style="font-size: 13px; padding: 0.5em; background: #f5f5f5; border: 1px solid #ebebeb; text-align: center;">
                                    <?php 
                                    $arg = array('post_type' => 'posts_banner', 'posts_per_page' => '2'); $the_query = new WP_Query( $arg ); 
                                    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                    ?>

                                    <?php $the_query->get_field('banner_name'); ?>
                                    <a target="_blank" href="<?php echo get_field('banner_url') ?>">                    
                                    <img  id="img" src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:350px; height:350px; margin-top:10px;" >
                                    </a>

                                    <?php endwhile; else: ?>
                                        <p>There are no header adverts available<p>
                                    <?php endif; ?>
                                        <!-- <a target="_blank" href="#" title="Purchase MH Magazine Premium">Here you can place more advertisements and banners</a></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="entry-content clearfix">

                            <!--<div class="bg-content" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>-->


                            <figure class="entry-thumbnail"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title() ?>" title="<?php echo get_the_title() ?>" />
                                <!--<figcaption class="wp-caption-text">Image Credit: The Script Photography</figcaption>-->
                            </figure>

                            <?php $one = get_the_content(); var_dump($one); exit(); ?>
                            
                           
                        </div>
                       

                    </article>
                  