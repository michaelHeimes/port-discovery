<?php
	$heading = get_sub_field('heading'); 
	$links = get_sub_field('links'); 
	$footnote = get_sub_field('footnote'); 
?>
<div class="module list-circle-links-dates circle-links-slider text-center">
	<div class="inner">
		<div class="grid-container">
			<?php if( !empty($heading ) ):?>
			<div class="grid-x grid-padding-x">
				<div class="cell small-12 text-center">
					<h2 class="h5"><?php echo $heading ;?></h2>
				</div>
			</div>
			<?php endif;?>
			<div class="small-up-1 medium-up-2 tablet-up-3 large-up-4">
				<?php if($links):
					foreach($links as $link) :
						$circle_color = $link['circle_color'];
						$circle_text_color = $link['circle_text_color'];
						$link_date = $link['date'];
						$date_string = $link_date;
						$date = DateTime::createFromFormat('Ymd', $date_string);
						$heading = $link['heading'];
						$text = $link['text'];
						$link_data = $link['link'];
						$link_url = $link_data['url'];
						$link_title = $link_data['title'];
						$link_target = $link_data['target'] ? $link['target'] : '_self';
					?>
						<div class="cell">
							<a class="inner" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<div class="circle <?php echo $circle_color;?>-bg">
									<div class="date text-center">
										<h5><?php echo $date->format('M '); ?></h5>
										<h3><?php echo $date->format('m'); ?></h3>
									</div>
								</div>
								<h3 class="h7"><?php echo $heading;?></h3>
								<p class="h7 color-<?php echo $circle_text_color;?>"><u><?php echo esc_html( $link_title ); ?></u></p>
								<p><?php echo $text;?></p>
							</a>
						</div>
					<?php endforeach;
				endif;?>				
			</div>
			<?php if( !empty($footnote) ):?>
			<div class="grid-x grid-padding-x">
				<div class="cell small-12 text-center">
					<p><small><?php echo $footnote ;?></small></p>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>