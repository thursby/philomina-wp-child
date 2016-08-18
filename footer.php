		<footer>
			<div id="footer-sidebar" class="secondary c_align">
				<div id="footer-sidebar1">
				<?php
				if(is_active_sidebar('footer-sidebar-1')){
				dynamic_sidebar('footer-sidebar-1');
				}
				?>
				</div>
				<div id="footer-sidebar2">
				<?php
				if(is_active_sidebar('footer-sidebar-2')){
				dynamic_sidebar('footer-sidebar-2');
				}
				?>
				</div>
				<div id="footer-sidebar3">
				<?php
				if(is_active_sidebar('footer-sidebar-3')){
				dynamic_sidebar('footer-sidebar-3');
				}
				?>
				</div>
			</div>
			<div id="bottomline" class="c_align">
				<div class="copy">
					<p>&copy; <?php echo date("Y") . " "; bloginfo( 'name' ); ?>. <?php _e( "All rights reserved", "philomina" ) ?>.</p>
				</div>
				<div class="credits">
					<p>
						<?php philomina_creditLink() ?>
					</p>
				</div>
			</div>
		</footer>

	</section>

	<div class="preloader loadIn">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/preloader.GIF' ); ?>">
	</div>

	<nav class="hidden-menu">
		<div>
			<a href="#" class="close-menu"><?php _e( "Close", "philomina" ) ?> <i class="fa fa-close"></i></a>
 			<?php
				wp_nav_menu('theme_location=main_menu');
 			?>
		</div>
	</nav>
	
	<?php wp_footer() ?>

</body>
</html>
