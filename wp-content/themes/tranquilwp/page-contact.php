<?php 

/**
* Template Name: Contact Us
*/

get_header(); ?>

    <!-- === CONTACT US SECTION === -->
    <section id="contact">
      <div class="container">
        <div class="row">

          <div class="col-sm-6 col-sm-offset-3">
            <h2><?php the_title() ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/divider-purple.png" alt="divider">
          </div>  <!-- /col --> 

        </div>  <!-- /row -->

        <div class="row">
          <div class="col-sm-6 address well">
            <address> <i class="fa fa-map-marker"></i>
              Tranquil Spa<br>
              Address line 1<br>
              Address line 2<br>
              Address line 3<br>
            </address>  

            <i class="fa fa-envelope-o"></i>Email: mail@mail.com<br>
            <i class="fa fa-phone"></i>Telephone: 123 456 7890          
          </div>
          <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d143816.39084061983!2d-73.32546875747788!3d44.4009522722932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cca7c37ab720e25%3A0x360f767da140e654!2s686+Bay+Rd%2C+Shelburne%2C+VT+05482!5e0!3m2!1sen!2sus!4v1484403682029" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

        </div>  <!-- /row -->

        <div class="row message-area">
          <div class="col-sm-12">

          <?php echo do_shortcode("[contact-form-7 id='47' title='Contact form 1']") ?>

          </div>  <!-- /col-sm-12 -->

        </div>  <!-- /row -->

      </div>  <!-- /container -->

    </section>
    


<?php get_footer(); ?>
