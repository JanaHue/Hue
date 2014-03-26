<!DOCTYPE html>
<html>
<head> 
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="icon" 
        type="image/png" 
        href=" <?php bloginfo('stylesheet_directory') ?>/i/favicon.png">
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  <script type="text/javascript" src="//use.typekit.net/bnt4wxy.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/mq.css">
  <link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
  
	<?php	if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
   wp_head(); ?>
	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory');?>/js/jQuery.js"><\/script>')</script>
	<script src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>



  <!-- //linking flexslider -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/flexslider.css" type="text/css">
  <script src="<?php bloginfo('template_directory');?>/js/jquery.flexslider.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<div class="header">
  <div class="innerWrapper clearfix">
    <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
      <?php include("logo.svg"); ?>
    </a>
    <a href="#" class="burger">☰</a>
    <?php wp_nav_menu( array( 'container' => false, 'menu' => 'primary' ) ); ?>
  </div> <!-- /.innerWrapper -->
</div><!--/.header-->

