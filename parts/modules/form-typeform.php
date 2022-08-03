<?php
	$heading = get_sub_field('heading');
	$text= get_sub_field('text');
?>
<div class="module list-circle-links-dates">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="cell small-12">
					<?php if( !empty($heading) ):?>
						<h2 class="h5"><?php echo $heading;?></h2>
					<?php endif;?>
					<?php if( !empty($text) ):?>
						<p><?php echo $text?></p>
					<?php endif;?>			
						form here
				</div>	
			</div>
		</div>
	</div>
</div>