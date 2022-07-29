<?php
	$home_slider = get_sub_field('slides'); 
?>
<div class="home-banner-slider">
	<?php foreach($home_slider as $home_slide):?>
		<div class="slide btn-color-<?php echo $home_slide['button_color'];?>" style="background-image: url(<?php echo $home_slide['background_image']['url'];?>); color: <?php echo $home_slide['text_color'];?>)">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="cell">
						<?php if($home_slide['heading']):?>
						<h2><?php echo $home_slide['heading'];?></h2>
						<?php endif;?>
						<?php if($home_slide['text']):?>
						<p><?php echo $home_slide['text'];?></p>
						<?php endif;?>
						<?php if($home_slide_buttons = $home_slide['buttons']):?>
							<div class="grid-x grid-padding-x">
							<?php 
							foreach($home_slide_buttons as $home_slide_button):
								$link = $home_slide_button['button_link'];
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';?>
							<div class="cell shrink">
								<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							</div>
						<?php endforeach;
						endif;?>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach;?>
</div>