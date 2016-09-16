<?php get_header();  ?>

<main>
    <section id="portfolio" class="portfolio clearfix">
        <div class="portfolio_content content">
          
          <div class="right_left page_nav">
            <ul>
              <li class="prev_portfolio"><</li>
              <li class="next_portfolio">></li>

            </ul>
          </div>
          
          <div class="portfolio_container content_container">

              <h1 class="page">Portfolio</h1>

              <?php $portfolio = new WP_Query(
                array(
                  'post_type' => 'portfolio',
                  'posts_per_page' => -1,
                  'order' => 'ASC'
                )
              ); ?>
              <?php if($portfolio->have_posts()): ?>
                <?php while($portfolio->have_posts()): $portfolio->the_post(); ?>
                  <div class="portfolio_content_container clearfix <?php echo $post->post_name ?> ">
                    
                    <h3 class="title"><?php the_title(); ?></h3>  <!-- title of portfolio piece -->
                    <div class="body_container">
                      <p class="body"><?php the_field('short_desc') ?> </p> <!-- description of portfolio piece -->
                    </div>
                    <div class="body_container_two">
                      <p class="body_two"><?php the_field('shorter_description') ?> </p>
                    </div>
                    <div class="portfolio_more more"> 
                      <div class="decoration">
                      </div>
                      <div class="more_content">
                        <a href=" <?php the_field('demo_link') ?> " class="content_demo_link">View Project</a><!-- link to live demo  --> 
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php endif; ?>


          </div><!--  /.box-container -->
          
        </div> <!-- /.portfolio_content -->
      
      <div class="portfolio_image images">
        
            
            <div class="box">
              <div class="all_devices">
                <div class="laptop">
                  <?php if($portfolio->have_posts()): ?>
                      <?php while($portfolio->have_posts()): $portfolio->the_post(); ?>
                          <div class="images_carousel carousel_portfolio">
                            <?php while(have_rows('portfolio_images')): the_row() ?>
                              <?php $image_laptop = get_sub_field('portfolio_image_laptop') ?>
                                  <img src=" <?php echo $image_laptop['url'] ?> " alt="">
                            <?php endwhile ?>
                          </div>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                </div>
                <div class="other clearfix">
                  <div class="other_tablet">
                    <div class="tablet">
                      <?php if($portfolio->have_posts()): ?>
                          <?php while($portfolio->have_posts()): $portfolio->the_post(); ?>
                              <div class="images_carousel carousel_portfolio2">
                                <?php while(have_rows('portfolio_images')): the_row() ?>
                                  <?php $image_tablet = get_sub_field('portfolio_image_tablet') ?>
                                      <img src=" <?php echo $image_tablet['url'] ?> " alt="">
                                <?php endwhile ?>
                              </div>
                          <?php endwhile; ?>
                          <?php wp_reset_postdata(); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="other_phone">
                    <div class="phone">
                      <?php if($portfolio->have_posts()): ?>
                          <?php while($portfolio->have_posts()): $portfolio->the_post(); ?>
                              <div class="images_carousel carousel_portfolio3">
                                <?php while(have_rows('portfolio_images')): the_row() ?>
                                  <?php $image_phone = get_sub_field('portfolio_image_phone') ?>
                                      <img src=" <?php echo $image_phone['url'] ?> " alt="">
                                <?php endwhile ?>
                              </div>
                          <?php endwhile; ?>
                          <?php wp_reset_postdata(); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div> <!-- /.all_devices -->
            </div>
             
          
      </div> <!-- /.portfolio_image -->

    </section> <!-- portfolio -->

            <!-- <?php while(have_rows('portfolio_images')): the_row() ?> 
              <div class="box">
                <div class="all_devices">
                  <div class="laptop">
                    <?php $portfolio_image_laptop = get_sub_field('portfolio_image_laptop') ?>
                    <img src=" <?php echo $portfolio_image_laptop['url'] ?> " alt="">
                  </div>
                  <div class="other clearfix">
                    <div class="other_tablet">
                      <div class="tablet">
                        <img src="tablet.png" alt="">
                      </div>
                    </div>
                    <div class="other_phone">
                      <div class="phone">
                        <img src="phone.png" alt="">
                      </div>
                    </div>
                  </div>
                </div> <!-- /.all_devices -->
              </div>
            <?php endwhile ?> -->
<!--             <div class="images_carousel carousel_portfolio <?php echo $post->post_name ?>">
             <?php while(have_rows('portfolio_images')): the_row() ?> 
               <?php $portfolio_image = get_sub_field('portfolio_image') ?>
               <img src=" <?php echo $portfolio_image['url'] ?>" class="image"> 
             <?php endwhile ?>
            </div> -->
          
          


  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>