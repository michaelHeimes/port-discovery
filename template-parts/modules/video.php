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
							<h5 class="color-<?php echo $text_color;?>"><?php echo $label;?></h5>
						</div>
					</div>
				<?php endif;?>
				
				<?php if($links):
					foreach($links as $link) :

					?>
						<div class="cell">
							<a class="inner" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<div class="circle <?php echo $theme_color;?>-bg">
									<div class="date text-center">
										<h5><?php echo $date->format('M '); ?></h5>
										<h3><?php echo $date->format('m'); ?></h3>
									</div>
								</div>
								<h3 class="h7"><?php echo $heading;?></h3>
								<p class="h7 color-<?php echo $text_color;?>"><u><?php echo esc_html( $link_title ); ?></u></p>
								<p><?php echo $text;?></p>
							</a>
						</div>
					<?php endforeach;
				endif;?>				
			</div>
		</div>
	</div>
</div>