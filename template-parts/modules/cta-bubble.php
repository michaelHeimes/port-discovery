<?php
	$allignment = get_sub_field('alignment'); 
	$heading = get_sub_field('heading'); 
	$copy = get_sub_field('copy');
	$button_link = get_sub_field('button_link');
?>
<div class="module cta-bubble alignment-<?php echo $allignment;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner bordered border-purple">
					<div class="grid-x grid-padding-x align-middle">
						<div class="left cell small-12 tablet-auto">
							<?php if( !empty($heading)):?>
								<h2 class="h5"><?php echo $heading;?></h2>
							<?php endif;?>
							<?php if( !empty($copy)):?>
								<div class="text-wrap color-purple">
									<?php echo $copy;?>
								</div>
							<?php endif;?>
						</div>
						<?php if($button_link):?>
						<div class="right cell small-12 tablet-shrink">
							<?php get_template_part('template-parts/part-button', null, array( 
								'data'  => array(
									'btn' => $button_link,
								)) 
							);?>
						</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
