<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<!-- A Mighty WordPress Theme (http://meetmighty.com) -->

	<head>
		<meta name="google-site-verification" content="2LtTwq_DCANh3Jm_4xUgkiKrobYZsV4lp-lbAuAaQNo" />
		<!-- Meta -->
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Title -->
		<title><?php if ( is_front_page() ) { ?><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?><?php } else { ?><?php wp_title( '-', true, 'right' ); ?><?php bloginfo( 'name' ); ?><?php } ?></title>

		<!-- RSS & Pingbacks -->
		<?php if ( of_get_option( 'feedburner-url' ) ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> <?php _e( 'RSS Feed', 'mighty' ); ?>" href="http://feeds.feedburner.com/<?php echo of_get_option( 'feedburner-url' ); ?>" />
		<?php else : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> <?php _e( 'RSS Feed', 'mighty' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
		<?php endif; ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<!-- Favicon -->
		<?php if ( of_get_option( 'custom-favicon' ) ) : ?>
			<link rel="shortcut icon" href="<?php echo of_get_option( 'custom-favicon' ); ?>" />
		<?php else : ?>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/fav.ico" />
		<?php endif; ?>

		<!-- Hooks -->
		<?php wp_head(); ?>
	</head>


	<body <?php body_class( 'fadeDown' ); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">

	    <header id="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

		<?php if ( is_blog() ) :

			$blogpage = get_option( 'page_for_posts' );
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $blogpage ), 'full' );

			if (is_single()) {
				if ( $thumb == true ) :
			?>
				<div class="masthead" style="background-image: url('<?php echo $thumb['0']; ?>');"></div>
			<?php
				endif;
			} else {
				?>
					<div class="masthead" style="background-image: url('http://andrebax-com-br.umbler.net/wp-content/uploads/2016/06/banner2.jpg');"></div>
				<?php
			}
		else :

			$pagebg = get_queried_object();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $pagebg->ID ), 'full' ); ?>

		    <?php if ( $thumb == true ) : ?>
		    	<div class="masthead" style="background-image: url('<?php echo $thumb['0']; ?>');"></div>
		    <?php endif;

		endif; ?>

		    <div class="wrap clearfix">

			    <section id="header-top" class="clearfix">

				    <!-- Logo -->
					<div class="logo" itemprop="headline">
					<?php if ( of_get_option( 'logo-plain' ) == 1 ) : ?>
						<a href="<?php echo home_url( '/' ) ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php elseif ( of_get_option( 'logo-custom' ) ) : ?>
						<a href="<?php echo home_url( '/' ) ?>" title="<?php bloginfo( 'name' ); ?>" class="custom"><img src="<?php echo of_get_option( 'logo-custom' ); ?>" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
					<?php else : ?>
						<a href="<?php echo home_url( '/' ) ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php endif; ?>
					</div>

				    <!-- Navigation -->
				    <nav role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

						<?php if ( has_nav_menu( 'header-menu' ) ) : ?>

						    <?php
							    wp_nav_menu(
								    array(
									    'theme_location' => 'header-menu',
									    'container'      => false,
									    'menu_id'        => 'nav',
									    'menu_class'     => 'header-menu',
									    'depth'          => '4'
								    )
							    );
						    ?>

						<?php else : ?>

						<ul id="nav">
							<?php wp_list_pages( 'title_li=&depth=1' ); ?>
						</ul>

						<?php endif; ?>

					</nav>

				</section>

				<?php get_template_part( 'header', 'meta' ); ?>

			</div>

		</header>
