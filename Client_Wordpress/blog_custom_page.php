<?php
/*
Template Name: Blog Posts
*/

get_header();
query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>

    <div class="pages">
      <?php if (have_posts()) :
         while (have_posts()) : the_post(); ?>
         <div class="custom">
            <a class="clearboth" href="<?php the_permalink(); ?>"> <h2 class="clearboth"><?php the_title(); ?></h2></a>
                    <div class="blogthumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if ( function_exists( 'add_theme_support' ) ) {
                            	add_theme_support( 'post-thumbnails' ); // enable feature
                            	set_post_thumbnail_size( 96, 96, true ); // default size
                            	add_image_size( 'custom-banner-thumbnail', 300, 300, true ); // custom size
                            }
                            ?>
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('custom-banner-thumbnail');
                                }
                            ?>
                        </a>
                    </div>
                    <div class="excerpt">
                        <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                    </div>
        </div>
                <?php endwhile; ?>
         <div class="navigation">
             <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
         </div>
     <?php endif;
     wp_reset_query(); ?>
    </div>



<?php get_footer(); ?>
