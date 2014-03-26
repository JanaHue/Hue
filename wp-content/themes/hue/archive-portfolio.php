<?php get_header();  ?>
<div class="section">
  <div class="innerWrapper">
    <div class="full clearfix portfolio">
    <h2>Portfolio </h2>
      <?php // Start the loop ?>
		<div class="gallery clearfix">
      <?php $i=1; ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		  <?php if ( has_post_thumbnail()) : ?>
		  <div class="polaroid polaroid<?php echo $i; ?>">
        
        <?php if ( $wp_query->current_post == 0 && !is_paged() ):  ?>
          
          <div class="polarPic">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
              <?php the_post_thumbnail('aspect4-3'); ?>
            </a>
          </div> <!-- //end polarpic -->

          <div class="specs">
            <h3><?php the_title(); ?></h3>
            <p><?php the_field("excerpt") ?></p>
            <?php $technologies = get_the_terms($post->ID, 'technologies'); ?>
            <ul class="skills">
              <?php foreach ($technologies as $tech) {
                $url = get_bloginfo('url') . "/" . $tech->taxonomy . "/" . $tech->slug;
                echo "<li><a href ='$url'>$tech->name</a></li>";
              } ?>
            </ul>
          </div> <!-- // end specs -->

        <?php else: ?>

            <div class="polarPic">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                <?php the_post_thumbnail('aspect3-4'); ?>
              </a>
            </div> <!-- //end polarpic -->

            <div class="specs">
              <h3><?php the_title(); ?></h3>
              <?php $technologies = get_the_terms($post->ID, 'technologies'); ?>
              <ul class="skills">
                <?php foreach ($technologies as $tech) {
                  $url = get_bloginfo('url') . "/" . $tech->taxonomy . "/" . $tech->slug;
                  echo "<li><a href ='$url'>$tech->name</a></li>";
                } ?>
              </ul>
            </div> <!-- // end specs -->
        <?php endif; ?> 

      </div> <!-- /polaroid -->
		  <?php endif; ?>
      <?php $i++; endwhile; // end the loop?>
    </div> <!-- end gallery -->
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>



