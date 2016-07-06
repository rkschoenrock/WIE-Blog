
        <form role="search" method="get" class="search-form wie-search-form" action="<?php echo home_url( '/' ); ?>">
            <button type="submit" class="search-submit"><span class="fa fa-search fa-2x"></span></button>
                <span class="screen-reader-text wie-hide"><?php echo _x( 'Search for:', 'label' ) ?></span>
                <input type="search" class="search-field wie-search-field" value="<?php echo get_search_query() ?>" name="s" />

        </form>
    </div>
