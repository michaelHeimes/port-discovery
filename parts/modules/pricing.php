<?php
	$columns = get_field('pricing_columns', 'option'); 
?>
<div class="module pricing">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3">
				<?php if($columns):
					foreach($columns as $column) :
						$footnotes = $column['footnotes'];
						$buttons = $column['buttons'];
					?>
						<div class="cell">
							<div class="inner amethyst-bg">
								
								<div class="top">
									<div class="price text-center">
										<h2><?php echo $column['price'];?></h2>
									</div>
									<h3 class="h6"><?php echo $column['heading'];?></h3>
									<p><b><?php echo $column['sub-heading'];?></b></p>
									<p><?php echo $column['text'];?></p>
									<?php if($footnotes):?>
										<ul>
										<?php foreach($footnotes as $footnote):?>
											<li><small><?php echo $footnote['text'];?></small></li>
										<?php endforeach;?>
										</ul>
									<?php endif;?>
								</div>
								
								<?php if($buttons):?>
								<div class="bottom">
									<?php foreach($buttons as $button):
										$button_link = $button['button_link'];										
										get_template_part('parts/part-button', null, array( 
											'data'  => array(
												'btn' => $button_link,
											)) 
										);
									endforeach;?>
								</div>
								<?php endif;?>
								
							</div>
						</div>
					<?php endforeach;
				endif;?>				
			</div>
		</div>
	</div>
</div>
