<?php
	$theme_color = get_sub_field('theme_color');
	$text_color = get_sub_field('text_color');
	$video_url = get_sub_field('video_url');
	$label = get_sub_field('label');
?>
<div class="module video">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				
				<?php
				// Load value.
				if ( !empty($video_url) ): $iframe = $video_url;?>
				<div class="left cell small-12<?php if( !empty($label) ):?> tablet-8<?php endif;?>">
					<div class="responsive-embed widescreen">
						<?php
						// Use preg_match to find iframe src.
						preg_match('/src="(.+?)"/', $iframe, $matches);
						$src = $matches[1];
						
						// Add extra parameters to src and replace HTML.
						$params = array(
							'controls'  => 1,
							'hd'        => 1,
							'autohide'  => 1
						);
						$new_src = add_query_arg($params, $src);
						$iframe = str_replace($src, $new_src, $iframe);
						
						// Add extra attributes to iframe HTML.
						$attributes = 'frameborder="0" width="1206" height="678"';
						$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
						
						// Display customized HTML.
						echo $iframe;?>
					</div>
				</div>	
				<?php
				endif;
				?>
				
				<?php if( !empty($label) ):?>
					<div class="right cell small-12 tablet-4 grid-x align-middle">
						<div class="text-wrap <?php echo $theme_color;?>-bg grid-x align-middle">
							<div class="inner">
								<h5 class="color-<?php echo $text_color;?>"><?php echo $label;?></h5>
							</div>
						</div>
					</div>
				<?php endif;?>
			
			</div>
		</div>
	</div>
</div>