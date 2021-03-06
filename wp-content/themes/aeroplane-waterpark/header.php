<!doctype html>
<html <?php language_attributes(); ?>><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>
		<?php if(is_front_page()):?>
		<!-- Facebook Pixel Code -->
			<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','//connect.facebook.net/en_US/fbevents.js');

			fbq('init', '115616985442004');
			fbq('track', 'PageView');
			</script>
			<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=115616985442004&ev=PageView&noscript=1"
			/></noscript>
			<!-- End Facebook Pixel Code -->

			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/he_IL/sdk.js#xfbml=1&version=v2.3";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
		<?php endif;?>
		<?php 
			$logo = get_field('logo',option);
			$tagline = get_field('tagline',option);
			$phone = get_field('phone',option);
			$facebook = get_field('facebook',option);
		?>
		<div class="container row-offcanvas row-offcanvas-right">
			<header class="header">
				<div class="top-header hidden-xs clearfix">
					<div class="tagline pull-right "><?php echo $tagline?></div>
					<div class="site-phone pull-left"><span>לפרטים והזמנות </span> <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></div>
				</div>
				<nav>
      			  <div class="container-fluid">
        			  <div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas"  aria-expanded="false" aria-controls="navbar">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			            </button>
			              <a class="navbar-brand" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo $logo['url'] ?>"/></a>
			          </div>
					<?php 
						wp_nav_menu( array(
							'menu'              => 'main-nav',
							'theme_location'    => 'main-nav',
							'depth'             => 2,
							'container'         => 'div',
							'container_id'   	=>	'navbar' ,
							'container_class'   => 'sidebar-offcanvas clearfix',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
						?>
					</div><!--/.container-fluid -->
      			</nav>
				<div class="tickets-top"><a href="<?php echo home_url()?>/רכישת-כרטיסים"><img src="<?php echo get_template_directory_uri(); ?>/library/images/tickets-top.png"/></a></div>
			</header>
			<?php if (is_front_page()):?>
					<div class="fullwidth video-container">		
						<video width="100%" height="auto" poster="<?php echo get_field('home_video_poster')?>" autoplay>
			     		   <source src="<?php echo get_field('home_video')?>" type="video/mp4">
			    		</video>	
						<!--iframe id="ytplayer" width="1280" height="720" src="https://www.youtube.com/embed/xUETMecysn4?rel=0&amp;controls=0&amp;volume=0&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;enablejsapi=1" frameborder="0" allowfullscreen></iframe-->
					</div>
			<?php endif;?>			