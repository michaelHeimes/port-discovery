<?php
	$module_row = get_row_index();
	$accordion_categories = get_sub_field('accordion_categories'); 
	$acc_cat = 1;
	$tab_nav = 1;
	$tab_cont = 1;
?>
<div class="module accordion-sidebar">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				
				<div class="left cell small-12 tablet-5 large-4">
					<ul class="accordion" data-accordion data-allow-all-closed="true">

					<?php foreach ($accordion_categories as $accordion_category):
						$category_name = $accordion_category['category_name'];
						$accordion_items = $accordion_category['accordion_items'];
					?>
					
							
						  <li class="accordion-item<?php if($acc_cat == 1):?> is-active<?php endif;?>" data-accordion-item>
							<a href="#" class="accordion-title"><?php echo $category_name;?></a>

							<div class="accordion-content" data-tab-content>
								
								<ul class="tabs vertical" data-tabs id="a-tabs-<?php echo $module_row;?>">
								<?php foreach($accordion_items as $accordion_item):?>
									<li class="tabs-title<?php if($tab_nav == 1):?> is-active<?php endif;?>"><a href="#panel-<?php echo $module_row;?>-<?php echo $tab_nav;?>"><?php echo $accordion_item['title'];?></a></li>
								<?php $tab_nav++; endforeach;?>
								</ul>
								
							</div>
							
						  </li>
						  
					
					<?php $acc_cat++; endforeach;?>
					</ul>

				</div>
				
				<div class="right cell small-12 tablet-7 large-7 large-offset-1">
					<div class="tabs-content" data-tabs-content="a-tabs-<?php echo $module_row;?>">
						<?php  foreach ($accordion_categories as $accordion_category):
							$category_name = $accordion_category['category_name'];
							$heading = $accordion_category['category_heading'];
							$accordion_items = $accordion_category['accordion_items'];
						?>
						
							<?php foreach($accordion_items as $accordion_item):
								$sub_heading = $accordion_item['sub-heading'];
								$content = $accordion_item['content'];
								$contact_card = $accordion_item['contact_card']
							?>
								<div class="tabs-panel<?php if($tab_cont == 1):?> is-active<?php endif;?>" id="panel-<?php echo $module_row;?>-<?php echo $tab_cont;?>">
									<?php if( !empty($heading) ):?>
										<h2 class="h3"><?php echo $heading;?></h2>
									<?php endif;?>
									<?php if( !empty($sub_heading) ):?>
										<h3 class="h5"><?php echo $sub_heading;?></h3>
									<?php endif;?>
									<?php if( !empty($content) ):?>
										<p><?php echo $content;?><p>
									<?php endif;?>
									<?php if( !empty($contact_card) ):
										$photo = $contact_card['photo'];
										$name = $contact_card['name'];
										$phone_number = $contact_card['phone_number'];
										$email_address = $contact_card['email_address'];
									?>
										<div class="contact-person grid-x grid-padding-x align-middle">
											<?php if( !empty($photo) ):?>
												<div class="cell shrink">
													<div class="img-wrap">
														<img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
													</div>
												</div>
											<?php endif;?>
											<div class="cell<?php if( !empty($photo) ):?> auto<?php else:?> small-12<?php endif;?>">
												<div><?php echo $name;?><br><a href="tel:"><?php echo $phone_number;?></a> | <a href="mailto:<?php echo $email_address;?>"><?php echo $email_address;?></a></div>
											</div>
										</div>
									<?php endif;?>
								</div>
							<?php $tab_cont++; endforeach;?>
													
						<?php endforeach;?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>