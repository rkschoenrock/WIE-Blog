<?php
/* Template Name: Search Page */
get_header(); ?>

<div class="row">
    <div class="twelve columns banner-latest-post">
        <?php if( have_posts() ) :?>
            <h2>
            <?php printf(
                get_search_query() );
            ?></h2>
    </div>
    <div class="post-content">
            <?php while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content();
            endwhile;
         else : ?>
    </div>
    <div class="twelve columns banner-latest-post">
            <h2>Nothing Found</h2>
    </div>
    <div class="post-content">
            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
