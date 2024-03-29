<div class="post-bubbles">

	<a href="<?php the_permalink(); ?>" class="format-bubble" title="<?php the_title_attribute(); ?>"></a>
		
	<?php if ( is_sticky() ) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php _e( 'Sticky post', 'lingonberry'); ?>: <?php the_title_attribute(); ?>" class="sticky-bubble"><?php _e( 'Sticky post', 'lingonberry'); ?></a>
	<?php endif; ?>

</div>

<div class="content-inner">

	<div class="post-header">
	
		<?php if ( has_post_thumbnail() ) : ?>
	
			<div class="featured-media">
			
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				
					<?php the_post_thumbnail('post-image'); ?>
					
					<?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>
									
						<div class="media-caption-container">
						
							<p class="media-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
							
						</div>
						
					<?php endif; ?>
					
				</a>
						
			</div> <!-- /featured-media -->
				
		<?php endif; ?>
		
	    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	    
		<div class="post-meta">
		
			<span class="post-date"><a href="<?php the_permalink(); ?>" title="<?php the_time(get_option('time_format')); ?>"><?php the_time(get_option('date_format')); ?></a></span>
			
			<span class="date-sep"> / </span>
				
			<span class="post-author"><?php the_author_posts_link(); ?></span>
			
			<?php if( is_sticky() && !has_post_thumbnail() ) { ?> 
			
				<span class="date-sep"> / </span>
			
				<?php _e('Sticky', 'lingonberry'); ?>
			
			<?php } ?>
			
			<?php edit_post_link(__('Edit', 'lingonberry'), '<span class="date-sep"> / </span>'); ?>
									
		</div> <!-- /post-meta -->
	    
    </div> <!-- /post-header -->
										                                    	    
    <div class="post-content">
    	    		            			            	                                                                                            
		<?php the_content(); ?>
				
		<?php wp_link_pages(); ?>
					        
    </div> <!-- /post-content -->
    
	<div class="clear"></div>
	
	<?php if (is_single() ) : ?>
	
		<div class="post-cat-tags">
					
			<p class="post-categories"><?php _e('Categories:', 'lingonberry'); ?> <?php the_category(', '); ?></p>
		
			<p class="post-tags"><?php the_tags(__('Tags:', 'lingonberry') . ' ',', '); ?></p>
		
		</div>
		
	<?php endif; ?>
        
</div> <!-- /post content-inner -->

<div class="clear"></div>