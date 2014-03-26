<?php get_header(); ?>
<div class="section">
   
  <div class="innerWrapper">

    <div class="skinny">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="entry-title"><?php the_title(); ?></h2>
          <div class="authorMeta">
            <h6 class="author"> Written by <?php the_author_posts_link(); ?> </h6>
            <a href="https://twitter.com/jana_hue" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @jana_hue</a>
        
          </div>
          <div class="postDeets">
             <div class="postDate">
                  <p class="day"> <?php echo get_the_date("j"); ?> </p>
                  <p class="month"> <?php echo get_the_date("M"); ?> </p>
            </div>
            <div class="specTags">
  
              <?php
              if(get_the_tag_list()) {
                  echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
              }
              ?>

            </div>
          </div>

          <div class="entry-content">
            <?php the_content(); ?>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->
        <div class="share">
          <a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="jana_hue">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
          <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-type="button"></div>
          <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
        </div>
        <?php //comments_template( '', true );

          comment_form(array(
            'label_submit' => 'Holla!'
          ));
         ?>

        <div id="nav-below" class="blogNav clearfix">
          <?php

            $next = get_next_post();
            $nextId = $next->ID;
            $prev = get_previous_post();
            $prevId = $prev->ID;

          ?>

          <?php if ($prevId): ?>
            <a href="<?php echo get_permalink($prevId); ?>" class="prevPost bubble-float-left">
              <?php include("prevArrow-01.svg"); ?>
              <?php the_field('short_headline',$prevId); ?>
            </a>
          <?php endif ?>

          <?php if ($nextId): ?>
            <a href="<?php echo get_permalink($nextId); ?>" class="nextPost bubble-float-right">
              <?php the_field('short_headline',$nextId); ?>
              <?php include("nextArrow-01.svg"); ?>
            </a>  
          <?php endif ?>

        </div><!-- #nav-below -->
      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.skinny -->
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>


