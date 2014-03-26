<?php /* If there are no posts to display, such as an empty archive page */ ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<section class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php /* if there are posts, Start the Loop. */ ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="authorMeta">
				<h6 class="author"> Written by <?php the_author_posts_link(); ?> </h6>
				<a href="https://twitter.com/jana_hue" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @jana_hue</a>
			</div>
			<div class="specTags">
			    <?php
			    if(get_the_tag_list()) {
			        echo get_the_tag_list('<ul class="clearfix"><li>','</li><li>','</li></ul>');
			    }
			    ?>
			</div>
			<div class="postDeets">
			   <div class="postDate">
			        <p class="day"> <?php echo get_the_date("j"); ?> </p>
			        <p class="month"> <?php echo get_the_date("M"); ?> </p>
			   </div>  
			</div>
			</div>

			<section class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
			</section><!-- .entry-content -->

			<div class="share">
			  <a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="jana_hue">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
			  <div class="fb-share-button" data-href="http://janahue.com" data-type="button"></div>
			  <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
			</div>
		</article><!-- #post-## -->

		<?php comment_form(array(
            'label_submit' => 'Holla!'
          ));
		?>


<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <?php /* If we have the wp-pagenavi plugin installed */  ?>
  <?php if(function_exists('wp_pagenavi')) : ?>
     <div class="pnavi"><?php wp_pagenavi(); ?></div>
  <?php /* Otherwise just give me regular next/prev links ?> */ ?>
  
  <?php else : ?>
          <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries')); ?></div>
          <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;')); ?></div>
  <?php endif; ?>

<?php endif; ?>
