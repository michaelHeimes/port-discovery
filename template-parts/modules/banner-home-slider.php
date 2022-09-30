<?php
	$home_slider = get_sub_field('slides'); 
?>
<header class="banner banner-home-slider display-on-load">
	<?php $i = 1; foreach($home_slider as $home_slide):
		$slide_title = $home_slide['slide_title'];
		$title_bg_color = $home_slide['slide_title_background_color'];
		$heading = $home_slide['heading'];
		$text = $home_slide['text'];
		$buttons = $home_slide['button_links']; 
	?>
		
		<div class="slide <?php if($i > 1) { echo 'closed';} if($i == 1){echo 'first';}?>">
			<div class="inner fh" style="background-image: url(<?php echo $home_slide['background_image']['url'];?>)">
				<div class="text-wrap fh">
					<div class="grid-container fh">
						<div class="grid-x grid-padding-x fh align-middle">
							<div class="cell small-12 large-9">
								<?php if( !empty($heading) ):?>
								<h2 class="color-white"><?php echo $heading?></h2>
								<?php endif;?>
								<?php if( !empty($text) ):?>
								<p class="color-white"><?php echo $text;?></p>
								<?php endif;?>
								<?php if( !empty($buttons) ):?>
									<?php get_template_part('template-parts/part-button-group', null, array( 
										'data'  => array(
											'btns' => $buttons,
										)) 
									);?>
								<?php endif;?>
							</div>
						</div>
					</div>
					<div class="spacer"></div>
				</div>
			</div>
		</div>		
		<div class="title color-white h6 <?php if($i == 1) {echo 'active ';}  echo $title_bg_color;?>-bg">
			<b class="show-for-medium"><?php echo $slide_title;?></b>
		</div>
		
	<?php $i++; endforeach;?>
</header>