<?php get_header();  ?>

<div class="main navChange">
  <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <section class="about" id="about">

          <div class="aboutFancy grid">

            <div class="seafoamSquare grid-cell"></div>

            <div class="avatar grid-cell">
              <img src="<?php echo the_field('about_image') ?>" alt="Lauren Greenway Profile Image">
            </div>

          </div>
          <figcaption class="grid-cell">
              <h4><?php the_field('about_me_caption'); ?></h4>
          </figcaption>
          <div class="aboutMe grid">
            <article>
              <h2> <?php the_field('about_me_title'); ?> </h2>
              <?php the_field('about_me'); ?>
            </article>
            <aside>
              <div class="sideColumn">
                <h3>D</h3>
                <h3>O</h3>
                <h3>P</h3>
                <h3>E</h3>
              </div>
            </aside>
          </div>

        </section> <!-- end about -->
      </div>
        <section class="portfolio" id="portfolio">
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
                <div class="portfolioDescription grid">
                  <p><?php the_content(); ?></p>
                  <a href="<?php echo the_field('project_link') ?>"><button class="btn">View Live <i class="fa fa-long-arrow-right animated wiggle" aria-hidden="true"></i></button></a>
                </div>
                <div class="portfolioImage">
                  <img src="<?php the_post_thumbnail_url('large') ?>" alt="">
                </div>
              </div>
                
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </section> <!-- end portfolio -->
        <section class="skills container grid" id="skills">
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-html5 "></span>
            </div>
            <p>HTML 5</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-css3" ></span>
            </div>
            <p>CSS 3</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-sass" ></span>
            </div>
            <p>Sass</p>
          </div>          
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-javascript"></span>
            </div>
            <p>JavaScript</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-jquery"></span>
            </div>
            <p>jQuery</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-gulp" ></span>
            </div>
            <p>Gulp</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-terminal"></span>
            </div>
            <p>Command Line</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-wordpress"></span>
            </div>
            <p>Wordpress</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-git"></span>
            </div>
            <p>Git</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-github_badge"></span>
            </div>
            <p>GitHub</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-sublime"></span>
            </div>
            <p>Sublime Text</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-trello"></span>
            </div>
            <p>Trello</p>
          </div>
        </section>
        <section class="contact container" id="contact">
          <div class="">
            <h2>Contact Me</h2>
          </div>
          <div class="grid">
            
            <form action="http://www.focuspocus.io/magic/0d32c7e6f3ee6ffb8838f2fb5f125b12" method="POST" class="emailMe" autocomplete="off" name="emailMe">
              <!-- <label for=""></label> -->
              <input type="text" placeholder="Your Name" class="half">
              <input type="email" placeholder="E-mail Address" class="half">
              <input type="text" placeholder="Subject" class="hundoP">
              <textarea name="Message" id="" rows="10" placeholder="Say something!" class="hundoP"></textarea>
              <input type="submit" value="Send Message" class="btn" class="hundoP">
              
            </form>
            <div class="map"></div>
          </div>
        </section>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>