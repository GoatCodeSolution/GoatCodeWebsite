<?php


get_header();

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
<!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row align-items-md-center">
        <div class="col-lg-7">
          <div class="header-text">
            <h2>WordPress Development Company for Businesses + A Compassionate Staff</h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">Know more</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="right-image">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/header-graphics.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Aenean quis justo nunc</h6>
            <h4>We rendered <em>services. </em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Wordpress website <br class="d-none d-md-block">development </h4>
                <p>WordPress has become into the most widely used and complete content management system on the
                  planet.We are here To match your company needs, we provide a variety of bespoke, enterprise-grade
                  WordPress development services.Our team of committed WordPress developers has expertise building
                  powerful, feature-rich, bespoke websites for start-ups, and top brands across a variety of business
                  verticals.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Friendliness of Content<br class="d-none d-md-block"> Management</h4>
                <p>Visual editing, an automated revision history, preview functionality, and simplified publishing are
                  just a few of the built-in capabilities that WordPress includes to make content management simple for
                  users of all skill levels. GoatCode Software Solutions team is there to provide user assistance
                  anytime you need it if you ever have any questions while using WordPress.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Integrations and Plugins <br class="d-none d-md-block"></h4>
                <p>A large number of plugins and third-party tools are available for WordPress, and this dynamic
                  development community makes it simple to include a wide range of functionality and features into your
                  WordPress website. While many of these products will fulfil your needs "out of the box," others may
                  require customization or configuration for particular uses. Whatever the situation, GoatCode Software
                  Solutions can guarantee that your site is employing the proper equipment.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Designs That <br class="d-none d-md-block">Can Be Customized </h4>
                <p>WordPress websites can be heavily personalised or use pre-existing theme templates for design and
                  layout. GoatCode Software Solutions specialises in creating bespoke, responsive, mobile-friendly
                  WordPress designs that will make your website stand out while also delivering results that will help
                  you achieve your goals on the web.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Lorem ipsum dolor</h6>
            <h4>Our Courses</h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>SEO</span></div>
                    <div class="gradient-border"><span>WordPress Plugins</span></div>
                    <div class="gradient-border"><span>Web Development</span></div>
                    <div class="gradient-border"><span>Web Design</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/courses-01.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>SEO</h4>
                          <p>The science of enhancing a website to make it more visible when people search for goods or
                            services is known as search engine optimization. The likelihood that a brand will attract
                            business increases with a </p>
                          <h4> How does SEO function?</h4>
                          <p>While it is feasible to increase results, it is almost impossible to completely control
                            search
                            algorithms. Businesses frequently want the quickest route to optimal outcomes with the least
                            amount of effort, yet SEO calls for a significant amount of effort and time. There is no SEO
                            approach where changes can be made now and expected to show up tomorrow. Long-term SEO
                            projects require daily work and ongoing activity.</p>

                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/courses-02.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Wordpress plugins</h4>
                          <p>For each capability, we have whittled down the available choices and chosen the best WordPress plugin. We considered the following factors when selecting the top plugins:

                            Features: We assessed each plugin to make sure the features it offered served the intended aims. Furthermore, we ensured that they could operate on any kind of WordPress website.
                            Credibility: From the official WordPress plugin directory, we choose a number of free WordPress plugins. For paid plugins, we've verified the developers' reliability to make sure they're secure to use.</p>
                          <p> The plugin should be compatible with current PHP and WordPress versions. Additionally, we chose plugins that have updates within the last three months.</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/courses-03.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Web Development</h4>
                          <p>Website design, development, and upkeep are together referred to as web development. It covers things like web publishing, web programming, database administration, and web design. It is the development of an online application, such as a website.</p>
                          <p> The phrase "web development" is made up of the following two words:
                            Websites, web pages, and other online resources are all referred to as "the web."
                            Development: This is the process of creating an application from nothing.</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/courses-04.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Web design</h4>
                          <p>The term "web design" describes the layout of websites that are seen online. Instead of software development, it often refers to the user experience components of website development.</p>
                          <p>A web designer is responsible for a website's look, feel, and occasionally even content. For instance, appearance refers to the colours, text, and pictures utilised. Information's organisation and categorization are referred to as its layout. An effective web design is user-friendly, aesthetically attractive, and appropriate for the target audience and brand of the website. Many websites focus on keeping things simple so that viewers won't be distracted or confused by additional information and functionality. Removing as many potential sources of user annoyance as possible is a crucial factor to take into account since the foundation of a web designer's output is a site that gains and nurtures the trust of the target audience.</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
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
          <h4>Aliquam tristique</h4>
          <p>Maecenas id tempus turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <div class="white-button">
            <a href="contact-us.html">Neque vitae</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Consequat dictum </h6>
            <h4>Testimonials</h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <p>“Maecenas nec orci vehicula, condimentum arcu vel, congue risus. Nam suscipit ut erat id cursus.
                Vivamus pulvinar aliquet arcu, sit amet iaculis justo commodo ut. In hendrerit dolor justo, ut consequat
                nulla ullamcorper nec”</p>
              <h4>Praesent nunc</h4>
              <span>Lorem ipsum</span>
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Maecenas nec orci vehicula, condimentum arcu vel, congue risus. Nam suscipit ut erat id cursus.
                Vivamus pulvinar aliquet arcu, sit amet iaculis justo commodo ut. In hendrerit dolor justo, ut consequat
                nulla ullamcorper nec”</p>
              <h4>Praesent nunc</h4>
              <span>Lorem ipsum</span>
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Maecenas nec orci vehicula, condimentum arcu vel, congue risus. Nam suscipit ut erat id cursus.
                Vivamus pulvinar aliquet arcu, sit amet iaculis justo commodo ut. In hendrerit dolor justo, ut consequat
                nulla ullamcorper nec”</p>
              <h4>Praesent nunc</h4>
              <span>Lorem ipsum</span>
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Maecenas nec orci vehicula, condimentum arcu vel, congue risus. Nam suscipit ut erat id cursus.
                Vivamus pulvinar aliquet arcu, sit amet iaculis justo commodo ut. In hendrerit dolor justo, ut consequat
                nulla ullamcorper nec”</p>
              <h4>Praesent nunc</h4>
              <span>Lorem ipsum</span>
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Maecenas nec orci vehicula, condimentum arcu vel, congue risus. Nam suscipit ut erat id cursus.
                Vivamus pulvinar aliquet arcu, sit amet iaculis justo commodo ut. In hendrerit dolor justo, ut consequat
                nulla ullamcorper nec”</p>
              <h4>Praesent nunc</h4>
              <span>Lorem ipsum</span>
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Maecenas nec orci vehicula, condimentum arcu vel, congue risus. Nam suscipit ut erat id cursus.
                Vivamus pulvinar aliquet arcu, sit amet iaculis justo commodo ut. In hendrerit dolor justo, ut consequat
                nulla ullamcorper nec”</p>
              <h4>Praesent nunc</h4>
              <span>Lorem ipsum</span>
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Maecenas nec orci vehicula, condimentum arcu vel, congue risus. Nam suscipit ut erat id cursus.
                Vivamus pulvinar aliquet arcu, sit amet iaculis justo commodo ut. In hendrerit dolor justo, ut consequat
                nulla ullamcorper nec”</p>
              <h4>Praesent nunc</h4>
              <span>Lorem ipsum</span>
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Maecenas nec orci vehicula, condimentum arcu vel, congue risus. Nam suscipit ut erat id cursus.
                Vivamus pulvinar aliquet arcu, sit amet iaculis justo commodo ut. In hendrerit dolor justo, ut consequat
                nulla ullamcorper nec”</p>
              <h4>Praesent nunc</h4>
              <span>Lorem ipsum</span>
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/quote.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">

            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7151.84524236698!2d-122.19494600413192!3d47.56605883252286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490695e625f8965%3A0xf99b055e76477def!2sNewcastle%20Beach%20Park%20Playground%2C%20Bellevue%2C%20WA%2098006%2C%20USA!5e0!3m2!1sen!2sth!4v1644335269264!5m2!1sen!2sth"
              width="100%" height="420px" frameborder="0"
              style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
            <div class="row">
              <div class="col-lg-6">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <h4>Email</h4>
                  <span> <a href="mailto:admin@goatcode.net">admin@goatcode.net</a></span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Mobile</h4>
                  <span> <a href="tel:+5555555555">555-555-5555</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6> Aliquam tristique</h6>
                  <h4>Reach Out<em> To Us</em></h4>
                  <p>If You Don't Notify Us About Your Issue, We Can't Resolve It For You!</p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email"
                    required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
		<!--
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 GoatCode Software Solutions. All Rights Reserved.</p>
        </div>
		-->
      </div>
    </div>
  </section>
<?php get_footer(); ?>
