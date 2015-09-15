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
							<?php if (have_rows('home_features')):?>
							<section class="main-features clearfix" itemprop="articleBody">
							<div class="row">
								<?php while( have_rows('home_features') ): the_row(); 
								$feature_title = get_sub_field('home_feature_title');
								$feature_pic =  get_sub_field('home_feature_pic');
								$feature_link =  get_sub_field('home_feature_link');
								?>
						        <div class="col-xs-6 col-sm-12 col-md-6">
						        	<div class="feature">
							        	<img src="<?php echo $feature_pic['url']?>"/>
							        	<h3><?php echo $feature_title ?></h3>
							        	<a class="view" href="<?php echo $feature_link ?>"/>קראו עוד</a>
							        </div>
						        </div>
						    <?php endwhile;?>
						      </div>
							</section>
							<?php endif; ?>

							<footer class="article-footer">
								<?php echo do_shortcode('[metaslider id="263"]')?>
							</footer>

						</article>
					<?php endwhile; endif; ?>

					</div>

					<?php get_sidebar(); ?> 
					<div class="home-bottom col-sm-12 clearfix" role="complementary">
						<div class="row">
							<div class="col-xs-6 col-sm-12 col-md-8 col-lg-7">
								<div class="instagram pull-right">
									<h4 class="widgettitle">שפיים באינסטגרם</h4>
									<?php echo do_shortcode('[instagram-feed]');?>
								</div>
								<img class="selfy-girl pull-left hidden-xs hidden-sm" src="<?php echo get_field('selfy')?>"/>
							</div>
							<div class="col-xs-6 col-sm-12 col-md-4 col-lg-5 pull-left">
								<div class="fb-page embed-responsive" data-href="<?php echo get_field('facebook',option) ?>" data-width="450" data-height="300" data-hide-cover="true" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/shefayim"><a href="https://www.facebook.com/shefayim">‏פארק המים שפיים‏</a></blockquote></div></div>
							</div>
						</div>
					</div>
				</div>

			</div>

<?php get_footer(); ?>