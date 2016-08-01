<?php
/* Template Name: Search Page */
get_header(); ?>

    <div class="pages">
        <?php if( have_posts() ) :?>
            <h2>
            <?php printf(
                __('Search Results for: %s'),
                '<span>' . get_search_query() . '</span>' );
            ?></h2>
            <?php while (have_posts()) : the_post(); ?>
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?></a>
            <?php endwhile;
         else : ?>
            <h2>Nothing Found</h2>
            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
