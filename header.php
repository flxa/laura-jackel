<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package laura_jackel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body class="container" style="zoom: 1;">

<nav  id="main-nav" class="container visible" role="navigation">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'laura_jackel' ); ?></a>

	<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	<div class="site-width content">
		<a href="/" class="logo icon-lj-logo"><span>laurajackel.com</span></a>
		<span class="hamburger icon-menu" id="toggle-menu"><span>Menu</span></span>
	</div>
</nav><!-- #site-navigation -->
<nav id="main-nav-drop" class="container" style="opacity: 1;">
	<div class="site-width">
		<div class="contents">
			<ul class="sections">
				<?php wp_nav_menu( array('menu' => 'Pages' )); ?>
			</ul>

			<div class="group-title"><h6>Portfolio</h6></div>
			
			<div class="stories">

				<?php $args = array(
					'numberposts'      => 5,
					'offset'           => 0,
					'category'         => '',
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'include'          => '',
					'exclude'          => '',
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'post',
					'post_mime_type'   => '',
					'post_parent'      => '',
					'post_status'      => 'publish',
					'suppress_filters' => true ); ?>
				<?php $posts_array = get_posts( $args ); ?>
				<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
				<div class="nav-item">
					<h6><i class="icon-calendar"></i> <?php the_date(); ?></h6>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</div>
				<?php endforeach; 
				wp_reset_postdata();?>
					
			</div>

			<div class="social">
				<ul>
					<li><a href="http://instagram.com/laurajackel"><span class="social-icons icon icon-instagram"></span>Instagram</a></li>
					<li><a href="https://twitter.com/laurajackel"><span class="social-icons icon icon-twitter"></span>Twitter</a></li>
					<li><a href="http://facebook.com/laurajackel"><span class="social-icons icon icon-facebook"></span>Facebook</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<div id="page-container">
	<div id="masthead" class="story-container hfeed site">
		<div class="story-content">
			<section class="intro <?php echo str_replace(array(" ","!"),"",get_the_title()); ?>">
				<div class="site-width">
					<div class="copy-width">
						<h5 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h5>
						<h1>Writer</h1>
					</div>
				</div>
			</section>