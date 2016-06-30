
<?php get_header(); ?>

<!-- Begin Section Container -->

    <!-- Begin Banner (index.php): Latest Post -->
    <section class="row">
        <div class="twelve columns banner-latest-post">
            <h3>Latest Post</h3>
            <?php
                $postslist = get_posts('numberposts=1');
                foreach ($postslist as $post) :
                setup_postdata($post);
            ?>
        <div class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="banner-thumbnail">
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
        </div>
            <?php endforeach ?>
        </div>
    </section>
    <!-- End Header: Latest Post-->

    <!-- Begin Section Wrapper -->

    <section class="row wrapper">
        <div class="twelve columns">
            <!-- Begin Loop -->
            <div class="boxed-latest-posts">
                <?php
                    if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                ?>
                <div class="boxed-single-post">
                    <div class="boxed-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('thumbnail');
                                }
                            ?>
                        </a>
                    </div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
                        <?php
                        } //end while
                    } //end if
                ?>
            </div>
            <!-- End Loop -->
        </div>
    </section>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
