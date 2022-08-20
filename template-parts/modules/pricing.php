<?php
	$columns = get_field('pricing_columns', 'option'); 
?>
<div class="module pricing">
	<div class="inner desktop show-for-xlarge">
		<div class="grid-container">
			<div class="grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3">
				<?php if($columns):
					foreach($columns as $column) :
						$footnotes = $column['footnotes'];
						$buttons = $column['buttons'];
						$heading = $column['heading'];
						$subheading = $column['sub-heading'];
					?>
						<div class="cell">
							<div class="inner amethyst-bg grid-x flex-dir-column align-justify">
								
								<div class="top">
									<div class="price text-center">
										<h2><?php echo $column['price'];?></h2>
									</div>
									<?php if( !empty($heading) ):?>
									<h3 class="h6"><?php echo $heading;?></h3>
									<?php endif;?>
									<?php if( !empty($subheading) ):?>
									<p><b><?php echo $subheading;?></b></p>
									<?php endif;?>
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
										get_template_part('template-parts/part-button', null, array( 
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
	<div class="amethyst-bg mobile hide-for-xlarge">
		<?php if($columns):
			foreach($columns as $column) :
				$footnotes = $column['footnotes'];
				$buttons = $column['buttons'];
				$heading = $column['heading'];
				$subheading = $column['sub-heading'];
			?>
			<div class="grid-x grid-padding-x">
				<div class="cell small-3 medium-4">
					<div class="price text-center">
						<h2><?php echo $column['price'];?></h2>
					</div>
				</div>
				<div class="right cell small-9 medium-8">
						
					<div class="top">
						<?php if( !empty($heading) ):?>
						<h3 class="h6"><?php echo $heading;?></h3>
						<?php endif;?>
						<?php if( !empty($subheading) ):?>
						<p><b><?php echo $subheading;?></b></p>
						<?php endif;?>
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
							get_template_part('template-parts/part-button', null, array( 
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
