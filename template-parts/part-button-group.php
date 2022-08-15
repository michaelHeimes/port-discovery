<?php 
	$buttons = $args['data']['btns'];
;?>
<div class="buttons grid-x grid-padding-x">
	<?php foreach($buttons as $button):
		$button_link = $button['button_link'];
		$button_style = $button['button_link']['button_style'];
	?>
	<div class="cell shrink style-<?php echo $button_style;?>">
		<?php get_template_part('template-parts/part-button', null, array( 
			'data'  => array(
				'btn' => $button_link,
			)) 
		);?>
	</div>
	<?php endforeach?>
</div>
