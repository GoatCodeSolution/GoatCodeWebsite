<?php /* Template Name: Contact*/ ?>
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
            <h4>Say Hello GoatCode</h4>
            <h1>Contact Us</h1>
            <h4>If you don't notify us about your issue, we can't resolve it for you!</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>More Info</h6>
            <h4>Read More <em>About Us</em></h4>
          </div>
          <p>
            The foundation of GoatCode Software Solutions was the idea that the Internet links people, not just machines. We view technology as a tool that facilitates the development of workable solutions for problems encountered in daily life and in business.<br>
Human Service Solutions was founded in 2020 with the goal of providing groups who are typically underserved with Internet presence development services with tested Internet methods. In order to meet the different demands of charitable organisations, B2B companies, healthcare providers, startups, consultants, membership groups, and a variety of other organisational entities, our service menu and clientele have expanded over time. Our main objective is to provide real-world solutions that are mission-driven, goal-driven, and suited to the particular requirements of the people we work with.<br>

We are able to create customer solutions that are results-driven and appealing in the real world by fusing our innate abilities with research and creative delivery. In addition to our clients, we also want to please their clients and constituencies.<br>

We are a small, nimble team of senior-level designers, developers, strategists, and Internet marketing experts with years of expertise. Due to our expertise, emphasis on individualised service, and low overhead, we are able to produce high-quality outcomes in a way that is both economical and efficient in general.
          </p>
          <!-- <p>Trust fund nocore broklyn humblebrag mustache
            pork kitsch, bicycle rights hexagon schlitz keytar palo is
            santo drinking vinegar fam ramps. <br><br>Four dollar toast and
            edison bulb vinyl, listicle hashtag pug scenester typewrit
            er yuccie street artboard or whatever to fill place.</p>
          <ul>
            <li>- Selfies you probably haven't heard of them.</li>
            <li>- Tousled cold-pressed chicharrones yuccie.</li>
            <li>- Pabst iPhone chartreuse shabby chic tumeric.</li>
            <li>- Scenester normcore mumblecore snackwave.</li>
          </ul> -->
        </div>
        <div class="col-lg-6 offset-lg-1 align-self-center">
          <div class="row">
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">125</div>
                <div class="count-title">Finished Projects</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">11</div>
                <div class="count-title">Years Experience</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">87</div>
                <div class="count-title">Happy Clients</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">24</div>
                <div class="count-title">Awwards Won</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php get_footer(); ?>