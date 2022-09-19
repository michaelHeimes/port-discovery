<?php
	$heading = get_sub_field('heading'); 
	$text = get_sub_field('text'); 
?>
<div class="module calendar">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12">
					<?php if( !empty($heading) ):?>
						<h2><?php echo $heading;?></h2>
					<?php endif;?>
					<?php if( !empty($heading) ):?>
						<h3 class="h5"><?php echo $text;?></h2>
					<?php endif;?>
					<div class="calendar-wrap">
						<?php echo do_shortcode('[tribe_events]');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
