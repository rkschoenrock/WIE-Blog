<?php get_header(); ?>

<section class="row">
    <div class="twelve columns banner-latest-post">

<!-- Begin Page PHP -->
        <h2><?php the_title(); ?></h2>
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    /* Our data context is defined */
                    the_post();

                if ( has_post_thumbnail() ) { ?>
                    <div class="banner-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php } ?>

    </div>
</section>

<section class="row wrapper">
    <div class="twelve columns single">
        <?php the_content();
            }
        } ?>



        <div class="post-navigation">
        	<div class="navigation-previous">OLDER: <?php previous_post_link('%link') ?></div>
        	<div class="navigation-next">NEWER: <?php next_post_link('%link') ?></div>
        </div>

<!-- End Page PHP -->
        </div>
    </section>

<?php get_footer(); ?>
