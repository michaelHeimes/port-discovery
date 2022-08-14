<?php
	$heading = get_sub_field('heading'); 
	$layout = get_sub_field('layout'); 
	$logos = get_sub_field('logos'); 
	$rows = get_sub_field('rows'); 
	$button_link = get_sub_field('button_link');
?>
<div class="module supporters">
	<div class="inner dashed">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<?php if( !empty($heading) ):?>
				<div class="cell small-12">
					<h2 class="h5 text-center"><?php echo $heading;?></h2>
				</div>
				<?php endif;?>
				<div class="cell small-12 tablet-10 tablet-offset-1">
					<?php if($layout == 'grid'):?>
					<div class="grid-x grid-padding-x align-center">
						<?php foreach($logos as $logo):?>
							<div class="cell text-center small-6 medium-shrink">
								<div class="img-wrap">
									<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
								</div>
							</div>
						<?php endforeach;?>
					</div>
					<?php endif;?>
					
					<?php if($button_link):?>
					<div class="text-center">
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
