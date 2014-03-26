<?php get_header(); ?>
<div class="section">
  <div class="innerWrapper">
	<div class="semiSkinny">
		<h2><?php printf( __( 'Tag Archives: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' ); ?></h2>
		<?php get_template_part( 'loop-archives', 'tag' ); ?>
	</div>
  </div>	
</div>
<?php get_footer(); ?>

