<?php get_header();  ?>

<div class="main">
  <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <section class="about" id="about">
          <div class="aboutFancy grid">
            <div class="seafoamSquare grid-cell"></div>
            <svg width='0' height='0'>
              <defs>
                <clipPath id="clipping" clipPathUnits="objectBoundingBox">
                  <polygon points="0.5 0, 0 1, 1 1" />
                </clipPath>
              </defs>
            </svg>
            <div class="avatar grid-cell">
              <img src="<?php echo the_field('about_image') ?>" alt="Lauren Greenway Profile Image">
            </div>
            <svg width='0' height='0'>
              <defs>
                <clipPath id="clipping2" clipPathUnits="objectBoundingBox">
                  <polygon points="0 0, 0.5 1, 1 0" />
                </clipPath>
              </defs>
            </svg>

            <svg width='0' height='0'>
              <defs>
                <clipPath id="clipping3" clipPathUnits="objectBoundingBox">
                  <polygon points="0 0, 0.5 1, 1 0" />
                </clipPath>
              </defs>
            </svg>
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
                <span>H</span>
                <span>Y</span>
                <span>P</span>
                <span>E</span>
              </div>
            </aside>
          </div>

        </section> <!-- end about -->
      </div>
        <section class="portfolio" id="portfolio">
          <div class="title">
            <h2>Portfolio</h2>
          </div>
          
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
                <h3><?php the_field('project_title') ?></h3>
                <?php the_content(); ?>
                <p><?php the_field('project_tags') ?></p>
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
          <div class="title">
            <h2>Technical Skills</h2>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <i class="devicons devicon-html5-plain"></i>
            </div>
            <p>HTML 5</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <i class="devicons devicon-css3-plain"></i>
            </div>
            <p>CSS 3</p>
          </div>      
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <i class="devicons devicon-javascript-plain"></i>
            </div>
            <p>JavaScript</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <i class="devicons devicon-react-original"></i>
            </div>
            <p>React</p>
          </div>

          <div class="grid-cell">
            <div class="icon animated wiggle">
              <i class="devicons devicon-jquery-plain"></i>
            </div>
            <p>jQuery</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <i class="devicons devicon-sass-original"></i>
            </div>
            <p>Sass</p>
          </div>     
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <i class="devicons devicon-gulp-plain"></i>
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
              <i class="devicons devicon-wordpress-plain"></i>
            </div>
            <p>Wordpress</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <i class="devicons devicon-git-plain"></i>
            </div>
            <p>Git</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <i class="devicons devicon-github-plain"></i>
            </div>
            <p>GitHub</p>
          </div>
          <div class="grid-cell">
            <div class="icon animated wiggle">
              <span class="devicons devicons-sublime"></span>
            </div>
            <p>Sublime Text</p>
          </div>
        </section> <!-- end skills -->
        <section class="contact container" id="contact"> <!-- contact start -->
          <div class="title">
            <h2>Contact Me</h2>
          </div>
          <div class="grid">
            
            <form action="http://www.focuspocus.io/magic/0d32c7e6f3ee6ffb8838f2fb5f125b12" method="POST"  autocomplete="off" name="emailMe">
              <!-- <label for=""></label> -->
              <input type="text" placeholder="Your Name" class="half" required="true" name="Name">
              <input type="email" placeholder="E-mail Address" class="half" required="true" name="Email Address">
              <input type="text" placeholder="Subject" class="hundoP" name="Subject">
              <textarea name="Message" id="" rows="10" placeholder="Say something!" class="hundoP" name="Message"></textarea>
              <input type="submit" value="Send Message" class="btn" class="hundoP">
              
            </form>

            <div class="map">
              <div class="overlay" onClick="style.pointerEvents='none'"></div>
            </div>
          </div>
        </section> <!-- contact end -->
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>