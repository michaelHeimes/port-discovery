<?php
	$heading = get_sub_field('heading');
	$accordion_items = get_sub_field('accordion_items');
	$button_link = get_sub_field('button_link');
	$qas = get_sub_field('qas');
?>
<div class="module accordion">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="cell small-12">
					<?php if( !empty($heading) ):?> 
					<h2 class="text-center"><?php echo $heading;?></h2>
					<?php endif;?>
					<?php if( !empty($qas) ):?>
						<ul class="accordion" data-accordion data-allow-all-closed="true">
							<?php foreach($qas as $qa):
								$title = get_the_title( $qa->ID );
								$content = get_field('content', $qa->ID );
							?>
							<li class="accordion-item" data-accordion-item>
								<a href="#" class="accordion-title"><?php echo $title;?></a>
								<div class="accordion-content" data-tab-content>
									<?php echo $content;?>
								</div>
							</li>
							<?php endforeach;?>
						</ul>
					<?php endif;?>
					<?php if(!empty($button_link)):?>
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
