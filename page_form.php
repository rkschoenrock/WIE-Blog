<?php
/*
Template name: CONTACTFORM
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
          <form method="post" action="contact-form.php" class="contactform">
            <label for="Name">Name: </label>
            <input type="text" name="Name" id="Name" />

            <label for="Email">Email: </label>
            <input type="text" name="Email" id="Email" />

            <label for="Message">Message: </label>
            <textarea type="text" name="Message" rows="10" cols="50"></textarea>

            <input type="submit" name="submit" value="Submit" class="submit-button" />
          </form>
        </div>
    </section>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
