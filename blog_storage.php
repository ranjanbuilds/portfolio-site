<?php get_header();  ?>

<main>
    <section id="portfolio" class="portfolio clearfix">
        <div class="portfolio_content content">
          
          <div class="right_left page_nav">
            <ul>
              <li class="next_portfolio">Next</li>
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
                    <p class="body"><?php the_field('short_desc') ?> </p> <!-- description of portfolio piece -->
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
        <?php if($portfolio->have_posts()): ?>
          <?php while($portfolio->have_posts()): $portfolio->the_post(); ?>
            
            <div class="images_carousel carousel_portfolio <?php echo $post->post_name ?>">
             <?php while(have_rows('portfolio_images')): the_row() ?> 
               <?php $portfolio_image = get_sub_field('portfolio_image') ?>
               <img src=" <?php echo $portfolio_image['url'] ?>" class="image"> 
             <?php endwhile ?>
            </div>
          
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div> <!-- /.portfolio_image -->

    </section> <!-- portfolio -->

    <section class="blog clearfix">
      <?php $blog = new WP_Query(
        array(
          'post_type' => 'post',
          'posts_per_page' => -1,
          'order' => 'ASC'
        )
      ); ?>
      <div class="blog_image images">
        <?php if($blog->have_posts()): ?>
          <?php while($blog->have_posts()): $blog->the_post(); ?>
            <div class="images_carousel carousel_blog">
              <?php $blog_image = get_field('blog_image') ?>
              <img src="<?php echo $blog_image['url'] ?> " class="image" alt="">
            </div>
          <?php endwhile ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div> <!-- /.blog_image -->

      <div class="blog_content content">

        <div class="right_left page_nav">
          <ul>
            <li class="next_blog">Next</li>
          </ul>
        </div>

        <div class="blog_container content_container">
            <h1 class="page">Blog</h1>

            <?php if($blog->have_posts()): ?>
              <?php while($blog->have_posts()): $blog->the_post(); ?>
                <div class="blog_content_container clearfix <?php echo $post->post_name ?>">
                  
                  <h3 class="title"><?php the_title(); ?></h3>  <!-- title of blog post -->
                  <p class="body"><?php the_field('big_taste') ?></p> 
                  
                  <div class="blog_more more"> 
                    <div class="decoration">
                    </div>
                    <div class="more_content">
                      <a href=" <?php the_field('demo_link') ?> " class="content_demo_link">View Post</a><!-- link to live demo  --> 
                    </div>
                  </div>

                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </div> <!-- /.blog_container -->
        </div> <!-- /.blog_content -->
      
    </section> <!-- /.blog -->

    <section class="blog_media_query clearfix">
      <?php $blog = new WP_Query(
        array(
          'post_type' => 'post',
          'posts_per_page' => -1,
          'order' => 'ASC'
        )
      ); ?>
      
      <div class="blog_content content">

        <div class="right_left page_nav">
          <ul>
            <li class="next_blog">Next</li>
          </ul>
        </div>

        <div class="blog_container content_container">
            <h1 class="page">Blog</h1>

            <?php if($blog->have_posts()): ?>
              <?php while($blog->have_posts()): $blog->the_post(); ?>
                <div class="blog_content_container clearfix <?php echo $post->post_name ?>">
                  
                  <h3 class="title"><?php the_title(); ?></h3>  <!-- title of blog post -->
                  <p class="body"><?php the_field('big_taste') ?></p> 
                  
                  <div class="blog_more more"> 
                    <div class="decoration">
                    </div>
                    <div class="more_content">
                      <a href=" <?php the_field('demo_link') ?> " class="content_demo_link">View Post</a><!-- link to live demo  --> 
                    </div>
                  </div>

                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </div> <!-- /.blog_container -->
        </div> <!-- /.blog_content -->
        <div class="blog_image images">
          <?php if($blog->have_posts()): ?>
            <?php while($blog->have_posts()): $blog->the_post(); ?>
              <div class="images_carousel carousel_blog">
                <?php $blog_image = get_field('blog_image') ?>
                <img src="<?php echo $blog_image['url'] ?> " class="image" alt="">
              </div>
            <?php endwhile ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div> <!-- /.blog_image -->
      
    </section> <!-- /.blog_media_query -->

  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>