<!--<?php if ( is_active_sidebar( 'footer-a' ) || is_active_sidebar( 'footer-b' ) || is_active_sidebar( 'footer-c' ) ) : ?>

	<div class="footer section">
		
		<div class="footer-inner section-inner">
		
			<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
			
				<div class="footer-a widgets">
			
					<?php dynamic_sidebar( 'footer-a' ); ?>
					
					<div class="clear"></div>
					
				</div>
				
			<?php endif; ?> <!-- /footer-a -->
				
<!--			<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>
			
				<div class="footer-b widgets">
			
					<?php dynamic_sidebar( 'footer-b' ); ?>
					
					<div class="clear"></div>
					
				</div>
							
			<?php endif; ?> <!-- /footer-b -->
								
<!--			<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>
			
				<div class="footer-c widgets">
			
					<?php dynamic_sidebar( 'footer-c' ); ?>
					
					<div class="clear"></div>
					
				</div>
				
			<?php endif; ?> <!-- /footer-c -->
			
<!--			<div class="clear"></div>
		
		</div> <!-- /footer-inner -->
	
<!--	</div> <!-- /footer -->

<!-- <?php endif; ?> -->

<div class="credits section">

	<div class="credits-inner section-inner">

		<p class="credits-left">
			 <a href="https://greenticket.dk/termsOfService">Handelsbetingelser</a>
			 <br />
			 <a href="https://greenticket.dk/termsOfEvents">Eventbetingelser</a>
			 <br />
			 <a href="https://greenticket.dk/privacy">Privatpolitik</a>
			 <br />
			 <a href="https://greenticket.dk/prices">Priser</a>
			 <br />
			 <a href="https://greenticket.dk/faq">FAQ</a>

		</p>
		
		<p class="credits-right">
			<a title="<?php _e('To the top', 'lingonberry'); ?>" class="tothetop"><?php _e('Up', 'lingonberry' ); ?> &uarr;</a>
		</p>
		
		<div class="clear"></div>
		<?php dynamic_sidebar( 'footer-c' ); ?>
		<p class="credits-center" style="text-align: center; font-size: 10px;">
			&copy; <span><?php _e('Copyright', 'lingonberry'); ?></span> <a href="https://www.greenticket.dk" title="<?php bloginfo('name'); ?>">Greenticket Denmark ApS</a> <?php echo date("Y") ?>
		</p>
	</div> <!-- /credits-inner -->
	

</div> <!-- /credits -->



<?php wp_footer(); ?>

</body>
</html>