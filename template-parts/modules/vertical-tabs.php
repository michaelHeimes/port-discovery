<?php
	$row = get_row_index();
	$tabs = get_sub_field('tabs'); 
?>
<div class="module vertical-tabs">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="left cell small-12 medium-4">
					<ul class="tabs vertical" data-tabs id="vertical-tabs-<?php echo $row;?>">
						<?php 
							$tab_index = 1;
								if( !empty($tabs) ):
									foreach($tabs as $tab):
									$tab_title = $tab['tab_title'];
						?>				
										<li class="tabs-title<?php if($tab_index == 1):?> is-active<?php endif;?>"><a class="button white-bg outlined outline-amethyst" href="#tabs-<?php echo $row;?>-panel-<?php echo $tab_index;?>" aria-selected="true"><?php echo $tab_title ;?></a></li>
							<?php $tab_index++; endforeach;
						endif;?>
					</ul>
				</div>
				<div class="right cell small-12 medium-8">
					<div class="tabs-content" data-tabs-content="vertical-tabs-<?php echo $row;?>">
						<?php 
							$tab_index = 1;
								if( !empty($tabs) ):
									foreach($tabs as $tab):
									$tab_content = $tab['tab_content'];
						?>				
										<div class="tabs-panel<?php if($tab_index == 1):?> is-active<?php endif;?>" id="tabs-<?php echo $row;?>-panel-<?php echo $tab_index;?>">
											<div class="text-wrap">
												<?php echo $tab_content ;?>
											</div>
										</div>
							<?php $tab_index++; endforeach;
						endif;?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
