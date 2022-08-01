<?php
	$heading = get_field('heading', 'option'); 
?>
<div class="module form-email-signup">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="left cell small-12 medium-5 tablet-4">
					<?php if( !empty($heading)):?>
						<h2 class="h5"><?php echo $heading;?></h2>
					<?php endif;?>
				</div>
				<div class="right cell small-12 medium-7 tablet-8">
					Form				
				</div>
			</div>
		</div>
	</div>
</div>
