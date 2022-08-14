<?php
	$background_color = get_sub_field('background_color'); 
	$heading = get_sub_field('heading'); 
	$text = get_sub_field('text'); 
	$buttons = get_sub_field('button_links'); 
?>
<div class="module cta-color">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 large-10 large-offset-1 text-center">
				<div class="inner <?php echo $background_color;?>-bg">
					<?php if( !empty($heading) ):?>
						<h2 class="h4"><?php echo $heading;?></h2>
					<?php endif;?>
					<?php if( !empty($text) ):?>
						<p><?php echo $text;?></p>
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
	</div>
</div>
