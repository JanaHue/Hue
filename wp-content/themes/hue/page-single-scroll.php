<?php

/*
	Template Name: Single Scroll Page
*/ 

get_header();  ?>

<div class="section sectHome" id="home">
  <div class="innerWrapper">
    <div class="full home">
      <?php // Start the loop for the default page?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="helloCircle">
        <?php the_content(); ?>
        </div>
      <?php endwhile; // end the loop for the default page?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<!-- /*====================================================================================
                              About Section Starts Here 
====================================================================================*/  -->
<div class="section">
  <div class="innerWrapper">
    <div class="full about clearfix">
      
      <?php $about = new WP_Query(array(
        'post_type' => 'page',
        'page_id' => 19
      )); ?>

      <?php if ( $about->have_posts() ) while ( $about->have_posts() ) : $about->the_post(); ?>
          <?php $headshot =  get_field('head_shot'); ?>
          <img src="<?php echo $headshot["sizes"]["pthumb"] ?>" alt="">
          <div class="content">
            <?php the_content(); ?>  
          </div>
      <?php endwhile; ?>

    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<!-- /*====================================================================================
                              Contact Section Starts Here 
====================================================================================*/ --> 
<div class="section">
  <span class="anchor" id="contact"></span>
  <div class="innerWrapper">
    <div class="full contact clearfix">
      
      <?php $contact = new WP_Query(array(
        "page_id" => 21
      )); ?>

      <?php if ( $contact->have_posts() ) while ( $contact->have_posts() ) : $contact->the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <div class="touchMe">
            <p class="deets myEmail">
              <?php the_field("email"); ?>
            </p>
            <p class="deets myPhone">
              <?php the_field("phone") ?>
            </p>
            <p class="deets myTwitter">
              <?php the_field("twitter") ?>
            </p>
          </div>

          <div class="touchYou">
            
            <?php the_content(); ?>
            
          </div>

      <?php endwhile; ?>

    </div>
  </div>
</div>



<?php get_footer(); ?>
