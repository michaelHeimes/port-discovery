<?php
	$heading = get_field('heading', 'option'); 
?>
<div class="module form-email-signup cta-bubble">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner bordered border-purple">
					<div class="grid-x grid-padding-x align-middle">
						<div class="left cell small-12 tablet-auto">
							<?php if( !empty($heading)):?>
								<h2 class="h5"><?php echo $heading;?></h2>
							<?php endif;?>
						</div>
						<div class="right cell small-12 tablet-shrink">
							Form				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
