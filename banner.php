<div class="flex-banner-subpage">
		<?php  $post_thumbnail_id = get_post_thumbnail_id();
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
					
	<div class="flex-banner-subpage-image"style="background-image:url(<?php echo $post_thumbnail_url; ?>)">  			
	</div>
	
</div>	