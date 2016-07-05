<?php
/*
Template name: STACKEDFourEightWidth
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

        <div class="twelve columns">
          <?php
        		$temp = $wp_query; $wp_query= null;
        		$wp_query = new WP_Query(); $wp_query->query('showposts=6' . '&paged='.$paged);
        		while ($wp_query->have_posts()) : $wp_query->the_post();
          ?>

          <div class="row">
            <div class="four columns floatthumbnailright">
                <a href="<?php the_permalink(); ?>" title="Read more">
                  <?php
                      if ( has_post_thumbnail() ) {
                          the_post_thumbnail('thumbnail');
                      }
                  ?>
              </a>
            </div>

            <div class="eight columns">
          		<h2 class="dark-link"><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
          		<?php the_excerpt(); ?>

            </div>
          		<?php endwhile; ?>

          		<?php if ($paged > 1) { ?>

          		<nav id="nav-posts">
          			<div class="prev"><?php next_posts_link('Older >'); ?></div>
          			<div class="next"><?php previous_posts_link('< Newer'); ?></div>
          		</nav>

          		<?php } else { ?>

          		<nav id="nav-posts">
          			<div class="prev"><?php next_posts_link('Older >'); ?></div>
          		</nav>
          </div>


      		<?php } ?>

      		<?php wp_reset_postdata(); ?>
        </div>
    </section>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
