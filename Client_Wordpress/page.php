<?php get_header(); ?>


<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$image = $image[0]; ?>
<?php else :
$image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
<?php endif; ?>
    <div class="background-thumbnail" style="background-image: url('<?php echo $image; ?>')" >

            <!-- Begin Loop -->
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    /* Our data context is defined */
                    the_post(); ?>

                    <h2><?php the_title(); ?></h2>
    </div>
    <div class="pages">
                    <?php the_content();
                }
            } ?>
            <!-- End Loop -->
    </div>



<?php get_footer(); ?>
