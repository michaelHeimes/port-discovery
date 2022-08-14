<?php
	$background_color = get_sub_field('background_color');
	$copy = get_sub_field('copy'); 
?>
<div class="module colored-callout">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12">
					<div class="inner <?php echo $background_color ;?>-bg">
						<div class="text-wrap color-white"><?php echo $copy;?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
