<?php
/*
Template name: FourEightWidth
*/
?>

<?php get_header(); ?>

<!-- Begin Section Container -->

    <!-- Begin Banner (index.php): Latest Post -->
    <section class="row">
        <div class="twelve columns banner-latest-post">

        <div class="post">
            <h2><?php the_title(); ?></h2>

        </div>
        </div>
    </section>
    <!-- End Header: Latest Post-->

    <!-- Begin Section Wrapper -->

    <section class="row wrapper">
        <div class="four columns">
            <?php if ( has_post_thumbnail() ) { ?>
                        <div class="foureight-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php } ?>
        </div>
        <div class="eight columns">
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    /* Our data context is defined */
                    the_post();?>

                    <?php the_content();
                }
            } ?>
        </div>
    </section>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
