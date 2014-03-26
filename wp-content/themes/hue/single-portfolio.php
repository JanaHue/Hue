<?php get_header(); ?>
  <div class="section clearfix">
    <div class="innerWrapper">
      <div class="full clearfix">
        <?php
        if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
        
          <div class="pretty">
    				<div class="flexslider">
              <ul class="slides">
                <?php while(has_sub_field("images")) : ?>
                  <li>
                    <?php $image = get_sub_field("image"); ?>
                    <img src=" <?php echo $image["sizes"]["large"] ?>" alt="">
                  </li>
                  <?php endwhile; // end images loop?>
                </ul>
              </div>
          </div>

          <div class="theDirty">
            <?php the_content(); ?>


            <?php $technologies = get_the_terms($post->ID, 'technologies'); ?>


            <h3>Built Using:</h3>
            <ul class="skills">
              <?php foreach ($technologies as $tech) {
                $url = get_bloginfo('url') . "/" . $tech->taxonomy . "/" . $tech->slug;
                echo "<li><a href ='$url'>$tech->name</a></li>";
              } ?>
            </ul>
            <ul class="links">
              <li>          
                <?php if(get_field('github_link')): ?>
                  <a href= '<?php the_field("github_link"); ?>' target="_blank">
                  <?php include("github.svg"); ?>
                  <span>View the Code</span></a>
                <?php endif; ?>
              </li>
              <li>
                <?php if(get_field('live_url')): ?>
                  <a href= '<?php the_field("live_url"); ?>' target="_blank">
                  <?php include("ee.svg"); ?>
                  <span>See it Online</span></a>
                <?php endif; ?> 
              </li>    
            </ul>         
          </div>






        <?php endwhile; // end of the loop. ?>

      </div>
    </div> <!-- /.innerWrapper -->
  </div> <!-- /.section -->
<?php get_footer(); ?>