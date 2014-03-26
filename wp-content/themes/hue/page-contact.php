<?php 

/*
	Template Name: Contact Page
*/ 

get_header();  ?>
<div class="section">
  <div class="innerWrapper">
    <div class="full contact clearfix">
    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

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
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>