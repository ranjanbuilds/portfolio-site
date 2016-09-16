<?php get_header();  ?>

<div class="main">
  <div class="container">
    
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

      <h2>Portfolio</h2>
      <?php $portfolio = new WP_Query(
        array(
          'post_type' => 'portfolio',
          'posts_per_page' => -1,
          'order' => 'ASC'
        )
      ); ?>
      <?php if($portfolio->have_posts()): ?>
        <?php while($portfolio->have_posts()): $portfolio->the_post(); ?>
          <div class=" <?php echo $post->post_name ?>">
            <h3><?php the_title(); ?></h3>
            <p><?php the_field('short_desc') ?></p>
            <?php while(have_rows('images')): the_row() ?>
              <?php $image = get_sub_field('image') ?>
              <img src=" <?php echo $image['sizes']['medium'] ?> ">
              <p><em><?php the_sub_field('caption') ?></em></p>
            <?php endwhile ?>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <h2>Blog</h2>
      <?php $blog = new WP_Query(
        array(
          'post_type' => 'post',
          'posts_per_page' => -1,
          'order' => 'ASC'
        )
      ); ?>
      <?php if($blog->have_posts()): ?>
        <?php while($blog->have_posts()): $blog->the_post(); ?>
          <div class=" <?php echo $post->post_name ?>">
            <h3><?php the_title(); ?></h3>
            <?php the_field('short_desc') ?>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div> <!-- /,content -->


    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>