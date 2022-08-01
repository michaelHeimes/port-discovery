<?php
	$layout = get_sub_field('layout'); 
	$heading = get_sub_field('heading'); 
	$text = get_sub_field('text');
	$button_link = get_sub_field('button_link');
	$list_rows = get_sub_field('list');
?>
<div class="module list-link-list layout-<?php echo $layout;?>">
	<div class="inner outline">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="left cell small-12 tablet-6">
					<?php if( !empty($heading)):?>
						<h2 class="h3"><?php echo $heading;?></h2>
					<?php endif;?>
					<?php if( !empty($text)):?>
						<h3 class="h5"><?php echo $text;?></h3>
					<?php endif;?>
					<?php if($button_link):
						get_template_part('parts/part-button', null, array( 
							'data'  => array(
								'btn' => $button_link,
							)) 
						);
					endif;?>
				</div>
				<?php if($list_rows):?>
				<div class="right cell small-12 tablet-6">
					<ul>
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
							<a  class="h5 grid-x grid-padding-x align-middle color-amethyst" href="<?php echo esc_url($label_link['url']);?>">
								<?php
								$image = $icon;
								if( !empty( $image ) ): ?>
								<div class="icon-wrap small cell shrink">
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif; ?>
								<div class="cell auto">
									<?php echo esc_html( $violet_link['title'] ); ?>
								</div>
							</a>
						</li>
					<?php endforeach;?>
					</ul>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
