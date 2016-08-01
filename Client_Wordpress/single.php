<?php get_header(); ?>

    <div class="pages single">
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    /* Our data context is defined */
                    the_post();

                    if ( has_post_thumbnail() ) { ?>
                        <h2><?php the_title(); ?></h2>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php } ?>


                    <?php the_content();
                }
            } ?>
            <div class="navigation">
                <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
            </div>
<!-- End Page PHP -->
        </div>



<?php get_footer(); ?>
