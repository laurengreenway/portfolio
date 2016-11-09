<?php get_header();  ?>

<div class="main">
  <div class="container">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <section class="about" id="about">

          <div class="aboutFancy grid">

            <div class="seafoamSquare grid-cell">
            </div>

            <div class="avatar grid-cell">
              <img src="<?php echo the_field('about_image') ?>" alt="Lauren Greenway Profile Image">
            </div>

          </div>
          <figcaption class="content grid-cell">
              <h4><?php the_field('about_me_caption'); ?></h4>
          </figcaption>

          <div class="content">
            <h2> <?php the_field('about_me_title'); ?> </h2>
            <?php the_field('about_me'); ?>
          </div>
          <div class="sideColumn">
            <h3>D</h3>
            <h3>O</h3>
            <h3>P</h3>
            <h3>E</h3>
          </div>

        </section> <!-- end about -->
      </div>
        <section class="portfolio">
          <h2>PORTFOLIO AND SHIT</h2>
            <?php  
              $portfolioArgs = array(
                'post_type' => 'portfolio_items'
              );
              $portfolioLoop = new WP_Query($portfolioArgs);

              if($portfolioLoop->have_posts()) while($portfolioLoop->have_posts()) : $portfolioLoop->the_post();
            ?>
              <div class="portfolioItem grid">
                <div class="sideways">
                  <h3><?php the_title(); ?></h3>
                </div>
                <div class="portfolioDescription">
                  <p><?php the_content(); ?></p>
                </div>
                <div class="portfolioImage">
                  <img src="<?php the_post_thumbnail_url('large') ?>" alt="">
                </div>
              </div>
                
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </section> <!-- end portfolio -->
        <section class="skills container grid">
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-html5"></span>
            <p>HTML 5</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-css3"></span>
            <p>CSS 3</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-sass"></span>
            <p>Sass</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-javascript"></span>
            <p>JavaScript</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-jquery"></span>
            <p>jQuery</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-gulp"></span>
            <p>Gulp</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-terminal"></span>
            <p>Command Line</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-wordpress"></span>
            <p>Wordpress</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-git"></span>
            <p>Git</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-github_badge"></span>
            <p>GitHub</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-sublime"></span>
            <p>Sublime Text</p>
          </div>
          <div class="icon grid-cell animated wiggle">
            <span class="devicons devicons-trello"></span>
            <p>Trello</p>
          </div>
          
        </section>
        <section class="contact">
          <div class="content grid">
            <?php the_content(); ?>
          </div>
        </section>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>