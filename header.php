<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Lato|Playfair+Display" rel="stylesheet">
  <link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.3/dist/leaflet.css" />
  <link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.3/dist/leaflet.css" />
  <link rel="stylesheet" href="wp-content/themes/wordpress_starter_theme/magic.min.css">
  <link rel="stylesheet" href="wp-content/themes/wordpress_starter_theme/animate.css">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container"> <!-- closes in footer.php -->
    <header class="clearfix">
      <div class="header_image images clearfix head_one">
        <?php $my_image = get_field('my_image') ?>
        <img src=" <?php echo $my_image['url'] ?>" class="image head-shrink"> 
      </div>
      <div class="header_image images clearfix head_two">
        <?php $my_image_two = get_field('my_image_two') ?>
        <img src=" <?php echo $my_image_two['url'] ?>" class="image head-shrink">
      </div>

      <div class="header_content content clearfix">
        <nav class="header_nav page_nav">
          <ul class="clearfix">
            <a data-scroll href="#portfolio"><li>Portfolio</li></a>
           <!--  <a href=""><li>Blog</li></a> -->
            <a data-scroll href="#contact"><li>Contact</li></a>
          </ul>
        </nav>
        <div class="header__hamburger">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 640" enable-background="new 0 0 512 512" xml:space="preserve"><g><path d="M511.987,373.778H290.186L256,402.932l-34.201-29.153H0.013v28.998c0,16.029,12.983,29.029,29.014,29.029h453.947   c16.015,0,29.014-13,29.014-29.029l0,0V373.778z"/><path d="M107.727,276.501h-78.7l0,0c-16.03,0-29.014,12.969-29.014,28.999s12.983,29.03,29.014,29.03h146.759L107.727,276.501z"/><path d="M482.974,276.501L482.974,276.501L482.974,276.501h-78.715l-68.046,58.029h146.761l0,0c16.015,0,29.014-13,29.014-29.03   S498.988,276.501,482.974,276.501z"/><path d="M256.001,80.194c-141.385,0-255.988,70.311-255.988,157.026h511.975C511.987,150.505,397.384,80.194,256.001,80.194z"/><g><polygon points="141.928,276.501 256.001,373.778 370.072,276.501   "/></g></g><!-- <text x="0" y="527" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by lastspark</text><text x="0" y="532" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text> --></svg>
        </div>
        
        <div class="header_container content_container">
          <p class="page">Who, Me?</p>
          <!-- <p class="name"><span>I'm</span> Ranjan</p>
          <p class="dungeon">Pronounced like <span>dungeon</span></p> -->
          <h1 class="title">Ranjan Subbiah</h1>
          <p class="body">I'm a front-end web developer based out of Toronto. I enjoy building clean, detail-oriented and accessible websites. My interest in coding developed as a result of a passion for mental health awareness and destigmatization. I believe technology holds the key to experiencing great mental healthcare around the globe.</p>
          <div class="more clearfix">
            <div class="decoration">
            </div>
            <div class="more_content">
              <ul class="header_social_nav clearfix">
                <a href="https://ca.linkedin.com/in/ranjanbuilds"><li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li></a>
                <a href="https://twitter.com/ranjanbuilds"><li><i class="fa fa-twitter-square" aria-hidden="true"></i></li></a>
              </ul>
              <h3 class="skillz_title">An Array of Skills</h3>
              <ul class="skillz clearfix">
                <li><span class="bracket">[</span></li>
                <li> 'Javascript',</li>
                <li> 'HTML5',</li>
                <li> 'CSS3',</li>
                <li> 'Responsive Design',</li>
                <li> 'Wordpress',</li>
                <li> 'Accessibility',</li>
                <li> 'Always Learning' </li>
                <li><span class="bracket">]</span></li>
              </ul>
              </div> <!-- /.more_content -->
          </div> <!-- /.more -->
        </div> <!-- /.header_container -->
       

      </div> <!-- /.header_content -->
    </header><!--/.header-->

