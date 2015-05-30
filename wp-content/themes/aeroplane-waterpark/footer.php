			<footer class="footer" role="contentinfo">
				<div class="top-footer">
					<div class="footer-links">
						<nav role="navigation">
							<?php 
							wp_nav_menu( array(
								'menu'              => 'footer-nav',
								'theme_location'    => 'footer-links',
								'depth'             => 2,
								'container'         => 'div',
								'container_id'   	=>	'navbar' ,
								'container_class'   => 'nav-justified',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
							);
						?>
						</nav>
					</div>
				</div>
				<div id="inner-footer" class="wrap clearfix">

					

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
