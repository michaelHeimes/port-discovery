<?php
	$layout = get_sub_field('layout'); 
	$heading = get_sub_field('heading'); 
	$text = get_sub_field('text');
	$button_link = get_sub_field('button_link');
	$left_list_rows = get_sub_field('left_list');
	$list_rows = get_sub_field('list');
?>
<div class="module list-link-list layout-<?php echo $layout;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner outlined border-purple br-30">
					<div class="grid-x grid-padding-x align-middle">
						
						<?php if($layout == 'copy-left'):?>
							<div class="left cell small-12 tablet-6">
								<?php if( !empty($heading)):?>
									<h2 class="h3"><?php echo $heading;?></h2>
								<?php endif;?>
								<?php if( !empty($text)):?>
									<h3 class="h5"><?php echo $text;?></h3>
								<?php endif;?>
								<?php if($button_link):?>
									<div class="show-for-tablet"
									<?php get_template_part('template-parts/part-button', null, array( 
										'data'  => array(
											'btn' => $button_link,
										)) 
									);?>
								<?php endif;?>
							</div>
						<?php endif;?>
						
						<?php if($layout == 'copy-top'):?>
							
							<div class="cell small-12 text-center">
								<?php if( !empty($heading)):?>
									<h2 class="h3"><?php echo $heading;?></h2>
								<?php endif;?>
								<?php if( !empty($text)):?>
									<h3 class="h5"><?php echo $text;?></h3>
								<?php endif;?>
							</div>
							
							<?php if($left_list_rows):?>
							<div class="left cell small-12 tablet-6">
								<ul class="list-links">
								<?php foreach($left_list_rows as $left_list_row):
									$icon = $left_list_row['icon'];
									$link = $left_list_row['link'];
									$link_type = $link['type'];
									
									
									
									if($link_type == 'link') {
										$violet_link = $link['violet_link'];
									}
									
									if($link_type == 'contact-info') {
										$label_link = $link['label_link'];
										$label = $label_link['label'];
										$link_url = $label_link['link']['url'];
									}
									
								?>
									<li>
										<a  class="grid-x grid-padding-x align-middle color-amethyst" href="<?php echo esc_url($violet_link['url']);?>">
											
											<?php
											$image = $icon;
											if( !empty( $image ) ): ?>
											<div class="icon-wrap small cell shrink">
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											</div>
											<?php endif; ?>
											
											<div class="cell auto">
												<?php if($link_type == 'link'):?>
													<p class="h5 color-amethyst"><?php echo esc_html( $violet_link['title'] ); ?></p>
												<?php endif;?>
												
												<?php if($link_type == 'contact-info'):?>
													<p><b><?php echo esc_html( $label_link['label'] ); ?></b><br>
													<?php echo esc_html( $link['title'] ); ?></p>
												<?php endif;?>
											</div>
											
										</a>
									</li>
								<?php endforeach;?>
								</ul>
							</div>
							<?php endif;?>
						<?php endif;?>
						
						<?php if($list_rows):?>
						<div class="right cell small-12 tablet-6">
							<ul class="list-links">
							<?php foreach($list_rows as $list_row):
								$icon = $list_row['icon'];
								$link = $list_row['link'];
								$link_type = $link['type'];
								
								
								
								if($link_type == 'link') {
									$violet_link = $link['violet_link'];
								}
								
								if($link_type == 'contact-info') {
									$label_link = $link['label_link'];
									$label = $label_link['label'];
									$link = $label_link['link'];
								}
		
								
							?>
								<li>
									<a  class="h5 grid-x grid-padding-x align-middle" href="<?php echo esc_url($violet_link['url']);?>">
									
										<?php
										$image = $icon;
										if( !empty( $image ) ): ?>
										<div class="icon-wrap small cell shrink">
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>
										
										<div class="cell auto">
											<?php if($link_type == 'link'):?>
												<p class="h5 color-amethyst"><?php echo esc_html( $violet_link['title'] ); ?></p>
											<?php endif;?>
											
											<?php if($link_type == 'contact-info'):?>
												<p><b><?php echo esc_html( $label_link['label'] ); ?></b><br>
												<?php echo esc_html( $link['title'] ); ?></p>
											<?php endif;?>
										</div>
		
									</a>
								</li>
							<?php endforeach;?>
							</ul>
							<?php if($button_link):?>
								<div class="btn hide-for-tablet">
								<?php get_template_part('template-parts/part-button', null, array( 
									'data'  => array(
										'btn' => $button_link,
									)) 
								);?>
								</div>
							<?php endif;?>
						</div>
						<?php endif;?>
						
						
						<?php if($layout == 'copy-top'):?>
							<?php if($button_link):?>
								<div class="btn-wrap copy-top-btn cell small-12 text-center">
								<?php get_template_part('template-parts/part-button', null, array( 
									'data'  => array(
										'btn' => $button_link,
									)) 
								);?>
								</div>
							<?php endif;?>
						<?php endif;?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
