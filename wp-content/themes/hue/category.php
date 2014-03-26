<?php get_header(); ?>
<div class="section">
  <div class="innerWrapper">
    <div class="semiSkinny">
    	<h2><?php printf( __( 'Category Archives: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h2>
      <?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop-archives', 'category' ); ?>
	

    </div> <!-- /.skinny -->
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>