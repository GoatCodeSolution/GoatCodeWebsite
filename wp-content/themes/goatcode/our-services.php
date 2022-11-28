<?php /* Template Name: OurServices*/ ?>
<?php get_header(); ?>
<?php 

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.
?>

  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h4>What We Do</h4>
            <h1>Our Services</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Our Services</h6>
            <h4>Provided <em>Services</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Useful Tricks</h4>
                <p>
                  WordPress Tips 2022 | 15 Beginner's Tips and Tricks | Pick Your Host.
                  Look at the theme demos.
                  Install a plugin for SEO.
                  Put Google Analytics to use.
                  Choose Your Theme With Care.
                  Make Your Images Smaller.
                  Cut Back on the Plugins.
                  Create a Gravatar account.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Creative Ideas</h4>
                <p>Do you need some great WordPress website examples to get you started?

                  Many of the greatest designers and developers in the world utilise WordPress to create extremely engaging websites.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-03.png" alt="">
                </div>
                <h4>Ready Target</h4>
                <p>The results we deliver for our clients perfectly capture the worth of what we do. Every website project is unique and tailored to your company's needs. Whether you need a quick update or a complete overhaul and rebuild, our aim is to produce a stunning, robust online presence that attracts customers.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-04.png" alt="">
                </div>
                <h4>Technology</h4>
                <p>The key programming and markup languages used in web design, such as HTML, CSS, JavaScript, PHP, and SQL, are the skills you'll need to be a successful WordPress site designer.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Useful Tricks</h4>
                <p>
                  WordPress Tips 2022 | 15 Beginner's Tips and Tricks | Pick Your Host.
                  Look at the theme demos.
                  Install a plugin for SEO.
                  Put Google Analytics to use.
                  Choose Your Theme With Care.
                  Make Your Images Smaller.
                  Cut Back on the Plugins.
                  Create a Gravatar account.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Creative Ideas</h4>
                <p>Do you need some great WordPress website examples to get you started?

                  Many of the greatest designers and developers in the world utilise WordPress to create extremely engaging websites.</p>
              </div>
            </div>
            <!-- <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <h4>Ready Target</h4>
                <p>Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div> -->
           
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Useful Tricks</h4>
                <p>
                  WordPress Tips 2022 | 15 Beginner's Tips and Tricks | Pick Your Host.
                  Look at the theme demos.
                  Install a plugin for SEO.
                  Put Google Analytics to use.
                  Choose Your Theme With Care.
                  Make Your Images Smaller.
                  Cut Back on the Plugins.
                  Create a Gravatar account.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Creative Ideas</h4>
                <p>Do you need some great WordPress website examples to get you started?

                  Many of the greatest designers and developers in the world utilise WordPress to create extremely engaging websites.</p>
              </div>
            </div>
            <!-- <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <h4>Ready Target</h4>
                <p>Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div> -->
           
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cta-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>Get the sale right now!</h6>
          <h4>Up to 50% OFF For 1+ courses</h4>
          <p>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
          <div class="white-button">
            <a href="<?php echo get_stylesheet_directory_uri();?>/contact/">View Courses</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="featured-product">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Featured Service</h6>
            <h4>Best Of Our <em>Product</em></h4>
          </div>
        </div>
        <div class="col-lg-3 align-self-center">
          <div class="left-info">
            <div class="col-lg-12">
              <div class="info-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Best Strategy</h4>
                <p>Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="info-item last-info">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Best Strategy</h4>
                <p>Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="product-image">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/featured-product.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-3 align-self-center">
          <div class="right-info">
            <div class="col-lg-12">
              <div class="info-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Best Strategy</h4>
                <p>Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="info-item last-info">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Best Strategy</h4>
                <p>Food & truck tumeric taxidermy hoodie chiasore bitters retroed gentrify street portland.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>