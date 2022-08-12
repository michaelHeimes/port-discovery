<?php 
	$buttons = $args['data']['btns'];
;?>
<div class="buttons grid-x grid-padding-x">
	<?php foreach($buttons as $button):
		$button_link = $button['button_link'];
	?>
	<div class="cell shrink">
		<?php get_template_part('parts/part-button', null, array( 
			'data'  => array(
				'btn' => $button_link,
			)) 
		);?>
	</div>
	<?php endforeach?>
</div>
