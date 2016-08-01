
<?php get_header(); ?>

<div class="welcome">
    <h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
    <h2><?php bloginfo('description'); ?></h2>
    <div class="social">
        <a href="https://www.facebook.com/FaithVieraLutheran/" target="_"><img src="images/facebook.png" width="60px"/></a>
        <a href="https://twitter.com/faithviera" target="_"><img src="images/twitter.png" width="60px"/></a>
        <a href="https://www.instagram.com/faithviera/" target="_"><img src="images/instagram.png" width="60px"/></a>
        <a href="https://www.pinterest.com/FaithViera/" target="_"><img src="images/pinterest.png" width="60px"/></a>
        <a href="mailto:info@faithviera.org" target="_"><img src="images/email.png" width="60px"/></a>
    </div>
</div>
<div class="white">
    <h3>Welcome</h3>
    <p>Thank you for visiting Faith 'Viera' Lutheran Church.</p>
    <p>At Faith Viera, we desire to glorify God through Christ centered worship, communion, and our mission is to serve God’s people.  Faith Viera is a place to learn, to   grow, and to be strengthened in your faith and walk with God.  Together, we seek to bring people to Christ, and Christ to people.  We would love for you to be a part of our faith journey.</p>
</div>
<div class="events">
    <?php dynamic_sidebar('events-widget'); ?>
</div>
<div class="recent-news">
<h2>RECENT NEWS</h2>
</div>
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
            </a>
        </div>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="date"><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></p>
        <a class="buttona" href="<?php the_permalink(); ?>"><div class="button">READ MORE</div></a>
    </div>
            <?php
            } //end while
        } //end if
    ?>
</div>
<!-- End Loop -->


<?php get_footer(); ?>
