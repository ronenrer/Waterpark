<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="col-sm-9"  role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<section class="main-features clearfix" itemprop="articleBody">
							<div class="row">
						        <div class="col-md-6">
						        	<div class="feature">
							        	<img src="<?php echo get_stylesheet_directory_uri()?>/library/images/restaurant.jpg"/>
							        	<h3>מסעדות בפארק</h3>
							        </div>
						        </div>
						         <div class="col-md-6">
						        	<div class="feature">
							        	<img src="<?php echo get_stylesheet_directory_uri()?>/library/images/attractions.jpg"/>
							        	<h3>אטרקציות בפארק</h3>
							        </div>
						        </div>
						         <div class="col-md-6">
						        	<div class="feature">
							        	<img src="<?php echo get_stylesheet_directory_uri()?>/library/images/activities.jpg"/>
							        	<h3>פעילויות ומופעים</h3>
							        </div>
						        </div>
						         <div class="col-md-6">
						        	<div class="feature">
							        	<img src="<?php echo get_stylesheet_directory_uri()?>/library/images/discounts.jpg"/>
							        	<h3>כרטיסים מוזלים</h3>
							        </div>
						        </div>
						      </div>
							</section>

							<footer class="article-footer">
								<img src="<?php echo get_stylesheet_directory_uri()?>/library/images/home_banner.jpg"/>
							</footer>

						</article>
					<?php endwhile; endif; ?>

					</div>

					<?php get_sidebar(); ?> 
					<div class="home-bottom col-sm-12 clearfix" role="complementary">
						<div class="row">
							<div class="col-md-7">
								<div class="instagram pull-right">
									<h4 class="widgettitle">שפיים באינסטגרם</h4>
									<?php echo do_shortcode('[instagram-feed]');?>
								</div>
								<img class="pull-left" src="<?php echo get_stylesheet_directory_uri()?>/library/images/girls.jpg"/>
							</div>
							<div class="col-sm-12 col-md-5 pull-left">
								<div class="fb-page" data-href="https://www.facebook.com/shefayim" data-width="450" data-height="300" data-hide-cover="true" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/shefayim"><a href="https://www.facebook.com/shefayim">‏פארק המים שפיים‏</a></blockquote></div></div>
							</div>
						</div>
					</div>
				</div>

			</div>

<?php get_footer(); ?>
