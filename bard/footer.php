		</div><!-- .page-content -->

		<!-- Page Footer -->
		<footer id="page-footer" class="<?php echo esc_attr(bard_options( 'general_footer_width' )) === 'boxed' ? 'boxed-wrapper ': ''; ?>clear-fix">
				
			<?php

			// Instagram Widget
			get_template_part( 'templates/sidebars/instagram', 'widget' );

			// Footer Socials
			if ( bard_options( 'page_footer_show_socials' ) === true ) {
				bard_social_media( 'footer-socials', true );
			}
			
			// Footer Widgets
			echo get_template_part( 'templates/sidebars/footer', 'widgets' );

			?>
			
			<div class="footer-copyright">

				<div class="page-footer-inner <?php echo bard_options( 'general_footer_width' ) === 'contained' ? 'boxed-wrapper': ''; ?>">
					
					<!-- Footer Logo -->
					<?php if ( bard_options( 'page_footer_logo' ) != '' ) : ?>
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo('name') ); ?>">
							<img src="<?php echo esc_url( wp_get_attachment_url( bard_options( 'page_footer_logo' ) ) ); ?>" alt="<?php esc_attr( bloginfo('name') ); ?>">
						</a>
					</div>
					<?php endif; ?>
					
					
			
					<?php if ( bard_options('page_footer_show_scrolltop') === true ) : ?>
					<span class="scrolltop">
						<span class="icon-angle-up"></span>
						<span><?php esc_html_e( 'Back to top', 'bard' ); ?></span>
					</span>
					<?php endif; ?>
					
				</div>

			</div><!-- .boxed-wrapper -->

		</footer><!-- #page-footer -->

	</div><!-- #page-wrap -->

<?php wp_footer(); ?>

</body>
</html>