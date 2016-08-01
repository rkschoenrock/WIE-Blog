<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

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
    <div class="contactpage">
      <div class="contactpageleft">
        <form method="post" action="contact-form.php" class="contactform">
           <label for="Name">Name: </label>
           <input type="text" name="Name" id="name" />

           <label for="Email">Email: </label>
           <input type="text" name="Email" id="email" />

           <label for="Message">Message: </label>
           <textarea type="text" name="Message" rows="5" cols="50"></textarea>

           <input type="submit" name="submit" value="Submit" class="submit-button" />
         </form>
      </div>
      <div class="contactpageright">
              <?php the_content();
                  }
              } ?>
              <!-- End Loop -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3514.06799565045!2d-80.71162104934807!3d28.26595498247827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88de03f7775eda97%3A0x6b8ebd26fcf9cd1f!2sFaith+Viera+Lutheran+Church+and+Preschool!5e0!3m2!1sen!2sus!4v1469898544587" width="100%" height="262" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="clearboth"><p>&nbsp;</p></div>


<?php get_footer(); ?>
