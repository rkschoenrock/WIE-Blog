<?php
/* Template Name: Search Page */
get_header(); ?>

<div class="row">
    <div class="eight columns">
        <?php if( have_posts() ) :?>
            <h1>
            <?php printf(
                get_search_query() );
            ?></h1>
            <?php while (have_posts()) : the_post(); ?>                       <h2><?php the_title(); ?></h2>
				<h2><?php the_title(); ?></h2>
				<?php the_content();
            endwhile;
         else : ?>
            <h1>Nothing Found</h1>
            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
        <?php endif; ?>
    </div>
    <div class="four columns">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
